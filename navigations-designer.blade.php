<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Flip 'n Style
    </title>

    <meta name="keywords" content="">

    <!-- CSS -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/owl.theme.css" rel="stylesheet">
    <link href="/css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <!-- CSS -->


    <script src="/js/respond.min.js"></script>

    <!-- CSS -->
    <link rel="shortcut icon" href="img/page_assets/logo/logo.png">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/mycss.css" rel="stylesheet">
    <!-- CSS -->



</head>

<body>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="/js/smoothscroll.js"></script>


<!-- *** TOPBAR *** -->
<div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a  href="{{ url('designer') }}" >Logout</a></li> 
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
  
</div>
<!-- *** TOP BAR END *** -->


<!-- NAVBAR -->        
<div class="navbar navbar-default yamm" role="navigation" id="navbar">
        @yield('content_nav')
</div>

<!-- NAVBAR -->


 <div id="all" class="loginBG">
    @yield('content')
</div>
      <br><br><br><br><br>
<!-- *** FOOTER *** -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="#"><h5>About us</h5></a>
                            </li>
                            <li><a href="#"><h5>Terms and conditions</h5></a>
                            </li>
                            <li><a href="#"><h5>FAQ</h5></a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal"><h5>Login</h5></a>
                            </li>
                            <li><a  href="register.php" ><h5>Register</h5></a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>

                    <div class="col-md-3 col-sm-6">

                        <h4>Our Themes</h4>

                        <ul>
                            <li><a href="category.html"><h5>Just Because</h5></a>
                            </li>
                            <li><a href="category.html"><h5>Birthday</h5></a>
                            </li>
                            <li><a href="category.html"><h5>School Project</h5></a>
                            </li>
                            <li><a href="category.html"><h5>Travel</h5></a>
                            </li>
                            <li><a href="category.html"><h5>Wedding</h5></a>
                            </li>
                            <li><a href="category.html"><h5>New Year</h5></a>
                            </li>
                            <li><a href="category.html"><h5>Christmas</h5></a>
                            </li>
                            </li>
                            <li><a href="category.html"><h5>Philippine Festival</h5></a>
                            </li>   
                        </ul>
                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p class="text-muted"><strong>Flip 'n Style Management</strong>
                            <br>13/25 New Avenue
                            <br>New Heaven
                            <br>Cebu City
                            <br>Philippines
                        </p>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Scrapbooking Quote</h4>

                        <p class="text-muted">"Creativity is inventing, experimenting, growing, taking risks, breaking rules, making mistakes, and having fun."<br> - Mary Lou Cook</p> 
                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

                <button class="btn btn-default" type="button">Subscribe!</button>

            </span>

                            </div>
                        </form>

                        <hr>

                      <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="https://www.facebook.com/flipnstyle/" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/flipnstyle" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/flipnstyle/" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                        </p>

                    </div>
                </div>
            </div>
        </div>

<!-- *** FOOTER END *** -->


<!-- *** COPYRIGHT ***-->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© All Rights Reserve 2016.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Flip 'n Style: <a href="#">Terms and Conditions</a> 

                        <!-- with support from <a href="https://kakusei.cz">Kakusei</a> --> 
                        <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) -->
                    </p>
                </div>
            </div>
        </div>
<!-- *** COPYRIGHT END *** -->
</div>

<!-- all -->

    <!-- JAVASCRIPT -->
    <script src="/js/libraries/jquery-1.11.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/libraries/jquery.cookie.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/modernizr.js"></script>
    <script src="/js/bootstrap-hover-dropdown.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/front.js"></script>
    <!-- JAVASCRIPT -->
    
</body>

</html>
