<?php

 get_header(); ?>
<main class="wrapper" role="main">
	<div class="container">
		<div class="row">
			<div class="udm-inner-cont">
			<?php 
				while(have_posts()):the_post();
					the_content();
				endwhile; wp_reset_query
			?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
