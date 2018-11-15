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
	if(get_post_meta( $_GET['id'], 'udm_specific_hero', true ))
	{
		$layout=get_post_meta( $_GET['id'], 'udm_specific_hero', true );
	}
	else
	{
		$layout=get_option('udm_hero_default');
	}
	
	if(strpos($layout, 'Basic_Hero') !== false){
	$data=unserialize(get_option('featured_layout_'.$layout));
	
	if(has_post_thumbnail($_GET['id']))
	{
		$background="url('".get_the_post_thumbnail_url($_GET['id'])."');";
	}
	else if($data['background_color']=="custom")
	{
		$background=$data['background_custom_color'];
	}
	else if($data['background_color']!="")
	{
		$background="var(--".$data['background_color']."-color)";
	}
	else
	{
		$background="var(--primary-color)";
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
	
	if($data['text_color']=="custom")
	{
		$header_text_color=$data['text_custom_color'];
	}
	else if($data['text_color']!="")
	{
		$header_text_color="var(--".$data['text_color']."-color)";
	}
	else
	{
		$header_text_color="var(--global_light-color)";
	} 
	
	
	if($data['button_color']=="custom")
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
	
	if($data['button_text_color']=="custom")
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
	
	if($data['phone_number_color']=="custom")
	{
		$phone_number_color = $data['phone_number_custom_color'];
	}
	else if($data['phone_number_color']!="")
	{
		$phone_number_color="var(--".$data['phone_number_color']."-color)";
	}
	else
	{
		$phone_number_color="var(--secondary-color)";
	}
?>

.basic_hero{
	background:<?php echo $background; ?>;
	background-repeat: no-repeat;
    background-size:cover;
}
.basic_hero::before{
	background:<?php echo $overlay_color; ?>;
	opacity:<?php echo $background_opacity; ?>
}

.basic_hero .basic_hero_inner h4{
	color:<?php echo $header_text_color; ?>;
}

.basic_hero .basic_hero_inner .right_side_bt .btn-info{
	background:<?php echo $button_color; ?>;
	border-color: <?php echo $button_color; ?>;
	color:<?php echo $button_text_color; ?>;
	
}

.basic_hero .basic_hero_inner .right_side_bt .phonetext{
	color: <?php echo $phone_number_color; ?>;
	font-size:30px;
	font-weight: bold;
}

<?php
	}

	if(strpos($layout, 'Fulwidth_Hero') !== false)
	{
	
	$data=unserialize(get_option('featured_layout_'.$layout));	
	
	if(has_post_thumbnail($_GET['id']))
	{
		$background="url('".get_the_post_thumbnail_url($_GET['id'])."');";
	}
	else if($data['background_color']=="custom")
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
	
	if($data['header_text_color']=="custom")
	{
		$header_text_color=$data['header_text_custom_color'];
	}
	else if($data['header_text_color']!="")
	{
		$header_text_color="var(--".$data['header_text_color']."-color)";
	}
	else
	{
		$header_text_color="#fff";
	}
	
	
	if($data['eyebrow_text_color']=="custom")
	{
		$eyebrow_text_color=$data['eyebrow_text_custom_color'];
	}
	else if($data['eyebrow_text_color']!="")
	{
		$eyebrow_text_color="var(--".$data['eyebrow_text_color']."-color)";
	}
	else
	{
		$eyebrow_text_color="var(--primary-color)";
	}
	
	if($data['desc_text_color']=="custom")
	{
		$description_color=$data['desc_text_custom_color'];
	}
	else if($data['desc_text_color']!="")
	{
		$description_color="var(--".$data['desc_text_color']."-color)";
	}
	else
	{
		$description_color="var(--global_light-color)";
	}
	
	
	if($data['height']!="")
	{
		$height = $data['height'];
	}
	else
	{
		$height="650px";
	}
	
	if($data['button_color']=="custom")
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
	if($data['button_text_color']=="custom")
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

.fullwidth-hero-3{
	background:<?php echo $background; ?>;
	height:<?php echo $height; ?>;
	background-repeat: no-repeat;
    background-size:cover;
}
.fullwidth-hero-3::before{
	background:<?php echo $overlay_color; ?>;
	opacity:<?php echo $background_opacity; ?>;
}
.fullwidth-hero-3 .fullwidth_content h2{
	color:<?php echo $header_text_color; ?>;
}
.fullwidth-hero-3 .fullwidth_content span{
	color:<?php echo $eyebrow_text_color; ?>;
}
.fullwidth-hero-3 .fullwidth_content p{
	color:<?php echo $description_color; ?>;
}
.fullwidth-hero-3 .right_side_bt .btn-info{
	background:<?php echo $button_color; ?>;
	border-color: <?php echo $button_color; ?>;
	color:<?php echo $button_text_color; ?>;
}

<?php
	}
	
	if(strpos($layout, 'Splitscreen_Hero') !== false)
	{
	
	$data=unserialize(get_option('featured_layout_'.$layout));	
	if($data['image_type']=="full"){
		
		if(has_post_thumbnail($_GET['id']))
		{
			$background="url('".get_the_post_thumbnail_url($_GET['id'])."');";
		}
		else if($data['background_color']=="custom")
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
	
	if($data['content_background']=="custom")
	{
		$content_background=$data['content_custom_background'];
	}
	else if($data['content_background']!="")
	{
		$content_background="var(--".$data['content_background']."-color)";
	}
	else
	{
		$content_background="transparent";
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
	
	if($data['header_text_color']=="custom")
	{
		$header_text_color=$data['header_text_custom_color'];
	}
	else if($data['header_text_color']!="")
	{
		$header_text_color="var(--".$data['header_text_color']."-color)";
	}
	else
	{
		$header_text_color="#fff";
	}
	
	if($data['eyebrow_text_color']=="custom")
	{
		$eyebrow_text_color=$data['eyebrow_text_custom_color'];
	}
	else if($data['eyebrow_text_color']!="")
	{
		$eyebrow_text_color="var(--".$data['eyebrow_text_color']."-color)";
	}
	else
	{
		$eyebrow_text_color="var(--primary-color)";
	}
	
	if($data['desc_text_color']=="custom")
	{
		$description_color=$data['desc_text_custom_color'];
	}
	else if($data['desc_text_color']!="")
	{ 
		$description_color="var(--".$data['desc_text_color']."-color)";
	}
	else
	{
		$description_color="var(--global_light-color)";
	}
	
	
	if($data['height']!="")
	{
		$height = $data['height'];
	}
	else
	{
		$height="650px";
	}
	
	if($data['button_color']=="custom")
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
	if($data['button_text_color']=="custom")
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

.splitscreen-hero{
	
	background:<?php echo $background; ?>;
	height:<?php echo $height; ?>;
	background-repeat: no-repeat;
    background-size:cover;
}
.splitscreen-hero::before{
	background:<?php echo $overlay_color; ?>;
	opacity:<?php echo $background_opacity; ?>;
	<?php if($data['content_side']=="left"){ echo "left:0;"; }else{  echo "right:0;"; } ?>
}

.splitscreen-hero.back::before
{
	background:<?php echo $overlay_color; ?>;
	opacity:<?php echo $background_opacity; ?>;	
}

.splitscreen-hero.contained .p1-both::before
{
	background:<?php echo $overlay_color; ?>;
	opacity:<?php echo $background_opacity; ?>;	
}
.splitscreen-hero .fullwidth_content h2{
	color:<?php echo $header_text_color; ?>;
}
.splitscreen-hero .fullwidth_content span{
	color:<?php echo $eyebrow_text_color; ?>;
}
.splitscreen-hero .fullwidth_content p{
	color:<?php echo $description_color; ?>;
}
.splitscreen-hero .right_side_bt .btn-info{
	background:<?php echo $button_color; ?>;
	border-color: <?php echo $button_color; ?>;
	color:<?php echo $button_text_color; ?>;
}

.splitscreen-hero .right_side_bt .phonetext{
	color: <?php echo $phone_number_color; ?>;
	font-size:30px;
	font-weight: bold;
}

.splitscreen-hero .row .p1-both {
  height:<?php echo $height; ?>;
  overflow: hidden;
}

.splitscreen-hero .row .p1-both .image_repsonsive {
  height:<?php echo $height; ?>;
}

.splitscreen-hero .row.content-left {
    flex-direction: row-reverse;
	
}
.splitscreen-hero.contained .p1-left
{
	background:<?php echo $content_background; ?>;
	align-items: center;
    display: flex;
}

.splitscreen-hero .p1-left
{
	align-items: center;
    display: flex;
}
<?php
	}
	
	if(strpos($layout, 'Leftrightelement_Hero') !== false)
	{
	
	$data=unserialize(get_option('featured_layout_'.$layout));	
	
	if(has_post_thumbnail($_GET['id']))
	{
		$background="url('".get_the_post_thumbnail_url($_GET['id'])."');";
	}
	else if($data['background_color']=="custom")
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
	
	if($data['header_text_color']=="custom")
	{
		$header_text_color=$data['header_text_custom_color'];
	}
	else if($data['header_text_color']!="")
	{
		$header_text_color="var(--".$data['header_text_color']."-color)";
	}
	else
	{
		$header_text_color="#fff";
	}
	
	
	if($data['eyebrow_text_color']=="custom")
	{
		$eyebrow_text_color=$data['eyebrow_text_custom_color'];
	}
	else if($data['eyebrow_text_color']!="")
	{
		$eyebrow_text_color="var(--".$data['eyebrow_text_color']."-color)";
	}
	else
	{
		$eyebrow_text_color="var(--primary-color)";
	}
	
	if($data['desc_text_color']=="custom")
	{
		$description_color=$data['desc_text_custom_color'];
	}
	else if($data['desc_text_color']!="")
	{
		$description_color="var(--".$data['desc_text_color']."-color)";
	}
	else
	{
		$description_color="var(--global_light-color)";
	}
	
	if($data['height']!="")
	{
		$height = $data['height'];
	}
	else
	{
		$height="650px";
	}
	

	if($data['button_color']=="custom")
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
	
	if($data['button_text_color']=="custom")
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

.fullwidth-hero-3.leadgen-hero.left-right_hero{
	background:<?php echo $background; ?>;
	height:<?php echo $height; ?>;
	background-repeat: no-repeat;
    background-size:cover;
}
.fullwidth-hero-3.leadgen-hero.left-right_hero::before{
	background:<?php echo $overlay_color; ?>;
	opacity:<?php echo $background_opacity; ?>;
}

.fullwidth-hero-3.leadgen-hero.left-right_hero .fullwidth_content h2{
	color:<?php echo $header_text_color; ?>;
}
.fullwidth-hero-3.leadgen-hero.left-right_hero .fullwidth_content span{
	color:<?php echo $eyebrow_text_color; ?>;
}
.fullwidth-hero-3.leadgen-hero.left-right_hero .fullwidth_content p{
	color:<?php echo $description_color; ?>;
}

.fullwidth-hero-3.leadgen-hero.left-right_hero .right_side_bt .btn-info{
	background:<?php echo $button_color; ?>;
	border-color: <?php echo $button_color; ?>;
	color:<?php echo $button_text_color; ?>;
}

.fullwidth-hero-3.leadgen-hero.left-right_hero .row.content-right {
    flex-direction: row-reverse;
}

<?php
	}
	
	if(strpos($layout, 'Leadgen_Hero') !== false)
	{
	
	$data=unserialize(get_option('featured_layout_'.$layout));	
	
	if(has_post_thumbnail($_GET['id']))
	{
		$background="url('".get_the_post_thumbnail_url($_GET['id'])."');";
	}
	else if($data['background_color']=="custom")
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
	
	if($data['header_text_color']=="custom")
	{
		$header_text_color=$data['header_text_custom_color'];
	}
	else if($data['header_text_color']!="")
	{
		$header_text_color="var(--".$data['header_text_color']."-color)";
	}
	else
	{
		$header_text_color="var(--".$data['header_text_color']."-color)";
	}
	
	
	if($data['eyebrow_text_color']=="custom")
	{
		$eyebrow_text_color=$data['eyebrow_text_custom_color'];
	}
	else if($data['eyebrow_text_color']!="")
	{
		$eyebrow_text_color="var(--".$data['eyebrow_text_color']."-color)";
	}
	else
	{
		$eyebrow_text_color="var(--primary-color)";
	}
	
	if($data['desc_text_color']=="custom")
	{
		$description_color=$data['desc_text_custom_color'];
	}
	else if($data['desc_text_color']!="")
	{
		$description_color="var(--".$data['desc_text_color']."-color)";
	}
	else
	{
		$description_color="var(--global_light-color)";
	}
	
	if($data['height']!="")
	{
		$height = $data['height'];
	}
	else
	{
		$height="650px";
	}
	

	if($data['button_color']=="custom")
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
	
	if($data['button_text_color']=="custom")
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

.fullwidth-hero-3.leadgen-hero{
	background:<?php echo $background; ?>;
	height:<?php echo $height; ?>;
	background-repeat: no-repeat;
    background-size:cover;
	padding:30px 0;
}
.fullwidth-hero-3.leadgen-hero::before{
	opacity:<?php echo $background_opacity; ?>;
	background:<?php echo $overlay_color; ?>;
}


.fullwidth-hero-3.leadgen-hero .fullwidth_content h2{
	color:<?php echo $header_text_color; ?>;
}
.fullwidth-hero-3.leadgen-hero .fullwidth_content span{
	color:<?php echo $eyebrow_text_color; ?>;
}
.fullwidth-hero-3.leadgen-hero .fullwidth_content p{
	color:<?php echo $description_color; ?>;
}

.fullwidth-hero-3.leadgen-hero .right_side_bt .btn-info{
	background:<?php echo $button_color; ?>;
	border-color: <?php echo $button_color; ?>;
	color: <?php echo $button_text_color; ?>;
}


<?php
	}
	
 ?>