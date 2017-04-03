$(document).ready(function(){
	
	

		jQuery('.nav a').click(function(event){
		event.preventDefault();
		var url = $(this).attr('href'); 

		$(this) 
			.parent().addClass('active')
			.siblings().removeClass('active'); 

		$.ajax({ 
			url: url,
			method: 'get',
			success: function(data){ 
				var newDocument = $.parseHTML(data); 
				var content = false; 


				for(var i in newDocument){

					if($(newDocument[i]).hasClass('ajax-content')){
						content = $(newDocument[i]).html(); 
						break;
					}
				}

				$('.ajax-content').html(content); 

				runGallery();
			},
			error: function(){
				console.log(arguments);
			}
		});

	});

});