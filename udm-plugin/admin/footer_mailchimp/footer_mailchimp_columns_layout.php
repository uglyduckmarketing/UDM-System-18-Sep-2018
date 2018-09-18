<?php

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('../../../../../../wp-load.php'); 
$data=unserialize(get_option('footer_layout_1'));

if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
?>

	<?php if($layout=="1_2")
		{ 
	?>
	<style>.column-1-3 { display: none } .column-1-4 { display: none } .column-1-5 { display: none } .column-1-2 { display: block }</style>
    <li class="column-1-2">
        <div class="col headwidget">
			<select name="menu1">
				<?php 
					$menus1=wp_get_nav_menus();
					foreach( $menus1 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
        </div>
    </li>
	<li class="column-1-2">
        <div class="headwidget">
          <select name="menu2">
				<?php 
					$menus2=wp_get_nav_menus();
					foreach( $menus2 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
        </div>
    </li> 
	<?php 
	}
	if($layout=="1_3")
	{
	?>
	<style>.column-1-2 { display: none } .column-1-4 { display: none } .column-1-5 { display: none } .column-1-3 { display: block }</style>
    <li class="column-1-3">
        <div class="col headwidget">
			  <select name="menu1">
				<?php 
					$menus1=wp_get_nav_menus();
					foreach( $menus1 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
        </div>
    </li>
	<li class="column-1-3">
        <div class="col headwidget">
			<select name="menu2">
				<?php 
					$menus2=wp_get_nav_menus();
					foreach( $menus2 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
        </div>
    </li>
	<li class="column-1-3">
        <div class="col headwidget">
			<select name="menu3">
				<?php 
					$menus3=wp_get_nav_menus();
					foreach( $menus3 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
        </div>
    </li>
	<?php
	}
	
	if($layout=="1_4")
	{
	?>
	<style>.column-1-2 { display: none } .column-1-3 { display: none } .column-1-5 { display: none } .column-1-4 { display: block }</style>
    <li class="column-1-4">
       <div class="col headwidget">
			<select name="menu1">
				<?php 
					$menus1=wp_get_nav_menus();
					foreach( $menus1 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
        </div>
    </li>
	<li class="column-1-4">
       <div class="col headwidget">
			<select name="menu2">
				<?php 
					$menus2=wp_get_nav_menus();
					foreach( $menus2 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
		</div>
    </li>
	<li class="column-1-4">
        <div class="col headwidget">
			<select name="menu3">
				<?php 
					$menus3=wp_get_nav_menus();
					foreach( $menus3 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
		</div>
    </li>
	<li class="column-1-4">
        <div class="col headwidget">
			<select name="menu4">
				<?php 
					$menus4=wp_get_nav_menus();
					foreach( $menus4 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
		</div>
    </li>
	<?php }
	if($layout=="1_5"){ 
	?>
	<style>.column-1-2 { display: none } .column-1-3 { display: none } .column-1-4 { display: none }  .column-1-5 { display: block }</style>
	<li class="column-1-5">
        <div class="col headwidget">
			<select name="menu1">
				<?php 
					$menus1=wp_get_nav_menus();
					foreach( $menus1 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
		</div>
    </li>
	<li class="column-1-5">
        <div class="col headwidget">
			<select name="menu2">
				<?php 
					$menus2=wp_get_nav_menus();
					foreach( $menus2 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
		</div>
    </li>
	<li class="column-1-5">
		<div class="col headwidget">
			<select name="menu3">
				<?php 
					$menus3=wp_get_nav_menus();
					foreach( $menus3 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
		</div>
    </li>
	<li class="column-1-5">
        <div class="col headwidget">
			<select name="menu4">
				<?php 
					$menus4=wp_get_nav_menus();
					foreach( $menus4 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
		</div>
    </li>
	<li class="column-1-5">
       <div class="col headwidget">
			<select name="menu5">
				<?php 
					$menus5=wp_get_nav_menus();
					foreach( $menus5 as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug,) ?>><?php echo $item->name;  ?></option>
				<?php
					}
				?>
			</select>
		</div>
    </li>	
	
	<?php 
	
	}
	?>
	
	
	
	
	<script>
	jQuery(document).ready(function($) {
		$('.dropdown-item').click(function(){
			var widget = $(this).attr('value');
			alert(widget);
		});
	  });																		
</script>