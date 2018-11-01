<?php
$logoPath = get_theme_mod('logo_image');
$lightlogoPath = get_theme_mod('solutions_image');
?>
<?php if(get_option('sticky_nav',false)) : ?>
<?php endif; ?>
<div class="container">
	<div class="row">
		<div class="nav-section left-nav col-md-5 hidden-sm-down">
			<nav id="site-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'left', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>
		<div class="col-md-2 col-sm-10 logo-section">
			<?php if ($logoPath) { ?>
				<a id="logo" href="<?php bloginfo("url"); ?>"><img src="<?php echo $logoPath ?>"/></a>
			<?php } ?>
		</div>
		<div class="col-xs-5 additional hidden-sm-down nav-section right-nav">
			<nav id="site-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'right', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>
		<div class="col-xs-2 hidden-md-up">
			<a class="menu-button"><i class="ion-navicon"></i></a>
		</div>
	</div>
</div>
