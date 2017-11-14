
// PAYMENTS DEATAILS //
$(document).ready(function() {

    $("#courier").on("change", function () {
    	var courier = $(this).val();
    	$("#location").on("change", function () {
    		var location =$(this).val();
    		// LBC //
    			if( (courier == "LBC" && location=="Agusan del Norte") || 
    				(courier == "LBC" && location=="Batangas") ||
    				(courier == "LBC" && location=="Guimaras") ||
    				(courier == "LBC" && location=="Catanduanes") ||
    				(courier == "LBC" && location=="Mountain Province") ||
    				(courier == "LBC" && location=="Masbate") ||
    				(courier == "LBC" && location=="Northern Samar") ||
    				(courier == "LBC" && location=="Surigao del Sur") ||
    				(courier == "LBC" && location=="Sorsogon") ||
    				(courier == "LBC" && location=="Zamboanga Sibugay") ||
    				(courier == "LBC" && location=="Tawi-Tawi") ||
    				(courier == "LBC" && location=="Rizal") ||
    				(courier == "LBC" && location=="Occidental Mindoro") ||
    				(courier == "LBC" && location=="Sulu") ||
    				(courier == "LBC" && location=="Isabela") ||
    				(courier == "LBC" && location=="Negros Occidental")
    				)
    			{
    				$("#shippingfee").val('65.00');
    				$(".sfPrice").text('65.00');
    			}

    			if( (courier == "LBC" && location=="Cebu") || 
    				(courier == "LBC" && location=="Cagayan") ||
    				(courier == "LBC" && location=="Biliran") ||
    				(courier == "LBC" && location=="Laguna") ||
    				(courier == "LBC" && location=="Ifugao") ||
    				(courier == "LBC" && location=="South Cotabato") ||
    				(courier == "LBC" && location=="Palawan") ||
    				(courier == "LBC" && location=="Bulacan") ||
    				(courier == "LBC" && location=="Metro Manila") ||
    				(courier == "LBC" && location=="Misamis Oriental") ||
    				(courier == "LBC" && location=="Lanao del Sur") ||
    				(courier == "LBC" && location=="Camiguin") ||
    				(courier == "LBC" && location=="Leyte") ||
    				(courier == "LBC" && location=="Ilocos Sur") ||
    				(courier == "LBC" && location=="Eastern Samar") 
    				)
    			{
    				$("#shippingfee").val('85.00');
    				$(".sfPrice").text('85.00');
    			}
    			
    			if( (courier == "LBC" && location=="Ilocos Norte") || 
    				(courier == "LBC" && location=="Romblon") ||
    				(courier == "LBC" && location=="Capiz") ||
    				(courier == "LBC" && location=="Aurora") ||
    				(courier == "LBC" && location=="Camarines Norte") ||
    				(courier == "LBC" && location=="Marinduque") ||
    				(courier == "LBC" && location=="Negros Occidental") ||
    				(courier == "LBC" && location=="Misamis Occidental") ||
    				(courier == "LBC" && location=="Batanes") ||
    				(courier == "LBC" && location=="North Cotabato") ||
    				(courier == "LBC" && location=="Sarangani") ||
    				(courier == "LBC" && location=="Davao del Norte") ||
    				(courier == "LBC" && location=="Camarines Sur") 
    				)
    			{
    				$("#shippingfee").val('250.00');
    				$(".sfPrice").text('250.00');
    			}

    			if( (courier == "LBC" && location=="Surigao del Norte") || 
    				(courier == "LBC" && location=="Kalinga") ||
    				(courier == "LBC" && location=="Southern Leyte") ||
    				(courier == "LBC" && location=="Basilan") ||
    				(courier == "LBC" && location=="Apayao") ||
    				(courier == "LBC" && location=="Shariff Kabunsuan") ||
    				(courier == "LBC" && location=="Quezon") ||
    				(courier == "LBC" && location=="Pampanga") ||
    				(courier == "LBC" && location=="Agusan del Sur") ||
    				(courier == "LBC" && location=="Bohol") ||
    				(courier == "LBC" && location=="Bukidnon") ||
    				(courier == "LBC" && location=="Southern Leyte") ||
    				(courier == "LBC" && location=="Zamboanga del Sur") ||
    				(courier == "LBC" && location=="Zambales") ||
    				(courier == "LBC" && location=="Iloilo") 
    				)
    			{
    				$("#shippingfee").val('181.00');
    				$(".sfPrice").text('181.00');
    			}

    			if( (courier == "LBC" && location=="La Union") || 
    				(courier == "LBC" && location=="Siquijor") ||
    				(courier == "LBC" && location=="Davao del Sur") ||
    				(courier == "LBC" && location=="Tarlac") ||
    				(courier == "LBC" && location=="Maguindanao") ||
    				(courier == "LBC" && location=="Abra") ||
    				(courier == "LBC" && location=="Dinagat Islands") ||
    				(courier == "LBC" && location=="Zambales") ||
    				(courier == "LBC" && location=="Bataan") ||
    				(courier == "LBC" && location=="Samar") ||
    				(courier == "LBC" && location=="Antique") ||
    				(courier == "LBC" && location=="Nueva Vizcaya") ||
    				(courier == "LBC" && location=="Quirino") 
    				)
    			{
    				$("#shippingfee").val('275.00');
    				$(".sfPrice").text('275.00');
    			}

    			if( (courier == "LBC" && location=="Lanao del Norte") || 
    				(courier == "LBC" && location=="Cavite") ||
    				(courier == "LBC" && location=="Zamboanga del Norte") ||
    				(courier == "LBC" && location=="Davao Oriental") ||
    				(courier == "LBC" && location=="Aklan") ||
    				(courier == "LBC" && location=="Oriental Mindoro") ||
    				(courier == "LBC" && location=="Pangasinan") ||
    				(courier == "LBC" && location=="Compostela Valley") ||
    				(courier == "LBC" && location=="Benguet") ||
    				(courier == "LBC" && location=="Nueva Ecija") ||
    				(courier == "LBC" && location=="Albay") 
    			)
    			{
    				$("#shippingfee").val('125.00');
    				$(".sfPrice").text('125.00');
    			}
    		// LBC //

    		// JRS //
    			if( (courier == "JRS" && location=="Agusan del Norte") || 
    				(courier == "JRS" && location=="Batangas") ||
    				(courier == "JRS" && location=="Guimaras") ||
    				(courier == "JRS" && location=="Catanduanes") ||
    				(courier == "JRS" && location=="Mountain Province") ||
    				(courier == "JRS" && location=="Masbate") ||
    				(courier == "JRS" && location=="Northern Samar") ||
    				(courier == "JRS" && location=="Surigao del Sur") ||
    				(courier == "JRS" && location=="Sorsogon") ||
    				(courier == "JRS" && location=="Zamboanga Sibugay") ||
    				(courier == "JRS" && location=="Tawi-Tawi") ||
    				(courier == "JRS" && location=="Rizal") ||
    				(courier == "JRS" && location=="Occidental Mindoro") ||
    				(courier == "JRS" && location=="Sulu") ||
    				(courier == "JRS" && location=="Isabela") ||
    				(courier == "JRS" && location=="Negros Occidental")
    				)
    			{
    				$("#shippingfee").val('50.00');
    				$(".sfPrice").text('59.00');
    			}

    			if( (courier == "JRS" && location=="Cebu") || 
    				(courier == "JRS" && location=="Cagayan") ||
    				(courier == "JRS" && location=="Biliran") ||
    				(courier == "JRS" && location=="Laguna") ||
    				(courier == "JRS" && location=="Ifugao") ||
    				(courier == "JRS" && location=="South Cotabato") ||
    				(courier == "JRS" && location=="Palawan") ||
    				(courier == "JRS" && location=="Bulacan") ||
    				(courier == "JRS" && location=="Metro Manila") ||
    				(courier == "JRS" && location=="Misamis Oriental") ||
    				(courier == "JRS" && location=="Lanao del Sur") ||
    				(courier == "JRS" && location=="Camiguin") ||
    				(courier == "JRS" && location=="Leyte") ||
    				(courier == "JRS" && location=="Ilocos Sur") ||
    				(courier == "JRS" && location=="Eastern Samar") 
    				)
    			{
    				$("#shippingfee").val('175.00');
    				$(".sfPrice").text('175.00');
    			}

    			if( (courier == "JRS" && location=="Ilocos Norte") || 
    				(courier == "JRS" && location=="Romblon") ||
    				(courier == "JRS" && location=="Capiz") ||
    				(courier == "JRS" && location=="Aurora") ||
    				(courier == "JRS" && location=="Camarines Norte") ||
    				(courier == "JRS" && location=="Marinduque") ||
    				(courier == "JRS" && location=="Negros Occidental") ||
    				(courier == "JRS" && location=="Misamis Occidental") ||
    				(courier == "JRS" && location=="Batanes") ||
    				(courier == "JRS" && location=="North Cotabato") ||
    				(courier == "JRS" && location=="Sarangani") ||
    				(courier == "JRS" && location=="Davao del Norte") ||
    				(courier == "JRS" && location=="Camarines Sur") 
    				)
    			{
    				$("#shippingfee").val('380.00');
    				$(".sfPrice").text('380.00');
    			}

    			if( (courier == "JRS" && location=="Surigao del Norte") || 
    				(courier == "JRS" && location=="Kalinga") ||
    				(courier == "JRS" && location=="Southern Leyte") ||
    				(courier == "JRS" && location=="Basilan") ||
    				(courier == "JRS" && location=="Apayao") ||
    				(courier == "JRS" && location=="Shariff Kabunsuan") ||
    				(courier == "JRS" && location=="Quezon") ||
    				(courier == "JRS" && location=="Pampanga") ||
    				(courier == "JRS" && location=="Agusan del Sur") ||
    				(courier == "JRS" && location=="Bohol") ||
    				(courier == "JRS" && location=="Bukidnon") ||
    				(courier == "JRS" && location=="Southern Leyte") ||
    				(courier == "JRS" && location=="Zamboanga del Sur") ||
    				(courier == "JRS" && location=="Zambales") ||
    				(courier == "JRS" && location=="Iloilo") 
    				)
    			{
    				$("#shippingfee").val('200.00');
    				$(".sfPrice").text('200.00');
    			}

    			if( (courier == "JRS" && location=="La Union") || 
    				(courier == "JRS" && location=="Siquijor") ||
    				(courier == "JRS" && location=="Davao del Sur") ||
    				(courier == "JRS" && location=="Tarlac") ||
    				(courier == "JRS" && location=="Maguindanao") ||
    				(courier == "JRS" && location=="Abra") ||
    				(courier == "JRS" && location=="Dinagat Islands") ||
    				(courier == "JRS" && location=="Zambales") ||
    				(courier == "JRS" && location=="Bataan") ||
    				(courier == "JRS" && location=="Samar") ||
    				(courier == "JRS" && location=="Antique") ||
    				(courier == "JRS" && location=="Nueva Vizcaya") ||
    				(courier == "JRS" && location=="Quirino") 
    				)
    			{
    				$("#shippingfee").val('135.00');
    				$(".sfPrice").text('135.00');
    			}

    			if( (courier == "JRS" && location=="Lanao del Norte") || 
    				(courier == "JRS" && location=="Cavite") ||
    				(courier == "JRS" && location=="Zamboanga del Norte") ||
    				(courier == "JRS" && location=="Davao Oriental") ||
    				(courier == "JRS" && location=="Aklan") ||
    				(courier == "JRS" && location=="Oriental Mindoro") ||
    				(courier == "JRS" && location=="Pangasinan") ||
    				(courier == "JRS" && location=="Compostela Valley") ||
    				(courier == "JRS" && location=="Benguet") ||
    				(courier == "JRS" && location=="Nueva Ecija") ||
    				(courier == "JRS" && location=="Albay") 
    			)
    			{
    				$("#shippingfee").val('450.00');
    				$(".sfPrice").text('450.00');
    			}
    		// JRS //
            var totalNo = $('.pageNo').text();
            var parsePAGES = parseFloat(totalNo);
            if(parsePAGES <= 10){
                $('.extraFee').text('0.00');
                $('#noE').text('0');
                $('#toE').text('0.00');

                var SF = $('.sfPrice').text();
                var parseSF = parseFloat(SF);
                var SBP = $('.scrapbookPRICE').text();
                var parseSBP = parseFloat(SBP);
                var EP = $('#toE').text();
                var parseEP = parseFloat(EP);

                var purchase_total = parseSBP + parseEP + parseSF + 100.00; 
                $('.totalE').text(parseFloat(purchase_total).toFixed(2));

            }

            else{

                var excess = parsePAGES - 10; 
                var price = $('.scrapbookPRICE').text();
                    var parsePRICE = parseFloat(price);
                    var total = ( (parsePRICE % 10) * excess) ;             

                    $('.extraFee').text(total);
                    $('#noE').text(excess);
                    $('#toE').text(total);
                
                var SF = $('.sfPrice').text();
                var parseSF = parseFloat(SF);
                var SBP = $('.scrapbookPRICE').text();
                var parseSBP = parseFloat(SBP);
                var EP = $('#toE').text();
                var parseEP = parseFloat(EP);

                var purchase_total = parseSBP + parseEP + parseSF + 100.00;
                $('.totalE').text(parseFloat(purchase_total).toFixed(2));

                // $('#totalE').text(purchase_total);
            }

        });
    });
		
});
// PAYMENTS DEATAILS //


// PURCHASE

    $("#buybutton").click(function(){

        // purchase details
          var scrapid = $('.scrapbookBUY').text();
          var designerid = $('.designerid').text();
          var themeid = $('.themeid').text();

          var name = $('input[type=text][name=cust_name]').val();
          var address = $('input[type=text][name=cust_address]').val();
          var no = $('input[type=text][name=cust_no]').val();
          var card = $('input[type=text][name=cust_card]').val();
          
          var courier = $("select#courier option").filter(":selected").val();
          var city = $("select#location option").filter(":selected").val();  
          var title = $('.Stitle ').text();  
               
        // purchase details

        // purchase liquidation details
          var pages = $('.pageNo').text();
          var themePrice = $('.scrapbookPRICE').text();
          var excess_fee = $('.extraFee').text();
          var extra_pages = $('.noE').text();
          var shipping_fee = $('input[type=text][name=shippingfee]').val();
          var total = $('.totalE').text();
        // purchase liquidation details




          $.ajaxSetup({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({ 
               data:{   'themeid': themeid,'designerid': designerid, 
                        'scrapid': scrapid, 'name': name, 'address': address, 'title': title,
                        'no': no, 'card': card, 'courier': courier, 'city': city,
                        'pages': pages, 'themePrice': themePrice, 'excess_fee': excess_fee, 'extra_pages': extra_pages,
                        'shipping_fee': shipping_fee, 'total': total
                    },
               method:'GET',
               url:'/purchaseScrapbook',
               async: false,
               cache:false,
               success: function(data) { 
                    console.log(data);
                    $('#PurchaseForm').submit();

               }               
          });
    
    });
// PURCHASE 

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


