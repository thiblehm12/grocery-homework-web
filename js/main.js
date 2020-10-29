$(document).ready(function(){
	
	// Nav Slide Toggle
	$('i.icon').click(function(){
		$('.nav-list').slideToggle()
	});
	//Sticky navBar
	$(window).scroll(function(){
		var sc = $(this).scrollTop();
		if(sc > 50){
			$('header').addClass('sticky')
		}else{
			$('header').removeClass('sticky')
		}
		if(sc > 640){
			$('header').addClass('sticky2')
		}else{
			$('header').removeClass('sticky2')
		}
		if(sc > 1450){
			$('header').addClass('sticky3')
		}else{
			$('header').removeClass('sticky3')
		}
	});
});