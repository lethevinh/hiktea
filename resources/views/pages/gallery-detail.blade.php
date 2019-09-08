@extends('layouts.page')
@section('title', $gallery->title)
@section('breadcrumb')
<section class="bg_light_orange breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="{{url('assets/images/breadcrumb_bg.png')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>{{$gallery->title}} </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('hinh-anh.html')}}">
                               Hình Ảnh
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                           {{$gallery->title}}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@stop
@section('content')
<section class="menus">
    <div class="container">
        <div>
            <div class="row">
                <div class="col-md-12 text-center">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="grid_container gutter_medium work_col3">
                        <li class="grid-sizer"></li><!-- START GALLERY ITEM-->
                        @if($gallery->type == 'image')
                            @foreach($gallery->images as $image)
                            <li class="grid_item {{$gallery->slug}}">
                                <div class="gallery_item">
                                    <a class="image_link" href="#">
                                        <img src="{{url('storage/'.$image)}}" alt="image"></a>
                                    <div class="gallery_content">
                                        <div class="link_container link_popup link_container_{{$gallery->type}}">
                                            <a class="image_popup" href="{{url('storage/'.$image)}}">
                                                <i class="ion-{{$gallery->type}}"></i>
                                            </a>
                                        </div>
                                       {{--<h5>
                                            <a href="#">Grapes</a>
                                        </h5>
                                        <div class="pr_categories">
                                            <a href="#">Fruits</a>
                                        </div>--}}
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        @else
                            @foreach($gallery->medias as $video)
                            <li class="grid_item {{$gallery->slug}}">
                                <div class="gallery_item">
                                    <a class="image_link" href="#">
                                        @if($video['thumbnail'])
                                            <img src="{{$video['thumbnail']}}" alt="image">
                                        @else
                                        <img src="{{url('storage/'.$gallery->images[0])}}" alt="image">
                                        @endif
                                    </a>
                                    <div class="gallery_content">
                                        <div class="link_container link_popup link_container_{{$gallery->type}}">
                                            <a class="image_popup" href="https://www.facebook.com/v2.3/plugins/video.php?allowfullscreen=true&autoplay=true&container_width=800&href={{$video['link']}}">
                                                <i class="ion-play"></i>
                                            </a>
                                        </div>
                                       <h5 data-i="{{$video['thumbnail']}}">
                                            <a href="#">{{$video['title']}}</a>
                                        </h5>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
