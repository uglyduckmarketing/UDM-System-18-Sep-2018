<?php

		if(strpos(get_option('udm_footer_cta_default'), 'Fullwidth_CTA_') !== false){
			$layout=get_option('udm_footer_cta_default');
			include get_template_directory() . '/udm-plugin/footer-cta/fullwidth-cta/index.php';
		}
		else if(strpos(get_option('udm_footer_cta_default'), 'Split_CTA_') !== false)
		{
			$layout=get_option('udm_footer_cta_default');
			include get_template_directory() . '/udm-plugin/footer-cta/split-cta/index.php';
			
		}
		
	get_template_part( 'udm-plugin/footers/index');


	
			if(get_post_meta( get_the_ID(), 'udm_specific_mobile_nav', true )!="")
			{
				$mobilenavlayout=get_post_meta( get_the_ID(), 'udm_specific_mobile_nav', true );
			}
			else if(get_option('udm_mobile_nav_default')!="")
			{
				$mobilenavlayout=get_option('udm_mobile_nav_default');
			}
			else
			{
				$mobilenavlayout="";
			}
?>
<?php wp_footer(); ?>

<script>
		<?php		
			if(strpos($mobilenavlayout, 'Basic_Overlay') !== false){
		?>
			
    jQuery(document).ready(function(){  //Basic Overlay navigation script
		$(".menu-button").click(function(){ 
			$(".mobile-menu-container").toggleClass("not-visible is-visible");
				$("#mobile-navigation .menu-button").toggleClass("close-menu menu-button-open");
		});
		$( ".mobile-header-sec #mobile-menu li.menu-item-has-children" ).click(function() {
			$(this).find('.sub-menu').slideToggle( "slow");
		});
	}); 
	
		<?php
			}
			else if(strpos($mobilenavlayout, 'Basic_Slidedown') !== false){
		?>
		jQuery(document).ready(function(){  //Basic Slidedown navigation script
		
			$(".menu-button").click(function(){
				$(".mobile_menu").slideToggle(500);
				$(".menu-button").toggleClass("close-menu menu-button-open");
			}); 
			
			$( ".mobile-header-sec .mobile_menu li.menu-item-has-children" ).click(function() {
				
				$(this).find('.sub-menu').slideToggle( "slow");
				
			});
		});
		<?php 
		}
		else
		{
		?>
		(function ($) {   //Slide In navigation script 
           
        })(jQuery);
		
			$('#mobile-slide-in').attr('style',"");	
			$(".menu-button").click(function(){
				 $(".menu-button").toggleClass("close-menu menu-button-open");
				if($('#mobile-slide-in').attr('style')=='left: 0px; right: auto; transform: translateX(-100%); display: block;' || $('#mobile-slide-in').attr('style')=='')
				{
					$('#mobile-slide-in').attr('style','left: 0px; right: auto; transform: translateX(0%); display: block;');
				}
				else
				{
					$('#mobile-slide-in').attr('style','left: 0px; right: auto; transform: translateX(-100%); display: block;');
				}
			});
		<?php
		}
		?>
(function ($) { 		
jQuery(document).ready(function(){ 
	$(document).on('click','.js-videoPoster button',function(e) {
		e.preventDefault();
		var poster = $(this);
		var wrapper = poster.closest('.js-videoWrapper');
		videoPlay(wrapper);
	});
});	
})(jQuery);
function videoPlay(wrapper) {
	var iframe = wrapper.find('.js-videoIframe');
	var src = iframe.data('src');
	wrapper.addClass('videoWrapperActive');
	iframe.attr('src',src);
}
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script>
(function ($) { 
jQuery(document).ready(function() {
	$('#gallery, .carousel-inner, .masonry').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>'+item.el.attr('data-desc')+'</small>';
			}
		}
	});

});

})(jQuery);
</script>

<script type="text/javascript">
<!-- jQuery -->
  
$(function () {
    var count = 0;
    $('.carouselslider').each(function () {
    $(this).attr('id', 'carouselslider' + count);
	$(this).find('.navcarousel').attr('href','#carouselslider' + count);
  $('#carouselslider' + count).on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('#carouselslider .carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('#carouselslider .carousel-item').eq(i).appendTo('#carouselslider .carousel-inner');
            }
            else {
                $('#carouselslider .carousel-item').eq(0).appendTo('#carouselslider .carousel-inner');
            }
        }
    }
});
  $('#carouselslider' + count).carousel({ 
                interval: 2000
        });
	 count++;
    });
});	

</script>
</body>
</html>