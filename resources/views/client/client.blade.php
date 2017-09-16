<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <title>@section('title') @show</title>
    <link rel="stylesheet" href="{{asset('client/css/master.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/font-icons.css')}}">
    @section('css')
    @show
    <style>
        #this-is-top {
            border-top: none;
        }

        .slider-content {
            background: rgba(0, 0, 0, 0.5);
            padding: 15px;
        }

        .navbar-nav {
            margin: 0;
        }

        .why-us li span, .topmenu nav, .topmenu:before, footer, #to-top, .two-news > div div:last-child > div {
            background-color: #5bc0de;
        }

        header, .topmenu nav:first-child:before {
            border-top-color: #5bc0de;
        }

        .why-us li span, .topmenu nav, .topmenu:before, footer, #to-top, .two-news > div div:last-child > div {
            background: #5bc0de;
        }

        header, .topmenu nav:first-child:before {
            border-top-color: #5bc0de;
        }

        header {
            border-bottom: 5px solid #5bc0de;
        }

        .navigation {
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
            line-height: 62px;
            font-size: 13px;
            font-weight: 700;
            position: relative;
            height: 100%;
            overflow-y: auto;
        }

        .navigation > li {
            padding: 21px 0 24px;
        }

        .navbar-main > li > .dropdown-menu, footer .color-part, .btn.btn-danger, .btn.btn-danger:hover, .btn.btn-danger, .btn.btn-danger:hover, .main-menu, .main-menu:before, #main-menu-bg, .stats > div > div:hover, .btn.btn-sm.btn-default:before, .big-hr.color-2, .our-services.styled div > a:hover:after, .adress-details > div > span:after, .comments > div > a.reply:hover, .comments > div > a.reply:after, nav.pagination a:hover, .tags a:hover, ul.blog-cats > li:hover, #menu-open, .main-menu section nav, .our-services div > a:hover > span, .testimonial-content span, .info-texts:after, .post-info:after, .customBgColor {
            background-color: #5bc0de;
        }

        .nav-pills > li > a {
            border-radius: 0;
        }

        .block-content {
            margin-top: 30px;
        }

        #logo {
            width: 142px !important;
            height: 131px !important;
            margin-top: 5px;
        }

        .nav > li > a:focus, .nav > li > a:hover {
            text-decoration: none;
            background-color: #5bc0de;
        }

        .alert {
            margin-bottom: 0;
        }

        footer, footer a, footer .copy {
            color: white;
        }
    </style>
</head>
<body>
<div class="sp-body">
    @include('client.partials.header')
    @include('client.partials.alerts')
    @section('slider')
    @show
    <div class="row" style="background-color:#5bc0de;">
        <div id="left-side" class="col-md-2 hidden-sm hidden-xs navigation " style="padding-right: 0">
            <div style="text-align: center">
                <h4><p style="color:white">MARKETPLACE</p></h4>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><a style="padding:0 20px; color:white"
                       href="{{route('freight')}}">{{trans('navigation.freight')}}</a></li>
                <li><a style="padding:0 20px; color:white" href="{{route('truck')}}">{{trans('navigation.truck')}}</a>
                </li>
                <li><a style="padding:0 20px; color:white" href="{{route('truck')}}">Tenders</a>
                </li>
            </ul>
            <hr>
            <div style="padding: 15px">
                <div style="text-align: center">
                    <h4><p style="color:white">Like what you see?</p>
                        <p style="color:white">Login to make the most of it</p></h4>
                </div>
                @if(\Cartalyst\Sentinel\Laravel\Facades\Sentinel::guest())
                    @include('client.partials.login')
                @else
                    @include('client.partials.profile')
                @endif

                <div style="text-align: center; margin-top: 20px;">
                    <h4><p style="color:white">Don't have an account yet?</p>
                        <a class="btn btn-success" href="{{route('register')}}">{{trans('navigation.register')}}</a>
                    </h4>
                </div>
            </div>
        </div>
        <div id="main" class="col-md-8" style="background-color:white; padding: 30px">
            @section('content')
            @show
        </div>
        <div id="left-side" class="col-md-2 visible-sm visible-xs navigation " style="padding-right: 0">
            <div style="text-align: center">
                <h4><p style="color:white">MARKETPLACE</p></h4>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><a style="padding:0 20px; color:white"
                       href="{{route('freight')}}">{{trans('navigation.freight')}}</a></li>
                <li><a style="padding:0 20px; color:white" href="{{route('truck')}}">{{trans('navigation.truck')}}</a>
                </li>
                <li><a style="padding:0 20px; color:white" href="{{route('truck')}}">{{trans('navigation.gps')}}</a>
                </li>
                <li><a style="padding:0 20px; color:white" href="{{route('truck')}}">{{trans('navigation.tenders')}}</a>
                </li>
            </ul>
            <hr>
            <div style="padding: 15px">
                @if(!Sentinel::check())
                    <div style="text-align: center">
                        <h4><p style="color:white">Like what you see?</p>
                            <p style="color:white">Login to make the most of it</p></h4>
                    </div>
                    @include('client.partials.login')


                    <div style="text-align: center; margin-top: 20px;">
                        <h4><p style="color:white">Don't have an account yet?</p>
                            <a class="btn btn-success" href="{{route('register')}}">{{trans('navigation.register')}}</a>
                        </h4>
                    </div>
                @else
                    @include('client.partials.profile')
                @endif
            </div>
        </div>
        <div class="col-md-2">
            <div class="call-to-action">
                <div style="text-align: center; margin-top: 20px;">
                    <h4><p style="color:white">Want more?</p>
                        <p style="color:white">Place your add here.</p>
                    </h4>
                    <a class="btn btn-success" href="{{route('register')}}">{{trans('navigation.register')}}</a>
                </div>
            </div>
            <div id="partners" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true"
                 data-min450="1" data-min600="1" data-min768="1" style="margin-top: 50px;">

                <div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img style="width: 100%; height:118px  "
                                                                                 src="{{asset('client/img/partner1.jpg')}}"
                                                                                 alt="Img"></a></div>


            </div>
            <div id="partners" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true"
                 data-min450="1" data-min600="1" data-min768="1" style="margin-top: 50px;">

                <div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img style="width: 100%; height:118px  "
                                                                                 src="{{asset('client/img/partner1.jpg')}}"
                                                                                 alt="Img"></a></div>


            </div>
        </div>
    </div>

    @include('client.partials.footer')
</div>
<script src="{{asset('client/js/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('client/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('client/js/bootstrap.min.js')}}"></script>
<script src="{{asset('client/js/modernizr.custom.js')}}"></script>
<script src="{{asset('client/assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('client/js/waypoints.min.js')}}"></script>
<script src="{{asset('client/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('client/assets/owl-carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('client/assets/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('client/js/jquery.smooth-scroll.js')}}"></script>
<script src="{{asset('client/js/wow.min.js')}}"></script>
<script src="{{asset('client/js/jquery.placeholder.min.js')}}"></script>
<script src="{{asset('client/js/smoothscroll.min.js')}}"></script>
<script src="{{asset('client/js/theme.js')}}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });
    $(document).ready(function () {
        $('#main').css('min-height', $('#left-side').height());
        console.log($('#main').height());
    });
</script>
@section('js')
@show
</body>
</html>
