@extends('layouts.navigations-designer')

@section('content_nav')
<link rel="stylesheet" href="css/tableBootstrap/normalize-5.0.0-normalize.min.css">
<link rel="stylesheet" href="css/tableBootstrap/tableBootstrap.css">
                                    <p class="designerid hidden">{{$logged_id}}</p>
        <div class="container">
            <div class="navbar-header">
                
                <div class="avatar-container">
                  <img src="/img/page_assets/avatar/man.png" alt="Avatar logo" class="hidden-xs">
                  <p>DESIGNER</p>
                </div>

                <a class="navbar-brand home"  href="#" data-animate-hover="bounce">
                    <img src="/img/page_assets/logo/logo.png" alt="FlipnStyle logo" class="hidden-xs">
                    <img src="/img/page_assets/logo/logo.png" alt="FlipnStyle logo" class="visible-xs"><span class="sr-only">Flip 'n Style - go to homepage</span>
                </a>
            </div>


            <div class="navbar-collapse collapse" id="navigation">
 
               <ul class="nav navbar-nav navbar-left">
                    <form  role="form" method="post" action="{{ url('designer_index') }}" name="DesignerForm" class="form_navs">
                        <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$logged_id}}">
                        
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                            <button type="submit" data-hover="dropdown" class="btn btn-primary" id="nav_buttons">Home</button>
                        
                    </form>

                    <form  role="form" method="post" action="{{ url('designer_newsubmissions') }}" name="DesignerForm" class="form_navs">
                        <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$logged_id}}">
                        
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                            <button type="submit" data-hover="dropdown" class="btn btn-primary" id="nav_buttons">New Submission</button>
                        
                    </form>

                    <form  role="form" method="post" action="{{ url('designer_lists') }}" name="DesignerForm" class="form_navs">
                        <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$logged_id}}">
                        
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                            <button type="submit" data-hover="dropdown" class="btn btn-primary" id="nav_buttons">Submission List</button>
                        
                    </form>

                    <form  role="form" method="post" action="{{ url('designer_notifications') }}" name="DesignerForm" class="form_navs">
                        <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$logged_id}}">
                        
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                            <button type="submit" data-hover="dropdown" class="btn btn-primary" id="nav_buttons">Notifications</button>
                        
                    </form>
                </ul>
            </div>

            </div>
 @endsection

@section('content')
<div class="themeContent">
        <div class="newTheme">
                <h3 class="reg"><strong>List</strong></h3>
                <p class="contentp">Your posted theme will be reviewed by the administrator of Flip 'n Style.
                                    Processing of themes may take up to 3-4 days depending on the availability of the administrator.</p>
                <hr class="rhr">

               
                <div class="wrapper">
                  
                  <div class="table">
                    
                    <div class="row header" id="rowHeader">
                      <div class="cell">
                        TITLE
                      </div>
                      <div class="cell">
                        PRICE
                      </div>
                      <div class="cell">
                        DATE CREATED
                      </div>
                      <div class="cell">
                        STATUS
                      </div>
                      <div class="cell">
                        ACTION
                      </div>
                    </div>

                        <?php foreach ($list as $lists) {
                            $dateCreated = $lists->created_at;
                            $stringDate = strtotime($dateCreated->todatestring());
                        ?>
                    <div class="row">
                      <div class="cell">
                        {{ $lists->designer_themetitle }}
                      </div>
                      <div class="cell">
                        ₱{{ $lists->designer_themePrice }}
                      </div>
                      <div class="cell">
                        {{date('M d, Y', $stringDate)}}
                      </div>
                      <div class="cell">
                        {{$lists->status}}
                      </div>
                      
                      
                      <div class="actionsContainer">
                      <form  id="reviewForm" role="form" method="post" action="{{ url('designer/viewtheme') }}" name="DesignerForm" class="form_navs">
                      <input type="text" name="themeid" class="form-control hidden" id="designerid" value="{{$lists->designer_themeid}}">
                      <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$logged_id}}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                          <div class="cell">
                            <button type="submit" class="Approvedsubmission"> VIEW</button>
                          </div></br>
                      </form>
                      </div>
                    </div>
                        <?php
                        }
                        ?>
                    
                    
                  </div>
                  
                </div>


        </div>
</div>
        <script src='css/tableBootstrap/jquery-2.1.3-jquery.min.js'></script>    

 @endsection
