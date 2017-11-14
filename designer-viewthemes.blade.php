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
<!-- IMG PREVIEW -->
    <div class="modal fade" id="imagepreview_modal" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="PreviewImage_ModalContent">
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
<!-- IMG PREVIEW -->

<div class="reviewtheme-outercont">
  <p class="themeid hidden"> {{$themeid}}</p>
        <div class="ReviewTheme-cont">
                <h3 class="reg"><strong>View Themes </strong></h3>
                <p class="lead1"><strong> </strong></p>
                <p class="contentp"></p>
                <hr class="rhr">
                    <p class="themeid hidden"></p>
                    <?php
                      use flipnstyle\Designer;
                      use flipnstyle\DesignerScrapbookTheme;
                      use flipnstyle\DesignerScrapbookThemeBackground;
                      use flipnstyle\DesignerScrapbookThemeBorder;
                      use flipnstyle\DesignerScrapbookThemeEmbellishment;

                      $retrieveThemeID = DesignerScrapbookTheme::where('designer_themeid', $themeid )->get();
                      foreach ($retrieveThemeID as $tid) {
                        $designerid = $tid->designer_id;

                          $retrieveThemeCreator = Designer::where('designerid', $designerid )->get();
                          foreach ($retrieveThemeCreator as $tc) {
                      ?>

                    <div class="paymentDetailsContainer">
                      <p class="lead1" id="titleT"><strong>Theme Title: </strong>{{$tid->designer_themetitle}}</p><br>
                      <p class="lead1" id="titleT"><strong>Price: </strong>₱{{$tid->designer_themePrice}}</p><br>
                      <p class="lead1" id="titleT"><strong>Designer Name: </strong>{{$tc->first_name}} {{$tc->last_name}}</p><br>
                      <p class="lead1" id="titleT"><strong>Designer ID: </strong>{{$tc->designerid}}</p><br>
                    </div>

                    <?php if ($tid->status == "On Hold"){?>
                    <div class="onholdNotes-designerview">
                      <p class="OnHoldNotes">Please go to your notifications tab to
                        check for the correspondent reason as to why one or multiple pictures from
                        your submitted theme(s) was put onhold. You can email our site admin to admin@fns.com for more
                        questions and inquiries. 
                       </p>
                    </div>
                    <?php } ?>

                     <!-- <div class="buttons-container">
                            <div class="approveTheme">
                              <a class="backLink-submissions" href="{{ url('designer_lists') }}"><button type="submit" id="ApproveTheme_button" >BACK TO SUBMISSIONS</button></a>
                            </div>  
                      </div> -->
                    
                    <div class="displaynavs-designerview-DES">
                      <ul class="nav nav-pills">
                          <li id="displaynav"><a class="background-nav" id="new-design2">Background</a></li>
                          <li id="displaynav"><a class="border-nav" id="new-design2">Border</a></li>
                          <li id="displaynav"><a class="embellishments-nav" id="new-design2">Embellishments</a></li>
                      </ul>
                    </div>

                    <!-- BACKGROUND  -->
                    <div class="AssetContainer">

                    <div id="background_display" class="bg">
                    <p class="lead1" id="titleT"><strong>Background</strong></p>
                    <div class="retrieveAssetsContainer">
                    <?php
                      }}
                      $retrieveThemeBackground = DesignerScrapbookThemeBackground::where('designer_themeid', $themeid )->get();
                      $retrieveThemeBorder = DesignerScrapbookThemeBorder::where('designer_themeid', $themeid )->get();
                      $retrieveThemeEmbellishment = DesignerScrapbookThemeEmbellishment::where('designer_themeid', $themeid )->get();

                          $bg_counter = 0;
                          foreach ($retrieveThemeBackground as $rbg) {
                          $bg_counter++;
                          if($bg_counter<=10){
                            if($rbg->designer_elementstatus == "On Hold"){
                    ?>  
                        <button type="button"  disabled class="onholdDIV">onhold</button>
                        <img class="retrievedBG" src="../{{$rbg->designer_themebackgroundsrc}}" onclick="imageClick(this)" data-toggle="modal" data-target="#imagepreview_modal">
                    <?php } 
                            elseif( ($rbg->designer_elementstatus == "Approved") || ($rbg->designer_elementstatus == "Pending") ) { ?>      
                        <img class="retrievedBG" src="../{{$rbg->designer_themebackgroundsrc}}" onclick="imageClick(this)" data-toggle="modal" data-target="#imagepreview_modal">

                          <?php
                            }}}
                          ?>
                    </div>
                    </div>
                    <!-- BACKGROUND  -->

                  <!-- BORDER -->
                    <div id="border_display" class="bd hidden">
                    <p class="lead1" id="titleT"><strong>Border</strong></p>
                    <div class="retrieveAssetsContainer">

                      <?php
                      $bd_counter = 0;
                        foreach ($retrieveThemeBorder as $rbr) {
                          $bd_counter++;
                          if($bd_counter<=10){
                            if($rbr->designer_elementstatus == "On Hold"){
                      ?>
                        <button type="button"  disabled class="onholdDIV">onhold</button>
                        <img class="retrievedBG" src="../{{$rbr->designer_themebordersrc}}" onclick="imageClick(this)"  data-toggle="modal" data-target="#imagepreview_modal">
                      <?php } 
                            elseif( ($rbr->designer_elementstatus == "Approved") || ($rbr->designer_elementstatus == "Pending") ) { ?>      
                        <img class="retrievedBG" src="../{{$rbr->designer_themebordersrc}}" onclick="imageClick(this)"  data-toggle="modal" data-target="#imagepreview_modal">
                      <?php
                          }}}
                      ?>
                    </div>
                    </div>
                  <!-- BORDER -->

                  <!-- EMBELLISHMENT -->
                    <div id="embellishments_display" class="em hidden" >
                    <p class="lead1" id="titleT"><strong>Embellishment</strong></p>
                    <div class="retrieveAssetsContainer">
                      <?php
                      $em_counter = 0;
                        foreach ($retrieveThemeEmbellishment as $rem) {
                          $em_counter++;
                          if($em_counter<=10){
                            if($rem->designer_elementstatus == "On Hold"){
                      ?>
                        <button type="button"  disabled class="onholdDIV">onhold</button>
                        <img class="retrievedBG" src="../{{$rem->designer_themeembellishmentsrc}}" onclick="imageClick(this)" data-toggle="modal" data-target="#imagepreview_modal">
                      <?php }
                            elseif( ($rem->designer_elementstatus == "Approved") || ($rem->designer_elementstatus == "Pending") ) { ?>      
                        <img class="retrievedBG" src="../{{$rem->designer_themeembellishmentsrc}}" onclick="imageClick(this)" data-toggle="modal" data-target="#imagepreview_modal">
                      <?php
                          }}}
                      ?> 
                    </div>
                    </div>
                  <!-- EMBELLISHMENT -->

                </div> 
    </div>
</div>

        <script src="/js/bootstrap.min.js"></script>   
        <script src="/js/waypoints.min.js"></script>
        <script src="/js/modernizr.js"></script>
        <script src="/js/bootstrap-hover-dropdown.js"></script>
        <script src="/js/owl.carousel.min.js"></script> 

        <script src="/js/workspaceJS/Admin/adminJS-admin.js"></script> 
 @endsection
