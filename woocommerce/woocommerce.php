<?php get_header(); ?>

<main class="wrapper" role="main">
	<?php if(!is_product()) { ?>
		<div class="paint-sction" style="margin-bottom: 0px !important; background:url(http://hatchingbigideas.com/krbc/wp-content/uploads/2016/11/paint-border.png);">
			<h1>KRBC GEAR</h1>
		</div>
	<?php } ?>
	<section class="container">
		<div class="col-sm-12 main-woo">
			<?php woocommerce_content(); ?>
		</div>
	</section>
	<?php if(is_product()) { ?>
	<div class="col-sm-12" style="background: #fff;">
		<div class="container">
			 <?php echo do_shortcode('[related_products per_page="4" columns="4"]'); ?>
		 </div>
	 </div>
	<?php } ?>
</main>

<?php get_footer(); ?>
