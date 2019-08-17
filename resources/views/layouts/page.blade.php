@extends('layouts.app')
@section('title', '商品列表')
@section('container')
@yield('breadcrumb', View::make('layouts._breadcrumb'))
<div class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</div>
@endsection
