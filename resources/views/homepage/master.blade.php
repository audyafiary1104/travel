<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tour Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('asset/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('asset/css/flexslider.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-datepicker.css')}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset('asset/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Modernizr JS -->
    <script src="{{asset('asset/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <script src="{{asset('asset/js/respond.min.js')}}"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        @include('homepage.resource.navbar')
        @yield('content')
        @include('homepage.resource.footer')
        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
        </div>

        <!-- jQuery -->
        <!-- jQuery Easing -->
        <script src="{{asset('asset/js/jquery.easing.1.3.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{asset('asset/js/jquery.waypoints.min.js')}}"></script>
        <!-- Flexslider -->
        <script src="{{asset('asset/js/jquery.flexslider-min.js')}}"></script>
        <!-- Owl carousel -->
        <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup -->
        <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('asset/js/magnific-popup-options.js')}}"></script>
        <!-- Date Picker -->
        <script src="{{asset('asset/js/bootstrap-datepicker.js')}}"></script>
        <!-- Stellar Parallax -->
        <script src="{{asset('asset/js/jquery.stellar.min.js')}}"></script>
        <!-- Main -->
        <script src="{{asset('asset/js/main.js')}}"></script>

</body>

</html>