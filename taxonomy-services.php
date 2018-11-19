<?php 
get_header();
$term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
?>
<main style="padding: 6.666rem 0;">
	<div class="container">
		<div class="row">
			<?php
			$loop = new WP_Query( array('posts_per_page' => 999, 'tax_query' => array(
				array(
					'taxonomy' => 'services',
					'terms'    => $term,
				),
			), ));
			?>
			<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
				<div class="col-md-4 padded_col">
					<a href="<?php the_permalink(); ?>" class="service__box" style="background-image: url(<?php echo isset($img[0]) ? $img[0] : ''; ?>)">
						<div class="padded_col-overlay"></div>
						<div class="service_box-content">
							<h3><?php the_title(); ?></h3>
							<span>View Service</span>
						</div>
					</a>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</main>
<?php
get_footer();
?>