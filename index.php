<?php 
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
	include get_template_directory() . '/udm-plugin/blog/cards-view/index.php';
}
else
{
	$layout=$bloglayout;
	include get_template_directory() . '/udm-plugin/blog/grid-view/index.php';
}
get_footer(); ?>