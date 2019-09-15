@extends('layouts.full')
@section('title', "Home Page")
@section('breadcrumb')
@stop
@section('content')
<!-- START SECTION BANNER-->
<section class="banner_slider p-0">
    <div class="carousel slide carousel-fade" id="carouselExampleFade" data-ride="carousel" v-shortcode="slide">
        <div class="carousel-inner">
            <div class="carousel-item active bg_light_orange background_bg" data-img-src="assets/images/slide_bg_pattern.png">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-1 col-lg-9 offset-lg-1">
                                <div class="banner_content banner_content_pad animation" data-animation="fadeIn" data-animation-delay="0.4s" data-parallax="{'y': 30, 'smoothness': 10}">
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s">Fresh & Organic Fruits.</h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit<br> massa enim. Nullam id varius nunc id varius nunc.</p><a class="btn btn-default btn-radius btn-borderd animation" href="#" data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a><a class="btn btn-white btn-radius btn-borderd animation" href="#" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape1">
                        <div class="animation" data-animation="rollIn" data-animation-delay="0.5s"><img data-parallax="{'y': -30, 'smoothness': 20}" src="assets/images/shape1.png" alt="shape1"></div>
                    </div>
                    <div class="shape2">
                        <div class="animation" data-animation="bounceInDown" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape2.png" alt="shape2"></div>
                    </div>
                    <div class="shape3">
                        <div class="animation" data-animation="bounceInRight" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape3.png" alt="shape3"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg_light_orange">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="banner_content border_shape text-center animation" data-animation="zoomIn" data-animation-delay="0.4s" data-parallax="{'y': 30, 'smoothness': 10}">
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s"> Vegetable 100% Organic</h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit<br> massa enim. Nullam id varius nunc id varius nunc.</p><a class="btn btn-default btn-radius btn-borderd animation" href="#" data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a><a class="btn btn-white btn-radius btn-borderd animation" href="#" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape4">
                        <div class="animation" data-animation="fadeInLeftBig" data-animation-delay="0.5s"><img data-parallax="{'y': -30, 'smoothness': 20}" src="assets/images/shape4.png" alt="shape4"></div>
                    </div>
                    <div class="shape5">
                        <div class="animation" data-animation="slideInDown" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape5.png" alt="shape5"></div>
                    </div>
                    <div class="shape6">
                        <div class="animation" data-animation="bounceInDown" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape6.png" alt="shape6"></div>
                    </div>
                    <div class="shape7">
                        <div class="animation" data-animation="fadeInRightBig" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape7.png" alt="shape7"></div>
                    </div>
                    <div class="shape8">
                        <div class="animation" data-animation="slideInUp" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape8.png" alt="shape8"></div>
                    </div>
                    <div class="shape9">
                        <div class="animation" data-animation="bounceInUp" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape9.png" alt="shape9"></div>
                    </div>
                    <div class="shape10">
                        <div class="animation" data-animation="bounceInUp" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape10.png" alt="shape10"></div>
                    </div>
                    <div class="shape11">
                        <div class="animation" data-animation="bounceInUp" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape11.png" alt="shape11"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg_light_blue">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-1 col-lg-9 offset-lg-1 col-md-10">
                                <div class="banner_content banner_content_pad animation" data-animation="fadeIn" data-animation-delay="0.4s" data-parallax="{'y': 30, 'smoothness': 10}">
                                    <h2 class="animation font_style1" data-animation="fadeInDown" data-animation-delay="0.5s">The Fresh Organic Juices.</h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit<br class="d-none d-lg-block"> massa enim. Nullam id varius nunc id varius nunc.</p><a class="btn btn-default btn-radius btn-borderd animation" href="#" data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a><a class="btn btn-white btn-radius btn-borderd animation" href="#" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape12">
                        <div class="animation" data-animation="slideInDown" data-animation-delay="0.5s"><img data-parallax="{'y': -30, 'smoothness': 20}" src="assets/images/shape12.png" alt="shape12"></div>
                    </div>
                    <div class="shape13">
                        <div class="animation" data-animation="slideInDown" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape13.png" alt="shape13"></div>
                    </div>
                    <div class="shape14">
                        <div class="animation" data-animation="zoomIn" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape14.png" alt="shape14"></div>
                    </div>
                    <div class="shape15">
                        <div class="animation" data-animation="bounceInUp" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape15.png" alt="shape15"></div>
                    </div>
                    <div class="shape16">
                        <div class="animation" data-animation="zoomInUp" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape16.png" alt="shape16"></div>
                    </div>
                    <div class="shape17">
                        <div class="animation" data-animation="slideInLeft" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape17.png" alt="shape17"></div>
                    </div>
                </div>
            </div>
        </div><a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a><a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
</section><!-- END SECTION BANNER-->
<!-- START SECTION PRODUCT-->
<section class="pb_20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-sm-10 text-center">
                <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    <h2>MENU</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="product_content">
                    <ul class="nav nav-tabs justify-content-center animation" data-animation="fadeInUp" data-animation-delay="0.04s" role="tablist">
                        @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link @if($loop->index == 0) active @endif" id="tab_{{$category->id}}" data-toggle="tab" href="#tab-{{$category->id}}" role="tab" aria-controls="tab-{{$category->id}}" aria-selected="false">
                                <span class="pr_icon{{$category->id}}"></span>{{$category->title}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="small_divider clearfix"></div>
                    <div class="tab-content">
                        @foreach($categories as $category)
                        <div class="tab-pane fade @if($loop->index == 0) show active  @endif" id="tab-{{$category->id}}" role="tabpanel" aria-labelledby="tab{{$category->id}}">
                            <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                                @foreach($category->products as $product)
                                <div class="col-xl-4 col-lg-4 col-sm-6">
                                    <div class="product"><span class="pr_flash bg_orange">-10%</span>
                                        <div class="product_img">
                                            <a href="{{$product->link}}">
                                                <img src="{{$product->image_url}}" alt="product_img2">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="{{$product->link}}"><i class="ti-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6>
                                                <a href="{{$product->link}}">{{$product->title}}
                                                </a>
                                            </h6>
                                            <p class="price">
                                                {{number_format($product->price,0) }} Đ
                                            </p>
                                            <a class="btn btn-default rounded-0 btn-borderd btn-sm"  href="{{ route('cart.page') }}">Đặt Ngay</a>
                                            <a class="btn btn-default rounded-0 btn-borderd btn-outline-default btn-sm infor" href="#">Tìm Hiểu</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape8">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s"><img data-parallax="{'y': -30, 'smoothness': 20}" src="assets/images/shape25.png" alt="shape25"></div>
        </div>
        <div class="ol_shape9">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape26.png" alt="shape26"></div>
        </div>
        <div class="ol_shape10">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape27.png" alt="shape27"></div>
        </div>
        <div class="ol_shape11">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape28.png" alt="shape28"></div>
        </div>
        <div class="ol_shape12">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape29.png" alt="shape29"></div>
        </div>
        <div class="ol_shape13">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape30.png" alt="shape30"></div>
        </div>
        <div class="ol_shape14">
            <div class="bounceimg" data-animation="fadeInRight" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape31.png" alt="shape31"></div>
        </div>
    </div>
</section><!-- START SECTION PRODUCT-->
<!-- START SECTION BLOG-->
<section class="bg_black pb_20">
    <div class="container">
        <div class="row justify-content-center section-title">
            <div class="col-xl-6 col-lg-8">
                <div class="text-center">
                    <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2>Tin Tức</h2>
                    </div>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="blog_post">
                    <div class="blog_img">
                        <a href="{{$posts[0]->link}}">
                            <img src="assets/images/blog_small_img1.jpg" alt="blog_small_img1">
                        </a>
                        <div class="blog_date style1">
                            <h4>02</h4><span>May</span>
                        </div>
                    </div>
                    <div class="blog_content">
                        <h6 class="blog_title">
                            <a href="{{$posts[0]->link}}">{{$posts[0]->title}}</a>
                        </h6>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="far fa-calendar"></i>February 15, 2014</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>4 Comment</a></li>
                        </ul>
                        <p>
                            {{$posts[0]->description}}
                        </p>
                        <a class="blog_link" href="{{$posts[0]->link}}">
                            Xem chi tiết
                            <i class="ion-ios-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="blog_post">
                    <div class="blog_img">
                        <a href="{{$posts[1]->link}}">
                            <img src="assets/images/blog_small_img2.jpg" alt="blog_small_img2">
                        </a>
                        <div class="blog_date style1">
                            <h4>02</h4><span>May</span>
                        </div>
                    </div>
                    <div class="blog_content">
                        <h6 class="blog_title">
                            <a href="{{$posts[1]->link}}">{{$posts[1]->title}}</a>
                        </h6>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="far fa-calendar"></i>February 15, 2014</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>3 Comment</a></li>
                        </ul>
                        <p>
                            {{$posts[1]->description}}
                        </p>
                        <a class="blog_link" href="{{$posts[1]->link}}">
                            Xem chi tiết
                            <i class="ion-ios-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @foreach($posts as $post)
            @if($loop->index > 1)
            <div class="col-lg-4 col-md-6">
                <div class="blog_post">
                    <div class="blog_img">
                        <a href="{{$post->link}}">
                            <img src="assets/images/blog_small_img3.jpg" alt="blog_small_img3">
                        </a>
                        <div class="blog_date style1">
                            <h4>02</h4><span>May</span>
                        </div>
                    </div>
                    <div class="blog_content">
                        <h6 class="blog_title">
                            <a href="{{$post->link}}">{{$post->title}}</a>
                        </h6>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="far fa-calendar"></i>February 15, 2014</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>5 Comment</a></li>
                        </ul>
                        <p>{{$post->description}}</p>
                        <a class="blog_link" href="{$post->link}}">
                            Xem Chi tiết <i class="ion-ios-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape15">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s"><img data-parallax="{'y': -30, 'smoothness': 20}" src="assets/images/shape37.png" alt="shape37"></div>
        </div>
        <div class="ol_shape16">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/shape36.png" alt="shape36"></div>
        </div>
    </div>
</section><!-- END SECTION BLOG-->
<!-- START SECTION BRANCH-->
<section class="bg_gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="text-center">
                    <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2>Cửa Hàng</h2>
                    </div>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center testimonial_slider testimonial_style1 carousel_slide3 owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true" data-dots="true" v-shortcode="branch">
            <div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                <div class="blog_img"><a href="#"><img src="assets/images/blog_small_img1.jpg" alt="blog_small_img1"></a>
                    <div class="blog_date style1">
                        <h4>02</h4><span>May</span>
                    </div>
                </div>
                <div class="blog_content">
                    <h6 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h6>
                    <ul class="list_none blog_meta">
                        <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                        <li><a href="#"><i class="far fa-comments"></i>4 Comment</a></li>
                    </ul>
                    <p>Phasellus blandit massa enim elit variununc Lorems ipsum dolor sit consectetur industry. If you are use passage of Lorem Ipsum.</p><a class="blog_link" href="#">Read More <i class="ion-ios-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                <div class="blog_img"><a href="#"><img src="assets/images/blog_small_img2.jpg" alt="blog_small_img2"></a>
                    <div class="blog_date style1">
                        <h4>25</h4><span>Mar</span>
                    </div>
                </div>
                <div class="blog_content">
                    <h6 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h6>
                    <ul class="list_none blog_meta">
                        <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                        <li><a href="#"><i class="far fa-comments"></i>3 Comment</a></li>
                    </ul>
                    <p>Phasellus blandit massa enim elit variununc Lorems ipsum dolor sit consectetur industry. If you are use passage of Lorem Ipsum.</p><a class="blog_link" href="#">Read More <i class="ion-ios-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.06s">
                <div class="blog_img"><a href="#"><img src="assets/images/blog_small_img3.jpg" alt="blog_small_img3"></a>
                    <div class="blog_date style1">
                        <h4>08</h4><span>Aug</span>
                    </div>
                </div>
                <div class="blog_content">
                    <h6 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h6>
                    <ul class="list_none blog_meta">
                        <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                        <li><a href="#"><i class="far fa-comments"></i>5 Comment</a></li>
                    </ul>
                    <p>Phasellus blandit massa enim elit variununc Lorems ipsum dolor sit consectetur industry. If you are use passage of Lorem Ipsum.</p><a class="blog_link" href="#">Read More <i class="ion-ios-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                <div class="blog_img"><a href="#"><img src="assets/images/blog_small_img1.jpg" alt="blog_small_img1"></a>
                    <div class="blog_date style1">
                        <h4>02</h4><span>May</span>
                    </div>
                </div>
                <div class="blog_content">
                    <h6 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h6>
                    <ul class="list_none blog_meta">
                        <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                        <li><a href="#"><i class="far fa-comments"></i>4 Comment</a></li>
                    </ul>
                    <p>Phasellus blandit massa enim elit variununc Lorems ipsum dolor sit consectetur industry. If you are use passage of Lorem Ipsum.</p><a class="blog_link" href="#">Read More <i class="ion-ios-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                <div class="blog_img"><a href="#"><img src="assets/images/blog_small_img2.jpg" alt="blog_small_img2"></a>
                    <div class="blog_date style1">
                        <h4>25</h4><span>Mar</span>
                    </div>
                </div>
                <div class="blog_content">
                    <h6 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h6>
                    <ul class="list_none blog_meta">
                        <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                        <li><a href="#"><i class="far fa-comments"></i>3 Comment</a></li>
                    </ul>
                    <p>Phasellus blandit massa enim elit variununc Lorems ipsum dolor sit consectetur industry. If you are use passage of Lorem Ipsum.</p><a class="blog_link" href="#">Read More <i class="ion-ios-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.06s">
                <div class="blog_img"><a href="#"><img src="assets/images/blog_small_img3.jpg" alt="blog_small_img3"></a>
                    <div class="blog_date style1">
                        <h4>08</h4><span>Aug</span>
                    </div>
                </div>
                <div class="blog_content">
                    <h6 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h6>
                    <ul class="list_none blog_meta">
                        <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                        <li><a href="#"><i class="far fa-comments"></i>5 Comment</a></li>
                    </ul>
                    <p>Phasellus blandit massa enim elit variununc Lorems ipsum dolor sit consectetur industry. If you are use passage of Lorem Ipsum.</p><a class="blog_link" href="#">Read More <i class="ion-ios-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                <div class="blog_img"><a href="#"><img src="assets/images/blog_small_img1.jpg" alt="blog_small_img1"></a>
                    <div class="blog_date style1">
                        <h4>02</h4><span>May</span>
                    </div>
                </div>
                <div class="blog_content">
                    <h6 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h6>
                    <ul class="list_none blog_meta">
                        <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                        <li><a href="#"><i class="far fa-comments"></i>4 Comment</a></li>
                    </ul>
                    <p>Phasellus blandit massa enim elit variununc Lorems ipsum dolor sit consectetur industry. If you are use passage of Lorem Ipsum.</p><a class="blog_link" href="#">Read More <i class="ion-ios-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                <div class="blog_img"><a href="#"><img src="assets/images/blog_small_img2.jpg" alt="blog_small_img2"></a>
                    <div class="blog_date style1">
                        <h4>25</h4><span>Mar</span>
                    </div>
                </div>
                <div class="blog_content">
                    <h6 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h6>
                    <ul class="list_none blog_meta">
                        <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                        <li><a href="#"><i class="far fa-comments"></i>3 Comment</a></li>
                    </ul>
                    <p>Phasellus blandit massa enim elit variununc Lorems ipsum dolor sit consectetur industry. If you are use passage of Lorem Ipsum.</p><a class="blog_link" href="#">Read More <i class="ion-ios-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.06s">
                <div class="blog_img"><a href="#"><img src="assets/images/blog_small_img3.jpg" alt="blog_small_img3"></a>
                    <div class="blog_date style1">
                        <h4>08</h4><span>Aug</span>
                    </div>
                </div>
                <div class="blog_content">
                    <h6 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h6>
                    <ul class="list_none blog_meta">
                        <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                        <li><a href="#"><i class="far fa-comments"></i>5 Comment</a></li>
                    </ul>
                    <p>Phasellus blandit massa enim elit variununc Lorems ipsum dolor sit consectetur industry. If you are use passage of Lorem Ipsum.</p><a class="blog_link" href="#">Read More <i class="ion-ios-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape15">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s"><img data-parallax="{'y': -30, 'smoothness': 20}" src="assets/images/testimonial_bg_img2.png" alt="shape32"></div>
        </div>
        <div class="ol_shape16">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s"><img data-parallax="{'y': 30, 'smoothness': 20}" src="assets/images/testimonial_bg_img1.jpg" alt="shape33"></div>
        </div>
    </div>
</section><!-- END SECTION BRANCH-->
@stop
