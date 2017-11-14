@extends('layouts.navigations-dashboard-specialthemes')

@section('content')

<!-- SCRAPBOOK BODY -->
<div class="MyScrapbookBody">
    <div class="MyScrapbook">
        <br><br>
        <h1>Scrapbooks</h1>
        <p class="lead">Share and edit together with friends!</p>
    </div>

<!-- WORKSPACE -->
<div class="dashboardContent">
<?php
use flipnstyle\User;
use flipnstyle\UserScrapbook;
use flipnstyle\UserScrapbookPage;
use flipnstyle\UserScrapbookPageElement;

foreach ($shared as $sharedScrapbook) {
                $user_scrapbookauthor = $sharedScrapbook->user_scrapbookauthorcoauthor;
                $user_scrapbookid = $sharedScrapbook->user_scrapbookid;
                
                $scrapbook = UserScrapbook::where('user_scrapbookid', $user_scrapbookid)->get();
                $scrapbookPage = UserScrapbookPage::where('user_scrapbookid', $user_scrapbookid)->get();
                $pageElement = UserScrapbookPageElement::where('user_scrapbookid', $user_scrapbookid)->get();
   ?> 


<?php

    foreach ($scrapbook as $scrapbooks) {
    $title = $scrapbooks->user_scrapbooktitle;
    $id = $scrapbooks->user_id;
    $scrapid = $scrapbooks->user_scrapbookid;
    $created = $scrapbooks->created_at;
    $strdate = strtotime($created->todatestring());

         $logged = User::where('id', $id)->get();
                    foreach ($logged as $log) {
                    $logged_id = $log->id;
                    $firstName = $log->first_name;
                    $lastName = $log->last_name;
                    } 

?>  

    <!-- WHOLE SCRAPBOOK -->
     
            <?php
            foreach ($scrapbookPage as $scrapbook_page) {
            $bg = $scrapbook_page->user_scrapbookbackgroundsrc;
            $sid = $scrapbook_page->user_scrapbookpagesid;
            $scraPage =  $scrapbook_page->user_scrapbookid;
            $scraPageN = $scrapbook_page->user_scrapbookpagenumber;

                    if( ($scrapid==$scraPage) && ($scraPageN==1)) {
            ?>



<!-- VIEW SCRAPBOOK -->
    <div class="modal fade" id="viewScrapbook_modal{{$scrapid}}" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
        <div class="modal-dialog modal-sm" id="modalContent">
            <div class="modal-content" id="SCRAPBOOK_VIEWER">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="title">PREVIEW</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
    <?php

    foreach ($shared as $sharedScrapbook) {
                    $user_scrapbookauthor = $sharedScrapbook->user_scrapbookauthorcoauthor;
                    $user_scrapbookid = $sharedScrapbook->user_scrapbookid;
                    
                    $scrapbook = UserScrapbook::where('user_scrapbookid', $user_scrapbookid)->get();
                    $scrapbookPage = UserScrapbookPage::where('user_scrapbookid', $user_scrapbookid)->get();
                    $pageElement = UserScrapbookPageElement::where('user_scrapbookid', $user_scrapbookid)->get();
       ?> 


    <?php

        foreach ($scrapbook as $scrapbooks) {
        $title = $scrapbooks->user_scrapbooktitle;
        $id = $scrapbooks->user_id;
        $scrapid = $scrapbooks->user_scrapbookid;
        $created = $scrapbooks->created_at;
        $strdate = strtotime($created->todatestring());

             $logged = User::where('id', $id)->get();
                        foreach ($logged as $log) {
                        $logged_id = $log->id;
                        $firstName = $log->first_name;
                        $lastName = $log->last_name;
                        } 

    ?>  

            <?php
            foreach ($scrapbookPage as $scrapbook_page) {
            $bg = $scrapbook_page->user_scrapbookbackgroundsrc;
            $sid = $scrapbook_page->user_scrapbookpagesid;
            $scraPage =  $scrapbook_page->user_scrapbookid;
            $scraPageN = $scrapbook_page->user_scrapbookpagenumber;

                    if( ($scrapid==$scraPage) && ($scraPageN==1)) {
            ?>
                            <div  id ="ScrapbookViewer-VIEW" class="MyScrapbookData-VIEW{{$scrapid}}{{$scraPageN}}" value="{{$scraPageN}}">
                                            <div id="scrapbookNextpage" class="scrapbookNextpage">
                                                    <button  id="dashboard_nextpageleft" class="leftpage"   onclick="leftClick( {{$scrapid}} , {{$scraPageN}} )" ></button>
                                                    <button  id="dashboard_nextpageright" class="rightpage" onclick="rightClick( {{$scrapid}} , {{$scraPageN}} )" ></button>
                                            </div>

                                        <img src="{{$bg}}" class="draggedBG">
                                   
                                    <?php
                                        foreach ($pageElement as $page_element) {
                                        $elem = $page_element->user_scrapbookelementsrc;
                                        $elemx = $page_element->user_scrapbookelementxposition;
                                        $elemy = $page_element->user_scrapbookelementyposition;
                                        $epgn = $page_element->user_scrapbookpagenumber;  
                                        $eid = $page_element->user_scrapbookpagesid;
                                        ?>

                                    <?php   if( ($sid==$eid) && ($scrapbooks->user_pageHeight == 466) ){
                                    ?>

                                        <?php if( strpos($elem, 'img/image_uploads/') !== false ){ ?>
                                            <div class="imageWrapper">
                                            <img src="{{$elem}}" class="L_draggedElemPic" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                            </div>
                                        <?php }
                                            elseif ( strpos($elem, 'img/user_themes/') !== false ){ ?>
                                            <div class="imageWrapper">
                                            <img src="{{$elem}}" class="L_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                            </div>
                                        <?php }
                                            elseif ( strpos($elem, 'img/designer_themes/embellishments/') !== false ){ ?>
                                            <div class="imageWrapper">
                                            <img src="{{$elem}}" class="L_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                            </div>
                                        <?php } else { ?>

                                            <div class="L_textDisplay" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                                {!! $elem !!}
                                            </div>

                                        <?php } }

                                        elseif ( ($sid==$eid) && ($scrapbooks->user_pageHeight == 749) ) { ?>
                                            
                                        <?php if( strpos($elem, 'img/image_uploads/') !== false ){ ?>
                                            <div class="imageWrapper">
                                            <img src="{{$elem}}" class="P_draggedElemPic" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                            </div>
                                        <?php }
                                            elseif ( strpos($elem, 'img/user_themes/') !== false ){ ?>
                                            <div class="imageWrapper">
                                            <img src="{{$elem}}" class="P_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                            </div>
                                        <?php }
                                            elseif ( strpos($elem, 'img/designer_themes/embellishments/') !== false ){ ?>
                                            <div class="imageWrapper">
                                            <img src="{{$elem}}" class="P_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                            </div>
                                        <?php } else{ ?>

                                            <div class="P_textDisplay" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                                {!! $elem !!}
                                            </div>    

                                        <?php }}
                                    } ?>                                
                            </div>
            <?php
                    }

                    else{
                        ?>
                        <div  id ="ScrapbookViewer-VIEW" class="MyScrapbookData-VIEW{{$scrapid}}{{$scraPageN}} hidden" value="{{$scraPageN}}">

                                            <div id="scrapbookNextpage" class="scrapbookNextpage">
                                                    <button  id="dashboard_nextpageleft" class="leftpage"   onclick="leftClick( {{$scrapid}} , {{$scraPageN}} )" ></button>
                                                    <button  id="dashboard_nextpageright" class="rightpage" onclick="rightClick( {{$scrapid}} , {{$scraPageN}} )" ></button>
                                            </div>
                                        <img src="{{$bg}}" class="draggedBG">
                                   
                                    <?php
                                        foreach ($pageElement as $page_element) {
                                        $elem = $page_element->user_scrapbookelementsrc;
                                        $elemx = $page_element->user_scrapbookelementxposition;
                                        $elemy = $page_element->user_scrapbookelementyposition;
                                        $epgn = $page_element->user_scrapbookpagenumber;  
                                        $eid = $page_element->user_scrapbookpagesid;
                                        ?>

                                    <?php   if( ($sid==$eid) && ($scrapbooks->user_pageHeight == 466) ){
                                    ?>

                                        <?php if( strpos($elem, 'img/image_uploads/') !== false ){ ?>
                                            <div class="imageWrapper">
                                            <img src="../{{$elem}}" class="L_draggedElemPic" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                            </div>
                                        <?php }
                                            elseif ( strpos($elem, 'img/user_themes/') !== false ){ ?>
                                            <div class="imageWrapper">
                                            <img src="{{$elem}}" class="L_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                            </div>
                                        <?php }
                                            elseif ( strpos($elem, 'img/designer_themes/embellishments/') !== false ){ ?>
                                            <div class="imageWrapper">
                                            <img src="{{$elem}}" class="L_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                            </div>
                                        <?php } else{ ?>
                                        
                                            <div class="L_textDisplay" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                                {!! $elem !!}
                                            </div>

                                        <?php   } }
                                        elseif ( ($sid==$eid) && ($scrapbooks->user_pageHeight == 749) ) { ?>

                                        <?php if( strpos($elem, 'img/image_uploads/') !== false ){ ?>
                                        <div class="imageWrapper">
                                            <img src="{{$elem}}" class="P_draggedElemPic" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                        </div>
                                        <?php }
                                            elseif ( strpos($elem, 'img/user_themes/') !== false ){ ?>
                                            <div class="imageWrapper">
                                            <img src="{{$elem}}" class="P_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                            </div>
                                        <?php }
                                            elseif ( strpos($elem, 'img/designer_themes/embellishments/') !== false ){ ?>
                                            <div class="imageWrapper">
                                            <img src="{{$elem}}" class="P_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                            </div>
                                        <?php } else{ ?>   
                                            <div class="P_textDisplay" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                                {!! $elem !!}
                                            </div>
                                        <?php } }
                                    }?>       
                            </div>
                    <?php
                    }
            }
            ?><br>
            <div class="bottomNavs">
                    <p id="numberOfPages{{$scrapid}}" class="numberOfPages hidden">{{$scraPageN}}</p>
                    <br />
                    <div class="pageCounter-container">
                    <p id="Pages{{$scrapid}}" class="pageCounter">Page Number: 1 / {{$scraPageN}} </p> 
                    </div>
            </div>
    <?php
    }}
    ?>
                
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- VIEW SCRAPBOOK -->


        <!-- SHARE SCRAPBOOK -->
            <div class="modal fade" id="shareScrapbook_modal{{$scrapid}}" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
                <div class="modal-dialog modal-sm" id="modalContent">
                    <div class="modal-content" id="titleW">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="title">Share this Scrapbook</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                Share to: <input type="text" class="form-control" placeholder="email"  id="sharedUserEmail{{$scrapid}}">
                                <input type="text" class="form-control hidden" id="themeid{{$scrapid}}" value="{{$scrapbooks->user_themeid}}">  
                                <input type="text" class="form-control hidden" id="scrapbookprice{{$scrapid}}" value="{{$scrapbooks->user_scrapbookprice}}">  
                                <br>Sharing Restrictions:<br>   
                                <p class="restriction{{$scrapid}} hidden"></p>
                                 <input type="radio" name="restriction" value="ViewOnly" onClick="restriction1(this,{{$scrapid}})"> View Only<br>
                                 <input type="radio" name="restriction" value="ViewAndEdit" onClick="restriction2(this,{{$scrapid}})"> View and Edit<br>
                            </div>                      
                            <p class="text-center">
                                <div>
                                    <span class="btn btn-primary1" id="ShareScrapbook{{$scrapid}}" value={{$scrapid}} 
                                    onclick="shareScrapbook({{$scrapid}})">
                                        <i class="fa fa-sign-in"></i> Share
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- SHARE SCRAPBOOK -->
            
    <div class="CONTAINER-dashboard">
            <div  id ="ScrapbookViewer" class="MyScrapbookData{{$scrapid}}{{$scraPageN}}" value="{{$scraPageN}}">


        <!-- TOP NAVIGATIONS -->
            <div class="topNav">
            <div class="titleContainer">
                <h2 class="Stitle">Title : {{$title}}</h2>
            </div>   
            <p class="scrapbookid hidden" id="scrapbookid">{{$user_scrapbookid}}</p>

            <p class="created"> Date Created: {{date('M d, Y', $strdate)}} </p><br>
            <p class="created"> Author: {{$firstName}} {{$lastName}} </p>
            </div><br>
        <!-- TOP NAVIGATIONS -->

        <!-- SCRAPBOOK PREVIEW -->
            
            <img src="{{$bg}}" class="draggedBG" style="height:466px; margin-top:22px;">

            <!-- DASHBOARD NAVIGATIONS -->
                <div class="dashboardNav">
                <div class="purchasebutton-cont">
                    <form  id="PurchaseScrapbookForm{{$scrapid}}" role="form" method="post" action="{{ url('purchase/scrapbook') }}" name="previewForm" class="form_navs">
                        <input type="text" name="scrapid" class="form-control hidden" id="scrapid" value="{{$scrapid}}">
                        <input type="text" name="price" class="form-control hidden" id="price" value="{{$scrapbooks->user_scrapbookprice}}">
                        <input type="text" name="themeid" class="form-control hidden" id="themeid" value="{{$scrapbooks->user_themeid}}">  
                      
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                        <button type="submit" id="PURCHASE{{$user_scrapbookid}}" class="button_dashboardNav">PURCHASE</button>
                    </form>
                </div><br>
                
                <button id="PDF" class="button_dashboardNav" >EXPORT PDF</button><br>
                <?php if($sharedScrapbook->user_scrapbookrestriction == "ViewAndEdit" ) {?>
                
                <div class="editbutton-cont">
                    <form  id="EditScrapbookForm{{$scrapid}}" role="form" method="post" action="{{ url('edit/workspace') }}" name="previewForm" class="form_navs">
                        <input type="text" name="scrapid" class="form-control hidden" id="scrapid" value="{{$scrapid}}">
                        <input type="text" name="themeid" class="form-control hidden" id="themeid" value="{{$scrapbooks->user_themeid}}">  

                        <input type="text" name="height" class="form-control hidden" id="height" value="{{$scrapbooks->user_pageHeight}}">
                        <input type="text" name="width" class="form-control hidden" id="width" value="{{$scrapbooks->user_pageWidth}}">

                      
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                        <button type="submit" id="EDIT{{$user_scrapbookid}}" class="button_dashboardNav" >EDIT</button>
                    </form>
                </div><br>
                
                <?php if ($sharedScrapbook->id  == $logged){?>
                <br><br><br>
                <button id="SHARE{{$scrapid}}" class="button_dashboardNav" data-toggle="modal" data-target="#shareScrapbook_modal{{$scrapid}}" value={{$scrapid}}>SHARE</button>
                <br>
                <?php } else{ ?> 

                <br><br>
                <br><br>
                <br><br>
                <button id="VIEW{{$scrapid}}" class="button_dashboardNav" data-toggle="modal" data-target="#viewScrapbook_modal{{$scrapid}}" value={{$scrapid}}>VIEW</button>
                
                </div>
                <?php }}?>
            <!-- DASHBOARD NAVIGATIONS -->     


            </div></div>
        <!-- SCRAPBOOK PREVIEW -->
            
            <?php
                    }
            }
            ?>
            <?php
            }}
            ?>
<!-- WHOLE SCRAPBOOK -->


</div>
<!-- WORKSPACE -->
</div>
<!-- SCRAPBOOK BODY -->

<!-- CUSTOM SCRIPTS -->
        <script src="js/libraries/jspdf1.3.4.min.js"></script>    
        <script src="js/workspaceJS/User/userJS-dashboard.js"></script> 
@endsection
