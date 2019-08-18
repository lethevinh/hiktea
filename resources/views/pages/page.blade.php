@extends('layouts.page')
@section('title', $page->title)
@section('breadcrumb')
    <div class="bg_breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{$page->toLink()}}">{{$page->title}}</a></li>
            </ul>
        </div>
    </div>
@stop
@section('content')
  <div id="content" class="col-sm-12 col-xs-12 col-md-12">
      <div class="page-header">
          <h1>{{$page->title}}</h1>
      </div>
      <p style="margin-bottom: 10px; padding: 0px; color: #525252; font-family: Arial, Helvetica, sans-serif;">
        {!!$page->content!!}
      </p>
  </div>
@stop
