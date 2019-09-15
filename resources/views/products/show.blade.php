@extends('layouts.page')
@section('title', $product->title)
@section('breadcrumb')
<section class="bg_light_orange breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="{{url('assets/images/breadcrumb_bg.png')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>Thực Đơn </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item ">
                            <a href="{{url('thuc-don.html')}}">Thực Đơn</a>
                        </li>
                        <li class="breadcrumb-item ">
                            <a href="{{$category->toLink()}}">{{$category->title}}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <span> {{$product->title}} </span>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@stop
@section('content')
<!-- START SECTION SHOP DETAIL -->
<section class="layout-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="product-image">
                    <span class="pr_flash bg_green">Sale</span>
                    <img id="product_img" src='{{url("storage/".$product->images[0])}}' alt="product" data-zoom-image='{{url("storage/".$product->images[0])}}' />
                    <div id="pr_item_gallery" class="product_gallery_item owl-thumbs-slider owl-carousel owl-theme">
                        @foreach($product->images as $image)
                        <div class="item">
                            <a href="#" class="active" data-image="{{url('storage/'.$image)}}" data-zoom-image="{{url('storage/'.$image)}}">
                                <img src="{{url('storage/'.$image)}}" alt="product" />
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pr_detail">
                    <div class="product-description">
                        <div class="product-title">
                            <h4><a href="#">{{ $product->title }}</a></h4>
                        </div>
                        <div class="product_price float-left">
                            <span class="price">
                                {{ number_format($product->price, 0) }} đ
                            </span>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <p>{{ $product->description }}</p>
                    </div>
                    <hr>
                    <div class="cart_extra">
                       {{--<div class="cart-product-quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>--}}
                        <div class="cart_btn">
                            <a href="{{ route('cart.page') }}" class="btn btn-default rounded-0 btn-borderd btn-sm" type="link">
                                Mua Ngay
                            </a>
                            <a class="add_wishlist" href="#">
                                <i class="ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <ul class="product-meta list_none">
                        <li>Danh Mục:
                            @foreach($product->categories()->get() as $category)
                            <a href="{{$category->link}}">{{$category->title}}</a>,
                            @endforeach
                        </li>
                    </ul>
                    <div class="product_share d-block d-sm-flex align-items-center">
                        <span>Chia Sẻ with:</span>
                        <ul class="list_none social_icons border_social rounded_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="medium_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-style1">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">
                                Nội dung
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Bình Luận</a>
                        </li>
                    </ul>
                    <div class="tab-content shop_info_tab">
                        <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                            <p>
                                <p>{!! $product->content !!}</p>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                            <div class="comments">
                                <h5>Bình Luận {{$product->title}}</h5>
                                <div class="fb-comments" data-href="{{$product->link}}#Reviews" data-width="" data-numposts="5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="medium_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="heading_s2 m-0">
                    <h3>Có thể bạn thích</h3>
                </div>
                <div class="small_divider clearfix"></div>
                <div class="product_slider carousel_slide4 owl-carousel owl-theme nav_top_right2" data-margin="30" data-nav="true" data-dots="false">
                    @foreach($category->products as $productLike)
                    @if($product->id != $productLike->id)
                    <div class="item">
                        <div class="product">
                            <span class="pr_flash bg_green">Sale</span>
                            <div class="product_img">
                                <a href="{{$productLike->link}}">
                                    <img src="{{$productLike->image_url}}" alt="{{$productLike->title}}">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="{{$productLike->link}}"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="{{$productLike->link}}">{{$productLike->title}}</a></h6>
                                <p class="price">
                                    {{number_format($product->price,0)}}
                                </p>
                                <a href="{{ route('cart.page') }}" class="btn btn-default rounded-0 btn-borderd btn-sm" type="link">
                                    Mua Ngay
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SHOP DETAIL -->
@endsection
