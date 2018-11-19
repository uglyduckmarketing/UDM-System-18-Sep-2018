<?php /* Template Name: Galleries */ ?>
<?php get_header(); ?>
<main class="wrapper" role="main" style="padding-top: 140px;">
	<div class="container">
		<div class="row">
			<?php $args = array('post_type' => 'gallery', 'posts_per_page' => -1); ?>
      <?php $loop = new WP_Query($args); ?>
      <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php
			global $post;
			$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
			$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
			$title = get_post(get_post_thumbnail_id())->post_title;
			$caption = get_post(get_post_thumbnail_id())->post_excerpt;
			$description = get_post(get_post_thumbnail_id())->post_content;
			?>
			<div class="col-md-4 col-sm-12 gallery__block">
				<a href="<?php the_permalink(); ?>" class="gallery__block-wrap">
					<div class="gallery__block-image">
						<img src="<?php echo isset($img[0]) ? $img[0] : ''; ?>" alt="<?php echo isset($alt) ? $alt : ''; ?>" title="<?php echo isset($title) ? $title : ''; ?>" />
					</div>
					<h2 class="gallery__block-title"><?php the_title(); ?></h2>
					<span class="gallery__block-button btn"><?php the_content(); ?>View Gallery <i class="ion-android-arrow-forward"></i></span>
				</a>
			</div>
      <?php endwhile; endif; ?>
      <?php wp_reset_postdata(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
