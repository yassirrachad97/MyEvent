<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Evento</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{ asset('css/mystyle/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/mystyle/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/mystyle/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyle/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyle/css/gijgo.css') }}">
	<link rel="stylesheet" href="{{ asset('css/mystyle/css/animate.min.cs')}}">
	<link rel="stylesheet" href="{{ asset('css/mystyle/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{ asset('css/mystyle/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/mystyle/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{ asset('css/mystyle/css/slick.css')}}">
	<link rel="stylesheet" href="{{ asset('css/mystyle/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{ asset('css/mystyle/css/style.css') }}">
</head>
<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('css/mystyle/img/logo/loader.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('css/mystyle/img/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="spakers.html">Spakers</a></li>
                                            <li><a href="schedule.html">Schedule</a></li>
                                            <li><a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                    <a href="#" class="btn header-btn">Get Your Ticket</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>


@yield('home')
@yield('content')

  <!-- JS here -->

  <script src="{{ asset('css/mystyle/js/vendor/modernizr-3.5.0.min.js') }}"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="{{ asset('css/mystyle/js/vendor/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('css/mystyle/js/popper.min.js')}}"></script>
  <script src="{{ asset('css/mystyle/js/bootstrap.min.js')}}"></script>
  <!-- Jquery Mobile Menu -->
  <script src="{{ asset('css/mystyle/js/jquery.slicknav.min.js')}}"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="{{ asset('css/mystyle/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('css/mystyle/js/slick.min.js')}}"></script>
  <!-- One Page, Animated-HeadLin -->
  <script src="{{ asset('css/mystyle/js/wow.min.js')}}"></script>
  <script src="{{ asset('css/mystyle/js/animated.headline.js')}}"></script>
  <script src="{{ asset('css/mystyle/js/jquery.magnific-popup.js')}}"></script>

  <!-- Date Picker -->
  <script src="{{ asset('css/mystyle/js/gijgo.min.js')}}"></script>
  <!-- Nice-select, sticky -->
  <script src="{{ asset('css/mystyle/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{ asset('css/mystyle/js/jquery.sticky.js')}}"></script>

  <!-- counter , waypoint -->
  <script src="{{ asset('css/mystyle/js/jquery.counterup.min.js')}}"></script>
  <script src="{{ asset('css/mystyle/js/waypoints.min.js')}}"></script>
  <script src="{{ asset('css/mystyle/js/jquery.countdown.min.js')}}"></script>
  <!-- contact js -->
  <script src="{{ asset('css/mystyle/js/contact.js')}}"></script>
  <script src="{{ asset('css/mystyle/js/jquery.form.js')}}"></script>
  <script src="{{ asset('css/mystyle/js/jquery.validate.min.js')}}"></script>
  <script src="{{ asset('css/mystyle/js/mail-script.js')}}"></script>
  <script src="{{ asset('css/mystyle/js/jquery.ajaxchimp.min.js')}}"></script>

  <!-- Jquery Plugins, main Jquery -->
  <script src="{{ asset('css/mystyle/js/plugins.js')}}"></script>
  <script src="{{ asset('css/mystyle/js/main.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
