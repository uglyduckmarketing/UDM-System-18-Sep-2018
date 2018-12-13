<?php
	get_header();
?>
<main class="wrapper" role="main">
	<section class="container">
		<div class="row">
			<?php
			while(have_posts()):the_post();
			
			$gallery=unserialize(get_post_meta($gallery,'my_gallery_data', true)); 
			if( $gallery ): ?>
			<?php
				include get_template_directory() . '/udm-plugin/single-gallery.php';
			?>

			<?php 
			else:

				the_content();

			endif; ?>

			<?php
			endwhile;
			?>

		</div>
	</section>
</main>

  
<?php
	get_footer();
?>
