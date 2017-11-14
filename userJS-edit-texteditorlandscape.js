// GLOBAL VARIABLE DECLARATIONS
  var editorNumberCounter = 0;
  var toggleOnOffCounter = 0;
  var $jqtEditor_L = jQuery.noConflict(); 
  
     window.ActivePage = document.querySelector("#L_workspacediv[style*='display: block;']");
     window.APclass = ActivePage.className;
     apID = $(ActivePage).attr('id');
  
  var actPG = document.querySelector("#L_workspacediv[style*='display: block;']");
  var actPGClass = actPG.className;
  var PGN = actPGClass.replace(/\D/g,'');
// GLOBAL VARIABLE DECLARATIONS

// DELETE LOADED TEXT EDITOR
  function DeleteLoadedIMG_L( span, elementid, spid){

    var elementID = elementid;  

    $jqtEditor_L('#ContTextEditor_L'+elementid).remove();
    $jqtEditor_L('#savedtext_contL'+elementid).remove();
    $jqtEditor_L(span).remove();

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({ 
          data: { 'elementID':elementID},
          method:'GET',
          url:'/deleteLoadedText',
          cache:false,
          success: function(data) { 
            console.log(data);
          }
      });
  };
// DELETE LOADED TEXT EDITOR

// LOAD TEXT EDITOR
  function Load_texteditorL( spid, src, elementid, pageNO, x, y){

        var body = document.querySelector(".L_newPage"+pageNO);
        
        var editorName = '.' + editorNumberCounter++;
        toggleOnOffCounter++;

        var editorName = document.createElement('span');
        editorName.className = "status";
        editorName.id = "span_status" + editorNumberCounter;


        $jqtEditor_L(body.appendChild(editorName) );
        $jqtEditor_L(editorName).jqte();


        if ( $jqtEditor_L(body).children('.jqte').length == editorNumberCounter ){

          $jqtEditor_L(body).children('.jqte').last().attr({ id:"ContTextEditor_L"+elementid, value:elementid });
          $jqtEditor_L(body).children('.jqte').children('.jqte_editor').last().attr('id','TextValue_L'+elementid);
          $jqtEditor_L(body).children('.jqte:last').css({'top': x + "px",'left': y + "px"});

                // scrapbookpagesid
                var scrapbookpagesid_contL = $jqtEditor_L('<p id="scrapbookpagesid_contL'+elementid+'" class="scrapbookpagesid_contL hidden"></p>'); 
                $jqtEditor_L("#ContTextEditor_L"+elementid).append(scrapbookpagesid_contL);
                $jqtEditor_L("#TextValue_L"+elementid).html(src);
                var current_scrapbookpagesid = $jqtEditor_L('#scrapbookpagesid').text();
                $jqtEditor_L(scrapbookpagesid_contL).text(current_scrapbookpagesid);
                // scrapbookpagesid

        }


       else if ( $jqtEditor_L(body).children('.jqte').length != editorNumberCounter ){

          $jqtEditor_L(body).children('.jqte').last().attr({id:"ContTextEditor_L"+elementid, value:elementid});
          $jqtEditor_L(body).children('.jqte').children('.jqte_editor').last().attr('id','TextValue_L'+elementid);
          $jqtEditor_L(body).children('.jqte:last').css({'top': x + "px",'left': y + "px"});

                // scrapbookpagesid
                var scrapbookpagesid_contL = $jqtEditor_L('<p id="scrapbookpagesid_contL'+elementid+'" class="scrapbookpagesid_contL hidden"></p>'); 
                $jqtEditor_L("#ContTextEditor_L"+elementid).append(scrapbookpagesid_contL);
                $jqtEditor_L("#TextValue_L"+elementid).html(src);
                var current_scrapbookpagesid = $jqtEditor_L('#scrapbookpagesid').text();
                $jqtEditor_L(scrapbookpagesid_contL).text(current_scrapbookpagesid);
                // scrapbookpagesid
        }

          var span = "deleteTextEditor_L"+elementid;

          // DELETE BUTTON 
            var closeSpan = $jqtEditor_L('<span id="deleteTextEditor_L'+elementid+'" onClick="DeleteLoadedIMG_L('+span+','+elementid+','+spid+');" class="deleteTextEditor">&times;</span>'); 
            $jqtEditor_L("#ContTextEditor_L"+elementid).append(closeSpan);
          // DELETE BUTTON 
          

         // save text
        $('.jqte').draggable({
            containment: APclass,
            stop: function(){

                      var finalOffset = $(this).offset();
                      var x =$(this).css("left");
                      var y = $(this).css("top"); 
                      
                      var elemID = $(this).attr('value');
                      var src = $('#TextValue_L'+elemID).html();

                      $.ajaxSetup({
                        headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                      });

                      $.ajax({ 
                        data: { 'elemID':elemID,
                        'src': src, 'x': x, 
                        'y': y },
                        method:'GET',
                        url: '/saveEditedText',
                        cache:false,
                        success: function(data) { 
                          console.log(data);
                        }
                      });
                }
      });
      // save text
  };
// LOAD TEXT EDITOR

// DELETE TEXT EDITOR
  function DeleteTextEditor_L( SPANid, elementid, spid ){

    var user_scrapbookpagesid_TL = spid;
    var removeEmbellishment_TL = elementid;

          
    $jqtEditor_L('#ContTextEditor_L'+elementid).remove();
    $jqtEditor_L(SPANid).remove();

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({ 
          data: { 'removeEmbellishment':removeEmbellishment_TL, 'user_scrapbookpagesid':user_scrapbookpagesid_TL },
          method:'GET',
          url:'/deleteElement',
          cache:false,
          success: function(data) { 
            console.log(data);
          }
      });
  };
// DELETE TEXT EDITOR

// ADD TEXT EDITOR
  function addText_L(){

        var body = document.querySelector("#L_workspacediv[style*='display: block;']");
          
        var editorName = '.' + editorNumberCounter++;
        toggleOnOffCounter++;

        var editorName = document.createElement('span');
        editorName.className = "status";
        editorName.id = "span_status" + editorNumberCounter;

        var ActivePage = document.querySelector("#L_workspacediv[style*='display: block;']");
        var ActivePageClass = ActivePage.className;   
        var PageNumber = ActivePageClass.replace(/\D/g,'');
        
        $jqtEditor_L(body.appendChild(editorName));
        $jqtEditor_L(editorName).jqte();


        if ( $jqtEditor_L(body).children('.jqte').length == editorNumberCounter ){

          $jqtEditor_L(body).children('.jqte').last().attr('id','ContTextEditor_L'+editorNumberCounter);
          $jqtEditor_L(body).children('.jqte').children('.jqte_editor').last().attr('id','TextValue_L'+editorNumberCounter);

                // scrapbookpagesid
                var scrapbookpagesid_contL = $jqtEditor_L('<p id="scrapbookpagesid_contL'+editorNumberCounter+'" class="scrapbookpagesid_contL hidden"></p>'); 
                $jqtEditor_L("#ContTextEditor_L"+editorNumberCounter).append(scrapbookpagesid_contL);
                var current_scrapbookpagesid = $jqtEditor_L('#scrapbookpagesid_pageL'+PageNumber).text();
                $jqtEditor_L(scrapbookpagesid_contL).text(current_scrapbookpagesid);
                // scrapbookpagesid

        }


       else if ( $jqtEditor_L(body).children('.jqte').length != editorNumberCounter ){

          $jqtEditor_L(body).children('.jqte').last().attr('id','ContTextEditor_L'+editorNumberCounter);
          $jqtEditor_L(body).children('.jqte').children('.jqte_editor').last().attr('id','TextValue_L'+editorNumberCounter);

                // scrapbookpagesid
                var scrapbookpagesid_contL = $jqtEditor_L('<p id="scrapbookpagesid_contL'+editorNumberCounter+'" class="scrapbookpagesid_contL hidden"></p>'); 
                $jqtEditor_L("#ContTextEditor_L"+editorNumberCounter).append(scrapbookpagesid_contL);
                var current_scrapbookpagesid = $jqtEditor_L('#scrapbookpagesid_pageL'+PageNumber).text();
                $jqtEditor_L(scrapbookpagesid_contL).text(current_scrapbookpagesid);
                // scrapbookpagesid

        }



          var span = "deleteTextEditor_L"+editorNumberCounter;

          // DELETE BUTTON 
            var closeSpan = $jqtEditor_L('<span id="deleteTextEditor_L'+editorNumberCounter+'" class="deleteTextEditor">&times;</span>'); 
            $jqtEditor_L("#ContTextEditor_L"+editorNumberCounter).append(closeSpan);
          // DELETE BUTTON 

        // save text
        $('.jqte').draggable({
            containment: APclass,
            stop: function(){

                
                var elementvalueCheck = $(this).attr('value');

                 if( elementvalueCheck == null){
                  var finalOffset = $(this).offset();
                  var TextXPosition =$(this).css("left");
                  var TextYPosition = $(this).css("top"); 
                  
                  var ActivePage = document.querySelector("#L_workspacediv[style*='display: block;']");
                  var ActivePageClass = ActivePage.className;   
                  var PageNumber = ActivePageClass.replace(/\D/g,'');

                    var elementCopy = $(this).attr('id');
                    var stringtext = elementCopy;
                    var getLastNum = stringtext.replace(/\D/g,'');
                    var TextValue = $('#TextValue_L'+getLastNum).html();

                    var user_scrapbookpagesid = $('#scrapbookpagesid_contL'+getLastNum).text();  
                    var user_scrapbookid = $('#scrapbookid').text(); 

                    $.ajaxSetup({
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                    });
                    $.ajax({ 
                      data: { 'user_scrapbookpagesid': user_scrapbookpagesid, 'user_scrapbookid': user_scrapbookid, 
                      'TextValue': TextValue, 'PageNumber':PageNumber, 'elementCopy':elementCopy, 'TextXPosition': TextXPosition, 
                      'TextYPosition': TextYPosition },
                      method:'GET',
                      url: '/saveText',
                      cache:false,
                      success: function(data) { 
                        console.log(data);


                        var ActivePage = document.querySelector("#L_workspacediv[style*='display: block;']");
                        var ActivePageClass = ActivePage.className;
                        var PageNumber = ActivePageClass.replace(/\D/g,'');
                        var spid = $('#scrapbookpagesid_pageL'+PageNumber).text();

                        var elementid = data.scrapboookelementid;
                        
                        var newConTextEditor_L = "ContTextEditor_L"+elementid;
                        var newTextValue_L = "TextValue_L"+elementid;

                        $jqtEditor_L("#ContTextEditor_L"+editorNumberCounter).attr({ id:newConTextEditor_L, value: elementid });
                        $jqtEditor_L("#TextValue_L"+editorNumberCounter).attr({ id:newTextValue_L, value: elementid});

                        var  deleteIMG_id = "deleteTextEditor_L"+data.scrapboookelementid;
                        var elementvalue = data.scrapboookelementid;
                        

                        $jqtEditor_L("#deleteTextEditor_L"+editorNumberCounter).attr({ id:"deleteTextEditor_L"+elementid, onClick:"DeleteTextEditor_L("+deleteIMG_id+","+elementvalue+","+spid+")" });
  
                      }
                    });
                  }


                  else if (elementvalueCheck != null) {
                      var finalOffset = $(this).offset();
                      var x =$(this).css("left");
                      var y = $(this).css("top"); 
                      
                      var elemID = $(this).attr('value');
                      console.log(elemID);
                      var src = $('#TextValue_L'+elemID).html();

                       $.ajaxSetup({
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                       });

                       $.ajax({ 
                      data: { 'elemID':elemID,
                      'src': src, 'x': x, 
                      'y': y },
                      method:'GET',
                      url: '/saveEditedText',
                      cache:false,
                      success: function(data) { 
                        console.log(data);
                      }
                    });
                  } 


            }
      });
      // save text
  }
// ADD TEXT EDITOR



       



