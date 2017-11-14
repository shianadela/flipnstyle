// GLOBAL VARIABLE DECLARATIONS
  var editorNumberCounter = 0;
  var toggleOnOffCounter = 0;
  var $jqtEditor_P= jQuery.noConflict(); 
  
     window.ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
     window.APclass = ActivePage.className;
     apID = $(ActivePage).attr('id');
  
  var actPG = document.querySelector("#P_workspacediv[style*='display: block;']");
  var actPGClass = actPG.className;
  var PGN = actPGClass.replace(/\D/g,'');
// GLOBAL VARIABLE DECLARATIONS

// DELETE LOADED TEXT EDITOR
  function DeleteLoadedIMG_P( span, elementid, spid){

    var elementID = elementid;  

    $jqtEditor_P('#ContTextEditor_P'+elementid).remove();
    $jqtEditor_P('#savedtext_contL'+elementid).remove();
    $jqtEditor_P(span).remove();

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
  function Load_texteditorP( spid, src, elementid, pageNO, x, y){

        var body = document.querySelector(".P_newPage"+pageNO);
        
        var editorName = '.' + editorNumberCounter++;
        toggleOnOffCounter++;

        var editorName = document.createElement('span');
        editorName.className = "status";
        editorName.id = "span_status" + editorNumberCounter;


        $jqtEditor_P(body.appendChild(editorName) );
        $jqtEditor_P(editorName).jqte();


        if ( $jqtEditor_P(body).children('.jqte').length == editorNumberCounter ){

          $jqtEditor_P(body).children('.jqte').last().attr({ id:"ContTextEditor_P"+elementid, value:elementid });
          $jqtEditor_P(body).children('.jqte').children('.jqte_editor').last().attr('id','TextValue_P'+elementid);
          $jqtEditor_P(body).children('.jqte:last').css({'top': x + "px",'left': y + "px"});

                // scrapbookpagesid
                var scrapbookpagesid_contP = $jqtEditor_P('<p id="scrapbookpagesid_contP'+elementid+'" class="scrapbookpagesid_contP hidden"></p>'); 
                $jqtEditor_P("#ContTextEditor_P"+elementid).append(scrapbookpagesid_contP);
                $jqtEditor_P("#TextValue_P"+elementid).html(src);
                var current_scrapbookpagesid = $jqtEditor_P('#scrapbookpagesid').text();
                $jqtEditor_P(scrapbookpagesid_contP).text(current_scrapbookpagesid);
                // scrapbookpagesid

        }


       else if ( $jqtEditor_P(body).children('.jqte').length != editorNumberCounter ){

          $jqtEditor_P(body).children('.jqte').last().attr({id:"ContTextEditor_P"+elementid, value:elementid});
          $jqtEditor_P(body).children('.jqte').children('.jqte_editor').last().attr('id','TextValue_P'+elementid);
          $jqtEditor_P(body).children('.jqte:last').css({'top': x + "px",'left': y + "px"});

                // scrapbookpagesid
                var scrapbookpagesid_contP = $jqtEditor_P('<p id="scrapbookpagesid_contP'+elementid+'" class="scrapbookpagesid_contP hidden"></p>'); 
                $jqtEditor_P("#ContTextEditor_P"+elementid).append(scrapbookpagesid_contP);
                $jqtEditor_P("#TextValue_P"+elementid).html(src);
                var current_scrapbookpagesid = $jqtEditor_P('#scrapbookpagesid').text();
                $jqtEditor_P(scrapbookpagesid_contP).text(current_scrapbookpagesid);
                // scrapbookpagesid
        }

          var span = "deleteTextEditor_P"+elementid;

          // DELETE BUTTON 
            var closeSpan = $jqtEditor_P('<span id="deleteTextEditor_P'+elementid+'" onClick="DeleteLoadedIMG_P('+span+','+elementid+','+spid+');" class="deleteTextEditor">&times;</span>'); 
            $jqtEditor_P("#ContTextEditor_P"+elementid).append(closeSpan);
          // DELETE BUTTON 
          

         // save text
        $('.jqte').draggable({
            containment: APclass,
            stop: function(){

                      var finalOffset = $(this).offset();
                      var x =$(this).css("left");
                      var y = $(this).css("top"); 
                      
                      var elemID = $(this).attr('value');
                      var src = $('#TextValue_P'+elemID).html();

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
  function DeleteTextEditor_P( SPANid, elementid, spid ){

    var user_scrapbookpagesid_PL = spid;
    var removeEmbellishment_PL = elementid;

          
    $jqtEditor_P('#ContTextEditor_P'+elementid).remove();
    $jqtEditor_P(SPANid).remove();

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({ 
          data: { 'removeEmbellishment':removeEmbellishment_PL, 'user_scrapbookpagesid':user_scrapbookpagesid_PL },
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
  function addText_P(){

        var body = document.querySelector("#P_workspacediv[style*='display: block;']");
          
        var editorName = '.' + editorNumberCounter++;
        toggleOnOffCounter++;

        var editorName = document.createElement('span');
        editorName.className = "status";
        editorName.id = "span_status" + editorNumberCounter;

        var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
        var ActivePageClass = ActivePage.className;   
        var PageNumber = ActivePageClass.replace(/\D/g,'');
        
        $jqtEditor_P(body.appendChild(editorName) );
        $jqtEditor_P(editorName).jqte();


        if ( $jqtEditor_P(body).children('.jqte').length == editorNumberCounter ){

          $jqtEditor_P(body).children('.jqte').last().attr('id','ContTextEditor_P'+editorNumberCounter);
          $jqtEditor_P(body).children('.jqte').children('.jqte_editor').last().attr('id','TextValue_P'+editorNumberCounter);

                // scrapbookpagesid
                var scrapbookpagesid_contP = $jqtEditor_P('<p id="scrapbookpagesid_contP'+editorNumberCounter+'" class="scrapbookpagesid_contP hidden"></p>'); 
                $jqtEditor_P("#ContTextEditor_P"+editorNumberCounter).append(scrapbookpagesid_contP);
                var current_scrapbookpagesid = $jqtEditor_P('#scrapbookpagesid_pageP'+PageNumber).text();
                $jqtEditor_P(scrapbookpagesid_contP).text(current_scrapbookpagesid);
                // scrapbookpagesid

        }


       else if ( $jqtEditor_P(body).children('.jqte').length != editorNumberCounter ){

          $jqtEditor_P(body).children('.jqte').last().attr('id','ContTextEditor_P'+editorNumberCounter);
          $jqtEditor_P(body).children('.jqte').children('.jqte_editor').last().attr('id','TextValue_P'+editorNumberCounter);

                // scrapbookpagesid
                var scrapbookpagesid_contP = $jqtEditor_P('<p id="scrapbookpagesid_contP'+editorNumberCounter+'" class="scrapbookpagesid_contP hidden"></p>'); 
                $jqtEditor_P("#ContTextEditor_P"+editorNumberCounter).append(scrapbookpagesid_contP);
                var current_scrapbookpagesid = $jqtEditor_P('#scrapbookpagesid_pageP'+PageNumber).text();
                $jqtEditor_P(scrapbookpagesid_contP).text(current_scrapbookpagesid);
                // scrapbookpagesid

        }



          var span = "deleteTextEditor_P"+editorNumberCounter;

          // DELETE BUTTON 
            var closeSpan = $jqtEditor_P('<span id="deleteTextEditor_P'+editorNumberCounter+'" class="deleteTextEditor">&times;</span>'); 
            $jqtEditor_P("#ContTextEditor_P"+editorNumberCounter).append(closeSpan);
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
                  
                  var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
                  var ActivePageClass = ActivePage.className;   
                  var PageNumber = ActivePageClass.replace(/\D/g,'');

                    var elementCopy = $(this).attr('id');
                    var stringtext = elementCopy;
                    var getLastNum = stringtext.replace(/\D/g,'');
                    var TextValue = $('#TextValue_P'+getLastNum).html();

                    var user_scrapbookpagesid = $('#scrapbookpagesid_contP'+getLastNum).text();  
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


                        var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
                        var ActivePageClass = ActivePage.className;
                        var PageNumber = ActivePageClass.replace(/\D/g,'');
                        var spid = $('#scrapbookpagesid_pageP'+PageNumber).text();

                        var elementid = data.scrapboookelementid;
                        
                        var newConTextEditor_P = "ContTextEditor_P"+elementid;
                        var newTextValue_P = "TextValue_P"+elementid;

                        $jqtEditor_P("#ContTextEditor_P"+editorNumberCounter).attr({ id:newConTextEditor_P, value: elementid });
                        $jqtEditor_P("#TextValue_P"+editorNumberCounter).attr({ id:newTextValue_P, value: elementid});

                        var  deleteIMG_id = "deleteTextEditor_P"+data.scrapboookelementid;
                        var elementvalue = data.scrapboookelementid;
                        

                        $jqtEditor_P("#deleteTextEditor_P"+editorNumberCounter).attr({ id:"deleteTextEditor_P"+elementid, onClick:"DeleteTextEditor_P("+deleteIMG_id+","+elementvalue+","+spid+")" });
  
                      }
                    });
                  }


                  else if (elementvalueCheck != null) {
                      var finalOffset = $(this).offset();
                      var x =$(this).css("left");
                      var y = $(this).css("top"); 
                      
                      var elemID = $(this).attr('value');
                      console.log(elemID);
                      var src = $('#TextValue_P'+elemID).html();

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



       



