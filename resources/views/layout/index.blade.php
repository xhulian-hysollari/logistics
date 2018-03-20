<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Mukta+Vaani:300,400,500,600,700|Open+Sans:300,400,600,700,800,900"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('new/css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('new/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('new/css/dark.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('new/css/swiper.css')}}" type="text/css"/>

    <!-- Bootstrap Select CSS -->
    <link rel="stylesheet" href="{{asset('new/css/components/bs-select.css')}}" type="text/css"/>

    <!-- car Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('new/demos/car/car.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('new/demos/car/css/car-icons/style.css')}}" type="text/css"/>
    <!-- / -->

    <link rel="stylesheet" href="{{asset('new/css/font-icons.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('new/css/animate.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('new/css/magnific-popup.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{asset('new/demos/car/css/fonts.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{asset('new/css/responsive.css')}}" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{asset('new/css/colors.php?color=c85e51')}}" type="text/css"/>

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('new/include/rs-plugin/css/settings.css')}}" media="screen"/>
    <link rel="stylesheet" type="text/css" href="{{asset('new/include/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('new/include/rs-plugin/css/navigation.css')}}">

    <!-- Document Title
    ============================================= -->
    <title>Max Logistics | Transportation and Logistics Platform</title>

    <style>
        /* Revolution Slider */
        .ares .tp-tab {
            border: 1px solid #eee;
        }

        .ares .tp-tab-content {
            margin-top: -4px;
        }

        .ares .tp-tab-content {
            padding: 15px 15px 15px 110px;
        }

        .ares .tp-tab-image {
            width: 80px;
            height: 80px;
        }

        .widget_links li, .widget_links li a {
            background-image: none !important;
            padding-left: 0;
            color: #ddd !important;
            font-size: 16px;
            font-weight: 400;
            padding-top: 1px;
        }

        .dark .slider-caption, .dark .slider-caption h2 {
            color: white;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 10px;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
            width: -webkit-fill-available !important;
        }

        .pagination > li {
            padding: 5px;
        }
    </style>
    @section('css')@show

</head>

<body class="stretched side-push-panel"
      data-loader-html="<div><img src='{{asset('new/images/preloader@2x.gif')}}' alt='Loader'></div>">

<!-- Side Panel Overlay -->
<div class="body-overlay"></div>

<!-- Side Panel -->
<div id="side-panel">

    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

    <div class="side-panel-wrap">

        <div class="widget clearfix">

            <a href="{{route('home')}}"><img src="{{asset('media/logo-new.png')}}" alt="Max Logo" height="50"></a>

            <p>It has always been, and will always be, about quality. We're passionate about ethically providing the
                finest logistic service. We'd like to hear your message!</p>

            <div class="widget quick-contact-widget noborder notoppadding clearfix">

                <h4>Quick Contact</h4>
                <div class="quick-contact-form-result"></div>
                <form id="quick-contact-form" name="quick-contact-form"
                      action="{{action('ContactController@contact')}}" method="post"
                      class="quick-contact-form nobottommargin">
                    <div class="form-process"></div>
                    <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name"
                           name="full_name" value="" placeholder="Full Name"/>
                    <input type="text" class="required sm-form-control email input-block-level"
                           id="quick-contact-form-email" name="email" value=""
                           placeholder="Email Address"/>
                    <input type="text" class="required sm-form-control phone input-block-level"
                           id="quick-contact-form-phone" name="phone" value=""
                           placeholder="Phone Number"/>
                    <textarea class="required sm-form-control input-block-level short-textarea"
                              id="quick-contact-form-message" name="message" rows="4" cols="30"
                              placeholder="Message"></textarea>
                    <input type="text" class="hidden" id="quick-contact-form-botcheck"
                           name="quick-contact-form-botcheck" value=""/>
                    <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit"
                            class="button button-small button-3d nomargin" value="submit">Send Email
                    </button>
                </form>

            </div>


        </div>

    </div>

</div>

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="static-sticky full-header clearfix">

        <div id="header-wrap">

            <div class="container-fluid clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                    ============================================= -->
                <div id="logo">
                    <a href="{{route('home')}}" class="standard-logo"><img src="{{asset('media/logo-new.png')}}"
                                                                           alt="Max Logo" height="50">
                    </a>
                    <a href="{{route('home')}}" class="retina-logo"><img src="{{asset('media/logo-new.png')}}"
                                                                         alt="Max Logo" height="50">
                    </a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="with-arrows clearfix">
                    <ul>
                        <li class="{!! classActivePath('home') !!}"><a href="{{route('home')}}">
                                <div>Home</div>
                            </a></li>
                        <!-- Mega Menu -->
                        {{--<li class="mega-menu"><a href="#"><div>Models</div></a>--}}
                        {{--<div class="mega-menu-content style-2 clearfix">--}}
                        {{--<ul class="mega-menu-column col-lg-12">--}}
                        {{--<li>--}}
                        {{--<div class="widget center clearfix">--}}

                        {{--<h3 class="nobottommargin">Featured Models</h3>--}}
                        {{--<a href="#" class="button button-small button-rounded button-border button-dark button-black font-primary" style="margin: 10px 0 40px">Show all Cars</a>--}}

                        {{--<!-- Mega Menu Cars Carousel -->--}}
                        {{--<div class="owl-carousel customjs image-carousel carousel-widget" data-margin="20" data-nav="false" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="4" data-items-lg="6" data-items-xl="6">--}}
                        {{--<div class="oc-item center"><a href="#"><img src="{{asset('new/demos/car/images/mega-menu/1.png')}}" alt="Car">BMW 1 Series ActiveE</a></div>--}}
                        {{--<div class="oc-item center"><a href="#"><img src="{{asset('new/demos/car/images/mega-menu/4.png')}}" alt="Car">Mercedes-Benz S-Class</a></div>--}}
                        {{--<div class="oc-item center"><a href="#"><img src="{{asset('new/demos/car/images/mega-menu/5.png')}}" alt="Car">Gran Turismo</a></div>--}}
                        {{--<div class="oc-item center"><a href="#"><img src="{{asset('new/demos/car/images/mega-menu/6.png')}}" alt="Car">Mclaren 675LT SPIDER</a></div>--}}
                        {{--<div class="oc-item center"><a href="#"><img src="{{asset('new/demos/car/images/mega-menu/7.png')}}" alt="Car">Honda City</a></div>--}}
                        {{--<div class="oc-item center"><a href="#"><img src="{{asset('new/demos/car/images/mega-menu/8.png')}}" alt="Car">Toyota Qualis</a></div>--}}
                        {{--<div class="oc-item center"><a href="#"><img src="{{asset('new/demos/car/images/mega-menu/9.png')}}" alt="Car">Honda WR-V</a></div>--}}
                        {{--<div class="oc-item center"><a href="#"><img src="{{asset('new/demos/car/images/mega-menu/10.png')}}" alt="Car">Suzuki Breeza</a></div>--}}
                        {{--<div class="oc-item center"><a href="#"><img src="{{asset('new/demos/car/images/mega-menu/2.png')}}" alt="Car">Chevrolet Spark</a></div>--}}
                        {{--<div class="oc-item center"><a href="#"><img src="{{asset('new/demos/car/images/mega-menu/3.png')}}" alt="Car">Honda JaZZ</a></div>--}}

                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--</li>--}}
                        <li{!! classActivePath('about') !!}><a href="{{route('about')}}">
                                <div>About Us</div>
                            </a></li>
                        <li{!! classActivePath('plans') !!}><a href="{{route('plans')}}">
                                <div>Pricing</div>
                            </a></li>
                        <li{!! classActivePath('freight') !!}><a href="{{route('freight')}}">
                                <div>{{trans('navigation.freight')}}</div>
                            </a></li>
                        <li{!! classActivePath('truck') !!}><a href="{{route('truck')}}">
                                <div>{{trans('navigation.truck')}}</div>
                            </a>
                        </li>
                        <li{!! classActivePath('tender') !!}><a href="{{route('tender')}}">
                                <div>Tenders</div>
                            </a>
                        </li>
                        <li{!! classActivePath('tender') !!}><a href="#{{route('tender')}}">
                                <div>Security</div>
                            </a>
                        </li>
                        @if(\Cartalyst\Sentinel\Laravel\Facades\Sentinel::check())
                            <li{!! classActivePath('dashboard') !!}><a href="{{route('dashboard')}}">Platform</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle"
                                   data-toggle="dropdown">{{Sentinel::getUser()->full_name}} <i
                                            class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li{!! classActivePath('dashboard.profile') !!}><a href="{{route('dashboard.profile')}}">{{trans('navigation.profile')}}</a>
                                    </li>
                                    <li{!! classActivePath('logout') !!}><a href="{{route('logout')}}">{{trans('navigation.logout')}}</a></li>
                                </ul>
                            </li>
                        @else
                            <li{!! classActivePath('register') !!}><a href="{{route('register')}}">
                                    <div>Register</div>
                                </a></li>
                            <li{!! classActivePath('login') !!}><a href="{{route('login')}}">
                                    <div>Login</div>
                                </a></li>
                        @endif
                        <li{!! classActivePath('contact') !!}><a href="{{route('contact')}}">
                                <div>Contacts</div>
                            </a></li>
                    </ul>
                </nav><!-- #primary-menu end -->
            </div>

        </div>

        <div id="header-trigger"><i class="icon-line-menu"></i><i class="icon-line-cross"></i></div>

    </header><!-- #header end -->
@include('client.partials.alerts')

<!-- Slider
    ============================================= -->
@section('slider')@show

<!-- Content
    ============================================= -->
    <section id="content" class="clearfix">

        <div class="content-wrap nobottompadding" style="padding-top: 1px">

            @section('content')
            @show

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark noborder" style="background-color: #080808;">

        <div class="container-fluid clearfix">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix" style="padding: 30px;">

                <div class="row clearfix">
                    <div class="col-md-8">
                        @if($pages = \App\Models\Pages::all())
                            <div class="col_one_third">
                                <div class="widget widget_links clearfix">
                                    <h4>USEFUL LINKS</h4>
                                    <ul>
                                        @foreach($pages as $page)
                                            <li>
                                                <a href="{{route('pages', [$page->slug])}}">{!! strip_tags($page->page_title) !!}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="col_one_third">
                            <div class="widget widget_links clearfix">
                                <h4>{{trans('navigation.main')}}</h4>
                                <ul>
                                    <li>
                                        <a href="{{route('home')}}">{{trans('navigation.home')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('freight')}}">{{trans('navigation.freight')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('truck')}}">{{trans('navigation.truck')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">{{trans('navigation.contact')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col_one_third col_last">
                            <div class="widget widget_links clearfix">
                                <h4>{{trans('navigation.contact')}}</h4>
                                <span><strong>Max LOGISTICS LTD.</strong></span>
                                <ul>
                                    @if(count($contacts = \App\Models\Setting::where('type',0)->get()) > 0)
                                        @foreach($contacts as $contact)
                                            <li>
                                                <i class="fa fa-{{trans('settings.icon_'.$contact->title)}}"></i> {{$contact->value}}
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 fright tright col_last">

                        <br>
                        <div style="color: #ddd; font-size:medium">
                            <span>&copy; Max Logistics. All Rights Reserved.</span>
                            <div class="clear"></div>
                            <p style="margin-top: 10px;">Powered by
                                <a href="https://inovap.com" style="color:#5da5f3" target="_blank">Inovap</a> &copy;
                                2017 All rights reserved.</p>
                        </div>

                    </div>
                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- Contact Button
============================================= -->
<div id="contact-me" class="icon-line-mail side-panel-trigger bgcolor"></div>

<!-- External JavaScripts
============================================= -->
<script src="{{asset('new/js/jquery.js')}}"></script>
<script src="{{asset('new/js/plugins.js')}}"></script>
<script src="{{asset('new/demos/car/js/360rotator.js')}}"></script>

<!-- Bootstrap Select Plugin -->
<script src="{{asset('new/js/components/bs-select.js')}}"></script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="{{asset('new/include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('new/include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('new/include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('new/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('new/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('new/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('new/include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('new/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('new/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('new/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('new/include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('new/js/functions.js')}}"></script>

<script>

    //Car Appear In View
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top + 180;
        var elemBottom = elemTop + $(elem).height() - 500;

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    $(window).scroll(function () {
        $('.running-car').each(function () {
            if (isScrolledIntoView(this) === true) {
                $(this).addClass('in-view');
            } else {
                $(this).removeClass('in-view');
            }
        });
    });

    //threesixty degree
    window.onload = init;
    var car;

    function init() {

        car = $('.360-car').ThreeSixty({
            totalFrames: 52, // Total no. of image you have for 360 slider
            endFrame: 52, // end frame for the auto spin animation
            currentFrame: 3, // This the start frame for auto spin
            imgList: '.threesixty_images', // selector for image list
            progress: '.spinner', // selector to show the loading progress
            imagePath: 'demos/car/images/360degree-cars/', // path of the image assets
            filePrefix: '', // file prefix if any
            ext: '.png', // extention for the assets
            height: 887,
            width: 500,
            navigation: true,
            responsive: true,
        });
    };

    // Rev Slider
    var tpj = jQuery;
    var revapi424;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_424_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_424_1");
        } else {
            revapi424 = tpj("#rev_slider_424_1").show().revolution({
                sliderType: "carousel",
                jsFileLocation: "include/rs-plugin/js/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 7000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style: "uranus",
                        enable: false,
                        hide_onmobile: false,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: -10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: -10,
                            v_offset: 0
                        }
                    },
                    carousel: {
                        maxRotation: 65,
                        vary_rotation: "on",
                        minScale: 55,
                        vary_scale: "on",
                        horizontal_align: "center",
                        vertical_align: "center",
                        fadeout: "on",
                        vary_fade: "on",
                        maxVisibleItems: 5,
                        infinity: "off",
                        space: 0,
                        stretch: "on"
                    }
                    ,
                    tabs: {
                        style: "ares",
                        enable: true,
                        width: 270,
                        height: 80,
                        min_width: 270,
                        wrapper_padding: 10,
                        wrapper_color: "transparent",
                        wrapper_opacity: "0.5",
                        tmp: '<div class="tp-tab-content">  <span class="tp-tab-date">@{{param1}}</span>  <span class="tp-tab-title">@{{title}}</span></div><div class="tp-tab-image"></div>',
                        visibleAmount: 7,
                        hide_onmobile: false,
                        hide_under: 420,
                        hide_onleave: false,
                        hide_delay_mobile: 1200,
                        hide_delay: 200,
                        direction: "horizontal",
                        span: true,
                        position: "outer-bottom",
                        space: 20,
                        h_align: "left",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 0
                    }
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 992, 768, 420],
                gridheight: [600, 500, 960, 720],
                lazyType: "single",
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
    /*ready*/

    // Video on play on hover
    jQuery(document).ready(function ($) {
        $('.videoplay-on-hover').hover(function () {
            if ($(this).find('video').length > 0) {
                $(this).find('video').get(0).play();
            }
        }, function () {
            if ($(this).find('video').length > 0) {
                $(this).find('video').get(0).pause();
            }
        });
    });
</script>

@section('js')@show
</body>
</html>