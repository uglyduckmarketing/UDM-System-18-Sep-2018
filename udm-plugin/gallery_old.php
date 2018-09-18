<?php

	if(get_option('udm_gallery_layout_default')=="masonry-layout")
	{
		include get_template_directory() . '/udm-plugin/gallery/masonry.php';
	}
	else if(get_option('udm_gallery_layout_default')=="slideshow-layout")
	{
		include get_template_directory() . '/udm-plugin/gallery/slideshow.php';
	}
	else if(get_option('udm_gallery_layout_default')=="grid-layout")
	{
		include get_template_directory() . '/udm-plugin/gallery/grid.php';
	}
	else
	{
		include get_template_directory() . '/udm-plugin/gallery/carousel.php';
	}
?>