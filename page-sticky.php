<?php get_header();
// Template Name: Sticky Sidebar
get_template_part( 'template-parts/content', 'hero' ); ?>
<main class="wrapper" role="main">
	<section class="container">
		<div class="row">
			<?php if (is_active_sidebar( 'left_sidebar' )) { ?>
				<!-- LEFT sticky-sidebar-->
				<div class="col-md-4 sticky-sidebar_left">
					<div class="internal-sidebar">
						<?php dynamic_sidebar('left_sidebar'); ?>
					</div>
				</div>
				<div class="col-md-8 col-sm-12">
					<?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
				</div>
			<?php }  elseif (is_active_sidebar( 'right_sidebar' )) { ?>
				<!-- RIGHT sticky-sidebar-->
				<div class="col-md-8 col-sm-12">
					<?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
				</div>
				<div class="col-md-4 sticky-sidebar_right">
					<div class="internal-sidebar">
						<?php dynamic_sidebar( 'right_sidebar' ); ?>
					</div>
				</div>
			<?php }  else {
					if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif;
		 		}
		 	?>
		</div>
	</section>
</main>
<div class="sticky-sidebar-trigger">
	<button>Request Estimate</button>
</div>
<i class="close-modal ion-ios-close-outline"></i>

<script>
// STICKY SIDEBAR ON SCROLL
var $elementOffset = $('.sticky-sidebar_right').offset().top; // Distance from the top of the window
var $footerHeight = $('.site-footer').height() + 800; // Height of the footer
var body = document.body,
html = document.documentElement;
var $fullHeight = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight ); // Full Page Height
var $footerOffset = $fullHeight - $footerHeight; // Full Page Height Minus The Footer
var $stickyOffset = $('.hero-background').height() + $('header').height(); $stickyOffset = $stickyOffset - 150; // Positioning the sidebar element based on hero and header

$('.sticky-sidebar_right').css( "top", $stickyOffset );

$(window).scroll(function() {
	var $scrollTop = $(window).scrollTop();

	if ($scrollTop >= $stickyOffset) {
		$('.sticky-sidebar_right').addClass("stuck-sidebar");

		if ($scrollTop >= $footerOffset) {
			$('.sticky-sidebar_right').removeClass("stuck-sidebar").css( "top", $footerOffset + 'px' );
		} else {
			$('.sticky-sidebar_right').addClass("stuck-sidebar");
		}

	} else {
		$('.sticky-sidebar_right').removeClass("stuck-sidebar").css( "top", $stickyOffset );
	}
});
// SIDEBAR MODAL POPUP (MOBILE)
$('.sticky-sidebar-trigger button').click(function() {
	$('.sticky-sidebar_right, .close-modal').show();
});
$('.close-modal').click(function() {
	$('.sticky-sidebar_right, .close-modal').hide();
});
</script>
<?php get_footer(); ?>
