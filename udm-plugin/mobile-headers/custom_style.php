<?php 
	header( "Content-type: text/css; charset: UTF-8" );
	$meta = get_post_meta( $_GET['id'], 'hero_fields', true ); 	
?>
:root {
	--primary-color: <?php echo (get_option('udm_primary_color')!="" ? get_option('udm_primary_color') : "#4781FF"); ?>; 
    --secondary-color: <?php echo (get_option('udm_secondary_color')!="" ? get_option('udm_secondary_color') : "#3967CC"); ?>; 
    --global_light-color: <?php echo (get_option('udm_global_light')!="" ? get_option('udm_global_light') : "#F9F9F9"); ?>; 
    --global_dark-color: <?php echo (get_option('udm_global_dark')!="" ? get_option('udm_global_dark') : "#252525"); ?>; 
}
<?php
	if(get_post_meta( $_GET['id'], 'udm_specific_mobile_nav', true )!="")
	{
		$layout=get_post_meta( $_GET['id'], 'udm_specific_mobile_nav', true );
	}
	else
	{
		$layout=get_option('udm_mobile_nav_default');
	}
	
	if(get_post_meta( $_GET['id'], 'udm_specific_mobile_header', true )!="")
	{
		$layoutheader=get_post_meta( $_GET['id'], 'udm_specific_mobile_header', true );
	}
	else
	{
		$layoutheader=get_option('udm_mobile_header_default');
	}

	$data=unserialize(get_option('mobile_header_layout_'.$layoutheader));
	
	if($data['wbackground_color']=="custom")
	{
		$wbackground_color=$data['wbackground_custom_color'];
	}
	else if($data['wbackground_color']!="")
	{
		$wbackground_color="var(--".$data['wbackground_color']."-color)";
	}
	else
	{
		$wbackground_color="var(--primary-color)";
	} 
	
	if($data['whamberger_color']=="custom")
	{
		$whamberger_color=$data['whamberger_custom_color'];
	}
	else if($data['whamberger_color']!="")
	{
		$whamberger_color="var(--".$data['whamberger_color']."-color)";
	}
	else
	{
		$whamberger_color="#fff";
	} 
	
	
	if($data['wtext_color']=="custom")
	{
		$wtext_color=$data['wtext_custom_color'];
	}
	else if($data['wtext_color']!="")
	{
		$wtext_color="var(--".$data['wtext_color']."-color)";
	}
	else
	{
		$wtext_color="var(--global_dark-color)";
	} 
	
	?>
	
	.webapp{
		background:<?php echo $wbackground_color; ?>;
	}
	
	.webapp h3{
		color:<?php echo $wtext_color; ?>;
	}
	
	.webapp h4{
		color:rgba(255,255,255,0.7);
	}
	.webapp h5{
		color:rgba(255,255,255,0.7);
	}
	.mobileheader .webapp .menu-button::before, .webapp .menu-button::after, .webapp .menu-button span{
		background:<?php echo $whamberger_color; ?>;
	}
	<?php
		
	if($data['background_color']=="custom")
	{
		$background_color=$data['background_custom_color'];
	}
	else if($data['background_color']!="")
	{
		$background_color="var(--".$data['background_color']."-color)";
	}
	else
	{
		$background_color="var(--global_dark-color)";
	} 
	
	if($data['hamberger_color']=="custom")
	{
		$hamberger_color=$data['hamberger_custom_color'];
	}
	else if($data['hamberger_color']!="")
	{
		$hamberger_color="var(--".$data['hamberger_color']."-color)";
	}
	else
	{
		$hamberger_color="var(--global_dark-color)";
	} 
	
	?>
	
	.mobileheader .basic{
		background:<?php echo $background_color; ?>;
	}
	
	.mobileheader .basic .menu-button::before, .menu-button::after, .menu-button span, #mobile-navigation .menu-button::before{
		background:<?php echo $hamberger_color; ?>;
	}
	<?php
		
	if(strpos($layout, 'Basic_Overlay') !== false){
	$data=unserialize(get_option('mobile_nav_layout_'.$layout));
	
	if($data['background_color']=="custom")
	{
		$background_color=$data['background_custom_color'];
	}
	else if($data['background_color']!="")
	{
		$background_color="var(--".$data['background_color']."-color)";
	}
	else
	{
		$background_color="var(--global_dark-color)";
	} 
	
	if($data['text_color']=="custom")
	{
		$text_color=$data['text_custom_color'];
	}
	else if($data['text_color']!="")
	{
		$text_color="var(--".$data['text_color']."-color)";
	}
	else
	{
		$text_color="#fff";
	} 
	
	
	
	if($data['submenu_background_color']=="custom")
	{
		$submenu_background_color=$data['submenu_background_custom_color'];
	}
	else if($data['background_color']!="")
	{
		$submenu_background_color="var(--".$data['submenu_background_color']."-color)";
	}
	else
	{
		$submenu_background_color="var(--global_light-color)";
	} 
	
	
	
	if($data['submenu_text_color']=="custom")
	{
		$submenu_text_color=$data['submenu_text_custom_color'];
	}
	else if($data['submenu_text_color']!="")
	{
		$submenu_text_color="var(--".$data['submenu_text_color']."-color)";
	}
	else
	{
		$submenu_text_color="var(--global_dark-color)";
	} 
	
	if($data['background_opacity']!="")
	{
		$background_opacity = (1*$data['background_opacity'])/100;
	}
	else
	{
		$background_opacity=(1*85)/100;
	}
	
	
	?>
	
	.mobile-header-sec .mobile-menu-container
	{
		background:<?php echo $background_color; ?>;
		opacity:<?php echo $background_opacity; ?>;
	}
	
	.mobile-header-sec #mobile-menu a
	{
		color:<?php echo $text_color; ?>;
	}
	
	.mobile-header-sec .mobile-menu-container .sub-menu
	{
		background:<?php echo $submenu_background_color; ?>;
	}
	
	.mobile-header-sec .mobile-menu-container .sub-menu a
	{
		color:<?php echo $submenu_text_color; ?>;
	}
	<?php
		}else if(strpos($layout, 'Basic_Slidedown') !== false){
		$data=unserialize(get_option('mobile_nav_layout_'.$layout));
		
		if($data['background_color']=="custom")
		{
			$background_color=$data['background_custom_color'];
		}
		else if($data['background_color']!="")
		{
			$background_color="var(--".$data['background_color']."-color)";
		}
		else
		{
			$background_color="var(--global_dark-color)";
		} 
		
		if($data['text_color']=="custom")
		{
			$text_color=$data['text_custom_color'];
		}
		else if($data['text_color']!="")
		{
			$text_color="var(--".$data['text_color']."-color)";
		}
		else
		{
			$text_color="#fff";
		} 
		
		
		if($data['submenu_background_color']=="custom")
		{
			$submenu_background_color=$data['submenu_background_custom_color'];
		}
		else if($data['background_color']!="")
		{
			$submenu_background_color="var(--".$data['submenu_background_color']."-color)";
		}
		else
		{
			$submenu_background_color="var(--global_light-color)";
		} 
		
		if($data['submenu_text_color']=="custom")
		{
			$submenu_text_color=$data['submenu_text_custom_color'];
		}
		else if($data['submenu_text_color']!="")
		{
			$submenu_text_color="var(--".$data['submenu_text_color']."-color)";
		}
		else
		{
			$submenu_text_color="var(--global_dark-color)";
		} 
	?>
		.mobile-header-sec .mobile_menu
		{
			background:<?php echo $background_color; ?>;
		}
		
		.mobile-header-sec .mobile_menu li a
		{
			color:<?php echo $text_color; ?>;
		}
		
		.mobile-header-sec .mobile_menu .sub-menu
		{
			background:<?php echo $submenu_background_color; ?>;
		}
		
		.mobile-header-sec .mobile_menu .sub-menu a
		{
			color:<?php echo $submenu_text_color; ?>;
		}
	<?php
	
	}else{
		$data=unserialize(get_option('mobile_nav_layout_'.$layout));
		
		if($data['container_background_color']=="custom")
		{
			$container_background_color=$data['container_background_custom_color'];
		}
		else if($data['container_background_color']!="")
		{
			$container_background_color="var(--".$data['container_background_color']."-color)";
		}
		else
		{
			$container_background_color="var(--global_light-color)";
		}

		if($data['background_color']=="custom")
		{
			$background_color=$data['background_custom_color'];
		}
		else if($data['background_color']!="")
		{
			$background_color="var(--".$data['background_color']."-color)";
		}
		else
		{
			$background_color="#fff";
		} 
		
		if($data['text_color']=="custom")
		{
			$text_color=$data['text_custom_color'];
		}
		else if($data['text_color']!="")
		{
			$text_color="var(--".$data['text_color']."-color)";
		}
		else
		{
			$text_color="var(--global_dark-color)";
		} 
		
	
		if($data['submenu_header_color']=="custom")
		{
			$submenu_header_color=$data['submenu_header_custom_color'];
		}
		else if($data['background_color']!="")
		{
			$submenu_header_color="var(--".$data['submenu_header_color']."-color)";
		}
		else
		{
			$submenu_header_color="var(--primary-color)";
		} 
		
		if($data['submenu_header_text_color']=="custom")
		{
			$submenu_header_text_color=$data['submenu_header_text_custom_color'];
		}
		else if($data['submenu_header_text_color']!="")
		{
			$submenu_header_text_color="var(--".$data['submenu_header_text_color']."-color)";
		}
		else
		{
			$submenu_header_text_color="var(--global_dark-color)";
		} 
	?>
		.mobile-header-sec #mobile-slide-in
		{
			background:<?php echo $container_background_color; ?>;
		}
		
		.mobile-header-sec #mobile-slide-in ul.menu
		{
			background:<?php echo $background_color; ?>;
		}
		
		.mobile-header-sec #mobile-slide-in li a
		{
			color:<?php echo $text_color; ?>;
		}
		.mobile-header-sec #mobile-slide-in .sub-menu
		{
			background:transparent;
		}
		.mobile-header-sec #mobile-slide-in .sub-menu.active li:first-child
		{
			background:<?php echo $submenu_header_color; ?>;
		}
		.mobile-header-sec #mobile-slide-in .sub-menu.active li:first-child a
		{
			color:<?php echo $submenu_header_text_color; ?>;
		}
	<?php
		}
		
	?>