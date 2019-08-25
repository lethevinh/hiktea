@extends('layouts.page')
@section('title', 'Danh sách đặt hàng')

@section('content')
<div class="row">
<div class="col-lg-10 offset-lg-1">
<div class="card">
  <div class="card-header">Order List</div>
  <div class="card-body">
    <ul class="list-group">
      @foreach($orders as $order)
        <li class="list-group-item">
          <div class="card">
            <div class="card-header">
                <h4 class="" style="font-weight: bold"> Order Number：#{{ $order->no }} </h4>
              <span class="float-right">{{ $order->created_at->format('Y-m-d H:i:s') }}</span>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                <tr>
                  <th>Product information</th>
                  <th class="text-center">Unit price</th>
                  <th class="text-center">Quantity</th>
                  <th class="text-center">Total order price</th>
                  <th class="text-center">status</th>
                  <th class="text-center">operating</th>
                </tr>
                </thead>
                @foreach($order->items as $index => $item)
                  <tr>
                    <td class="product-info">
                      <div class="preview">
                        <a target="_blank" href="{{ route('products.show', [$item->product_id]) }}">
                          <img style="height: 100px" src="{{ $item->product->image_url }}">
                        </a>
                      </div>
                      <div>
                        <span class="product-title">
                           <a target="_blank" href="{{ route('products.show', [$item->product_id]) }}">{{ $item->product->title }}</a>
                        </span>
                        <span class="sku-title">{{ $item->productSku->title }}</span>
                      </div>
                    </td>
                    <td class="sku-price text-center">{{ number_format($item->price,0) }} vnd</td>
                    <td class="sku-amount text-center">{{ $item->amount }}</td>
                    @if($index === 0)
                      <td rowspan="{{ count($order->items) }}" class="text-center total-amount">{{ number_format($order->total_amount,0) }} vnd</td>
                      <td rowspan="{{ count($order->items) }}" class="text-center">
                        @if($order->paid_at)
                          @if($order->refund_status === \App\Models\Order::REFUND_STATUS_PENDING)
                                  Paid
                          @else
                            {{ \App\Models\Order::$refundStatusMap[$order->refund_status] }}
                          @endif
                        @elseif($order->closed)
                              closed
                        @else
                              unpaid<br>
                              Please {{ $order->created_at->addSeconds(config('app.order_ttl'))->format('H:i') }} Complete payment before<br>
                              Otherwise the order will close automatically
                        @endif
                      </td>
                      <td rowspan="{{ count($order->items) }}" class="text-center">
                        <a class="btn btn-primary btn-sm" href="{{ route('orders.show', ['order' => $order->id]) }}">Check</a>
                        <!-- 评价入口开始 -->
                        @if($order->paid_at)
                          <a class="btn btn-success btn-sm" href="{{ route('orders.review.show', ['order' => $order->id]) }}">
                            {{ $order->reviewed ? 'Reviews' : 'Evaluation' }}
                          </a>
                        @endif
                        <!-- 评价入口结束 -->
                      </td>
                    @endif
                  </tr>
                @endforeach
              </table>
            </div>
          </div>
        </li>
      @endforeach
    </ul>
    <div class="float-right">{{ $orders->render() }}</div>
  </div>
</div>
</div>
</div>
@endsection
