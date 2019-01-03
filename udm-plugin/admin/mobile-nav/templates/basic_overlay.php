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

<ul id="layoutsettings" class="header_type_style collapse show basic_hero common_setting">  
	<li class="colorchange"><h4>Background Color: </h4>
		<select name="background_color" id="background_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark" selected="">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:none;">
			<li><h4>Background Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="background_custom_color" value="#fff" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li><h4>Background Opacity(in %): </h4>
		<input type="number" name="background_opacity" value="85" />
		<div class="clearfix"></div>
	</li>
	<li class="colorchange"><h4>Text Color: </h4>
		<select name="text_color" id="text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected="">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor">
			<li><h4>Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="text_custom_color" value="#fff" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>	
	<li class="colorchange"><h4>Submenu Background Color: </h4>
		<select name="submenu_background_color" id="submenu_background_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:none;">
			<li><h4>Background Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="submenu_background_custom_color" value="#fff" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li class="colorchange"><h4>Submenu Text Color: </h4>
		<select name="submenu_text_color" id="submenu_text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark" selected="">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:none;">
			<li><h4>Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="submenu_text_custom_color" value="" />
				<div class="clearfix"></div>
			</li>
		</ul> 
	</li>  
	<div class="clearfix"></div>	
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