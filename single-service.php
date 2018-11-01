<?php
	get_header();
	while ( have_posts() ) : the_post();
		get_template_part( 'content', 'service' );
	endwhile;
	get_footer();
?> 
  