<?php
	if(is_home() || is_archive())
	{
		$pid = get_option( 'page_for_posts' );
	}
	else
	{
		$pid = get_the_ID();
	}
	
	$meta = get_post_meta( $pid, 'hero_fields', true ); 
	
		if(get_post_meta( $pid, 'udm_specific_header', true )!="")
			{
				$headerlayout=get_post_meta(  $pid, 'udm_specific_header', true );
			}
			else if(get_option('udm_header_default')!="")
			{
				$headerlayout=get_option('udm_header_default');
			}
			else
			{
				$headerlayout="";
			}
			
			if(get_post_meta( $pid, 'udm_specific_mobile_header', true )!="")
			{
				$mobileheaderlayout=get_post_meta( $pid, 'udm_specific_mobile_header', true );
			}
			else if(get_option('udm_mobile_header_default')!="")
			{
				$mobileheaderlayout=get_option('udm_mobile_header_default');
			}
			else
			{
				$mobileheaderlayout="";
			}
			
			
		if(strpos($headerlayout, 'Basic_Header') !== false){
			$layout=$headerlayout;
			include get_template_directory() . '/udm-plugin/headers/basic_header/index.php';
			
				
		?>
	<section class="mobile-header-sec basic_headersec">
		<?php		
			$mobilelayout=$mobileheaderlayout;
			include get_template_directory() . '/udm-plugin/mobile-headers/index.php';
		?>
		
	</section>
	<?php	
	
		}
		else if(strpos($headerlayout, 'Stacked_Header') !== false){
			$layout=$headerlayout;
			include get_template_directory() . '/udm-plugin/headers/stacked_header/index.php';
				
		?>
	<section class="mobile-header-sec basic_headersec">
		<?php		
			$mobilelayout=$mobileheaderlayout;
			include get_template_directory() . '/udm-plugin/mobile-headers/index.php';
		?>
		
	</section>
	<?php	
		}
		else if(strpos($headerlayout, 'Transparent_Header') !== false){
			$layout=$headerlayout;
			include get_template_directory() . '/udm-plugin/headers/transparent_header/index.php';
				
		?>
	<section class="mobile-header-sec basic_headersec">
		<?php		
			$mobilelayout=$mobileheaderlayout;
			include get_template_directory() . '/udm-plugin/mobile-headers/index.php';
		?>
		
	</section>
	<?php	
		}
		else
		{
			include get_template_directory() . '/udm-plugin/headers/default/index.php';
		}
		
	
	if(strpos($headerlayout, 'Transparent_Header') !== false){
		$transparent_header_class="transparent_header";
	}	
	
	if(get_post_meta( get_the_ID(), 'udm_specific_bloglayout', true )!="")
	{
		$bloglayout=get_post_meta( get_the_ID(), 'udm_specific_bloglayout', true );
	}
	else if(get_option('udm_bloglayout_default')!="")
	{
		$bloglayout=get_option('udm_bloglayout_default');
	}
	else
	{
		$bloglayout="";
	}
	
	if((is_archive() || is_home()) && strpos($bloglayout, 'Grid') !== false)
	{
		
	}
	else
	{
		  
	if( isset($meta['hero_image_show']) && $meta['hero_image_show'] == "yes"){
	}else{
		if(strpos(get_post_meta( $pid, 'udm_specific_hero', true ), 'Basic_Hero') !== false){
			$layout=get_post_meta( $pid, 'udm_specific_hero', true );
			include get_template_directory() . '/udm-plugin/featured/base_hero/index.php';
		}
		else if(get_post_meta( $pid, 'udm_specific_hero', true )=="" && strpos(get_option('udm_hero_default'), 'Basic_Hero') !== false){
			$layout=get_option('udm_hero_default');
			include get_template_directory() . '/udm-plugin/featured/base_hero/index.php';
			
		}
		
		if(strpos(get_post_meta( $pid, 'udm_specific_hero', true ), 'Fulwidth_Hero') !== false){
			$layout=get_post_meta( $pid, 'udm_specific_hero', true );
			include get_template_directory() . '/udm-plugin/featured/fullwidth_hero/index.php';
		}
		else if(get_post_meta( $pid, 'udm_specific_hero', true )=="" && strpos(get_option('udm_hero_default'), 'Fulwidth_Hero') !== false){
			$layout=get_option('udm_hero_default');
			include get_template_directory() . '/udm-plugin/featured/fullwidth_hero/index.php';
			
		}
		
		if(strpos(get_post_meta( $pid, 'udm_specific_hero', true ), 'Splitscreen_Hero') !== false){
			$layout=get_post_meta( $pid, 'udm_specific_hero', true );
			include get_template_directory() . '/udm-plugin/featured/splitscreen_hero/index.php';
		}
		else if(get_post_meta( $pid, 'udm_specific_hero', true )=="" && strpos(get_option('udm_hero_default'), 'Splitscreen_Hero') !== false){
			$layout=get_option('udm_hero_default');
			include get_template_directory() . '/udm-plugin/featured/splitscreen_hero/index.php';
		}
		
		
		if(strpos(get_post_meta( $pid, 'udm_specific_hero', true ), 'Leftrightelement_Hero') !== false){
			$layout=get_post_meta( $pid, 'udm_specific_hero', true );
			include get_template_directory() . '/udm-plugin/featured/leftrightelement_hero/index.php';
		}
		else if(get_post_meta( $pid, 'udm_specific_hero', true )=="" && strpos(get_option('udm_hero_default'), 'Leftrightelement_Hero') !== false){
			$layout=get_option('udm_hero_default');
			include get_template_directory() . '/udm-plugin/featured/leftrightelement_hero/index.php';
		}
		
		if(strpos(get_post_meta( $pid, 'udm_specific_hero', true ), 'Leadgen_Hero') !== false){
			$layout=get_post_meta( $pid, 'udm_specific_hero', true );
			include get_template_directory() . '/udm-plugin/featured/leadgen_hero/index.php';
		}
		else if(get_post_meta( $pid, 'udm_specific_hero', true )=="" && strpos(get_option('udm_hero_default'), 'Leadgen_Hero') !== false){
			$layout=get_option('udm_hero_default');
			include get_template_directory() . '/udm-plugin/featured/leadgen_hero/index.php';
		}
	}
	}
?>