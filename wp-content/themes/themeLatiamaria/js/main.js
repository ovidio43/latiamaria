$(document).ready(function() {
	//$('.bg').parallax("53%", 0.7);
	$('.nav-mobile').bind('click', function(){
		if($(this).hasClass('activemenu')){
			$(this).removeClass('activemenu');
			$('.nav').css('display','none');
		}else{
			$(this).addClass('activemenu');
			$('.nav').css('display','block');
		}
	});
});