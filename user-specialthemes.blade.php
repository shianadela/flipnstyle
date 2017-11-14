@extends('layouts.navigations-dashboard-specialthemes')
 
@section('content')

<div class="specialTheme_Content">
    <div id="content">
            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12" id="create-book">
                            <h2>SPECIAL THEME JUST FOR YOU</h2>
                        </div>
                    </div>
                </div>

               <div class="container">
                    <div class="product-slider">
                     <?php 
                        use flipnstyle\Designer;
                        use flipnstyle\DesignerScrapbookThemeBackground;

                          foreach ($designerThemes as $dt) {
                            $designerid = $dt->designer_id;
                            $designerthemeid = $dt->designer_themeid;

                            $cnt = 0;

                                $designer = Designer::where('designerid', $designerid)->get();
                                $designerBG = DesignerScrapbookThemeBackground::where('designer_themeid', $designerthemeid)->get();

                                foreach ($designer as $d) {
                                    $firstname = $d->first_name;
                                    $lastname = $d->last_name;

                            if($dt->status == "Approved"){
                    ?>
                            
                        
                        <div class="item">
                            <div class="product">

                                <?php

                                    foreach ($designerBG as $dBG) {
                                        $cnt++;
                                        $bg = $dBG->designer_themebackgroundsrc;
                                ?>                             
                        <?php
                         if ($cnt == 1) {
                        ?>
                        <form  id="previewThemeForm{{$dBG->designer_themeid}}" role="form" method="post" action="{{ url('preview/specialthemes') }}" name="previewForm" class="form_navs">
                        <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$d->designerid}}">
                        <input type="text" name="themeid" class="form-control hidden" id="designerthemeid" value="{{$dBG->designer_themeid}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">   

                            <div class="flip-container" onClick="submit_PreviewForm({{$dBG->designer_themeid}})">
                                    <div class="flipper">
                                        <div class="front">
                                                <?php
                                                 if ($cnt == 1) {
                                                ?>
                                                <img id="PreviewImage" src="{{$bg}}" alt="" class="img-responsive" >
                                                <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="back">
                                                <?php
                                                 if ($cnt == 1) {
                                                ?>
                                                <img id="PreviewImage" src="{{$bg}}" alt="" class="img-responsive" >
                                                <?php
                                                }
                                                ?>
                                        </div>
                                    </div>

                                <a href="#" class="invisible">
                                    <?php
                                     if ($cnt == 1) {
                                    ?>
                                    <img id="PreviewImage" src="{{$bg}}" alt="" class="img-responsive">
                                    <?php
                                    }
                                    ?>
                                </a>                                
                            </div>
                            <?php
                            }
                            ?>
                            </form>
                                    <?php
                                     if ($cnt == 1) {
                                    ?>
                                    <h3 class="themeTitle_content">{{$dt->designer_themetitle}}</h3>
                                    <p class="designerName">by: {{$firstname}} {{$lastname}}</p>
                                    <p class="themePrice_content">₱{{$dt->designer_themePrice}}</p>
                                    <?php
                                        }}
                                    ?>
                            </div>
                        </div>
                    <?php
                            }
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
    </div>  
</div>
        <script src="/js/bootstrap.min.js"></script>   
        <script src="/js/waypoints.min.js"></script>
        <script src="/js/modernizr.js"></script>
        <script src="/js/bootstrap-hover-dropdown.js"></script>
        <script src="/js/owl.carousel.min.js"></script> 

        <script src="/js/workspaceJS/User/userJS-themes.js"></script>   

  @endsection

