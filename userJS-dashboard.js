// NEXT PAGE
function leftClick(scrapid, scraPageN){

   var pageCount = $('#numberOfPages'+scrapid).text();
      
      if( (scraPageN == 1) ){
          var setText = $('#Pages'+scrapid).text('Page Number: ' +pageCount+ ' / ' +pageCount);
        $('.MyScrapbookData-VIEW'+scrapid+scraPageN).addClass('hidden');
        $('.MyScrapbookData-VIEW'+scrapid+pageCount).removeClass('hidden');
      }

      else if( (scraPageN <= pageCount) ){
          var  nextPage = scraPageN - 1;
          var setText = $('#Pages'+scrapid).text('Page Number: ' +nextPage+ ' / ' +pageCount);
        $('.MyScrapbookData-VIEW'+scrapid+scraPageN).addClass('hidden');
        $('.MyScrapbookData-VIEW'+scrapid+nextPage).removeClass('hidden');     
      }  

}

function rightClick(scrapid, scraPageN){


   var pageCount = $('#numberOfPages'+scrapid).text();
        if( (scraPageN < pageCount) ){
            var nextPage = scraPageN + 1 ;
            var setText = $('#Pages'+scrapid).text('Page Number: ' +nextPage+ ' / ' +pageCount);
          $('.MyScrapbookData-VIEW'+scrapid+scraPageN).addClass('hidden');
          $('.MyScrapbookData-VIEW'+scrapid+nextPage).removeClass('hidden');
        }

        else if( (scraPageN == pageCount) ){
            var  nextPage = 1;
            var setText = $('#Pages'+scrapid).text('Page Number: ' +nextPage+ ' / ' +pageCount);
          $('.MyScrapbookData-VIEW'+scrapid+scraPageN).addClass('hidden');
          $('.MyScrapbookData-VIEW'+scrapid+nextPage).removeClass('hidden');     
    }
 
 }

// NEXT PAGE


// SHARE SCRAPBOOK
function shareScrapbook(scrapid){
  var shared_email = $('#sharedUserEmail'+scrapid).val();
  var themeid = $('#themeid'+scrapid).val();
  var restriction =  $('.restriction'+scrapid).text();
  var price = $('#scrapbookprice'+scrapid).val();
  
  var user_scrapbookid = scrapid;

  
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $("#shareScrapbook_modal .close").click();

  $.ajax({ 
   data: {'price': price, 'shared_email': shared_email, 'user_scrapbookid': user_scrapbookid, 'themeid': themeid, 'restriction':restriction },
   method:'GET',
   url:'/share/scrapbook',
   cache:false,
   success: function(data) { 
     console.log(data);
     alert("Scrapbook Shared!");
     }
    // error: function(data) { 
    //  console.log(data);
    //  alert("Invalid Email!");
    //  }
  }); 
}
// SHARE SCRAPBOOK

//SCRAPBOOK RESTRICTION
  function restriction1(inputValue, scrapid){
    var value = $(inputValue).val();
    $('.restriction'+scrapid).text(value);
  }

  function restriction2(inputValue, scrapid){
    var value = $(inputValue).val();
    $('.restriction'+scrapid).text(value);    
  }
//SCRAPBOOK RESTRICTION


// PDF
doc = new jsPDF(); //for exporting in pdf

// EXPORT PDF
$(document).ready(function() {
      $("#PDF").click(function() {
        var doc = new jsPDF('l', 'mm', [900, 560]);
        doc.fromHTML($('#ScrapbookViewer').get(0), 80, 50, { 
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

// PDF