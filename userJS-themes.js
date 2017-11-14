// SPECIAL THEMES
  function submit_PreviewForm(id) {
    document.getElementById('previewThemeForm'+id).submit();   
  }
// SPECIAL THEMES

// SYSTEM THEMES
  function submit_ThemeForm(id) {
    document.getElementById('themeForm'+id).submit();   
  }
// SYSTEM THEMES


// GO TO THEMES SECTION

$('#navbar-Themes ul li a').on('click',function(event){
   var $anchor = $(this);
   $('html, body').animate({
     scrollTop: $($anchor.attr('href')).offset().top + "px"
   }, 1500);
   event.preventDefault();
});

// GO TO THEMES SECTION
