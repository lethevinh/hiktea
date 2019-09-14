@extends('layouts.page')
@section('title', $page->title)
@section('breadcrumb')
<section class="bg_light_orange background_breadcrumb breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="{{url('assets/images/breadcrumb_bg.png')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>{{$page->title}} </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{$page->title}}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@stop
@section('content')
<!-- START SECTION ABOUT US -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about_wrap">
                    <div class="row align-items-center">
                        <div class="order-md-first animation" data-animation="bounceInUp" data-animation-delay="0.4s">
                            <div class="heading_s2">
                                <span class="sub_heading">
                                  With Happy Life
                                </span>
                                <h2>{{$page->title}}</h2>
                            </div>
                            <p>
                              {!! $page->content !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape25">
            <div class="animation" data-animation="bounceInDown" data-animation-delay="0.5s">
                <img data-parallax='{"y": -30, "smoothness": 20}' src="{{ url('assets/images/shape44.png')}}" alt="shape44" />
            </div>
        </div>
        <div class="ol_shape26">
            <div class="animation" data-animation="zoomIn" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="{{ url('assets/images/shape45.png')}}" alt="shape45" />
            </div>
        </div>
        <div class="ol_shape27">
            <div class="animation" data-animation="zoomIn" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="{{ url('assets/images/shape46.png')}}" alt="shape46" />
            </div>
        </div>
        <div class="ol_shape28">
            <div class="animation" data-animation="bounceInUp" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="{{ url('assets/images/shape47.png')}}" alt="shape47" />
            </div>
        </div>
        <div class="ol_shape29">
            <div class="animation" data-animation="slideInRight" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="{{ url('assets/images/shape48.png')}}" alt="shape48" />
            </div>
        </div>
        <div class="ol_shape30">
            <div class="animation" data-animation="slideInRight" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="{{ url('assets/images/shape49.png')}}" alt="shape49" />
            </div>
        </div>
        <div class="ol_shape31">
            <div class="animation" data-animation="slideInRight" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="{{ url('assets/images/shape50.png')}}" alt="shape50" />
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT US -->
@stop
