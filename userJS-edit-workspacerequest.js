

// ADD TITLE
$(document).on('click','#AddScrapbookTitle',function(){
  
	var user_scrapbooktitle = $('#addtitle').val();

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

  $("#addtitle_modal .close").click();

  $.ajax({ 
   data: { 'user_scrapbooktitle': user_scrapbooktitle },
   method:'GET',
   url:'/set/title',
   cache:false,
   success: function(data) { 
     console.log(data);

           $(".button_addtitle").hide();
           $('#saved_title').text(data.scrapbooktitle);
           $('#scrapbookid').text(data.scrapbookid);
           $('.scrap_title').removeClass('hidden');
         }
       });
});
// ADD TITLE


// EDIT TITLE
$(document).on('click','#EditScrapbookTitle',function(){
	var user_scrapbooktitle = $('#newtitle').val();
	var user_scrapbookid = $('#scrapbookid').text();  
  $.ajaxSetup({
    headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
 });

  $("#edittitle_modal .close").click();

  $.ajax({ 
   data: { 'user_scrapbooktitle': user_scrapbooktitle, 'user_scrapbookid' : user_scrapbookid},
   method:'GET',
   url:'/update/title',
   cache:false,
   success: function(data) { 
     console.log(data);

     $('#saved_title').text(data.newtitle);
   }
 });
});
// EDIT TITLE

doc = new jsPDF(); //for exporting in pdf

// EXPORT PDF
$(document).ready(function() {
      
      $("#PDF").click(function() {

        var doc = new jsPDF('l', 'mm', [900, 560]);

        // doc.fromHTML($('.newPage'+pg+'').get(0), 80, 50, {
        doc.fromHTML($('#innerPageWrapper').get(0), 80, 50, { 
          'width': 900, 'height': 700
        },
        function(){
          doc = addWaterMark(doc);
          doc.save('Sample Scrapbook.pdf');
        });
      });
})
// EXPORT PDF
     
// ADD WATERMARK TO PDF 
function addWaterMark(doc) {

    doc.setTextColor(150);
    doc.setFontSize(50);
    doc.text(50, doc.internal.pageSize.height - 30, 'FlipNStyle - 2017');

    return doc;
}
// ADD WATERMARK TO PDF 







