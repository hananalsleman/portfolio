<!DOCTYPE html>
<title>Dashboard</title>
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
<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/progress-circle.css') }}">

</head>

<body id="dashboard">

    <div class="d-flex">

        <!------------------- Sidebar -------------------->
        <div class="col-12 col-md-6 col-lg-2 sidebar" id="sidebar" >
            
            <h3 class=""><i class="fa fa-dashboard mr-2"></i>Dashboard</h3>
            <hr/>
            <h4 classs="heading-nav">Pages</h4>
            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }} "  href="/dashboard" role="tab" 
                    aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home mr-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/about') ? 'active' : '' }}" href="/dashboard/about" role="tab" 
                    aria-controls="v-pills-about" aria-selected="false"><i class="fa fa-address-book mr-2"></i>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/achievements') ? 'active' : '' }}" href="/dashboard/achievements" role="tab"
                        aria-controls="v-pills-achievements" aria-selected="false"><i class="fa fa-trophy mr-2"></i>Achievements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/experience') ? 'active' : '' }}" href="/dashboard/experience" role="tab" 
                    aria-controls="v-pills-experience" aria-selected="false"><i class="fa fa-newspaper-o mr-2"></i>Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/contact') ? 'active' : '' }}" href="/dashboard/contact" role="tab" 
                    aria-controls="v-pills-contact" aria-selected="false"><i class="fa fa-phone mr-2"></i>Contact</a>
                </li>
            </ul>
        </div>
        
        <!------------------- End Sidebar -------------------->


         <!------------------- Sidebar Content -------------------->
        <div class="col-lg-10 sidebar-content">
                
            <div class="tab-content" id="v-pills-tabContent">
                    
                @yield('content')

            </div>

        </div>
        <!------------------- End Sidebar Content -------------------->

    </div>

    <!-- JavaScripts -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Custom script -->
    <script  src="{{ asset('js/dashboard.js') }}"> </script>
</body>
</html>