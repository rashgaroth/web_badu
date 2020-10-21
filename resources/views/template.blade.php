<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/template/img/favicon.ico')}}">

    <!-- master CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('/template/master.css')}}">

    <script src="{{ asset('/template/js/vendor/modernizr-2.8.3.min.js')}}"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Start main area -->
    <div class="main-area">
        <!-- Start header -->
        <header>
            <!-- Start header top -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-6">
                            <div class="top-social">
                                <nav>
                                    <ul>
                                        <li><a href="#">Follow Us On:</a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-6">
                            <div class="call-to-action">
                                <nav>
                                    <ul>
                                        <li><a href="#"><i class="#" aria-hidden="true"></i> Email: </a></li>
                                        <li><a href="#"><i class="#" aria-hidden="true"></i> Phone: </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End header top -->
            <!-- Start main menu area -->
            <div class="main-menu-area" id="sticker">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="logo ptb-32">
                                <a href="index.html">
                                    <img src="{{ asset('/template/img/logo.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="#">Home</a>
                                            <ul class="drop-menu">
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index-animate.html">Home 2</a></li>
                                                <li><a href="index-youtube-video.html">Home 3</a></li>
                                                <li><a href="index-center-menu.html">Home 4</a></li>
                                                <li><a href="index-non-topbar.html">Home 5</a></li>
                                                <li><a href="index-non-sticky.html">Home 6</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="mega-menu"><a href="#">Project</a></li>
                                        <li><a href="events.html">Events</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul class="drop-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-sidebar-right.html">Blog sidebar Right</a></li>
                                                <li><a href="blog-sidebar-left.html">Blog sidebar Left</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="blog-details-sidebar-right.html">Blog Details Sidebar Right</a></li>
                                                <li><a href="blog-details-sidebar-left.html">Blog Details Sidebar Left</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu"><a href="#">Page</a>
                                            <div class="mega-menu-area">
                                                <ul class="single-mega-item">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="contact-us.html">Contact us</a></li>
                                                    <li><a href="couses.html">Couses</a></li>
                                                    <li><a href="couses-sidebar-right.html">Couses Sidebar Right</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li><a href="couses-sidebar-left.html">Couses Sidebar Left</a></li>
                                                    <li><a href="events.html">Events</a></li>
                                                    <li><a href="events-sidebar-right.html">Events Sidebar Right</a></li>
                                                    <li><a href="events-sidebar-left.html">Events Sidebar Left</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-sidebar-right.html">Blog sidebar Right</a></li>
                                                    <li><a href="blog-sidebar-left.html">Blog sidebar Left</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li><a href="blog-details-sidebar-right.html">Blog Details Sidebar Right</a></li>
                                                    <li><a href="blog-details-sidebar-left.html">Blog Details Sidebar Left</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="mega-menu"><a href="#">Shortcodes</a>
                                            <div class="mega-menu-area">
                                                <ul class="single-mega-item">
                                                    <li class="shortcode-title">Shortcode 1</li>
                                                    <li><a href="elements-causes.html">Causes</a></li>
                                                    <li><a href="elements-contact-form.html">Contact Form</a></li>
                                                    <li><a href="elements-hero-static.html">Hero Static</a></li>
                                                    <li><a href="elements-hero-static-left.html">Hero Static Left</a></li>
                                                    <li><a href="elements-hero-static-right.html">Hero Static Right</a></li>
                                                    <li><a href="elements-keep-in-touch.html">Keep In Touch</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="shortcode-title">Shortcode 2</li>
                                                    <li><a href="elements-latest-blog.html">Latest Blog</a></li>
                                                    <li><a href="elements-map.html">Google Map</a></li>
                                                    <li><a href="elements-our-gallery.html">Our Gallery</a></li>
                                                    <li><a href="elements-our-sponsors.html">Our Sponsors</a></li>
                                                    <li><a href="elements-our-volunteers.html">Our Volunteers</a></li>
                                                    <li><a href="elements-page-breadcumb-right.html">Page Breadcumb Right</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="shortcode-title">Shortcode 3</li>
                                                    <li><a href="elements-page-title-center.html">Page Title Center</a></li>
                                                    <li><a href="elements-page-title-left.html">Page Title Left</a></li>
                                                    <li><a href="elements-page-title-right.html">Page Title Right</a></li>
                                                    <li><a href="elements-pagination.html">Pagination</a></li>
                                                    <li><a href="elements-services.html">Services</a></li>
                                                    <li><a href="elements-testimonials.html">Testimonials</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="shortcode-title">Shortcode 4</li>
                                                    <li><a href="elements-up-comming-events.html">Up Comming Events</a></li>
                                                    <li><a href="elements-video-gallery-2col.html">Video Gallery col 2</a></li>
                                                    <li><a href="elements-video-gallery-3col.html">Video Gallery col 3</a></li>
                                                    <li><a href="elements-video-gallery-4col.html">Video Gallery col 4</a></li>
                                                    <li><a href="elements-what-we-do.html">What we do</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="donate-button ptb-32">
                                <a class="waves-effect waves-light" href="#">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End main menu area -->
            <!-- Start mobile menu -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="nav">
                                    <li><a class="home" href="#">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-animate.html">Home 2</a></li>
                                            <li><a href="index-youtube-video.html">Home 3</a></li>
                                            <li><a href="index-center-menu.html">Home 4</a></li>
                                            <li><a href="index-non-topbar.html">Home 5</a></li>
                                            <li><a href="index-non-sticky.html">Home 6</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-sidebar-right.html">Blog sidebar Right</a></li>
                                            <li><a href="blog-sidebar-left.html">Blog sidebar Left</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="blog-details-sidebar-right.html">Blog Details Sidebar Right</a></li>
                                            <li><a href="blog-details-sidebar-left.html">Blog Details Sidebar Left</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact-us.html">Contact us</a></li>
                                            <li><a href="couses.html">Couses</a></li>
                                            <li><a href="couses-sidebar-right.html">Couses Sidebar Right</a></li>
                                            <li><a href="couses-sidebar-left.html">Couses Sidebar Left</a></li>
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="events-sidebar-right.html">Events Sidebar Right</a></li>
                                            <li><a href="events-sidebar-left.html">Events Sidebar Left</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-sidebar-right.html">Blog sidebar Right</a></li>
                                            <li><a href="blog-sidebar-left.html">Blog sidebar Left</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="blog-details-sidebar-right.html">Blog Details Sidebar Right</a></li>
                                            <li><a href="blog-details-sidebar-left.html">Blog Details Sidebar Left</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shortcodes</a>
                                        <ul>
                                            <li><a href="elements-causes.html">Causes</a></li>
                                            <li><a href="elements-contact-form.html">Contact Form</a></li>
                                            <li><a href="elements-hero-static.html">Hero Static</a></li>
                                            <li><a href="elements-hero-static-left.html">Hero Static Left</a></li>
                                            <li><a href="elements-hero-static-right.html">Hero Static Right</a></li>
                                            <li><a href="elements-keep-in-touch.html">Keep In Touch</a></li>
                                            <li><a href="elements-latest-blog.html">Latest Blog</a></li>
                                            <li><a href="elements-map.html">Google Map</a></li>
                                            <li><a href="elements-our-gallery.html">Our Gallery</a></li>
                                            <li><a href="elements-our-sponsors.html">Our Sponsors</a></li>
                                            <li><a href="elements-our-volunteers.html">Our Volunteers</a></li>
                                            <li><a href="elements-page-breadcumb-right.html">Page Breadcumb Right</a></li>
                                            <li><a href="elements-page-title-center.html">Page Title Center</a></li>
                                            <li><a href="elements-page-title-left.html">Page Title Left</a></li>
                                            <li><a href="elements-page-title-right.html">Page Title Right</a></li>
                                            <li><a href="elements-pagination.html">Pagination</a></li>
                                            <li><a href="elements-services.html">Services</a></li>
                                            <li><a href="elements-testimonials.html">Testimonials</a></li>
                                            <li><a href="elements-up-comming-events.html">Up Comming Events</a></li>
                                            <li><a href="elements-video-gallery-2col.html">Video Gallery col 2</a></li>
                                            <li><a href="elements-video-gallery-3col.html">Video Gallery col 3</a></li>
                                            <li><a href="elements-video-gallery-4col.html">Video Gallery col 4</a></li>
                                            <li><a href="elements-what-we-do.html">What we do</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End mobile menu -->
        </header>
        <!-- End header -->
        @yield('content')
        <!-- Start footer -->
        <footer>
            <div class="footer-top pt-50 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="footer-widget-area">
                            <!-- Start footer widget -->
                            <div class="col-sm-4">
                                <div class="footer-widget widget-one">
                                    <div class="footer-widget-title">
                                        <h3>ABOUT US</h3>
                                    </div>
                                    <div class="widget-about-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id tincidunt risus. </p>
                                    </div>
                                    <div class="widget-contact-content">
                                        <h3>CONTACT US</h3>
                                        <a href="tel:+0012345678">Phone : +(00) 1234-5678</a>
                                        <a href="mailto:info@granttheme.com">Email : info@granttheme.com</a>
                                        <p>Address : 122, New road, South Zone Country.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End footer widget -->
                            <!-- Start footer widget -->
                            <div class="col-sm-2">
                                <div class="footer-widget widget-two">
                                    <div class="footer-widget-title">
                                        <h3>OUR PROJECT</h3>
                                    </div>
                                    <nav>
                                        <ul>
                                            <li><a href="#">Water Surve</a></li>
                                            <li><a href="#">Education for all</a></li>
                                            <li><a href="#">Treatment</a></li>
                                            <li><a href="#">Food Serving</a></li>
                                            <li><a href="#">Cloth</a></li>
                                            <li><a href="#">Selter Project</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- End footer widget -->
                            <!-- Start footer widget -->
                            <div class="col-sm-2">
                                <div class="footer-widget widget-two">
                                    <div class="footer-widget-title">
                                        <h3>QUCIK LINK</h3>
                                    </div>
                                    <nav>
                                        <ul>
                                            <li><a href="#">Causes</a></li>
                                            <li><a href="#">Projects</a></li>
                                            <li><a href="#">Gallery</a></li>
                                            <li><a href="#">Terms of use</a></li>
                                            <li><a href="#">Legal disclaimer</a></li>
                                            <li><a href="#">Privacy policy</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- End footer widget -->
                            <!-- Start footer widget -->
                            <div class="col-sm-4">
                                <div class="footer-widget widget-four">
                                    <div class="footer-widget-title">
                                        <h3>NEWSLETTER</h3>
                                    </div>
                                    <div class="widget-about-content">
                                        <p>Select your newsletters, enter your email address, and click "Subscribe"</p>
                                    </div>
                                    <div class="newslater">
                                        <form id="mc-form" class="mc-form form">
                                            <input id="mc-email" type="email" autocomplete="off" placeholder="Email Address">
                                            <button id="mc-submit" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                        </form>
                                        <!-- mailchimp-alerts Start -->
                                        <div class="mailchimp-alerts text-centre">
                                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                        </div><!-- mailchimp-alerts end -->
                                    </div>
                                </div>
                            </div>
                            <!-- End footer widget -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="copyright">
                                <p>Copyright 2017 All rigth reserved. Design by theme <a href="#">Grant Foundation</a></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer-social">
                                <nav>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs" id="back-top" style="display: block;"></div>
                </div>
            </div>
        </footer>
        <!-- End footer -->
    </div>
    <!-- End main area -->

    <!-- jquery-1.12.0.min js
		============================================ -->
    <script src="{{ asset('/template/js/vendor/jquery-1.12.0.min.js')}}"></script>

    <!-- bootstrap js
		============================================ -->
    <script src="{{ asset('/template/js/bootstrap.min.js')}}"></script>

    <!-- owl.carousel.min js
		============================================ -->
    <script src="{{ asset('/template/js/owl.carousel.min.js')}}"></script>

    <!-- jquery.nivo.slider.pack js
		============================================ -->
    <script src="{{ asset('/template/js/jquery.nivo.slider.pack.js')}}"></script>

    <!-- jquery.mixitup.min js
        ============================================ -->
    <script src="{{ asset('/template/js/jquery.mixitup.min.js')}}"></script>

    <!-- jquery.magnific-popup.min js
        ============================================ -->
    <script src="{{ asset('/template/js/jquery.magnific-popup.min.js')}}"></script>

    <!-- jquery.meanmenu js
        ============================================ -->
    <script src="{{ asset('/template/js/jquery.meanmenu.js')}}"></script>

    <!-- heading js
        ============================================ -->
    <script src="{{ asset('/template/js/heading.js')}}"></script>

    <!-- jquery.syotimer.min js
        ============================================ -->
    <script src="{{ asset('/template/js/jquery.syotimer.min.js')}}"></script>

    <!-- wow js
		============================================ -->
    <script src="{{ asset('/template/js/wow.js')}}"></script>

    <!-- jquery.scrollUp.min js
        ============================================ -->
    <script src="{{ asset('/template/js/jquery.scrollUp.min.js')}}"></script>

    <!-- jquery.ajaxchimp.min js
        ============================================ -->
    <script src="{{ asset('/template/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- plugins js
		============================================ -->
    <script src="{{ asset('/template/js/plugins.js')}}"></script>

    <script>
        new WOW().init();
    </script>

    <!-- styleswitch js
        ============================================ -->
    <script src="{{ asset('/template/js/styleswitch.js')}}"></script>

    <!-- main js
		============================================ -->
    <script src="{{ asset('/template/js/main.js')}}"></script>
</body>

</html>