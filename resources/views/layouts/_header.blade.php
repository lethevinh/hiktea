<!-- START HEADER-->
<header class="header_wrap dark_skin main_menu_uppercase bg_black">
    <div class="container">
        <nav class="navbar navbar-expand-lg txt_white">
            <a class="navbar-brand" href="{{url('/')}}">
                <img class="logo_light" src="{{url('assets/images/logo_white.png')}}" alt="logo">
                <img class="logo_dark" src="{{url('assets/images/logo_dark.png')}}" alt="logo">
                <img class="logo_default" src="{{url('assets/images/logo_dark.png')}}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ion-android-menu"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li><a class="nav-link" href="{{url('ve-hik-tea.html')}}">
                            Về HIK TEA
                        </a>
                    </li>
                    <li><a class="nav-link" href="{{url('thuc-don.html')}}">
                            Thực Đơn
                        </a>
                    </li>
                    <li><a class="nav-link" href="{{url('bai-viet/khuyen-mai.html')}}">
                            Khuyến Mãi
                        </a>
                        </li>
                    <li><a class="nav-link" href="{{url('hinh-anh.html')}}">
                            Hình Ảnh
                        </a>
                        </li>
                    <li><a class="nav-link" href="{{url('bai-viet/tin-tuc.html')}}">
                            Blog
                        </a>
                    </li>
                    <li><a class="nav-link" href="{{url('bai-viet/tuyen-dung.html')}}">
                            Tuyển Dụng
                        </a>
                    </li>
                    <li><a class="nav-link" href="{{url('cua-hang.html')}}">
                            Cửa Hàng
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav attr-nav align-items-center">
                <li><a class="nav-link search_trigger" href="javascript:void(0);"><i class="ion-ios-search-strong"></i></a>
                    <div class="search-overlay">
                        <div class="search_wrap">
                            <form>
                                <div class="rounded_input">
                                    <input class="form-control" id="search_input" type="text" placeholder="Search"></div>
                                <button class="search_icon" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="dropdown cart_wrap">
                    <a class="nav-link" href="#" data-toggle="dropdown">
                        <i class="ion-bag"></i><span class="cart_count">2</span>
                    </a>
                    <div class="cart_box dropdown-menu dropdown-menu-right bg_white">
                        <ul class="cart_list">
                            <li><a class="item_remove" href="#"><i class="ion-close"></i></a><a href="#"><img src="{{url('assets/images/cart_thamb1.jpg')}}" alt="cart_thumb1">Fresh Organic Strawberry</a><span class="cart_quantity">1 x <span class="cart_amount"><span class="price_symbole">$</span>78.00</span></span></li>
                            <li><a class="item_remove" href="#"><i class="ion-close"></i></a><a href="#"><img src="{{url('assets/images/cart_thamb2.jpg')}}" alt="cart_thumb2">Fresh Organic Grapes</a><span class="cart_quantity">1 x <span class="cart_amount"><span class="price_symbole">$</span>81.00</span></span></li>
                        </ul>
                        <div class="cart_footer">
                            <p class="cart_total">Total: <span class="cart_amount"><span class="price_symbole">$</span>159.00</span></p>
                            <p class="cart_buttons"><a class="btn btn-default btn-radius view-cart" href="cart.html">View Cart</a><a class="btn btn-dark btn-radius checkout" href="checkout.html">Checkout</a></p>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header><!-- END HEADER-->
