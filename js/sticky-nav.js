jQuery(document).ready(function($) {

	// Sticky Navigation On Scroll
	$(window).scroll(function() {
		if ($(this).scrollTop() >= 200) {
			$('header').addClass("sticky-await");
			//$('.topbar').addClass("hidden");
			if ($(this).scrollTop() >= 250) {
				$('header').addClass("sticky");
				$('.topbar').addClass("hidden");
			}
		} else {
			$('header').removeClass("sticky");
			$('header').removeClass("sticky-await");
			$('.topbar').removeClass("hidden");
		}
	});
});
