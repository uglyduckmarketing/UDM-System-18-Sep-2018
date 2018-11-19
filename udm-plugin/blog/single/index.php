<?php
$thumbnail_id = get_post_thumbnail_id( $post->ID ); // Post Image ID
$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); // Image SRC
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); // The Alt Tag
$title = get_post(get_post_thumbnail_id())->post_title; //The Title
$caption = get_post(get_post_thumbnail_id())->post_excerpt; //The Caption
$description = get_post(get_post_thumbnail_id())->post_content; // The Description
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="container">
	<div class="col-md-12 article-main">
		<div class="article__intro">
			<h1 class="article__intro-title"><?php the_title(); ?></h1>
			<p class="author-information">By <?php the_author(); ?> - <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></p>
			<div class="share-article">
				<!-- Facebook -->
				<a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank">
					<i class="fa fa-facebook"></i>
				</a>
				<!-- Google+ -->
				<a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank">
					<i class="fa fa-google-plus"></i>
				</a>
				<!-- Pinterest -->
				<a href="//pinterest.com/pin/create/link/?url=<?php echo get_permalink();?>">
					<i class="fa fa-pinterest-p"></i>
				</a>
				<!-- Twitter -->
				<a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&amp;" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>
			</div>
			<?php if(has_post_thumbnail()) : ?>
			<img src="<?php echo isset($img[0]) ? $img[0] : ''; ?>" alt="<?php echo isset($alt) ? $alt : ''; ?>" title="<?php echo isset($title) ? $title : ''; ?>" />
			<?php endif; ?>
		</div>
			<?php the_content(); ?>
			
		<?php endwhile; endif; ?>
	</div>
</section>

 <div class="latest-posts-view">
		<div class="container">
			<div class="row">
				<?php
					query_posts('posts_per_page=3');
					if ( have_posts() ) : while ( have_posts() ) : the_post();
					$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
					$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
					$title = get_post(get_post_thumbnail_id())->post_title;
					$caption = get_post(get_post_thumbnail_id())->post_excerpt;
					$description = get_post(get_post_thumbnail_id())->post_content;
					
					?>
					<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
						<div class="inner_grid_sec">
						  <span class="photo_blog_main"><a href="<?php the_permalink(); ?>"><img src="<?php echo isset($img[0]) ? $img[0] : ''; ?>" title="<?php echo isset($title) ? $title : ''; ?>" alt="<?php echo isset($alt) ? $alt : ''; ?>" /></a></span>
							<div class="desc">
								<div class="date_time"><?php echo get_the_date('F jS, Y'); ?></div>
								<h4><?php the_title(); ?></h4>
								<p class="readmore"><a href="<?php the_permalink(); ?>">Read More <i class="fa fa-arrow-right"></i></a><?php //echo substr(wp_strip_all_tags(get_the_content()),0,200); ?></p>
							</div>
						</div>
					</div>
					<?php  endwhile; endif; ?>
			</div>
		</div>
    </div>