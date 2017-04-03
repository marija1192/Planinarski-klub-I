$(document).ready(function(){
	$('body').on('click','.btn-info',function(event){
	//jQuery('.btn-info').click(function(event){
		event.preventDefault();
		var url = $(this).attr('href');
		var id=$(this).parent().attr('id');
		var cells = $(this)
			.parent()
			.siblings();


		cells.each(function () {
			var span = $(this).find(':first-child');
			var value = span.html();
			var classValue= span.attr('id');
			var id=$(this).parent().attr('id');

			$(this).append('<input type="text" id="'+classValue+'_input" value="'+value+'" style="width:115px;">');
			span.hide();
			$('.btn-info-'+id).hide();
			$('.btn-success-'+id).show();
		});
	});
	$('body').on('click','.btn-success',function(event){
	//$('.btn-success').click(function(event){
		event.preventDefault();
		var url = $(this).attr('href');
		var id=$(this).parents('tr').first().attr('id');

		var ime=$('#ime_'+id+'_input').val();
		var prezime=$('#prezime_'+id+'_input').val();
		var telefon=$('#telefon_'+id+'_input').val();
		var email=$('#email_'+id+'_input').val();
		var pdrustvo=$('#pdrustvo_'+id+'_input').val();
		var oprema=$('#oprema_'+id+'_input').val();
		var planine=$('#planine_'+id+'_input').val();
		
		var data = {
			id: id,
			ime: ime,
			prezime: prezime,
			telefon: telefon,
			email: email,
			pdrustvo: pdrustvo,
			oprema: oprema,
			planine: planine
		};
		

		//debugger;
		if(ime.length>0 && prezime.length>0 && telefon.length>0 && email.length>0 && pdrustvo.length>0 && oprema.length>0 && planine.length>0){

			$.ajax({
				type: 'POST',
				url: url,
				data: data,
				dataType:'json',
				cache:false,
				success:function(html){

					if(html.status == 'ok'){
					$('#ime_'+id+'_input').hide();
					$('#ime_'+id).html(ime).show();
					$('#prezime_'+id+'_input').hide();
					$('#prezime_'+id).html(prezime).show();
					$('#email_'+id+'_input').hide();
					$('#email_'+id).html(email).show();
					$('#telefon_'+id+'_input').hide();
					$('#telefon_'+id).html(telefon).show();
					$('#pdrustvo_'+id+'_input').hide();	
					$('#pdrustvo_'+id).html(pdrustvo).show();	
					$('#oprema_'+id+'_input').hide();
					$('#oprema_'+id).html(oprema).show();
					$('#planine_'+id+'_input').hide();
					$('#planine_'+id).html(planine).show();

					$('.btn-success-'+id).hide();
					$('.btn-info-'+id).show();
					
				

				}
				},
				error: function () {
					console.log(arguments);
				}
			});
		}
		else{
			alert('STOP IT!');
		}


	});

});