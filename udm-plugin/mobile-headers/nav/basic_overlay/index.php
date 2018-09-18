<?php
	$data=unserialize(get_option('mobile_header_layout_'.$mobilelayout));
?>
	<div id="mobile-navigation" class="mobile-menu-container not-visible basic_overlay">
		<button class="menu-button close-menu"><span>Menu</span></button>
        <div class="">
           <?php 
				if($data['navigation']!=""){
					wp_nav_menu(array('menu_id' => 'mobile-menu','menu' => $data['navigation']));
				}
				else
				{
					wp_nav_menu(array('menu_id' => 'mobile-menu'));
				}
		   ?>
        </div>
    </div>
