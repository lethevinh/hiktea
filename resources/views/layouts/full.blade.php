@extends('layouts.app')
@section('title', '商品列表')
@section('container')
@yield('breadcrumb', View::make('layouts._breadcrumb'))
<div class="container">
    <div class="row">
        <div id="content" class="col-sm-12 col-xs-12 col-md-12">
            @yield('content')
        </div>
    </div>
</div>
@endsection
