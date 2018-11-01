<main class="wrapper" role="main">
	<section class="container">
		<div class="row">
			<!-- LEFT SIDEBAR -->
			<?php if (is_active_sidebar( 'left_blog_sidebar' )) { ?>
				<div class="col-md-4 hidden-xs">
					<div class="sidebar blog-sidebar">
						<?php dynamic_sidebar('left_blog_sidebar'); ?>
					</div>
				</div>
				<div class="col-md-8 col-sm-12">
					<?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
				</div>
			<!-- RIGHT SIDEBAR -->
			<?php }  elseif (is_active_sidebar( 'right_blog_sidebar' )) { ?>
				<div class="col-md-8 col-sm-12">
					<?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
				</div>
				<div class="col-md-4 hidden-xs">
					<div class="sidebar blog-sidebar hidden-xs">
						<?php dynamic_sidebar( 'right_blog_sidebar' ); ?>
					</div>
				</div>
			<!-- FULLWIDTH -->
			<?php }  else { ?>
				<div class="col-md-8 col-md-offset-2 col-sm-12">
					<?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
				</div>
		<?php } ?>
		</div>
	</section>
	<?php
	the_post();
  $prevPost = get_previous_post();
  $prevthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($prevPost->ID), array( 5600,1000 ), false, '' );
	$nextPost = get_next_post();
  $nextthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($nextPost->ID), array( 5600,1000 ), false, '' );
	$prevUrl = get_permalink(get_adjacent_post(false,'',true));
	$nextUrl = get_permalink(get_adjacent_post(false,'',false));
	?>
	<div class="colored-bg">
		<?php if ( is_a( $prevPost, 'WP_Post' ) && is_a( $nextPost, 'WP_Post' ) ) : ?>
		<a href="<?php echo $prevUrl; ?>" class="col-sm-6 blog-nav-block">
			<div class="blog-nav-image" style="background: url(<?php echo $prevthumbnail[0]; ?> ) no-repeat scroll center / cover !important; height: 300px;"></div>
			<div class="blog-nav-content">
				<span class="post-status">Previous Article</span>
				<h3><?php echo get_the_title( $prevPost->ID ); ?></h3>
			</div>
		</a>
		<a href="<?php echo $nextUrl; ?>" class="col-sm-6 blog-nav-block">
			<div class="blog-nav-image" style="background: url(<?php echo $nextthumbnail[0]; ?> ) no-repeat scroll center / cover !important; height: 300px;"></div>
			<div class="blog-nav-content">
				<span class="post-status">Next Article</span>
				<h3><?php echo get_the_title( $nextPost->ID ); ?></h3>
			</div>
		</a>
		<?php elseif ( is_a( $prevPost, 'WP_Post' ) && !is_a( $nextPost, 'WP_Post' ) ) : ?>
		<a href="<?php echo $prevUrl; ?>" class="col-sm-12 blog-nav-block">
			<div class="blog-nav-image" style="background: url(<?php echo $prevthumbnail[0]; ?> ) no-repeat scroll center / cover !important; height: 300px;"></div>
			<div class="blog-nav-content">
				<span class="post-status">Previous Article</span>
				<h3><?php echo get_the_title( $prevPost->ID ); ?></h3>
			</div>
		</a>
		<?php elseif ( !is_a( $prevPost, 'WP_Post' ) && is_a( $nextPost, 'WP_Post' ) ) : ?>
		<a href="<?php echo $nextUrl; ?>" class="col-sm-12 blog-nav-block">
			<div class="blog-nav-image" style="background: url(<?php echo $nextthumbnail[0]; ?> ) no-repeat scroll center / cover !important; height: 300px;"></div>
			<div class="blog-nav-content">
				<span class="post-status">Next Article</span>
				<h3><?php echo get_the_title( $nextPost->ID ); ?></h3>
			</div>
		</a>
		<?php endif; ?>
</main>
