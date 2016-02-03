$(document).ready(function() {
	var num = 67; //number of pixels before modifying styles

	$(window).bind('scroll', function () {
	    if ($(window).scrollTop() > num) {
	        $('header').addClass('header-shrink');
          $('.up1').addClass('up1-shrink');
          $('.up2').addClass('up2-shrink');
	    } else {
	        $('header').removeClass('header-shrink');
          $('.up1').removeClass('up1-shrink');
          $('.up2').removeClass('up2-shrink');
	    }
	});
});
