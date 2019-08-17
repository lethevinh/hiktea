{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
    <div class="container">
        <!-- Branding Image -->
        <a class="navbar-brand " href="{{ url('/') }}">
            Laravel Shop
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right">
                <!-- 登录注册链接开始 -->
                @guest
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
                @else
                <li class="nav-item">
                    <a class="nav-link mt-1" href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://iocaffcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{ route('user_addresses.index') }}" class="dropdown-item">收货地址</a>
                        <a href="{{ route('orders.index') }}" class="dropdown-item">我的订单</a>
                        <a href="{{ route('products.favorites') }}" class="dropdown-item">我的收藏</a>
                        <a class="dropdown-item" id="logout" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">退出登录</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
                @endguest
                <!-- 登录注册链接结束 -->
            </ul>
        </div>
    </div>
</nav> --}}
<header>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <div class="row">
                            <ul class="list-inline welcome-msg toplinks">
                                <li>
                                    <form action="https://usmartcindy.com/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="form-currency">
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                                <span class>Tiền tệ</span>
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="currency-select" name="EUR">€ Euro </a>
                                                </li>
                                                <li>
                                                    <a class="currency-select" name="GBP">£ Pound Sterling </a>
                                                </li>
                                                <li>
                                                    <a class="currency-select" name="USD">$ US Dollar </a>
                                                </li>
                                                <li>
                                                    <a class="currency-select" name="VND">đ VND </a>
                                                </li>
                                            </ul>
                                            <input type="hidden" name="code" value>
                                            <input type="hidden" name="redirect" value="https://usmartcindy.com/">
                                        </div>
                                    </form>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="row">
                            <div class="toplinks">
                                <div class="links">
                                    @guest
                                        <div><span class><a href="{{ route('login') }}" id="customer_login_link">Đăng nhập</a></span></div>
                                        <div><span class><a href="{{ route('register') }}" id="customer_register_link">Đăng ký</a></span></div>
                                    @else
                                        <a href="tai-khoan.html" title="Tài khoản" class="dropdown-toggle " data-toggle="dropdown">
                                            <span>Tài khoản  {{ Auth::user()->name }}</span> <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu account">
                                            <li><a href="{{ route('user_addresses.index') }}" class="dropdown-item">Shipping address</a></li>
                                            <li><a href="{{ route('orders.index') }}" class="dropdown-item">My Order</a></li>
                                            <li><a href="{{ route('products.favorites') }}" class="dropdown-item">my collection</a></li>
                                            <li><a class="dropdown-item" id="logout" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">sign out</a></li>
                                            <li><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form></li>
                                        </ul>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container header-mid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-4">
                    <!-- Header Logo -->
                    <div class="logo" id="logo">
                        <a href="index.html">
                            <img src="{{url('assets/images/logo.png')}}" alt="Siêu Thị Hàng Mỹ US Mart Cindy" itemprop="logo">
                        </a>
                    </div>
                    <!-- End Header Logo -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-8 hidden-xs search">
                    <div class="header_search">
                        <div class="input-group search-bar">
                            <div class="collection-selector">
                                <select name="category_id" class="search_text">
                                    <option class="item-cate search_item" value="0">Tất cả</option>
                                    <option class="item-cate search_item" value="173">Bath &amp; Body works - Victoria's Secret</option>
                                    <option class="item-cate search_item" value="168">Bộ quà tặng</option>
                                    <option class="item-cate search_item" value="89">Chăm sóc cá nhân và làm đẹp </option>
                                    <option class="item-cate search_item" value="100">&nbsp;&nbsp;&nbsp;&nbsp;Chăm sóc cá nhân (Nam)</option>
                                    <option class="item-cate search_item" value="95">&nbsp;&nbsp;&nbsp;&nbsp;Chăm sóc cá nhân (Nữ)</option>
                                    <option class="item-cate search_item" value="169">Chăm sóc da mặt</option>
                                    <option class="item-cate search_item" value="129">Chăm sóc sức khoẻ gia đình</option>
                                    <option class="item-cate search_item" value="134">&nbsp;&nbsp;&nbsp;&nbsp;Chăm sóc gia đình</option>
                                    <option class="item-cate search_item" value="133">&nbsp;&nbsp;&nbsp;&nbsp;Thuốc bổ, Vitamin</option>
                                    <option class="item-cate search_item" value="167">Chăm sóc tóc</option>
                                    <option class="item-cate search_item" value="136">Thế giới cho bé</option>
                                    <option class="item-cate search_item" value="158">&nbsp;&nbsp;&nbsp;&nbsp;Quần áo bé gái</option>
                                    <option class="item-cate search_item" value="157">&nbsp;&nbsp;&nbsp;&nbsp;Quần áo bé trai</option>
                                    <option class="item-cate search_item" value="147">Thời trang và Phụ kiện</option>
                                    <option class="item-cate search_item" value="165">&nbsp;&nbsp;&nbsp;&nbsp;Phụ kiện, Trang sức, Trang điểm</option>
                                    <option class="item-cate search_item" value="148">&nbsp;&nbsp;&nbsp;&nbsp;Thời trang Nam</option>
                                    <option class="item-cate search_item" value="149">&nbsp;&nbsp;&nbsp;&nbsp;Thời trang Nữ</option>
                                    <option class="item-cate search_item" value="160">&nbsp;&nbsp;&nbsp;&nbsp;Underwear (Nam)</option>
                                    <option class="item-cate search_item" value="159">&nbsp;&nbsp;&nbsp;&nbsp;Underwear (Nữ)</option>
                                    <option class="item-cate search_item" value="166">Thực phẩm, Bánh kẹo</option>
                                    <option class="item-cate search_item" value="170">Điện gia dụng </option>
                                    <option class="item-cate search_item" value="109">Đồ gia dụng</option>
                                    <option class="item-cate search_item" value="162">&nbsp;&nbsp;&nbsp;&nbsp;Bếp</option>
                                    <option class="item-cate search_item" value="163">&nbsp;&nbsp;&nbsp;&nbsp;Phòng tắm</option>
                                    <option class="item-cate search_item" value="161">&nbsp;&nbsp;&nbsp;&nbsp;Đồ dùng gia đình</option>
                                </select>
                            </div>
                            <input type="text" name="search" value placeholder="Tìm kiếm" class="input-group-field st-default-search-input search-text" autocomplete="off">
                            <span class="input-group-btn">
                                <button class="btn icon-fallback-text" type="button">
                                    <span class="fa fa-search"></span>
                                    <span class="hidden-lg hidden-md">Tìm kiếm</span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 cart">
                    <div class="top-cart-contain">
                        <div class="top_phone_number mini-cart" id="cart" style="margin-left: 4px;">
                            <a data-toggle="dropdown" data-loading-text="Đang tải" class="basket dropdown-toggle">
                                <div class="text" id="cart-total-phone">
                                    <p class="phone-box"><strong><span>0914.880.818 <br> 0901777965</span></strong></p>
                                </div>
                            </a>
                        </div>
                        <div class="top_phone_number mini-cart" id="cart">
                            <a data-toggle="dropdown" data-loading-text="Đang tải" class="basket dropdown-toggle">
                                <div class="phone-img">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="text" id="cart-total">
                                    <p class="phone-box"><strong><span>0 sản phẩm </span></strong></p>
                                    <p class="email-box"><strong><span> 0đ</span></strong></p>
                                </div>
                            </a>
                            <div class="top-cart-content arrow_box dropdown-menu" style="display: none;">
                                <ul id="cart-sidebar" class="mini-products-list">
                                    <li class="item">
                                        <p class="text-center" style="padding: 15px; font-size: 16px;">Giỏ hàng của bạn trống!</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<nav id="menu_header">
    <div class="nav-menu container">
        <div class="nav-inner row">
            <div class="hidden-md" id="mobile-menu">
                <ul class="navmenu">
                    <li>
                        <div class="menutop">
                            <div class="toggle">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                            <h2>Menu</h2>
                        </div>
                        <ul style="display:none;" class="submenu">
                            <li>
                                <ul class="topnav">
                                    <li class="level0 level-top parent">
                                        <a class="level-top" href="{{url('/')}}"><span>Trang chủ</span></a>
                                    </li>
                                    <li class="level0 level-top parent">
                                        <a class="level-top" href="{{url('gioi-thieu.html')}}"><span>Giới thiệu</span></a>
                                    </li>
                                    <li class="level0 level-top parent">
                                        <a class="level-top" href="{{url('san-pham.html')}}"><span>Sản phẩm</span></a>
                                    </li>
                                    <li class="level0 level-top parent">
                                        <a class="level-top" href="{{url('tin-tuc.html')}}"><span>Tin tức</span></a>
                                    </li>
                                    <li class="level0 level-top parent">
                                        <a class="level-top" href="{{url('lien-he.html')}}"><span>Liên hệ</span></a>
                                    </li>
                                    <li id="search_mobile">
                                        <div class="header_search">
                                            <div class="input-group search-bar">
                                                <div class="collection-selector">
                                                    <select name="category_id" class="search_text">
                                                        <option class="item-cate search_item" value="0">Tất cả</option>
                                                        <option class="item-cate search_item" value="173">Bath &amp; Body works - Victoria's Secret</option>
                                                        <option class="item-cate search_item" value="168">Bộ quà tặng</option>
                                                        <option class="item-cate search_item" value="89">Chăm sóc cá nhân và làm đẹp </option>
                                                        <option class="item-cate search_item" value="100">&nbsp;&nbsp;&nbsp;&nbsp;Chăm sóc cá nhân (Nam)</option>
                                                        <option class="item-cate search_item" value="95">&nbsp;&nbsp;&nbsp;&nbsp;Chăm sóc cá nhân (Nữ)</option>
                                                        <option class="item-cate search_item" value="169">Chăm sóc da mặt</option>
                                                        <option class="item-cate search_item" value="129">Chăm sóc sức khoẻ gia đình</option>
                                                        <option class="item-cate search_item" value="134">&nbsp;&nbsp;&nbsp;&nbsp;Chăm sóc gia đình</option>
                                                        <option class="item-cate search_item" value="133">&nbsp;&nbsp;&nbsp;&nbsp;Thuốc bổ, Vitamin</option>
                                                        <option class="item-cate search_item" value="167">Chăm sóc tóc</option>
                                                        <option class="item-cate search_item" value="136">Thế giới cho bé</option>
                                                        <option class="item-cate search_item" value="158">&nbsp;&nbsp;&nbsp;&nbsp;Quần áo bé gái</option>
                                                        <option class="item-cate search_item" value="157">&nbsp;&nbsp;&nbsp;&nbsp;Quần áo bé trai</option>
                                                        <option class="item-cate search_item" value="147">Thời trang và Phụ kiện</option>
                                                        <option class="item-cate search_item" value="165">&nbsp;&nbsp;&nbsp;&nbsp;Phụ kiện, Trang sức, Trang điểm</option>
                                                        <option class="item-cate search_item" value="148">&nbsp;&nbsp;&nbsp;&nbsp;Thời trang Nam</option>
                                                        <option class="item-cate search_item" value="149">&nbsp;&nbsp;&nbsp;&nbsp;Thời trang Nữ</option>
                                                        <option class="item-cate search_item" value="160">&nbsp;&nbsp;&nbsp;&nbsp;Underwear (Nam)</option>
                                                        <option class="item-cate search_item" value="159">&nbsp;&nbsp;&nbsp;&nbsp;Underwear (Nữ)</option>
                                                        <option class="item-cate search_item" value="166">Thực phẩm, Bánh kẹo</option>
                                                        <option class="item-cate search_item" value="170">Điện gia dụng </option>
                                                        <option class="item-cate search_item" value="109">Đồ gia dụng</option>
                                                        <option class="item-cate search_item" value="162">&nbsp;&nbsp;&nbsp;&nbsp;Bếp</option>
                                                        <option class="item-cate search_item" value="163">&nbsp;&nbsp;&nbsp;&nbsp;Phòng tắm</option>
                                                        <option class="item-cate search_item" value="161">&nbsp;&nbsp;&nbsp;&nbsp;Đồ dùng gia đình</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="search" value placeholder="Tìm kiếm" class="input-group-field st-default-search-input search-text" autocomplete="off">
                                                <span class="input-group-btn">
                                                    <button class="btn icon-fallback-text" type="button">
                                                        <span class="fa fa-search"></span>
                                                        <span class="hidden-lg hidden-md">Tìm kiếm</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="side-nav-categories hidden-xs hidden-sm" onclick>
                <div class="spverticalmenu">
                    <div class="block-title">Danh mục</div>
                </div>
                <div class="box-content box-category">
                    @if($categories)
                    <ul id="left-menu">
                        @foreach($categories as $category)
                            @if(count($category->children) > 0)
                                <li class="lv0 open menu-icon">
                                    <a class="lv0" href="{{$category->toLink()}}">
                                        <span class="child-title">{{$category->title}} </span>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                    <ul class="lv1">
                                        @foreach($category->children as $child)
                                        <li class="lv1 open">
                                            <a class="lv1" href="{{$child->toLink()}}">
                                                <span class="lv1-title">{{$child->title}}</span>
                                                <ul class="lv2"></ul>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="lv0">
                                    <a class="lv0" href="{{$category->toLink()}}">
                                        <span class="child-title">{{$category->title}}</span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            <ul id="nav" class="hidden-xs hidden-sm row">
                <li class="level0 parent">
                    <a href="{{url('/')}}"><span>Trang chủ</span></a>
                </li>
                <li class="level0 parent">
                    <a href="{{url('gioi-thieu.html')}}"><span>Giới thiệu</span></a>
                </li>
                <li class="level0 parent">
                    <a href="{{url('san-pham.html')}}"><span>Sản phẩm</span></a>
                </li>
                <li class="level0 parent">
                    <a href="{{url('tin-tuc.html')}}"><span>Tin tức</span></a>
                </li>
                <li class="level0 parent">
                    <a href="{{url('lien-he.html')}}"><span>Liên hệ</span></a>
                </li>
            </ul>
            <div class="pull-right menu-img hidden-md hidden-lg" id="cart_mobile"></div>
        </div>
    </div>
</nav>
