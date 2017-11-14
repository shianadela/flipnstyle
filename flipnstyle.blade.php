@extends('layouts.navigations-navigations')
        <script src="/js/workspaceJS/User/userJS-themes.js"></script>   
 
@section('content')

<!-- CAROUSEL -->
        <div id="content">

            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="img/page_assets/carousel/c1.png" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/page_assets/carousel/c2.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/page_assets/carousel/c3.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/page_assets/carousel/c4.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/page_assets/carousel/c5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
<!-- CAROUSEL -->
        
            <!-- *** SELECT A THEME *** -->
            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12" id="create-book">
                            <h2>Select a Theme</h2>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="product-slider">

                        <div class="item">
                            <div class="product">
                                <form  id="themeForm6004" role="form" method="post" action="{{ url('workspace') }}" name="themeForm" class="form_navs">
                                    <input type="text" name="themeid" class="form-control hidden" id="themeid" value="6004">
                                    <!-- <input type="text" name="price" class="form-control hidden" id="price" value="343.75"> -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                                        <div class="flip-container" onClick="submit_ThemeForm(6001)">
                                            <div class="flipper">
                                                <div class="front">
                                                        <img  id="ThemeImage" src="img/page_assets/themes/philippine_festival.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="back">
                                                        <img  id="ThemeImage" src="img/page_assets/themes/philippine_festival.jpg" alt="" class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="invisible">

                                                <img  id="ThemeImage" src="img/page_assets/themes/philippine_festival.jpg" alt="" class="img-responsive">
                                        </a>
                                </form>
                                    <div class="ThemeDetails-Container">
                                        <p class="textTheme">Philippines Festival</p>
                                        <!-- <p class="textTheme">₱343.75</p> -->
                                        <p class="textTheme">FREE</p>
                                    </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="product">
                                <form  id="themeForm6002" role="form" method="post" action="{{ url('workspace') }}" name="themeForm" class="form_navs">
                                    <input type="text" name="themeid" class="form-control hidden" id="themeid" value="6002">
                                    <!-- <input type="text" name="price" class="form-control hidden" id="price" value="280.75"> -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                                        <div class="flip-container" onClick="submit_ThemeForm(6002)">
                                            <div class="flipper">
                                                <div class="front">
                                                        <img  id="ThemeImage" src="img/page_assets/themes/christmas1.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="back">
                                                        <img  id="ThemeImage" src="img/page_assets/themes/christmas1.png" alt="" class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="invisible">

                                            <img  id="ThemeImage" src="img/page_assets/themes/christmas1.png" alt="" class="img-responsive">
                                        </a>
                                </form>
                                <div class="ThemeDetails-Container">
                                        <p class="textTheme">Christmas</p>
                                        <!-- <p class="textTheme">₱280.75</p> -->
                                        <p class="textTheme">FREE</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product">
                                <form  id="themeForm6001" role="form" method="post" action="{{ url('workspace') }}" name="themeForm" class="form_navs">
                                    <input type="text" name="themeid" class="form-control hidden" id="themeid" value="6001">
                                    <!-- <input type="text" name="price" class="form-control hidden" id="price" value="299.99"> -->

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                                        <div class="flip-container" onClick="submit_ThemeForm(6001)">
                                            <div class="flipper">
                                                <div class="front">
                                                        <img  id="ThemeImage" src="img/page_assets/themes/birthday1.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="back">
                                                        <img  id="ThemeImage" src="img/page_assets/themes/birthday1.png" alt="" class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="invisible">

                                            <img  id="ThemeImage" src="img/page_assets/themes/birthday1.png" alt="" class="img-responsive">
                                        </a>
                                </form>
                                <div class="ThemeDetails-Container">
                                        <p class="textTheme">Birthday</p>
                                        <!-- <p class="textTheme">₱299.99</p> -->
                                        <p class="textTheme">FREE</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product">
                                <form  id="themeForm6005" role="form" method="post" action="{{ url('workspace') }}" name="themeForm" class="form_navs">
                                    <input type="text" name="themeid" class="form-control hidden" id="themeid" value="6005">
                                    <!-- <input type="text" name="price" class="form-control hidden" id="price" value="299.99"> -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                                        <div class="flip-container" onClick="submit_ThemeForm(6005)">
                                            <div class="flipper">
                                                <div class="front">
                                                        <img  id="ThemeImage" src="img/page_assets/themes/summer1.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="back">
                                                        <img  id="ThemeImage" src="img/page_assets/themes/summer1.jpg" alt="" class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="invisible">

                                            <img  id="ThemeImage" src="img/page_assets/themes/summer1.jpg" alt="" class="img-responsive">
                                        </a>
                                </form>
                                <div class="ThemeDetails-Container">
                                        <p class="textTheme">Summer</p>
                                        <!-- <p class="textTheme">₱299.99</p> -->
                                        <p class="textTheme">FREE</p>
                                </div>
                            </div>
                        </div>


                         <div class="item">
                            <div class="product">
                                <form  id="themeForm6003" role="form" method="post" action="{{ url('workspace') }}" name="themeForm" class="form_navs">
                                    <input type="text" name="themeid" class="form-control hidden" id="themeid" value="6003">
                                    <!-- <input type="text" name="price" class="form-control hidden" id="price" value="375.25"> -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                                        <div class="flip-container" onClick="submit_ThemeForm(6003)">
                                            <div class="flipper">
                                                <div class="front">
                                                        <img  id="ThemeImage" src="img/page_assets/themes/graduation1.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="back">
                                                        <img  id="ThemeImage" src="img/page_assets/themes/graduation1.png" alt="" class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="invisible">

                                            <img  id="ThemeImage" src="img/page_assets/themes/graduation1.png" alt="" class="img-responsive">
                                        </a>
                                </form>
                                <div class="ThemeDetails-Container">
                                        <p class="textTheme">Graduation</p>
                                        <!-- <p class="textTheme">₱375.00</p> -->
                                        <p class="textTheme">FREE</p>
                                </div>
                            </div>
                        </div>

            </div>
        </div>
    </div>
</div>

        <script src="/js/bootstrap.min.js"></script>   
        <script src="/js/waypoints.min.js"></script>
        <script src="/js/modernizr.js"></script>
        <script src="/js/bootstrap-hover-dropdown.js"></script>
        <script src="/js/owl.carousel.min.js"></script> 

  @endsection
