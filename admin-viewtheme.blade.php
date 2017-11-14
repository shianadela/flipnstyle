@extends('layouts.navigations-admin')
 

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

                     <div class="buttons-container">
                            <div class="approveTheme">
                              <a class="backLink-submissions" href="{{ url('admin/submissions') }}"><button type="submit" id="ApproveTheme_button" >BACK TO SUBMISSIONS</button></a>
                            </div>  
                      </div>
                    
                    <div class="displaynavs-containerVIEW-admin">
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
                    ?>
                        <img class="retrievedBG" src="../{{$rbg->designer_themebackgroundsrc}}" onclick="imageClick(this)" data-toggle="modal" data-target="#imagepreview_modal">
                          <?php
                            }}
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
                      ?>
                        <img class="retrievedBG" src="../{{$rbr->designer_themebordersrc}}" onclick="imageClick(this)"  data-toggle="modal" data-target="#imagepreview_modal">
                      <?php
                          }}
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
                      ?>
                        <img class="retrievedBG" src="../{{$rem->designer_themeembellishmentsrc}}" onclick="imageClick(this)" data-toggle="modal" data-target="#imagepreview_modal">
                      <?php
                          }}
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
