<?php
	define('WP_USE_THEMES', true);
	
	/** Loads the WordPress Environment and Template */
	//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
		include '../../../../../../../wp-load.php'; 
?>
<!-- Theme Options JS -->

<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>

<ul id="layoutsettings" class="header_type_style collapse show basic_hero">
	<li class="colorchange"><h3>Container Background Color: </h3>
		<select name="container_background_color" id="container_background_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor">
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="container_background_custom_color" value="" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Background Color: </h3>
		<select name="nav_background_color" id="nav_background_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected="">Custom</option>
		</select>
		<ul class="customcolor">
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="nav_background_custom_color" value="#fff" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Text Color: </h3>
		<select name="text_color" id="text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark" selected="">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="text_custom_color" value="" />
			</li>
		</ul>
	</li>	
	<li class="colorchange"><h3>Sub menu Header: </h3>
		<select name="submenu_header_color" id="submenu_header_color">
			<option value="primary" selected="">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Sub menu Header Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="submenu_header_custom_color" value="#fff" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Sub menu Text Color: </h3>
		<select name="submenu_header_text_color" id="submenu_header_text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected="">Custom</option>
		</select>
		<ul class="customcolor">
			<li>
				<h3>Sub menu Header Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="submenu_header_text_custom_color" value="#fff" />
			</li>
		</ul>
	</li>
	
</ul>
<script>
	jQuery(document).ready(function($) {

		$('.udm_color_picker').wpColorPicker();  //Add color picker 
		$('.colorchange select').change(function(){
			if($(this).val() == "custom")
			{
				$(this).parent().find('.customcolor').show();
			}
			else
			{
				$(this).parent().find('.customcolor').hide();
			}
		});
		
	  });																		
</script>