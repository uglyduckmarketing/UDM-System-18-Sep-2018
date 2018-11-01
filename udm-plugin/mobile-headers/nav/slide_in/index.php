<?php
	$data=unserialize(get_option('mobile_header_layout_'.$mobilelayout));
?>
<nav class="slide-menu" id="mobile-slide-in">
  <?php 
				if($data['navigation']!=""){
					wp_nav_menu(array('menu' => $data['navigation']));
				}
				else
				{
					wp_nav_menu();
				}
		   ?>
</nav>