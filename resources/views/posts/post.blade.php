@extends('layouts.page')
@section('title', "Bai Viet")
@section('breadcrumb')
<section class="bg_light_orange breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="{{url('assets/images/breadcrumb_bg.png')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>Bài Viết </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Bài Viết
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
<section class="layout-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="single_post">
                    <div class="single_post_content bg-white">
                        <div class="blog_text">
                            <h2 class="blog_title">{{$post->title}}</h2>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                                <li><a href="#"><i class="far fa-comments"></i>4 Comment</a></li>
                            </ul>
                            <strong>{{$post->description}}</strong>
                            <p> {!! $post->content !!}</p>
                            <div class="border-top border-bottom blog_post_footer">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-8 mb-3 mb-md-0">
                                        <div class="tags">
                                            @foreach($post->categories as $category)
                                                <a href="{{ $category->link }}">
                                                    {{$category->title}}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-md-right">
                                        <div class="share">
                                            <ul class="list_none social_icons">
                                                <li><a href="https://www.facebook.com/sharer.php?u=https{{$post->link}}}" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                                <li><a href="https://twitter.com/intent/tweet?text={{$post->title}}&url={{$post->link}}" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related_post">
                        <div class="posts-title">
                            <h4 class="text-center text-bold">Bài Viết Liên Quan</h4>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="carousel_slide3 owl-carousel owl-theme" data-dots="false" data-margin="30">
                                    @foreach($category->posts as $p)
                                    <div class="item">
                                        <div class="blog_post">
                                            <div class="blog_img">
                                                <a href="{{$p->link}}">
                                                    <img src="{{$p->image_url}}" alt="{{$p->title}}">
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <h3 class="blog_title text-uppercase">
                                                    <a href="{{$p->link}}">{{$p->title}}</a>
                                                </h3>
                                                <time>{{date('d-m-Y', strtotime($p->created_at))}}</time>
                                                <p>{{str_limit($p->description, 150, '...')}}</p>
                                                <a href="{{$p->link}}" class="blog_link">Xem Thêm <i class="ion-ios-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG-->
@endsection
@section('scriptsAfterJs')
@endsection
