<?php
	if(get_option( 'udm_logo_url' ))
	{
		$logo = get_option( 'udm_logo_url' );
	}
	else
	{
		$logo = get_template_directory_uri().'/udm-plugin/img/courts-border.png';
	}
?>  
<!-- Mobile Navigation -->
<header class="d-md-none mobile-menu">
	<div class="container">
		<div class="row align-items-center">
            <div class="col col-sm-12 text-center mobile_logo">
				<a href="<?php echo esc_url( home_url() ); ?>"><img class="header--logo" src="<?php echo isset($logo) ? $logo : ''; ?>" /></a>
			</div>
        </div>
        <div class="row menu_bar_custom">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'items_wrap'  => '<div id="dl-menu" class="dl-menuwrapper"><button class="dl-trigger">Open Menu</button><ul class="dl-menu">%3$s</ul></div>','walker' => new My_Walker_Nav_Menu()));  ?>
			<div class="col mob-no-menu" >
				<p><?php if(get_option('udm_mobile_top_text')!=""){ echo get_option('udm_mobile_top_text'); }else{ echo "Call for your free estimate"; } ?></p>
				<h6><a href="tel:<?php if(get_option('udm_phone_number')!=""){ echo get_option('udm_phone_number'); }else{ echo "111-111-1111"; } ?>"><?php if(get_option('udm_phone_number')!=""){ echo get_option('udm_phone_number'); }else{ echo "111-111-1111"; } ?></a></h6>
			</div>
		</div>
	</div>
</header>