@extends('layouts.page')
@section('title', $product->title)
@section('breadcrumb')
    <div class="bg_breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="{{url('san-pham.html')}}">Sản Phẩm</a></li>
                <li><a href="{{$category->toLink()}}">{{$category->title}}</a></li>
                <li><span>{{$product->title}}</span></li>
            </ul>
        </div>
    </div>
@stop
@section('content')
    <div id="content" class="col-sm-12 col-xs-12 col-md-9 col-md-push-3">
        <div class="col-main">
            <div class="row">
                <div class="product-view">
                    <div class="product-essential">
                        <!-- product slider -->
                        <div class="product-img-box col-sm-4 col-xs-12 col-lg-5 wow animated">
                            <div class="product-image">
                                <div class="large-image">
                                    <a href="{{ $product->image_url }}" class="cloud-zoom" id="zoom1"
                                       rel="useWrapper: false, adjustY:0, adjustX:20">
                                        <img src="{{ $product->image_url }}" alt="{{ $product->title }}">
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- product detail -->
                        <div class="product-shop col-sm-8 col-xs-12 col-lg-7 wow animated">
                            <div class="product-name">
                                <h1 itemprop="name">{{ $product->title }}</h1>
                            </div>
                            <ul class="list-unstyled">
                                <li>Mã sản phẩm: {{ $product->code }}</li>
                                <li>Tình trạng: Còn trong kho</li>
                            </ul>
                            @foreach($product->skus as $sku)
                                <!--<label
                                    class="btn sku-btn"
                                    data-price="{{ $sku->price }}"
                                    data-stock="{{ $sku->stock }}"
                                    data-toggle="tooltip"
                                    title="{!! $sku->description !!}"
                                    data-placement="bottom">
                                    <input type="radio" name="skus" autocomplete="off" value="{{ $sku->id }}"> {{ $sku->title }}
                                </label>-->
                            @endforeach
                            <div class="price-block" itemscope itemtype="http://schema.org/Offer">
                                <div class="qv_price">
                                <span class="regular-price">
                                    <span class="price">{{ number_format($product->price, 0) }} đ</span>
                                </span>
                                </div>
                            </div>
                            <div class="short-description">
                            </div>
                            <div class="add-to-box">
                                <div class="add-to-cart">
                                    <div id="product">
                                        <div class="prd_quantity_select pull-left">
                                            <label class="sl" for="input-quantity">Số lượng</label>
                                            <div class="pull-left qty-number">
                                                <div class="custom pull-left">
                                                    <button
                                                        onclick="$('#input-quantity').val(function() {if ((parseInt($('#input-quantity').val()) - 1) >= 1){return (parseInt($('#input-quantity').val()) - 1);}else{return '1';}});"
                                                        class="reduced items-count" type="button"><i
                                                            class="fa fa-minus">&nbsp;</i></button>
                                                    <input type="text" name="quantity" value="1" size="2"
                                                           id="input-quantity" class="input-text qty">
                                                    <button
                                                        onclick="$('#input-quantity').val(parseInt($('#input-quantity').val()) + 1);"
                                                        class="increase items-count" type="button"><i
                                                            class="fa fa-plus">&nbsp;</i></button>
                                                </div>
                                            </div>
                                            <input type="hidden" name="product_id" value="727">
                                            <br>
                                        </div>
                                        <div class="dt-cart">
                                            <div class="ttaddtocart">
                                                <p id="add_to_cart" class="adt">
                                                    <button type="button" id="button-cart"
                                                            data-loading-text="Đang tải..."
                                                            class="btn-cart btn_buy_now btn_qv exclusive btn-add-to-cart"><span>Thêm vào giỏ</span>
                                                    </button>
                                                </p>
                                                <p id="buy_product_now" class="adt">
                                                    <button type="button" id="button-buy-this"
                                                            data-loading-text="Đang tải..."
                                                            class="btn-cart btn_buy_now btn_qv exclusive">
                                                        <span>Mua ngay</span></button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="social-product">
                                <div class="social pull-left">
                                    <div class="social-buttons">
                                        <a rel="nofollow" target="_blank"
                                           href="https://www.facebook.com/sharer/sharer.php?u=https://usmartcindy.com/ao-thung-levis-be-trai-4-tuoi-0014"
                                           title="Chia sẻ lên Facebook">
                                            <img alt="Chia sẻ lên Facebook" width="25"
                                                 src="{{url('assets/images/facebook.png')}}">
                                        </a>
                                        <a rel="nofollow" target="_blank"
                                           href="https://twitter.com/share?text=&url=https://usmartcindy.com/ao-thung-levis-be-trai-4-tuoi-0014"
                                           title="Chia sẻ lên Twitter">
                                            <img alt="Chia sẻ lên Twitter" width="25"
                                                 src="{{url('assets/images/twitter.png')}}">
                                        </a>
                                        <a rel="nofollow" target="_blank"
                                           href="https://plus.google.com/share?url=https://usmartcindy.com/ao-thung-levis-be-trai-4-tuoi-0014"
                                           title="Chia sẻ lên Google plus">
                                            <img alt="Chia sẻ lên Google plus" width="25"
                                                 src="{{url('assets/images/googleplus.png')}}">
                                        </a>
                                        <a rel="nofollow" target="_blank"
                                           href="https://www.linkedin.com/shareArticle?mini=true&url=https://usmartcindy.com/ao-thung-levis-be-trai-4-tuoi-0014"
                                           title="Chia sẻ lên Linkedin">
                                            <img alt="Chia sẻ lên Linkedin" width="25"
                                                 src="{{url('assets/images/linkedin.png')}}">
                                        </a>
                                        <a rel="nofollow" target="_blank"
                                           href="https://www.pinterest.com/pin/create/button/?url=https://usmartcindy.com/ao-thung-levis-be-trai-4-tuoi-0014&media=&description={{ $product->title }}"
                                           title="Chia sẻ lên Pinterest">
                                            <img alt="Chia sẻ lên Pinterest" width="25"
                                                 src="{{url('assets/images/pinterest.png')}}">
                                        </a>
                                        <a rel="nofollow" target="_blank"
                                           href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su=&body={{ $product->title }}"
                                           title="Chia sẻ lên Gmail">
                                            <img alt="Chia sẻ lên Gmail" width="25"
                                                 src="{{url('assets/images/gmail.png')}}">
                                        </a>
                                        <a rel="nofollow" target="_blank"
                                           href="https://web.skype.com/share?url=https://usmartcindy.com/ao-thung-levis-be-trai-4-tuoi-0014&lang=vi-VN"
                                           title="Chia sẻ lên Skype">
                                            <img alt="Chia sẻ lên Skype" width="25"
                                                 src="{{url('assets/images/skype.png')}}">
                                        </a>
                                        <a rel="nofollow" target="_blank" href title="Chia sẻ lên Zalo">
                                            <img alt="Chia sẻ lên Zalo" width="25"
                                                 src="{{url('assets/images/zalo.png')}}">
                                        </a>
                                    </div>
                                    <style type="text/css">
                                        .social-buttons {
                                            display: block;
                                            width: 100%;
                                        }

                                        .social-buttons a {
                                            display: inline-block;
                                            border-radius: 5px;
                                        }

                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product description -->
                <div class="product-collateral wow animated">
                    <div class="col-sm-12">
                        <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                            <li class="active"><a href="#tab-description" data-toggle="tab">Mô tả</a></li>
                        </ul>
                        <div id="productTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="tab-description">
                                <div class="std">
                                    <p>{!! $product->description !!}</p>
                                    <p>Xuat xu USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12 col-md-3 sidebar clearfix col-md-pull-9">
        <aside id="column-left" class="left-column compliance">
            <div class="danh-muc-blog ">
                <div class="color-blog">
                    <h2 class="title-blog">Danh mục</h2>
                </div>
                @include('partials.categories', ['categories' => $categories])
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('.lv1 a[href="' + window.location.href + '"]').parent().addClass('selected');
                    $('.lv1 a[href="' + window.location.href + '"]').closest('.lv0').addClass('selected');
                });
            </script>
        </aside>
    </div>
@endsection
