<!DOCTYPE html>
<title>Hanan Al-Slaiman</title>
<meta name="description" content="">
<meta name="author" content="Hanan Al-Slaiman">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<!-- Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-free-5.11.2-web/css/fontawesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@yield('css-link')

</head>

<body>
    <!-- Loader -->
    <div class="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- End Loader -->

    
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    Ro<span class="main-color">se</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav ">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }} ">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item {{ Request::is('achievements') ? 'active' : '' }}">
                            <a class="nav-link" href="/achievements">Achievements</a>
                        </li>
                        <li class="nav-item {{ Request::is('experience') ? 'active' : '' }}">
                            <a class="nav-link" href="/experience">Experience</a>
                        </li>
                        <li class="nav-item contact">
                            <a class="nav-link" href="/#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </header>
    <!-- End Navbar -->


    <!-- Content -->
    @yield('content')
    <!-- Content -->

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="row">

                    <div class="col-12 col-lg-4 order-2 order-lg-1 mt-10">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2020 <a href="#" class="main-color">Rose</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 order-1 order-lg-2 ">
                        <a href="#" class="back-to-top">
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 order-3 order-lg-3 ">
                        <div class="social-icons">
                            <ul>
                                @if($links->facebook != '')
                                <li><a href="{{$links->facebook}}" target="_blank"
                                        class="#"><i class="fa fa-facebook"></i></a></li>
                                @endif
                                @if($links->linkedin != '')
                                <li><a href="{{$links->linkedin}}"
                                        target="_blank" class="#"><i class="fa fa-linkedin"></i></a></li>
                                @endif
                                @if($links->github != '')
                                <li><a href="{{$links->github}}"
                                        target="_blank" class="#"><i class="fa fa-github"></i></a></li>
                                @endif
                                @if($links->twitter != '')
                                <li><a href="{{$links->twitter}}"
                                    target="_blank" class="#"><i class="fa fa-twitter"></i></a></li>
                                @endif
                                @if($links->instagram != '')
                                <li><a href="{{$links->instagram}}"
                                    target="_blank" class="#"><i class="fa fa-instagram"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- JavaScripts -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- text rotater -->
    <script src="{{ asset('js/jquery.simple-text-rotator.js') }}"></script>
    <!-- Custom script -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>