<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1" />-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#FFFFFF" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Shop US Mart Cindy') - Shop US Mart Cindy </title>
    <!-- 样式 -->
    <!-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/blogmate.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/kiti.scss.css')}}" rel="stylesheet">
    <!--<link href="catalog/view/theme/maxstore/stylesheet/style.css?v=1522720225" rel="stylesheet" />-->
    <link href="{{ url('assets/css/flexslider.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/jquery.jgrowl.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/clockdown.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/checkout.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/stylesheet.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/stylesheet_1.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/custom.css')}}" rel="stylesheet">
    <!-- Script -->
    <script type="text/javascript" src="{{ url('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/countries.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/masonry.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/double_tab_togo.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/common_base.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/common.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/cloud-zoom.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/parallax.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery.jgrowl.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/cs.script.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/api.jquery.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/axios.min.js')}}"></script>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v4.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    </script>
    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="642873192843355">
    </div>
</head>

<body id="revo" class="cms-index-index cms-home-page product-productall">
        @include('layouts._header')
        @yield('container')
        @include('layouts._footer')
    <!-- JS 脚本 -->
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    @yield('scriptsAfterJs')
</body>

</html>
