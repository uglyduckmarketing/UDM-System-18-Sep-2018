<?php get_header(); ?>

<?php
if ( is_shop() || is_product_category() || is_product_tag() ) { // Only run on shop archive pages, not single products or other pages
// Products per page
	$per_page = 6;
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	if ( get_query_var( 'taxonomy' ) ) { // If on a product taxonomy archive (category or tag)
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => $per_page,
			'paged' => $paged,
			'tax_query' => array(
				array(
					'taxonomy' => get_query_var( 'taxonomy' ),
					'field'    => 'slug',
					'terms'    => get_query_var( 'term' ),
				),
			),
		);
	} else { // On main shop page

		$args = array(
			'post_type' => 'product',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => $per_page,
			'paged' => get_query_var( 'paged' ),
		);
	}
// Set the query
$products = new WP_Query( $args ); ?>
<div class="container shop-container">
	<!--<div class="col-md-3 hidden-sm-down">
		<?php //dynamic_sidebar( 'woo_sidebar' ); ?>
	</div>-->
	<div class="col-md-12">
		<?php
		// Standard loop
		if ( $products->have_posts() ) :
			while ( $products->have_posts() ) : $products->the_post();
			global $woocommerce;
			$currency = get_woocommerce_currency_symbol();
			$product = new WC_Product( get_the_ID() );
			$price = $product->price;
			$sale = get_post_meta( get_the_ID(), '_sale_price', true);
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($products->ID), array( 5600,1000 ), false, '' );
			?>
			<div class="col-xl-3 col-lg-4 col-md-4 col-xs-6 shop_items">
				<a href="<?php the_permalink(); ?>" class="shop_img" style="background: url(<?php echo $src[0]; ?> ) no-repeat scroll center / cover !important; width: 100%; display: block;"></a>
				<h3><?php the_title(); ?></h3>
				<?php echo $currency; echo $price; ?>
			</div>
		<?php endwhile; ?>

		<?php if ($products->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
	  <div class="prev-next-posts">
	    <div class="prev-posts-link">
	      <span class="older-items"><?php echo get_next_posts_link( 'Older Entries', $products->max_num_pages ); // display older posts link ?></span>
	    </div>
	    <div class="next-posts-link">
	      <?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
	    </div>
	  </div>

		<?php } ?>


		<?php	wp_reset_postdata();

		else :
			echo '<div class="empty-shop-message"><p><span class="emoji">😥 </span>No Products Found</p></div>';

		endif;
	} else if (is_product()) { ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php wc_get_template_part( 'content', 'single-product' ); ?>
			<div class="grey-box">
				<div class="container">
					<?php echo do_shortcode('[related_products per_page="4" columns="4"]'); ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php } else { // If not on archive page (cart, checkout, etc), do normal operations
			woocommerce_content();
		} ?>
	</div>
</div>

<?php get_footer(); ?>
