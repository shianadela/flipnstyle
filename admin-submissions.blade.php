@extends('layouts.navigations-admin')

<link rel="stylesheet" href="/css/tableBootstrap/normalize-5.0.0-normalize.min.css">
<link rel="stylesheet" href="/css/tableBootstrap/tableBootstrap.css">

@section('content')
<div class="themeContent">
        <div class="newTheme">
                <h3 class="reg"><strong>Submission List</strong></h3>
                <p class="contentp">Here are the list of pending themes waiting to be confirmed.</p>
                <hr class="rhr">

                <div class="wrapper">
                  
                  <div class="table" id="submission_admin">
                    
                    <div class="row header" id="rowHeader">
                      <div class="cell">TITLE</div>
                      <div class="cell">PRICE</div>
                      <div class="cell">CREATED BY</div>
                      <div class="cell">DESIGNER ID</div>
                      <div class="cell">DATE CREATED</div>
                      <div class="cell">STATUS</div>
                      <div class="cell">ACTION</div>
                    </div>

                        <?php 
                            use flipnstyle\Designer;
                              foreach ($submissionList as $sl) {
                              $dateCreated = $sl->created_at;
                              $stringDate = strtotime($dateCreated->todatestring());
                              $themestatus = $sl->status;
                              $designerid = $sl->designer_id;


                              $designer = Designer::where('designerid', $designerid)->get();        
                              foreach ($designer as $d) {
                                $designerFname = $d->first_name;
                                $designerLname = $d->last_name;
                        ?>

                          <div class="row">
                            <div class="cell">
                              {{ $sl->designer_themetitle }}
                            </div>
                            <div class="cell">
                              ₱{{ $sl->designer_themePrice }}
                            </div>
                            <div class="cell">
                              {{ $designerFname }} {{ $designerLname }}
                            </div>
                            <div class="cell">
                              {{ $sl->designer_id}}
                            </div>
                            <div class="cell">
                              {{date('M d, Y', $stringDate)}}
                            </div>
                            <div class="cell">
                              {{$sl->status}}
                            </div>

                            <?php
                                if( ($themestatus == "Pending") || ($themestatus == "On Hold" ) ){
                            ?>

                            <div class="actionsContainer">
                            <!-- <form  id="reviewForm" role="form" method="post" action="{{ url('admin/viewtheme') }}" name="DesignerForm" class="form_navs">
                            <input type="text" name="themeid" class="form-control hidden" id="designerid" value="{{$sl->designer_themeid}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                                <div class="cell">
                                  <button type="submit" class="Approvedsubmission"> VIEW</button>
                                </div></br>
                            </form> -->

                            <form  id="reviewForm" role="form" method="post" action="{{ url('admin/review') }}" name="DesignerForm" class="form_navs">
                            <input type="text" name="themeid" class="form-control hidden" id="designerid" value="{{$sl->designer_themeid}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                                <div class="cell">
                                  <button type="submit" class="submissionReview_button"> REVIEW</button>
                                </div></br>
                            </form>
                            </div>

                            <?php
                                }
                              else {
                            ?>
                            <div class="actionsContainer">
                            <form  id="reviewForm" role="form" method="post" action="{{ url('admin/viewtheme') }}" name="DesignerForm" class="form_navs">
                            <input type="text" name="themeid" class="form-control hidden" id="designerid" value="{{$sl->designer_themeid}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                                <div class="cell">
                                  <button type="submit" class="Approvedsubmission"> VIEW</button>
                                </div></br>
                            </form>
                            </div>
                              <?php
                                }
                              ?>
                          </div>

                        <?php
                          }
                        }
                        ?>
                    
                    
                  </div>
                  
                </div>


        </div>
</div>
        <script src='/css/tableBootstrap/jquery-2.1.3-jquery.min.js'></script>    

 @endsection
