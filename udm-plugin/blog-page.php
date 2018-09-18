<?php 
/*
	Template Name: Blog 
*/
get_header(); 


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
			
	if(strpos($bloglayout, 'Cards') !== false){
		$layout=$bloglayout;
		query_posts('posts_per_page=10');
		include get_template_directory() . '/udm-plugin/blog/cards-view/index.php';
	}
	else
	{
		$layout=$bloglayout;
		query_posts('posts_per_page=10');
		include get_template_directory() . '/udm-plugin/blog/grid-view/index.php';
	}

get_footer(); ?>
