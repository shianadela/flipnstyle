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
                <h3 class="reg"><strong>Review </strong></h3>
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
                      <p class="lead1"><strong>Designer ID: </strong>{{$tc->designerid}}</p><br>
                    </div>

                    <div class="onholdNotes-container">
                      <p class="OnHoldNotes">On Hold Notes:</p>
                        <!-- ON HOLD BG -->
                        <?php 
                          $OnHoldBG = DesignerScrapbookThemeBackground::where('designer_themeid', $themeid)->get();
                          foreach ($OnHoldBG as $ohbg) {
                            if($ohbg->designer_elementstatus == "On Hold"){
                        ?>
                        <p class="notes" id="IMGnote{{$ohbg->designer_themebackgroundid}}">- {{$ohbg->designer_themebackgroundsrc}} is on hold</p>
                        <?php } }?>
                        <!-- ON HOLD BG -->

                        <!-- ON HOLD BD -->
                        <?php 
                          $OnHoldBD = DesignerScrapbookThemeBorder::where('designer_themeid', $themeid)->get();
                          foreach ($OnHoldBD as $ohbd) {
                            if($ohbd->designer_elementstatus == "On Hold"){
                        ?>
                        <p class="notes" id="IMGnote{{$ohbd->designer_themeborderid}}">- {{$ohbd->designer_themebordersrc}} is on hold</p>
                        <?php } }?>
                        <!-- ON HOLD BD -->

                        <!-- ON HOLD EM -->
                        <?php 
                          $OnHoldEM = DesignerScrapbookThemeEmbellishment::where('designer_themeid', $themeid)->get();
                          foreach ($OnHoldEM as $ohem) {
                            if($ohem->designer_elementstatus == "On Hold"){
                        ?>
                        <p class="notes" id="IMGnote{{$ohem->designer_themeembellishmentid}}">- {{$ohem->designer_themeembellishmentsrc}} is on hold</p>
                        <?php } }?>
                        <!-- ON HOLD EM -->
                    </div>

                     <div class="buttons-container">
                            <div class="approveTheme">
                              <button type="submit" id="ApproveTheme_button" value="{{$tid->designer_themeid}}" class="btn btn-primary">APPROVE</button>
                            </div>  
                            <br>
                             <div class="onholdTheme">
                              <button type="submit" id="OnHoldTheme_button" value="{{$tid->designer_themeid}}" class="btn btn-primary">ONHOLD</button>
                            </div>
                      </div>

                    <div class="displaynavs-containerView-admin">
                      <ul class="nav nav-pills">
                          <li id="displaynav"><a class="background-nav" id="new-design2">Background</a></li>
                          <li id="displaynav"><a class="border-nav" id="new-design2">Border</a></li>
                          <li id="displaynav"><a class="embellishments-nav" id="new-design2">Embellishments</a></li>
                      </ul>
                    </div>
                    
                    <!-- BACKGROUND  -->
                    <div class="AssetContainer-adminVIEW">

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
                       <button class="HOLDbutton" id="HOLDbutton{{$rbg->designer_themebackgroundid}}" style="background-color: rgb(205, 93, 103); color:white;" type="button" onClick="holdIMG( {{$rbg->designer_themebackgroundid}}, '{{$rbg->designer_themebackgroundsrc}}' )">hold</button>
                        <p class="onholdimage{{$rbg->designer_themebackgroundid}} hidden">{{$rbg->designer_themebackgroundid}}</p>
                        <p class="elementBGID{{$bg_counter}} hidden">{{$rbg->designer_themebackgroundid}}</p>
                        <p class="status{{$rbg->designer_themebackgroundid}} hidden" id="status{{$rbg->designer_themebackgroundid}}">On Hold</p>
                        <p class="elementstatusBG{{$bg_counter}} hidden">On Hold</p>
                        <img class="retrievedBG-adminview" src="../{{$rbg->designer_themebackgroundsrc}}" onclick="imageClick(this)" data-toggle="modal" data-target="#imagepreview_modal">
                      <?php } else if ($rbg->designer_elementstatus == "Pending") {  ?> 

                        <button class="HOLDbutton" id="HOLDbutton{{$rbg->designer_themebackgroundid}}" type="button" onClick="holdIMG( {{$rbg->designer_themebackgroundid}}, '{{$rbg->designer_themebackgroundsrc}}' )">hold</button>
                        <p class="onholdimage{{$rbg->designer_themebackgroundid}} hidden">{{$rbg->designer_themebackgroundid}}</p>
                        <p class="elementBGID{{$bg_counter}} hidden">{{$rbg->designer_themebackgroundid}}</p>
                        <p class="status{{$rbg->designer_themebackgroundid}} hidden" id="status{{$rbg->designer_themebackgroundid}}">Pending</p>
                        <p class="elementstatusBG{{$bg_counter}} hidden">Pending</p>
                        <img class="retrievedBG-adminview" src="../{{$rbg->designer_themebackgroundsrc}}" onclick="imageClick(this)" data-toggle="modal" data-target="#imagepreview_modal">
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
                        <button class="HOLDbutton" id="HOLDbutton{{$rbr->designer_themeborderid}}" style="background-color: rgb(205, 93, 103); color:white;" type="button" onClick="holdIMG( {{$rbr->designer_themeborderid}} , '{{$rbr->designer_themebordersrc}}' )">hold</button>
                        <p class="onholdimage{{$rbr->designer_themeborderid}} hidden">{{$rbr->designer_themeborderid}}</p>
                        <p class="elementBDID{{$bd_counter}} hidden">{{$rbr->designer_themeborderid}}</p>
                        <p class="status{{$rbr->designer_themeborderid}} hidden" id="status{{$rbr->designer_themeborderid}}">On Hold</p>
                        <p class="elementstatusBD{{$bd_counter}} hidden">On Hold</p>
                        <img class="retrievedBG-adminview" src="../{{$rbr->designer_themebordersrc}}" onclick="imageClick(this)"  data-toggle="modal" data-target="#imagepreview_modal">
                      <?php } else if ($rbr->designer_elementstatus == "Pending") {?>

                        <button class="HOLDbutton" id="HOLDbutton{{$rbr->designer_themeborderid}}" type="button" onClick="holdIMG( {{$rbr->designer_themeborderid}} , '{{$rbr->designer_themebordersrc}}' )">hold</button>
                        <p class="onholdimage{{$rbr->designer_themeborderid}} hidden">{{$rbr->designer_themeborderid}}</p>
                        <p class="elementBDID{{$bd_counter}} hidden">{{$rbr->designer_themeborderid}}</p>
                        <p class="status{{$rbr->designer_themeborderid}} hidden" id="status{{$rbr->designer_themeborderid}}">Pending</p>
                        <p class="elementstatusBD{{$bd_counter}} hidden">Pending</p>
                        <img class="retrievedBG-adminview" src="../{{$rbr->designer_themebordersrc}}" onclick="imageClick(this)"  data-toggle="modal" data-target="#imagepreview_modal">
                      <?php
                          }}}
                      ?>
                    </div>
                    </div>
                  <!-- BORDER -->

                  <!-- EMBELLISHMENT -->
                    <div id="embellishments_display" class="em hidden">
                    <p class="lead1" id="titleT"><strong>Embellishment</strong></p>
                    <div class="retrieveAssetsContainer">
                      <?php
                      $em_counter = 0;
                        foreach ($retrieveThemeEmbellishment as $rem) {
                          $em_counter++;
                          if($em_counter<=10){
                        if ($rem->designer_elementstatus == "On Hold") {
                      ?>
                      <button class="HOLDbutton" id="HOLDbutton{{$rem->designer_themeembellishmentid}}" style="background-color: rgb(205, 93, 103); color:white;" type="button" onClick="holdIMG({{$rem->designer_themeembellishmentid}} , '{{$rem->designer_themeembellishmentsrc}}' )">hold</button>
                        <p class="onholdimage{{$rem->designer_themeembellishmentid}} hidden">{{$rem->designer_themeembellishmentid}}</p>
                        <p class="elementEMID{{$em_counter}} hidden">{{$rem->designer_themeembellishmentid}}</p>
                        <p class="status{{$rem->designer_themeembellishmentid}} hidden" id="status{{$rem->designer_themeembellishmentid}}">On Hold</p>
                        <p class="elementstatusEM{{$em_counter}} hidden">On Hold</p>
                        <img class="retrievedBG-adminview" src="../{{$rem->designer_themeembellishmentsrc}}" onclick="imageClick(this)" data-toggle="modal" data-target="#imagepreview_modal">

                      <?php } else if($rem->designer_elementstatus == "Pending") {?> 
                        <button class="HOLDbutton" id="HOLDbutton{{$rem->designer_themeembellishmentid}}" type="button" onClick="holdIMG({{$rem->designer_themeembellishmentid}} , '{{$rem->designer_themeembellishmentsrc}}' )">hold</button>
                        <p class="onholdimage{{$rem->designer_themeembellishmentid}} hidden">{{$rem->designer_themeembellishmentid}}</p>
                        <p class="elementEMID{{$em_counter}} hidden">{{$rem->designer_themeembellishmentid}}</p>
                        <p class="status{{$rem->designer_themeembellishmentid}} hidden" id="status{{$rem->designer_themeembellishmentid}}">Pending</p>
                        <p class="elementstatusEM{{$em_counter}} hidden">Pending</p>
                        <img class="retrievedBG-adminview" src="../{{$rem->designer_themeembellishmentsrc}}" onclick="imageClick(this)" data-toggle="modal" data-target="#imagepreview_modal">
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
