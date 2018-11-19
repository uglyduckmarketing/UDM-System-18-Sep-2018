<?php
global $post;
$thumbnail_id = get_post_thumbnail_id( $post->ID ); // Post Image ID
$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); // Image SRC
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); // The Alt Tag
$title = get_post(get_post_thumbnail_id())->post_title; //The Title
$caption = get_post(get_post_thumbnail_id())->post_excerpt; //The Caption
$description = get_post(get_post_thumbnail_id())->post_content; // The Description
?>
<section class="hero-background <?php echo get_option('hero_title_choice'); ?>">
	<img class="featured-image" src="<?php echo isset($img[0]) ? $img[0] : ''; ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>" />
	<div class="container">
		<h2><?php the_title(); ?></h2>
	</div>
</section>