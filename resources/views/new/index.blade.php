<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Mukta+Vaani:300,400,500,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css" type="text/css" />

    <!-- Bootstrap Select CSS -->
    <link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

    <!-- car Specific Stylesheet -->
    <link rel="stylesheet" href="demos/car/car.css" type="text/css" />
    <link rel="stylesheet" href="demos/car/css/car-icons/style.css" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="demos/car/css/fonts.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="css/colors.php?color=c85e51" type="text/css" />

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

    <!-- Document Title
    ============================================= -->
    <title>Automotive | Canvas</title>

    <style>
        /* Revolution Slider */
        .ares .tp-tab { border: 1px solid #eee; }
        .ares .tp-tab-content { margin-top: -4px; }
        .ares .tp-tab-content { padding: 15px 15px 15px 110px; }
        .ares .tp-tab-image { width: 80px;height: 80px; }

    </style>

</head>

<body class="stretched side-push-panel" data-loader-html="<div><img src='demos/car/images/page-loader.gif' alt='Loader'></div>">

<!-- Side Panel Overlay -->
<div class="body-overlay"></div>

<!-- Side Panel -->
<div id="side-panel">

    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

    <div class="side-panel-wrap">

        <div class="widget clearfix">

            <a href="index.html"><img src="demos/car/images/logo@2x.png" alt="Canvas Logo" height="50"></a>

            <p>It has always been, and will always be, about quality. We're passionate about ethically sourcing the finest coffee beans, roasting them with great care. We'd like to hear your message!</p>

            <div class="widget quick-contact-widget noborder notoppadding clearfix">

                <h4>Quick Contact</h4>
                <div class="quick-contact-form-result"></div>
                <form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">
                    <div class="form-process"></div>
                    <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                    <input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                    <textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                    <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                    <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
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
                    <a href="index.html" class="standard-logo"><img src="demos/car/images/logo.png" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo"><img src="demos/car/images/logo@2x.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="with-arrows clearfix">
                    <ul>
                        <li class="current"><a href="#"><div>Home</div></a></li>
                        <!-- Mega Menu -->
                        <li class="mega-menu"><a href="#"><div>Models</div></a>
                            <div class="mega-menu-content style-2 clearfix">
                                <ul class="mega-menu-column col-lg-12">
                                    <li>
                                        <div class="widget center clearfix">

                                            <h3 class="nobottommargin">Featured Models</h3>
                                            <a href="#" class="button button-small button-rounded button-border button-dark button-black font-primary" style="margin: 10px 0 40px">Show all Cars</a>

                                            <!-- Mega Menu Cars Carousel -->
                                            <div class="owl-carousel customjs image-carousel carousel-widget" data-margin="20" data-nav="false" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="4" data-items-lg="6" data-items-xl="6">
                                                <div class="oc-item center"><a href="#"><img src="demos/car/images/mega-menu/1.png" alt="Car">BMW 1 Series ActiveE</a></div>
                                                <div class="oc-item center"><a href="#"><img src="demos/car/images/mega-menu/4.png" alt="Car">Mercedes-Benz S-Class</a></div>
                                                <div class="oc-item center"><a href="#"><img src="demos/car/images/mega-menu/5.png" alt="Car">Gran Turismo</a></div>
                                                <div class="oc-item center"><a href="#"><img src="demos/car/images/mega-menu/6.png" alt="Car">Mclaren 675LT SPIDER</a></div>
                                                <div class="oc-item center"><a href="#"><img src="demos/car/images/mega-menu/7.png" alt="Car">Honda City</a></div>
                                                <div class="oc-item center"><a href="#"><img src="demos/car/images/mega-menu/8.png" alt="Car">Toyota Qualis</a></div>
                                                <div class="oc-item center"><a href="#"><img src="demos/car/images/mega-menu/9.png" alt="Car">Honda WR-V</a></div>
                                                <div class="oc-item center"><a href="#"><img src="demos/car/images/mega-menu/10.png" alt="Car">Suzuki Breeza</a></div>
                                                <div class="oc-item center"><a href="#"><img src="demos/car/images/mega-menu/2.png" alt="Car">Chevrolet Spark</a></div>
                                                <div class="oc-item center"><a href="#"><img src="demos/car/images/mega-menu/3.png" alt="Car">Honda JaZZ</a></div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#"><div>Car Listing</div></a></li>
                        <li><a href="#"><div>Dealers</div></a></li>
                        <li><a href="#"><div>Accessories</div></a></li>
                        <li><a href="#"><div>Interiors</div></a></li>
                        <li><a href="#"><div>FAQs</div></a></li>
                        <li><a href="#"><div>Blogs</div></a></li>
                        <li><a href="#"><div>Contacts</div></a></li>
                    </ul>
                </nav><!-- #primary-menu end -->
            </div>

        </div>

        <div id="header-trigger"><i class="icon-line-menu"></i><i class="icon-line-cross"></i></div>

    </header><!-- #header end -->

    <!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element swiper_wrapper full-screen clearfix" data-dots="true" data-loop="true" data-grab="false">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('demos/car/images/hero-slider/4.jpg'); background-size: cover">
                    <div class="container clearfix">
                        <div class="slider-caption top-left center">
                            <h2 class="font-primary nott">Renegade 730S</h2>
                            <p class="t300 font-primary d-none d-sm-block">Raise your limits over</p>
                            <a href="#" class="button button-rounded button-border button-white button-light nott">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide dark" style="background-image: url('demos/car/images/hero-slider/2.jpg'); background-size: cover">
                    <div class="container clearfix">
                        <div class="slider-caption center">
                            <h2 class="font-primary nott">Chevrolet Traverse</h2>
                            <p class="t300 font-primary d-none d-sm-block">New and Powerful SUV</p>
                            <a href="#" class="button button-rounded button-border button-white button-light nott">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide dark" style="background-image: url('demos/car/images/hero-slider/3.jpg'); background-size: cover">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2 class="font-primary nott">Audi 2018 S5 Cabriolet</h2>
                            <p class="t300 font-primary d-none d-sm-block">A Black Diamond</p>
                            <a href="#" class="button button-rounded button-border button-white button-light nott">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section><!-- #Slider End -->

    <!-- Content
    ============================================= -->
    <section id="content" class="clearfix">

        <div class="content-wrap nobottompadding" style="padding-top: 1px">

            <!-- Masonry Thums
            ============================================= -->
            <div class="masonry-thumbs dark grid-3 clearfix">
                <a href="#">
                    <img class="image_fade" src="demos/car/images/categories/1.jpg" alt="Image 1">
                    <div class="overlay">
                        <div class="text-overlay">
                            <div class="text-overlay-title">
                                <h3>Exteriors Looks</h3>
                            </div>
                            <div class="text-overlay-meta">
                                <span>McLaren 430L</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <img class="image_fade" src="demos/car/images/categories/2.jpg" alt="Image 2">
                    <div class="overlay">
                        <div class="text-overlay">
                            <div class="text-overlay-title">
                                <h3>Interior Looks</h3>
                            </div>
                            <div class="text-overlay-meta">
                                <span>Beautiful Dashing Interiors &rarr;</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <img class="image_fade" src="demos/car/images/categories/3.jpg" alt="Image 3">
                    <div class="overlay">
                        <div class="text-overlay">
                            <div class="text-overlay-title">
                                <h3>Our Stores</h3>
                            </div>
                            <div class="text-overlay-meta">
                                <span>find out Stores &rarr;</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Moving car on scroll
            ============================================= -->
            <div class="section notopmargin clearfix" style="padding: 100px 0">
                <div class="running-car topmargin-sm">
                    <img class="car" src="demos/car/images/moving-car/car.jpg" alt="">
                    <img class="wheel" src="demos/car/images/moving-car/car-tier.png" alt="">
                </div>
                <div class="container clearfix">
                    <div class="row clearfix" style="position: relative;">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="heading-block hlarge">
                                <h3>Our Fleet<br>Your Fleet</h3>
                            </div>
                            <p>Assertively iterate enterprise-wide portals through synergistic products. Efficiently build adaptive schemas after transparent quality vectors. Phosfluorescently optimize competitive resources after extensive convergence. Rapidiously optimize high-quality meta-services via distributed architectures. Credibly deliver 24/365.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- Moving car on scroll End -->

            <!-- Features Section
            ============================================= -->
            <div class="container clearfix">

                <div class="row clearfix topmargin bottommargin">

                    <div class="col-lg-4 col-md-6 topmargin bottommargin-sm">

                        <div class="heading-block nobottomborder">
                            <h2 class="nott ls0" style="font-size: 44px; line-height: 1.2">Explore the New Mercedec Benz</h2>
                        </div>
                        <span style="color: #BBB;">Eum nihil pretium quas aliqua, laboris ipsam diam congue natoque mollitia occaecati! Cubilia pede, numquam fringilla proident dis? Molestias repellat.<br><br>Quas perferendis urna, officiis necessitatibus deserunt recusandae urna ullamco hac do beatae cubilia iste dolorum, facilisi? Sit, hic, varius! Sollicitudin.<br><br>Nostrum feugiat beatae proident porro eleifend adipiscing nostrud aliquid sit.</span>
                        <div class="clear"></div>
                        <a href="#" class="button button-rounded button-black button-dark noleftmargin topmargin-sm clearfix">Know More</a>

                    </div>

                    <div class="col-lg-4 d-md-none d-lg-block center">
                        <img src="demos/car/images/features/bg1.png" alt="Car">
                    </div>

                    <div class="col-lg-4 col-md-6 topmargin bottommargin-sm">
                        <div class="feature-box fbox-plain topmargin">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-car-battery"></i></a>
                            </div>
                            <h3>Long Battery Life</h3>
                            <p>Canvas provides support for Native HTML5 Videos that can be added to a Background.</p>
                        </div>

                        <div class="feature-box fbox-plain topmargin">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-car-cogs2"></i></a>
                            </div>
                            <h3>24x7 Service</h3>
                            <p>Complete control on each &amp; every element that provides endless customization.</p>
                        </div>

                        <div class="feature-box fbox-plain topmargin">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-car-pump"></i></a>
                            </div>
                            <h3>Petrol, Diesel &amp; LPG</h3>
                            <p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
                        </div>
                    </div>
                </div>

            </div> <!-- Features Area End -->

            <!-- Revolution Slider
            ============================================= -->
            <div class="section nobottommargin clearfix" style="background: #FFF url('demos/car/images/revslider/bg.png') center 70% no-repeat; background-size: 100% auto; padding: 100px 0 10px">
                <div class="container clearfix">
                    <div id="rev_slider_424_1_wrapper" class="rev_slider_wrapper nomargin nopadding fullwidthbanner-container" data-alias="image-gallery">
                        <!-- START REVOLUTION SLIDER 5.2.0 auto mode -->
                        <div id="rev_slider_424_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.2.0">
                            <ul>	<!-- SLIDE  -->
                                <!-- SLIDE  -->
                                <li data-index="rs-1479" data-transition="slidefromleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="demos/car/images/revslider/1.png"  data-rotate="0"  data-saveperformance="off"  data-title="BMW 3 Series Sedan" data-param1="Sedan" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="include/rs-plugin/demos/assets/images/dummy.png"  alt=""  data-lazyload="demos/car/images/revslider/1.png" data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption font-body ls2 uppercase tp-resizeme"
                                         id="slide-1479-layer-1"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['0','0','0','90']"
                                         data-fontsize="['15','15','13','13']"
                                         data-lineheight="['15','15','13','13']"
                                         data-width="['370','370','290','210']"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['left','left','left','left']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-start="600"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 6; min-width: 370px; max-width: 370px; color: #EEE; white-space: nowrap;">BMW - 3 Series </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption font-primary uppercase t700 tp-resizeme"
                                         id="slide-1479-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['30','30','92','68']"
                                         data-fontsize="['40','40','30','20']"
                                         data-lineheight="['40','40','30','20']"
                                         data-width="['500','500','400','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['left','left','left','left']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; color: #FFF; letter-spacing: 2px; white-space: normal;">BMW 3 Series Sedan</div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption font-primary uppercase tp-resizeme"
                                         id="slide-1479-layer-3"
                                         data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['115','115','215','154']"
                                         data-fontsize="['60','60','30','20']"
                                         data-lineheight="['23','23','21','20']"
                                         data-width="['360','360','290','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; font-weight: 700; white-space: normal;">$2,300</div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption font-body ls0 tp-resizeme"
                                         id="slide-1479-layer-4"
                                         data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['200','200','215','154']"
                                         data-fontsize="['14','14','14','13']"
                                         data-lineheight="['23','23','21','20']"
                                         data-width="['360','360','290','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; white-space: normal;">There is, one knows not what sweet mystery about this sea, whose gently awful stirrings seem to speak of some hidden soul beneath; like those fabled undulations of.  </div>

                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption button button-black button-dark button-circle button-large nott tp-resizeme"
                                         id="slide-1479-layer-5"
                                         data-x="['right','right','right','right']" data-hoffset="['25','25','25','25']"
                                         data-y="['top','top','top','top']" data-voffset="['336','346','336','366']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 9; white-space: nowrap;cursor:pointer;">Know More
                                    </div>
                                </li>
                                <!-- SLIDE  -->
                                <li data-index="rs-1480" data-transition="slidefromleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="demos/car/images/revslider/2.png"  data-rotate="0"  data-saveperformance="off"  data-title="Audi A4 - White" data-param1="Sedan" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="include/rs-plugin/demos/assets/images/dummy.png"  alt=""  data-lazyload="demos/car/images/revslider/2.png" data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption font-body ls2 uppercase tp-resizeme"
                                         id="slide-1480-layer-1"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['0','0','0','90']"
                                         data-fontsize="['15','15','13','13']"
                                         data-lineheight="['15','15','13','13']"
                                         data-width="['370','370','290','210']"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['left','left','left','left']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-start="600"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 6; min-width: 370px; max-width: 370px; color: #EEE; white-space: nowrap;">Audi</div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption font-primary uppercase t700 tp-resizeme"
                                         id="slide-1480-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['30','30','92','68']"
                                         data-fontsize="['40','40','30','20']"
                                         data-lineheight="['40','40','30','20']"
                                         data-width="['500','500','400','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['left','left','left','left']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; color: #FFF; letter-spacing: 2px; white-space: normal;">Audi A4 - Sedan</div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption font-primary uppercase tp-resizeme"
                                         id="slide-1480-layer-3"
                                         data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['115','115','215','154']"
                                         data-fontsize="['60','60','30','20']"
                                         data-lineheight="['23','23','21','20']"
                                         data-width="['360','360','290','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; font-weight: 700; white-space: normal;">$2,300</div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption font-body ls0 tp-resizeme"
                                         id="slide-1480-layer-4"
                                         data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['200','200','215','154']"
                                         data-fontsize="['14','14','14','13']"
                                         data-lineheight="['23','23','21','20']"
                                         data-width="['360','360','290','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; white-space: normal;">There is, one knows not what sweet mystery about this sea, whose gently awful stirrings seem to speak of some hidden soul beneath; like those fabled undulations of.  </div>

                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption button button-black button-dark button-circle button-large nott tp-resizeme"
                                         id="slide-1480-layer-5"
                                         data-x="['right','right','right','right']" data-hoffset="['25','25','25','25']"
                                         data-y="['top','top','top','top']" data-voffset="['336','346','336','366']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 9; white-space: nowrap;cursor:pointer;">Know More
                                    </div>
                                </li>
                                <li data-index="rs-1481" data-transition="slidefromleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="demos/car/images/revslider/3.png"  data-rotate="0"  data-saveperformance="off"  data-title="Brand New Mustand" data-param1="Sedan" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="include/rs-plugin/demos/assets/images/dummy.png" alt=""  data-lazyload="demos/car/images/revslider/3.png" data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina">

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption font-body ls2 uppercase tp-resizeme"
                                         id="slide-1481-layer-1"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['0','0','0','90']"
                                         data-fontsize="['15','15','13','13']"
                                         data-lineheight="['15','15','13','13']"
                                         data-width="['370','370','290','210']"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['left','left','left','left']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-start="600"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 6; min-width: 370px; max-width: 370px; color: #EEE; white-space: nowrap;">Ford Mustang </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption font-primary uppercase t700 tp-resizeme"
                                         id="slide-1481-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['30','30','92','68']"
                                         data-fontsize="['40','40','30','20']"
                                         data-lineheight="['40','40','30','20']"
                                         data-width="['500','500','400','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['left','left','left','left']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; color: #FFF; letter-spacing: 2px; white-space: normal;">Brand New Mustang</div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption font-primary uppercase tp-resizeme"
                                         id="slide-1481-layer-3"
                                         data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['115','115','215','154']"
                                         data-fontsize="['60','60','30','20']"
                                         data-lineheight="['23','23','21','20']"
                                         data-width="['360','360','290','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; font-weight: 700; white-space: normal;">$2,300</div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption font-body ls0 tp-resizeme"
                                         id="slide-1481-layer-4"
                                         data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['200','200','215','154']"
                                         data-fontsize="['14','14','14','13']"
                                         data-lineheight="['23','23','21','20']"
                                         data-width="['360','360','290','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; white-space: normal;">There is, one knows not what sweet mystery about this sea, whose gently awful stirrings seem to speak of some hidden soul beneath; like those fabled undulations of.  </div>

                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption button button-black button-dark button-circle button-large nott tp-resizeme"
                                         id="slide-1481-layer-5"
                                         data-x="['right','right','right','right']" data-hoffset="['25','25','25','25']"
                                         data-y="['top','top','top','top']" data-voffset="['336','346','336','366']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 9; white-space: nowrap;cursor:pointer;">Know More
                                    </div>
                                </li>
                                <!-- SLIDE  -->
                                <li data-index="rs-1482" data-transition="slidefromleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="demos/car/images/revslider/4.png"  data-rotate="0"  data-saveperformance="off"  data-title="Audi A3 Cabriolet" data-param1="Convertible" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="include/rs-plugin/demos/assets/images/dummy.png"  alt=""  data-lazyload="demos/car/images/revslider/4.png" data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption font-body ls2 uppercase tp-resizeme"
                                         id="slide-1482-layer-1"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['40','40','40','90']"
                                         data-fontsize="['15','15','13','13']"
                                         data-lineheight="['15','15','13','13']"
                                         data-width="['370','370','290','210']"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['left','left','left','left']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-start="600"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 6; min-width: 370px; max-width: 370px; color: #EEE; white-space: nowrap;">Audi Convertible</div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption font-primary uppercase t700 tp-resizeme"
                                         id="slide-1482-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['70','70','92','68']"
                                         data-fontsize="['40','40','30','20']"
                                         data-lineheight="['40','40','30','20']"
                                         data-width="['500','500','400','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['left','left','left','left']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; color: #FFF; letter-spacing: 2px; white-space: normal;">Audi A3 cabriolet</div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption font-primary uppercase tp-resizeme"
                                         id="slide-1482-layer-3"
                                         data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['115','115','215','154']"
                                         data-fontsize="['60','60','30','20']"
                                         data-lineheight="['23','23','21','20']"
                                         data-width="['360','360','290','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; font-weight: 700; white-space: normal;">$2,300</div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption font-body ls0 tp-resizeme"
                                         id="slide-1482-layer-4"
                                         data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['200','200','215','154']"
                                         data-fontsize="['14','14','14','13']"
                                         data-lineheight="['23','23','21','20']"
                                         data-width="['360','360','290','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; white-space: normal;">There is, one knows not what sweet mystery about this sea, whose gently awful stirrings seem to speak of some hidden soul beneath; like those fabled undulations of.  </div>

                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption button button-black button-dark button-circle button-large nott tp-resizeme"
                                         id="slide-1482-layer-5"
                                         data-x="['right','right','right','right']" data-hoffset="['25','25','25','25']"
                                         data-y="['top','top','top','top']" data-voffset="['336','346','336','366']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 9; white-space: nowrap;cursor:pointer;">Know More
                                    </div>
                                </li>
                                <!-- SLIDE  -->
                                <li data-index="rs-1483" data-transition="slidefromleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="demos/car/images/revslider/5.png"  data-rotate="0"  data-saveperformance="off"  data-title="Mercedes-Benz E-Class" data-param1="Sedan" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="include/rs-plugin/demos/assets/images/dummy.png"  alt=""  data-lazyload="demos/car/images/revslider/5.png" data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption font-body ls2 uppercase tp-resizeme"
                                         id="slide-1483-layer-1"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['40','40','40','90']"
                                         data-fontsize="['15','15','13','13']"
                                         data-lineheight="['15','15','13','13']"
                                         data-width="['370','370','290','210']"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['left','left','left','left']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-start="600"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 6; min-width: 370px; max-width: 370px; color: #EEE; white-space: nowrap;">Mercedes-Benz</div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption font-primary uppercase t700 tp-resizeme"
                                         id="slide-1483-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['70','70','92','68']"
                                         data-fontsize="['40','40','30','20']"
                                         data-lineheight="['40','40','30','20']"
                                         data-width="['500','500','400','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['left','left','left','left']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; color: #FFF; letter-spacing: 2px; white-space: normal;">Mercedes-Benz E-Class</div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption font-primary uppercase tp-resizeme"
                                         id="slide-1483-layer-3"
                                         data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['115','115','215','154']"
                                         data-fontsize="['60','60','30','20']"
                                         data-lineheight="['23','23','21','20']"
                                         data-width="['360','360','290','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; font-weight: 700; white-space: normal;">$2,300</div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption font-body ls0 tp-resizeme"
                                         id="slide-1483-layer-4"
                                         data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['200','200','215','154']"
                                         data-fontsize="['14','14','14','13']"
                                         data-lineheight="['23','23','21','20']"
                                         data-width="['360','360','290','210']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 8; min-width: 360px; max-width: 360px; color: #EEE; white-space: normal;">There is, one knows not what sweet mystery about this sea, whose gently awful stirrings seem to speak of some hidden soul beneath; like those fabled undulations of.  </div>

                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption button button-black button-dark button-circle button-large nott tp-resizeme"
                                         id="slide-1483-layer-5"
                                         data-x="['right','right','right','right']" data-hoffset="['25','25','25','25']"
                                         data-y="['top','top','top','top']" data-voffset="['336','346','336','366']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-type="text"
                                         data-actions=''
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         data-textAlign="['right','right','right','right']"
                                         data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 9; white-space: nowrap;cursor:pointer;">Know More
                                    </div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer hidden"></div>
                        </div>
                    </div><!-- END REVOLUTION SLIDER -->
                </div>
            </div>

            <!-- 360 degree car
            ============================================= -->
            <div class="section dark nobottommargin clearfix" style="background: #FFF url('demos/car/images/1.jpg') right bottom no-repeat; background-size: cover; padding: 80px 0 40px">
                <div class="container-fluid clearfix" style="position: relative; z-index: 2;">
                    <div class="row clearfix">
                        <div class="col-lg-8">
                            <div class="heading-block noborder nobottommargin center">
                                <h3 style="font-size: 32px; text-transform: ;  font-weight: 700;">360 Degree Drag</h3>
                            </div>
                            <!-- 360 degree Car Content -->
                            <div class="threesixty 360-car">
                                <div class="spinner">
                                    <span>0%</span>
                                </div>
                                <ol class="threesixty_images"></ol>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="row clearfix">
                                <div class="col-lg-10">
                                    <div class="heading-block topmargin-sm noborder">
                                        <h3 style="text-transform: none; font-size: 36px; letter-spacing: 0px; font-weight: 700;">Select other Models</h3>
                                        <span>Intrinsicly formulate plug-and-play systems with interactive communities. Quickly aggregate plug-and-play.</span>
                                    </div>
                                    <form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

                                        <div class="col_full">
                                            <select class="selectpicker sm-form-control border-form-control" title="Select Brand" data-live-search="true" data-size="6" style="width:100%;">
                                                <option value="AUDI">Audi</option>
                                                <option value="BMW All Series">BMW All Series</option>
                                                <option value="HONDA">Honda</option>
                                                <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                                                <option value="HONDA">Manza</option>
                                                <option value="MERCEDES-BENZ">Huyndai</option>
                                            </select>
                                        </div>

                                        <div class="col_full">
                                            <select class="selectpicker sm-form-control border-form-control" data-size="6" data-live-search="true" title="Select Model" style="width:100%; line-height: 30px;">
                                                <optgroup label="AUDI">
                                                    <option value="R8">Audi R8</option>
                                                    <option value="TT">Audi TT</option>
                                                    <option value="S5">Audi S5</option>
                                                    <option value="A5">Audi A5</option>
                                                    <option value="TTS">Audi TTS</option>
                                                    <option value="RS5">Audi RS 5</option>
                                                </optgroup>
                                                <optgroup label="BMW All Series">
                                                    <option value="1-Series">BMW 1 Series 5-Door</option>
                                                    <option value="Series-ActiveE">BMW 1 Series ActiveE</option>
                                                    <option value="3-Series-Sedan">BMW 3 Series Sedan</option>
                                                    <option value="ActiveHybrid-3">BMW ActiveHybrid 3</option>
                                                    <option value="5-Series-Sedan">BMW 5 Series Sedan</option>
                                                    <option value="ActiveHybrid-5">BMW ActiveHybrid 5</option>
                                                    <option value="7-Series">BMW 7 Series</option>
                                                    <option value="ActiveHybrid-7">BMW ActiveHybrid 7</option>
                                                    <option value="M3-Sedan">BMW M3 Sedan</option>
                                                    <option value="M5-Sedan">BMW M5 Sedan</option>
                                                    <option value="3-Series-Turismo">BMW 3 Series Gran Turismo</option>
                                                    <option value="5=Series-Turismo">BMW 5 Series Gran Turismo</option>
                                                </optgroup>
                                                <optgroup label="HONDA">
                                                    <option value="Fit">Honda Fit</option>
                                                    <option value="City">Honda City</option>
                                                    <option value="Civic">Honda Civic</option>
                                                    <option value="Fit-EV1">Honda Fit EV1</option>
                                                    <option value="Accord">Honda Accord</option>
                                                    <option value="Crosstour">Honda Crosstour</option>
                                                    <option value="FCX-Clarity">Honda FCX Clarity</option>
                                                    <option value="Civic-Hybrid">Honda Civic Hybrid</option>
                                                    <option value="Accord-Hybrid">Honda Accord Hybrid</option>
                                                    <option value="Accord-Plug-In">Honda Accord Plug-In</option>
                                                </optgroup>
                                                <optgroup label="MERCEDES-BENZ">
                                                    <option value="S-Class">2015 Mercedes-Benz S-Class Sedan</option>
                                                    <option value="C-Class">2015 Mercedes-Benz C-Class Sedan</option>
                                                    <option value="E-Class">2015 Mercedes-Benz E-Class Sedan</option>
                                                    <option value="E-Class-Hybrid">2015 Mercedes-Benz E-Class Hybrid</option>
                                                    <option value="Maybach-S600">2016 Mercedes-Benz Maybach S600</option>
                                                    <option value="B-Class-Electric-Drive">2015 Mercedes-Benz B-Class Electric Drive</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="col_full nobottommargin">
                                            <button class="button button-rounded btn-block t400 nomargin" id="login-form-submit" name="login-form-submit" value="login">Search</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-wrap d-block d-md-block d-lg-none" style="z-index: 0;">
                    <div class="video-overlay" style="background: rgba(255,255,255,0.8);"></div>
                </div>
            </div> <!-- 360 Degree Section End -->

            <!-- 360 degree car
            ============================================= -->
            <div class="section nomargin nobg clearfix" style="padding: 100px 0;">
                <div class="container clearfix">
                    <div class="heading-block center">
                        <div class="before-heading uppercase ls1" style="font-size: 13px; font-style: normal;">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
                        <h3 class="t700">Featured Vehicles</h3>
                    </div>

                    <!-- Portfolio Filter
                    ============================================= -->
                    <ul class="portfolio-filter style-2 clearfix" data-container="#portfolio">
                        <li><a href="#" data-filter=".cf-cuv"><i class="icon-car-cuv"></i><span>Cuv</span></a></li>
                        <li><a href="#" data-filter=".cf-sedan"><i class="icon-car-sedan"></i><span>Sedan</span></a></li>
                        <li><a href="#" data-filter=".cf-supercar"><i class="icon-car-supercar"></i><span>Supercar</span></a></li>
                        <li><a href="#" data-filter=".cf-hatchback"><i class="icon-car-hatchback"></i><span>Hatchback</span></a></li>
                        <li><a href="#" data-filter=".cf-cabriolet"><i class="icon-car-cabriolet"></i><span>Cabriolet</span></a></li>
                        <!-- Show All Button -->
                        <li class="fright activeFilter"><a class="button button-small button-rounded button-reset" href="#" data-filter="*">Show All</a></li>
                    </ul> <!-- #portfolio-filter end -->

                    <div class="clear"></div>

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="portfolio portfolio-3 grid-container clearfix" data-layout="fitRows">

                        <!-- Car 1 -->
                        <article class="portfolio-item cf-sedan" style="padding-bottom: 40px">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="demos/car/images/filter-cars/1.jpg" alt="Open Imagination">
                                    <div class="filter-p-pricing">
                                        <span class="p-price t700 ls1">$32,568</span>
                                        <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Ford Mustang - White</a></h3>
                                <span>Dramatically synthesize parallel applications vis-a-vis revolutionary e-tailers. Monotonectally incubate cooperative partnerships.</span>
                            </div>
                            <div class="row no-gutters car-p-features font-primary clearfix">
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 20000</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-door"></i><span> 5 Seater</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> Automatic</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-wheel"></i><span> 15 Inch</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2015</span></div>
                            </div>
                        </article>

                        <!-- Car 2 -->
                        <article class="portfolio-item cf-suv" style="padding-bottom: 40px">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="demos/car/images/filter-cars/2.jpg" alt="Open Imagination">
                                    <div class="filter-p-pricing">
                                        <span class="p-price t700 ls1">$32,568</span>
                                        <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Chevrolet Brown Traverse</a></h3>
                                <span>Enthusiastically incubate turnkey technologies for exceptional materials. Seamlessly implement emerging scenarios.</span>
                            </div>
                            <div class="row no-gutters car-p-features font-primary clearfix">
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 0-50 mph</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-door"></i><span> 7 Seater</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-paint"></i><span> Brown</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> Manual</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-wheel"></i><span> 20-Inch</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2018</span></div>
                            </div>
                        </article>

                        <!-- Car 3 -->
                        <article class="portfolio-item cf-cabriolet" style="padding-bottom: 40px">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="demos/car/images/filter-cars/3.jpg" alt="Open Imagination">
                                    <div class="filter-p-pricing">
                                        <span class="p-price t700 ls1">$62,300</span>
                                        <span class="p-price-msrp">MSRP : <strong>$62,700</strong></span>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Audi 2018 S5 Cabriolet</a></h3>
                                <span>Competently evolve intuitive synergy without corporate human capital. Monotonectally.</span>
                            </div>
                            <div class="row no-gutters car-p-features font-primary clearfix">
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 0-60 mph</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-bearing"></i><span> Six-cylinder</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 23 mpg8</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> Automatic</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2018</span></div>
                            </div>
                        </article>

                        <!-- Car 4 -->
                        <article class="portfolio-item cf-cuv">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="demos/car/images/filter-cars/4.jpg" alt="Open Imagination">
                                    <div class="filter-p-pricing">
                                        <span class="p-price t700 ls1">$32,568</span>
                                        <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">BMW 3 Series, ABS</a></h3>
                                <span>Energistically engineer user friendly synergy vis-a-vis enabled channels. Rapidiously utilize value-added. Laudantium debitis perferendis obcaecati.</span>
                            </div>
                            <div class="row no-gutters car-p-features font-primary clearfix">
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 0-80 mph</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> Hybrid</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> Automatic</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-stearing"></i><span> 3000</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2017</span></div>
                            </div>
                        </article>

                        <!-- Car 5 -->
                        <article class="portfolio-item cf-supercar">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="demos/car/images/filter-cars/5.jpg" alt="Open Imagination">
                                    <div class="filter-p-pricing">
                                        <span class="p-price t700 ls1">$32,568</span>
                                        <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">2016 LEXUS IS 200T FSPORT</a></h3>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium debitis unde laboriosam perferendis obcaecati.</span>
                            </div>
                            <div class="row no-gutters car-p-features font-primary clearfix">
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-cog3"></i><span> 30,000 mi</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-paint"></i><span> Metalic</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel"></i><span> 11 kmpl</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> Automatic</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-wheel"></i><span> 18 Inch</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2018</span></div>
                            </div>
                        </article>

                        <!-- Car 6 -->
                        <article class="portfolio-item cf-hatchback">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="demos/car/images/filter-cars/6.jpg" alt="Open Imagination">
                                    <div class="filter-p-pricing">
                                        <span class="p-price t700 ls1">$32,568</span>
                                        <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Chevrolet T430 Hatchback</a></h3>
                                <span>Appropriately exploit strategic niche markets rather than optimal products. Enthusiastically negotiate perferendis the art methods of empowermen.</span>
                            </div>
                            <div class="row no-gutters car-p-features font-primary clearfix">
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 20000</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-door"></i><span> 5 Seater</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> Automatic</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-wheel"></i><span> 15 Inch</span></div>
                                <div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2015</span></div>
                            </div>
                        </article>

                    </div>
                </div>
            </div> <!-- Filter Car lists end -->

            <!-- Video Gallery on Hover
            ============================================= -->
            <div class="section nomargin ohidden">
                <div class="heading-block nobottommargin center">
                    <h2>Video Gallery</h2>
                </div>
            </div>
            <div class="dark section nopadding nomargin ohidden" style="height: 740px">
                <div class="row" style="height: 100%;">
                    <!-- Video 1 -->
                    <div class="col-md-6 col-12 nopadding half-screen dark videoplay-on-hover">
                        <a href="#">
                            <div class="vertical-middle center" style="z-index: 1">
                                <div class="before-heading uppercase ls1" style="font-size: 14px; font-style: normal; color: #EEE">Mercedes</div>
                                <h2 class="nobottommargin ls1">Mercedes-AMG GT</h2>
                            </div>
                            <div class="video-wrap">
                                <video id="slide-video-1" poster="demos/car/images/videos/1.jpg" preload="auto" loop muted>
                                    <source src='demos/car/images/videos/1.mp4' type='video/mp4' />
                                </video>
                                <div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
                            </div>
                        </a>
                    </div>
                    <!-- Video 2 -->
                    <div class="col-md-6 col-12 nopadding half-screen dark videoplay-on-hover">
                        <a href="#">
                            <div class="vertical-middle center" style="z-index: 1">
                                <div class="before-heading uppercase ls1" style="font-size: 14px; font-style: normal; color: #EEE">Mercedes</div>
                                <h2 class="nobottommargin ls1">Mercedes-AMG C 63</h2>
                            </div>
                            <div class="video-wrap">
                                <video id="slide-video-2" poster="demos/car/images/videos/2.jpg" preload="auto" loop muted>
                                    <source src='demos/car/images/videos/2.mp4' type='video/mp4' />
                                </video>
                                <div class="video-overlay" style="background: rgba(0,0,0,0.4);"></div>
                            </div>
                        </a>
                    </div>
                    <!-- Video 3 -->
                    <div class="col-md-6 col-12 nopadding half-screen dark videoplay-on-hover">
                        <a href="#">
                            <div class="vertical-middle center" style="z-index: 1">
                                <div class="before-heading uppercase ls1" style="font-size: 14px; font-style: normal; color: #EEE">BMW Auto</div>
                                <h2 class="nobottommargin ls1">BMW Z4 Roadster</h2>
                            </div>
                            <div class="video-wrap">
                                <video id="slide-video-3" poster="demos/car/images/videos/3.jpg" preload="auto" loop muted>
                                    <source src='demos/car/images/videos/3.mp4' type='video/mp4' />
                                </video>
                                <div class="video-overlay" style="background: rgba(0,0,0,0.4);"></div>
                            </div>
                        </a>
                    </div>
                    <!-- Video 4 -->
                    <div class="col-md-6 col-12 nopadding half-screen dark videoplay-on-hover">
                        <a href="#">
                            <div class="vertical-middle center" style="z-index: 1">
                                <div class="before-heading uppercase ls1" style="font-size: 14px; font-style: normal; color: #EEE">Mercedes Benz</div>
                                <h2 class="nobottommargin ls1">Mercedes-COUPÉ GLE 63</h2>
                            </div>
                            <div class="video-wrap">
                                <video id="slide-video-4" poster="demos/car/images/videos/4.jpg" preload="auto" loop muted>
                                    <source src='demos/car/images/videos/4.mp4' type='video/mp4' />
                                </video>
                                <div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> <!-- Video Gallery end -->

            <!-- Counter Area
            ============================================= -->
            <div class="section counter-section nomargin dark clearfix">
                <div class="container clearfix common-height">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 center">
                            <div>
                                <i class="i-plain i-large divcenter color icon-car-fulltime"></i>
                                <div class="counter"><span data-from="10" data-to="11365" data-refresh-interval="50" data-speed="1000"></span></div>
                                <h5>Happy Customers</h5>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 center">
                            <div>
                                <i class="i-plain i-large divcenter color icon-car-money"></i>
                                <div class="counter"><span data-from="10" data-to="145" data-refresh-interval="50" data-speed="700"></span></div>
                                <h5>Cars in Stock</h5>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 center">
                            <div>
                                <i class="i-plain i-large divcenter color icon-car-fan"></i>
                                <div class="counter"><span data-from="10" data-to="50" data-refresh-interval="85" data-speed="1200"></span></div>
                                <h5>Showrooms</h5>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 center">
                            <div>
                                <i class="i-plain i-large divcenter color icon-car-fuel2"></i>
                                <div class="counter"><span data-from="10" data-to="7664" data-refresh-interval="30" data-speed="900"></span></div>
                                <h5>Awwards</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Counter Area end -->

            <!-- Featured Section
            ============================================= -->
            <div class="section nomargin clearfix" style="background: #FFF url('demos/car/images/features/section-bg.jpg') left bottom no-repeat; background-size: cover; padding: 140px 0">
                <div class="container clearfix">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-9">
                            <div class="heading-block">
                                <h3 style="font-size: 58px; line-height: 56px; letter-spacing: -2px">Our Fleet<br>Your Fleet</h3>
                            </div>
                            <p>Assertively iterate enterprise-wide portals through synergistic products. Efficiently build adaptive schemas after transparent quality vectors. Phosfluorescently optimize competitive resources after extensive convergence. Rapidiously optimize high-quality meta-services via distributed architectures. Credibly deliver 24/365.</p>

                            <div class="row topmargin clearfix">
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain media-box">
                                        <div class="fbox-icon" style="position: relative;">
                                            <a href="#"><i class="icon-car-service2"></i></a>
                                        </div>
                                        <div class="fbox-desc" style="margin-top: 25px">
                                            <h3>Skilled Professionals.</h3>
                                            <p class="t300" style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est perspiciatis mollitia.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain media-box">
                                        <div class="fbox-icon" style="position: relative;">
                                            <a href="#"><i class="icon-car-crane"></i></a>
                                        </div>
                                        <div class="fbox-desc" style="margin-top: 25px">
                                            <h3>Skilled Professionals.</h3>
                                            <p class="t300" style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est perspiciatis mollitia.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- Featured end -->

            <!-- Buy And Sell Section
            ============================================= -->
            <div class="section nomargin nopadding clearfix">
                <div class="row common-height clearfix">
                    <!-- Half Section 1 -->
                    <div class="col-lg-6 dark bgcolor" style="background: url('demos/car/images/5.jpg') center center no-repeat; background-size: cover;">
                        <div class="col-padding clearfix">
                            <i class="i-plain i-xlarge icon-car-service inline-block" style="margin-bottom: 20px;"></i>
                            <div class="heading-block noborder" style="margin-bottom: 20px;">
                                <h3>Are You Looking for a New Car?</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aspernatur, doloribus. Aspernatur, maiores earum eaque quas temporibus eius dolore dicta.</p>
                            <a href="#" class="button button-rounded button-white button-light nomargin">Know More</a>
                        </div>
                    </div>
                    <!-- Half Section 2 -->
                    <div class="col-lg-6 clearfix bgcolor" style="background: url('demos/car/images/6.jpg') center center no-repeat; background-size: cover;">
                        <div class="col-padding clearfix">
                            <i class="i-plain i-xlarge icon-car-care inline-block" style="margin-bottom: 20px;"></i>
                            <div class="heading-block noborder" style="margin-bottom: 20px;">
                                <h3>Want to sell a used car?</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aspernatur, doloribus. Aspernatur, maiores earum eaque quas temporibus eius dolore dicta.</p>
                            <a href="#" class="button button-large button-dark button-black button-rounded nomargin">Know More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Before Footer Section
            ============================================= -->
            <div class="section nomargin clearfix" style="background: #FFF url('demos/car/images/footer-bg.jpg') center bottom no-repeat; background-size: cover; height: 770px">
                <div class="divcenter dark center clearfix" style="max-width: 570px">
                    <div class="heading-block dark bottommargin-sm noborder">
                        <h2 class="nott t500">Raise Your Heart</h2>
                        <p style="color: #DDD; margin-top: 10px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse ipsa necessitatibus rem facere perspiciatis neque laborum est, illum commodi sunt, nobis voluptas.</p>
                    </div>
                    <a href="#" class="uppercase t700 ls2" style="color: #FFF; font-size: 12px; border-bottom: 1px solid #FFF">Request a Quote</a> &rarr;
                </div>
            </div>

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
                    <div class="col-lg-6">

                        <div class="col_one_fourth">
                            <div class="widget widget_links clearfix">
                                <h4>Hire</h4>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col_one_fourth">
                            <div class="widget widget_links clearfix">
                                <h4>Community</h4>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>
                                    <li><a href="#">Support Forums</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col_one_fourth">
                            <div class="widget widget_links clearfix">
                                <h4>Learn</h4>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col_one_fourth col_last">
                            <div class="widget widget_links clearfix">
                                <h4>About</h4>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5 fright tright col_last">

                        <img src="demos/car/images/logo-footer.png" alt="" height="50" style="margin-top: ">
                        <br>
                        <div style="color: #444">
                            <span>&copy; Canvas Automotive. All Rights Reserved.</span><div class="clear"></div>
                            <p style="margin-top: 10px;">Objectively restore standards compliant opportunities whereas one-to-one collaboration and idea-sharing.</p>
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
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="demos/car/js/360rotator.js"></script>

<!-- Bootstrap Select Plugin -->
<script src="js/components/bs-select.js"></script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="js/functions.js"></script>

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
    function init(){

        car = $('.360-car').ThreeSixty({
            totalFrames: 52, // Total no. of image you have for 360 slider
            endFrame: 52, // end frame for the auto spin animation
            currentFrame: 3, // This the start frame for auto spin
            imgList: '.threesixty_images', // selector for image list
            progress: '.spinner', // selector to show the loading progress
            imagePath:'demos/car/images/360degree-cars/', // path of the image assets
            filePrefix: '', // file prefix if any
            ext: '.png', // extention for the assets
            height: 887,
            width: 500,
            navigation: true,
            responsive: true,
        });
    };

    // Rev Slider
    var tpj=jQuery;
    var revapi424;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_424_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_424_1");
        }else{
            revapi424 = tpj("#rev_slider_424_1").show().revolution({
                sliderType:"carousel",
                jsFileLocation:"include/rs-plugin/js/",
                sliderLayout:"auto",
                dottedOverlay:"none",
                delay:7000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"uranus",
                        enable:false,
                        hide_onmobile:false,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:-10,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:-10,
                            v_offset:0
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
                        style:"ares",
                        enable:true,
                        width:270,
                        height:80,
                        min_width:270,
                        wrapper_padding: 10,
                        wrapper_color:"transparent",
                        wrapper_opacity:"0.5",
                        tmp:'<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{title}}</span></div><div class="tp-tab-image"></div>',
                        visibleAmount: 7,
                        hide_onmobile: false,
                        hide_under:420,
                        hide_onleave:false,
                        hide_delay_mobile:1200,
                        hide_delay:200,
                        direction:"horizontal",
                        span:true,
                        position:"outer-bottom",
                        space:20,
                        h_align:"left",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:0
                    }
                },
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,992,768,420],
                gridheight:[600,500,960,720],
                lazyType:"single",
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    });	/*ready*/

    // Video on play on hover
    jQuery(document).ready(function($){
        $('.videoplay-on-hover').hover( function(){
            if( $(this).find('video').length > 0 ) {
                $(this).find('video').get(0).play();
            }
        }, function(){
            if( $(this).find('video').length > 0 ) {
                $(this).find('video').get(0).pause();
            }
        });
    });
</script>

</body>
</html>