@extends('layouts.navigations-specialworkspace')

@section('content')

<!-- ADD TITLE -->
        <div class="modal fade" id="addtitle_modal" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content" id="titleW">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="title">Title this Scrapbook</h4>
                    </div>
                    <div class="modal-body">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Scrapbook Title"  id="addtitle">
                            </div>
      

                            <p class="text-center">
                                <button class="btn btn-primary1" type="button" id="AddScrapbookTitle"><i class="fa fa-sign-in"></i>Save</button>
                            </p>
                    </div>
                </div>
            </div>
        </div>
<!-- ADD TITLE -->

<!-- UPDATE TITLE -->
        <div class="modal fade" id="edittitle_modal" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content" id="titleW">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="title">Edit Title</h4>
                    </div>
                    <div class="modal-body">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Scrapbook Title"  id="newtitle">
                            </div>
      

                            <p class="text-center">
                                <button class="btn btn-primary" type="button" id="EditScrapbookTitle"><i class="fa fa-sign-in"></i>Edit</button>
                            </p>
                    </div>
                </div>
            </div>
        </div>
<!-- UPDATE TITLE -->

<!-- PAGE SIZE -->
    <div class="modal fade" id="pageSize_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="PageSize_Modal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="pageSizeText">
                        <strong>Select Page Size</strong>
                    </h3>
                </div>

                <div class="modal-body">
                    <!-- LANDSCAPE -->
                    <div class="sizeContent">
                        <div class="landscapeContent">
                            <p class="lead1">
                                <strong>LANDSCAPE</strong>
                            </p>
                            <div id="landscapePage_click" class="landscapePage">
                                <div class="L_textSizeContainer">
                                <strong class="textSize">466 x 749</strong>
                                </div>
                            </div>
                        </div>
                    <!-- LANDSCAPE -->
                    </div>

                    <!-- PORTRAIT -->
                    <div class="sizeContent">
                        <div class="portraitContent">
                            <p class="lead1">
                                <strong>PORTRAIT</strong>
                            </p>
                            <div id="portraitPage_click" class="portraitPage">
                                <div class="P_textSizeContainer">
                                <strong class="textSize">749 x 505</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PORTRAIT -->
                </div>
            </div>
        </div>
    </div>
<!-- PAGE SIZE -->

<!-- ADD PAGE -->
    <div class="modal fade" id="addpage_modal" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="AddPage_ModalContent">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="reg">
                        <strong>Add Page</strong>
                    </h3>
                </div>

                <div class="modal-body">
                    <!-- BLANK PAGE -->
                        <p class="lead1">
                            <strong>Blank</strong>
                        </p>
                        <div class="blankPage">
                            <li class="side-wrapper1" id="addPage">
                                <img class="blankImage" src="../img/page_assets/blankpage/blank1.png">
                            </li>
                        </div>
                    <!-- BLANK PAGE -->
                    
                    <!-- TEMPLATE PAGE -->
                    <p class="lead1">
                        <strong>Template</strong>
                    </p>
                    <div class="blankPage">

                    <!-- BIRTHDAY -->
                        <h5 class="birthdayModalContent">Birthday</h6>
                        <div class="container_bgModal">  
                            <div class="landscapeTheme_Container"> 
                                <?php
                                    $backgroundList_counter = 0;
                                    foreach ($BG_list as $backgroundList) {
                                        $backgroundList_counter++;
                                        if($backgroundList->user_themeid == 6001 && $backgroundList_counter<=10){
                                ?>
                                    <li id="templateBG{{$backgroundList_counter}}" class="themeImage_l hidden">
                                        <img  class="blankImage_l" src="../{{$backgroundList->user_themebackgroundsrc}}">
                                    </li>
                                    <?php 
                                        }
                                         if($backgroundList->user_themeid == 6001 && $backgroundList_counter>10){
                                    ?>
                                    <li id="templateBG{{$backgroundList_counter}}" class="themeImage_p hidden">
                                        <img  class="blankImage_p" src="../{{$backgroundList->user_themebackgroundsrc}}">
                                    </li>
                                <?php }} ?>
                            </div>   
                            <div class="landscapeTheme_Container"> 
                                <?php
                                    $borderList_counter = 0;
                                    $idlist = 20;
                                    foreach ($BD_list as $borderList) {
                                        $borderList_counter++;
                                        $idlist++;
                                        if($borderList->user_themeid == 6001 && $borderList_counter<=10){
                                ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_l hidden">
                                        <img  class="blankImage_l" src="../{{$borderList->user_themebordersrc}}">
                                    </li>
                                    <?php 
                                        }
                                         if($borderList->user_themeid == 6001 && $borderList_counter>10){
                                    ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_p hidden">
                                        <img  class="blankImage_p" src="../{{$borderList->user_themebordersrc}}">
                                    </li>
                                <?php }} ?>
                            </div> 
                        </div>
                    <!-- BIRTHDAY -->
                    
                    <!-- CHRISTMAS -->
                        <h5 class="birthdayModalContent">Christmas</h6>
                        <div class="container_bgModal">  
                            <div class="landscapeTheme_Container"> 
                                <?php
                                    $backgroundList_counter = 0;
                                    $idlist = 40;
                                    foreach ($BG_list as $backgroundList) {
                                        $idlist++;
                                        if($backgroundList->user_themeid == 6002){
                                            $backgroundList_counter++;
                                             if($backgroundList_counter<=10){
                                ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_l hidden">
                                        <img  class="blankImage_l" src="../{{$backgroundList->user_themebackgroundsrc}}">
                                    </li>
                                    <?php 
                                        }}
                                         if($backgroundList->user_themeid == 6002){
                                             if($backgroundList_counter>10){
                                    ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_p hidden">
                                        <img  class="blankImage_p" src="../{{$backgroundList->user_themebackgroundsrc}}">
                                    </li>
                                <?php }}} ?>
                            </div>   
                            <div class="landscapeTheme_Container"> 
                                <?php
                                    $borderList_counter = 0;
                                    $idlist = 60;
                                    foreach ($BD_list as $borderList) {
                                        $idlist++;
                                        if($borderList->user_themeid == 6002){
                                            $borderList_counter++;
                                             if($borderList_counter<=10){
                                ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_l hidden">
                                        <img  class="blankImage_l" src="../{{$borderList->user_themebordersrc}}">
                                    </li>
                                    <?php 
                                        }}
                                         if($borderList->user_themeid == 6002){
                                             if($borderList_counter>10){
                                    ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_p hidden">
                                        <img  class="blankImage_p" src="../{{$borderList->user_themebordersrc}}">
                                    </li>
                                <?php }}} ?>
                            </div> 
                        </div>
                    <!-- CHRISTMAS -->

                    <!-- GRADUATION -->
                        <h5 class="birthdayModalContent">Graduation</h6>
                        <div class="container_bgModal">  
                            <div class="landscapeTheme_Container"> 
                                <?php
                                    $backgroundList_counter = 0;
                                    $idlist = 80;
                                    foreach ($BG_list as $backgroundList) {
                                        $idlist++;
                                        if($backgroundList->user_themeid == 6003){
                                            $backgroundList_counter++;
                                             if($backgroundList_counter<=10){
                                ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_l hidden">
                                        <img  class="blankImage_l" src="../{{$backgroundList->user_themebackgroundsrc}}">
                                    </li>
                                    <?php 
                                        }}
                                         if($backgroundList->user_themeid == 6003){
                                             if($backgroundList_counter>10){
                                    ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_p hidden">
                                        <img  class="blankImage_p" src="../{{$backgroundList->user_themebackgroundsrc}}">
                                    </li>
                                <?php }}} ?>
                            </div>   
                            <div class="landscapeTheme_Container"> 
                                <?php
                                    $borderList_counter = 0;
                                    $idlist = 100;
                                    foreach ($BD_list as $borderList) {
                                        $idlist++;
                                        if($borderList->user_themeid == 6003){
                                            $borderList_counter++;
                                             if($borderList_counter<=10){
                                ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_l hidden">
                                        <img  class="blankImage_l" src="../{{$borderList->user_themebordersrc}}">
                                    </li>
                                    <?php 
                                        }}
                                         if($borderList->user_themeid == 6003){
                                             if($borderList_counter>10){
                                    ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_p hidden">
                                        <img  class="blankImage_p" src="../{{$borderList->user_themebordersrc}}">
                                    </li>
                                <?php }}} ?>
                            </div> 
                        </div>
                    <!-- GRADUATION -->
                    
                    <!-- PHILIPPINE FESTIVAL -->
                        <h5 class="birthdayModalContent">Graduation</h6>
                        <div class="container_bgModal">  
                            <div class="landscapeTheme_Container"> 
                                <?php
                                    $backgroundList_counter = 0;
                                    $idlist = 120;
                                    foreach ($BG_list as $backgroundList) {
                                        $idlist++;
                                        if($backgroundList->user_themeid == 6004){
                                            $backgroundList_counter++;
                                             if($backgroundList_counter<=10){
                                ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_l hidden">
                                        <img  class="blankImage_l" src="../{{$backgroundList->user_themebackgroundsrc}}">
                                    </li>
                                    <?php 
                                        }}
                                         if($backgroundList->user_themeid == 6004){
                                             if($backgroundList_counter>10){
                                    ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_p hidden">
                                        <img  class="blankImage_p" src="../{{$backgroundList->user_themebackgroundsrc}}">
                                    </li>
                                <?php }}} ?>
                            </div>   
                            <div class="landscapeTheme_Container"> 
                                <?php
                                    $borderList_counter = 0;
                                    $idlist = 140;
                                    foreach ($BD_list as $borderList) {
                                        $idlist++;
                                        if($borderList->user_themeid == 6004){
                                            $borderList_counter++;
                                             if($borderList_counter<=10){
                                ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_l hidden">
                                        <img  class="blankImage_l" src="../{{$borderList->user_themebordersrc}}">
                                    </li>
                                    <?php 
                                        }}
                                         if($borderList->user_themeid == 6004){
                                             if($borderList_counter>10){
                                    ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_p hidden">
                                        <img  class="blankImage_p" src="../{{$borderList->user_themebordersrc}}">
                                    </li>
                                <?php }}} ?>
                            </div> 
                        </div>
                    <!-- PHILIPPINE FESTIVAL -->

                    <!-- SUMMER -->
                        <h5 class="birthdayModalContent">Graduation</h6>
                        <div class="container_bgModal">  
                            <div class="landscapeTheme_Container"> 
                                <?php
                                    $backgroundList_counter = 0;
                                    $idlist = 160;
                                    foreach ($BG_list as $backgroundList) {
                                        $idlist++;
                                        if($backgroundList->user_themeid == 6005){
                                            $backgroundList_counter++;
                                             if($backgroundList_counter<=10){
                                ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_l hidden">
                                        <img  class="blankImage_l" src="../{{$backgroundList->user_themebackgroundsrc}}">
                                    </li>
                                    <?php 
                                        }}
                                         if($backgroundList->user_themeid == 6005){
                                             if($backgroundList_counter>10){
                                    ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_p hidden">
                                        <img  class="blankImage_p" src="../{{$backgroundList->user_themebackgroundsrc}}">
                                    </li>
                                <?php }}} ?>
                            </div>   
                            <div class="landscapeTheme_Container"> 
                                <?php
                                    $borderList_counter = 0;
                                    $idlist = 180;
                                    foreach ($BD_list as $borderList) {
                                        $idlist++;
                                        if($borderList->user_themeid == 6005){
                                            $borderList_counter++;
                                             if($borderList_counter<=10){
                                ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_l hidden">
                                        <img  class="blankImage_l" src="../{{$borderList->user_themebordersrc}}">
                                    </li>
                                    <?php 
                                        }}
                                         if($borderList->user_themeid == 6005){
                                             if($borderList_counter>10){
                                    ?>
                                    <li id="templateBG{{$idlist}}" class="themeImage_p hidden">
                                        <img  class="blankImage_p" src="../{{$borderList->user_themebordersrc}}">
                                    </li>
                                <?php }}} ?>
                            </div> 
                        </div>
                    <!-- SUMMER -->

                    </div>
                    <!-- TEMPLATE PAGE -->
            </div>
        </div>
    </div>
</div>
<!-- ADD PAGE -->   

<div id="content">
        <p class="scrapbookHeight hidden"></p>
        <p class="scrapbookWidth hidden"></p>
        <p class="price hidden">{{$price}}</p>
        
            <div class="container new-container">
                <div class="col-md-3">
                    <div id="panel-defaultsidebar-menu-1">
                        <div class="panel-heading">
                            <ul class="nav nav-pills">
                                <li class="active"><a data-toggle="pill" href="#layout" id="new-design">Layout</a></li>
                                <li><a data-toggle="pill" href="#background" id="new-design2">Background</a></li>
                                <li><a data-toggle="pill" href="#border" id="new-design">Border</a></li>
                                <li><a data-toggle="pill" href="#emblishments" id="new-design2">Embellishments</a></li>
                            </ul>
                        </div>
                     <div class="tab-content">                               
                    
                <!-- <h3>Layout</h3> [drag1-drag11] -->                   
                            <div id="layout" class="tab-pane fade">
                                <ul>
                                    <ul>
                                    <li class="side-wrapper1">
                                        <p>Special Theme Layout Coming Soon</p>
                                    </li>   
                                     <li class="side-wrapper2">
                                         <p>Special Theme Layout Coming Soon</p>
                                    </li>
                                    </ul>

                                    <ul>
                                    <li class="side-wrapper1">
                                        <p>Special Theme Layout Coming Soon</p>
                                    </li>
                                    <li class="side-wrapper2">
                                        <p>Special Theme Layout Coming Soon</p>
                                    </ul>

                                    <ul>
                                     <li class="side-wrapper1">
                                        <p>Special Theme Layout Coming Soon</p>
                                    </li>
                                    <li class="side-wrapper2">
                                       <p>Special Theme Layout Coming Soon</p> 
                                    </li>
                                    </ul>

                                    <ul>
                                    <li class="side-wrapper1">
                                       <p>Special Theme Layout Coming Soon</p>
                                    </li>
                                    <li class="side-wrapper2">
                                        <p>Special Theme Layout Coming Soon</p>
                                    </li>
                                    </ul>

                                    <ul>
                                    <li class="side-wrapper1">
                                        <p>Special Theme Layout Coming Soon</p>
                                    </li>
                                    <li class="side-wrapper2">
                                        <p>Special Theme Layout Coming Soon</p>
                                    </li>
                                    </ul>
                                </ul>
                            </div>
                <!-- <h3>Layout</h3> [drag1-drag11] -->

                <!-- <h3>Background</h3> [drag1-drag20]-->
                            <div id="background" class="tab-pane fade in active">
                                <ul>
                                    <?php
                                        $background_counter = 0;
                                        foreach ($BG as $background) {
                                            $background_counter++;
                                            if($background_counter<=10){
                                    ?>
                                        <li id="T1" class="L_li hidden">
                                            <img id="drag{{$background_counter}}" class="dragbg_l hidden" src="../{{$background->designer_themebackgroundsrc}}" draggable="true" ondragstart="drag(event)" >
                                        </li>
                                        <?php 
                                            }
                                             if($background_counter>10){
                                        ?>
                                        <li id="T1" class="P_li hidden">
                                            <img id="drag{{$background_counter}}" class="dragbg_p hidden" src="../{{$background->designer_themebackgroundsrc}}" draggable="true" ondragstart="drag(event)" >
                                        </li>
                                    <?php }} ?>
                                </ul>
                            </div>
                <!-- <h3>Background</h3> [drag1-drag20]-->

                <!-- <h3>BORDERS</h3> [drag21-drag40]-->
                            <div id="border" class="tab-pane fade">
                                <ul>
                                    <?php
                                        $border_counter = 20;
                                        foreach ($BD as $border) {
                                            $border_counter++;
                                            if($border_counter<=30){
                                    ?>
                                        <li id="T1" class="L_li hidden">
                                            <img id="drag{{$border_counter}}" class="dragbg_l hidden" src="../{{$border->designer_themebordersrc}}" draggable="true" ondragstart="drag(event)" >
                                        </li>
                                        <?php 
                                            }
                                             if($border_counter>30){
                                        ?>
                                        <li id="T1" class="P_li hidden">
                                            <img id="drag{{$border_counter}}" class="dragbg_p hidden" src="../{{$border->designer_themebordersrc}}" draggable="true" ondragstart="drag(event)" >
                                        </li>
                                    <?php }} ?>
                                </ul>
                            </div>
                <!-- <h3>BORDERS</h3> [drag21-drag40]-->

                <!-- <h3>EMBELLISHMENT</h3> [drag41-drag50]-->
                            <div id="emblishments" class="tab-pane fade">
                                <ul>
                                    <?php
                                    $embellishment_counter = 50;
                                        foreach ($EM as $embellishment) {
                                        $embellishment_counter++;
                                    ?>
                                        <li id="T1">
                                            <img id="drag{{$embellishment_counter}}" class="drag" src="../{{$embellishment->designer_themeembellishmentsrc}}">
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                <!-- <h3>EMBELLISHMENT</h3> [drag41-drag50]-->

                    </div>
                </div>
            </div>

<!-- WORKSPACE CONTENT -->

<!-- THEME USED --> 
        <!-- THEME USED --> <li class="themeid-CONT hidden"><p id="themeid" class="theme_id hidden">{{$themeid}}</p></li><!-- THEME USED --> 
    <p class="themeid hidden">{{$themeid}}</p>
<!-- THEME USED -->

        <div ng-app="">
            <div class="col-md-9">
                <div id="panel-defaultsidebar-menu-2">
                    <div class="panel-heading">
                    <p class="restriction hidden">ViewAndEdit</p>

                        <!-- SCRAPBOOK NAVIGATIONS -->
                        <ul class="nav nav-pills">

                            <!-- SAVE PAGE-->
                            <li id="sns_share">
                                <button id="SaveScrapbookPage" class="button_savepage" /> SAVE </button>
                            </li>
                            <!-- SAVE PAGE-->

                            <!-- EDIT TITLE -->
                            <li><p id="scrapbookid" class="scrap_id hidden"> </p></li>

                            <p id="scrapbookpagesid" class="scrappages_id hidden" > </p>

                            </li><div class="scrap_title hidden">
                            
                            <h2 id="saved_title" class="saved_title"> </h2>

                            <button id="button_edit" class="button_edit"  data-toggle="modal" data-target="#edittitle_modal">EDIT</button>
                            </div></li>
                            <!-- EDIT TITLE -->

                            <!-- ADD TITLE -->
                            <li>
                            <button id="addTitle" class="button_addtitle" data-toggle="modal" data-target="#addtitle_modal">ADD TITLE</button>
                            </li>
                            <!-- ADD TITLE -->

                            <!-- RESET SCRAPBOOK DIV -->
                            <li>
                            <button id="reset"  class="button_reset" onclick="resetScrapbook();" value="Reset" ng-click="AddT.$rollbackViewValue(); name=''"/>RESET PAGE</button>
                            </li>
                            <!-- RESET SCRAPBOO DIV -->

                            <!-- ADD PAGE -->
                            <li>
                                <button  class="button_addpage" data-toggle="modal" data-target="#addpage_modal">ADD PAGE</button>
                            </li>
                            <!-- ADD PAGE -->

                            <!-- SHOW PAGE -->
                            <li>
                                <button  class="button_pagesize hidden" id="PageSize_button" data-toggle="modal" data-target="#pageSize_modal">PAGE SIZE</button>
                            </li>
                            <!-- SHOW PAGE -->

                             <!-- ADD TEXT -->
                            <li class="firstAddTextButton">
                                <button id="createPad-landscape1" onclick="addText_L();" class="button_addtext-landscape hidden" >ADD TEXT</button>
                                <button id="createPad-portrait1" onclick="addText_P();" class="button_addtext-portrait hidden" >ADD TEXT</button>
                            </li>
                            <!-- ADD TEXT -->


                        </ul> 
                        <!-- SCRAPBOOK NAVIGATIONS --> 

                    </div>


                       <!-- WORKSPACE -->
                            <div class="box2" id="details">
                                <div class="col-md-9" id="contains-col9"> 
                                             
                                         <div class="savingloader" id="savingLoader"> <img class="LoaderSave" src="gif/loader/teardrop.gif"/> </div>

                                        <!-- DROPPABLE DIV -->
                                            <div  id ="innerPageWrapper" class="innerPageWrapper">

                                            <!-- PORTRAIT PAGE  -->
                                                <!-- NEXT PAGE BUTTONS -->
                                                <div id="nextpage" class="nextpage_P hidden">
                                                        <button  id="P_leftpage" class="leftpage"></button>
                                                        <button  id="P_rightpage" class="rightpage"></button>
                                                </div>
                                                <!-- NEXT PAGE BUTTONS --> 
                                                <p id="pageNUM_P" class="pageNUM_P hidden"> Page Number: 1 </p>
                                                <div class="PORTRAIT hidden"> 

                                                    <div id="P_workspacediv" class="P_newPage1 hidden" ondrop="drop(event)" ondragover="allowDrop(event)" style="display: block;">         
                                                    <p id="scrapbookpagesid_pageP1" class="scrapbookpagesid_page hidden"></p>
                                                    </div>
                                                </div>
                                            <!-- PORTRAIT PAGE  -->

                                            <!-- LANDSCAPE PAGE -->
                                                <!-- NEXT PAGE BUTTONS -->
                                                <div id="nextpage" class="nextpage_L hidden">
                                                        <button  id="L_leftpage" class="leftpage"></button>
                                                        <button  id="L_rightpage" class="rightpage"></button>
                                                </div>
                                                <!-- NEXT PAGE BUTTONS --> 
                                                <p id="pageNUM_L" class="pageNUM hidden"> Page Number: 1 </p>
                                                <div class="LANDSCAPE hidden">
                                                    <div id="L_workspacediv" class="L_newPage1" ondrop="drop(event)" ondragover="allowDrop(event)" style="display: block;">
                                                    <p id="scrapbookpagesid_pageL1" class="scrapbookpagesid_page hidden"></p>
                                                    </div>
                                                </div>
                                            <!-- LANDSCAPE PAGE -->


                                            </div>
                                        <!-- DROPPABLE DIV -->                                 
                                </div>

                            </div>
                        <!-- WORKSPACE -->

                </div>
            </div>
        </div>
<!-- WORKSPACE CONTENT -->          

<!-- PHOTOS // PAGES -->
                 <div class="col-md-9" id="photo-9" >
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <ul class="nav nav-pills">
                                <li class="active"><a data-toggle="pill" href="#photos" id="button_add">Photos</a></li>
                                <li><a data-toggle="pill" href="#pages" id="button_add">Pages</a></li>

                                <li id="sns_share"><a href="#" data-toggle="modal" data-target="#login-modal" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a></li>
                                <li id="sns_share"> <a href="#" data-toggle="modal" data-target="#login-modal" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a></li>
                                <li id="sns_share"><h4 id="sityf">Show it to your friends</h4></li>
                            </ul>
                        </div>

                        <div class="tab-content con">

                          
                            <!-- PHOTOS [drag42-drag49]-->
                            <div id="photos" class="tab-pane fade in active">
                                 <fieldset>
                                    <div class="input-file-row-1">
                                         <div class="upload-file-container">
                                            <form  action="/store" method="post" target="hiddenFrame1" accept-charset="UTF-8" enctype="multipart/form-data">
                                               <img id="drag43" class="drag" src="#" alt=""/>
                                        <div class="upload-file-container-text">
                                                 <div class = 'one_opacity_0'>
                                                      <input type="file" name="savedImage" id="customerpic2" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();"/>
                                                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                      <button type="button" class="bt1 hidden" id="uploadFile1">Upload</button>
                                                      </div>
                                                      <iframe name="hiddenFrame1" width="0" height="0" border="0" style="display: none;"></iframe>

                                                 <span> Add Photo </span>
                                            </form>
                                        </div>
                                         </div>
                                     </div>

                                     <div class="input-file-row-1">
                                         <div class="upload-file-container">
                                            <form  action="/store" method="post" target="hiddenFrame2" accept-charset="UTF-8" enctype="multipart/form-data">
                                               <img id="drag44" class="drag" src="#" alt=""/>
                                        <div class="upload-file-container-text">
                                                 <div class = 'one_opacity_0'>
                                                      <input type="file" name="savedImage" id="customerpic3" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();" />
                                                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                      <button type="button" class="bt1 hidden" id="uploadFile2">Upload</button>
                                                      </div>
                                                      <iframe name="hiddenFrame2" width="0" height="0" border="0" style="display: none;"></iframe>
                                                 
                                                 <span> Add Photo </span>
                                            </form> 
                                        </div>
                                         </div>
                                     </div>
  

                                     <div class="input-file-row-1">
                                         <div class="upload-file-container">
                                            <form  action="/store" method="post" target="hiddenFrame3" accept-charset="UTF-8" enctype="multipart/form-data">
                                               <img id="drag45" class="drag" src="#" alt=""/>
                                        <div class="upload-file-container-text">
                                                 <div class = 'one_opacity_0'>
                                                      <input type="file" id="customerpic4" name="savedImage" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                     <button type="button" class="bt1 hidden" id="uploadFile3">Upload</button>
                                                      </div>
                                                      <iframe name="hiddenFrame3" width="0" height="0" border="0" style="display: none;"></iframe>
                                                 
                                                 <span> Add Photo </span>
                                            </form>
                                        </div>
                                         </div>
                                     </div>

                                     <div class="input-file-row-1">
                                         <div class="upload-file-container">
                                            <form  action="/store" method="post" target="hiddenFrame4" accept-charset="UTF-8" enctype="multipart/form-data">
                                               <img id="drag46" class="drag" src="#" alt=""/>
                                        <div class="upload-file-container-text">
                                                 <div class = 'one_opacity_0'>
                                                      <input type="file" id="customerpic5" name="savedImage" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();"/>
                                                      <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                                      <button type="button" class="bt1 hidden" id="uploadFile4">Upload</button>
                                                      </div>
                                                      <iframe name="hiddenFrame4" width="0" height="0" border="0" style="display: none;"></iframe>
                                                 
                                                 <span> Add Photo </span>
                                            </form>
                                        </div>
                                         </div>
                                     </div>

                                     <div class="input-file-row-1">
                                         <div class="upload-file-container">
                                            <form  action="/store" method="post" target="hiddenFrame5" accept-charset="UTF-8" enctype="multipart/form-data">
                                               <img id="drag47" class="drag" src="#" alt=""/>
                                        <div class="upload-file-container-text">
                                                 <div class = 'one_opacity_0'>
                                                      <input type="file" id="customerpic6" name="savedImage" accept="image/jpg,image/png,image/jpeg,image/"   onchange="this.form.submit();"/>
                                                      <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                                      <button type="button" class="bt1 hidden" id="uploadFile5">Upload</button>
                                                      </div>
                                                      <iframe name="hiddenFrame5" width="0" height="0" border="0" style="display: none;"></iframe>
                                                 
                                                 <span> Add Photo </span>
                                            </form>
                                        </div>
                                         </div>
                                     </div>

                                     <div class="input-file-row-1">
                                         <div class="upload-file-container">
                                            <form  action="/store" method="post" target="hiddenFrame6" accept-charset="UTF-8" enctype="multipart/form-data">
                                               <img id="drag48" class="drag" src="#" alt=""/>
                                        <div class="upload-file-container-text">
                                                 <div class = 'one_opacity_0'>
                                                      <input type="file" id="customerpic7" name="savedImage" accept="image/jpg,image/png,image/jpeg,image/"   onchange="this.form.submit();"/>
                                                      <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                                      <button type="button" class="bt1 hidden" id="uploadFile6">Upload</button>
                                                      </div>
                                                      <iframe name="hiddenFrame6" width="0" height="0" border="0" style="display: none;"></iframe>
                                                 
                                                 <span> Add Photo </span>
                                            </form>
                                        </div>
                                         </div>
                                     </div>

                                     <div class="input-file-row-1">
                                         <div class="upload-file-container">
                                            <form  action="/store" method="post" target="hiddenFrame7" accept-charset="UTF-8" enctype="multipart/form-data">
                                               <img id="drag49" class="drag" src="#" alt=""/>
                                        <div class="upload-file-container-text">
                                                 <div class = 'one_opacity_0'>
                                                      <input type="file" id="customerpic8" name="savedImage" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();"/>
                                                      <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                                      <button type="button" class="bt1 hidden" id="uploadFile7">Upload</button>
                                                      </div>
                                                      <iframe name="hiddenFrame7" width="0" height="0" border="0" style="display: none;"></iframe>
                                                 
                                                 <span> Add Photo </span>
                                            </form>
                                        </div>
                                          </div>
                                    </div> 
                                 </fieldset>
                            </div> 
                            <!-- PHOTOS [drag42-drag49]-->

                            <!-- PAGES -->
                            <div id="pages" class="tab-pane con">
                                <div >
                                    <ul class="book-page">
                                        <!-- <li class="page-mini" id="result1" draggable="true" ondragstart="drag(event)">
                                            
                                        </li>
                                        <li class="page-mini" id="result2" draggable="true" ondragstart="drag(event)">
                                            
                                        </li>
                                        <li class="page-mini" id="result3" draggable="true" ondragstart="drag(event)">
                                            
                                        </li>
                                        <li class="page-mini">
                                            
                                        </li>
                                        <li class="page-mini">
                                            
                                        </li>
                                        <li class="page-mini">
                                            
                                        </li>
                                        <li class="page-mini">
                                            
                                        </li>
                                        <li class="page-mini">
                                            
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <!-- PAGES -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- PHOTOS // PAGES -->


<!-- JAVASCRIPT -->

        <script src="../js/bootstrap.min.js"></script>   
        <script src="../js/libraries/jspdf1.3.4.min.js"></script>    
        <script src="../js/libraries/jquery-2.1.1.min.js"></script>
        <script src="../js/libraries/jquery.cookie.js"></script>
        <script src="../js/waypoints.min.js"></script>
        <script src="../js/workspaceJS/User/Scrapbook/userJS-scrapbook-workspacerequest.js"></script>    
        <script src="../js/modernizr.js"></script>
        <script src="../js/bootstrap-hover-dropdown.js"></script>
        <script src="../js/owl.carousel.min.js"></script>        

        <link type="text/css" rel="stylesheet" href="../js/libraries/jquery-te-1.4.0.css">

        <script type="text/javascript" src="../js/libraries/jquery-te-1.4.0.js" charset="utf-8"></script>

        <script src="../js/workspaceJS/User/Scrapbook/userJS-scrapbook-texteditorlandscape.js"></script> 
        <script src="../js/workspaceJS/User/Scrapbook/userJS-scrapbook-texteditorportrait.js"></script> 

    <!-- PHOTOS  -->
         <script src="http://www.google.com/jsapi" type="text/javascript"></script>
         <script> 
         google.load("jquery", "1.4.2");
         google.load("jqueryui", "1.7.2");
         </script>
    <!-- PHOTOS  -->


    <!-- WORKSPACE JAVASCRIPT -->
        <script src="../js/workspaceJS/User/Scrapbook/userJS-scrapbook-commonpage.js"></script> 
    <!-- WORKSPACE JAVASCRIPT -->
<!-- JAVASCRIPT -->

@endsection
