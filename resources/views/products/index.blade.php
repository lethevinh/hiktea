@extends('layouts.page')
@if($category)
@section('title', $category->title)
@else
@section('title', "Thực Đơn")
@endif
@section('breadcrumb')
<section class="bg_light_orange breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="assets/images/breadcrumb_bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>Thực  </h1>Đơn
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Thực Đơn
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
        <div class="row">
            <div class="col-lg-9">
                <div class="row shop_container grid_view">
                    @foreach($categories as $category)
                    <div class="clearfix heading_s2" id="CAT_{{$category->id}}">
                        <h2>{{$category->title}} </h2>
                    </div>
                    @foreach($category->products as $product)
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <span class="pr_flash bg_red">Hot</span>
                            <div class="product_img">
                                <a href="{{$product->link}}">
                                    <img src="{{$product->image_url}}">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li>
                                            <a href="{{$product->link}}">
                                                <i class="ti-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="{{$product->link}}">{{$product->title}}</a></h6>
                                <p class="price">{{number_format($product->price,0)}}</p>
                                <a class="btn btn-default rounded-0 btn-borderd btn-sm"  href="{{ route('cart.page') }}">
                                    Đặt Ngay
                                </a>
                                <div class="pr_desc">
                                    <p>{{$product->description}}</p>
                                </div>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="{{$product->link}}">
                                            <i class="ti-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12 mt-3 mt-lg-4">
                        <ul class="pagination justify-content-center">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 order-lg-first mt-5 mt-lg-0">
                <div class="sidebar stickySidebar">
                    <div class="widget menu">
                        <h5 class="widget_title">Thực Đơn</h5>
                        <ul class="list_none widget_categories border_bottom_dash menu_sidebar">
                            @foreach($categories as $category)
                            <li>
                                <a href="#CAT_{{$category->id}}">
                                    <span class="categories_name">
                                        {{$category->title}}
                                    </span>
                                    <span class="categories_num"></span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scriptsAfterJs')
<script type="text/javascript">
$(document).ready(() => {
    // click active menu
    $('.widget.menu ul li a').click(function(e) {
        e.preventDefault();
        $('.widget.menu ul li a').removeClass('active');
        $(this).addClass('active');
    });

    // click scroll to menu
    $('.widget.menu ul li a')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    var scrollTop = target.offset().top - 150;
                    $('html, body').animate({
                        scrollTop: scrollTop
                    }, 2000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });

    // Scroll active menu
    // Cache selectors
    var topMenu = $(".menu_sidebar"),
        topMenuHeight = topMenu.outerHeight() + 15,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function() {
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
        });
    $(window).scroll(function() {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function() {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";
        // Set/remove active class
        menuItems.removeClass('active');
        menuItems
            .parent()
            .end().filter("[href='#" + id + "']").addClass("active");
    });
});

</script>
@endsection
