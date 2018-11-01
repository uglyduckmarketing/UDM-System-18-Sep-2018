<main class="wrapper" role="main">
	<section class="container">
		<div class="main-contents">
			<?php if (is_active_sidebar( 'left_sidebar' )) { ?>
				<!-- LEFT SIDEBAR -->
				<div class="<?php echo get_option( 'sidebar_style' ); ?> col s4 main_sidebar sidebar sidebar_left hide-on-med-and-down">
					<div class="internal-sidebar">
						<?php dynamic_sidebar('left_sidebar'); ?>
					</div>
				</div>
				<div class="col">
					<?php 
						if (have_posts()) : while (have_posts()) : the_post();
							
							the_content();
							if(get_post_meta($post->ID,'udm_specific_galley',true)!="")
							{
								echo do_shortcode("[udm_gallery id='".get_post_meta($post->ID,'udm_specific_galley',true)."' layout='".get_option('udm_gallery_layout_default')."']");
							}
						endwhile; endif; ?>
				</div>
			<?php }  elseif (is_active_sidebar( 'right_sidebar' )) { ?>
				<!-- RIGHT SIDEBAR -->
				<div class="col">
					<?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); 
							if(get_post_meta($post->ID,'udm_specific_galley',true)!="")
							{
								echo do_shortcode("[udm_gallery id='".get_post_meta($post->ID,'udm_specific_galley',true)."' layout='".get_option('udm_gallery_layout_default')."']");
							}
					endwhile; endif; ?>
				</div>
				<div class="<?php echo get_option( 'sidebar_style' ); ?> col s4 main_sidebar sidebar sidebar_right hide-on-med-and-down">
					<div class="internal-sidebar">
						<?php dynamic_sidebar( 'right_sidebar' ); ?>
					</div>
				</div>
			<?php }  else {
					if (have_posts()) : while (have_posts()) : the_post(); the_content();
					if(get_post_meta($post->ID,'udm_specific_galley',true)!="")
							{
								echo do_shortcode("[udm_gallery id='".get_post_meta($post->ID,'udm_specific_galley',true)."' layout='".get_option('udm_gallery_layout_default')."']");
							}
					endwhile; endif;
		 		}
		 	?>
		</div>
	</section>
</main>
