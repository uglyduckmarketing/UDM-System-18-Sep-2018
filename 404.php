<?php
/**
 * The template for displaying 404 pages (not found).
 * @package uglyduck
 */

get_header(); ?>

<main class="wrapper" role="main" style="padding-top: 150px; padding-bottom: 80px;">
	<section class="container">
		<div class="row">
			<div class="col-sm-12" style="text-align: center;">
				<h1>Oops, nothing to display here.</h1>
				<p>You might have better luck on the <a href="<?php bloginfo('url'); ?>">homepage</a>.
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
