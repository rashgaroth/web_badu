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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/template/img/favicon.ico')}}">

    <!-- master CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('/template/master.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    {{-- js --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <script src="{{ asset('/template/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Start main area -->
    <div class="main-area">
        <!-- Start header -->
        <header>
            <!-- Start main menu area -->
            <div class="main-menu-area" id="sticker">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            {{-- <div class="logo ptb-32">
                                <a href="index.html">
                                    <img src="{{ asset('/template/img/logo.png')}}" alt="">
                                </a>
                            </div> --}}
                        </div>
                        <div class="col-sm-9">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                    <li><a>Tentang BADu</a></li>
                                    <li><a>Kontak BADu</a></li>
                                    <li><a href="/register">Daftar Mitra</a></li>
                                    <li><a>Galeri</a></li>
                                    <li><a>Tim BADu</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="donate-button ptb-32">
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
                                    <li><a>Tentang BADu</a></li>
                                    <li><a>Kontak BADu</a></li>
                                    <li><a href="/register">Daftar Mitra</a></li>
                                    <li><a>Galeri</a></li>
                                    <li><a>Tim BADu</a></li>
                                    </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End mobile menu -->
        </header>
        <!-- End header -->
        @yield('daftar')
    </div>
    <!-- End main area -->
    <footer>
            <div class="footer-top pt-50 pb-50">
                <div class="container">
                    <div class="row">
                            <!-- Start footer widget -->
                            <div class="col-sm-2">
                                <div class="footer-widget widget-two">
                                <div class="footer-widget-title">
                                            <h3>CONTACT US</h3>
                                </div>
                                <div class="widget-about-content">
                                    <a href="tel:+0012345678">Phone : +(00) 1234-5678</a>
                                    <a>Address : 122, New road, South Zone Country.</a>
                                </div>
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


    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
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