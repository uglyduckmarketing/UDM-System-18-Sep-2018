<?php
$logoPath = get_theme_mod('logo_image');
$lightlogoPath = get_theme_mod('solutions_image');
?>
<div class="nav-header">
	<div class="container">
		<div class="row">
			<div class="col m6 s12">
				<a href="<?php echo esc_url( home_url() ); ?>" class="brand-logo">
					<img src="<?php echo isset($logoPath) ? $logoPath : '' ?>"/>
				</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons hide-on-med-and-up left">menu</i></a>
			</div>
			<div class="right secondary-content hide-on-small-only">
				<?php dynamic_sidebar( 'header_widget' ); ?>
			</div>
		</div>
	</div>
</div>
<nav class="hide-on-small-only">
	<div class="nav-wrapper">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'left hide-on-small-only' ) ); ?>
				</div>
			</div>
		</div>
	</div>
</nav>