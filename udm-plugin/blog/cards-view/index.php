<?php
	$data=unserialize(get_option('blog_layout_'.$layout));	
?>   
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/udm-plugin/blog/cards-view/css/cards.css">
<div class="main-cards-view blog_card_new">
	<div class="container">
		<div class="row">
			<?php
			$temp=1;
				global $post;
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
				$alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
				$title = get_post(get_post_thumbnail_id())->post_title;
				$caption = get_post(get_post_thumbnail_id())->post_excerpt;
				$description = get_post(get_post_thumbnail_id())->post_content;
				$myclass = '';
				 if ($temp % 7 == 0){
					 $myclass = "box_8_layout";
				 }
				?>
				<div class="col-lg-4 col-md-6 blog-card-loop <?php echo $myclass; ?>">
					<a href="<?php the_permalink(); ?>" class="blog-card-container">
						<div class="blog_image" style="background-image: url(<?php echo isset($img[0]) ? $img[0] : ''; ?>);"></div>
						<div class="blog_content">
							<?php if(isset($data['show_date']) && $data['show_date']=="yes"){ ?><span class="blog_date"><?php echo get_the_date('F jS, Y'); ?></span> <?php } ?>
							<div class="h2title blog_title"><?php the_title(); ?></div>
							<span class="blog_read">Read More <i class="ion-ios-arrow-forward"></i></span>
						</div>
					</a>
				</div>
				<?php  $temp++; endwhile; endif; ?>
		</div>
		<div class="row">
				<div class="col-md-12">
					<?php udm_posts_pagination(); ?>
				</div>
			</div>
	</div>
</div>