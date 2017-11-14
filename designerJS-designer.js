
//UPLOAD CALLSRC
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
  function UploadImage(input) {      
        UploadedImageInputSRC = input.files[0].name;
  }
//UPLOAD CALLSRC

//PREVIEW UPLOADED BACKGROUND
    $("#inputBackground1").live("change",function(){
      readURL(this, "#background1");
      UploadImage(this); 
    });


    $("#inputBackground2").live("change",function(){
      readURL(this, "#background2");
      UploadImage(this); 
    });

    $("#inputBackground3").live("change",function(){
      readURL(this, "#background3");
      UploadImage(this); 
    });


    $("#inputBackground4").live("change",function(){
      readURL(this, "#background4");
      UploadImage(this);  
    });

    $("#inputBackground5").live("change",function(){
      readURL(this, "#background5");
      UploadImage(this); 
    });


    $("#inputBackground6").live("change",function(){
      readURL(this, "#background6");
      UploadImage(this);  
    });

    $("#inputBackground7").live("change",function(){
      readURL(this, "#background7");
      UploadImage(this); 
    });

    $("#inputBackground8").live("change",function(){
      readURL(this, "#background8");
      UploadImage(this);  
    });

    $("#inputBackground9").live("change",function(){
      readURL(this, "#background9");
      UploadImage(this); 
    });

    $("#inputBackground10").live("change",function(){
      readURL(this, "#background10");
      UploadImage(this); 
    });
//PREVIEW UPLOADED BACKGROUND

//PREVIEW UPLOADED BORDER
    $("#inputBorder1").live("change",function(){
      readURL(this, "#border1");
      UploadImage(this); 
    });


    $("#inputBorder2").live("change",function(){
      readURL(this, "#border2");
      UploadImage(this); 
    });

    $("#inputBorder3").live("change",function(){
      readURL(this, "#border3");
      UploadImage(this); 
    });


    $("#inputBorder4").live("change",function(){
      readURL(this, "#border4");
      UploadImage(this);  
    });

    $("#inputBorder5").live("change",function(){
      readURL(this, "#border5");
      UploadImage(this); 
    });


    $("#inputBorder6").live("change",function(){
      readURL(this, "#border6");
      UploadImage(this);  
    });

    $("#inputBorder7").live("change",function(){
      readURL(this, "#border7");
      UploadImage(this); 
    });

    $("#inputBorder8").live("change",function(){
      readURL(this, "#border8");
      UploadImage(this);  
    });

    $("#inputBorder9").live("change",function(){
      readURL(this, "#border9");
      UploadImage(this); 
    });

    $("#inputBorder10").live("change",function(){
      readURL(this, "#border10");
      UploadImage(this); 
    });
//PREVIEW UPLOADED BORDER

//PREVIEW UPLOADED EMBELLISHMENTS
    $("#inputEmbellishment1").live("change",function(){
      readURL(this, "#embellishment1");
      UploadImage(this); 
    });


    $("#inputEmbellishment2").live("change",function(){
      readURL(this, "#embellishment2");
      UploadImage(this); 
    });

    $("#inputEmbellishment3").live("change",function(){
      readURL(this, "#embellishment3");
      UploadImage(this); 
    });


    $("#inputEmbellishment4").live("change",function(){
      readURL(this, "#embellishment4");
      UploadImage(this);  
    });

    $("#inputEmbellishment5").live("change",function(){
      readURL(this, "#embellishment5");
      UploadImage(this); 
    });


    $("#inputEmbellishment6").live("change",function(){
      readURL(this, "#embellishment6");
      UploadImage(this);  
    });

    $("#inputEmbellishment7").live("change",function(){
      readURL(this, "#embellishment7");
      UploadImage(this); 
    });

    $("#inputEmbellishment8").live("change",function(){
      readURL(this, "#embellishment8");
      UploadImage(this);  
    });

    $("#inputEmbellishment9").live("change",function(){
      readURL(this, "#embellishment9");
      UploadImage(this); 
    });

    $("#inputEmbellishment10").live("change",function(){
      readURL(this, "#embellishment10");
      UploadImage(this); 
    });
//PREVIEW UPLOADED EMBELLISHMENTS

// ORIGINAL FILE NAME [BG]
  $(document).ready(function() {
      $('#inputBackground1').on('change', function(event) {
          var u_BG1 = event.target.files[0].name;
          $('.u_BG1').text(u_BG1);
          window.themes_bg1 = $('.u_BG1').text();
      });

      $('#inputBackground2').on('change', function(event) {
          var u_BG2 = event.target.files[0].name;
          $('.u_BG2').text(u_BG2);
          window.themes_bg2 = $('.u_BG2').text();
      });

      $('#inputBackground3').on('change', function(event) {
          var u_BG3 = event.target.files[0].name;
          $('.u_BG3').text(u_BG3);
          window.themes_bg3 = $('.u_BG3').text();
      });

       $('#inputBackground4').on('change', function(event) {
          var u_BG4 = event.target.files[0].name;
          $('.u_BG4').text(u_BG4);
          window.themes_bg4 = $('.u_BG4').text();
      });

      $('#inputBackground5').on('change', function(event) {
          var u_BG5 = event.target.files[0].name;
          $('.u_BG5').text(u_BG5);
          window.themes_bg5 = $('.u_BG5').text();
      });

      $('#inputBackground6').on('change', function(event) {
          var u_BG6 = event.target.files[0].name;
          $('.u_BG6').text(u_BG6);
          window.themes_bg6 = $('.u_BG6').text();
      });

       $('#inputBackground7').on('change', function(event) {
          var u_BG7 = event.target.files[0].name;
          $('.u_BG7').text(u_BG7);
          window.themes_bg7 = $('.u_BG7').text();
      });

      $('#inputBackground8').on('change', function(event) {
          var u_BG8 = event.target.files[0].name;
          $('.u_BG8').text(u_BG8);
          window.themes_bg8 = $('.u_BG8').text();
      });

      $('#inputBackground9').on('change', function(event) {
          var u_BG9 = event.target.files[0].name;
          $('.u_BG9').text(u_BG9);
          window.themes_bg9 = $('.u_BG9').text();
      });

      $('#inputBackground10').on('change', function(event) {
          var u_BG10 = event.target.files[0].name;
          $('.u_BG10').text(u_BG10);
          window.themes_bg10 = $('.u_BG10').text();
      });
  });
// ORIGINAL FILE NAME [BG]

// ORIGINAL FILE NAME [BD]
  $(document).ready(function() {
      $('#inputBorder1').on('change', function(event) {
          var u_BD1 = event.target.files[0].name;
          $('.u_BD1').text(u_BD1);
          window.themes_bd1 = $('.u_BD1').text();
      });

      $('#inputBorder2').on('change', function(event) {
          var u_BD2 = event.target.files[0].name;
          $('.u_BD2').text(u_BD2);
          window.themes_bd2 = $('.u_BD2').text();
      });

      $('#inputBorder3').on('change', function(event) {
          var u_BD3 = event.target.files[0].name;
          $('.u_BD3').text(u_BD3);
          window.themes_bd3 = $('.u_BD3').text();
      });

       $('#inputBorder4').on('change', function(event) {
          var u_BD4 = event.target.files[0].name;
          $('.u_BD4').text(u_BD4);
          window.themes_bd4 = $('.u_BD4').text();
      });

      $('#inputBorder5').on('change', function(event) {
          var u_BD5 = event.target.files[0].name;
          $('.u_BD5').text(u_BD5);
          window.themes_bd5 = $('.u_BD5').text();
      });

      $('#inputBorder6').on('change', function(event) {
          var u_BD6 = event.target.files[0].name;
          $('.u_BD6').text(u_BD6);
          window.themes_bd6 = $('.u_BD6').text();
      });

       $('#inputBorder7').on('change', function(event) {
          var u_BD7 = event.target.files[0].name;
          $('.u_BD7').text(u_BD7);
          window.themes_bd7 = $('.u_BD7').text();
      });

      $('#inputBorder8').on('change', function(event) {
          var u_BD8 = event.target.files[0].name;
          $('.u_BD8').text(u_BD8);
          window.themes_bd8 = $('.u_BD8').text();
      });

      $('#inputBorder9').on('change', function(event) {
          var u_BD9 = event.target.files[0].name;
          $('.u_BD9').text(u_BD9);
          window.themes_bd9 = $('.u_BD9').text();
      });

      $('#inputBorder10').on('change', function(event) {
          var u_BD10 = event.target.files[0].name;
          $('.u_BD10').text(u_BD10);
          window.themes_bd10 = $('.u_BD10').text();
      });
  });
// ORIGINAL FILE NAME [BD]

// ORIGINAL FILE NAME [EM]
  $(document).ready(function() {
      $('#inputEmbellishment1').on('change', function(event) {
          var u_EM1 = event.target.files[0].name;
          $('.u_EM1').text(u_EM1);
          window.themes_em1 = $('.u_EM1').text();
      });

      $('#inputEmbellishment2').on('change', function(event) {
          var u_EM2 = event.target.files[0].name;
          $('.u_EM2').text(u_EM2);
          window.themes_em2 = $('.u_EM2').text();
      });

      $('#inputEmbellishment3').on('change', function(event) {
          var u_EM3 = event.target.files[0].name;
          $('.u_EM3').text(u_EM3);
          window.themes_em3 = $('.u_EM3').text();
      });

       $('#inputEmbellishment4').on('change', function(event) {
          var u_EM4 = event.target.files[0].name;
          $('.u_EM4').text(u_EM4);
          window.themes_em4 = $('.u_EM4').text();
      });

      $('#inputEmbellishment5').on('change', function(event) {
          var u_EM5 = event.target.files[0].name;
          $('.u_EM5').text(u_EM5);
          window.themes_em5 = $('.u_EM5').text();
      });

      $('#inputEmbellishment6').on('change', function(event) {
          var u_EM6 = event.target.files[0].name;
          $('.u_EM6').text(u_EM6);
          window.themes_em6 = $('.u_EM6').text();
      });

       $('#inputEmbellishment7').on('change', function(event) {
          var u_EM7 = event.target.files[0].name;
          $('.u_EM7').text(u_EM7);
          window.themes_em7 = $('.u_EM7').text();
      });

      $('#inputEmbellishment8').on('change', function(event) {
          var u_EM8 = event.target.files[0].name;
          $('.u_EM8').text(u_EM8);
          window.themes_em8 = $('.u_EM8').text();
      });

      $('#inputEmbellishment9').on('change', function(event) {
          var u_EM9 = event.target.files[0].name;
          $('.u_EM9').text(u_EM9);
          window.themes_em9 = $('.u_EM9').text();
      });

      $('#inputEmbellishment10').on('change', function(event) {
          var u_EM10 = event.target.files[0].name;
          $('.u_EM10').text(u_EM10);
          window.themes_em10 = $('.u_EM10').text();
      });
  });
// ORIGINAL FILE NAME [EM]

// SUBMIT THEME
  $("#submitTheme_click").click(function(){
    $('#savingLoader').show();

    window.designerid = $('#designer_loggedID').text();
    var themeTitle = document.getElementById('themeTitle').value;
    var status = "Pending";

    var themePrice = $('input[type=number][name=price]').val();

          $.ajaxSetup({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          // SAVE DESIGNER THEME
          $.ajax({ 
               data: { 'theme_id': designerid, 'theme_title': themeTitle, 'theme_price': themePrice, 'status': status },
               method:'GET',
               url:'/storeDesignerTheme',
               async: false,
               cache:false,
               success: function(data) { 
                    console.log(data);

                   $('.themeid').text(data.themeid);                    
                   saveThemeBG();
               }               
          });
          // SAVE DESIGNER THEME
    
    // $('.Loader').addClass('hidden');

  });
// SUBMIT THEME

// SAVE THEME BG
  function saveThemeBG() {
    $('#savingLoader').show();
    var passed_themeid = $('.themeid').text();
     $.ajax({ 
           data: { 'theme_id': passed_themeid,
                  'themes_bg1': themes_bg1, 'themes_bg2': themes_bg2, 'themes_bg3': themes_bg3,
                  'themes_bg4': themes_bg4, 'themes_bg5': themes_bg5, 'themes_bg6': themes_bg6,
                  'themes_bg7': themes_bg7, 'themes_bg8': themes_bg8, 'themes_bg9': themes_bg9,
                  'themes_bg10': themes_bg10
                },
           method:'GET',
           url:'/storeDesignerThemesBG',
           async: false,
           cache:false,
           success: function(data) { 
             console.log(data);
              saveThemeBD();
           }               
      });
  }
// SAVE THEME BG

// SAVE THEME BD
  function saveThemeBD() {
    $('#savingLoader').show();
    var passed_themeid = $('.themeid').text();
     $.ajax({ 
           data: { 'theme_id': passed_themeid,
                  'themes_bd1': themes_bd1, 'themes_bd2': themes_bd2, 'themes_bd3': themes_bd3,
                  'themes_bd4': themes_bd4, 'themes_bd5': themes_bd5, 'themes_bd6': themes_bd6,
                  'themes_bd7': themes_bd7, 'themes_bd8': themes_bd8, 'themes_bd9': themes_bd9,
                  'themes_bd10': themes_bd10
                },
           method:'GET',
           url:'/storeDesignerThemesBD',
           async: false,
           cache:false,
           success: function(data) { 
             console.log(data);
              saveThemeEM();
           }               
      });
  }
// SAVE THEME BD

// SAVE THEME EM
  function saveThemeEM() {
    $('#savingLoader').show();
    var passed_themeid = $('.themeid').text();
    var designerid = $('.designerid').text();
     $.ajax({ 
           data: { 'theme_id': passed_themeid, 'designerid': designerid,
                  'themes_em1': themes_em1, 'themes_em2': themes_em2, 'themes_em3': themes_em3,
                  'themes_em4': themes_em4, 'themes_em5': themes_em5, 'themes_em6': themes_em6,
                  'themes_em7': themes_em7, 'themes_em8': themes_em8, 'themes_em9': themes_em9,
                  'themes_em10': themes_em10
                },
           method:'GET',
           url:'/storeDesignerThemesEM',
           async: false,
           cache:false,
           success: function(data) { 
             console.log(data);
                  $('#NewSubmissionForm').submit();
           }               
      });
  }
// SAVE THEME EM