
<!-- Mobile Navigation -->
	<div class="mobile_menu">
		<div class="navigation-container basic_slidedown">
			<?php 
				if($data['navigation']!=""){
					wp_nav_menu(array('menu_class' => 'nav', 'menu' => $data['navigation']));
				}
				else
				{
					wp_nav_menu(array('menu_class' => 'nav'));
				}
		   ?>
		</div>
	</div>