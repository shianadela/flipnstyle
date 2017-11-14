
<button  class="previewPage hidden" id="previewPage_button" data-toggle="modal" data-target="#themepreview_modal"></button>
                    
                    <p class="themeID hidden">{{$themeid}}</p>
                    <p class="designerid hidden">{{$designerid}}</p>
                    <!-- <p class="price hidden">{{$designerid}}</p> -->
<!-- THEME PREVIEW -->
    <div class="modal fade" id="themepreview_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="ThemePreview_ModalContent">
                <div class="modal-body">
                    <div class="themeDetails">
                            
                     <?php 
                        use flipnstyle\Designer;
                        use flipnstyle\DesignerScrapbookTheme;
                        use flipnstyle\DesignerScrapbookThemeBackground;
                        use flipnstyle\DesignerScrapbookThemeBorder;
                        use flipnstyle\DesignerScrapbookThemeEmbellishment;

                        $cnt = 0;

                        foreach ($designerThemes as $dt) {
                            $designerid = $dt->designer_id;

                                $designer = Designer::where('designerid', $designerid)->get();
                                $themePrice = DesignerScrapbookTheme::where('designer_themeid', $themeid)->get();
                                $designerBG = DesignerScrapbookThemeBackground::where('designer_themeid', $themeid)->get();
                                $designerBD = DesignerScrapbookThemeBorder::where('designer_themeid', $themeid)->get();
                                $designerEM = DesignerScrapbookThemeEmbellishment::where('designer_themeid', $themeid)->get();
                                
                                foreach ($designer as $d) {

                            if($dt->designer_themeid == $themeid && $dt->designer_id == $designerid){
                    ?>

                                <p class="themeDetails">Title: {{$dt->designer_themetitle}} || 
                                by: {{$d->first_name}} {{$d->last_name}} ||
                                Price: ₱{{$dt->designer_themePrice}}</p>
                            
                    <?php 
                            }
                        }
                    } 

                                    $cnt++;
                    ?>
                            <?php if($cnt==1){ ?> 
                             <p class="bbe1">Background</p>
                             <?php } ?>
                            <div class="asset_container" id="bg_slider" >
                                <?php
                                foreach ($designerBG as $dBG) { ?>
                                <div class="image_Container"> <img class="preview_assetBG" src="../{{$dBG->designer_themebackgroundsrc}}"></div>
                                <?php } ?>
                            </div>

                             <?php if($cnt==1){ ?>
                             <p class="bbe2">Border</p>
                             <?php } ?>
                            <div class="asset_container" id="bd_slider">
                                <?php   
                                foreach ($designerBD as $dBD) { ?>
                                <div class="image_Container"> <img class="preview_assetBD" src="../{{$dBD->designer_themebordersrc}}"></div>
                                <?php } ?>
                            </div>

                             <?php if($cnt==1){ ?>
                             <p class="bbe3">Embellishment</p>
                            <?php } ?>
                            <div class="asset_containerL" id="em_slider">
                                <?php
                                foreach ($designerEM as $dEM) { ?>
                                <div class="image_Container"> <img class="preview_assetEM" src="../{{$dEM->designer_themeembellishmentsrc}}"></div>
                                <?php } ?>
                            </div>
                    </div>
                    <?php foreach ($themePrice as $tP){ ?>
                        
                        <div class="useTheme">
                            <form  role="form" method="post" action="{{ url('/special/workspace') }}" name="UseSpecialTheme" class="form_navs">
                                <input type="text" name="themeid" class="form-control hidden" id="themeid" value="{{$themeid}}">
                                <input type="text" name="price" class="form-control hidden" id="price" value="{{$tP->designer_themePrice}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                                <button type="submit" id="useTheme_button" value="{{$themeid}}" class="btn btn-primary">USE</button>
                            </form>

                            <a href="{{ url('specialthemes') }}" id="back_button" value="{{$themeid}}" class="btn btn-primary">BACK</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<!-- THEME PREVIEW -->

<div class="specialTheme_Content">
    <div id="content">
        
@extends('layouts.navigations-preview-special-theme')
 
@section('content')


    </div>  
</div>   

       <script src="../js/bootstrap.min.js"></script>   
        <script src="../js/waypoints.min.js"></script>
        <script src="../js/modernizr.js"></script>

        <script src="../js/workspaceJS/User/userJS-previewtheme.js"></script>   
  @endsection

