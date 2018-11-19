<?php
$logoPath = get_theme_mod('logo_image');
$lightlogoPath = get_theme_mod('solutions_image');
?>
<nav>
	<div class="nav-wrapper">
		<div class="container">
			<div class="row">
				<div class="col m5 s12 hide-on-med-and-down">
					<?php wp_nav_menu( array( 'theme_location' => 'left', 'menu_class' => 'left hide-on-med-and-down' ) ); ?>
				</div>
				<div class="col m2 s12 center">
					<a href="<?php echo esc_url( home_url() ); ?>" class="brand-logo">
						<img src="<?php echo isset($logoPath) ? $logoPath : '' ?>"/>
					</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				</div>
				<div class="col m5 s12 hide-on-med-and-down">
					<?php wp_nav_menu( array( 'theme_location' => 'right', 'menu_class' => 'right hide-on-med-and-down' ) ); ?>
				</div>
			</div>
		</div>
	</div>
</nav>