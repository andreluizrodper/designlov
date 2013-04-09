$(document).ready(function(){
	$('.grid').masonry({'itemSelector':'li'})
	if($('header form input:text').val() == '')
		$('header form input:text').val('Buscar inspiração')
	$('header form input:text').focus(function(){
		if($(this).val() == $(this).attr('placeholder'))
			$(this).val('')
	}).blur(function(){
		if($(this).val() == '')
			$(this).val($(this).attr('placeholder'))
	})

})