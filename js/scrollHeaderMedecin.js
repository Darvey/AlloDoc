$(document).ready(function() {
	var num = 67; //number of pixels before modifying styles

	$(window).bind('scroll', function () {
		if ($(window).scrollTop() > num) {
			$('.header-menu').addClass('header-menu-shrink');
		}else{
			$('.header-menu').removeClass('header-menu-shrink');
		}
	});
});
