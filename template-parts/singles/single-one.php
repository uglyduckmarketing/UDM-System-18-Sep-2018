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
	<div class="col-md-10 offset-md-1 article-main">
		<div class="article__intro">
			<h1 class="article__intro-title"><?php the_title(); ?></h1>
			<p class="author-information">By <?php the_author(); ?> - <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></p>
			<?php if(has_post_thumbnail()) : ?>
			<img src="<?php echo isset($img[0]) ? $img[0] : ''; ?>" alt="<?php echo isset($alt) ? $alt : ''; ?>" title="<?php echo isset($title) ? $title : ''; ?>" />
			<?php endif; ?>
		</div>
			<?php the_content(); ?>
			<div class="share-article">
				<h4 class="share-title">Share This Article</h4>
				<!-- Facebook -->
				<a class="social-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank">
					<i class="ion-social-facebook"></i>
				</a>
				<!-- Google+ -->
				<a class="social-google" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank">
					<i class="ion-social-googleplus"></i>
				</a>
				<!-- Pinterest -->
				<a class="social-pinterest" href="//pinterest.com/pin/create/link/?url=<?php echo get_permalink();?>">
					<i class="ion-social-pinterest"></i>
				</a>
				<!-- Twitter -->
				<a class="social-twitter" href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&amp;" target="_blank">
					<i class="ion-social-twitter"></i>
				</a>
			</div>
		<?php endwhile; endif; ?>
	</div>
</section>
<br /><br />
