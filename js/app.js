jQuery(document).ready(function($) {

	// STICKY NAVIGATION
	// $(window).scroll(function() {
	// 	if ($(this).scrollTop() >= 60) {
	// 		$('header').addClass("header--sticky");
	// 	} else {
	// 		$('header').removeClass("header--sticky");
	// 	}
	// });

	// FOOTER DROPDOWNS
	$('footer .menu-item-has-children > a').click(function(e) {
		e.preventDefault();
		$(this).next().toggle();
	});

	// MOBILE DROPDOWNS
	$('.mobile__navigation .sub-menu').hide();
	$('.mobile__navigation .menu-item-has-children > a').click(function(e) {
		e.preventDefault();
		$(this).next().slideToggle();
	});

	// MOBILE NAVIGATION TRIGGER
	$('.header--mobile-trigger').click(function() {
		$('.mobile__navigation').toggleClass('mobile__navigation-visible');
	});

	// FULL HEIGHT BLOG SIDEBAR
	$wrapperHeight = $('.article-main').height();
	$('.blog-sidebar').height($wrapperHeight);

	// FORM CONTROLS
	$(document).on( 'nfFormReady', function( e, layoutView ) {
		$('.label-above input, .label-above textarea').on('focusin', function() {
			$(this).parents('.label-above').find('label').addClass('active');
		}).on('focusout', function() {
			if($(this).val().length < 1 ) {
				$(this).parents('.label-above').find('label').removeClass('active');
			}
		});
		$('.nf-field-element input[type="button"]').addClass('btn');
	});

});
