<?php 
header( "Content-type: text/css; charset: UTF-8" );
$data=unserialize(get_option('header_layout_1'));	
$udm_primary_color = get_option('udm_primary_color');
$udm_secondary_color = get_option('udm_secondary_color');
$udm_tertiary_color = get_option('udm_tertiary_color');
$udm_global_dark = get_option('udm_global_dark');
$udm_global_light = get_option('udm_global_light');
		
if( get_option('udm_header_default')=="1" && $data['logo_size']=="large"){
	$udm_logo_default = '250';
}
else
{
	$udm_logo_default = get_option('udm_logo_default');
}

if( get_option('udm_header_default')=="1" && $data['logo_background_type']=="color")
{
	$udm_logo_background = $data['logo_background_color'];
}
else if( get_option('udm_header_default')=="1" && $data['logo_background_type']=="image")
{
	$udm_logo_background = "url('".$data["logo_background_image"]."') left center";
}
else
{
	$udm_logo_background = get_option('udm_logo_background');
}

if( get_option('udm_header_default')=="1" && $data['header_background']!=""){
	$header_background = $data['header_background'];
}
else
{
	$header_background = get_option('udm_header_background');
}

if( get_option('udm_header_default')=="1" && $data['top_bar_background']!=""){
	$top_bar_background = $data['top_bar_background'];
}
else
{
	$top_bar_background = get_option('udm_top_nav_background');
}

if( get_option('udm_header_default')=="1" && $data['nav_dropdown_background']!=""){
	$nav_dropdown_background = $data['nav_dropdown_background'];
}
else
{
	$nav_dropdown_background = get_option('udm_bottom_nav_dropdown_background');
}

if( get_option('udm_header_default')=="1" && $data['bottom_bar_background']!=""){
	$bottom_bar_background = $data['bottom_bar_background'];
}
else
{
	$bottom_bar_background = get_option('udm_bottom_nav_background');
}

if( get_option('udm_header_default')=="1" && $data['bottom_nav_link_color']!=""){
	$bottom_nav_link_color = $data['bottom_nav_link_color'];
}
else
{
	$bottom_nav_link_color = get_option('udm_bottom_nav_link_color');

}


if( get_option('udm_header_default')=="1" && $data['bottom_nav_dropdown_link_color']!=""){
	$bottom_nav_dropdown_link_color = $data['bottom_nav_dropdown_link_color'];
}
else
{
	$bottom_nav_dropdown_link_color = get_option('udm_bottom_nav_dropdown_link_color');
}
$udm_bottom_nav_fontsize = get_option('udm_bottom_nav_fontsize');
?>
	
	a{
		color:<?php echo esc_attr($udm_primary_color); ?>;
	}
	a:hover{
		color:<?php echo esc_attr($udm_secondary_color); ?>;
	} 
	.primary{
		background: <?php echo esc_attr($udm_primary_color); ?>;
	}
	
	
	/* B U T T O N S
	------------------------------ */
	.btn {
		background: <?php echo get_option('udm_button_background'); ?>;
		color: <?php echo get_option('udm_button_text_color'); ?>;
	}

	/* H E A D E R
	------------------------------ */
	
	header.header_mrappliance{
		background:<?php echo esc_attr(($header_background!="" ? $header_background : "#fff")); ?>;
	}
	
	header.header_mrappliance .top-navbar-section{
		background:<?php echo esc_attr(($top_bar_background!="" ? $top_bar_background : "#fff")); ?>;
	}
	header.header_mrappliance .bottom-navbar-section{
		background:<?php echo esc_attr(($bottom_nav_background!="" ? $bottom_nav_background : "#fff")); ?>;
	}
	header.header_mrappliance .bottom-navbar-section ul li a {
	  color: <?php echo esc_attr($bottom_nav_link_color); ?>;
	  font-size: <?php echo esc_attr(($udm_bottom_nav_fontsize!="" ? $udm_bottom_nav_fontsize : "18")); ?>px;
	}
	
	header.header_mrappliance .bottom-navbar-section ul li ul {
	  background: <?php echo esc_attr($nav_dropdown_background); ?>;
	}
	
	header.header_mrappliance .bottom-navbar-section ul li ul li a {
		color: <?php echo esc_attr($bottom_nav_dropdown_link_color); ?>;
		font-size: <?php echo esc_attr(($udm_bottom_nav_fontsize!="" ? $udm_bottom_nav_fontsize : "18")); ?>px;
	}
	header.header_mrappliance ul li a:hover, header.header_mrappliance ul li ul li a:hover {
		color: <?php echo esc_attr($udm_secondary_color); ?>;
	}
	header.header_mrappliance .bottom-navbar-section ul li.current-menu-item a::before {
		background: <?php echo esc_attr($udm_secondary_color); ?>;
		width: 100%;
	}
	
	header.header_mrappliance .logo-container .header-logo{
		background:<?php echo esc_attr($udm_logo_background); ?>;
		width:<?php echo esc_attr($udm_logo_default); ?>px;
		max-width:<?php echo esc_attr($udm_logo_default); ?>px;
	}
	
	
	@media(max-width: 767px) {
		header.header_mrappliance .btn {
		  box-shadow: 0px 0px 0px 3px <?php echo esc_attr($udm_secondary_color); ?>35;
		}
		header.header_mrappliance .btn:hover {
			box-shadow: 0px 0px 0px 4px <?php echo esc_attr($udm_secondary_color); ?>45;
		}
	}
	
	header.mobile-menu .menu_bar_custom{
		background:<?php echo esc_attr(($udm_mobile_header_nav_background!="" ? $udm_mobile_header_nav_background : "#fff")); ?>;
	}
	
	header.mobile-menu .menu_bar_custom .mob-no-menu p, header.mobile-menu .menu_bar_custom .mob-no-menu a{
		color:<?php echo esc_attr(($udm_mobile_top_text_color!="" ? $udm_mobile_top_text_color : "#000")); ?>
	}
	
	header.mobile-menu .menu_bar_custom .dl-menuwrapper ul {
		background-color: <?php echo esc_attr(($udm_mobile_nav_backgroud!="" ? $udm_mobile_nav_backgroud : "#fff")); ?>;
	}
	header.mobile-menu .menu_bar_custom .dl-menuwrapper li a {
		color: <?php echo esc_attr(($udm_mobile_nav_link_color!="" ? $udm_mobile_nav_link_color : "#333")); ?>;
	}
	
	header.mobile-menu .menu_bar_custom .dl-menuwrapper li a:hover {
		color: <?php echo esc_attr(($udm_mobile_nav_link_hover_color!="" ? $udm_mobile_nav_link_hover_color : "#eeee22")); ?>;
	}