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

    @yield('cont')

    
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