$(document).ready(function(){
	$('body').on('click','.btn-danger',function(event){
	//jQuery('.btn-danger').click(function(event){ 
		event.preventDefault(); 
		var url = $(this).attr('href'); 
		var row = $(this).parent('td').parent('tr');
		$.ajax({  
			url: url,
			method: 'get',
			dataType: 'json',
			success: function(response){ 
				
				if(response.status == 'ok'){
					
						row.remove();
					
				}
			},
			error: function(){
				console.log(arguments);
			}
		});

	});

});