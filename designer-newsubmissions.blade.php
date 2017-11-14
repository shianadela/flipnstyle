@extends('layouts.navigations-designer')
 
@section('content_nav')
                                    <p class="designerid hidden" id="designer_loggedID">{{$designerid}}</p>
        <div class="container">
            <div class="navbar-header">
                
                <div class="avatar-container">
                  <img src="/img/page_assets/avatar/man.png" alt="Avatar logo" class="hidden-xs">
                  <p>DESIGNER</p>
                </div>

                <a class="navbar-brand home"  href="#" data-animate-hover="bounce">
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
          <div class="savingloader" id="savingLoader"> 
            <img class="LoaderSave-designer" src="../gif/loader/teardrop.gif"/> 
          </div>

<div class="themeContent-designer">
        <div class="newTheme-designer">
              <div>
                <h3 class="reg"><strong>Submit a New Theme</strong></h3>
                <p class="lead1"><strong>Start your creative theme!</strong></p>
                <p class="contentp">Your posted theme will be reviewed by the administrator of Flip 'n Style.
                                    Processing of themes may take a while. We ask for your patience in waiting for your themes to be posted. Thank you and keep creating, Artist!</p>
                <hr class="rhr">
                    <p class="themeid hidden"></p>

                    <div class="priceContainer">
                    <p class="lead1" id="titleT"><strong>Theme Title</strong></p>
                    <input placeholder="Title" type="text" name="title" class="form-control" id="themeTitle" value="">
                    </div>
                    
                    <div class="priceContainer">
                      <p class="lead1" id="titleT"><strong>Price</strong></p>
                      <input placeholder="Price" type="number" name="price" class="form-control" id="Scrapbookprice" value="">
                    </div>

                    <!--<div class="priceContainer">
                      <p class="lead1" id="titleT"><strong>Card #</strong></p>
                      <input placeholder="Card Number" type="text" name="card" class="form-control" id="Cardnumber" value="">
                    </div> -->
                </div>
                
                <div class="uploadsContainerGroup">

                <!-- BACKGROUND  -->
                  <div class="uploadsContainer">
                    <p class="lead1"><strong>Theme Backgrounds</strong></p>
                        <div class="phootoContainer">
                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBG/publicFolder" method="post" target="hiddenFrame1" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BG1 hidden"></p>
                                       <img id="background1" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                        <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBackground1" name="designerBackground" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                        </div>
                                        <iframe name="hiddenFrame1" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                      </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBG/publicFolder" method="post" target="hiddenFrame2" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BG2 hidden"></p>
                                       <img id="background2" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                        <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBackground2" name="designerBackground" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();" /> 
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                        </div> 
                                         <iframe name="hiddenFrame2" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                      </form>
                                </div>
                                 </div>
                             </div>
                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBG/publicFolder" method="post" target="hiddenFrame3" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BG3 hidden"></p>
                                       <img id="background3" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBackground3" name="designerBackground" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();"/>
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                          </div>
                                         <iframe name="hiddenFrame3" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBG/publicFolder" method="post" target="hiddenFrame4" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BG4 hidden"></p>
                                       <img id="background4" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBackground4" name="designerBackground" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();"/>
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                          </div>
                                         <iframe name="hiddenFrame4" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBG/publicFolder" method="post" target="hiddenFrame5" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BG5 hidden"></p>
                                       <img id="background5" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBackground5" name="designerBackground" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();"/>
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                          </div>
                                         <iframe name="hiddenFrame5" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBG/publicFolder" method="post" target="hiddenFrame6" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BG6 hidden"></p>
                                       <img id="background6" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBackground6" name="designerBackground" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();"/>
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                          </div>
                                         <iframe name="hiddenFrame6" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBG/publicFolder" method="post" target="hiddenFrame7" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BG7 hidden"></p>
                                       <img id="background7" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBackground7" name="designerBackground" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();"/>
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                          </div>
                                         <iframe name="hiddenFrame7" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBG/publicFolder" method="post" target="hiddenFrame8" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BG8 hidden"></p>
                                       <img id="background8" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBackground8" name="designerBackground" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();"/>
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                          </div>
                                         <iframe name="hiddenFrame8" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBG/publicFolder" method="post" target="hiddenFrame9" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BG9 hidden"></p>
                                       <img id="background9" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBackground9" name="designerBackground" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();"/>
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                          </div>
                                         <iframe name="hiddenFrame9" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBG/publicFolder" method="post" target="hiddenFrame10" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BG10 hidden"></p>
                                       <img id="background10" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBackground10" name="designerBackground" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();"/>
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                          </div>
                                         <iframe name="hiddenFrame10" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div> 
                        </div>
                  </div>
                <!-- BACKGROUND  -->

                <!-- BORDER -->
                  <div class="uploadsContainer">
                    <p class="lead1"><strong>Theme Borders</strong></p>
                        <div class="phootoContainer">
                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBD/publicFolder" method="post" target="hiddenFrame11" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BD1 hidden"></p>
                                       <img id="border1" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBorder1" name="designerBorder" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                           <iframe name="hiddenFrame11" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBD/publicFolder" method="post" target="hiddenFrame12" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BD2 hidden"></p>
                                       <img id="border2" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBorder2" name="designerBorder" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                           <iframe name="hiddenFrame12" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>
                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBD/publicFolder" method="post" target="hiddenFrame13" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BD3 hidden"></p>
                                       <img id="border3" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBorder3" name="designerBorder" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                           <iframe name="hiddenFrame13" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBD/publicFolder" method="post" target="hiddenFrame14" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BD4 hidden"></p>
                                       <img id="border4" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBorder4" name="designerBorder" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                           <iframe name="hiddenFrame14" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBD/publicFolder" method="post" target="hiddenFrame15" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BD5 hidden"></p>
                                       <img id="border5" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBorder5" name="designerBorder" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                           <iframe name="hiddenFrame15" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBD/publicFolder" method="post" target="hiddenFrame16" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BD6 hidden"></p>
                                       <img id="border6" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBorder6" name="designerBorder" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                           <iframe name="hiddenFrame16" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBD/publicFolder" method="post" target="hiddenFrame17" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BD7 hidden"></p>
                                       <img id="border7" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBorder7" name="designerBorder" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                           <iframe name="hiddenFrame17" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBD/publicFolder" method="post" target="hiddenFrame18" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BD8 hidden"></p>
                                       <img id="border8" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBorder8" name="designerBorder" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                           <iframe name="hiddenFrame18" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBD/publicFolder" method="post" target="hiddenFrame19" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BD9 hidden"></p>
                                       <img id="border9" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBorder9" name="designerBorder" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                           <iframe name="hiddenFrame19" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                      <form  action="/storeDesignerThemesBD/publicFolder" method="post" target="hiddenFrame20" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_BD10 hidden"></p>
                                       <img id="border10" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputBorder10" name="designerBorder" accept="image/jpg,image/png,image/jpeg,image/" onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                           <iframe name="hiddenFrame20" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div> 
                        </div>
                  </div>
                <!-- BORDER -->

                <!-- EMBELLISHMENT -->
                  <div class="uploadsContainerEM">
                        <p class="lead1"><strong>Theme Embellishments</strong></p>
                        <div class="phootoContainer">

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                    <form  action="/storeDesignerThemesEM/publicFolder" method="post" target="hiddenFrame21" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_EM1 hidden"></p>
                                       <img id="embellishment1" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputEmbellishment1" name="designerEmbellishment" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                              <iframe name="hiddenFrame21" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                    <form  action="/storeDesignerThemesEM/publicFolder" method="post" target="hiddenFrame22" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_EM2 hidden"></p>
                                       <img id="embellishment2" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputEmbellishment2" name="designerEmbellishment" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                              <iframe name="hiddenFrame22" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                    <form  action="/storeDesignerThemesEM/publicFolder" method="post" target="hiddenFrame23" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_EM3 hidden"></p>
                                       <img id="embellishment3" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputEmbellishment3" name="designerEmbellishment" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                              <iframe name="hiddenFrame23" width="0" height="0" border="0" style="display: none;"></iframe>
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                    <form  action="/storeDesignerThemesEM/publicFolder" method="post" target="hiddenFrame25" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_EM4 hidden"></p>
                                       <img id="embellishment4" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputEmbellishment4" name="designerEmbellishment" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                              <iframe name="hiddenFrame25" width="0" height="0" border="0" style="display: none;"></iframe>
                                         
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                    <form  action="/storeDesignerThemesEM/publicFolder" method="post" target="hiddenFrame26" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_EM5 hidden"></p>
                                       <img id="embellishment5" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputEmbellishment5" name="designerEmbellishment" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                              <iframe name="hiddenFrame26" width="0" height="0" border="0" style="display: none;"></iframe>
                                         
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                    <form  action="/storeDesignerThemesEM/publicFolder" method="post" target="hiddenFrame27" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_EM6 hidden"></p>
                                       <img id="embellishment6" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputEmbellishment6" name="designerEmbellishment" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                              <iframe name="hiddenFrame27" width="0" height="0" border="0" style="display: none;"></iframe>
                                         
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                    <form  action="/storeDesignerThemesEM/publicFolder" method="post" target="hiddenFrame28" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_EM7 hidden"></p>
                                       <img id="embellishment7" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputEmbellishment7" name="designerEmbellishment" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                              <iframe name="hiddenFrame28" width="0" height="0" border="0" style="display: none;"></iframe>
                                         
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                    <form  action="/storeDesignerThemesEM/publicFolder" method="post" target="hiddenFrame29" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_EM8 hidden"></p>
                                       <img id="embellishment8" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputEmbellishment8" name="designerEmbellishment" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                              <iframe name="hiddenFrame29" width="0" height="0" border="0" style="display: none;"></iframe>
                                         
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                    <form  action="/storeDesignerThemesEM/publicFolder" method="post" target="hiddenFrame30" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_EM9 hidden"></p>
                                       <img id="embellishment9" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputEmbellishment9" name="designerEmbellishment" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                              <iframe name="hiddenFrame30" width="0" height="0" border="0" style="display: none;"></iframe>
                                         
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div>

                             <div class="input-file-row-1">
                                 <div class="upload-file-container">
                                    <form  action="/storeDesignerThemesEM/publicFolder" method="post" target="hiddenFrame31" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <p class="u_EM10 hidden"></p>
                                       <img id="embellishment10" class="drag" src="#" alt=""/>
                                <div class="upload-file-container-text">
                                         <div class = 'one_opacity_0'>
                                              <input type="file" id="inputEmbellishment10" name="designerEmbellishment" accept="image/jpg,image/png,image/jpeg,image/"  onchange="this.form.submit();" />
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">   
                                              </div>
                                              <iframe name="hiddenFrame31" width="0" height="0" border="0" style="display: none;"></iframe>
                                         
                                         <span id="spanHover"> Add Photo </span>
                                    </form>
                                </div>
                                 </div>
                             </div> 
                        </div>
                        </div>
                  </div>
                <!-- EMBELLISHMENT -->
                
                </div>
                
                  <form  role="form" method="post" action="{{ url('designer_viewThemesList') }}" name="NewSubmissionForm" class="form_navs">
                      <input type="text" name="designerid" class="form-control hidden" id="designerid" value="{{$designerid}}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                            <button type="submit" id="submitTheme_click" class="btn btn-primary">SUBMIT</button>
                  </form>
                
        </div>
</div>


<!-- JAVASCRIPT -->
        <script src="/js/bootstrap.min.js"></script>   
        <script src="/js/waypoints.min.js"></script>
        <script src="/js/modernizr.js"></script>
        <script src="/js/bootstrap-hover-dropdown.js"></script>
        <script src="/js/owl.carousel.min.js"></script>        
        <script src="/js/workspaceJS/Designer/designerJS-designer.js"></script>
<!-- JAVASCRIPT -->
 
 @endsection
