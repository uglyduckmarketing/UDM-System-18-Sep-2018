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
	if(get_post_meta( $_GET['id'], 'udm_service_option', true )!="")
	{
		$layout=get_post_meta( $_GET['id'], 'udm_service_option', true );
	}
	else
	{
		$layout='';
	}
	$data=unserialize(get_option('service_layout_'.$layout));
print_r($data);
	if($data['desc_eyebrow_color']=="custom")
	{
		$desc_eyebrow_color=$data['desc_eyebrow_custom_color'];
	}
	else if($data['desc_eyebrow_color'] != "")
	{
		echo $desc_eyebrow_color="var(--".$data['desc_eyebrow_color']."-color)";
	}
	else
	{
		$desc_eyebrow_color="var(--secondary-color)";
	} 
	
	if($data['desc_heading_color']=="custom")
	{
		$desc_heading_color=$data['desc_heading_custom_color'];
	}
	else if($data['desc_heading_color']!="")
	{
		$desc_heading_color="var(--".$data['desc_heading_color']."-color)";
	}
	else
	{
		$desc_heading_color="var(--global_dark-color)";
	} 
	
	
	if($data['services_description_color']=="custom")
	{
		$services_description_color=$data['services_description_custom_color'];
	}
	else if($data['services_description_color']!="")
	{
		$services_description_color="var(--".$data['services_description_color']."-color)";
	}
	else
	{
		$services_description_color="#333";
	} 
	
	if($data['desc_background_color']=="custom")
	{
		$desc_background_color=$data['desc_background_custom_color'];
	}
	else if($data['desc_background_color']!="")
	{
		$desc_background_color="var(--".$data['desc_background_color']."-color)";
	}
	else
	{
		$desc_background_color="#FFFFFF";
	} 
	
	if($data['benefit_title_color']=="custom")
	{
		$benefit_title_color=$data['benefit_title_custom_color'];
	}
	else if($data['benefit_title_color']!="")
	{
		$benefit_title_color="var(--".$data['benefit_title_color']."-color)";
	}
	else
	{
		$benefit_title_color="var(--global_dark-color)";
	} 
	if($data['benefit_text_color']=="custom")
	{
		$benefit_text_color=$data['benefit_text_custom_color'];
	}
	else if($data['benefit_text_color']!="")
	{
		$benefit_text_color="var(--".$data['benefit_text_color']."-color)";
	}
	else
	{
		$benefit_text_color="#333";
	}

	if($data['breakdown_eyebrow_color']=="custom")
	{
		$breakdown_eyebrow_color=$data['breakdown_eyebrow_custom_color'];
	}
	else if($data['breakdown_eyebrow_color']!="")
	{
		$breakdown_eyebrow_color="var(--".$data['breakdown_eyebrow_color']."-color)";
	}
	else
	{
		$breakdown_eyebrow_color="var(--secondary-color)";
	} 
	if($data['breakdown_heading_color']=="custom")
	{
		$breakdown_heading_color=$data['breakdown_heading_custom_color'];
	}
	else if($data['breakdown_heading_color']!="")
	{
		$breakdown_heading_color="var(--".$data['breakdown_heading_color']."-color)";
	}
	else
	{
		$breakdown_heading_color="var(--global_dark-color)";
	} 
	
		if($data['breakdown_text_color']=="custom")
	{
		$breakdown_text_color=$data['breakdown_text_custom_color'];
	}
	else if($data['breakdown_text_color']!="")
	{
		$breakdown_text_color="var(--".$data['breakdown_text_color']."-color)";
	}
	else
	{
		$breakdown_text_color="#333";
	} 
	
	if($data['breakdown_back_color']=="custom")
	{
		$breakdown_back_color=$data['breakdown_back_custom_color'];
	}
	else if($data['breakdown_back_color']!="")
	{
		$breakdown_back_color="var(--".$data['breakdown_back_color']."-color)";
	}
	else
	{
		$breakdown_back_color="#333";
	} 
	if($data['breakdown_overlay_color']=="custom")
	{
		$breakdown_overlay_color=$data['breakdown_overlay_custom_color'];
	}
	else if($data['breakdown_overlay_color']!="")
	{
		$breakdown_overlay_color="var(--".$data['breakdown_overlay_color']."-color)";
	}
	else
	{
		$breakdown_overlay_color="var(--global_dark-color)";
	} 
	if($data['breakdown_overlay_opacity']!="")
	{
		$rtrim =rtrim($data['breakdown_overlay_opacity'],'%');
		$breakdown_overlay_opacity = $rtrim / 100; 
	}
	else
	{
		$breakdown_overlay_opacity="0.85";
	} 
	
	
	if($data['video_eyebrow_color']=="custom")
	{
		$video_eyebrow_color=$data['video_eyebrow_custom_color'];
	}
	else if($data['video_eyebrow_color']!="")
	{
		$video_eyebrow_color="var(--".$data['video_eyebrow_color']."-color)";
	}
	else
	{
		$video_eyebrow_color="var(--secondary-color)";
	} 
	
	if($data['video_heading_color']=="custom")
	{
		$video_heading_color=$data['video_heading_custom_color'];
	}
	else if($data['video_heading_color']!="")
	{
		$video_heading_color="var(--".$data['video_heading_color']."-color)";
	}
	else
	{
		$video_heading_color="#FFFFFF";
	} 
	if($data['video_serv_desc_color']=="custom")
	{
		$video_serv_desc_color=$data['video_serv_desc_custom_color'];
	}
	else if($data['video_serv_desc_color']!="")
	{
		$video_serv_desc_color="var(--".$data['video_serv_desc_color']."-color)";
	}
	else
	{
		$video_serv_desc_color="var(--global_light-color)";
	}

	if($data['video_background_color']=="custom")
	{
		$video_background_color=$data['video_background_custom_color'];
	}
	else if($data['video_background_color']!="")
	{
		$video_background_color="var(--".$data['video_background_color']."-color)";
	}
	else
	{
		$video_background_color="var(--primary-color)";
	} 
	
	if($data['gallery_eyebrow_color']=="custom")
	{
		$gallery_eyebrow_color=$data['gallery_eyebrow_custom_color'];
	}
	else if($data['gallery_eyebrow_color']!="")
	{
		$gallery_eyebrow_color="var(--".$data['gallery_eyebrow_color']."-color)";
	}
	else
	{
		$gallery_eyebrow_color="var(--secondary-color)";
	}
	
	if($data['gallery_heading_color']=="custom")
	{
		$gallery_heading_color=$data['gallery_heading_custom_color'];
	}
	else if($data['gallery_heading_color']!="")
	{
		$gallery_heading_color="var(--".$data['gallery_heading_color']."-color)";
	}
	else
	{
		$gallery_heading_color="var(--global_dark-color)";
	}
	
	if($data['gallery_background_color']=="custom")
	{
		$gallery_background_color=$data['gallery_background_custom_color'];
	}
	else if($data['gallery_background_color']!="")
	{
		$gallery_background_color="var(--".$data['gallery_background_color']."-color)";
	}
	else
	{
		$gallery_background_color="var(--global_light-color)";
	}
	
	
	if($data['related_eyebrow_color']=="custom")
	{
		$related_eyebrow_color=$data['related_eyebrow_custom_color'];
	}
	else if($data['related_eyebrow_color']!="")
	{
		$related_eyebrow_color="var(--".$data['related_eyebrow_color']."-color)";
	}
	else
	{
		$related_eyebrow_color="var(--secondary-color)";
	}
	
	if($data['related_heading_color']=="custom")
	{
		$related_heading_color=$data['related_heading_custom_color'];
	}
	else if($data['related_heading_color']!="")
	{
		$related_heading_color="var(--".$data['related_heading_color']."-color)";
	}
	else
	{
		$related_heading_color="var(--global_light-color)";
	}
	if($data['related_description_color']=="custom")
	{
		$related_description_color=$data['related_description_custom_color'];
	}
	else if($data['related_description_color']!="")
	{
		$related_description_color="var(--".$data['related_description_color']."-color)";
	}
	else
	{
		$related_description_color="#333";
	}
	
	if($data['related_background_color']=="custom")
	{
		$related_background_color=$data['related_background_custom_color'];
	}
	else if($data['related_background_color']!="")
	{
		$related_background_color="var(--".$data['related_background_color']."-color)";
	}
	else
	{
		$related_background_color="#FFFFFF";
	}
	?>
	
	.single-service .fullwidth-hero-3
	{
		background:<?php echo $desc_background_color; ?>
	}
	
	.single-service .desc_section
	{
		background:<?php echo $desc_background_color; ?>
	}
	
	.single-service .fullwidth-hero-3 .col span {
	opacity: 0;
	letter-spacing: 2px;
	font-weight: 600;
	font-size: .85rem;
	color: <?php echo $desc_eyebrow_color; ?>;
	margin-bottom: 1.5rem;
	display: block;
	animation-name: fadeUp;
	animation-duration: 500ms;
	animation-fill-mode: forwards;
	animation-delay: 400ms;
	animation-timing-function: ease-in-out;
}

	.single-service .fullwidth-hero-3 .col h2 {
	opacity: 0;
	color:  <?php echo $desc_heading_color; ?>;
	font-size: 3.5rem;
	font-weight: 600;
	animation-name: fadeUp;
	animation-duration: 500ms;
	animation-fill-mode: forwards;
	animation-delay: 500ms;
	animation-timing-function: ease-in-out;
}	

.single-service .service_desc h2 {
	opacity: 0;
	color:  <?php echo $desc_heading_color; ?>;
	font-size: 3.5rem;
	font-weight: 600;
	animation-name: fadeUp;
	animation-duration: 500ms;
	animation-fill-mode: forwards;
	animation-delay: 500ms;
	animation-timing-function: ease-in-out;
}	
	
	.single-service .fullwidth-hero-3 .col p {
	opacity: 0;
	color: <?php echo $services_description_color; ?>;
	font-size: 1.25rem;
	font-weight: 300;
	margin-top: .75rem;
	letter-spacing: .45px;
	max-width: 90%;
	animation-name: fadeUp;
	animation-duration: 500ms;
	animation-fill-mode: forwards;
	animation-delay: 600ms;
	animation-timing-function: ease-in-out;
}

	.single-service .service_desc .intro {
	opacity: 0;
	color: <?php echo $services_description_color; ?>;
	font-size: 1.25rem;
	font-weight: 300;
	margin-top: .75rem;
	letter-spacing: .45px;
	max-width: 90%;
	animation-name: fadeUp;
	animation-duration: 500ms;
	animation-fill-mode: forwards;
	animation-delay: 600ms;
	animation-timing-function: ease-in-out;
}


	.single-service .left-benefit {
	border-left: 3px solid var(--primary-color);
	padding-left: 15px;
	margin-bottom: 40px;
	 color:<?php echo $benefit_text_color; ?>; 
}

	.single-service .padded-top h3 {
	font-weight: 700;
	font-size: 1.45rem;
	 color:<?php echo $benefit_title_color; ?>; 
}

 .single-service .service_breakdown .eyebrow {
	font-weight: 600; 
	font-size: 24px;
	line-height: 1.14286;
	letter-spacing: .007em;
	color: <?php echo $breakdown_eyebrow_color; ?>;
	margin-bottom: 1.5rem;
	display: block;
}

.single-service .service_desc .eyebrow {
	font-weight: 600; 
	font-size: 24px;
	line-height: 1.14286;
	letter-spacing: .007em;
	color: <?php echo $desc_eyebrow_color; ?>;
	margin-bottom: 1.5rem;
	display: block;
}

.single-service .service_breakdown .heading, .service_video .heading, .service_gallery .heading, .service_related .heading{
	font-size: 55px;
	line-height: 1.1625;
	font-weight: 700;
	letter-spacing: -.009em;
	 color: <?php echo $breakdown_heading_color; ?>; 
}

 .single-service .service_breakdown .desc {
	font-size: 21px;
	font-weight: 400;
	letter-spacing: .011em;
	line-height: 1.38105;
	color: <?php echo $breakdown_text_color; ?>;
} 
.single-service .service_breakdown .alignleftrow, .single-service .service_breakdown .alignrightrow{
	background-color: <?php echo $breakdown_back_color; ?>;
}

/*.single-service .service_breakdown .alignleftrow img, .single-service .service_breakdown .alignrightrow img{
	background-color: <?php echo $breakdown_back_color; ?>;
}*/

.single-service .service_video .eyebrow{
	font-weight: 600; 
	font-size: 24px;
	line-height: 1.14286;
	letter-spacing: .007em;
	color: <?php echo $video_eyebrow_color; ?>;
	margin-bottom: 1.5rem;
	display: block;
}
.single-service .service_video h2 {
	opacity: 0;
	color:  <?php echo $video_heading_color; ?>;
	font-size: 3.5rem;
	font-weight: 600;
	animation-name: fadeUp;
	animation-duration: 500ms;
	animation-fill-mode: forwards;
	animation-delay: 500ms;
	animation-timing-function: ease-in-out;
}

.single-service .service_video .video_desc {
	color: <?php echo $video_serv_desc_color; ?>;
}

.single-service .service_video{
	background-color: <?php echo $video_background_color; ?>;
}	

.single-service .service_gallery .eyebrow{
	font-weight: 600; 
	font-size: 24px;
	line-height: 1.14286;
	letter-spacing: .007em;
	color: <?php echo $gallery_eyebrow_color; ?>;
	margin-bottom: 1.5rem;
	display: block;
}

.single-service .service_gallery h2 {
	opacity: 0;
	color:  <?php echo $gallery_heading_color; ?>;
	font-size: 3.5rem;
	font-weight: 600;
	animation-name: fadeUp;
	animation-duration: 500ms;
	animation-fill-mode: forwards;
	animation-delay: 500ms;
	animation-timing-function: ease-in-out;
}

.single-service .service_gallery{
	background-color: <?php echo $gallery_background_color; ?>;
}	

.single-service .service_related .eyebrow{
	font-weight: 600; 
	font-size: 24px;
	line-height: 1.14286;
	letter-spacing: .007em;
	color: <?php echo $related_eyebrow_color; ?>;
	margin-bottom: 1.5rem;
	display: block;
}	
.single-service .service_related h2 {
	opacity: 0;
	color:  <?php echo $related_heading_color; ?>;
	font-size: 3.5rem;
	font-weight: 600;
	animation-name: fadeUp;
	animation-duration: 500ms;
	animation-fill-mode: forwards;
	animation-delay: 500ms;
	animation-timing-function: ease-in-out;
}

.single-service .service_related{
	background-color: <?php echo $related_background_color; ?>;
}	
.service_breakdown .p1-both:after{
	background-color: <?php echo $breakdown_overlay_color; ?>;
	opacity: <?php echo $breakdown_overlay_opacity; ?>;
}