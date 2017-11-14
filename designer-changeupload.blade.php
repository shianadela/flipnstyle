@extends('layouts.navigations-designer')

@section('content_nav')
                        <p class="designerid hidden">{{$designerid}}</p>
            						<p class="onholdthemeid hidden">{{$themeid}}</p>
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
<div class="themeContent-changeuploads">
        <div class="newTheme-changeuploads">
                
                <div class="onhold-top">
                <h3 id="desinger-onhold-text-top"><strong>ON HOLD PICTURES</strong></h3>
                <p id="desinger-onhold-text-p">
                  After proper deliberation and thorough examination. 
                  The following image(s) has been deemed inappropriate for
                   publish by Flip 'n Style's admin due to this/these reason(s):
                </p>
                </div>

                <div class="AssetContainer">
                  <?php foreach ($onholdsid as $oh) { ?>
                  <div class="themedetails-container">
                    <p  id="desinger-onhold-text"><strong>Theme Title: </strong>{{$oh->designer_themetitle}}</p>
                    <p  id="desinger-onhold-text"><strong>Price: </strong>₱{{$oh->designer_themePrice}}</p>
                  </div>
                  <?php } ?>
                
                <div class="displaynavs-designerview-change">
                      <ul class="nav nav-pills">
                          <li id="displaynav"><a class="background-nav" id="new-design2">Background</a></li>
                          <li id="displaynav"><a class="border-nav" id="new-design2">Border</a></li>
                          <li id="displaynav"><a class="embellishments-nav" id="new-design2">Embellishments</a></li>
                      </ul>
                </div>
                  
                  <div class="images-onhold">
                    <?php
                      $bgcounter = 0;
                      foreach ($onholdBG as $BG) {
                        $bgcounter++;
                        if ($BG->designer_elementstatus == "On Hold") {  ?>
                      <div class="bg">
                        <?php if($bgcounter<=6){?>
                        <div class="newimage-container">
                          <div class="saved-banner{{$BG->designer_themebackgroundid}} hidden">SAVED</div>
                           <p class="Uploadnew"> Upload a new picture</p>
                        <img class="retrievedBG-designerview" src="../{{$BG->designer_themebackgroundsrc}}">
                           <div class="input-file-row-1">
                             <div class="upload-file-container" id="file-contaier_designerchangeupload">
                                  <form  action="/storeDesignerThemesBG/publicFolder" method="post" target="hiddenFrame{{$bgcounter}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                   <img id="background{{$bgcounter}}" class="drag" src="#" alt=""/>
                            <div class="upload-file-container-text">
                                    <div class = 'one_opacity_0'>
                                          <input type="file" id="inputBackground{{$bgcounter}}" name="designerBackground" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                          <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                    </div>
                                    <iframe name="hiddenFrame{{$bgcounter}}" width="0" height="0" border="0" style="display: none;"></iframe>
                                     <span id="spanHover"> Add Photo </span>
                                  </form>
                            </div>
                              </div>
                            </div>

                              <p id="background_imagesrc{{$BG->designer_themebackgroundid}}" class="u_BG{{$bgcounter}} hidden"></p>
                              <p id="background_themeid{{$BG->designer_themeid}}" class="background_themeid{{$bgcounter}} hidden">{{$BG->designer_themeid}}</p>
                              <p id="background_elementid{{$BG->designer_themebackgroundid}}" class="background_elementid{{$bgcounter}} hidden">{{$BG->designer_themebackgroundid}}</p>
                                <button type="submit" id="update-upload" class="btn btn-primary" 
                                  onClick="updateIMG_BG( {{$BG->designer_themebackgroundid}} )">
                                CHANGE</button><br>
                            <?php } else {?>
                              <div class="newimage-container_6-10">
                          <div class="saved-banner{{$BG->designer_themebackgroundid}} hidden">SAVED</div>
                           <p class="Uploadnew"> Upload a new picture</p>
                        <img class="retrievedBG-designerview" src="../{{$BG->designer_themebackgroundsrc}}">
                           <div class="input-file-row-1">
                             <div class="upload-file-container" id="file-contaier_designerchangeupload">
                                  <form  action="/storeDesignerThemesBG/publicFolder" method="post" target="hiddenFrame{{$bgcounter}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                   <img id="background{{$bgcounter}}" class="drag" src="#" alt=""/>
                            <div class="upload-file-container-text">
                                    <div class = 'one_opacity_0'>
                                          <input type="file" id="inputBackground{{$bgcounter}}" name="designerBackground" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                          <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                    </div>
                                    <iframe name="hiddenFrame{{$bgcounter}}" width="0" height="0" border="0" style="display: none;"></iframe>
                                     <span id="spanHover"> Add Photo </span>
                                  </form>
                            </div>
                              </div>
                            </div>

                              <p id="background_imagesrc{{$BG->designer_themebackgroundid}}" class="u_BG{{$bgcounter}} hidden"></p>
                              <p id="background_themeid{{$BG->designer_themeid}}" class="background_themeid{{$bgcounter}} hidden">{{$BG->designer_themeid}}</p>
                              <p id="background_elementid{{$BG->designer_themebackgroundid}}" class="background_elementid{{$bgcounter}} hidden">{{$BG->designer_themebackgroundid}}</p>
                                <button type="submit" id="update-upload" class="btn btn-primary" 
                                  onClick="updateIMG_BG( {{$BG->designer_themebackgroundid}} )">
                                CHANGE</button>
                          <?php } ?>

                        </div>
                      </div>
                    
                    <?php }} ?> 

                    <?php
                      $bdcounter = 0;
                      foreach ($onholdBD as $BD) {
                        $bdcounter++;
                        if ($BD->designer_elementstatus == "On Hold") {  ?>
                      <div class="bd hidden">
                        <div class="newimage-container">
                          <div class="saved-banner{{$BD->designer_themeborderid}} hidden">SAVED</div>
                           <p class="Uploadnew"> Upload a new picture</p>
                        <img class="retrievedBG-designerview" src="../{{$BD->designer_themebordersrc}}">
                           <div class="input-file-row-1">
                             <div class="upload-file-container" id="file-contaier_designerchangeupload">
                                  <form  action="/storeDesignerThemesBD/publicFolder" method="post" target="hiddenFrame{{$bdcounter}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                   <img id="border{{$bdcounter}}" class="drag" src="#" alt=""/>
                            <div class="upload-file-container-text">
                                    <div class = 'one_opacity_0'>
                                          <input type="file" id="inputBorder{{$bdcounter}}" name="designerBorder" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                          <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                    </div>
                                    <iframe name="hiddenFrame{{$bdcounter}}" width="0" height="0" border="0" style="display: none;"></iframe>
                                     <span id="spanHover"> Add Photo </span>
                                  </form>
                            </div>
                              </div>
                            </div>


                              <p id="border_imagesrc{{$BD->designer_themeborderid}}" class="u_BD{{$bdcounter}} hidden"></p>
                              <p id="border_themeid{{$BD->designer_themeid}}" class="border_themeid{{$bdcounter}} hidden">{{$BD->designer_themeid}}</p>
                              <p id="border_elementid{{$BD->designer_themeborderid}}" class="border_elementid{{$bdcounter}} hidden">{{$BD->designer_themeborderid}}</p>
                                <button type="submit" id="update-upload" class="btn btn-primary" 
                                  onClick="updateIMG_BD( {{$BD->designer_themeborderid}} )">
                                CHANGE</button>

                        </div>
                    </div>
                    <?php }} ?> 

                    <?php
                      $emcounter = 0;
                      foreach ($onholdEM as $EM) {
                        $emcounter++;
                        if ($EM->designer_elementstatus == "On Hold") {  ?>
                      <div class="em hidden">
                      <div class="newimage-container">
                        <div class="saved-banner{{$EM->designer_themeembellishmentid}} hidden">SAVED</div>
                         <p class="Uploadnew"> Upload a new picture</p>
                      <img class="retrievedBG-designerview" src="../{{$EM->designer_themeembellishmentsrc}}">
                         <div class="input-file-row-1">
                           <div class="upload-file-container" id="file-contaier_designerchangeupload">
                                <form  action="/storeDesignerThemesEM/publicFolder" method="post" target="hiddenFrame{{$emcounter}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                 <img id="embellishment{{$emcounter}}" class="drag" src="#" alt=""/>
                          <div class="upload-file-container-text">
                                  <div class = 'one_opacity_0'>
                                        <input type="file" id="inputEmbellishment{{$emcounter}}" name="designerEmbellishment" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                  </div>
                                  <iframe name="hiddenFrame{{$emcounter}}" width="0" height="0" border="0" style="display: none;"></iframe>
                                   <span id="spanHover"> Add Photo </span>
                                </form>
                          </div>
                            </div>
                          </div>

                            <p id="embellishment_imagesrc{{$EM->designer_themeembellishmentid}}" class="u_EM{{$emcounter}} hidden"></p>
                            <p id="embellishment_themeid{{$EM->designer_themeid}}" class="embellishment_themeid{{$emcounter}} hidden">{{$EM->designer_themeid}}</p>
                            <p id="embellishment_elementid{{$EM->designer_themeembellishmentid}}" class="embellishment_elementid{{$emcounter}} hidden">{{$EM->designer_themeembellishmentid}}</p>
                              <button type="submit" id="update-upload" class="btn btn-primary" 
                                onClick="updateIMG_EM( {{$EM->designer_themeembellishmentid}} )">
                              CHANGE</button>

                      </div>
                    </div>
                    <?php }} ?> 


                  </div>
                </div> 
        </div>
</div>
        <script src="/js/workspaceJS/Admin/adminJS-updateIMG.js"></script> 

 @endsection
