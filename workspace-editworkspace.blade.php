@extends('layouts.navigations-specialworkspace')

@section('content')

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
    <p class="savedPage hidden">{{$lastpage}}</p>
    <p class="restriction hidden">ViewAndEdit</p>
    <p class="scrapbookHeight hidden">{{$height}}</p>
    <p class="scrapbookWidth hidden">{{$width}}</p>

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
                                foreach ($get_themeBG as $background) {
                                    $background_counter++;
                                        if($src=='user'){
                                            if($background_counter<=10){
                                                if ($height==466 && $width==749) {
                            ?>
                                <li id="T1" class="L_li">
                                    <img id="drag{{$background_counter}}" class="dragbg_l" src="../{{$background->user_themebackgroundsrc}}" draggable="true" ondragstart="drag(event)" >
                                </li>
                                <?php 
                                    }}
                                     if($background_counter>10){
                                        if ($height==749 && $width==505){
                                ?>
                                <li id="T1" class="P_li">
                                    <img id="drag{{$background_counter}}" class="dragbg_p" src="../{{$background->user_themebackgroundsrc}}" draggable="true" ondragstart="drag(event)" >
                                </li>
                                <?php }}
                                
                                } elseif ($src=='designer') {
                                    if($background_counter<=10){
                                        if ($height==466 && $width==749) {

                            ?>
                                <li id="T1" class="L_li">
                                    <img id="drag{{$background_counter}}" class="dragbg_l" src="../{{$background->designer_themebackgroundsrc}}" draggable="true" ondragstart="drag(event)" >
                                </li>
                                <?php 
                                    }}
                                     if($background_counter>10){
                                        if ($height==749 && $width==505){
                                ?>
                                <li id="T1" class="P_li">
                                    <img id="drag{{$background_counter}}" class="dragbg_p" src="../{{$background->designer_themebackgroundsrc}}" draggable="true" ondragstart="drag(event)" >
                                </li>
                                <?php 
                                    }}
                                }
                            }?>
                        </ul>
                    </div>
                <!-- <h3>Background</h3> [drag1-drag20]-->

                <!-- <h3>BORDERS</h3> [drag21-drag40]-->
                    <div id="border" class="tab-pane fade">
                        <ul>
                            <?php
                                $border_counter = 20;
                                foreach ($get_themeBD as $border) {
                                    $border_counter++;
                                        if($src=='user'){
                                            if($border_counter<=30){
                                                if ($height==466 && $width==749) {
                            ?>
                                <li id="T1" class="L_li">
                                    <img id="drag{{$border_counter}}" class="dragbg_l" src="../{{$border->user_themebordersrc}}" draggable="true" ondragstart="drag(event)" >
                                </li>
                                <?php 
                                    }}
                                     if($border_counter>30){
                                        if ($height==749 && $width==505){
                                ?>
                                <li id="T1" class="P_li">
                                    <img id="drag{{$border_counter}}" class="dragbg_p" src="../{{$border->user_themebordersrc}}" draggable="true" ondragstart="drag(event)" >
                                </li>
                                <?php }}
                                
                                } elseif ($src=='designer') {
                                    if($border_counter<=20){
                                        if ($height==466 && $width==749) {

                            ?>
                                <li id="T1" class="L_li">
                                    <img id="drag{{$border_counter}}" class="dragbg_l" src="../{{$border->designer_themebordersrc}}" draggable="true" ondragstart="drag(event)" >
                                </li>
                                <?php 
                                    }}
                                     if($border_counter>30){
                                        if ($height==749 && $width==505){
                                ?>
                                <li id="T1" class="P_li">
                                    <img id="drag{{$border_counter}}" class="dragbg_p" src="../{{$border->designer_themebordersrc}}" draggable="true" ondragstart="drag(event)" >
                                </li>
                                <?php 
                                    }}
                                }
                            }?>
                        </ul>
                    </div>
                <!-- <h3>BORDERS</h3> [drag21-drag40]-->

                <!-- <h3>EMBELLISHMENT</h3> [drag41-drag50]-->
                    <div id="emblishments" class="tab-pane fade">
                        <ul>
                            <?php
                                $embellishment_counter = 50;
                                foreach ($get_themeEM as $embellishment) {
                                    $embellishment_counter++;
                                if($src=='user'){
                            ?>
                                <li id="T1" class="L_li">
                                    <img id="drag{{$embellishment_counter}}" class="drag" src="../{{$embellishment->user_themeembellishmentsrc}}" >
                                </li>
                                <?php 
                                } elseif ($src=='designer') {
                            ?>
                                <li id="T1" class="L_li">
                                    <img id="drag{{$embellishment_counter}}" class="drag" src="../{{$embellishment->designer_themeembellishmentsrc}}" >
                                </li>
                            <?php
                                }
                            }?>
                        </ul>
                    </div>
                <!-- <h3>EMBELLISHMENT</h3> [drag41-drag50]-->


                    </div>
                </div>
            </div>

<!-- WORKSPACE CONTENT -->
        <div ng-app="">
            <div class="col-md-9">
                <div id="panel-defaultsidebar-menu-2">
                    <div class="panel-heading">

                        <!-- SCRAPBOOK NAVIGATIONS -->
                            <ul class="nav nav-pills">

                                 <!-- SAVE PAGE-->
                                <li id="sns_share">
                                    <button id="SaveScrapbookPage" class="button_savepage" /> SAVE </button>
                                </li>
                                <!-- SAVE PAGE-->

                                <!-- EDIT TITLE -->
                                <li><p id="scrapbookid" class="scrap_id hidden"> {{$scrapid}}</p></li>

                                <p id="scrapbookpagesid" class="scrappages_id hidden" > </p>

                                </li><div class="scrap_title">

                                <?php foreach ($edit_scrapbook as $scrapbook) { ?>
                                    <h2 id="saved_title" class="saved_title">{{$scrapbook->user_scrapbooktitle}} </h2>
                                <?php } ?>
                                
                                <button id="button_edit" class="button_edit"  data-toggle="modal" data-target="#edittitle_modal">EDIT</button>
                                </div></li>
                                <!-- EDIT TITLE -->


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
                                             
                                         <div class="savingloader" id="savingLoader"> <img class="LoaderSave" src="../gif/loader/teardrop.gif"/> </div>

                                        <!-- DROPPABLE DIV -->
                                            <div  id ="innerPageWrapper" class="innerPageWrapper">

                                            <?php if($height==749){?>
                                            <!-- PORTRAIT PAGE  -->
                                                <!-- NEXT PAGE BUTTONS -->
                                                <div id="nextpage" class="nextpage_P hidden">
                                                        <button  id="P_leftpage" class="leftpage"></button>
                                                        <button  id="P_rightpage" class="rightpage"></button>
                                                </div>
                                                <!-- NEXT PAGE BUTTONS --> 

                                                <!-- PAGE COUNTER -->
                                                <p id="pageNUM_P" class="pageNUM_P hidden"> Page Number: 1 </p>
                                                <!-- PAGE COUNTER -->
                                                
                                                <!-- SCRAPBOOK PAGE  -->
                                                <div class="PORTRAIT hidden">
                                                    <?php foreach ($edit_scrapbookpage as $pagesLast) { }?> 
                                                      <p id="pagenumber_savedP" class="pagenumber_savedP hidden">{{$pagesLast->user_scrapbookpagenumber}}</p>

                                                <!-- SAVED SCRAPBOOK PAGE(S) -->
                                                    <?php foreach ($edit_scrapbookpage as $pages) { 
                                                        if($pages->user_scrapbookpagenumber == 1){
                                                    ?>
                                                    <div id="P_workspacediv" class="P_newPage{{$pages->user_scrapbookpagenumber}}" ondrop="drop(event)" ondragover="allowDrop(event)" style="display: block;">
                                                    <p id="scrapbookid" class="scrapbookid hidden">{{$pages->user_scrapbookid}}</p>
                                                    <p id="scrapbookpagesid_pageP{{$pages->user_scrapbookpagenumber}}" class="scrapbookpagesid hidden">{{$pages->user_scrapbookpagesid}}</p>
                                                    <img id="drag3" class="dragbg_p" src="../{{$pages->user_scrapbookbackgroundsrc}}" draggable="true" ondragstart="drag(event)">
                                                        <?php foreach ($edit_scrapbookpageelement as $elements) { 
                                                             if ($elements->user_scrapbookpagenumber == $pages->user_scrapbookpagenumber) {
                                                                    $text = $elements->user_elementCopy;
                                                                    preg_match('/(\d+)\D*$/', $text, $m);
                                                                    $lastnum = $m[1];
                                                                if( strpos($elements->user_elementCopy, 'clonediv') !== false  ){
                                                                ?>
                                                            <img id="{{$elements->user_elementCopy}}" class="draggedElemEdit" src="../{{$elements->user_scrapbookelementsrc}}" value="{{$elements->user_scrapbookpageelementid}}" style="top: {{$elements->user_scrapbookelementyposition}}px; left: {{$elements->user_scrapbookelementxposition}}px;">
                                                            <span id="deleteIMG{{$elements->user_scrapbookpageelementid}}" 
                                                            onClick="DeleteLoadedEmblems_P( 'deleteIMG{{$elements->user_scrapbookpageelementid}}', '{{$elements->user_scrapbookpageelementid}}', '{{$elements->user_scrapbookpagesid}}' );" class="deleteIMG"
                                                            style="top: {{$elements->user_scrapbookelementyposition}}px; left: {{$elements->user_scrapbookelementxposition}}px;">&times;</span>
                                                            <?php } else if (strpos($elements->user_elementCopy, 'ContTextEditor_P') !== false ) {
                                                                $string = $elements->user_elementCopy;
                                                                    preg_match('/(\d+)\D*$/', $string, $m);
                                                                    $number = $m[1];
                                                                ?>
                                                             <img id="savedtext_contP{{$elements->user_scrapbookpageelementid}}" class="savedtext_cont hidden" src="../gif/loader/teardrop.gif"
                                                                onload="Load_texteditorP('{{$elements->user_scrapbookpagesid}}', '{{$elements->user_scrapbookelementsrc}}', '{{$elements->user_scrapbookpageelementid}}', '{{$elements->user_scrapbookpagenumber}}', '{{$elements->user_scrapbookelementyposition}}', '{{$elements->user_scrapbookelementxposition}}' );" 
                                                                value="{{$elements->user_scrapbookpageelementid}}" style="top: {{$elements->user_scrapbookelementyposition}}px; left: {{$elements->user_scrapbookelementxposition}}px;">
                                                        <?php }} }?> 
                                                    </div> <?php } else if($pages->user_scrapbookpagenumber >= 2){?>

                                                    <div id="P_workspacediv" class="P_newPage{{$pages->user_scrapbookpagenumber}}" ondrop="drop(event)" ondragover="allowDrop(event)" style="display: none;">
                                                    <p id-"scrapbookid" class="scrapbookid hidden">{{$pages->user_scrapbookid}}</p>
                                                    <p id="scrapbookpagesid_pageP{{$pages->user_scrapbookpagenumber}}" class="scrapbookpagesid hidden">{{$pages->user_scrapbookpagesid}}</p>
                                                    <img id="drag3" class="dragbg_p" src="../{{$pages->user_scrapbookbackgroundsrc}}" draggable="true" ondragstart="drag(event)">
                                                        <?php foreach ($edit_scrapbookpageelement as $elements) { 
                                                             if ($elements->user_scrapbookpagenumber == $pages->user_scrapbookpagenumber) {
                                                                    $text = $elements->user_elementCopy;
                                                                    preg_match('/(\d+)\D*$/', $text, $m);
                                                                    $lastnum = $m[1];
                                                                if( strpos($elements->user_elementCopy, 'clonediv') !== false  ){
                                                                ?>
                                                            <img id="{{$elements->user_elementCopy}}" class="draggedElemEdit" src="../{{$elements->user_scrapbookelementsrc}}" value="{{$elements->user_scrapbookpageelementid}}" style="top: {{$elements->user_scrapbookelementyposition}}px; left: {{$elements->user_scrapbookelementxposition}}px;">
                                                            <span id="deleteIMG{{$elements->user_scrapbookpageelementid}}" 
                                                            onClick="DeleteLoadedEmblems_P( 'deleteIMG{{$elements->user_scrapbookpageelementid}}', '{{$elements->user_scrapbookpageelementid}}', '{{$elements->user_scrapbookpagesid}}' );"  class="deleteIMG"
                                                            style="top: {{$elements->user_scrapbookelementyposition}}px; left: {{$elements->user_scrapbookelementxposition}}px;">&times;</span>
                                                            <?php } else if (strpos($elements->user_elementCopy, 'ContTextEditor_P') !== false ) {
                                                                $string = $elements->user_elementCopy;
                                                                    preg_match('/(\d+)\D*$/', $string, $m);
                                                                    $number = $m[1];
                                                                ?>
                                                             <img id="savedtext_contP{{$elements->user_scrapbookpageelementid}}" class="savedtext_cont hidden" src="../gif/loader/teardrop.gif"
                                                                onload="Load_texteditorP( '{{$elements->user_scrapbookpagesid}}', '{{$elements->user_scrapbookelementsrc}}', '{{$elements->user_scrapbookpageelementid}}', '{{$elements->user_scrapbookpagenumber}}', '{{$elements->user_scrapbookelementyposition}}', '{{$elements->user_scrapbookelementxposition}}' );" 
                                                                value="{{$elements->user_scrapbookpageelementid}}" style="top: {{$elements->user_scrapbookelementyposition}}px; left: {{$elements->user_scrapbookelementxposition}}px;">
                                                        <?php }} }?> 
                                                    </div>
                                                    <?php } } ?>
                                                <!-- SAVED SCRAPBOOK PAGE(S) -->

                                                </div>
                                                <!-- SCRAPBOOK PAGE -->
                                            <!-- PORTRAIT PAGE  -->
                                            <?php }?>

                                            <?php if($height==466){?>
                                            <!-- LANDSCAPE PAGE -->
                                                <!-- NEXT PAGE BUTTONS -->
                                                <div id="nextpage" class="nextpage_L hidden">
                                                        <button  id="L_leftpage" class="leftpage"></button>
                                                        <button  id="L_rightpage" class="rightpage"></button>
                                                </div>
                                                <!-- NEXT PAGE BUTTONS --> 
                                               
                                                <!-- PAGE COUNTER -->
                                                <p id="pageNUM_L" class="pageNUM hidden"> Page Number: 1 </p>
                                                <!-- PAGE COUNTER -->

                                                <!-- SCRAPBOOK PAGE  -->
                                                <div class="LANDSCAPE hidden">
                                                    <?php foreach ($edit_scrapbookpage as $pagesLast) { }?> 
                                                      <p id="pagenumber_savedL" class="pagenumber_savedL hidden">{{$pagesLast->user_scrapbookpagenumber}}</p>
                                                
                                                <!-- SAVED SCRAPBOOK PAGE(S) -->
                                                    <?php foreach ($edit_scrapbookpage as $pages) { 
                                                        if($pages->user_scrapbookpagenumber == 1){
                                                    ?>
                                                    <div id="L_workspacediv" class="L_newPage{{$pages->user_scrapbookpagenumber}}" ondrop="drop(event)" ondragover="allowDrop(event)" style="display: block;">
                                                    <p id="scrapbookid" class="scrapbookid hidden">{{$pages->user_scrapbookid}}</p>
                                                    <p id="scrapbookpagesid_pageL{{$pages->user_scrapbookpagenumber}}" class="scrapbookpagesid hidden">{{$pages->user_scrapbookpagesid}}</p>
                                                    <img id="drag2" class="dragbg_l" src="../{{$pages->user_scrapbookbackgroundsrc}}" draggable="true" ondragstart="drag(event)">
                                                        <?php foreach ($edit_scrapbookpageelement as $elements) { 
                                                            if ($elements->user_scrapbookpagenumber == $pages->user_scrapbookpagenumber) {
                                                                    $text = $elements->user_elementCopy;
                                                                    preg_match('/(\d+)\D*$/', $text, $m);
                                                                    $lastnum = $m[1];
                                                                if( strpos($elements->user_elementCopy, 'clonediv') !== false  ){
                                                                ?>
                                                            <img id="{{$elements->user_elementCopy}}" class="draggedElemEdit" src="../{{$elements->user_scrapbookelementsrc}}" value="{{$elements->user_scrapbookpageelementid}}" style="top: {{$elements->user_scrapbookelementyposition}}px; left: {{$elements->user_scrapbookelementxposition}}px;">
                                                            <span id="deleteIMG{{$elements->user_scrapbookpageelementid}}" 
                                                            onClick="DeleteLoadedEmblems_L('deleteIMG{{$elements->user_scrapbookpageelementid}}', '{{$elements->user_scrapbookpageelementid}}', '{{$elements->user_scrapbookpagesid}}');"  class="deleteIMG"
                                                            style="top: {{$elements->user_scrapbookelementyposition}}px; left: {{$elements->user_scrapbookelementxposition}}px;">&times;</span>
                                                            <?php } else if (strpos($elements->user_elementCopy, 'ContTextEditor_L') !== false ) {
                                                                $string = $elements->user_elementCopy;
                                                                    preg_match('/(\d+)\D*$/', $string, $m);
                                                                    $number = $m[1];
                                                                ?>
                                                             <img id="savedtext_contL{{$elements->user_scrapbookpageelementid}}" class="savedtext_cont hidden" src="../gif/loader/teardrop.gif"
                                                                onload="Load_texteditorL( '{{$elements->user_scrapbookpagesid}}', '{{$elements->user_scrapbookelementsrc}}', '{{$elements->user_scrapbookpageelementid}}', '{{$elements->user_scrapbookpagenumber}}', '{{$elements->user_scrapbookelementyposition}}', '{{$elements->user_scrapbookelementxposition}}' );" 
                                                                value="{{$elements->user_scrapbookpageelementid}}" style="top: {{$elements->user_scrapbookelementyposition}}px; left: {{$elements->user_scrapbookelementxposition}}px;">
                                                        <?php }} }?> 
                                                    </div> <?php } else if($pages->user_scrapbookpagenumber >= 2){?>

                                                    <div id="L_workspacediv" class="L_newPage{{$pages->user_scrapbookpagenumber}}" ondrop="drop(event)" ondragover="allowDrop(event)" style="display: none;">
                                                    <p id="scrapbookid" class="scrapbookid hidden">{{$pages->user_scrapbookid}}</p>
                                                    <p id="scrapbookpagesid_pageL{{$pages->user_scrapbookpagenumber}}" class="scrapbookpagesid hidden">{{$pages->user_scrapbookpagesid}}</p>
                                                    <img id="drag2" class="dragbg_l" src="../{{$pages->user_scrapbookbackgroundsrc}}" draggable="true" ondragstart="drag(event)">
                                                        <?php foreach ($edit_scrapbookpageelement as $elements) { 
                                                            if ($elements->user_scrapbookpagenumber == $pages->user_scrapbookpagenumber) {
                                                                    $text = $elements->user_elementCopy;
                                                                    preg_match('/(\d+)\D*$/', $text, $m);
                                                                    $lastnum = $m[1];
                                                                if( strpos($elements->user_elementCopy, 'clonediv') !== false  ){
                                                                ?>
                                                            <img id="{{$elements->user_elementCopy}}" class="draggedElemEdit" src="../{{$elements->user_scrapbookelementsrc}}" value="{{$elements->user_scrapbookpageelementid}}" style="top: {{$elements->user_scrapbookelementyposition}}px; left: {{$elements->user_scrapbookelementxposition}}px;">
                                                            <span id="deleteIMG{{$elements->user_scrapbookpageelementid}}" 
                                                            onClick="DeleteLoadedEmblems_L('deleteIMG{{$elements->user_scrapbookpageelementid}}', '{{$elements->user_scrapbookpageelementid}}', '{{$elements->user_scrapbookpagesid}}')"  class="deleteIMG"
                                                            style="top: {{$elements->user_scrapbookelementyposition}}px; left: {{$elements->user_scrapbookelementxposition}}px;">&times;</span>
                                                            <?php } else if (strpos($elements->user_elementCopy, 'ContTextEditor_L') !== false ) {
                                                                $string = $elements->user_elementCopy;
                                                                    preg_match('/(\d+)\D*$/', $string, $m);
                                                                    $number = $m[1];
                                                                ?>
                                                             <img id="savedtext_contL{{$elements->user_scrapbookpageelementid}}" class="savedtext_cont hidden" src="../gif/loader/teardrop.gif"
                                                                onload="Load_texteditorL( '{{$elements->user_scrapbookpagesid}}', '{{$elements->user_scrapbookelementsrc}}', '{{$elements->user_scrapbookpageelementid}}', '{{$elements->user_scrapbookpagenumber}}', '{{$elements->user_scrapbookelementyposition}}', '{{$elements->user_scrapbookelementxposition}}' );" 
                                                                value="{{$elements->user_scrapbookpageelementid}}" style="top: {{$elements->user_scrapbookelementyposition}}px; left: {{$elements->user_scrapbookelementxposition}}px;">
                                                        <?php }} }?> 
                                                    </div>
                                                    <?php } } ?>

                                                <!-- SAVED SCRAPBOOK PAGE(S) -->

                                                </div>
                                                <!-- SCRAPBOOK PAGE -->
                                            <!-- LANDSCAPE PAGE -->
                                            <?php }?>

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
                 <div class="col-md-9" id="photo-9_edit" >
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

</div>
<!-- JAVASCRIPT -->

        <script src="../js/bootstrap.min.js"></script>   
        <script src="../js/libraries/jspdf1.3.4.min.js"></script>    
        <script src="../js/libraries/jquery-2.1.1.min.js"></script>
        <script src="../js/libraries/jquery.cookie.js"></script>
        <script src="../js/waypoints.min.js"></script>
        <script src="../js/workspaceJS/User/Edit ScrapbookuserJS-edit-workspacerequest.js"></script>    
        <script src="../js/modernizr.js"></script>
        <script src="../js/bootstrap-hover-dropdown.js"></script>
        <script src="../js/owl.carousel.min.js"></script>        

        <link type="text/css" rel="stylesheet" href="../js/libraries/jquery-te-1.4.0.css">

        <script type="text/javascript" src="../js/libraries/jquery-te-1.4.0.js" charset="utf-8"></script>

        <script src="../js/workspaceJS/User/Edit Scrapbook/userJS-edit-texteditorportrait.js" type="text/javascript"></script> 
        <script src="../js/workspaceJS/User/Edit Scrapbook/userJS-edit-texteditorlandscape.js" type="text/javascript"></script> 

    <!-- PHOTOS  -->
         <script src="http://www.google.com/jsapi" type="text/javascript"></script>
         <script> 
         google.load("jquery", "1.4.2");
         google.load("jqueryui", "1.7.2");
         </script>
    <!-- PHOTOS  -->


    <!-- WORKSPACE JAVASCRIPT -->
        <script src="../js/workspaceJS/User/Edit Scrapbook/userJS-edit-commonpage.js"></script> 
    <!-- WORKSPACE JAVASCRIPT -->

<!-- JAVASCRIPT -->

@endsection
