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
    {{-- <link rel="stylesheet" href="{{ asset('/template/master.css')}}"> --}}
    <link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.1.0/dist/css/mstepper.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    {{-- js --}}
    <script src="https://unpkg.com/materialize-stepper@3.1.0/dist/js/mstepper.min.js">
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
        @yield('daftar')
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