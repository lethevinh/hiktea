@extends('layouts.page')
@if($category)
    @section('title', $category->title)
@else
    @section('title', "Sản Phẩm")
@endif
@section('breadcrumb')
    <div class="bg_breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="{{url('san-pham.html')}}">Sản Phẩm</a></li>
                @if($category)
                    <li><a href="{{$category->link}}">{{$category->title}}</a></li>
                @endif
            </ul>
        </div>
    </div>
@stop
@section('content')
<div id="content" class="col-sm-12 col-xs-12 col-md-9 col-md-push-3 collection">
    <div class="category-description std">
        <div class="slider-items-products"></div>
        <div class>
            @if($category)
                <h1 class="cat-heading">Sản phẩm - {{$category->title}}</h1>
            @else
                <h1 class="cat-heading">Sản phẩm </h1>
            @endif
        </div>
    </div>
    <div class="category-products">
        <article class="col-main">
            <div class="toolbar">
                <div class="toolleft">
                    <div class="sorter pull-left">
                        <ul class="tab-collection tab">
                            <li class="tab-collection-grid tablinks">
                                <a href="javascript:void(0)" class="grid-grid active" data-toggle="tooltip" title="Lưới"></a></li>
                            <li class="tab-collection-list tablinks">
                                <a href="javascript:void(0)" class="list-list" data-toggle="tooltip" title="Danh sách"></a></li>
                        </ul>
                    </div>
                    <div class="compare pull-left hidden">
                        <div class>
                            <a href="index.php?route=product/compare" id="compare-total" class="btn btn-link">So sánh sản phẩm (0)</a>
                        </div>
                    </div>
                </div>
                <div class="toolright">
                    <div id="sort-by" class="custom-select">
                        <label class="left" for="input-sort">Sắp xếp theo: </label>
                        <span class="right-arrow"></span>
                        <select id="input-sort" class="form-control" onchange="location = this.value;">
                            <option value="https://usmartcindy.com/san-pham?sort=p.date_added&amp;order=DESC&amp;limit=1200" selected="selected">Mặc định</option>
                            <option value="https://usmartcindy.com/san-pham?sort=pd.name&amp;order=ASC&amp;limit=1200">Tên (A - Z)</option>
                            <option value="https://usmartcindy.com/san-pham?sort=pd.name&amp;order=DESC&amp;limit=1200">Tên (Z - A)</option>
                            <option value="https://usmartcindy.com/san-pham?sort=p.price&amp;order=ASC&amp;limit=1200">Giá (Thấp &gt; Cao)</option>
                            <option value="https://usmartcindy.com/san-pham?sort=p.price&amp;order=DESC&amp;limit=1200">Giá (Cao &gt; Thấp)</option>
                            <option value="https://usmartcindy.com/san-pham?sort=p.model&amp;order=ASC&amp;limit=1200">Dòng sản phẩm (A - Z)</option>
                            <option value="https://usmartcindy.com/san-pham?sort=p.model&amp;order=DESC&amp;limit=1200">Dòng sản phẩm (Z - A)</option>
                        </select>
                    </div>
                    <div id="limit" class="custom-select">
                        <label class="left" for="input-limit">Hiển thị: </label>
                        <span class="right-arrow"></span>
                        <select id="input-limit" class="form-control" onchange="location = this.value;">
                            <option value="https://usmartcindy.com/san-pham?limit=12">12</option>
                            <option value="https://usmartcindy.com/san-pham?limit=24">24</option>
                            <option value="https://usmartcindy.com/san-pham?limit=36">36</option>
                            <option value="https://usmartcindy.com/san-pham?limit=48">48</option>
                            <option value="https://usmartcindy.com/san-pham?limit=60">60</option>
                            <option value="https://usmartcindy.com/san-pham?limit=120">120</option>
                        </select>
                    </div>
                </div>
            </div>
            <!--product list-->
            <div id="grid" class="tabcontent">
                <div class="category-products row masonry-container">
                   @foreach($products as $product)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item-collection item cls_item">
                        <div class="col-item">
                            <div class="item-inner">
                                <div class="product-wrapper">
                                    <div class="thumb-wrapper">
                                        <a href="{{$product->toLink()}}" title="{{ $product->title }}">
                                            <img src="{{ $product->image_url }}" class="img-fix" alt="{{ $product->title }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title">
                                          <a href="{{$product->toLink()}}">{{ $product->title }}</a>
                                      </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                        <span class="price">{{ $product->price }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <form class="variants">
                                            <a type="button" class="button btn-cart add_to_cart" title="Mua ngay" href="index.php?route=checkout/cart/add&amp;product_id=1046&amp;redirect=true">
                                                <span>Mua ngay</span>
                                            </a>
                                        </form>
                                        <div class="eye-product">
                                            <a href="{{$product->toLink()}}" title="{{ $product->title }}">
                                                <img class="eye-img" src="{{url('assets/images/eye.png')}}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     @endforeach
                </div>
            </div>
            <div id="list" class="tabcontent" style="display: none;">
                <div class="category-products pull-left">
                    <ol class="products-list cls_list" id="products-list">
                      @foreach($products as $product)
                        <li class="item even">
                            <div class="product-image">
                                <a href="{{$product->toLink()}}" title="{{ $product->title }} ">
                                    <img class="small-image" src="{{ $product->image_url }}" alt="{{ $product->title }} "></a>
                            </div>
                            <div class="product-shop">
                                <h3 class="product-name">
                                    <a href="{{$product->toLink()}}" title="{{ $product->title }} ">{{ $product->title }} </a></h3>
                                <div class="price-box">
                                    <span class="regular-price">
                                        <span class="price">{{ $product->price }}</span>
                                    </span>
                                </div>
                                <div class="desc std">
                                    <p>
                                        {{ $product->description }}
                                    </p>
                                </div>
                                <div class="actions">
                                    <form class="variants">
                                        <button type="button" class="button btn-cart btn-more" title="Mua ngay" href="index.php?route=checkout/cart/add&amp;product_id=1046&amp;redirect=true">
                                            <span>Mua ngay</span>
                                        </button>
                                    </form>
                                    <div class="eye-product">
                                        <a href="{{$product->toLink()}}" title="{{ $product->title }} ">
                                            <img class="eye-img" src="{{url('assets/images/eye.png')}}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                       @endforeach
                        {{--<li class="item odd">
                            <div class="product-image">
                                <a href="keo-deo-nhai-tam-biet-stress.html" title="Kẹo dẻo nhai tạm biệt Stress">
                                    <img class="small-image" src="images/60427248_1100661726788897_2241200581723029504_n-400x400.jpg" alt="Kẹo dẻo nhai tạm biệt Stress"></a>
                            </div>
                            <div class="product-shop">
                                <h3 class="product-name">
                                    <a href="keo-deo-nhai-tam-biet-stress.html" title="Kẹo dẻo nhai tạm biệt Stress">Kẹo dẻo nhai tạm biệt Stress</a></h3>
                                <div class="price-box">
                                    <span class="regular-price">
                                        <span class="price">765,000đ</span>
                                    </span>
                                </div>
                                <div class="desc std">
                                    <p>Kẹo dẻo nhai tạm biệt Stress,nói không với căng thẳng tinh thần. Nói xin chào với OLLY Tạm biệt Stress.&#8230; <a class="link-learn" href="keo-deo-nhai-tam-biet-stress.html">Xem</a>
                                    </p>
                                </div>
                                <div class="actions">
                                    <form class="variants">
                                        <button type="button" class="button btn-cart btn-more" title="Mua ngay" href="index.php?route=checkout/cart/add&amp;product_id=1045&amp;redirect=true">
                                            <span>Mua ngay</span>
                                        </button>
                                    </form>
                                    <div class="eye-product">
                                        <a href="keo-deo-nhai-tam-biet-stress.html" title="Kẹo dẻo nhai tạm biệt Stress">
                                            <img class="eye-img" src="images/eye.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>--}}
                    </ol>
                </div>
            </div>
            <div class="pager">
                <div class="pages">
                    <div class="float-right">{{ $products->appends($filters)->render() }}</div>
                </div>
            </div>
        </article>
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
        $(document).ready(function() {
            $('.lv1 a[href="' + window.location.href + '"]').parent().addClass('selected');
            $('.lv1 a[href="' + window.location.href + '"]').closest('.lv0').addClass('selected');
        });

        </script>
        <link rel="stylesheet" type="text/css" href="assets/css/filter.css">
        <div class="filter-container danh-muc-blog ">
            <div class="color-blog">
                <h2 class="title-blog">Lọc sản phẩm</h2>
            </div>
            <form name="filter_form" method="post" action>
                <div class="filter-group" id="filter-group-price">
                    <div class="filter-group-title filter-group-title--green">Giá</div>
                    <ul>
                        <li class="filter-item filter-item--check-box filter-item--green">
                            <a href="javascript:void(0)" class="checkbox">
                                <label>
                                    <input type="radio" name="price" value="0" onclick="loadFilter()" checked="checked">
                                    Tất cả </label>
                            </a>
                        </li>
                        <li class="filter-item filter-item--check-box filter-item--green">
                            <a href="javascript:void(0)" class="checkbox">
                                <label>
                                    <input type="radio" name="price" value="8" onclick="loadFilter()">
                                    <i class="fa"></i>
                                    Dưới 500k </label>
                            </a>
                        </li>
                        <li class="filter-item filter-item--check-box filter-item--green">
                            <a href="javascript:void(0)" class="checkbox">
                                <label>
                                    <input type="radio" name="price" value="9" onclick="loadFilter()">
                                    <i class="fa"></i>
                                    500k - 1tr </label>
                            </a>
                        </li>
                        <li class="filter-item filter-item--check-box filter-item--green">
                            <a href="javascript:void(0)" class="checkbox">
                                <label>
                                    <input type="radio" name="price" value="10" onclick="loadFilter()">
                                    <i class="fa"></i>
                                    1 - 3 tr </label>
                            </a>
                        </li>
                        <li class="filter-item filter-item--check-box filter-item--green">
                            <a href="javascript:void(0)" class="checkbox">
                                <label>
                                    <input type="radio" name="price" value="11" onclick="loadFilter()">
                                    <i class="fa"></i>
                                    Trên 3tr </label>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer text-right hidden">
                    <button type="button" id="button-filter" class="btn btn-primary"></button>
                </div>
            </form>
            <script type="text/javascript">
            function loadFilter() {
                var url = 'https://usmartcindy.com/san-pham?path=0&limit=1200';
                var arr = [];

                var price = $('input[name^=\'price\']:checked').val();
                if (price != null) {
                    arr.push('price_filter=' + price);
                }

                var manufacturer = [];
                $('input[name^=\'manufacturer\']:checked').each(function(element) {
                    manufacturer.push(this.value);
                });

                if (manufacturer.length != 0) {
                    arr.push('manufacturer_filter=' + manufacturer.join(','));
                }

                var option = [];
                $('input[name^=\'option\']:checked').each(function(element) {
                    option.push(this.value);
                });

                if (option.length != 0) {
                    arr.push('option_filter=' + option.join(','));
                }

                if (arr.length > 0) {
                    var path = arr.join('&');
                    location = (url.indexOf('?') >= 0) ? url + '&' + path : url + '?' + path;
                }
            }

            </script>
        </div>
    </aside>
</div>
{{--
<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="card">
            <div class="card-body">
                <!-- 筛选组件开始 -->
                <form action="{{ route('products.index') }}" class="search-form">
                    <div class="form-row">
                        <div class="col-md-9">
                            <div class="form-row">
                                <div class="col-auto"><input type="text" class="form-control form-control-sm" name="search" placeholder="搜索"></div>
                                <div class="col-auto"><button class="btn btn-primary btn-sm">搜索</button></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select name="order" class="form-control form-control-sm float-right">
                                <option value="">排序方式</option>
                                <option value="price_asc">价格从低到高</option>
                                <option value="price_desc">价格从高到低</option>
                                <option value="sold_count_desc">销量从高到低</option>
                                <option value="sold_count_asc">销量从低到高</option>
                                <option value="rating_desc">评价从高到低</option>
                                <option value="rating_asc">评价从低到高</option>
                            </select>
                        </div>
                    </div>
                </form>
                <!-- 筛选组件结束 -->
                <div class="row products-list">
                    @foreach($products as $product)
                    <div class="col-3 product-item">
                        <div class="product-content">
                            <div class="top">
                                <div class="img">
                                    <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                        <img src="{{ $product->image_url }}" alt="">
                                    </a>
                                </div>
                                <div class="price"><b>￥</b>{{ $product->price }}</div>
                                <div class="title">
                                    <a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="sold_count">销量 <span>{{ $product->sold_count }}笔</span></div>
                                <div class="review_count">评价 <span>{{ $product->review_count }}</span></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="float-right">{{ $products->appends($filters)->render() }}</div> <!-- 只需要添加这一行 -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('scriptsAfterJs')
<script>
var filters = {!!json_encode($filters) !! };
$(document).ready(function() {
    $('.search-form input[name=search]').val(filters.search);
    $('.search-form select[name=order]').val(filters.order);
    $('.search-form select[name=order]').on('change', function() {
        $('.search-form').submit();
    });
})

</script>
--}}
@endsection
