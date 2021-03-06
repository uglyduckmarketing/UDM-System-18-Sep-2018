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
	$layout=get_option('udm_service_cta_default');
	if(strpos($layout, 'Fullwidth_CTA') !== false){
		$data=unserialize(get_option('service_cta_layout_'.$layout));
	
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
		
		
		if($data['height']!="")
		{
			$height = $data['height'];
		}
		else
		{
			$height="650px";
		}
		
		if($cta['cta_button_color'] == 'custom'){
			$button_color=$cta['button_custom_color'];
		}else if($data['cta_button_color']!=""){
			$button_color="var(--".$cta['cta_button_color']."-color)";
		}
		else if($data['button_color']=="custom")
		{
			$button_color = $data['button_custom_color'];
		}
		else if($data['button_color']!="")
		{
			$button_color="var(--".$data['button_color']."-color)";
		}
		else
		{
			$button_color="var(--secondary-color)";
		}
		if($cta['cta_button_text_color'] == 'custom'){
			$button_text_color = $cta['button_text_custom_color'];
		}else if($cta['cta_button_text_color'] != ''){
			$button_text_color="var(--".$cta['cta_button_text_color']."-color)";
		}else if($data['button_text_color']=="custom")
		{
			$button_text_color = $data['button_text_custom_color'];
		}
		else if($data['button_text_color']!="")
		{
			$button_text_color="var(--".$data['button_text_color']."-color)";
		}
		else
		{
			$button_text_color="var(--global_light-color)";
		}

		
		?>
		.get_in_touch_service_cta_fullwidth{
			background:<?php echo isset($background) ? $background : ''; ?>;
			background-repeat: no-repeat;
			background-size:cover;
			height:<?php echo esc_attr($height); ?>
		}
		.get_in_touch_service_cta_fullwidth:before{
			background-color:<?php echo esc_attr($overlay_color); ?>;
			opacity:<?php echo esc_attr($background_opacity); ?>;
		}
		.get_in_touch_service_cta_fullwidth .col h2{
			color:<?php echo esc_attr($title_text_color); ?>;
		}
		.get_in_touch_service_cta_fullwidth .col p{
			color:<?php echo esc_attr($desc_text_color); ?>;
		}
		
		.get_in_touch_service_cta_fullwidth .col .btn{
			background:<?php echo esc_attr($button_color); ?>;
			border:1px solid <?php echo esc_attr($button_color); ?>;
			color:<?php echo esc_attr($button_text_color); ?>;
		}
		.get_in_touch_service_cta_fullwidth .right_side_bt .btn .fa{
			border-left:1px solid <?php echo esc_attr($button_text_color); ?>;
		}
		<?php
	}
	else
	{	
		$data=unserialize(get_option('service_cta_layout_'.$layout));
		
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
		
		
		if($data['description_text_color']=="custom")
		{
			$desc_text_color=$data['description_text_custom_color'];
		}
		else if($data['description_text_color']!="")
		{
			$desc_text_color="var(--".$data['description_text_color']."-color)";
		}
		else
		{
			$desc_text_color="var(--global_light-color)";
		}
		if($cta['cta_button_color'] == 'custom'){
			$button_color=$cta['button_custom_color'];
		}else if($data['cta_button_color']!=""){
			$button_color="var(--".$cta['cta_button_color']."-color)";
		}
		else if($data['button_color']=="custom")
		{
			$button_color = $data['button_custom_color'];
		}
		else if($data['button_color']!="")
		{
			$button_color="var(--".$data['button_color']."-color)";
		}
		else
		{
			$button_color="var(--secondary-color)";
		}
		if($cta['cta_button_text_color'] == 'custom'){
			$button_text_color = $cta['button_text_custom_color'];
		}else if($cta['cta_button_text_color'] != ''){
			$button_text_color="var(--".$cta['cta_button_text_color']."-color)";
		}else if($data['button_text_color']=="custom")
		{
			$button_text_color = $data['button_text_custom_color'];
		}
		else if($data['button_text_color']!="")
		{
			$button_text_color="var(--".$data['button_text_color']."-color)";
		}
		else
		{
			$button_text_color="var(--global_light-color)";
		}
		
		
		if($data['element_background_color']=="custom")
		{
			$element_background=$data['element_background_custom_color'];
		}
		else if($data['element_background_color']!="")
		{
			$element_background="var(--".$data['element_background_color']."-color)";
		}
		else
		{
			$element_background="var(--global_dark-color)";
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
		
		if($data['element_video_poster_url']!="")
		{
			$element_video_poster_url=$data['element_video_poster_url'];
		}
		
		if($data['video_play_icon_color']=="custom")
		{
			$video_play_icon_color=$data['video_play_icon_custom_color'];
		}
		else if($data['video_play_icon_color']!="")
		{
			$video_play_icon_color="var(--".$data['video_play_icon_color']."-color)";
		}
		else
		{
			$video_play_icon_color="var(--secondary-color)";
		} 
		
		
		if($data['height']!="")
		{
			$height = $data['height'];
		}
		else
		{
			$height="650px";
		}

		?>
		.service_cta_splitscreen.back .p1-left{
			background:<?php echo isset($background) ? $background : ''; ?>;
		}
		
		.service_cta_splitscreen .col.col-lg-6.p1-both.align-self-stretch.service_cta_element{
			background:<?php echo esc_attr($element_background); ?>;
		}
		.service_cta_splitscreen .col h2{
			color:<?php echo esc_attr($title_text_color); ?>;
		}
		.service_cta_splitscreen .col p{
			color:<?php echo esc_attr($desc_text_color); ?>;
		}
		
		.service_cta_splitscreen .col .btn{
			background:<?php echo esc_attr($button_color); ?>;
			border:1px solid <?php echo esc_attr($button_color); ?>;
			color:<?php echo esc_attr($button_text_color); ?>;
		}
		.service_cta_splitscreen .right_side_bt .btn .fa{
			border-left:1px solid <?php echo esc_attr($button_text_color); ?>;
		}
		.service_cta_splitscreen .service_cta_element.shadow::after{
			background-color:<?php echo esc_attr($overlay_color); ?>;
			opacity:<?php echo esc_attr($background_opacity); ?>;
		}

		.service_cta_splitscreen .videoPoster {
			background-image:url('<?php echo esc_attr($element_video_poster_url); ?>');
			background-size: cover;
			background-repeat:no-repeat;
		}
		.service_cta_splitscreen .videoPoster button:before
		{
			border:1px solid <?php echo esc_attr($video_play_icon_color); ?>;
		}
		.service_cta_splitscreen .videoPoster button:after
		{
			border-left: 40px solid <?php echo esc_attr($video_play_icon_color); ?>;
		}
		.service_cta_splitscreen .service_cta_element, .service_cta_splitscreen .align-self-stretch, .service_cta_splitscreen .videoPoster, .service_cta_splitscreen .videoIframe,#map  {
			height:<?php echo esc_attr($height); ?>
		}
		 .service_cta_splitscreen .videoIframe{
			 position:absolute;
			 z-index:99;
		 }
		.service_cta_splitscreen .eyebrow{
			font-weight: 600; 
			font-size: 24px;
			line-height: 1.14286;
			letter-spacing: .007em;
			color: <?php echo esc_attr($cta_eyebrow_color); ?>;
			margin-bottom: 1.5rem;
			display: block;
		}
		.service_cta_splitscreen .h2{
			font-weight: 600; 
			font-size: 24px;
			line-height: 1.14286;
			letter-spacing: .007em;
			color: <?php echo esc_attr($cta_heading_color); ?>;
			margin-bottom: 1.5rem;
			display: block;
		}
<?php } ?>