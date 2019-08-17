@extends('layouts.page')
@section('title', '')
@section('breadcrumb')
    <div class="bg_breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
            </ul>
        </div>
    </div>
@stop
@section('content')
    <div id="content" class="col-sm-12 col-xs-12 col-md-12">
        <div class="page-header">
            <h1>{{$msg}}</h1>
        </div>
    </div>
@stop
