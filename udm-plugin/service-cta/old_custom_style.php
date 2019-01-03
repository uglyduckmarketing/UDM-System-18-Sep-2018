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
	$layout=get_option('udm_footer_cta_default');
	if(strpos($layout, 'Fullwidth_CTA') !== false){
		$data=unserialize(get_option('footer_cta_layout_'.$layout));
		$cta = get_post_meta($_GET['id'], 'service_cta', true);
		if(get_post_meta( $_GET['id'], 'udm_service_option', true )!="")
		{
			$layout=get_post_meta( $_GET['id'], 'udm_service_option', true );
			$datamy=unserialize(get_option('service_layout_'.$layout));
			if($datamy['background_type']=="image")
			{
				$background="url('".$datamy['background_image']."')";
			}
			else
			{
				if($datamy['cta_background_color']=="custom")
				{
					$background=$datamy['cta_background_custom_color'];
				}
				else if($datamy['cta_background_color']!="")
				{
					$background="var(--".$datamy['cta_background_color']."-color)";
				}
				else
				{
					$background="var(--global_dark-color)";
				} 
			}
			
			if($datamy['cta_eyebrow_color']=="custom")
			{
				$cta_eyebrow_color=$datamy['cta_eyebrow_custom_color'];
			}
			else if($datamy['cta_eyebrow_color']!="")
			{
				$cta_eyebrow_color="var(--".$datamy['cta_eyebrow_color']."-color)";
			}
			else
			{
				$cta_eyebrow_color="var(--global_dark-color)";
			} 
			if($datamy['cta_heading_color']=="custom")
			{
				$title_text_color=$datamy['cta_heading_custom_color'];
			}
			else if($datamy['cta_heading_color']!="")
			{
				$title_text_color="var(--".$datamy['cta_heading_color']."-color)";
			}
			else
			{
				$title_text_color="var(--global_dark-color)";
			} 
			
			if($datamy['cta_description_color']=="custom")
			{
				$desc_text_color=$datamy['cta_description_custom_color'];
			}
			else if($datamy['cta_description_color']!="")
			{
				$desc_text_color="var(--".$datamy['cta_description_color']."-color)";
			}
			else
			{
				$desc_text_color="var(--global_dark-color)";
			}
			
			if($datamy['cta_button_color']=="custom")
			{
				$button_color=$datamy['cta_button_custom_color'];
			}
			else if($datamy['cta_button_color']!="")
			{
				$button_color="var(--".$datamy['cta_button_color']."-color)";
			}
			else
			{
				$button_color="var(--global_dark-color)";
			}
			
			if($datamy['cta_button_text_color']=="custom")
			{
				$button_text_color=$datamy['cta_button_text_custom_color'];
			}
			else if($datamy['cta_button_text_color']!="")
			{
				$button_text_color="var(--".$datamy['cta_button_text_color']."-color)";
			}
			else
			{
				$button_text_color="var(--global_dark-color)";
			}
			$height="650px";
		}else if(get_post_meta( $_GET['id'], 'udm_service_option', true ) == "")
		{
			 $layout=get_option('udm_service_default');
			$datamy=unserialize(get_option('service_layout_'.$layout));	
			
			if($datamy['background_type']=="image")
			{
				$background="url('".$datamy['background_image']."')";
			}
			else
			{
				if($datamy['cta_background_color']=="custom")
				{
					$background=$datamy['cta_background_custom_color'];
				}
				else if($datamy['cta_background_color']!="")
				{
					$background="var(--".$datamy['cta_background_color']."-color)";
				}
				else
				{
					$background="var(--global_dark-color)";
				} 
			}
			
			if($datamy['cta_eyebrow_color']=="custom")
			{
				$cta_eyebrow_color=$datamy['cta_eyebrow_custom_color'];
			}
			else if($datamy['cta_eyebrow_color']!="")
			{
				$cta_eyebrow_color="var(--".$datamy['cta_eyebrow_color']."-color)";
			}
			else
			{
				$cta_eyebrow_color="var(--global_dark-color)";
			} 
			if($datamy['cta_heading_color']=="custom")
			{
				$title_text_color=$datamy['cta_heading_custom_color'];
			}
			else if($datamy['cta_heading_color']!="")
			{
				$title_text_color="var(--".$datamy['cta_heading_color']."-color)";
			}
			else
			{
				$title_text_color="var(--global_dark-color)";
			} 
			
			if($datamy['cta_description_color']=="custom")
			{
				$desc_text_color=$datamy['cta_description_custom_color'];
			}
			else if($datamy['cta_description_color']!="")
			{
				$desc_text_color="var(--".$datamy['cta_description_color']."-color)";
			}
			else
			{
				$desc_text_color="var(--global_dark-color)";
			}
			
			if($datamy['cta_button_color']=="custom")
			{
				$button_color=$datamy['cta_button_custom_color'];
			}
			else if($datamy['cta_button_color']!="")
			{
				$button_color="var(--".$datamy['cta_button_color']."-color)";
			}
			else
			{
				$button_color="var(--global_dark-color)";
			}
			
			if($datamy['cta_button_text_color']=="custom")
			{
				$button_text_color=$datamy['cta_button_text_custom_color'];
			}
			else if($datamy['cta_button_text_color']!="")
			{
				$button_text_color="var(--".$datamy['cta_button_text_color']."-color)";
			}
			else
			{
				$button_text_color="var(--global_dark-color)";
			}
			$height="650px";
		}
		else
		{
	
		if($data['background_type']=="image")
		{
			$background="url('".$data['background_image']."')";
		}
		else
		{
			if($cta['background_color'] != ''){
				$background=$cta['background_color'];
			}else if($data['background_color']=="custom")
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
	}
		
		?>
		.get_in_touch_fullwidth{
			background:<?php echo isset($background) ? $background : ''; ?>;
			background-repeat: no-repeat;
			background-size:cover;
			height:<?php echo esc_attr($height); ?>
		}
		.get_in_touch_fullwidth:before{
			background-color:<?php echo esc_attr($overlay_color); ?>;
			opacity:<?php echo esc_attr($background_opacity); ?>;
		}
		.get_in_touch_fullwidth .col h2{
			color:<?php echo esc_attr($title_text_color); ?>;
		}
		.get_in_touch_fullwidth .col p{
			color:<?php echo esc_attr($desc_text_color); ?>;
		}
		
		.get_in_touch_fullwidth .col .btn{
			background:<?php echo esc_attr($button_color); ?>;
			border:1px solid <?php echo esc_attr($button_color); ?>;
			color:<?php echo esc_attr($button_text_color); ?>;
		}
		.right_side_bt .btn .fa{
			border-left:1px solid <?php echo esc_attr($button_text_color); ?>;
		}
		<?php
	}
	else
	{	
		if(get_post_meta( $_GET['id'], 'udm_service_option', true )!="")
		{
			$layout=get_post_meta( $_GET['id'], 'udm_service_option', true );
			$data=unserialize(get_option('service_layout_'.$layout));
			
			if($data['cta_background_color']=="custom")
			{
				$background=$data['cta_background_custom_color'];
			}
			else if($data['cta_background_color']!="")
			{
				$background="var(--".$data['cta_background_color']."-color)";
			}
			else
			{
				$background="var(--global_dark-color)";
			} 
			
			if($data['cta_eyebrow_color']=="custom")
			{
				$cta_eyebrow_color=$data['cta_eyebrow_custom_color'];
			}
			else if($data['cta_eyebrow_color']!="")
			{
				$cta_eyebrow_color="var(--".$data['cta_eyebrow_color']."-color)";
			}
			else
			{
				$cta_eyebrow_color="var(--global_dark-color)";
			} 
			if($data['cta_heading_color']=="custom")
			{
				$title_text_color=$data['cta_heading_custom_color'];
			}
			else if($data['cta_heading_color']!="")
			{
				$title_text_color="var(--".$data['cta_heading_color']."-color)";
			}
			else
			{
				$title_text_color="var(--global_dark-color)";
			} 
			
			if($data['cta_description_color']=="custom")
			{
				$desc_text_color=$data['cta_description_custom_color'];
			}
			else if($data['cta_description_color']!="")
			{
				$desc_text_color="var(--".$data['cta_description_color']."-color)";
			}
			else
			{
				$desc_text_color="var(--global_dark-color)";
			}
			
			if($data['cta_button_color']=="custom")
			{
				$button_color=$data['cta_button_custom_color'];
			}
			else if($data['cta_button_color']!="")
			{
				$button_color="var(--".$data['cta_button_color']."-color)";
			}
			else
			{
				$button_color="var(--global_dark-color)";
			}
			
			if($data['cta_button_text_color']=="custom")
			{
				$button_text_color=$data['cta_button_text_custom_color'];
			}
			else if($data['cta_button_text_color']!="")
			{
				$button_text_color="var(--".$data['cta_button_text_color']."-color)";
			}
			else
			{
				$button_text_color="var(--global_dark-color)";
			}
		}
		else if(get_post_meta( $_GET['id'], 'udm_service_option', true ) =="")
		{
			$layout=get_option('udm_service_default');
			$data=unserialize(get_option('service_layout_'.$layout));
			if($data['cta_background_color']=="custom")
			{
				$background=$data['cta_background_custom_color'];
			}
			else if($data['cta_background_color']!="")
			{
				$background="var(--".$data['cta_background_color']."-color)";
			}
			else
			{
				$background="var(--global_dark-color)";
			} 
			
			if($data['cta_eyebrow_color']=="custom")
			{
				$cta_eyebrow_color=$data['cta_eyebrow_custom_color'];
			}
			else if($data['cta_eyebrow_color']!="")
			{
				$cta_eyebrow_color="var(--".$data['cta_eyebrow_color']."-color)";
			}
			else
			{
				$cta_eyebrow_color="var(--global_dark-color)";
			} 
			if($data['cta_heading_color']=="custom")
			{
				$title_text_color=$data['cta_heading_custom_color'];
			}
			else if($data['cta_heading_color']!="")
			{
				$title_text_color="var(--".$data['cta_heading_color']."-color)";
			}
			else
			{
				$title_text_color="var(--global_dark-color)";
			} 
			
			if($data['cta_description_color']=="custom")
			{
				$desc_text_color=$data['cta_description_custom_color'];
			}
			else if($data['cta_description_color']!="")
			{
				$desc_text_color="var(--".$data['cta_description_color']."-color)";
			}
			else
			{
				$desc_text_color="var(--global_dark-color)";
			}
			
			if($data['cta_button_color']=="custom")
			{
				$button_color=$data['cta_button_custom_color'];
			}
			else if($data['cta_button_color']!="")
			{
				$button_color="var(--".$data['cta_button_color']."-color)";
			}
			else
			{
				$button_color="var(--global_dark-color)";
			}
			
			if($data['cta_button_text_color']=="custom")
			{
				$button_text_color=$data['cta_button_text_custom_color'];
			}
			else if($data['cta_button_text_color']!="")
			{
				$button_text_color="var(--".$data['cta_button_text_color']."-color)";
			}
			else
			{
				$button_text_color="var(--global_dark-color)";
			}
		}
		else{
		$data=unserialize(get_option('footer_cta_layout_'.$layout));
		$cta = get_post_meta($_GET['id'], 'service_cta', true);
		
		if($cta['background_color'] != ''){
			$background=$cta['background_color'];
		}else if($data['background_color']=="custom")
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
	}
		?>
		.get_in_splitscreen.back .p1-left{
			background:<?php echo isset($background) ? $background : ''; ?>;
		}
		
		.col.col-lg-6.p1-both.align-self-stretch.element{
			background:<?php echo esc_attr($element_background); ?>;
		}
		.get_in_splitscreen .col h2{
			color:<?php echo esc_attr($title_text_color); ?>;
		}
		.get_in_splitscreen .col p{
			color:<?php echo esc_attr($desc_text_color); ?>;
		}
		
		.get_in_splitscreen .col .btn{
			background:<?php echo esc_attr($button_color); ?>;
			border:1px solid <?php echo esc_attr($button_color); ?>;
			color:<?php echo esc_attr($button_text_color); ?>;
		}
		.get_in_splitscreen .right_side_bt .btn .fa{
			border-left:1px solid <?php echo esc_attr($button_text_color); ?>;
		}
		.get_in_splitscreen .element.shadow::after{
			background-color:<?php echo esc_attr($overlay_color); ?>;
			opacity:<?php echo esc_attr($background_opacity); ?>;
		}

		.get_in_splitscreen .videoPoster {
			background-image:url('<?php echo esc_attr($element_video_poster_url); ?>');
			background-size: cover;
			background-repeat:no-repeat;
		}
		.videoPoster button:before
		{
			border:1px solid <?php echo esc_attr($video_play_icon_color); ?>;
		}
		.videoPoster button:after
		{
			border-left: 40px solid <?php echo esc_attr($video_play_icon_color); ?>;
		}
		.get_in_splitscreen .element, .get_in_splitscreen .align-self-stretch, .videoPoster, .videoIframe,#map  {
			height:<?php echo esc_attr($height); ?>
		}
		 .videoIframe{
			 position:absolute;
			 z-index:99;
		 }
		.get_in_splitscreen .eyebrow{
			font-weight: 600; 
			font-size: 24px;
			line-height: 1.14286;
			letter-spacing: .007em;
			color: <?php echo esc_attr($cta_eyebrow_color); ?>;
			margin-bottom: 1.5rem;
			display: block;
		}
		.get_in_splitscreen .h2{
			font-weight: 600; 
			font-size: 24px;
			line-height: 1.14286;
			letter-spacing: .007em;
			color: <?php echo esc_attr($cta_heading_color); ?>;
			margin-bottom: 1.5rem;
			display: block;
		}
<?php } ?>