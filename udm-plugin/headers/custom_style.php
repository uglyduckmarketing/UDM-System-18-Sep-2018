<?php 
	header( "Content-type: text/css; charset: UTF-8" );
?>
:root {
	--primary-color: <?php echo (get_option('udm_primary_color')!="" ? get_option('udm_primary_color') : "#4781FF"); ?>; 
    --secondary-color: <?php echo (get_option('udm_secondary_color')!="" ? get_option('udm_secondary_color') : "#3967CC"); ?>; 
    --global_light-color: <?php echo (get_option('udm_global_light')!="" ? get_option('udm_global_light') : "#F9F9F9"); ?>; 
    --global_dark-color: <?php echo (get_option('udm_global_dark')!="" ? get_option('udm_global_dark') : "#252525"); ?>; 
}
<?php
	if(get_post_meta( $_GET['id'], 'udm_specific_header', true )!="")
	{
		$layout=get_post_meta( $_GET['id'], 'udm_specific_header', true );
	}
	else
	{
		$layout=get_option('udm_header_default');
	}
	if(strpos($layout, 'Basic_Header') !== false){
	$data=unserialize(get_option('header_layout_'.$layout));
	
	if($data['button_color']=="custom")
	{
		$button_color=$data['button_custom_color'];
	}
	else if($data['button_color']!="")
	{
		$button_color="var(--".$data['button_color']."-color)";
	}
	else
	{
		$button_color="var(--primary-color)";
	} 
	
	if($data['right_header_color']=="custom")
	{
		$right_header_color=$data['right_header_custom_color'];
	}
	else if($data['right_header_color']!="")
	{
		$right_header_color="var(--".$data['right_header_color']."-color)";
	}
	else
	{
		$right_header_color="var(--primary-color)";
	} 
	
	if($data['right_header_phone_color']=="custom")
	{
		$right_header_phone_color=$data['right_header_phone_custom_color'];
	}
	else if($data['right_header_phone_color']!="")
	{
		$right_header_phone_color="var(--".$data['right_header_phone_color']."-color)";
	}
	else
	{
		$right_header_phone_color="var(--primary-color)";
	} 
	
	if($data['button_text_color']=="custom")
	{
		$button_text_color=$data['button_text_custom_color'];
	}
	else if($data['button_text_color']!="")
	{
		$button_text_color="var(--".$data['button_text_color']."-color)";
	}
	else
	{
		$button_text_color="#fff";
	} 
	if($data['background_color']=="custom")
	{
		$background=$data['background_custom_color'];
	}
	else if($data['background_color']!="")
	{
		$background="var(--".$data['background_color']."-color)";
	}
	else
	{
		$background="#fff";
	} 
	if($data['topbar_background_color']=="custom")
	{
		$topbar_background=$data['topbar_background_custom_color'];
	}
	else if($data['topbar_background_color']!="")
	{
		$topbar_background="var(--".$data['topbar_background_color']."-color)";
	}
	else
	{
		$topbar_background="#f5f5f5";
	} 
	
	if($data['link_color']=="custom")
	{
		$link_color=$data['link_custom_color'];
	}
	else if($data['link_color']!="")
	{
		$link_color="var(--".$data['link_color']."-color)";
	}
	else
	{
		$link_color="var(--global_dark-color)";
	} 
	
	if($data['topbar_link_color']=="custom")
	{
		$topbar_link_color=$data['topbar_link_custom_color'];
	}
	else if($data['topbar_link_color']!="")
	{
		$topbar_link_color="var(--".$data['topbar_link_color']."-color)";
	}
	else
	{
		$topbar_link_color="var(--primary-color)";
	} 
	
	if($data['topbar_text_color']=="custom")
	{
		$topbar_text_color=$data['topbar_text_custom_color'];
	}
	else if($data['topbar_text_color']!="")
	{
		$topbar_text_color="var(--".$data['topbar_text_color']."-color)";
	}
	else
	{
		$topbar_text_color="var(--primary-color)";
	} 
	
	
	if(get_option('udm_logo_size')!="")
	{
		$logo_size=get_option('udm_logo_size');
	}
	else
	{
		$logo_size="180";
	}
	
	if($data['dropdownstyle']!="")
	{
		$dropdownlayout=$data['dropdownstyle'];
	}
	else
	{
		$dropdownlayout=get_option('udm_submenu_default');
	}
	
	if(strpos($dropdownlayout, 'Basic_') !== false){
	$subdata=unserialize(get_option('submenu_layout_'.$dropdownlayout));
	if($subdata['background_color']=="custom")
	{
		$subbackground=$subdata['background_custom_color'];
	}
	else if($subdata['background_color']!="")
	{
		$subbackground="var(--".$subdata['background_color']."-color)";
	}
	else
	{
		$subbackground="var(--primary-color)";
	} 
	
	if($subdata['text_color']=="custom")
	{
		$subtext_color=$subdata['text_custom_color'];
	}
	else if($subdata['text_color']!="")
	{
		$subtext_color="var(--".$subdata['text_color']."-color)";
	}
	else
	{
		$subtext_color="#fff";
	} 
	
	if($subdata['hover_text_color']=="custom")
	{
		$subhover_text_color=$subdata['hover_text_custom_color'];
	}
	else if($subdata['hover_text_color']!="")
	{
		$subhover_text_color="var(--".$subdata['hover_text_color']."-color)";
	}
	else
	{
		$subhover_text_color="var(--global_light-color)";
	}

	}	
	
?>

header .basic_header_default{
	background:<?php echo isset($background) ? $background : ''; ?>;
}
.basic_header_default a.navbar-brand img
{
	width: <?php echo esc_attr($logo_size); ?>px;
	max-width: <?php echo esc_attr($logo_size); ?>px;
}
header .btn{
	background:<?php echo esc_attr($button_color); ?>;
	border-color:<?php echo esc_attr($button_color); ?>;
	color:<?php echo esc_attr($button_text_color); ?>;
	
}

header .btn .fa{
	border-left: 1px solid <?php echo esc_attr($button_color); ?>;	
}
header a{
	color:<?php echo esc_attr($link_color); ?>;
}

header .top_basic_header{
	background:<?php echo esc_attr($topbar_background); ?>;
}
header .top_basic_header a{
	color:<?php echo esc_attr($topbar_link_color); ?>;
}
header .top_basic_header p{
	color:<?php echo esc_attr($topbar_text_color); ?>;
}

header ul.sub-menu{
	background:<?php echo isset($subbackground) ? $subbackground : ''; ?>;
}

header ul.sub-menu li a{
	color:<?php echo esc_attr($subtext_color); ?>;
}
header ul.sub-menu li a:hover{
	color:<?php echo esc_attr($subhover_text_color); ?>;
}

header .right_side_header .right_side_text{
	color:<?php echo esc_attr($right_header_color); ?>;
}

header .right_side_header .right_side_phone{
	color:<?php echo esc_attr($right_header_phone_color); ?>;
}

<?php
	}else if(strpos($layout, 'Stacked_Header') !== false){
	$data=unserialize(get_option('header_layout_'.$layout));
	
	if($data['logo_size']=="large")
	{
		$logo_size="300";
	}
	else if(get_option('udm_logo_size')!="")
	{
		$logo_size=get_option('udm_logo_size');
	}
	else
	{
		$logo_size="180";
	}
	
	if($data['logo_background_type']=="color")
	{
		if($data['logo_background_color']=="custom")
		{
			$logo_background=$data['logo_background_custom_color'];
		}
		else if($data['logo_background_color']!="")
		{
			$logo_background="var(--".$data['logo_background_color']."-color)";
		}
		else
		{
			$logo_background="#fff";
		}
	}
	else
	{
		$logo_background="url(".$data['logo_background_image'].")";
	}
	
	if($data['lefttopbar_social_icon_color']=="custom")
	{
		$lefttopbar_social_icon_color=$data['lefttopbar_social_icon_custom_color'];
	}
	else if($data['lefttopbar_social_icon_color']!="")
	{
		$lefttopbar_social_icon_color="var(--".$data['lefttopbar_social_icon_color']."-color)";
	}
	else
	{
		$lefttopbar_social_icon_color="#fff";
	} 
	
	if($data['middletopbar_social_icon_color']=="custom")
	{
		$middletopbar_social_icon_color=$data['middletopbar_social_icon_custom_color'];
	}
	else if($data['middletopbar_social_icon_color']!="")
	{
		$middletopbar_social_icon_color="var(--".$data['middletopbar_social_icon_color']."-color)";
	}
	else
	{
		$middletopbar_social_icon_color="#fff";
	} 
	
	
	if($data['righttopbar_social_icon_color']=="custom")
	{
		$righttopbar_social_icon_color=$data['righttopbar_social_icon_custom_color'];
	}
	else if($data['righttopbar_social_icon_color']!="")
	{
		$righttopbar_social_icon_color="var(--".$data['righttopbar_social_icon_color']."-color)";
	}
	else
	{
		$righttopbar_social_icon_color="#fff";
	} 
	if($data['bottombar_social_icon_color']=="custom")
	{
		$bottombar_social_icon_color=$data['bottombar_social_icon_custom_color'];
	}
	else if($data['bottombar_social_icon_color']!="")
	{
		$bottombar_social_icon_color="var(--".$data['bottombar_social_icon_color']."-color)";
	}
	else
	{
		$bottombar_social_icon_color="#fff";
	} 
	
	if($data['bottombar_background_color']=="custom")
	{
		$bottombar_background_color=$data['bottombar_background_custom_color'];
	}
	else if($data['bottombar_background_color']!="")
	{
		$bottombar_background_color="var(--".$data['bottombar_background_color']."-color)";
	}
	else
	{
		$bottombar_background_color="#fff";
	} 
	
	if($data['bottombar_nav_link_color']=="custom")
	{
		$bottombar_nav_link_color=$data['bottombar_nav_link_custom_color'];
	}
	else if($data['bottombar_nav_link_color']!="")
	{
		$bottombar_nav_link_color="var(--".$data['bottombar_nav_link_color']."-color)";
	}
	else
	{
		$bottombar_nav_link_color="var(--global_dark-color)";
	} 
	
	if($data['dropdownstyle']!="")
	{
		$dropdownlayout=$data['dropdownstyle'];
	}
	else
	{
		$dropdownlayout=get_option('udm_submenu_default');
	}
	
	if(strpos($dropdownlayout, 'Basic_') !== false){
	$subdata=unserialize(get_option('submenu_layout_'.$dropdownlayout));
	if($subdata['background_color']=="custom")
	{
		$subbackground=$subdata['background_custom_color'];
	}
	else if($subdata['background_color']!="")
	{
		$subbackground="var(--".$subdata['background_color']."-color)";
	}
	else
	{
		$subbackground="var(--primary-color)";
	} 
	
	if($subdata['text_color']=="custom")
	{
		$subtext_color=$subdata['text_custom_color'];
	}
	else if($subdata['text_color']!="")
	{
		$subtext_color="var(--".$subdata['text_color']."-color)";
	}
	else
	{
		$subtext_color="#fff";
	} 
	
	if($subdata['hover_text_color']=="custom")
	{
		$subhover_text_color=$subdata['hover_text_custom_color'];
	}
	else if($subdata['hover_text_color']!="")
	{
		$subhover_text_color="var(--".$subdata['hover_text_color']."-color)";
	}
	else
	{
		$subhover_text_color="var(--global_light-color)";
	}

	}	
?>


header .stacked_header .logo_stacked{
	background:<?php echo isset($logo_background) ? $logo_background : ''; ?>;
}

header .stacked_header .logo_stacked img{
	width:<?php echo esc_attr($logo_size); ?>px;
	max-width:<?php echo esc_attr($logo_size); ?>px;
}

header .lefttopsocial li a i{
	color:<?php echo esc_attr($lefttopbar_social_icon_color); ?>;
}

header .middletopsocial li a i{
	color:<?php echo esc_attr($middletopbar_social_icon_color); ?>;
}

header .righttopsocial li a i{
	color:<?php echo esc_attr($righttopbar_social_icon_color); ?>;
}

header .bottomsocial li a i{
	color:<?php echo esc_attr($bottombar_social_icon_color); ?>;
}

header .stacked_header .bottom_stacked_header .navbar {
   background: <?php echo esc_attr($bottombar_background_color); ?>;
}

header .stacked_header .bottom_stacked_header .navbar ul li a {
    color: <?php echo esc_attr($bottombar_nav_link_color); ?>;
}

header .stacked_header .bottom_stacked_header .navbar ul li ul.sub-menu{
	background:<?php echo isset($subbackground) ? $subbackground : ''; ?>;
}

header .stacked_header .bottom_stacked_header .navbar ul li ul.sub-menu li a{
	color:<?php echo esc_attr($subtext_color); ?>;
}
header .stacked_header .bottom_stacked_header .navbar ul li ul.sub-menu li a:hover{
	color:<?php echo esc_attr($subhover_text_color); ?>;
}

<?php
	}
	else if(strpos($layout, 'New_Header') !== false){
	$data=unserialize(get_option('header_layout_'.$layout));
	
	if($data['logo_size']=="large")
	{
		$logo_size="300";
	}
	else if(get_option('udm_logo_size')!="")
	{
		$logo_size=get_option('udm_logo_size');
	}
	else
	{
		$logo_size="180";
	}
	
	if($data['logo_background_type']=="color")
	{
		if($data['logo_background_color']=="custom")
		{
			$logo_background=$data['logo_background_custom_color'];
		}
		else if($data['logo_background_color']!="")
		{
			$logo_background="var(--".$data['logo_background_color']."-color)";
		}
		else
		{
			$logo_background="#fff";
		}
	}
	else
	{
		$logo_background="url(".$data['logo_background_image'].")";
	}
	
	if($data['lefttopbar_social_icon_color']=="custom")
	{
		$lefttopbar_social_icon_color=$data['lefttopbar_social_icon_custom_color'];
	}
	else if($data['lefttopbar_social_icon_color']!="")
	{
		$lefttopbar_social_icon_color="var(--".$data['lefttopbar_social_icon_color']."-color)";
	}
	else
	{
		$lefttopbar_social_icon_color="#fff";
	} 
	
	if($data['middletopbar_social_icon_color']=="custom")
	{
		$middletopbar_social_icon_color=$data['middletopbar_social_icon_custom_color'];
	}
	else if($data['middletopbar_social_icon_color']!="")
	{
		$middletopbar_social_icon_color="var(--".$data['middletopbar_social_icon_color']."-color)";
	}
	else
	{
		$middletopbar_social_icon_color="#fff";
	} 
	
	
	if($data['righttopbar_social_icon_color']=="custom")
	{
		$righttopbar_social_icon_color=$data['righttopbar_social_icon_custom_color'];
	}
	else if($data['righttopbar_social_icon_color']!="")
	{
		$righttopbar_social_icon_color="var(--".$data['righttopbar_social_icon_color']."-color)";
	}
	else
	{
		$righttopbar_social_icon_color="#fff";
	} 
	if($data['bottombar_social_icon_color']=="custom")
	{
		$bottombar_social_icon_color=$data['bottombar_social_icon_custom_color'];
	}
	else if($data['bottombar_social_icon_color']!="")
	{
		$bottombar_social_icon_color="var(--".$data['bottombar_social_icon_color']."-color)";
	}
	else
	{
		$bottombar_social_icon_color="#fff";
	} 
	
	if($data['bottombar_background_color']=="custom")
	{
		$bottombar_background_color=$data['bottombar_background_custom_color'];
	}
	else if($data['bottombar_background_color']!="")
	{
		$bottombar_background_color="var(--".$data['bottombar_background_color']."-color)";
	}
	else
	{
		$bottombar_background_color="#fff";
	} 
	
	if($data['bottombar_nav_link_color']=="custom")
	{
		$bottombar_nav_link_color=$data['bottombar_nav_link_custom_color'];
	}
	else if($data['bottombar_nav_link_color']!="")
	{
		$bottombar_nav_link_color="var(--".$data['bottombar_nav_link_color']."-color)";
	}
	else
	{
		$bottombar_nav_link_color="var(--global_dark-color)";
	} 
	
	if($data['dropdownstyle']!="")
	{
		$dropdownlayout=$data['dropdownstyle'];
	}
	else
	{
		$dropdownlayout=get_option('udm_submenu_default');
	}
	
	if(strpos($dropdownlayout, 'Basic_') !== false){
	$subdata=unserialize(get_option('submenu_layout_'.$dropdownlayout));
	if($subdata['background_color']=="custom")
	{
		$subbackground=$subdata['background_custom_color'];
	}
	else if($subdata['background_color']!="")
	{
		$subbackground="var(--".$subdata['background_color']."-color)";
	}
	else
	{
		$subbackground="var(--primary-color)";
	} 
	
	if($subdata['text_color']=="custom")
	{
		$subtext_color=$subdata['text_custom_color'];
	}
	else if($subdata['text_color']!="")
	{
		$subtext_color="var(--".$subdata['text_color']."-color)";
	}
	else
	{
		$subtext_color="#fff";
	} 
	
	if($subdata['hover_text_color']=="custom")
	{
		$subhover_text_color=$subdata['hover_text_custom_color'];
	}
	else if($subdata['hover_text_color']!="")
	{
		$subhover_text_color="var(--".$subdata['hover_text_color']."-color)";
	}
	else
	{
		$subhover_text_color="var(--global_light-color)";
	}

	}	
?>


header .newtwo_header .logo_stacked{
	background:<?php echo isset($logo_background) ? $logo_background : ''; ?>;
}

header .newtwo_header .logo_stacked img{
	width:<?php echo esc_attr($logo_size); ?>px;
	max-width:<?php echo esc_attr($logo_size); ?>px;
}

header .lefttopsocial li a .fa{
	color:<?php echo esc_attr($lefttopbar_social_icon_color); ?>;
}

header .middletopsocial li a i{
	color:<?php echo esc_attr($middletopbar_social_icon_color); ?>;
}

header .righttopsocial li a i{
	color:<?php echo esc_attr($righttopbar_social_icon_color); ?>;
}

header .bottomsocial li a i{
	color:<?php echo esc_attr($bottombar_social_icon_color); ?>;
}

header .newtwo_header .bottom_stacked_header .navbar {
   background: <?php echo esc_attr($bottombar_background_color); ?>;
}

header .newtwo_header .bottom_stacked_header .navbar ul li a {
    color: <?php echo esc_attr($bottombar_nav_link_color); ?>;
}

header .newtwo_header .bottom_stacked_header .navbar ul li ul.sub-menu{
	background:<?php echo isset($subbackground) ? $subbackground : ''; ?>;
}

header .newtwo_header .bottom_stacked_header .navbar ul li ul.sub-menu li a{
	color:<?php echo esc_attr($subtext_color); ?>;
}
header .newtwo_header .bottom_stacked_header .navbar ul li ul.sub-menu li a:hover{
	color:<?php echo esc_attr($subhover_text_color); ?>;
}

<?php
	}
	else if(strpos($layout, 'Transparent_Header') !== false){
	$data=unserialize(get_option('header_layout_'.$layout));
	
	if($data['opacity_color']=="custom")
	{
		$opacity_color=$data['opacity_custom_color'];
	}
	else if($data['opacity_color']!="")
	{
		$opacity_color="var(--".$data['opacity_color']."-color)";
	}
	else
	{
		$opacity_color="var(--primary-color)";
	} 
	
	if($data['opacity']!="")
	{
		$opacity = (1*$data['opacity'])/100;
	}
	else
	{
		$opacity=(1*50)/100;
	}
	
	if($data['button_color']=="custom")
	{
		$button_color=$data['button_custom_color'];
	}
	else if($data['button_color']!="")
	{
		$button_color="var(--".$data['button_color']."-color)";
	}
	else
	{
		$button_color="var(--primary-color)";
	} 
	
	if($data['button_text_color']=="custom")
	{
		$button_text_color=$data['button_text_custom_color'];
	}
	else if($data['button_text_color']!="")
	{
		$button_text_color="var(--".$data['button_text_color']."-color)";
	}
	else
	{
		$button_text_color="#fff";
	} 

	
	if($data['link_color']=="custom")
	{
		$link_color=$data['link_custom_color'];
	}
	else if($data['link_color']!="")
	{
		$link_color="var(--".$data['link_color']."-color)";
	}
	else
	{
		$link_color="var(--global_dark-color)";
	} 
	
	if($data['topbar_link_color']=="custom")
	{
		$topbar_link_color=$data['topbar_link_custom_color'];
	}
	else if($data['topbar_link_color']!="")
	{
		$topbar_link_color="var(--".$data['topbar_link_color']."-color)";
	}
	else
	{
		$topbar_link_color="var(--primary-color)";
	} 
	
	if($data['topbar_text_color']=="custom")
	{
		$topbar_text_color=$data['topbar_text_custom_color'];
	}
	else if($data['topbar_text_color']!="")
	{
		$topbar_text_color="var(--".$data['topbar_text_color']."-color)";
	}
	else
	{
		$topbar_text_color="var(--primary-color)";
	} 
	
	if(get_option('udm_logo_size')!="")
	{
		$logo_size=get_option('udm_logo_size');
	}
	else
	{
		$logo_size="180";
	}
	if($data['dropdownstyle']!="")
	{
		$dropdownlayout=$data['dropdownstyle'];
	}
	else
	{
		$dropdownlayout=get_option('udm_submenu_default');
	}
	
	if(strpos($dropdownlayout, 'Basic_') !== false){
	$subdata=unserialize(get_option('submenu_layout_'.$dropdownlayout));
	if($subdata['background_color']=="custom")
	{
		$subbackground=$subdata['background_custom_color'];
	}
	else if($subdata['background_color']!="")
	{
		$subbackground="var(--".$subdata['background_color']."-color)";
	}
	else
	{
		$subbackground="var(--primary-color)";
	} 
	
	if($subdata['text_color']=="custom")
	{
		$subtext_color=$subdata['text_custom_color'];
	}
	else if($subdata['text_color']!="")
	{
		$subtext_color="var(--".$subdata['text_color']."-color)";
	}
	else
	{
		$subtext_color="#fff";
	} 
	
	if($subdata['hover_text_color']=="custom")
	{
		$subhover_text_color=$subdata['hover_text_custom_color'];
	}
	else if($subdata['hover_text_color']!="")
	{
		$subhover_text_color="var(--".$subdata['hover_text_color']."-color)";
	}
	else
	{
		$subhover_text_color="var(--global_light-color)";
	}

	}	
	
?>


header .main_transparent_box::before{
	background-color:<?php echo esc_attr($opacity_color); ?>;
	opacity:<?php echo esc_attr($opacity); ?>;
	position:absolute;
    content: '';
    width: 100%;
    height: 100%;
}

header .main_transparent_box .btn{
	background:<?php echo esc_attr($button_color); ?>;
	border-color:<?php echo esc_attr($button_color); ?>;
	color:<?php echo esc_attr($button_text_color); ?>;
	
}

header .main_transparent_box .btn .fa{
	border-left: 1px solid <?php echo esc_attr($button_color); ?>;	
}
header .main_transparent_box a{
	color:<?php echo esc_attr($link_color); ?>;
}

header .main_transparent_box .top_basic_header{
	background:<?php echo isset($topbar_background) ? $topbar_background : ''; ?>;
}
header .main_transparent_box .top_basic_header a{
	color:<?php echo esc_attr($topbar_link_color); ?>;
}
header .main_transparent_box .top_basic_header p{
	color:<?php echo esc_attr($topbar_text_color); ?>;
}

.main_transparent_box .navbar-brand img{
	width: <?php echo esc_attr($logo_size); ?>px;
	max-width: <?php echo esc_attr($logo_size); ?>px;
}

header .main_transparent_box  ul.sub-menu{
	background:<?php echo isset($subbackground) ? $subbackground : ''; ?>;
}

header .main_transparent_box  ul.sub-menu li a{
	color:<?php echo esc_attr($subtext_color); ?>;
}
header .main_transparent_box  ul.sub-menu li a:hover{
	color:<?php echo esc_attr($subhover_text_color); ?>;
}

<?php
	}	
	else
	{
		$dropdownlayout=get_option('udm_submenu_default');
	if(strpos($dropdownlayout, 'Basic_') !== false){
	$subdata=unserialize(get_option('submenu_layout_'.$dropdownlayout));
	if($subdata['background_color']=="custom")
	{
		$subbackground=$subdata['background_custom_color'];
	}
	else if($subdata['background_color']!="")
	{
		$subbackground="var(--".$subdata['background_color']."-color)";
	}
	else
	{
		$subbackground="var(--primary-color)";
	} 
	
	if($subdata['text_color']=="custom")
	{
		$subtext_color=$subdata['text_custom_color'];
	}
	else if($subdata['text_color']!="")
	{
		$subtext_color="var(--".$subdata['text_color']."-color)";
	}
	else
	{
		$subtext_color="#fff";
	} 
	
	if($subdata['hover_text_color']=="custom")
	{
		$subhover_text_color=$subdata['hover_text_custom_color'];
	}
	else if($subdata['hover_text_color']!="")
	{
		$subhover_text_color="var(--".$subdata['hover_text_color']."-color)";
	}
	else
	{
		$subhover_text_color="var(--global_light-color)";
	}

	}	
?>
header .basic_header_default{
	background:#fff;
}

header .btn{
	background:var(--primary-color);
	color:#fff;
	border-color:var(--primary-color);	
}

header .btn .fa{
	border-left:1px solid #fff;	
}
header a{
	color:var(--global_dark-color);
}

header .top_basic_header{
	background:#f5f5f5;
}
header .top_basic_header a{
	color:var(--primary-color);
}
header .top_basic_header p{
	color:var(--primary-color);
}
.basic_header_default a.navbar-brand img
{
	width: 200px;
	max-width: 200px;
}

header ul.sub-menu{
	background:<?php echo isset($subbackground) ? $subbackground : ''; ?>;
}

header ul.sub-menu li a{
	color:<?php echo esc_attr($subtext_color); ?>;
}

header ul.sub-menu li a:hover{
	color:<?php echo esc_attr($subhover_text_color); ?>;
}
<?php
	}
?>