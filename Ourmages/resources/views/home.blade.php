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
    <script type="text/javascript" src="{{url('template/assets/plugins/jquery-1.8.3.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="{{url('template/assets/plugins/slider-plugin/js/slider1.min.js')}}"></script>
    <script type="text/javascript" src="{{url('template/assets/plugins/slider-plugin/js/slider2.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('template/assets/plugins/slider-plugin/css/settings.css')}}"
        media="screen" />
</head>
<!-- END HEAD -->
<body>
    <div class="main-wrapper">
        
        <div class="section ha-waypoint" data-animate-down="ha-header-hide" data-animate-up="ha-header-hide">
            @include('partials.header')
            <!--BEGIN SLIDER -->
            <div class="tp-banner-container">
                <div class="tp-banner" id="home">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="{{url('template/assets/img/bg/slide_one.jpg')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center"
                                data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider" data-x="center"
                                data-hoffset="0" data-y="80" data-speed="500" data-start="800" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <h2 class="text-white custom-font title ">
                                    We Create<br>
                                    Unlimited
                                    <br />
                                    Storages for Customers</h2>
                            </div>
                            <div class="tp-caption sfb slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="320" data-speed="800" data-start="1000" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <a href="#" class="btn btn-info btn-lg  btn-large m-r-10">Use Now</a>
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="{{url('template/assets/img/bg/picture-1.jpg')}}" alt="slidebg2" data-bgfit="cover" data-bgposition="center center"
                                data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider" data-x="center"
                                data-hoffset="0" data-y="120" data-speed="500" data-start="800" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <h2 class="text-white custom-font title ">
                                    We Craft<br>
                                    Our Work to Last Perfection!</h2>
                            </div>
                            <div class="tp-caption sfb slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="300" data-speed="800" data-start="1000" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <a href="#" class="btn btn-info btn-lg  btn-large m-r-10">Know More About Us</a>
                            </div>
                            <div class="tp-caption fade slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="360" data-speed="500" data-start="800" data-easing="Power4.easeOut" data-endspeed="300"
                                data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <a href="#" class="text-white m-r-10">or view our pricing</a>
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="{{url('template/assets/img/bg/picture-2.jpg')}}" alt="slidebg2" data-bgfit="cover" data-bgposition="center center"
                                data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider" data-x="center"
                                data-hoffset="0" data-y="120" data-speed="500" data-start="800" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <h2 class="text-white custom-font title ">
                                    We Build the Trust<br>
                                    That Our Clients Needs</h2>
                            </div>
                            <div class="tp-caption sfb slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="300" data-speed="800" data-start="1000" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <a href="#" class="btn btn-info btn-lg  btn-large m-r-10">Download Now</a>
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer">
                    </div>
                </div>
            </div>
            <!--END SLIDER	-->
        </div>
        <div class="section white ha-waypoint" data-animate-down="ha-header-color" data-animate-up="ha-header-hide">
            <div class="container">
                <div class="p-t-60">
                    <div class="row">
                        <div class="col-md-12 feature-list ">
                            <div class="col-md-4 " data-ride="animated" data-animation="fadeIn" data-delay="300">
                                <i class="fa fa-archive fa-4x"></i>
                                <h4 class="title">
                                    WEB DESIGN</h4>
                                <p>
                                    Intriguing web designs and fascinating results, makes you happy and earns us a loyal
                                    customer – Always there, looking after you!
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="600">
                                <i class="fa fa-cog fa-4x"></i>
                                <h4 class="title">
                                    CUSTOMIZATION</h4>
                                <p>
                                    We push. We make you nervous. We get results. Let's get to work. Whenever you need,
                                    you will find always there, looking after you!
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="900">
                                <i class="fa fa-share fa-4x"></i>
                                <h4 class="title">
                                    SOCIAL</h4>
                                <p>
                                    As your business flourishes, we grow as a business and so our team makes sure that
                                    your growth is supported and we go hand in hand.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 feature-list">
                            <div class="col-md-4 " data-ride="animated" data-animation="fadeIn" data-delay="1200">
                                <i class="fa fa-code fa-4x"></i>
                                <h4 class="title">
                                    TEMPLATES</h4>
                                <p>
                                    We work to deliver results, celebrate entrepreneurship, stand for justice, and believe
                                    in the progress of common good.
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="1500">
                                <i class="fa fa-asterisk fa-4x"></i>
                                <h4 class="title">
                                    BASED ON BOOTSTRAP 3</h4>
                                <p>
                                    This free template is based on the popular Twitter Bootstrap Frameowrk. You can
                                    easily customize if you have little Bootstrap 3 knowledge.
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="1800">
                                <i class="fa fa-expand  fa-4x"></i>
                                <h4 class="title">
                                    RESPONSIVE DESIGN</h4>
                                <p>
                                    Every project begins with a round of research and discovery. We dig through the
                                    values, strategy, and organizational culture that make you unique.
                                </p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
        <div class="section black contact-details green-icons">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="services-box-3">
                            <i class="fa fa-phone"></i>
                            <div class="content">
                                <p>
                                    Phone</p>
                                <h3>
                                    +1 555 666 9999</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="services-box-3">
                            <i class="fa fa-envelope"></i>
                            <div class="content">
                                <p>
                                    E-mail</p>
                                <h3>
                                    letstalk@thempleite.com</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="services-box-3">
                            <i class="fa fa-map-marker "></i>
                            <div class="content">
                                <p>
                                    Postal</p>
                                <h3>
                                    32-Grey Suite, NY</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="services-box-3">
                            <i class="fa fa-pinterest-square"></i>
                            <div class="content">
                                <p>
                                    Pinterest</p>
                                <h3>
                                    pinterest.com/frittt</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section white footer">
            <div class="container">
                <div class="p-t-30 p-b-50">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 xs-m-b-20">
                            <img src="{{url('template/assets/img/logo_condensed.png')}}" alt="" data-src="{{url('template/assets/img/logo_condensed.png')}}"
                                data-src-retina="{{url('template/assets/img/logo2x.png')}}" width="119" height="22" />
                            <br />
                            <br />
                            © Frittt Templates.
                            <br />
                            All Rights Reserved.
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-4  col-xs-12 xs-m-b-20">
                            <address class="xs-no-padding  col-md-6 col-lg-6 col-sm-6  col-xs-12">
                                32 - Grey Suite<br>
                                Odd Street,<br>
                                NY, USA.
                            </address>
                            <div class="xs-no-padding col-md-6 col-lg-6 col-sm-6">
                                <div>
                                    (1) 555 666 9999</div>
                                <a href="javascript:">letstalk@thempleite.com</a>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 xs-m-b-20">
                            <div class="bold">
                                We Are Hiring</div>
                            Send you resume at <a href="javascript:">careers@thempleite.com</a>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 ">
                            <div class="bold">
                                FOLLOW US</div>
                            <br />
                            <a href="javascript:"><i class="fa fa-facebook fa-2x"></i></a>&nbsp; <a href="javascript:">
                                <i class="fa fa-twitter fa-2x"></i></a>&nbsp; <a href="javascript:"><i class="fa fa-youtube-play  fa-2x">
                                </i></a>&nbsp; <a href="javascript:"><i class="fa fa-github fa-2x"></i></a>&nbsp;
                            <a href="javascript:"><i class="fa fa-dribbble fa-2x"></i></a>&nbsp; <a href="javascript:">
                                <i class="fa fa-pinterest fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('template/assets/plugins/boostrapv3/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{url('template/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{url('template/assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
    <script src="{{url('template/assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{url('template/assets/plugins/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{url('template/assets/plugins/parrallax/js/jquery.parallax-1.1.3.js')}}"></script>
    <script type="text/javascript" src="{{url('template/assets/plugins/jquery-nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script type="text/javascript" src="{{url('template/assets/plugins/jquery-appear/jquery.appear.js')}}"></script>
    <script src="{{url('template/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{url('template/assets/js/core.js')}}"></script>
</body>
</html>
