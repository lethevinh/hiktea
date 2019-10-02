@extends('layouts.page')
@if($category)
@section('title', $category->title)
@else
@section('title', "Bài Viết")
@endif
@section('breadcrumb')
@section('breadcrumb')
<section class="bg_light_orange breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="{{url('assets/images/breadcrumb_bg.png')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>

                        @if($category)
                            {{$category->title}}
                        @else
                            Bài Viết
                        @endif
                    </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="{{url('bai-viet.html')}}"> Bài Viết</a>
                        </li>
                        @if($category)
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{$category->link}}">
                                {{$category->title}}
                            </a>
                        </li>
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@stop
@section('content')
<!-- START SECTION BLOG-->
<section>
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-4 col-md-6">
                <div class="blog_post bg-white">
                    <div class="blog_img">
                        <a href="{{$post->link}}">
                            <img src="{{ $post->image_url }}" alt=" {{$post->title}}">
                        </a>
                    </div>
                    <div class="blog_content">
                        <h3 class="blog_title text-uppercase">
                            <a href="{{$post->link}}">{{$post->title}}</a>
                        </h3>
                        <time>{{date('d-m-Y', strtotime($post->created_at))}}</time>
                        <p>{{str_limit($post->description, 150, '...')}}</p>
                        <a href="{{$post->link}}" class="blog_link">Xem Thêm <i class="ion-ios-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 mt-4">
                {{ $posts->appends($filters)->render() }}
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG-->
@endsection
@section('scriptsAfterJs')
@endsection
