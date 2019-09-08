@extends('layouts.page')
@section('title', "Hình Ảnh")
@section('breadcrumb')
<section class="bg_light_orange breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="{{url('assets/images/breadcrumb_bg.png')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>Hình Ảnh </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Hình Ảnh
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
                        @foreach($galleries as $gallery)
                        <li class="grid_item {{$gallery->slug}}">
                            <div class="gallery_item">
                                <a class="image_link" href="{{$gallery->link}}">
                                    <img src="{{url('storage/'.$gallery->images[0])}}" alt="image">
                                </a>
                                <div class="gallery_content">
                                    <div class="link_container link_popup link_container_{{$gallery->type}}">
                                        <a class="image_popup" href="{{url('storage/'.$gallery->images[0])}}">
                                            @if($gallery->type=="image")
                                                <i class="ion-image"></i>
                                            @else
                                                <i class="ion-play"></i>
                                            @endif
                                        </a>
                                    </div>
                                    <h5>
                                        <a href="{{$gallery->link}}">
                                            {{$gallery->title}}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
