jQuery(document).ready(function($) {

	// Secondary Navigation
	$('.service-trigger').on('click', function(e) {
		e.preventDefault();
		$('.secondary--nav').toggleClass('secondary--nav--visible');
	});
	$('.secondary--nav').mouseleave(function() {
		$(this).removeClass('secondary--nav--visible');
	});

	// Scroll Functions
	$(window).scroll(function() {
		if ($(this).scrollTop() >= 150) {
			$('header').addClass("stuck");
			$('.secondary--nav').addClass('secondary--nav--top');
		} else {
			$('header').removeClass("stuck");
			$('.secondary--nav').removeClass('secondary--nav--top');
		}
		if ($(this).scrollTop() >= 150) {
			$('.cg_logos img').addClass('visible');
		}
		else {
			$('.cg_logos img').removeClass('visible');
		}
	});

	// Slideshow
	$("#slideshow > div:gt(0)").hide();
	setInterval(function() {
	  $('#slideshow > div:first')
	    .fadeOut(1000)
	    .next()
	    .fadeIn(1000)
	    .end()
	    .appendTo('#slideshow');
	}, 5000);

	$('.logos_').slick({
	  dots: false,
		arrows: false,
	  infinite: true,
	  speed: 600,
		autoplay: true,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1,
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    },
	  ]
	});

	// Tabs
	$('#tabs li a:not(:first)').addClass('inactive');
	$('.tab-container').hide();
	$('.tab-container:first').show();

	$('#tabs li a').click(function(){
	    var t = $(this).attr('id');
	  	if($(this).hasClass('inactive')) {
	    	$('#tabs li a').addClass('inactive');
	    	$(this).removeClass('inactive');
	    	$('.tab-container').hide();
	    	$('#'+ t + 'C').fadeIn(1000);
	 		}
	});
});
