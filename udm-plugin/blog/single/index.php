<?php
$thumbnail_id = get_post_thumbnail_id( $post->ID ); // Post Image ID
$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); // Image SRC
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); // The Alt Tag
$title = get_post(get_post_thumbnail_id())->post_title; //The Title
$caption = get_post(get_post_thumbnail_id())->post_excerpt; //The Caption
$description = get_post(get_post_thumbnail_id())->post_content; // The Description
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 

$format = get_post_format() ? : 'standard';
?>
<section <?php post_class('container single_blog_main'); ?>>
	<div class="col-md-12 article-main">
		<div class="col-lg-8 offset-lg-2 article__intro">
			<span class="single_post_category"><?php the_category(', ') ?></span>
			<h1 class="article-intro-title"><?php the_title(); ?></h1>
			<div class="row align-items-center">
          <div class="col-6">
            <div class="row align-items-center">
              <div class="col-md-auto border-right">
                <div class="author-image">
                 <?php $get_author_id = get_the_author_meta('ID');
						$get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450)); ?>
                            <img src="<?php echo $get_author_gravatar; ?>" alt="">
                </div>
                <div class="author-info">
                  <span class="written-by">Written By</span><br>
                  <span class="name"><?php the_author(); ?></span>
                </div>
              </div>
              <div class="col-md-auto">
                <strong><?php the_time('F jS, Y') ?></strong><br>
                <span class="posted_in_category">Posted in <a href="#"><?php the_category(', ') ?></a></span>
              </div>
            </div>
          </div>
          <div class="col-6 text-right share_post_icons">
			<!-- Facebook -->
			<?php  $url = urlencode(get_the_permalink()); $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank"><i class="ion-social-facebook"></i></a>
			<!-- Pinterest -->
			<a href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>&amp;media=<?php echo $media;   ?>&amp;description=<?php echo $title; ?>" target="_blank"><i class="ion-social-pinterest"></i></a>
			<!-- Twitter -->
			<a href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo $url; ?>&amp;via=WPCrumbs" target="_blank"><i class="ion-social-twitter"></i></a>
          </div>
        </div>
			
		</div>
		<div class="col-md-12">
			<div class="post_featured_image">
				<?php if(has_post_thumbnail()) : ?>
					<img src="<?php echo isset($img[0]) ? $img[0] : ''; ?>" alt="<?php echo isset($alt) ? $alt : ''; ?>" title="<?php echo isset($title) ? $title : ''; ?>" />
					
				<?php endif; ?>
			</div>
			<div class="post_featured_caption">
				<figcaption><?php echo isset($caption) ? $caption : ''; ?></figcaption>
			</div>
		</div>
		<div class="col-lg-8 offset-lg-2">
			<div class="single_post_content">
				<?php the_content(); ?>
			</div>
			<?php
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			wp_link_pages(
				array(
					'before'      => '<div class="page-links">' . __( 'Pages:', 'udmbase' ),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				)
			); 
			?>
			<p ><?php the_tags(); ?></p>
		<?php endwhile; endif; ?>
		</div>
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