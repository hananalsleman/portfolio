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

    <div id="fullpage">

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
                            <li class="nav-item active">
                                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#achievements">Achievements</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#experience">Experience</a>
                            </li>
                            <li class="nav-item contact">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
        </header>
        <!-- End Navbar -->

        <!-- Home Section -->
        <section id="home">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 align-self-center mb-4 text-center text-md-left">
                        <hr class="m-auto ml-md-0" />
                        <h4 class="mt-2">Hello There!</h4>
                        <h1 class="mt-4 mb-4">I'm <span class="main-color">{{ $myinfo->name}}</span></h1>
                        <h2 class="rotate">{{ $myinfo->job }}</h2>
                        <p>{{ $myinfo->description}}
                        </p>
                        <div class="d-flex align-self-center">
                            <div class="contact nav-item  text-center pull-left d-inline-block">
                                <a class="nav-link text-white" href="#contact">Contact</a>
                            </div>
                            <div class="col-12 col-lg-5 icons-social pl-1">
                                <a href="{{$links->facebook}}" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                                <a href="{{$links->linkedin}}" target="_blank"><i
                                        class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="frame-1 animate__animated animate__bounce">
                            <div class="frame-2">
                                <div class="frame-3">
                                    <img class="myImage d-block" src="uploads/{{ $myinfo->image}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Home Section -->

        <!-- About Section -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-11 wow fadeInLeft" data-wow-delay="0.9s">
                        <h2>ABOUT ME</h2>
                        <h4>{{ $myinfo->aboutme_title }}</h4>
                        <p>{{ $myinfo->aboutme_description }}</p>
                    </div>
                    <div class="col-md-6 col-xs-11 skills">

                        @foreach ($techniques as $technique)
                        <span >{{ $technique->name }}<small>%</small><small class="count"
                                    data-value="95">{{ $technique->percentage }}</small></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" class="progress-bar" role="progressbar"
                                aria-valuenow="{{ $technique->percentage }}" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Achievements Section -->
        <section id="achievements">
            <div class="container">
                <h2 class="heading">Here are my biggest achievements</h2>
                <div class="box_timeline_holder">
                    <div class="box_timeline">
                        <ul>
                        @foreach ($achievements as $achievement )
                            @if ($loop->index < 4)
                                <li class="col-12 col-md-3 wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="date ">
                                        <span> {{ $achievement->year }} </span>
                                    </div>
                                    <h3>{{ $achievement->title }}</h3>
                                    <p>{{ $achievement->description }}
                                    </p>
                                </li>
                            @endif
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </section>
        <!-- End Achievements Section -->

        <!-- Experience Section -->
        <section id="experience">
            <div class="container">
                <div class="row">
                    <h2 class="heading">Here are my experience</h2>
                    <div id="cd-timeline" class="cd-container">
                    @foreach ($experiences as $experience)
                        @if ($loop->index < 4)
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture wow fadeInLeft" data-wow-delay="0.6s">
                                <img src="images/first-icon.png" alt="Picture">
                            </div>

                            <div class="cd-timeline-content service-box-content wow fadeInLeft">
                                <h2>{{ $experience->title }}</h2>
                                <p>{{ $experience->description }}
                                    <br />
                                    <span class="date-range">
                                        <i class="fa fa-clock mr-2"></i>from {{ $experience->start_month }}, {{ $experience->start_year }}
                                         to {{ $experience->end_month }} {{ $experience->end_year }}<br />
                                        <i class="fa fa-map-marker mr-2"></i>{{ $experience->country }}</span>
                                </p>
                            </div>
                        </div>
                        @endif
                    @endforeach

                    </div>
                </div>
            </div>

        </section>
        <!-- End Experience Section -->

        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-1 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <address>
                            <p class="contact-title">CONTACT ME</p>
                            <p><i class="fa fa-phone"></i>{{$links->phone}}</p>
                            <p><i class="fa fa-envelope-o"></i>{{$links->email}}</p>
                            <p><i class="fa fa-map-marker"></i>{{$links->location}}</p>
                        </address>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-10 wow fadeInUp" data-wow-delay="0.6s">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form role="form" method="post" action="contact-me">
                            {{csrf_field()}}
                            <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                            <textarea name="message" rows="5" class="form-control" id="message"
                                placeholder="Your Message" required></textarea>
                            <input name="send" type="submit" class="form-control" id="send" value="SEND ME">
                        </form>
                    </div>
                    <div class="col-md-1 col-sm-1"></div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

        <!-- Footer Section -->
        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="row">

                        <div class="col-12 col-md-4 order-2 order-md-1 mt-10">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2020 <a href="#" class="main-color">Rose</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 order-1 order-md-2 ">
                            <a href="#" class="back-to-top">
                                <i class="fa fa-angle-up"></i>
                            </a>
                        </div>
                        <div class="col-12 col-md-4 order-3 order-md-3 ">
                            <div class="social-icons">
                                <ul>
                                    <li><a href="{{$links->facebook}}" target="_blank"
                                            class="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{$links->linkedin}}"
                                            target="_blank" class="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Section -->

    </div>


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