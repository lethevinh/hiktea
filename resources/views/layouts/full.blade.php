@extends('layouts.app')
@section('title', '商品列表')
@section('container')
@yield('breadcrumb', View::make('layouts._breadcrumb'))
@yield('content')
@endsection
