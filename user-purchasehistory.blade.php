@extends('layouts.navigations-purchase')

<link rel="stylesheet" href="../css/tableBootstrap/normalize-5.0.0-normalize.min.css">
<link rel="stylesheet" href="../css/tableBootstrap/tableBootstrap.css">

@section('content')
<div class="themeContent">
        <div class="newTheme">
                <h3 class="reg"><strong>Transaction History</strong></h3>
                <!-- <p class="contentp">Here are the list of pending themes waiting to be confirmed.</p> -->
                <hr class="rhr">

                <div class="wrapper">
                  
                  <div class="table" id="submission_admin">
                    
                    <div class="row header" id="rowHeader">
                      <div class="cell">SCRAPBOOK TITLE</div>
                      <div class="cell">TOTAL PRICE</div>
                      <div class="cell">CREATED BY</div>
                      <div class="cell">DATE PURCHASED</div>
                      <div class="cell">SHIPPING DETAILS</div>
                    </div>

                        <?php 

                              foreach ($purchaseList as $pl) {
                              $dateCreated = $pl->created_at;
                              $purchaseDate= strtotime($dateCreated->todatestring());
                                
                        ?>

                          <div class="row">
                            <div class="cell">
                              {{ $pl->purchase_scrapbooktitle }}
                            </div>
                            
                            <div class="cell">
                              ₱{{ $pl->purchase_total }}
                            </div>
                            
                            <div class="cell">
                            {{ $pl->purchase_scrapbookfauthor}} {{ $pl->purchase_scrapbooklauthor}}
                            </div>
                            
                            <div class="cell">
                              {{date('M d, Y', $purchaseDate)}}
                            </div>
                            
                            <div class="cell">

                            Shipped To : {{$pl->purchase_name }} <br>
                            Shipping Address : {{$pl->purchase_address}} <br>
                            Contact Number : {{$pl->purchase_contactNumber}} <br>
                            
                            <div class="hidden-first" id="hidden-first{{$pl->purchase_scrapbookid}}">
                            Summary of Account <br>
                            Theme Price : ₱{{$pl->purchase_themePrice}} <br>
                            Scrapbook Pages : {{$pl->purchase_pages}} <br>
                            Extra Page(s) : {{$pl->purchase_extraPages}} <br>
                            Extra Page Fee : ₱{{$pl->purchase_excessFee}} <br>
                            Shipping Courier : {{$pl->purchase_shippingCourier}} <br>
                            Shipping Fee : ₱{{$pl->purchase_shippingFee}} <br>
                            </div>

                            <a id="show-more{{$pl->purchase_scrapbookid}}" class="show-more" onclick="show_more({{$pl->purchase_scrapbookid}})">Show More</a>
                            <a id="show-less{{$pl->purchase_scrapbookid}}" class="show-less" onclick="show_less({{$pl->purchase_scrapbookid}})">Show Less</a>

                            </div>
                          
                        </div>

                        <?php
                        }
                        ?>
                    
                    
                  </div>
                  
                </div>


        </div>
</div>
        <script src='../css/tableBootstrap/jquery-2.1.3-jquery.min.js'></script>    
        <script src="../js/workspaceJS/User/userJS-purchase.js"></script>    
 @endsection
