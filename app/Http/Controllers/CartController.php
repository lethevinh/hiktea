<?php

namespace App\Http\Controllers;

use App\Exceptions\CouponCodeUnavailableException;
use App\Exceptions\InvalidRequestException;
use App\Models\CouponCode;
use App\Models\Order;
use App\Models\UserAddress;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\AddCartRequest;
use App\Models\ProductSku;
use App\Services\CartService;

class CartController extends Controller
{
    protected $cartService;

    // 利用 Laravel 的自动解析功能注入 CartService 类
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(Request $request)
    {
        $cartItems = $this->cartService->get();
        $addresses = $request->user()->addresses()->orderBy('last_used_at', 'desc')->get();

        return view('cart.page', ['cartItems' => $cartItems, 'addresses' => $addresses,'categories' => $this->getCategories()]);
    }

    public function page(Request $request)
    {
        return view('cart.page', ['categories' => $this->getCategories()]);
    }

    public function add(AddCartRequest $request)
    {
        $this->cartService->add($request->input('sku_id'), $request->input('amount'));

        return [];
    }

    public function addToCart(Request $request){
        $input = $request->all();
        $order = \DB::transaction(function () use ($input) {
            $items = $input['cart']['items'];
            // 创建一个订单
            $order   = new Order([
                'payment_method' => $input['payment_method'],
                'remark'=>$input['comment'],
                'address'      => [
                    'address'       =>  $input['address_1'],
                    'zip'           => '',
                    'contact_name'  =>  $input['fullname'],
                    'contact_phone' =>  $input['telephone'],
                    'contact_email' =>  $input['email'],
                ],
                'total_amount' => 0,
            ]);
            // 订单关联到当前用户
//            $order->user()->associate($user);
            // 写入数据库
            $order->save();

            $totalAmount = 0;
            // 遍历用户提交的 SKU
            foreach ($items as $data) {
                $sku  = ProductSku::find($data['sku_id']);
                // 创建一个 OrderItem 并直接与当前订单关联
                $item = $order->items()->make([
                    'amount' => intval($data['qty']),
                    'price'  => floatval($sku->price),
                ]);
                $item->product()->associate($sku->product_id);
                $item->productSku()->associate($sku);
                $item->save();
                $totalAmount += floatval($sku->price) * intval($data['qty']);
                if ($sku->decreaseStock($data['qty']) <= 0) {
                    throw new InvalidRequestException('Hàng tồn kho không đủ');
                }
            }
            if (!empty($input['coupon_code'])) {
                $coupon = CouponCode::where('code', $input['coupon_code'])->first();
                if ($coupon){
                    // 总金额已经计算出来了，检查是否符合优惠券规则
//                    $coupon->checkAvailable($user, $totalAmount);
                    // 把订单金额修改为优惠后的金额
                    $totalAmount = $coupon->getAdjustedPrice($totalAmount);
                    // 将订单与优惠券关联
                    $order->couponCode()->associate($coupon);
                    // 增加优惠券的用量，需判断返回值
                    if ($coupon->changeUsed() <= 0) {
                        throw new CouponCodeUnavailableException('该优惠券已被兑完');
                    }
                }
            }
            // 更新订单总金额
            $order->update(['total_amount' => $totalAmount]);

            // 将下单的商品从购物车中移除
            $skuIds = collect($items)->pluck('sku_id')->all();
//            app(CartService::class)->remove($skuIds);
            return $order;
        });
        $order->link= $order->toLink();
        return response()->json($order);
    }
    public function remove(ProductSku $sku, Request $request)
    {
        $this->cartService->remove($sku->id);

        return [];
    }
}
