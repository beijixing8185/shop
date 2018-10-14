<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head lang="en">
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
 {{--   <link rel="stylesheet" href="{{asset('css/index.css')}}"/>--}}
    <link rel="stylesheet" href="{{asset('css/pop.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/propopup.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/footer.css')}}"/>
    <script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/demand.js')}}"></script>
    <script src="{{asset('js/demand-top.js')}}"></script>
    <script src="{{asset('js/xslider.js')}}"></script>
    <script src="{{asset('js/iconfont.js')}}"></script>
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/common.js')}}"></script>
    @yield('css')
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <script src="{{asset('js/excanvas.min.js')}}"></script>
    <![endif]-->

</head>
<body>
@include('./common/header')
@yield('content')
@yield('js')
@include('./common/footer')
</body>
</html>