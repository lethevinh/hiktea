<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">OrderNumber：#{{ $order->no }}</h3>
    <div class="box-tools">
      <div class="btn-group float-right" style="margin-right: 10px">
        <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-default">
            <i class="fa fa-list"></i> List
        </a>
      </div>
    </div>
  </div>
  <div class="box-body">
    <table class="table table-bordered">
      <tbody>
      <tr>
        <td> Buyer：</td>
        @if($order->user)
            <td>{{$order->user->name}}</td>
        @else
        <td>{{ $order->address['contact_name'] }} / {{ $order->address['contact_phone'] }} /  @if(!empty($order->address['contact_email'])){{ $order->address['contact_email'] }} @endif </td>
        @endif
        <td>Payment time ：</td>
        <td></td>
      </tr>
      <tr>
        <td> Payment method：</td>
        <td>{{ $order->payment_method }}</td>
        <td>Payment channel number：</td>
        <td>{{ $order->payment_no }}</td>
      </tr>
      <tr>
        <td>Shipping address</td>
        <td colspan="3">{{ $order->address['address'] }} {{ $order->address['zip'] }} {{ $order->address['contact_name'] }} {{ $order->address['contact_phone'] }}</td>
      </tr>
      <tr>
        <td class="text-bold" rowspan="{{ $order->items->count() + 1 }}">Product list	</td>
        <td class="text-bold">Product name</td>
        <td class="text-bold">Unit price</td>
        <td class="text-bold">Quantity</td>
        <td class="text-bold">Total</td>
      </tr>
      @foreach($order->items as $item)
        <tr>
          <td>{{ $item->product->title }} {{ $item->productSku->title }}</td>
          <td>{{ number_format($item->price) }} vnd</td>
          <td>{{number_format( $item->amount) }}</td>
          <td>{{number_format( $item->amount * $item->price) }} vnd</td>
        </tr>
      @endforeach
      <tr>
        <td class="text-bold">Order amount：</td>
        <td class="text-bold text-red">{{ number_format($order->total_amount,0) }} vnd</td>
        <td>Delivery status：</td>
        <td>{{ \App\Models\Order::$shipStatusMap[$order->ship_status] }}</td>
        <td></td>
      </tr>
      <!-- 订单发货开始 -->
      <!-- 如果订单未发货，展示发货表单 -->
      @if($order->ship_status === \App\Models\Order::SHIP_STATUS_PENDING)
        <!-- 加上这个判断条件 -->
        @if($order->refund_status !== \App\Models\Order::REFUND_STATUS_SUCCESS)
        <tr>
          <td colspan="5">
            <form action="{{ route('admin.orders.ship', [$order->id]) }}" method="post" class="form-inline">
              <!-- 别忘了 csrf token 字段 -->
              {{ csrf_field() }}
              <div class="form-group {{ $errors->has('express_company') ? 'has-error' : '' }}">
                <label for="express_company" class="control-label">Logistics company</label>
                <input type="text" id="express_company" name="express_company" value="" class="form-control" placeholder="Input logistics company">
                @if($errors->has('express_company'))
                  @foreach($errors->get('express_company') as $msg)
                    <span class="help-block">{{ $msg }}</span>
                  @endforeach
                @endif
              </div>
              <div class="form-group {{ $errors->has('express_no') ? 'has-error' : '' }}">
                <label for="express_no" class="control-label">shipment number</label>
                <input type="text" id="express_no" name="express_no" value="" class="form-control" placeholder="Enter the logistics order number">
                @if($errors->has('express_no'))
                  @foreach($errors->get('express_no') as $msg)
                    <span class="help-block">{{ $msg }}</span>
                  @endforeach
                @endif
              </div>
              <button type="submit" class="btn btn-success" id="ship-btn">Ship</button>
            </form>
          </td>
        </tr>
        <!-- 在 上一个 if 的 else 前放上 endif -->
        @endif
      @else
        <!-- 否则展示物流公司和物流单号 -->
        <tr>
          <td>Logistics company：</td>
          <td>{{ $order->ship_data['express_company'] }}</td>
          <td>Shipment number：</td>
          <td>{{ $order->ship_data['express_no'] }}</td>
        </tr>
      @endif
      <!-- 订单发货结束 -->
      @if($order->refund_status !== \App\Models\Order::REFUND_STATUS_PENDING)
        <tr>
          <td>Refund status：</td>
          <td colspan="2">{{ \App\Models\Order::$refundStatusMap[$order->refund_status] }}，理由：{{ $order->extra['refund_reason'] }}</td>
          <td>
            <!-- 如果订单退款状态是已申请，则展示处理按钮 -->
            @if($order->refund_status === \App\Models\Order::REFUND_STATUS_APPLIED)
              <button class="btn btn-sm btn-success" id="btn-refund-agree">agree</button>
              <button class="btn btn-sm btn-danger" id="btn-refund-disagree">disagree</button>
            @endif
          </td>
        </tr>
      @endif
      </tbody>
    </table>
  </div>
</div>

<script>
  $(document).ready(function() {
    // 不同意 按钮的点击事件
    $('#btn-refund-disagree').click(function() {
      // Laravel-Admin 使用的 SweetAlert 版本与我们在前台使用的版本不一样，因此参数也不太一样
      swal({
        title: '输入拒绝退款理由',
        input: 'text',
        showCancelButton: true,
        confirmButtonText: "确认",
        cancelButtonText: "取消",
        showLoaderOnConfirm: true,
        preConfirm: function(inputValue) {
          if (!inputValue) {
            swal('理由不能为空', '', 'error')
            return false;
          }
          // Laravel-Admin 没有 axios，使用 jQuery 的 ajax 方法来请求
          return $.ajax({
            url: '{{ route('admin.orders.handle_refund', [$order->id]) }}',
            type: 'POST',
            data: JSON.stringify({   // 将请求变成 JSON 字符串
              agree: false,  // 拒绝申请
              reason: inputValue,
              // 带上 CSRF Token
              // Laravel-Admin 页面里可以通过 LA.token 获得 CSRF Token
              _token: LA.token,
            }),
            contentType: 'application/json',  // 请求的数据格式为 JSON
          });
        },
        allowOutsideClick: () => !swal.isLoading()
      }).then(function (ret) {
        // 如果用户点击了『取消』按钮，则不做任何操作
        if (ret.dismiss === 'cancel') {
          return;
        }
        swal({
          title: '操作成功',
          type: 'success'
        }).then(function() {
          // 用户点击 swal 上的按钮时刷新页面
          location.reload();
        });
      });
    });

    // 同意 按钮的点击事件
    $('#btn-refund-agree').click(function() {
      swal({
        title: '确认要将款项退还给用户？',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: "确认",
        cancelButtonText: "取消",
        showLoaderOnConfirm: true,
        preConfirm: function() {
          return $.ajax({
            url: '{{ route('admin.orders.handle_refund', [$order->id]) }}',
            type: 'POST',
            data: JSON.stringify({
              agree: true, // 代表同意退款
              _token: LA.token,
            }),
            contentType: 'application/json',
          });
        }
      }).then(function (ret) {
        // 如果用户点击了『取消』按钮，则不做任何操作
        if (ret.dismiss === 'cancel') {
          return;
        }
        swal({
          title: '操作成功',
          type: 'success'
        }).then(function() {
          // 用户点击 swal 上的按钮时刷新页面
          location.reload();
        });
      });
    });

  });
</script>
