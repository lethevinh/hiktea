@extends('layouts.page')
@if($category)
@section('title', $category->title)
@else
@section('title', "Menu")
@endif
@section('breadcrumb')
<section class="bg_light_orange breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="assets/images/breadcrumb_bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>MENU </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            MENU
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@stop
@section('content')
<!-- START SECTION BLOG-->
<section class="menus">
    <div class="container">
        <div class="row" v-page-content="menu">
            <div class="col-lg-9">
                <div class="row shop_container grid_view">
                    <div class="clearfix heading_s2" id="NOIBAT">
                        <h2>NỔI BẬT</h2>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_green">Sale</span>
                            <div class="product_img"><a href="#">
                                <img src="assets/images/product.jpg" alt="product_img1"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Strawberry</a></h6>
                                <p class="price">$35.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_orange">-10%</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img2"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Grapes</a></h6>
                                <p class="price">$40.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img3"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Cucumber</a></h6>
                                <p class="price">$52.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_green">Sale</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img4"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Orange</a></h6>
                                <p class="price">$39.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img5"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">100% Organic Juices</a></h6>
                                <p class="price">$33.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img6"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Banana</a></h6>
                                <p class="price">$42.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix heading_s2" id="COFFEE2">
                        <h2>COFFEE </h2>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_red">Hot</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img7"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Tomato</a></h6>
                                <p class="price">$54.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_orange">-25%</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img8"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Carrots</a></h6>
                                <p class="price">$32.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img9"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Pineapple</a></h6>
                                <p class="price">$22.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_red">Hot</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img7"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Tomato</a></h6>
                                <p class="price">$54.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix heading_s2" id="MILK_TEA">
                        <h2>MILK TEA</h2>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_orange">-25%</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img8"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Carrots</a></h6>
                                <p class="price">$32.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img9"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Pineapple</a></h6>
                                <p class="price">$22.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_red">Hot</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img7"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Tomato</a></h6>
                                <p class="price">$54.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_orange">-25%</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img8"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Carrots</a></h6>
                                <p class="price">$32.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix heading_s2" id="FRESH_MILK_HIK">
                        <h2>FRESH MILK HIK</h2>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img9"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Pineapple</a></h6>
                                <p class="price">$22.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_red">Hot</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img7"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Tomato</a></h6>
                                <p class="price">$54.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_orange">-25%</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img8"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Carrots</a></h6>
                                <p class="price">$32.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix heading_s2" id="FRUIT_TEA">
                        <h2>FRUIT TEA</h2>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img9"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Pineapple</a></h6>
                                <p class="price">$22.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_red">Hot</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img7"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Tomato</a></h6>
                                <p class="price">$54.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_orange">-25%</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img8"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Carrots</a></h6>
                                <p class="price">$32.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix heading_s2" id="COFFEE">
                        <h2>COFFEE</h2>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img9"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Pineapple</a></h6>
                                <p class="price">$22.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_red">Hot</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img7"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Tomato</a></h6>
                                <p class="price">$54.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product"><span class="pr_flash bg_orange">-25%</span>
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img8"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Carrots</a></h6>
                                <p class="price">$32.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product_img"><a href="#"><img src="assets/images/product.jpg" alt="product_img9"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Pineapple</a></h6>
                                <p class="price">$22.00</p><a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-3 mt-lg-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="ion-ios-arrow-thin-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 order-lg-first mt-5 mt-lg-0">
                <div class="sidebar stikySidebar">
                    <div class="widget menu">
                        <h5 class="widget_title">MENU</h5>
                        <ul class="list_none widget_categories border_bottom_dash">
                            <li><a href="#NOIBAT"><span class="categories_name">MÓN NỔI BẬT</span><span class="categories_num">(9)</span></a></li>
                            <li><a href="#MILK_TEA"><span class="categories_name">MILK TEA</span><span class="categories_num">(6)</span></a></li>
                            <li><a href="#FRESH_MILK_HIK"><span class="categories_name">FRESH MILK HIK</span><span class="categories_num">(4)</span></a></li>
                            <li><a href="#FRUIT_TEA"><span class="categories_name">FRUIT TEA</span><span class="categories_num">(7)</span></a></li>
                            <li><a href="#COFFEE"><span class="categories_name">COFFEE</span><span class="categories_num">(12)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scriptsAfterJs')
@endsection
