@extends('layouts.page')
@section('title', "Order")
@section('breadcrumb')
    <section class="bg_light_orange background_breadcrumb breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="{{url('assets/images/breadcrumb_bg.png')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Order </h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="{{url('/')}}">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Order
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@stop
@section('content')
    <div class="container layout-order">
        <div class="row">
            <div class="col-lg-3 order-lg-first mt-5 mt-lg-0">
                <div class="sidebar stikySidebar">
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
            <div class="col-lg-6">
                <div class="row shop_container grid_view">
                    @foreach($categories as $category)
                        <div class="clearfix list-order-title" id="CAT_{{$category->id}}">
                            <h5>{{$category->title}} </h5>
                        </div>
                        <ul class="list-order-product">
                        @foreach($category->products as $product)
                            <li class="row">
                                <div class="col-md-2">
                                    <img style="width: 100px;height: auto" src="{{$product->image_url}}">
                                </div>
                                <div class="col-md-8">
                                    <title>{{$product->title}}</title>
                                    <p class="description">{{$product->description}}</p>
                                    <price class="price" >{{number_format($product->price,0)}} đ</price>
                                </div>
                                <div class="col-md-2">
                                    <input data-toggle="modal" data-target="#product{{$product->id}}" data-product="{{json_encode($product->printData())}}" type="button" value="+" class="btn-plus add-to-cart">
                                </div>
                            </li>
                                <div class="modal fade" id="product{{$product->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">{{$product->title}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @foreach($product->getOptions() as $option)
                                                    <h5>{{$option['title']}}</h5>
                                                    @foreach($option['items'] as $item)
                                                        <label for="{{$item['id']}}">
                                                            <input type="checkbox" id="{{$item['id']}}" value="{{$item['id']}}">
                                                            <span>{{$item['title']}}  {{number_format($item['price'],0)}} đ</span>
                                                        </label>
                                                        <br>
                                                    @endforeach
                                                @endforeach
                                            </div>
                                            <div class="modal-footer">
                                                <div class="quantity">
                                                    <input type="button" value="-" class="minus">
                                                    <input minlength="1" min="1" type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                                <button type="button" class="btn btn-default btn-primary btn-sm">Thêm Vào Giỏ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        </ul>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12 mt-3 mt-lg-4">
                        <ul class="pagination justify-content-center">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar stikySidebar">
                    <div class="widget menu">
                        <h5 class="widget_title">Giỏ Hàng</h5>
                        <ul class="list_none widget_categories border_bottom_dash menu_sidebar">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
