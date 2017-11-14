
// GLOBAL VARIABLE DECLARATIONS
     window.ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
     window.APclass = ActivePage.className;
     apID = $(ActivePage).attr('id');
// GLOBAL VARIABLE DECLARATIONS

//UPLOAD AND PREVIEW MULTIPLE PHOTO
  function readURL(input, target) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      var image_target = $(target);
      reader.onload = function (e) {
        image_target.attr('src', e.target.result).show();
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
//UPLOAD AND PREVIEW MULTIPLE PHOTO

//PREVIEW UPLOADED IMAGES
    $("#customerpic2").live("change",function(){
      readURL(this, "#drag43");
      UploadImage(this); 
    });


    $("#customerpic3").live("change",function(){
      readURL(this, "#drag44");
      UploadImage(this); 
    });

    $("#customerpic4").live("change",function(){
      readURL(this, "#drag45");
      UploadImage(this); 
    });


    $("#customerpic5").live("change",function(){
      readURL(this, "#drag46");
      UploadImage(this);  
    });

    $("#customerpic6").live("change",function(){
      readURL(this, "#drag47");
      UploadImage(this); 
    });


    $("#customerpic7").live("change",function(){
      readURL(this, "#drag48");
      UploadImage(this);  
    });

    $("#customerpic8").live("change",function(){
      readURL(this, "#drag49");
      UploadImage(this); 
    });
//PREVIEW UPLOADED IMAGES

//UPLOAD CALLSRC
  function UploadImage(input) {      
        UploadedImageInputSRC = input.files[0].name;
  }
//UPLOAD CALLSRC

//RESET [WHOLE DIV]
  function resetScrapbook(){
    var container = document.querySelector("#P_workspacediv[style*='display: block;']");
    container.innerHTML= " ";    
  }  
//RESET [WHOLE DIV]

// DROP AND AUTO SAVE BACKGROUND 
 function allowDrop(ev) {
   ev.preventDefault();
 };

  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
    $( function() {
      $( '.drag' ).draggable();
    } );
  };

 function drop (ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    var el = ev.target;

      if (!el.classList.contains('P_newPage'+pg+'') ){
       el = ev.target.parentNode;
       ev.target.remove();  
      }
    el.appendChild(document.getElementById(data).cloneNode(true));

       var bg = document.getElementById(data).src;
       
       var BGSplit = bg.split('/');
       var host = BGSplit[0] + "//" + BGSplit[2] + "/";
       var newbg = bg.replace(host, '');
       var scrapbookid = $('#scrapbookid').text(); 
       var actPG = document.querySelector("#P_workspacediv[style*='display: block;']");
       var actPGClass = actPG.className;
       var PGN = actPGClass.replace(/\D/g,'');

          $.ajaxSetup({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({ 
               data: {'scrapbookid': scrapbookid, 'pgNum': PGN, 'newbg': newbg },
               method:'GET',
               url:'/save/scrapbookpage',
               async: false,
               cache:false,
               success: function(data) { 
                 console.log(data);
                  $('#scrapbookpagesid_pageP'+PGN).text(data.scrapbookpagesid);
                  $('#scrapbookid').text(data.scrapbookid);
               }               
          }); 
          
  };
// DROP AND AUTO SAVE BACKGROUND 

// DRAG AND AUTO SAVE EMBELLISHMENTS
  counter = 0;
  $(".drag").draggable({
    helper:'clone',
    containment: APclass,

      //When first dragged
      stop:function(ev, ui) {
        var pos=$(ui.helper).offset();
        objName = "#clonediv"+counter
        $(objName).css({"left":pos.left,"top":pos.top});
        $(objName).removeClass("drag");

          //When an existiung object is dragged
          $(objName).draggable({
            containment: 'parent',
            stop:function(ev, ui) {

                var pos=$(ui.helper).offset();
                var elementCopy = $(this).attr("id");
                var user_scrapbookelementsrc = $(this).attr("src");
                          
                var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
                var ActivePageClass = ActivePage.className;
                var PageNumber = ActivePageClass.replace(/\D/g,'');
                
                var user_scrapbookelementxposition = $(this).css("left");
                var user_scrapbookelementyposition = $(this).css("top");    

                var user_scrapbookpagesid = $('#scrapbookpagesid_pageP'+PageNumber).text();  
                var user_scrapbookid = $('#scrapbookid').text(); 
                var getBASE = user_scrapbookelementsrc.includes("data:image/jpeg;base64,");

                var elementUnique_ID = $(this).attr("value");

                $('#deleteIMG'+elementUnique_ID).css({'top': user_scrapbookelementyposition,'left': user_scrapbookelementxposition});

                  if (user_scrapbookpagesid != ' '){
                           var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
                           var ActivePageClass = ActivePage.className;
                           var PageNumber = ActivePageClass.replace(/\D/g,'');

                            if(getBASE == true){
                           
                              var user_scrapbookelementsrc =  window.UploadedImageInputSRC;
                              var user_scrapbookelementsrc = "img/image_uploads/" + user_scrapbookelementsrc;
                              console.log(user_scrapbookelementsrc);

                              $.ajaxSetup({
                                headers: {
                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                              });user_scrapbookelementsrc

                              $.ajax({ 
                                  data: { 'elementCopy':elementCopy, 'user_scrapbookpagesid': user_scrapbookpagesid, 'user_scrapbookid': user_scrapbookid, 'user_scrapbookelementsrc': user_scrapbookelementsrc, 'user_scrapbookpagenumber':PageNumber, 'user_scrapbookelementxposition': user_scrapbookelementxposition, 'user_scrapbookelementyposition': user_scrapbookelementyposition },
                                  method:'GET',
                                  url:'/saveElement',
                                  cache:false,
                                  success: function(data) { 
                                    console.log(data);

                                    var elementid = data.scrapboookelementid;
                                    
                                    var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
                                    var ActivePageClass = ActivePage.className;
                                    var PageNumber = ActivePageClass.replace(/\D/g,'');
                                    var spid = $('#scrapbookpagesid_pageP'+PageNumber).text();

                                    $('#clonediv'+counter).attr("value",elementid);
                                    
                                    var  deleteIMG_id = "deleteIMG"+data.scrapboookelementid;
                                    var elementvalue = data.scrapboookelementid;
                                    

                                    $("#deleteIMG"+counter).attr({ id:"deleteIMG"+elementid, onClick:"DeleteLoadedEmblems_P('"+deleteIMG_id+"','"+elementvalue+"','"+spid+"')" });
                                  
                                  }
                              });
                            }

                             else
                             {
                                $.ajaxSetup({
                                headers: {
                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                              });

                              $.ajax({ 
                                  data: {'elementCopy':elementCopy, 'user_scrapbookpagesid': user_scrapbookpagesid, 'user_scrapbookid': user_scrapbookid, 'user_scrapbookelementsrc': user_scrapbookelementsrc, 'user_scrapbookpagenumber':PageNumber, 'user_scrapbookelementxposition': user_scrapbookelementxposition, 'user_scrapbookelementyposition': user_scrapbookelementyposition },
                                  method:'GET',
                                  url:'/saveElement',
                                  cache:false,
                                  success: function(data) { 
                                    console.log(data);

                                    var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
                                    var ActivePageClass = ActivePage.className;
                                    var PageNumber = ActivePageClass.replace(/\D/g,'');
                                    var spid = $('#scrapbookpagesid_pageP'+PageNumber).text();

                                    var elementid = data.scrapboookelementid;
                                    $('#clonediv'+counter).attr("value",elementid);
                                    
                                    var  deleteIMG_id = "deleteIMG"+data.scrapboookelementid;
                                    var elementvalue = data.scrapboookelementid;
                                    

                                    $("#deleteIMG"+counter).attr({ id:"deleteIMG"+elementid, onClick:"DeleteLoadedEmblems_P('"+deleteIMG_id+"','"+elementvalue+"','"+spid+"')" });

                                  }
                              });
                            }
                  }  
              }
          });
      }
  });   
// DRAG AND AUTO SAVE EMBELLISHMENTS

// DELETE EMBELLISHMENT
  function DeleteLoadedEmblems_P( span,elementvalue,spid ){

    var user_scrapbookpagesid = spid; 
    var removeEmbellishment = elementvalue;
    
    $("#"+span).prev().remove();
    $("#"+span).remove();

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({ 
          data: { 'removeEmbellishment':removeEmbellishment, 'user_scrapbookpagesid':user_scrapbookpagesid },
          method:'GET', 
          url:'/deleteElement',
          cache:false,
          success: function(data) { 
            console.log(data);
          }
      });
  };
// DELETE EMBELLISHMENT


// NEW COUNTER
  var reCountDragged= $('.draggedElemEdit');

  // store to array '.draggedElemenEdit' elements
  var a = 1;
  var allDraggedElements = new Array();
  for(var i=0;i<reCountDragged.length;i++)
  {
    var currentD = $(reCountDragged[i]).attr('id');
    var currentD_lastnum = currentD.replace(/\D/g,'');
    var currentCounter = parseInt(currentD_lastnum);
      allDraggedElements[i]=currentCounter;
  }
  // store to array '.draggedElemenEdit' elements

  // find biggest number
    var largest = 0;
    for (var x=0; x<allDraggedElements.length; x++) {
      if (allDraggedElements[x]>largest) {
          largest = allDraggedElements[x];
      }
    }
  // find biggest number

  // new counter
  counter=largest+1;
  // new counter

  console.log("Array of Elements"+allDraggedElements);
  console.log("Lagest Number From Elements"+largest);
  console.log("New Counter: "+counter);
// NEW COUNTER


// DROP EMBELLISHMENT
  $(ActivePage).droppable({    
      drop: function(ev, ui) {
      hoverClass: "dropHighlight"
      console.log(counter);
        if (ui.helper.attr('id').search(/drag[32-60]/) != -1){
            
            console.log($(this).id);

            counter++;
            var element=$(ui.draggable).clone();
            element.addClass("tempclass");
            $(this).append(element);

            $(".tempclass").attr("id","clonediv"+counter);
            $("#clonediv"+counter).removeClass("tempclass");
            draggedNumber = ui.helper.attr('id').search(/drag([32-60])/);
            itemDragged = "dragged" + RegExp.$1;
            console.log(itemDragged);
            $("#clonediv"+counter).addClass(itemDragged);

            // DELETE BUTTON 
            var closeSpan = $('<span id="deleteIMG'+counter+'" class="deleteIMG">&times;</span>'); 
            $('#clonediv'+counter).after(closeSpan);
          // DELETE BUTTON 
        }
    }
  });
// DROP EMBELLISHMENT

// ADD PAGE AND ADD TEXT INPUT
 pagecounter = $('#pagenumber_savedP').text();
 window.pg = parseInt(pagecounter);

 // BLANK PAGE
 $("#addPage").click(function(){
          
      pg = pg + 1;
      $('#pagenumber_savedP').text(pg);

      if (pg == 2) {                  
        $('.P_newPage1').toggle("slide", {direction: "left" }, 500, function (){
            
            // new page
            var newpage = $('<div id="P_workspacediv" class="P_newPage'+pg+'" ondrop="drop(event)" ondragover="allowDrop(event)" style="display: block;"></div>');
            newpage.appendTo('.portrait');          
            // new page

            // new add text button
            $('.button_addtext-portrait').addClass('hidden');
            var newpageAddTextButton = $('<button id="createPad-portrait'+pg+'" onclick="addText_P();" class="button_addtext-portrait">ADD TEXT</button>'); 
            newpageAddTextButton.appendTo('.firstAddTextButton');
            // new add text button

            // page scrapbookpageid
            var scrapbookpagesid_containter = $('<p id="scrapbookpagesid_pageP'+pg+'" class="scrapbookpagesid_pageP hidden"></p>');
            $(newpage).append(scrapbookpagesid_containter);
            // page scrapbookpageid
            
            // FOR PAGE NUMEBER COUNTER
              $('#pageNUM_P').text("Page Number: "+pg);
            // FOR PAGE NUMEBER COUNTER
             
          // DROPPABLE EMBELLISHMENT
            var ActivePageDx = document.querySelector("#P_workspacediv[style*='display: block;']");
             $(ActivePageDx).droppable({    
                drop: function(ev, ui) {
                  if (ui.helper.attr('id').search(/drag[32-60]/) != -1){

                      counter++;
                      var element=$(ui.draggable).clone();
                      element.addClass("tempclass");
                      $(this).append(element);

                      $(".tempclass").attr("id","clonediv"+counter);
                      $("#clonediv"+counter).removeClass("tempclass");
                      draggedNumber = ui.helper.attr('id').search(/drag([32-60])/);
                      itemDragged = "dragged" + RegExp.$1;
                      console.log(itemDragged);
                      $("#clonediv"+counter).addClass(itemDragged);

                      // DELETE BUTTON 
                      var closeSpan = $('<span id="deleteIMG'+counter+'" class="deleteIMG">&times;</span>'); 
                      $('#clonediv'+counter).after(closeSpan);
                      // DELETE BUTTON
                    }
                }
              });
          // DROPPABLE EMBELLISHMENT
       
        });      
      } 

      else {       
              var LcurrentPage = document.querySelector("#P_workspacediv[style*='display: block;']");

              // FOR PAGE NUMEBER COUNTER
                $('#pageNUM_P').text("Page Number: "+pg);
              // FOR PAGE NUMEBER COUNTER     

                $(LcurrentPage).toggle("slide", {direction: "left" }, 500, function () { 
                 
                // new page
                var newpage = $('<div id="P_workspacediv" class="P_newPage'+pg+'" ondrop="drop(event)" ondragover="allowDrop(event)" style="display: block;"></div>');     
                newpage.appendTo('.portrait');
                // new page
                
                  // new add text button
                  $('.button_addtext-portrait').addClass('hidden');
                  var newpageAddTextButton = $('<button id="createPad-portrait'+pg+'" onclick="addText_P();" class="button_addtext-portrait" >ADD TEXT</button>'); 
                  newpageAddTextButton.appendTo('.firstAddTextButton')
                  // new add text button

                  // page scrapbookpageid
                  var scrapbookpagesid_containter = $('<p id="scrapbookpagesid_pageP'+pg+'" class="scrapbookpagesid_pageP hidden"></p>');
                  $(newpage).append(scrapbookpagesid_containter);
                  // page scrapbookpageid
                         
              var ActivePageDx = document.querySelector("#P_workspacediv[style*='display: block;']");
                   $(ActivePageDx).droppable({    
                      drop: function(ev, ui) {
                        if (ui.helper.attr('id').search(/drag[32-60]/) != -1){

                            counter++;
                            var element=$(ui.draggable).clone();
                            element.addClass("tempclass");
                            $(this).append(element);

                            $(".tempclass").attr("id","clonediv"+counter);
                            $("#clonediv"+counter).removeClass("tempclass");
                            draggedNumber = ui.helper.attr('id').search(/drag([32-60])/);
                            itemDragged = "dragged" + RegExp.$1;
                            console.log(itemDragged);
                            $("#clonediv"+counter).addClass(itemDragged);

                                  // DELETE BUTTON 
                                  var closeSpan = $('<span id="deleteIMG'+counter+'" class="deleteIMG">&times;</span>'); 
                                  $('#clonediv'+counter).after(closeSpan);
                                // DELETE BUTTON 
                          }
                      }
                    });
                });
      }
  });
 // BLANK PAGE

 // TEMPLATE PAGE
  $("li[id*='templateBG']").click(function(){
            
    pg = pg + 1;
    $('#pagenumber_savedP').text(pg);

          var bgTemplate = $(this).find("img.blankImage_p").attr("src");


      if (pg == 2) {                  
        $('.P_newPage1').toggle("slide", {direction: "left" }, 500, function (){
            
            // new page
            var newpage = $('<div id="P_workspacediv" class="P_newPage'+pg+'" ondrop="drop(event)" ondragover="allowDrop(event)" style="display: block;"></div>');
            newpage.appendTo('.portrait');
            // new page

            // new page template BG
            var newIMGTag = $('<img src="'+bgTemplate+'">');
            newIMGTag.appendTo(newpage);          
            // new page template BG
            
            // new add text button
            $('.button_addtext-portrait').addClass('hidden');
            var newpageAddTextButton = $('<button id="createPad-portrait'+pg+'" onclick="addText_P();" class="button_addtext-portrait">ADD TEXT</button>'); 
            newpageAddTextButton.appendTo('.firstAddTextButton')
            // new add text button

            // page scrapbookpageid
            var scrapbookpagesid_containter = $('<p id="scrapbookpagesid_pageP'+pg+'" class="scrapbookpagesid_pageP hidden"></p>');
            $(newpage).append(scrapbookpagesid_containter);
            // page scrapbookpageid
            
            // FOR PAGE NUMEBER COUNTER
              $('#pageNUM_P').text("Page Number: "+pg);
            // FOR PAGE NUMEBER COUNTER

            //SAVE NEW PAGE 
                var scrapbookid = $('#scrapbookid').text(); 
                var actPG = document.querySelector("#P_workspacediv[style*='display: block;']");
                var actPGClass = actPG.className;
                var PGN = actPGClass.replace(/\D/g,'');

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({ 
                     data: { 'scrapbookid': scrapbookid, 'pgNum': PGN, 'newbg': bgTemplate },
                     method:'GET',
                     url:'/save/scrapbookpage',
                     async: false,
                     cache:false,
                     success: function(data) { 
                       console.log(data);
                        $('#scrapbookpagesid_pageP'+PGN).text(data.scrapbookpagesid);
                        $('#scrapbookid').text(data.scrapbookid);
                     }               
                }); 
            //SAVE NEW PAGE 

            var ActivePageDx = document.querySelector("#P_workspacediv[style*='display: block;']");
             $(ActivePageDx).droppable({    
                drop: function(ev, ui) {
                  if (ui.helper.attr('id').search(/drag[32-60]/) != -1){

                      counter++;
                      var element=$(ui.draggable).clone();
                      element.addClass("tempclass");
                      $(this).append(element);

                      $(".tempclass").attr("id","clonediv"+counter);
                      $("#clonediv"+counter).removeClass("tempclass");
                      draggedNumber = ui.helper.attr('id').search(/drag([32-60])/);
                      itemDragged = "dragged" + RegExp.$1;
                      console.log(itemDragged);
                      $("#clonediv"+counter).addClass(itemDragged);

                        // DELETE BUTTON 
                          var closeSpan = $('<span id="deleteIMG'+counter+'" class="deleteIMG">&times;</span>'); 
                          $('#clonediv'+counter).after(closeSpan);
                        // DELETE BUTTON
                    }
                }
              });
       
        });      
      } 

      else {       
        // FOR PAGE NUMEBER COUNTER
          $('#pageNUM_P').text("Page Number: "+pg);
        // FOR PAGE NUMEBER COUNTER              

          var RcurrentPage = document.querySelector("#P_workspacediv[style*='display: block;']");

          $(RcurrentPage).toggle("slide", {direction: "left" }, 500, function () { 
            
            // new page
            var newpage = $('<div id="P_workspacediv" class="P_newPage'+pg+'" ondrop="drop(event)" ondragover="allowDrop(event)" style="display: block;"></div>');     
            newpage.appendTo('.portrait');
            // new page
            
            // new page template BG
            var newIMGTag = $('<img src="'+bgTemplate+'">');
            newIMGTag.appendTo(newpage);
            // new page template BG

           // new add text button
            $('.button_addtext-portrait').addClass('hidden');
            var newpageAddTextButton = $('<button id="createPad-portrait'+pg+'" onclick="addText_P();" class="button_addtext-portrait">ADD TEXT</button>'); 
            newpageAddTextButton.appendTo('.firstAddTextButton');
            // new add text button  

            // page scrapbookpageid
            var scrapbookpagesid_containter = $('<p id="scrapbookpagesid_pageP'+pg+'" class="scrapbookpagesid_pageP hidden"></p>');
            $(newpage).append(scrapbookpagesid_containter);
            // page scrapbookpageid
            
            // FOR PAGE NUMEBER COUNTER
              $('#pageNUM_P').text("Page Number: "+pg);
            // FOR PAGE NUMEBER COUNTER
            
              //SAVE NEW PAGE 
                  var scrapbookid = $('#scrapbookid').text(); 
                  var actPG = document.querySelector("#P_workspacediv[style*='display: block;']");
                  var actPGClass = actPG.className;
                  var PGN = actPGClass.replace(/\D/g,'');

                  $.ajaxSetup({
                      headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });

                  $.ajax({ 
                       data: { 'scrapbookid': scrapbookid, 'pgNum': PGN, 'newbg': bgTemplate },
                       method:'GET',
                       url:'/save/scrapbookpage',
                       async: false,
                       cache:false,
                       success: function(data) { 
                         console.log(data);
                          $('#scrapbookpagesid_pageP'+PGN).text(data.scrapbookpagesid);
                          $('#scrapbookid').text(data.scrapbookid);
                       }               
                  }); 
              //SAVE NEW PAGE 
                   
              var ActivePageDx = document.querySelector("#P_workspacediv[style*='display: block;']");
                   $(ActivePageDx).droppable({    
                      drop: function(ev, ui) {
                        if (ui.helper.attr('id').search(/drag[32-60]/) != -1){


                            counter++;
                            var element=$(ui.draggable).clone();
                            element.addClass("tempclass");
                            $(this).append(element);

                            $(".tempclass").attr("id","clonediv"+counter);
                            $("#clonediv"+counter).removeClass("tempclass");
                            draggedNumber = ui.helper.attr('id').search(/drag([32-60])/);
                            itemDragged = "dragged" + RegExp.$1;
                            console.log(itemDragged);
                            $("#clonediv"+counter).addClass(itemDragged);
                          
                        // DELETE BUTTON 
                          var closeSpan = $('<span id="deleteIMG'+counter+'" class="deleteIMG">&times;</span>'); 
                          $('#clonediv'+counter).after(closeSpan);
                        // DELETE BUTTON 
                          }
                      }
                    });
          });
      }
  });
 // TEMPLATE PAGE
// ADD PAGE AND ADD TEXT INPUT

// NEXT PAGE
  $("#P_rightpage").click(function(){

    var LcurrentPage = document.querySelector("#P_workspacediv[style*='display: block;']");      
    var nextL = $(LcurrentPage).next();

     var APclass = LcurrentPage.className;

     if ($(LcurrentPage).next().length == 0) {
        nextL = $("#P_workspacediv:first");
    }

      $(LcurrentPage).hide();
      $(nextL).show();
      $(nextL).css("display","block");

    var nextPT = $(nextL).attr('class');
    var pgNEXT = nextPT.replace(/\D/g,'');
    // FOR PAGE NUMEBER COUNTER
        $('#pageNUM_P').text("Page Number: "+pgNEXT);
    // FOR PAGE NUMEBER COUNTER

    // DROP EMBELLISHMENT
      $(nextL).droppable({    
          drop: function(ev, ui) {
          hoverClass: "dropHighlight"

            if (ui.helper.attr('id').search(/drag[32-60]/) != -1){
                
                counter++;
                var element=$(ui.draggable).clone();
                element.addClass("tempclass");
                $(this).append(element);


                $(".tempclass").attr("id","clonediv"+counter);
                $("#clonediv"+counter).removeClass("tempclass");
                draggedNumber = ui.helper.attr('id').search(/drag([32-60])/);
                itemDragged = "dragged" + RegExp.$1;
                console.log(itemDragged);
                $("#clonediv"+counter).addClass(itemDragged);

                 // DELETE BUTTON 
                  var closeSpan = $('<span id="deleteIMG'+counter+'" class="deleteIMG">&times;</span>'); 
                  $('#clonediv'+counter).after(closeSpan);
                // DELETE BUTTON 
            }
        }
      });
    // DROP EMBELLISHMENT

  // RE-DRAG IN NEXT PAGE
    $(".dragged5").draggable({
      containment: APclass,

         stop: function(){
          var elementCopy = $(this).attr("id");
          var user_scrapbookelementsrc = $(this).attr("src");

          var user_scrapbookelementxposition = $(this).css("left");
          var user_scrapbookelementyposition = $(this).css("top"); 

          var user_scrapbookpagesid = $('#scrapbookpagesid').text();  
          var user_scrapbookid = $('#scrapbookid').text(); 
          var getBASE = user_scrapbookelementsrc.includes("data:image/jpeg;base64,");

          var elementUnique_ID = $(this).attr("value");

          $('#deleteIMG'+elementUnique_ID).css({'top': user_scrapbookelementyposition,'left': user_scrapbookelementxposition});          
            
            if (user_scrapbookpagesid != ' '){
               var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
               var ActivePageClass = ActivePage.className;
               var PageNumber = ActivePageClass.replace(/\D/g,'');

                if(getBASE == true){
               
                  var user_scrapbookelementsrc =  window.UploadedImageInputSRC;
                  var user_scrapbookelementsrc = "img/image_uploads/" + user_scrapbookelementsrc;
                  console.log(user_scrapbookelementsrc);

                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                  });user_scrapbookelementsrc

                  $.ajax({ 
                      data: { 'elementCopy':elementCopy, 'user_scrapbookpagesid': user_scrapbookpagesid, 'user_scrapbookid': user_scrapbookid, 'user_scrapbookelementsrc': user_scrapbookelementsrc, 'user_scrapbookpagenumber':PageNumber, 'user_scrapbookelementxposition': user_scrapbookelementxposition, 'user_scrapbookelementyposition': user_scrapbookelementyposition },
                      method:'GET',
                      url:'/saveElement',
                      cache:false,
                      success: function(data) { 
                        console.log(data);
                        var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
                        var ActivePageClass = ActivePage.className;
                        var PageNumber = ActivePageClass.replace(/\D/g,'');
                        var spid = $('#scrapbookpagesid_pageP'+PageNumber).text();

                        var elementid = data.scrapboookelementid;
                        $('#clonediv'+counter).attr("value",elementid);
                        
                        var  deleteIMG_id = "deleteIMG"+data.scrapboookelementid;
                        var elementvalue = data.scrapboookelementid;

                        $("#deleteIMG"+counter).attr({ id:"deleteIMG"+elementid, onClick:"DeleteLoadedEmblems_P('"+deleteIMG_id+"','"+elementvalue+"','"+spid+"')" });
                      }
                  });
                }

                 else
                 {
                    $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                  });

                  $.ajax({ 
                      data: {'elementCopy':elementCopy, 'user_scrapbookpagesid': user_scrapbookpagesid, 'user_scrapbookid': user_scrapbookid, 'user_scrapbookelementsrc': user_scrapbookelementsrc, 'user_scrapbookpagenumber':PageNumber, 'user_scrapbookelementxposition': user_scrapbookelementxposition, 'user_scrapbookelementyposition': user_scrapbookelementyposition },
                      method:'GET',
                      url:'/saveElement',
                      cache:false,
                      success: function(data) { 
                        console.log(data);
                        var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
                        var ActivePageClass = ActivePage.className;
                        var PageNumber = ActivePageClass.replace(/\D/g,'');
                        var spid = $('#scrapbookpagesid_pageP'+PageNumber).text();

                        var elementid = data.scrapboookelementid;
                        $('#clonediv'+counter).attr("value",elementid);
                        
                        var  deleteIMG_id = "deleteIMG"+data.scrapboookelementid;
                        var elementvalue = data.scrapboookelementid;
                        

                        $("#deleteIMG"+counter).attr({ id:"deleteIMG"+elementid, onClick:"DeleteLoadedEmblems_P('"+deleteIMG_id+"','"+elementvalue+"','"+spid+"')" });
                      }
                  });
                }
            }  
         }
    });

  });

  $("#P_leftpage").click(function(){
    var RcurrentPage = document.querySelector("#P_workspacediv[style*='display: block;']");
    var nextR = $(RcurrentPage).prev();
    
    var APclass = RcurrentPage.className;

    if ($(RcurrentPage).prev().length == 0) {
        nextR = $("#P_workspacediv:next");
      }

      $(RcurrentPage).hide();
      $(nextR).show();
      $(nextR).css("display","block");

      var nextPT = $(nextR).attr('class');
      var pgNEXT = nextPT.replace(/\D/g,'');
      // FOR PAGE NUMEBER COUNTER
          $('#pageNUM_P').text("Page Number: "+pgNEXT);
      // FOR PAGE NUMEBER COUNTER

    // DROP EMBELLISHMENT
    $(nextR).droppable({    
        drop: function(ev, ui) {
        hoverClass: "dropHighlight"

          if (ui.helper.attr('id').search(/drag[32-60]/) != -1){
              
              counter++;
              var element=$(ui.draggable).clone();
              element.addClass("tempclass");
              $(this).append(element);


              $(".tempclass").attr("id","clonediv"+counter);
              $("#clonediv"+counter).removeClass("tempclass");
              draggedNumber = ui.helper.attr('id').search(/drag([32-60])/);
              itemDragged = "dragged" + RegExp.$1;
              console.log(itemDragged);
              $("#clonediv"+counter).addClass(itemDragged);

             // DELETE BUTTON 
              var closeSpan = $('<span id="deleteIMG'+counter+'" class="deleteIMG">&times;</span>'); 
              $('#clonediv'+counter).after(closeSpan);
            // DELETE BUTTON 
          }
      }
    });
    // DROP EMBELLISHMENT

    // RE-DRAG IN NEXT PAGE
      $(".dragged5").draggable({
        containment: APclass,

         stop: function(){
          var elementCopy = $(this).attr("id");
          var user_scrapbookelementsrc = $(this).attr("src");

          var user_scrapbookelementxposition = $(this).css("left");
          var user_scrapbookelementyposition = $(this).css("top"); 

          var user_scrapbookpagesid = $('#scrapbookpagesid').text();  
          var user_scrapbookid = $('#scrapbookid').text(); 
          var getBASE = user_scrapbookelementsrc.includes("data:image/jpeg;base64,");

          var elementUnique_ID = $(this).attr("value");

          $('#deleteIMG'+elementUnique_ID).css({'top': user_scrapbookelementyposition,'left': user_scrapbookelementxposition});

            if (user_scrapbookpagesid != ' '){
               var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
               var ActivePageClass = ActivePage.className;
               var PageNumber = ActivePageClass.replace(/\D/g,'');

                if(getBASE == true){
               
                  var user_scrapbookelementsrc =  window.UploadedImageInputSRC;
                  var user_scrapbookelementsrc = "img/image_uploads/" + user_scrapbookelementsrc;
                  console.log(user_scrapbookelementsrc);

                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                  });user_scrapbookelementsrc

                  $.ajax({ 
                      data: { 'elementCopy':elementCopy, 'user_scrapbookpagesid': user_scrapbookpagesid, 'user_scrapbookid': user_scrapbookid, 'user_scrapbookelementsrc': user_scrapbookelementsrc, 'user_scrapbookpagenumber':PageNumber, 'user_scrapbookelementxposition': user_scrapbookelementxposition, 'user_scrapbookelementyposition': user_scrapbookelementyposition },
                      method:'GET',
                      url:'/saveElement',
                      cache:false,
                      success: function(data) { 
                        console.log(data);
                        var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
                        var ActivePageClass = ActivePage.className;
                        var PageNumber = ActivePageClass.replace(/\D/g,'');
                        var spid = $('#scrapbookpagesid_pageP'+PageNumber).text();

                        var elementid = data.scrapboookelementid;
                        $('#clonediv'+counter).attr("value",elementid);
                        
                        var  deleteIMG_id = "deleteIMG"+data.scrapboookelementid;
                        var elementvalue = data.scrapboookelementid;                    
                      }
                  });
                }

                 else
                 {
                    $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                  });

                  $.ajax({ 
                      data: {'elementCopy':elementCopy, 'user_scrapbookpagesid': user_scrapbookpagesid, 'user_scrapbookid': user_scrapbookid, 'user_scrapbookelementsrc': user_scrapbookelementsrc, 'user_scrapbookpagenumber':PageNumber, 'user_scrapbookelementxposition': user_scrapbookelementxposition, 'user_scrapbookelementyposition': user_scrapbookelementyposition },
                      method:'GET',
                      url:'/saveElement',
                      cache:false,
                      success: function(data) { 
                        console.log(data);
                        var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
                        var ActivePageClass = ActivePage.className;
                        var PageNumber = ActivePageClass.replace(/\D/g,'');
                        var spid = $('#scrapbookpagesid_pageP'+PageNumber).text();

                        var elementid = data.scrapboookelementid;
                        $('#clonediv'+counter).attr("value",elementid);
                        
                        var  deleteIMG_id = "deleteIMG"+data.scrapboookelementid;
                        var elementvalue = data.scrapboookelementid;
                                    
                      }
                  });
                }
            }  
         }
      });
  });
// NEXT PAGE

// REDRAG SAVED ELEMENTS
  $('.draggedElemEdit').draggable({
      containment: APclass,
      stop: function(){
          
          var elementCopy = $(this).attr("id");
          var user_scrapbookelementsrc = $(this).attr("src");

          var user_scrapbookelementxposition = $(this).css("left");
          var user_scrapbookelementyposition = $(this).css("top"); 
          var user_scrapbookpageelementid = $(this).attr('value');

          var elementUnique_ID = $(this).attr("value");

          $('#deleteIMG'+elementUnique_ID).css({'top': user_scrapbookelementyposition,'left': user_scrapbookelementxposition});

            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({ 
                data: {'elementCopy':elementCopy, 'user_scrapbookpageelementid':user_scrapbookpageelementid, 
                        'user_scrapbookelementsrc': user_scrapbookelementsrc, 'user_scrapbookelementxposition': user_scrapbookelementxposition, 
                        'user_scrapbookelementyposition': user_scrapbookelementyposition },
                method:'GET',
                url:'/editElement',
                cache:false,
                success: function(data) { 
                  console.log(data);
                  var ActivePage = document.querySelector("#P_workspacediv[style*='display: block;']");
                  var ActivePageClass = ActivePage.className;
                  var PageNumber = ActivePageClass.replace(/\D/g,'');
                  var spid = $('#scrapbookpagesid_pageP'+PageNumber).text();

                  var elementid = data.scrapboookelementid;
                  $('#clonediv'+counter).attr("value",elementid);
                  
                  var  deleteIMG_id = "deleteIMG"+data.scrapboookelementid;
                  var elementvalue = data.scrapboookelementid;
                                    
                }
            });    
      }  
  });
// REDRAG SAVED ELEMENTS