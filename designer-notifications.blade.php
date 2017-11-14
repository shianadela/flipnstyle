@extends('layouts.navigations-designer')

@section('content_nav')
<link rel="stylesheet" href="css/tableBootstrap/normalize-5.0.0-normalize.min.css">
<link rel="stylesheet" href="css/tableBootstrap/tableBootstrap.css">
            						<p class="designerid hidden">{{$designerid}}</p>
        <div class="container">
            <div class="navbar-header">

            <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$designerid}}">
                <div class="avatar-container">
                  <img src="/img/page_assets/avatar/man.png" alt="Avatar logo" class="hidden-xs">
                  <p>DESIGNER</p>
                </div>
                <a class="navbar-brand home"  href="{{ url('designer/logged/index', [$designerid]) }}" data-animate-hover="bounce">
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
<div class="themeContent">
        <div class="newTheme">
                <h3 class="reg"><strong>Notifications</strong></h3>
                <p class="contentp">Your posted theme will be reviewed by the administrator of Flip 'n Style.
                                    Processing of themes may take up to 3-4 days depending on the availability of the administrator.</p>
                <hr class="rhr">

                 <div class="wrapper">
                  
                  <div class="table">
                    
                    <div class="row header" id="rowHeader">
                      
                      <div class="cell">
                        TYPE
                      </div>

                      <div class="cell">
                        DESCRIPTION
                      </div>

                      <div class="cell">
                        ACTION
                      </div>
                    
                    </div>

                    <!-- THEME PURCHASE  -->
                      <?php foreach ($purchases as $purchase) { ?>
                      <div class="row">

                        <div class="cell">
                          THEME PURCHASE
                        </div>

                         <div class="cell">

                              Shipped To : {{$purchase->purchase_name }} <br>
                              Shipping Address : {{$purchase->purchase_address}} <br>
                              Contact Number : {{$purchase->purchase_contactNumber}} <br>
                              
                              <div class="hidden-first" id="hidden-first{{$purchase->purchase_scrapbookid}}">
                              Summary of Account <br>
                              Theme Price : ₱{{$purchase->purchase_themePrice}} <br>
                              Scrapbook Pages : {{$purchase->purchase_pages}} <br>
                              Extra Page(s) : {{$purchase->purchase_extraPages}} <br>
                              Extra Page Fee : ₱{{$purchase->purchase_excessFee}} <br>
                              Shipping Courier : {{$purchase->purchase_shippingCourier}} <br>
                              Shipping Fee : ₱{{$purchase->purchase_shippingFee}} <br>
                              </div>

                              <a id="show-more{{$purchase->purchase_scrapbookid}}" class="show-more" onclick="show_more({{$purchase->purchase_scrapbookid}})">Show More</a>
                              <a id="show-less{{$purchase->purchase_scrapbookid}}" class="show-less" onclick="show_less({{$purchase->purchase_scrapbookid}})">Show Less</a>

                          </div>

                        
                       <!--  <div class="actionsContainer">
                        <form  id="reviewForm" role="form" method="post" action="{{ url('designer/viewtheme') }}" name="DesignerForm" class="form_navs">
                        <input type="text" name="themeid" class="form-control hidden" id="designerid">
                        <input type="text" name="designerid" class="form-control hidden" id="designerid" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                            <div class="cell">
                              <button type="submit" class="Approvedsubmission"> VIEW</button>
                            </div></br>
                        </form>
                        </div> -->

                      </div>
                      <?php } ?>
                    <!-- THEME PURCHASE  -->
                    
                    <!-- ON HOLD THEMES  -->
                      <?php foreach ($onholds as $onhold) {
                      if($onhold->status == "On Hold"){ ?>
                      <div class="row">

                        <div class="cell">
                          ON HOLD THEME
                        </div>

                         <div class="cell">
                            Theme Title : {{$onhold->designer_themetitle }} <br>
                            Price : ₱{{$onhold->designer_themePrice}} <br>
                          </div>

                        
                        <div class="actionsContainer">
                        <form  id="reviewForm" role="form" method="post" action="{{ url('designer/changeupload') }}" name="DesignerForm" class="form_navs">
                        <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$designerid}}">
                        <input type="text" name="themeid" class="form-control hidden" id="themeid" value="{{$onhold->designer_themeid}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                            <div class="cell">
                              <button type="submit" class="Approvedsubmission"> CHANGE</button>
                            </div></br>
                        </form>
                        </div>

                      </div>
                      <?php } }?>
                    <!-- ON HOLD THEMES  -->

                  </div>
                  
                </div>

        </div>
</div>
        <script src='css/tableBootstrap/jquery-2.1.3-jquery.min.js'></script>    
        <script src="/js/workspaceJS/Admin/adminJS-admin.js"></script> 

 @endsection
