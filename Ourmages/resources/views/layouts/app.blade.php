<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>thempleite - Responsive Website Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" type="text/css" href="{{url('template/assets/plugins/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('template/assets/plugins/owl-carousel/owl.theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('template/assets/plugins/headereffects/css/component.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('template/assets/plugins/headereffects/css/normalize.css')}}" />
    <link href="{{url('template/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css"
        media="screen" />
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="{{url('template/assets/plugins/boostrapv3/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('template/assets/plugins/boostrapv3/css/bootstrap-theme.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{url('template/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
        type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
    <!-- BEGIN CSS TEMPLATE -->
    <link href="{{url('template/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('template/assets/css/magic_space.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('template/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('template/assets/css/animate.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<body>
    <div class="main-wrapper">
        @include('partials.header')
        <div class="section first white">
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
    <!-- BEGIN CORE JS FRAMEWORK -->
    <script type="text/javascript" src="{{url('template/assets/plugins/jquery-1.8.3.min.js')}}"></script>
    <script src="{{url('template/assets/plugins/boostrapv3/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- END CORE JS FRAMEWORK -->
    <!-- BEGIN JS PLUGIN -->
    <script src="{{url('template/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{url('template/assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
    <script src="{{url('template/assets/plugins/modernizr.custom.js')}}" type="text/javascript"></script>
    <script src="{{url('template/assets/plugins/waypoints.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{url('template/assets/plugins/jquery-nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script type="text/javascript" src="{{url('template/assets/plugins/jquery-isotope/jquery.isotope.js')}}"></script>
    <!-- END JS PLUGIN -->
    <script type="text/javascript" src="{{url('template/assets/js/core.js')}}"></script>
</body>
</html>
