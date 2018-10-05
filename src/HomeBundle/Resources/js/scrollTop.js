$(document).ready(function() {
	$(document).scroll(function(){
	    if($(this).scrollTop() > 50) {   
	        $('#mainNav').addClass('navbar-scroll');
	        $('.brand-navbar').addClass('scroll-brand');
	    }
	    if ($(this).scrollTop() < 50) {
	        $('#mainNav').removeClass('navbar-scroll');
	    	$('.brand-navbar').removeClass('scroll-brand');
		}
	});
});