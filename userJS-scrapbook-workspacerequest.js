

// ADD TITLE
$(document).on('click','#AddScrapbookTitle',function(){
  
	var user_scrapbooktitle = $('#addtitle').val();
  var themeid = $('.themeid').text(); 
  var price = $('.price').text(); 
  var height = $('.scrapbookHeight').text(); 
  var width = $('.scrapbookWidth').text(); 
  var restriction = $('.restriction').text();


	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

  $("#addtitle_modal .close").click();

  
  $.ajax({ 
   data: { 'price': price, 'themeid': themeid, 'restriction': restriction, 'user_scrapbooktitle': user_scrapbooktitle, 'height': height, 'width': width },
   method:'GET',
   url:'/set/title',
   cache:false,
   success: function(data) { 
     console.log(data);

           $(".button_addtitle").hide();
           $('#saved_title').text("Title: "+data.scrapbooktitle);
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

     $('#saved_title').text("Title: "+data.newtitle);
   }
 });
});
// EDIT TITLE
