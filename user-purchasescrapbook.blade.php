@extends('layouts.navigations-purchase')

@section('content')

<div class="MyScrapbookBody">
    <div class="MyScrapbook">
        <br><br><h1>Purchase</h1>
    </div>

<!-- WORKSPACE -->
<div class="dashboardContent">

<p class="designerid hidden">{{$designerid}}</p>
<p class="themeid hidden">{{$themeid}}</p>

<?php if( $scrapbookHeight == 466) { ?>
<!-- Landscape Scrapbook -->
<div class="L_purchaseCont-purchasedashboard">
    <div class="topNav">
    <div class="titleContainer">
        <h2 class="Stitle">Title : {{$scrapbookTitle}}</h2>
    </div>
    <p class="created"> Author: {{$firstname}} {{$lastname}} </p>
    </div><br>

    <?php
    foreach ($scrapbookPages as $scrapbook_page) {
    $bg = $scrapbook_page->user_scrapbookbackgroundsrc;
    $sid = $scrapbook_page->user_scrapbookpagesid;
    $scraPage =  $scrapbook_page->user_scrapbookid;
    $scraPageN = $scrapbook_page->user_scrapbookpagenumber;

            if( ($scrapid==$scraPage) && ($scraPageN==1)) {
    ?>
                    <div  id ="ScrapbookViewer" class="MyScrapbookData{{$scrapid}}{{$scraPageN}}" value="{{$scraPageN}}">
                        <div id="textprint">
                        <span ng-bind="name" id="draggabletext"></span>
                        </div>
                        <div id="workspacediv" class="prevSaved"></div>
                           
                                    <div id="scrapbookNextpage" class="scrapbookNextpage-purchasedashboard">
                                            <button  id="dashboard_nextpageleft" class="leftpage"   onclick="leftClick( {{$scrapid}} , {{$scraPageN}} )" ></button>
                                            <button  id="dashboard_nextpageright" class="rightpage" onclick="rightClick( {{$scrapid}} , {{$scraPageN}} )" ></button>
                                    </div>

                                <img src="../{{$bg}}" class="draggedBG">
                           
                            <?php
                                foreach ($scrapbookPageElements as $page_element) {
                                $elem = $page_element->user_scrapbookelementsrc;
                                $elemx = $page_element->user_scrapbookelementxposition;
                                $elemy = $page_element->user_scrapbookelementyposition;
                                $epgn = $page_element->user_scrapbookpagenumber;  
                                $eid = $page_element->user_scrapbookpagesid;
                                ?>

                            <?php   if( ($sid==$eid) && ($scrapbookHeight == 466) ){
                            ?>

                                <?php if( strpos($elem, 'img/image_uploads/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="L_draggedElemPic" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/user_themes/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="L_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/designer_themes/embellishments/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="L_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                else { ?> 
                                    <div class="L_textDisplay-purchaseDASHBOARD" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                        {!! $elem !!}
                                    </div>
                                <?php 
                                } 
                                ?>
                            
                            <?php    
                                } elseif ( ($sid==$eid) && ($scrapbookHeight == 749) ) { ?>
                                <?php if( strpos($elem, 'img/image_uploads/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="P_draggedElemPic" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/user_themes/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="P_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/designer_themes/embellishments/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="P_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                else { ?> 
                                    <div class="P_textDisplay-purchaseDASHBOARD" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                        {!! $elem !!}
                                    </div>
                                <?php 
                                } 
                                ?>
                            <?php } }?>                                
                    </div>
    <?php
            }

            else{
                ?>
                <div  id ="ScrapbookViewer" class="MyScrapbookData{{$scrapid}}{{$scraPageN}} hidden" value="{{$scraPageN}}">
                        <div id="textprint">
                        <span ng-bind="name" id="draggabletext"></span>
                        </div>
                        <div id="workspacediv" class="prevSaved"></div>
                                    <div id="scrapbookNextpage" class="scrapbookNextpage-purchasedashboard">
                                            <button  id="dashboard_nextpageleft" class="leftpage"   onclick="leftClick( {{$scrapid}} , {{$scraPageN}} )" ></button>
                                            <button  id="dashboard_nextpageright" class="rightpage" onclick="rightClick( {{$scrapid}} , {{$scraPageN}} )" ></button>
                                    </div>

                                <img src="../{{$bg}}" class="draggedBG">
                           
                            <?php
                                foreach ($scrapbookPageElements as $page_element) {
                                $elem = $page_element->user_scrapbookelementsrc;
                                $elemx = $page_element->user_scrapbookelementxposition;
                                $elemy = $page_element->user_scrapbookelementyposition;
                                $epgn = $page_element->user_scrapbookpagenumber;  
                                $eid = $page_element->user_scrapbookpagesid;
                                ?>

                            <?php   if( ($sid==$eid) && ($scrapbookHeight == 466) ){
                            ?>

                                <?php if( strpos($elem, 'img/image_uploads/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="L_draggedElemPic" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/user_themes/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="L_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/designer_themes/embellishments/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="L_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                else { ?> 
                                    <div class="L_textDisplay-purchaseDASHBOARD" style="left: calc({{$elemx}}px - 498.72px); top: calc({{$elemy}}px - 699.72px)">
                                        {!! $elem !!}
                                    </div>
                                <?php 
                                } 
                                ?>
                            
                            <?php    
                                } elseif ( ($sid==$eid) && ($scrapbookHeight == 749) ) { ?>
                                <?php if( strpos($elem, 'img/image_uploads/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="P_draggedElemPic" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/user_themes/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="P_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/designer_themes/embellishments/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="P_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                else { ?> 
                                    <div class="P_textDisplay-purchaseDASHBOARD" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                        {!! $elem !!}
                                    </div>
                                <?php 
                                } 
                                ?>
                            <?php } }?>                
                    </div>
            <?php
            }
    }
    ?>      
    

    <div class="bottomNavs">
            <p id="numberOfPages{{$scrapid}}" class="numberOfPages hidden">{{$scraPageN}}</p>
            <br />
            <div class="pageCounter-container-purchasedashboard">
            <p id="Pages{{$scrapid}}" class="pageCounter">Page Number: 1 / {{$scraPageN}} </p> 
            <p id="Pages{{$scrapid}}" class="pageNo hidden">{{$scraPageN}} </p>
            </div>
    </div>                          
</div>

<div class="L_shippingDeatails">
        <p class="scrapbookBUY hidden">{{$scrapid}}</p>
        <h2 class="ship"><strong>Shipping Details</strong></h2>
        
        <p class="receiver"><strong>Receiver Info</strong></p>
        
        <div class="priceContainer">
        <p class="lead1" id="titleT"><strong>Name:</strong></p>
        <input placeholder="Name" type="text" name="cust_name" class="form-control" id="shippingInput" value="">
        </div>

        <div class="priceContainer">
        <p class="lead1" id="titleT"><strong>Complete Shipping Address:</strong></p>
        <input placeholder="House #, Block #, Baranggay, City" type="text" name="cust_address" class="form-control" id="shippingInput" value="">
        </div>

        <div class="priceContainer">
        <p class="lead1" id="titleT"><strong>Contact Number:</strong></p>
        <input placeholder="Contact Number" type="text" name="cust_no" class="form-control" id="shippingInput" value="">
        </div>

        <div class="priceContainer">
        <p class="lead1" id="titleT"><strong>Card Number:</strong></p>
        <input placeholder="Card Number" type="text" name="cust_card" class="form-control" id="shippingInput" value="">
        </div>

        <div class="courier">
        <p class="lead1" id="titleT"><strong>Courier:</strong></p>
            <select id="courier" class="form-control" name="courier">
            <option value="JRS">JRS</option>
            <option value="LBC">LBC</option>
          </select>
        </div>

        <div class="city">
        <p class="lead1" id="city"><strong class="contCity">City:</strong></p>
         <select id="location" class="form-control" name="location">
                <option value="Abra" selected="selected" >Abra</option>
                <option value="Agusan del Norte">Agusan del Norte</option>
                <option value="Agusan del Sur">Agusan del Sur</option>
                <option value="Aklan">Aklan</option>
                <option value="Albay">Albay</option>
                <option value="Antique">Antique</option>
                <option value="Apayao">Apayao</option>
                <option value="Aurora">Aurora</option>
                <option value="Basilan">Basilan</option>
                <option value="Bataan">Bataan</option>
                <option value="Batanes">Batanes</option>
                <option value="Batangas">Batangas</option>
                <option value="Benguet">Benguet</option>
                <option value="Biliran">Biliran</option>
                <option value="Bohol">Bohol</option>
                <option value="Bukidnon">Bukidnon</option>
                <option value="Bulacan">Bulacan</option>
                <option value="Cagayan">Cagayan</option>
                <option value="Camarines Norte">Camarines Norte</option>
                <option value="Camarines Sur">Camarines Sur</option>
                <option value="Camiguin">Camiguin</option>
                <option value="Capiz">Capiz</option>
                <option value="Catanduanes">Catanduanes</option>
                <option value="Cavite">Cavite</option>
                <option value="Cebu">Cebu</option>
                <option value="Compostela Valley">Compostela Valley</option>
                <option value="Davao del Norte">Davao del Norte</option>
                <option value="Davao del Sur">Davao del Sur</option>
                <option value="Davao Oriental">Davao Oriental</option>
                <option value="Dinagat Islands">Dinagat Islands</option>
                <option value="Eastern Samar">Eastern Samar</option>
                <option value="Guimaras">Guimaras</option>
                <option value="Ifugao">Ifugao</option>
                <option value="Ilocos Norte">Ilocos Norte</option>
                <option value="Ilocos Sur">Ilocos Sur</option>
                <option value="Iloilo">Iloilo</option>
                <option value="Isabela">Isabela</option>
                <option value="Kalinga">Kalinga</option>
                <option value="La Union">La Union</option>
                <option value="Laguna">Laguna</option>
                <option value="Lanao del Norte">Lanao del Norte</option>
                <option value="Lanao del Sur">Lanao del Sur</option>
                <option value="Leyte">Leyte</option>
                <option value="Maguindanao">Maguindanao</option>
                <option value="Marinduque">Marinduque</option>
                <option value="Masbate">Masbate</option>
                <option value="Metro Manila">Metro Manila</option>
                <option value="Misamis Occidental">Misamis Occidental</option>
                <option value="Misamis Oriental">Misamis Oriental</option>
                <option value="Mountain Province">Mountain Province</option>
                <option value="Negros Occidental">Negros Occidental</option>
                <option value="Negros Oriental">Negros Oriental</option>
                <option value="North Cotabato">North Cotabato</option>
                <option value="Northern Samar">Northern Samar</option>
                <option value="Nueva Ecija">Nueva Ecija</option>
                <option value="Nueva Vizcaya">Nueva Vizcaya</option>
                <option value="Occidental Mindoro">Occidental Mindoro</option>
                <option value="Oriental Mindoro">Oriental Mindoro</option>
                <option value="Palawan">Palawan</option>
                <option value="Pampanga">Pampanga</option>
                <option value="Pangasinan">Pangasinan</option>
                <option value="Quezon">Quezon</option>
                <option value="Quirino">Quirino</option>
                <option value="Rizal">Rizal</option>
                <option value="Romblon">Romblon</option>
                <option value="Samar">Samar</option>
                <option value="Sarangani">Sarangani</option>
                <option value="Shariff Kabunsuan">Shariff Kabunsuan</option>
                <option value="Siquijor">Siquijor</option>
                <option value="Sorsogon">Sorsogon</option>
                <option value="South Cotabato">South Cotabato</option>
                <option value="Southern Leyte">Southern Leyte</option>
                <option value="Sultan Kudarat">Sultan Kudarat</option>
                <option value="Sulu">Sulu</option>
                <option value="Surigao del Norte">Surigao del Norte</option>
                <option value="Surigao del Sur">Surigao del Sur</option>
                <option value="Tarlac">Tarlac</option>
                <option value="Tawi-Tawi">Tawi-Tawi</option>
                <option value="Zambales">Zambales</option>
                <option value="Zamboanga del Norte">Zamboanga del Norte</option>
                <option value="Zamboanga del Sur">Zamboanga del Sur</option>
                <option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
          </select>
        </div>

        <div class="sf">
        <p class="lead1" id="titleT"><strong>Shipping Fee:</strong></p>
        <input  placeholder="Shipping Fee" type="text" id="shippingfee" name="shippingfee"  class="form-control" value="135.00" readonly="readonly">
        </div></br>
        
        <div class="money">
            <p class="lead1" id="titleT"><strong>Summary of Accounts</strong></p><br>
            
            <table class="soaTable">
                <tr>
                    <td class="rightTable">Scrapbook Price (min 10 page)</td> 
                    <td>₱ </td>
                    <td class="scrapbookPRICE"> {{$price}}</td>

                </tr>

                <tr>
                    <td>Extra Page Fee </td> 
                    <td>₱ </td>
                    <td class="extraFee"> </td> 
                </tr>

                    <table class="nestedSOA">
                    <tr>
                        <td class="innerSOA">Scrpanbok Price </td> 
                        <td> {{$price}}</td> 
                    </tr>
                    <tr>
                        <td>  </td> 
                        <td class="operations"> / </td> 
                    </tr>

                    <tr>
                        <td>Minimum Pages</td> 
                        <td class="operations">10</td> 
                    </tr>
                    <tr>
                        <td>  </td> 
                        <td class="operations"> x </td> 
                    </tr>
                    <tr>
                        <td>No. of Extra Pages </td>
                        <td class="operations" id="noE"> </td>  
                    </tr>
                    <tr>
                        <td> = </td>
                        <td class="operations" id="toE"> </td>  
                    </tr>
                    </table>
            <br>
            <table class="soaTable">
                <tr>
                    <td class="rightTable">Shipping Fee</td>
                    <td>₱ </td> 
                    <td class="sfPrice"> </td>
                </tr>


                <tr>
                    <td >Web Admin Fee</td> 
                    <td>₱ </td>
                    <td> 100.00</td>
                </tr>

                <tr>
                    <td class="lead1">Total</td> 
                    <td>₱ </td>
                    <td class="totalE"> </td>
                </tr>
            </table>

            </table>

        </div>

        <form  role="form" method="get" action="{{ url('dashboard') }}" name="PurchaseForm" class="form_navs">
            <div class="buySubmit">
                <button type="submit" id="buybutton" class="btn btn-primary">BUY</button>
            </div>
        </form>
        
        <div class="shipDetails">
            <p class="lead1" id="titleT"><strong>Scrapbook is expected to come within 5 working days starting from the day when the purchase is made, 
                unless unexpected occurences happens (eg: calamities, special declared non-working holiday). 
                Weekends and Holidays are not included.</strong></p>
        </div>
</div>
<br><br><br><br><br><br>
<!-- Landscape Scrapbook -->

<?php } elseif( $scrapbookHeight == 749) { ?>

<!-- Portrait Scrapbook -->
<div class="P_purchaseCont-purchasedashboard">
    <div class="topNav">
    <div class="titleContainer">
        <h2 class="Stitle">Title : {{$scrapbookTitle}}</h2>
    </div>
    <p class="created"> Author: {{$firstname}} {{$lastname}} </p>
    </div><br>

    <?php
    foreach ($scrapbookPages as $scrapbook_page) {
    $bg = $scrapbook_page->user_scrapbookbackgroundsrc;
    $sid = $scrapbook_page->user_scrapbookpagesid;
    $scraPage =  $scrapbook_page->user_scrapbookid;
    $scraPageN = $scrapbook_page->user_scrapbookpagenumber;

            if( ($scrapid==$scraPage) && ($scraPageN==1)) {
    ?>
                    <div  id ="ScrapbookViewer" class="MyScrapbookData{{$scrapid}}{{$scraPageN}}" value="{{$scraPageN}}">
                        <div id="textprint">
                        <span ng-bind="name" id="draggabletext"></span>
                        </div>
                        <div id="workspacediv" class="prevSaved"></div>
                           
                                    <div id="scrapbookNextpage" class="scrapbookNextpage-purchasedashboard">
                                            <button  id="dashboard_nextpageleft" class="leftpage"   onclick="leftClick( {{$scrapid}} , {{$scraPageN}} )" ></button>
                                            <button  id="dashboard_nextpageright" class="rightpage" onclick="rightClick( {{$scrapid}} , {{$scraPageN}} )" ></button>
                                    </div>

                                <img src="../{{$bg}}" class="draggedBG">
                           
                            <?php
                                foreach ($scrapbookPageElements as $page_element) {
                                $elem = $page_element->user_scrapbookelementsrc;
                                $elemx = $page_element->user_scrapbookelementxposition;
                                $elemy = $page_element->user_scrapbookelementyposition;
                                $epgn = $page_element->user_scrapbookpagenumber;  
                                $eid = $page_element->user_scrapbookpagesid;
                                ?>

                            <?php   if( ($sid==$eid) && ($scrapbookHeight == 466) ){
                            ?>

                                <?php if( strpos($elem, 'img/image_uploads/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="L_draggedElemPic" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/user_themes/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="L_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/designer_themes/embellishments/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="L_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                else { ?> 
                                    <div class="L_textDisplay-purchaseDASHBOARD" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                        {!! $elem !!}
                                    </div>
                                <?php 
                                } 
                                ?>
                            
                            <?php    
                                } elseif ( ($sid==$eid) && ($scrapbookHeight == 749) ) { ?>
                                <?php if( strpos($elem, 'img/image_uploads/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="P_draggedElemPic" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/user_themes/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="P_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/designer_themes/embellishments/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="P_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                else { ?> 
                                    <div class="P_textDisplay-purchaseDASHBOARD" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                        {!! $elem !!}
                                    </div>
                                <?php 
                                } 
                                ?>
                            <?php } }?>                                
                    </div>
    <?php
            }

            else{
                ?>
                <div  id ="ScrapbookViewer" class="MyScrapbookData{{$scrapid}}{{$scraPageN}} hidden" value="{{$scraPageN}}">
                        <div id="textprint">
                        <span ng-bind="name" id="draggabletext"></span>
                        </div>
                        <div id="workspacediv" class="prevSaved"></div>
                                    <div id="scrapbookNextpage" class="scrapbookNextpage-purchasedashboard">
                                            <button  id="dashboard_nextpageleft" class="leftpage"   onclick="leftClick( {{$scrapid}} , {{$scraPageN}} )" ></button>
                                            <button  id="dashboard_nextpageright" class="rightpage" onclick="rightClick( {{$scrapid}} , {{$scraPageN}} )" ></button>
                                    </div>

                                <img src="../{{$bg}}" class="draggedBG">
                           
                            <?php
                                foreach ($scrapbookPageElements as $page_element) {
                                $elem = $page_element->user_scrapbookelementsrc;
                                $elemx = $page_element->user_scrapbookelementxposition;
                                $elemy = $page_element->user_scrapbookelementyposition;
                                $epgn = $page_element->user_scrapbookpagenumber;  
                                $eid = $page_element->user_scrapbookpagesid;
                                ?>

                            <?php   if( ($sid==$eid) && ($scrapbookHeight == 466) ){
                            ?>

                                <?php if( strpos($elem, 'img/image_uploads/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="L_draggedElemPic" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/user_themes/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="L_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/designer_themes/embellishments/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="L_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                else { ?> 
                                    <div class="L_textDisplay-purchaseDASHBOARD" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                        {!! $elem !!}
                                    </div>
                                <?php 
                                } 
                                ?>
                            
                            <?php    
                                } elseif ( ($sid==$eid) && ($scrapbookHeight == 749) ) { ?>
                                <?php if( strpos($elem, 'img/image_uploads/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="P_draggedElemPic" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/user_themes/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="P_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                    elseif ( strpos($elem, 'img/designer_themes/embellishments/') !== false ){ ?>
                                    <div class="imageWrapper">
                                    <img src="../{{$elem}}" class="P_draggedElem" style="left: {{$elemx}}px; top: {{$elemy}}px">        
                                    </div>
                                <?php }
                                else { ?> 
                                    <div class="P_textDisplay-purchaseDASHBOARD" style="left: {{$elemx}}px; top: {{$elemy}}px">
                                        {!! $elem !!}
                                    </div>
                                <?php 
                                } 
                                ?>
                            <?php } }?>                
                    </div>
            <?php
            }
    }
    ?>      
    

    <div class="bottomNavs">
            <p id="numberOfPages{{$scrapid}}" class="numberOfPages hidden">{{$scraPageN}}</p>
            <br />
            <div class="pageCounter-container-purchasedashboard">
            <p id="Pages{{$scrapid}}" class="pageCounter">Page Number: 1 / {{$scraPageN}} </p> 
            <p id="Pages{{$scrapid}}" class="pageNo hidden">{{$scraPageN}} </p>
            </div>
    </div>                          
</div>

<div class="P_shippingDeatails">
        <p class="scrapbookBUY hidden">{{$scrapid}}</p>
        <h2 class="ship"><strong>Shipping Details</strong></h2>
        
        <p class="receiver"><strong>Receiver Info</strong></p>
        
        <div class="priceContainer">
        <p class="lead1" id="titleT"><strong>Name:</strong></p>
        <input placeholder="Name" type="text" name="cust_name" class="form-control" id="shippingInput" value="">
        </div>

        <div class="priceContainer">
        <p class="lead1" id="titleT"><strong>Complete Shipping Address:</strong></p>
        <input placeholder="House #, Block #, Baranggay, City" type="text" name="cust_address" class="form-control" id="shippingInput" value="">
        </div>

        <div class="priceContainer">
        <p class="lead1" id="titleT"><strong>Contact Number:</strong></p>
        <input placeholder="Contact Number" type="text" name="cust_no" class="form-control" id="shippingInput" value="">
        </div>

        <div class="priceContainer">
        <p class="lead1" id="titleT"><strong>Card Number:</strong></p>
        <input placeholder="Card Number" type="text" name="cust_card" class="form-control" id="shippingInput" value="">
        </div>

        <div class="courier">
        <p class="lead1" id="titleT"><strong>Courier:</strong></p>
            <select id="courier" class="form-control" name="courier">
            <option value="JRS">JRS</option>
            <option value="LBC">LBC</option>
          </select>
        </div>

        <div class="city">
        <p class="lead1" id="city"><strong class="contCity">City:</strong></p>
         <select id="location" class="form-control" name="location">
                <option value="Abra" selected="selected" >Abra</option>
                <option value="Agusan del Norte">Agusan del Norte</option>
                <option value="Agusan del Sur">Agusan del Sur</option>
                <option value="Aklan">Aklan</option>
                <option value="Albay">Albay</option>
                <option value="Antique">Antique</option>
                <option value="Apayao">Apayao</option>
                <option value="Aurora">Aurora</option>
                <option value="Basilan">Basilan</option>
                <option value="Bataan">Bataan</option>
                <option value="Batanes">Batanes</option>
                <option value="Batangas">Batangas</option>
                <option value="Benguet">Benguet</option>
                <option value="Biliran">Biliran</option>
                <option value="Bohol">Bohol</option>
                <option value="Bukidnon">Bukidnon</option>
                <option value="Bulacan">Bulacan</option>
                <option value="Cagayan">Cagayan</option>
                <option value="Camarines Norte">Camarines Norte</option>
                <option value="Camarines Sur">Camarines Sur</option>
                <option value="Camiguin">Camiguin</option>
                <option value="Capiz">Capiz</option>
                <option value="Catanduanes">Catanduanes</option>
                <option value="Cavite">Cavite</option>
                <option value="Cebu">Cebu</option>
                <option value="Compostela Valley">Compostela Valley</option>
                <option value="Davao del Norte">Davao del Norte</option>
                <option value="Davao del Sur">Davao del Sur</option>
                <option value="Davao Oriental">Davao Oriental</option>
                <option value="Dinagat Islands">Dinagat Islands</option>
                <option value="Eastern Samar">Eastern Samar</option>
                <option value="Guimaras">Guimaras</option>
                <option value="Ifugao">Ifugao</option>
                <option value="Ilocos Norte">Ilocos Norte</option>
                <option value="Ilocos Sur">Ilocos Sur</option>
                <option value="Iloilo">Iloilo</option>
                <option value="Isabela">Isabela</option>
                <option value="Kalinga">Kalinga</option>
                <option value="La Union">La Union</option>
                <option value="Laguna">Laguna</option>
                <option value="Lanao del Norte">Lanao del Norte</option>
                <option value="Lanao del Sur">Lanao del Sur</option>
                <option value="Leyte">Leyte</option>
                <option value="Maguindanao">Maguindanao</option>
                <option value="Marinduque">Marinduque</option>
                <option value="Masbate">Masbate</option>
                <option value="Metro Manila">Metro Manila</option>
                <option value="Misamis Occidental">Misamis Occidental</option>
                <option value="Misamis Oriental">Misamis Oriental</option>
                <option value="Mountain Province">Mountain Province</option>
                <option value="Negros Occidental">Negros Occidental</option>
                <option value="Negros Oriental">Negros Oriental</option>
                <option value="North Cotabato">North Cotabato</option>
                <option value="Northern Samar">Northern Samar</option>
                <option value="Nueva Ecija">Nueva Ecija</option>
                <option value="Nueva Vizcaya">Nueva Vizcaya</option>
                <option value="Occidental Mindoro">Occidental Mindoro</option>
                <option value="Oriental Mindoro">Oriental Mindoro</option>
                <option value="Palawan">Palawan</option>
                <option value="Pampanga">Pampanga</option>
                <option value="Pangasinan">Pangasinan</option>
                <option value="Quezon">Quezon</option>
                <option value="Quirino">Quirino</option>
                <option value="Rizal">Rizal</option>
                <option value="Romblon">Romblon</option>
                <option value="Samar">Samar</option>
                <option value="Sarangani">Sarangani</option>
                <option value="Shariff Kabunsuan">Shariff Kabunsuan</option>
                <option value="Siquijor">Siquijor</option>
                <option value="Sorsogon">Sorsogon</option>
                <option value="South Cotabato">South Cotabato</option>
                <option value="Southern Leyte">Southern Leyte</option>
                <option value="Sultan Kudarat">Sultan Kudarat</option>
                <option value="Sulu">Sulu</option>
                <option value="Surigao del Norte">Surigao del Norte</option>
                <option value="Surigao del Sur">Surigao del Sur</option>
                <option value="Tarlac">Tarlac</option>
                <option value="Tawi-Tawi">Tawi-Tawi</option>
                <option value="Zambales">Zambales</option>
                <option value="Zamboanga del Norte">Zamboanga del Norte</option>
                <option value="Zamboanga del Sur">Zamboanga del Sur</option>
                <option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
          </select>
        </div>

        <div class="sf">
        <p class="lead1" id="titleT"><strong>Shipping Fee:</strong></p>
        <input  placeholder="Shipping Fee" type="text" id="shippingfee" name="shippingfee"  class="form-control" value="135.00" readonly="readonly">
        </div></br>
        
        <div class="money">
            <p class="lead1" id="titleT"><strong>Summary of Accounts</strong></p><br>
            
            <table class="soaTable">
                <tr>
                    <td class="rightTable">Scrapbook Price (min 10 page)</td> 
                    <td>₱ </td>
                    <td class="scrapbookPRICE"> {{$price}}</td>

                </tr>

                <tr>
                    <td>Extra Page Fee </td> 
                    <td>₱ </td>
                    <td class="extraFee"> </td> 
                </tr>

                    <table class="nestedSOA">
                    <tr>
                        <td class="innerSOA">Scrpanbok Price </td> 
                        <td> {{$price}}</td> 
                    </tr>
                    <tr>
                        <td>  </td> 
                        <td class="operations"> / </td> 
                    </tr>

                    <tr>
                        <td>Minimum Pages</td> 
                        <td class="operations">10</td> 
                    </tr>
                    <tr>
                        <td>  </td> 
                        <td class="operations"> x </td> 
                    </tr>
                    <tr>
                        <td>No. of Extra Pages </td>
                        <td class="operations" id="noE"> </td>  
                    </tr>
                    <tr>
                        <td> = </td>
                        <td class="operations" id="toE"> </td>  
                    </tr>
                    </table>
            <br>
            <table class="soaTable">
                <tr>
                    <td class="rightTable">Shipping Fee</td>
                    <td>₱ </td> 
                    <td class="sfPrice"> </td>
                </tr>


                <tr>
                    <td >Web Admin Fee</td> 
                    <td>₱ </td>
                    <td> 100.00</td>
                </tr>

                <tr>
                    <td class="lead1">Total</td> 
                    <td>₱ </td>
                    <td class="totalE"> </td>
                </tr>
            </table>

            </table>

        </div>

        <form  role="form" method="get" action="{{ url('dashboard') }}" name="PurchaseForm" class="form_navs">
            <div class="buySubmit">
                <button type="submit" id="buybutton" class="btn btn-primary">BUY</button>
            </div>
        </form>
        
        <div class="shipDetails">
            <p class="lead1" id="titleT"><strong>Scrapbook is expected to come within 5 working days starting from the day when the purchase is made, 
                unless unexpected occurences happens (eg: calamities, special declared non-working holiday). 
                Weekends and Holidays are not included.</strong></p>
        </div>
</div>
<!-- Portrait Scrapbook -->
<?php } ?> 


</div>
</div>
<!-- JAVASCRIPTS -->  

<!-- CUSTOM SCRIPTS -->
        <script src="../js/libraries/jquery-2.1.1.min.js"></script>

        <script src="../js/libraries/jspdf1.3.4.min.js"></script>    
        <script src="../js/workspaceJS/User/userJS-dashboard.js"></script> 
        <script src="../js/workspaceJS/User/userJS-purchase.js"></script> 
@endsection
