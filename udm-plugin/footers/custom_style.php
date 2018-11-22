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
	$layout=get_option('udm_footer_default');
	
		$data=unserialize(get_option('footer_layout_'.$layout));
	
		if($data['background_type']=="image")
		{
			$background="url('".$data['background_image']."')";
		}
		else
		{
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
				$background="var(--global_dark-color)";
			} 
		}
		
		
		if($data['overlay_color']=="custom")
		{
			$overlay_color=$data['overlay_custom_color'];
		}
		else if($data['overlay_color']!="")
		{
			$overlay_color="var(--".$data['overlay_color']."-color)";
		}
		else
		{
			$overlay_color="rgb(0,0,0)";
		}

		if($data['background_opacity']!="")
		{
			$background_opacity = (1*$data['background_opacity'])/100;
		}
		else
		{
			$background_opacity=(1*50)/100;
		}
		
		if($data['heading_color']=="custom")
		{
			$heading_color=$data['heading_custom_color'];
		}
		else if($data['heading_color']!="")
		{
			$heading_color="var(--".$data['heading_color']."-color)";
		}
		else
		{
			$heading_color="#fff";
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
			$link_color="#fff";
		}
		if($data['title_text_color']=="custom")
		{
			$title_text_color=$data['title_text_custom_color'];
		}
		else if($data['title_text_color']!="")
		{
			$title_text_color="var(--".$data['title_text_color']."-color)";
		}
		else
		{
			$title_text_color="#fff";
		}
		
		
		if($data['desc_text_color']=="custom")
		{
			$desc_text_color=$data['desc_text_custom_color'];
		}
		else if($data['desc_text_color']!="")
		{
			$desc_text_color="var(--".$data['desc_text_color']."-color)";
		}
		else
		{
			$desc_text_color="var(--global_light-color)";
		}
		
		?>
		footer.footer-mailchimp{
			background:<?php echo isset($background) ? $background : ''; ?>;
			background-repeat: no-repeat;
			background-size:cover;
			
		}
		footer.footer-mailchimp:before{
			background-color:<?php echo esc_attr($overlay_color); ?>;
			opacity:<?php echo esc_attr($background_opacity); ?>;
			position: absolute;
			content: '';
			width: 100%;
		}
		.footer-mailchimp .footer-bottom h3{
			color:<?php echo esc_attr($title_text_color); ?>;
		}
		.footer-mailchimp .footer-bottom p{
			color:<?php echo esc_attr($desc_text_color); ?>;
		}
		
		footer.footer-mailchimp .footer-top h5
		{
			color:<?php echo esc_attr($heading_color); ?>;
		}
		
		footer.footer-mailchimp .footer-top p
		{
			color:<?php echo esc_attr($text_color); ?>;
		}
		
		footer.footer-mailchimp .footer-top ul li a
		{
			color:<?php echo esc_attr($link_color); ?>;
		}
		
		footer.footer-mailchimp ul.footer_social_icons li a
		{
			color:<?php echo esc_attr($link_color); ?>;
		}