// SAVING LOADER
  $("#SaveScrapbookPage").click(function (){
    $('#savingLoader').show();
    setTimeout(function(){
    $('#savingLoader').hide();
      },1000);
  });
// SAVING LOADER

// HIDE ADD PAGE MODAL
  $(".blankImage").click(function(){
    $('#addpage_modal').hide(1000);
    $('body').removeClass('modal-open');
  });

  $(".blankImage_l").click(function(){
    $('#addpage_modal').hide(1000);
    $('body').removeClass('modal-open');
  });

  $(".blankImage_p").click(function(){
    $('#addpage_modal').hide(1000);
    $('body').removeClass('modal-open');
  });
// HIDE ADD PAGE MODAL

// SHOW ADD PAGE MODAL
  $(".button_addpage").click(function(){
    $('#addpage_modal').show(1000);
  });
// SHOW ADD PAGE MODAL

// LAUNCH MODAL (PAGE SIZE)
  $(document).ready(function () {
     document.getElementById("PageSize_button").click();
    $('#content').css("opacity",".2");
  });
// LAUNCH MODAL (PAGE SIZE)

// HIDE PAGE WITH SIZE (LANDSCAPE)
  $("#landscapePage_click").click(function(){
      $.getScript("../js/workspaceJS/User/Scrapbook/userJS-scrapbook-landscapepage.js");

      $('.box2').height(725);
      $('.panel-default').css("margin-top", "-25%");
    $('.scrapbookHeight').text('466');
    $('.scrapbookWidth').text('749');  

    $('#content').css("opacity","5");
    $('#pageSize_modal').hide(1000);
    $('#pageSize_modal-backdrop').remove(); 
    $('body').removeClass('modal-open');
    $('.LANDSCAPE').removeClass('hidden');
    $('.nextpage_L').removeClass('hidden'); 
    $('.dragbg_l').removeClass('hidden'); 
    $('.themeImage_l').removeClass('hidden');
    $('.button_addtext-landscape').removeClass('hidden'); 
    $('.L_li').removeClass('hidden'); 
    $('.blankImage_l').removeClass('hidden'); 
    $('.pageNUM').removeClass('hidden');
  });
// HIDE PAGE WITH SIZE (LANDSCAPE)

// HIDE PAGE WITH SIZE (PORTRAIT)
  $("#portraitPage_click").click(function(){
      $.getScript("../js/workspaceJS/User/Scrapbook/userJS-scrapbook-portraitpage.js");

    $('.scrapbookHeight').text('749');
    $('.scrapbookWidth').text('505');  
    
      $('.box2').height(813);
      $('.panel-default').css("margin-top", "-17%");

    $('#content').css("opacity","5");
    $('#pageSize_modal').hide(1000);
    $('#pageSize_modal-backdrop').remove(); 
    $('body').removeClass('modal-open');
    $('.PORTRAIT').removeClass('hidden');
    $('.P_newPage1').removeClass('hidden');
    $('.nextpage_P').removeClass('hidden');
    $('.dragbg_p').removeClass('hidden');
    $('.themeImage_p').removeClass('hidden');  
    $('.P_li').removeClass('hidden'); 
    $('.blankImage_p').removeClass('hidden'); 
    $('.button_addtext-portrait').removeClass('hidden'); 
    $('.pageNUM_P').removeClass('hidden');
  });
// HIDE PAGE WITH SIZE (PORTRAIT)
