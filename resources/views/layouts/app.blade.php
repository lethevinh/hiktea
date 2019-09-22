<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#FFFFFF" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Shop US Mart Cindy') - Shop US Mart Cindy </title>
    <!-- 样式 -->
    <!-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ url('assets/css/app.min.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{ url('assets/css/custom.css')}}" rel="stylesheet"> -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Script -->
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"> </script>--}}
    <script src="{{ url('assets/js/jquery-1.12.4.min.js')}}"> </script>
    <script src="{{ url('assets/js/jquery-ui.js')}}"></script>
    <script src="{{ url('assets/js/popper.min.js')}}"></script>
    <script src="{{ url('assets/js/moment.min.js')}}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js')}}"> </script>
    <script src="{{ url('assets/js/owl.carousel.min.js')}}"> </script>
    <script src="{{ url('assets/js/magnific-popup.min.js')}}"> </script>
    <script src="{{ url('assets/js/waypoints.min.js')}}"> </script>
    <script src="{{ url('assets/js/parallax.js')}}"> </script>
    <script src="{{ url('assets/js/jquery.dd.min.js')}}"></script>
    <script src="{{ url('assets/js/jquery.countdown.min.js')}}"> </script>
    <script src="{{ url('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ url('assets/js/jquery.parallax-scroll.js')}}"></script>
    <script src="{{ url('assets/js/jquery.elevatezoom.js')}}"></script>
    <script src="{{ url('assets/js/jquery.fitvids.js')}}"></script>
    <script src="{{ url('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ url('assets/js/isotope.min.js')}}"></script>
    <script src="{{ url('assets/js/js.cookie.js')}}"></script>
{{--    <script type="text/javascript" src="{{ url('assets/js/vendor.42ed3a.min.js')}}"></script>--}}
{{--    <script type="text/javascript" src="{{ url('assets/js/app.42ed3a.min.js')}}"></script>--}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=135625333838087&autoLogAppEvents=1"></script>
</head>

<body class="hik_skin home-page" id="page-top">
    @include('layouts._loading')
    @include('layouts._header')
    <main>
        @yield('container')
    </main>
    @include('layouts._footer')
    <!-- JS 脚本 -->
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    <script src="{{ url('assets/js/scripts.js')}}"></script>
    <script src="{{ url('assets/js/order.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/custom.js')}}"></script>
    @yield('scriptsAfterJs')
</body>

</html>
