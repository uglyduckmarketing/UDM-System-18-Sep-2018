<?php
	get_header();
?>
<main class="wrapper" role="main">
	<section class="container">
		<div class="row">
			<?php
			while(have_posts()):the_post();
			
			$gallery=get_field('gallery');
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
