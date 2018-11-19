<!-- Mobile Navigation -->
<header class="d-md-none">
	<div class="container">
		<div class="row align-items-center">
            <div class="col col-sm-12 text-center mobile_logo">
				<a href="<?php echo esc_url( home_url() ); ?>"><img class="header--logo" src="<?php echo get_option( 'logo_url' ); ?>"  style="background:<?php if(get_option('udm_logo_bg_color')==''){ echo 'transparent'; }else{ echo get_option('udm_logo_bg_color'); } ?>;" /></a>
			</div>
        </div>
        <div class="row menu_bar_custom yellow_bg">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'items_wrap'  => '<div id="dl-menu" class="dl-menuwrapper"><button class="dl-trigger">Open Menu</button><ul class="dl-menu">%3$s</ul></div>','walker' => new My_Walker_Nav_Menu()));  ?>
			<div class="col mob-no-menu" style="background:<?php if(get_option('udm_top_right_background')==''){ echo 'transparent'; }else{ echo get_option('udm_top_right_background'); } ?>;">
                <p <?php if(get_option('udm_action_button_txt_align')=="top"){ echo "class='full_flex'"; }else{  }  ?>><?php echo get_option('udm_call_phone_txt'); ?></p>
			    <h6><a href="tel:<?php echo get_option('phone_number'); ?>"><?php echo get_option('phone_number'); ?></a></h6>
			</div>
		</div>
	</div>
</header>