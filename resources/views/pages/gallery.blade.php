@extends('layouts.page')
@section('title', "Hình Ảnh")
@section('breadcrumb')
<section class="bg_light_orange breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="assets/images/breadcrumb_bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>Hình Ảnh </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="#">
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
                    <ul class="list_none grid_filter">
                        <li><a class="current" href="#" data-filter="*">all</a></li>
                        @foreach($galleries as $gallery)
                        <li>
                            <a href="#" data-filter=".{{$gallery->slug}}">
                                {{$gallery->title}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="grid_container gutter_medium work_col4">
                        <li class="grid-sizer"></li><!-- START GALLERY ITEM-->
                        @foreach($galleries as $gallery)
                        @foreach($gallery->images as $image)
                        <li class="grid_item {{$gallery->slug}}">
                            <div class="gallery_item">
                                <a class="image_link" href="#">
                                    <img src="{{url('storage/'.$image)}}" alt="image"></a>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a class="image_popup" href="assets/images/gallery_item1.jpg"><i class="ion-image"></i></a></div>
                                    <h5>
                                        <a href="#">Grapes</a>
                                    </h5>
                                    <div class="pr_categories">
                                        <a href="#">Fruits</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
