<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HopeShare</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('indexassets/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('indexassets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('indexassets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('indexassets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('indexassets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('indexassets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('indexassets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('indexassets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('indexassets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('indexassets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('indexassets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('indexassets/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->

    <header>
        <div class="header-area">  
            <div id="sticky-header" class="main-header-area ">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="{{route('nowhere')}}">
                                    <img src="{{asset('indexassets/img/123.png')}}" width="150" height="60"  alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('nowhere')}}">home</a></li>
                                        {{-- <li><a href="About.html">About</a></li>  --}}
                                        <li><a href="{{route('posts.index')}}">blog</a></li>
                                               
                                        </li>
                                        {{-- <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                         <li><a href="Cause.html">Cause</a></li>    
                                        </li> --}}
                                        <li><a href="{{route('contacts.create')}}">Contact</a></li>
                                        @if (Auth::guest())
                                        <li><a href="{{route('login')}}">sign in</a></li>
                                        <li><a href="{{route('register')}}">register</a></li>
                                        @endif
                                        @auth
                                            <li><a href="{{route('index')}}">dashboard</a></li>
                                        @endauth
                                        
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a class="book_btn d-none d-lg-block"  href="{{route('donations.create')}}">Make a Donate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
 
    @yield('content')

    <!-- JS here -->
    <script src="{{asset('indexassets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('indexassets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('indexassets/js/popper.min.js')}}"></script>
    <script src="{{asset('indexassets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('indexassets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('indexassets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('indexassets/js/ajax-form.js')}}"></script>
    <script src="{{asset('indexassets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('indexassets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('indexassets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('indexassets/js/scrollIt.js')}}"></script>
    <script src="{{asset('indexassets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('indexassets/js/wow.min.js')}}"></script>
    <script src="{{asset('indexassets/js/nice-select.min.js')}}"></script>
    <script src="{{asset('indexassets/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('indexassets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('indexassets/js/plugins.js')}}"></script>
    <script src="{{asset('indexassets/js/gijgo.min.js')}}"></script>
    <!--contact js-->
    <script src="{{asset('indexassets/js/contact.js')}}"></script>
    <script src="{{asset('indexassets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('indexassets/js/jquery.form.js')}}"></script>
    <script src="{{asset('indexassets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('indexassets/js/mail-script.js')}}"></script>

    <script src="{{asset('indexassets/js/main.js')}}"></script>
</body>

</html>