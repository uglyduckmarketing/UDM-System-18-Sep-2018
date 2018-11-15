<?php
	$data=unserialize(get_option('blog_layout_'.$layout));	
?>   
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/udm-plugin/blog/cards-view/css/cards.css">
    <div class="main-cards-view">
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
					if($temp==1)
					{
					?>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<div class="inner_grid_sec">
						 <span class="photo_blog_main"><a href="<?php the_permalink(); ?>"><img src="<?php echo $img[0]; ?>" title="<?php echo $title; ?>" alt="<?php echo $alt; ?>" /></a></span>
						 <span class="arrow"><a href="<?php the_permalink(); ?>"><i class="fa fa-arrow-right"></i></a></span>
							<div class="desc">
								<div class="date_time"><?php echo get_the_date('F jS, Y'); ?></div>
								<h4><?php the_title(); ?></h4>
								<p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
							</div>
						</div>
					</div>
					<?php
					}
					else if($temp==2)
					{
					?>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="inner_grid_sec">
							<span class="photo_blog_main"><a href="<?php the_permalink(); ?>"><img src="<?php echo $img[0]; ?>" title="<?php echo $title; ?>" alt="<?php echo $alt; ?>" /></a></span>
							<span class="arrow"><a href="<?php the_permalink(); ?>"><i class="fa fa-arrow-right"></i></a></span>
							<div class="desc">
								<div class="date_time"><?php echo get_the_date('F jS, Y'); ?></div>
								<h4><?php the_title(); ?></h4>
								<p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
							</div>
						</div>
					</div>
					<?php	
					}
					else{
					?>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="inner_grid_sec">
							<span class="photo_blog_main"><a href="<?php the_permalink(); ?>"><img src="<?php echo $img[0]; ?>" title="<?php echo $title; ?>" alt="<?php echo $alt; ?>" /></a></span>
							<span class="arrow"><a href="<?php the_permalink(); ?>"><i class="fa fa-arrow-right"></i></a></span>
							<div class="desc">
								<div class="date_time"><?php echo get_the_date('F jS, Y'); ?></div>
								<h4><?php the_title(); ?></h4>
								<p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
							</div>
						</div>
					</div>
					<?php } $temp++; endwhile; endif; ?>
			</div>
		</div>
    </div>