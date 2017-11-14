

  $(document).ready(function () {
     document.getElementById("previewPage_button").click();
      $('.specialTheme_Content').css("opacity",".2");
  });

setInterval(function() {
 $("#bg_slider > div:gt(0)").fadeIn(1000);
  $('#bg_slider > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#bg_slider');
}, 3000);

setInterval(function() {
 $("#bd_slider > div:gt(0)").fadeIn(1000);
  $('#bd_slider > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#bd_slider');
}, 3000);


setInterval(function() {
 $("#em_slider > div:gt(0)").fadeIn(1000);
  $('#em_slider > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#em_slider');
}, 3000);