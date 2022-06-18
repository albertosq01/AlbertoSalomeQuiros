$(document).ready(function(){

	$('.go-up-button').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.go-up-button').slideDown(300);
		} else {
			$('.go-up-button').slideUp(300);
		}
	});

});