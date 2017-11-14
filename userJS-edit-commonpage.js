// LAUNCH MODAL (PAGE SIZE)
  $(document).ready(function () {

    var pageHeight = $('.scrapbookHeight').text();
    var pageWidth = $('.scrapbookWidth').text(); 

    if (pageHeight==466 & pageWidth==749){
      
      $.getScript("../js/workspaceJS/User/Edit Scrapbook/userJS-edit-landscapepage.js");
      
      $('.LANDSCAPE').removeClass('hidden');
      $('.nextpage_L').removeClass('hidden'); 
      $('.dragbg_l').removeClass('hidden'); 
      $('.themeImage_l').removeClass('hidden'); 
      $('.L_li').removeClass('hidden'); 
      $('.blankImage_l').removeClass('hidden'); 
      $('.pageNUM').removeClass('hidden');
      $('.button_addtext-landscape').removeClass('hidden'); 
    }
    
    else if (pageHeight==749 & pageWidth==505){
      
      $.getScript("../js/workspaceJS/User/Edit Scrapbook/userJS-edit-portraitpage.js");

      $('.PORTRAIT').removeClass('hidden');
      $('.P_newPage1').removeClass('hidden');
      $('.nextpage_P').removeClass('hidden');
      $('.dragbg_p').removeClass('hidden');
      $('.themeImage_p').removeClass('hidden');  
      $('.P_li').removeClass('hidden'); 
      $('.blankImage_p').removeClass('hidden'); 
      $('.pageNUM_P').removeClass('hidden');
      $('.button_addtext-portrait').removeClass('hidden'); 

    }
  });
// LAUNCH MODAL (PAGE SIZE)