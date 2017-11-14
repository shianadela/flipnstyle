$(".border-nav").click(function(){
  $('.bd').removeClass('hidden');
  $('.bg').addClass('hidden');
  $('.em').addClass('hidden'); 
});

$(".background-nav").click(function(){
  $('.bg').removeClass('hidden');
  $('.bd').addClass('hidden');
  $('.em').addClass('hidden'); 
});

$(".embellishments-nav").click(function(){
  $('.em').removeClass('hidden');
  $('.bg').addClass('hidden');
  $('.bd').addClass('hidden'); 
});

var CheckApprove = function() {
    if ($('.notes').length > 0) {  
      document.getElementById("ApproveTheme_button").disabled = true;
    }
    else{
      document.getElementById("ApproveTheme_button").disabled = false;
    }
};

var CheckOnHold = function() {
    if ($('.notes').length > 0) {  
      document.getElementById("OnHoldTheme_button").disabled = false;
    }
    else{
      document.getElementById("OnHoldTheme_button").disabled = true;
    }
};

setInterval(CheckApprove, 1000);
setInterval(CheckOnHold, 1000);

// HOLD IMAGE
  function holdIMG (imgid, imgsrc){
    if( $('.status'+imgid).text() == 'Pending'){
      $('.status'+imgid).text('On Hold'); 

      var elemstats = document.getElementById('status'+imgid).nextElementSibling;
      elemstats.innerHTML = "On Hold";
      

      $('#HOLDbutton'+imgid).css({"background-color":"#cd5d67", "color":"white"});

      var searchbg = imgsrc.search("background/");
      var searchbd = imgsrc.search("border/");
      var searchem = imgsrc.search("embellishments/");
       
        if(searchbg != -1){
          var popIMGsrc = imgsrc.split('background/')[1];
          var newNote = $('<p class="notes" id="IMGnote'+imgid+'"> - ' + popIMGsrc +' is on hold</p>' );
          newNote.appendTo('.onholdNotes-container');
        }

        if(searchbd != -1){
          var popIMGsrc = imgsrc.split('border/')[1];
          var newNote = $('<p class="notes" id="IMGnote'+imgid+'"> - ' + popIMGsrc +' is on hold</p>' );
          newNote.appendTo('.onholdNotes-container');
        }

        if(searchem != -1){
          var popIMGsrc = imgsrc.split('embellishments/')[1];
          var newNote = $('<p class="notes" id="IMGnote'+imgid+'"> - ' + popIMGsrc +' is on hold</p>' );
          newNote.appendTo('.onholdNotes-container');
        }
    }

  else if( $('.status'+imgid).text() == 'On Hold'){
    $('.status'+imgid).text('Pending'); 
    var elemstats = document.getElementById('status'+imgid).nextElementSibling;
    elemstats.innerHTML = "Pending";
    $('#HOLDbutton'+imgid).css({"background-color":"", "color":""});
    $( "#IMGnote"+imgid).remove();
    }
  }
// HOLD IMAGE

// PREVIEW IMAGE
  function imageClick (img){
    $('.themeContent').css("opacity",".4");

     var imageSource = $(img).attr('src');
     console.log(imageSource);

     $('.imagePreview').remove();
      
     var imagePreview = $('<img class="imagePreview" src='+imageSource+'>');
     imagePreview.appendTo('.modal-body');
      
      $(imagePreview).height(466);
      $(imagePreview).width(749);
      $(imagePreview).off();
  }

  $("#imagepreview_modal").on("hidden.bs.modal", function () {
    $('.themeContent').css("opacity","");
  });
// PREVIEW IMAGE

// UPDATE THEME BD
  function updateDesignerThemeBD() {
    var themeid = $(this).attr("value");
      var BD1 = $('.elementstatusBD1').text();
      var BD2 = $('.elementstatusBD2').text();
      var BD3 = $('.elementstatusBD3').text();
      var BD4 = $('.elementstatusBD4').text();
      var BD5 = $('.elementstatusBD5').text();
      var BD6 = $('.elementstatusBD6').text();
      var BD7 = $('.elementstatusBD7').text();
      var BD8 = $('.elementstatusBD8').text();
      var BD9 = $('.elementstatusBD9').text();
      var BD10 = $('.elementstatusBD10').text();

      var idBD1 = $('.elementBDID1').text();
      var idBD2 = $('.elementBDID2').text();
      var idBD3 = $('.elementBDID3').text();
      var idBD4 = $('.elementBDID4').text();
      var idBD5 = $('.elementBDID5').text();
      var idBD6 = $('.elementBDID6').text();
      var idBD7 = $('.elementBDID7').text();
      var idBD8 = $('.elementBDID8').text();
      var idBD9 = $('.elementBDID9').text();
      var idBD10 = $('.elementBDID10').text();

     $.ajax({ 
           data: {'themeid': themeid,
                  'BD1': BD1, 'BD2': BD2, 'BD3': BD3,
                  'BD4': BD4, 'BD5': BD5, 'BD6': BD6,
                  'BD7': BD7, 'BD8': BD8, 'BD9': BD9,
                  'BD10': BD10,
                  'idBD1': idBD1, 'idBD2': idBD2, 'idBD3': idBD3,
                  'idBD4': idBD4, 'idBD5': idBD5, 'idBD6': idBD6,
                  'idBD7': idBD7, 'idBD8': idBD8, 'idBD9': idBD9,
                  'idBD10': idBD10
                },
           method:'GET',
           url:'/update_elementstatusBD',
           async: false,
           cache:false,
           success: function(data) { 
             console.log(data);
              updateDesignerThemeEM();
           }               
      });
  }
// UPDATE THEME BD

// UPDATE THEME EM
  function updateDesignerThemeEM() {
    var themeid = $(this).attr("value");
      var EM1 = $('.elementstatusEM1').text();
      var EM2 = $('.elementstatusEM2').text();
      var EM3 = $('.elementstatusEM3').text();
      var EM4 = $('.elementstatusEM4').text();
      var EM5 = $('.elementstatusEM5').text();
      var EM6 = $('.elementstatusEM6').text();
      var EM7 = $('.elementstatusEM7').text();
      var EM8 = $('.elementstatusEM8').text();
      var EM9 = $('.elementstatusEM9').text();
      var EM10 = $('.elementstatusEM10').text();

      var idEM1 = $('.elementEMID1').text();
      var idEM2 = $('.elementEMID2').text();
      var idEM3 = $('.elementEMID3').text();
      var idEM4 = $('.elementEMID4').text();
      var idEM5 = $('.elementEMID5').text();
      var idEM6 = $('.elementEMID6').text();
      var idEM7 = $('.elementEMID7').text();
      var idEM8 = $('.elementEMID8').text();
      var idEM9 = $('.elementEMID9').text();
      var idEM10 = $('.elementEMID10').text();

     $.ajax({ 
           data: {'themeid': themeid,
                  'EM1': EM1, 'EM2': EM2, 'EM3': EM3,
                  'EM4': EM4, 'EM5': EM5, 'EM6': EM6,
                  'EM7': EM7, 'EM8': EM8, 'EM9': EM9,
                  'EM10': EM10,
                  'idEM1': idEM1, 'idEM2': idEM2, 'idEM3': idEM3,
                  'idEM4': idEM4, 'idEM5': idEM5, 'idEM6': idEM6,
                  'idEM7': idEM7, 'idEM8': idEM8, 'idEM9': idEM9,
                  'idEM10': idEM10
                },
           method:'GET',
           url:'/update_elementstatusEM',
           async: false,
           cache:false,
           success: function(data) { 
             console.log(data);
              updateDesignerTheme();
           }               
      });
  }
// UPDATE THEME EM

// UPDATE THEME
  function updateDesignerTheme() {
    var themeid = $('.themeid').text();

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({ 
         data: { 'themeid': themeid },
         method:'GET',
         url:'/onhold_theme',
         async: false,
         cache:false,
         success: function(data) { 
                if ( data.status == 'ok' ){
                      window.location.replace(data.url);
                    }
         }               
      });         
  }
// UPDATE THEME

//  ON HOLD IMAGES
  $("#OnHoldTheme_button").click(function(){
    var themeid = $(this).attr("value");
        var BG1 = $('.elementstatusBG1').text();
        var BG2 = $('.elementstatusBG2').text();
        var BG3 = $('.elementstatusBG3').text();
        var BG4 = $('.elementstatusBG4').text();
        var BG5 = $('.elementstatusBG5').text();
        var BG6 = $('.elementstatusBG6').text();
        var BG7 = $('.elementstatusBG7').text();
        var BG8 = $('.elementstatusBG8').text();
        var BG9 = $('.elementstatusBG9').text();
        var BG10 = $('.elementstatusBG10').text();

        var idBG1 = $('.elementBGID1').text();
        var idBG2 = $('.elementBGID2').text();
        var idBG3 = $('.elementBGID3').text();
        var idBG4 = $('.elementBGID4').text();
        var idBG5 = $('.elementBGID5').text();
        var idBG6 = $('.elementBGID6').text();
        var idBG7 = $('.elementBGID7').text();
        var idBG8 = $('.elementBGID8').text();
        var idBG9 = $('.elementBGID9').text();
        var idBG10 = $('.elementBGID10').text();

       $.ajax({ 
             data: {'themeid': themeid,
                    'BG1': BG1, 'BG2': BG2, 'BG3': BG3,
                    'BG4': BG4, 'BG5': BG5, 'BG6': BG6,
                    'BG7': BG7, 'BG8': BG8, 'BG9': BG9,
                    'BG10': BG10,
                    'idBG1': idBG1, 'idBG2': idBG2, 'idBG3': idBG3,
                    'idBG4': idBG4, 'idBG5': idBG5, 'idBG6': idBG6,
                    'idBG7': idBG7, 'idBG8': idBG8, 'idBG9': idBG9,
                    'idBG10': idBG10
                  },
             method:'GET',
             url:'/update_elementstatusBG',
             async: false,
             cache:false,
             success: function(data) { 
               console.log(data);
                updateDesignerThemeBD();
             }               
        });
  });
//  ON HOLD IMAGES

//  APPROVE THEME
  $("#ApproveTheme_button").click(function(){

  	var themeid = $(this).attr("value");
  	console.log(themeid);

  	$.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
  	});

  	$.ajax({ 
         data: { 'themeid': themeid },
         method:'GET',
         url:'/approve_theme',
         async: false,
         cache:false,
         success: function(data) { 
            		if ( data.status == 'ok' ){
                      window.location.replace(data.url);
                    }
         }               
    	});
  });
//  APPROVE THEME

// PURCHASE LIST
    function show_more(scrapid) {
        document.getElementById('hidden-first'+scrapid).style.display = 'block';
        document.getElementById('show-less'+scrapid).style.display = 'block';
        document.getElementById('show-more'+scrapid).style.display = 'none';
    }

    function show_less(scrapid) {
        document.getElementById('hidden-first'+scrapid).style.display = 'none';
        document.getElementById('show-less'+scrapid).style.display = 'none';
        document.getElementById('show-more'+scrapid).style.display = 'block';
    }
// PURCHASE LIST

