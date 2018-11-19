<?php
/*
	Template Name: UDM Page
*/
get_header();
$post = get_post();
if ( $post && preg_match( '/vc_row/', $post->post_content ) ) {
?>
	<main class="wrapper" role="main">	
		<?php
			while(have_posts()):the_post();	
				the_content();
			endwhile; wp_reset_query();
		?>
	</main>
<?php
}
else{
	while(have_posts()):the_post();
		the_content();
	endwhile; wp_reset_query
}
get_footer();
?>