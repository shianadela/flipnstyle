@extends('layouts.navigations-designer')

@section('content_nav')
                                    <p class="designerid hidden">{{$designerid}}</p>

        <div class="container">
            <div class="navbar-header">
                <div class="avatar-container">
                  <img src="/img/page_assets/avatar/man.png" alt="Avatar logo" class="hidden-xs">
                  <p>DESIGNER</p>
                </div>

            <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$designerid}}">


                <a class="navbar-brand home"  href="#" data-animate-hover="bounce">
                    <img src="/img/page_assets/logo/logo.png" alt="FlipnStyle logo" class="hidden-xs">
                    <img src="/img/page_assets/logo/logo.png" alt="FlipnStyle logo" class="visible-xs"><span class="sr-only">Flip 'n Style - go to homepage</span>
                </a>
            </div>


            <div class="navbar-collapse collapse" id="navigation">
 
               <ul class="nav navbar-nav navbar-left">
                    <form  role="form" method="post" action="{{ url('designer_index') }}" name="DesignerForm" class="form_navs">
                        <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$designerid}}">
                        
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                            <button type="submit" data-hover="dropdown" class="btn btn-primary" id="nav_buttons">Home</button>
                        
                    </form>

                    <form  role="form" method="post" action="{{ url('designer_newsubmissions') }}" name="DesignerForm" class="form_navs">
                        <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$designerid}}">
                        
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                            <button type="submit" data-hover="dropdown" class="btn btn-primary" id="nav_buttons">New Submission</button>
                        
                    </form>

                    <form  role="form" method="post" action="{{ url('designer_lists') }}" name="DesignerForm" class="form_navs">
                        <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$designerid}}">
                        
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                            <button type="submit" data-hover="dropdown" class="btn btn-primary" id="nav_buttons">Submission List</button>
                        
                    </form>

                    <form  role="form" method="post" action="{{ url('designer_notifications') }}" name="DesignerForm" class="form_navs">
                        <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$designerid}}">
                        
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                            <button type="submit" data-hover="dropdown" class="btn btn-primary" id="nav_buttons">Notifications</button>
                        
                    </form>
                </ul>


            </div>

            </div>
 @endsection


@section('content')

        <h2 class="hello_designer">Welcome Designer!</h2><br><br><br><br>

<!-- CAROUSEL -->
            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="/img/page_assets/carousel/c1.png" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="/img/page_assets/carousel/c2.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="/img/page_assets/carousel/c3.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="/img/page_assets/carousel/c4.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="/img/page_assets/carousel/c5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
<!-- CAROUSEL -->

 @endsection
 
