$('.dws-menu li > ul').hide();

	$('.services').click( function(){
		$('.sub1').slideToggle(300)	
});
	$('#container').click( function(){
		$('.sub1').slideUp(300)	
});

	$('li .subb1').hover(function(){
		$('#subb2').slideToggle(300)
});
	$('li .repairs').hover(function(){
		$('.sub3').slideToggle(300)
	});