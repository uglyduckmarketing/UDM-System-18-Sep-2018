<?php
	$data=unserialize(get_option('blog_layout_'.$layout));	
?>   
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/udm-plugin/blog/grid-view/css/grid.css">
    <div class="main-grid-view">
		
				<?php
				$temp=1;
                           global $wp_query;

			if ( $wp_query -> have_posts() ) :

				/* Start the Loop */
				while ( $wp_query -> have_posts() ) : $wp_query -> the_post();

					$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
					$alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
					$title = get_post(get_post_thumbnail_id())->post_title;
					$caption = get_post(get_post_thumbnail_id())->post_excerpt;
					$description = get_post(get_post_thumbnail_id())->post_content;
					if($temp==1)
					{
					?>
					<span class="photo_blog_main featuredblog"><a href="<?php the_permalink(); ?>"><img src="<?php echo isset($img[0]) ? $img[0] : ''; ?>" title="<?php echo isset($title) ? $title : ''; ?>" alt="<?php echo isset($alt) ? $alt : ''; ?>" /></a></span>
						
					<div class="container">
						<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 featuredblog">
							
						<div class="inner_grid_sec">
							<div class="desc">
								<div class="date_time"><?php echo get_the_date('F jS, Y'); ?></div>
								<h4><?php the_title(); ?></h4>
								<p class="readmore"><?php echo substr(wp_strip_all_tags(get_the_content()),0,300); ?>...<a href="<?php the_permalink(); ?>">Read More</a></p>
							</div>
						</div>
					</div>
					<?php
					}else if ($temp == ($wp_query->post_count)) {


						?>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<div class="inner_grid_sec">
								<span class="photo_blog_main"><a href="<?php the_permalink(); ?>"><img src="<?php echo isset($img[0]) ? $img[0] : ''; ?>" title="<?php echo isset($title) ? $title : ''; ?>" alt="<?php echo isset($alt) ? $alt : ''; ?>" /></a></span>
								<div class="desc">
									<div class="date_time"><?php echo get_the_date('F jS, Y'); ?></div>
									<h4><?php the_title(); ?></h4>
									<p class="readmore"><a href="<?php the_permalink(); ?>">Read More <i class="fa fa-arrow-right"></i></a><?php //echo substr(wp_strip_all_tags(get_the_content()),0,200); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
					<?php 
					}else {
					?>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
						<div class="inner_grid_sec">
						  <span class="photo_blog_main"><a href="<?php the_permalink(); ?>"><img src="<?php echo isset($img[0]) ? $img[0] : ''; ?>" title="<?php echo isset($title) ? $title : ''; ?>" alt="<?php echo isset($alt) ? $alt : ''; ?>" /></a></span>
							
							<div class="desc">
								<div class="date_time"><?php echo get_the_date('F jS, Y'); ?></div>
								<h4><?php the_title(); ?></h4>
								<p class="readmore"><a href="<?php the_permalink(); ?>">Read More <i class="fa fa-arrow-right"></i></a><?php //echo substr(wp_strip_all_tags(get_the_content()),0,200); ?></p>
							</div>
						</div>
					</div>
					<?php }
 $temp++; endwhile;
						
					the_posts_pagination( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', 'uglyduck' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'uglyduck' ) . '</span>',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'uglyduck' ) . ' </span>',
				));
					
					endif;  ?>
    </div>