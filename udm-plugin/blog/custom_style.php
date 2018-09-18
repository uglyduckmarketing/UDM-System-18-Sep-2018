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
	
	if(get_post_meta( $_GET['id'], 'udm_specific_bloglayout', true )!="")
	{
		$layoutblog=get_post_meta( $_GET['id'], 'udm_specific_bloglayout', true );
	}
	else
	{
		$layoutblog=get_option('udm_bloglayout_default');
	}

	if(strpos($layoutblog, 'Cards') !== false){
	$data=unserialize(get_option('blog_layout_'.$layoutblog));
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
		$overlay_color="rgb(37,37,37)";
	} 
	
	
	
	if($data['post_heading_color']=="custom")
	{
		$post_heading_color=$data['post_heading_custom_color'];
	}
	else if($data['post_heading_color']!="")
	{
		$post_heading_color="var(--".$data['post_heading_color']."-color)";
	}
	else
	{
		$post_heading_color="#fff";
	} 
	
	
	if($data['readmore_color']=="custom")
	{
		$readmore_color=$data['readmore_custom_color'];
	}
	else if($data['readmore_color']!="")
	{
		$readmore_color="var(--".$data['readmore_color']."-color)";
	}
	else
	{
		$readmore_color="var(--primary-color)";
	} 
	?>
	.main-cards-view .photo_blog_main a::after{
		background-color:<?php echo $overlay_color; ?>;
		opacity:0.55;
	}
	
	.main-cards-view .desc h4{
		color:<?php echo $post_heading_color; ?>;
	}
	
	.main-cards-view .inner_grid_sec .desc .date_time{
		color:rgba(255,255,255,0.7);
	}
	
	.main-cards-view .inner_grid_sec .arrow a{
		color:rgba(255,255,255,0.7);
	}
	
	.main-cards-view .inner_grid_sec .desc p a {
		color:<?php echo $readmore_color; ?>;
	}
	
	
	<?php	
	}else{
	$data=unserialize(get_option('blog_layout_'.$layoutblog));
	
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
		$overlay_color="rgb(37,37,37)";
	} 
	
	
	
	if($data['post_heading_color']=="custom")
	{
		$post_heading_color=$data['post_heading_custom_color'];
	}
	else if($data['post_heading_color']!="")
	{
		$post_heading_color="var(--".$data['post_heading_color']."-color)";
	}
	else
	{
		$post_heading_color="var(--global_dark-color)";
	} 
	
	
	if($data['post_text_color']=="custom")
	{
		$post_text_color=$data['post_text_custom_color'];
	}
	else if($data['post_text_color']!="")
	{
		$post_text_color="var(--".$data['post_text_color']."-color)";
	}
	else
	{
		$post_text_color="var(--global_dark-color)";
	} 
	
	if($data['post_date_color']=="custom")
	{
		$post_date_color=$data['post_date_custom_color'];
	}
	else if($data['post_date_color']!="")
	{
		$post_date_color="var(--".$data['post_date_color']."-color)";
	}
	else
	{
		$post_date_color="var(--primary-color)";
	} 
	
	
	if($data['readmore_color']=="custom")
	{
		$readmore_color=$data['readmore_custom_color'];
	}
	else if($data['readmore_color']!="")
	{
		$readmore_color="var(--".$data['readmore_color']."-color)";
	}
	else
	{
		$readmore_color="var(--primary-color)";
	} 
	
	?>
	
	.main-grid-view .photo_blog_main a::after{
		background-color:<?php echo $overlay_color; ?>;
		opacity:0.55;
	}
	
	.main-grid-view .desc h4{
		color:<?php echo $post_heading_color; ?>;
	}
	
	.inner_grid_sec .desc .date_time{
		color:<?php echo $post_date_color; ?>;
	}
	
	.inner_grid_sec .desc p {
		color:<?php echo $post_text_color; ?>;
	}
	
	.inner_grid_sec .desc p a {
		color:<?php echo $readmore_color; ?>;
	}
	
	<?php 
	}
	?>
	
	.latest-posts-view .photo_blog_main a::after{
		background-color:rgba(37,37,37);
		opacity:0.55;
	}
	
	.latest-posts-view .desc h4{
		color:var(--global_dark-color);
	}
	
	.latest-posts-view .desc .date_time{
		color:var(--primary-color);
	}
	
	.latest-posts-view .desc p {
		color: var(--global_dark-color);
	}
	
	.latest-posts-view .desc p a {
		color:var(--primary-color);
	}
	
	