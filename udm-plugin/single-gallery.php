<?php

	if(get_option('udm_gallery_layout_default')=="masonry")
	{
		include get_template_directory() . '/udm-plugin/gallery/single/masonry.php';
	}
	else if(get_option('udm_gallery_layout_default')=="slideshow")
	{
		include get_template_directory() . '/udm-plugin/gallery/single/slideshow.php';
	}
	else if(get_option('udm_gallery_layout_default')=="carousel")
	{
		include get_template_directory() . '/udm-plugin/gallery/single/carousel.php';
	}
	else
	{
		include get_template_directory() . '/udm-plugin/gallery/single/grid.php';
	}
?>