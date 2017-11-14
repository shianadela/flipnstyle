<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
       Flip 'n Style
    </title>

    <meta name="keywords" content="">

    <!-- CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <!-- CSS -->

    <script src="js/respond.min.js"></script>

    <!-- CSS -->
    <link rel="shortcut icon" href="img/page_assets/logo/logo.png">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
    <!-- CSS -->

</head>

<body>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/smoothscroll.js"></script>
        

@if (! Auth::check())
<div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a  href="/login" >Login</a></li> <!-- data-toggle="modal" data-target="#login-modal" -->
                    <li><a  href="/register" >Register</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
 
   </div>
<div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
                <div class="col-md-4">
                </div>
                <center>
                <div class="col-md-4">
                <a id="logoposition" class="navbar-brand home" href="/" data-animate-hover="bounce">
                    <img src="img/page_assets/logo/logo.png" alt="FlipnStyle logo" class="hidden-xs">
                    <img src="img/page_assets/logo/logo.png" alt="FlipnStyle logo" class="visible-xs">
                </a>
                </div></center>

                <div class="col-md-4">
                </div>
        </div>
</div> 
@endif


@if (Auth::check())
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#">{{ Auth::user()->first_name }}</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="{{ route('auth.logout') }}" >Logout</a></li>
                </ul>
            </div>
        </div>
   </div>

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
                <div class="col-md-4">
                </div>
                <center>
                <div class="col-md-4">
                <a id="logoposition" class="navbar-brand home" href="/flipnstyle_u" data-animate-hover="bounce">
                    <img src="img/page_assets/logo/logo.png" alt="FlipnStyle logo" class="hidden-xs">
                    <img src="img/page_assets/logo/logo.png" alt="FlipnStyle logo" class="visible-xs">
                </a>
                </div></center>

                <div class="col-md-4">
                </div>
        </div>
    </div>

@endif

        
 <div id="all">
    @yield('content')
</div>

</body>
</html>

  