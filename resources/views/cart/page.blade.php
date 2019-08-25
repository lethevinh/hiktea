@extends('layouts.page')
@section('title', "Giỏ Hàng")
@section('breadcrumb')
    <div class="bg_breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><span>Giỏ Hàng</span></li>
        </ul>
    </div>
    </div>
@stop
@section('content')
    <div id="content" class="col-sm-12">
        <div class="row">
            <div id="content" class="col-sm-12">
                <h3>Giỏ hàng</h3>
                <form action="https://usmartcindy.com/index.php?route=checkout/cart/edit" method="post" enctype="multipart/form-data">
                    <div class="table-responsive table-cart-content">
                        <table class="table table-bordered" id="cart_content">
                            <thead>
                            <tr>
                                <td class="text-center"><strong>Ảnh</strong></td>
                                <td class="text-center"><strong>Sản phẩm</strong></td>
                                <td class="text-center"><strong>Đơn giá</strong></td>
                                <td class="text-center"><strong>Số lượng</strong></td>
                                <td class="text-center"><strong>Tổng</strong></td>
                                <td class="text-center"><strong>Xóa</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>giỏ hàng trống</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
                <div class="row">
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-4 col-sm-offset-8">
                        <table class="table table-bordered" id="cart_total">

                        </table>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 col_button_shopping">
                                <a href="/" class="btn btn-default pull-left button_shopping">Tiếp tục mua hàng</a>
                            </div>
                            <div class="col-sm-6 col-xs-6 col_button_checkout">
                                <a href="/thanh-toan.html" class="btn btn-primary pull-right button_checkout">Tiến hành thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


