<?php
global $post;
if ( have_posts() ) : while ( have_posts() ) : the_post();
$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
$title = get_post(get_post_thumbnail_id())->post_title;
$caption = get_post(get_post_thumbnail_id())->post_excerpt;
$description = get_post(get_post_thumbnail_id())->post_content;
?>
<a class="card blog__item" href="<?php the_permalink(); ?>">
	<div class="blog__item-container">
		<div class="blog__item-image">
			<img src="<?php echo isset($img[0]) ? $img[0] : ''; ?>" title="<?php echo esc_attr($title); ?>" alt="<?php echo esc_attr($alt); ?>" />
		</div>
		<div class="blog__item-content">
			<h3><?php the_title(); ?></h3>
			<span class="blog__item-date"><?php echo get_the_date(); ?></span>
		</div>
	</div>
</a>
<?php endwhile; endif; ?>