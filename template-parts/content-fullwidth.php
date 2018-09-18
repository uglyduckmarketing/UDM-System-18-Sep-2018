<main class="wrapper" role="main">
	<section class="container">
	<div class="row">
		<div class="col s12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
		</div>
	</div>
	</section>
</main>
