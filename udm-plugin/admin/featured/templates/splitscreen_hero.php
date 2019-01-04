<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php'; 
?>
<!-- Theme Options JS -->
<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>
<ul id="layoutsettings" class="hero_type_style collapse show splitscreen common_setting">
	<li class="cus_txt_align"><h4>Image Type: </h4>
		<span><input type="radio" name="image_type" value="full" checked="" />Fullwidth</span><span><input type="radio" name="image_type" value="contained" />Contained</span>
		<div class="clearfix"></div>
	</li>
	<li class="cus_txt_align"><h4>Content Side: </h4>
		<span><input type="radio" name="content_side" value="left" checked="" />Left</span><span><input type="radio" name="content_side" value="right" />Right</span>
		<div class="clearfix"></div>
	</li>
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
				<input class="udm_color_picker" type="text" name="background_custom_color" value="" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>	
	<li class="colorchange"><h4>Content Background: </h4>
		<select name="content_background" id="content_background">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:none;">
			<li><h4>Background Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="content_custom_background" value="" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li><h4>Background Image Opacity(in %): </h4>
		<input type="number" name="background_opacity" value="" />
		<div class="clearfix"></div>
	</li>
	<li class="colorchange"><h4>Overlay Color: </h4>
		<select name="overlay_color" id="overlay_color">			
			<option value="primary" >Primary</option>
			<option value="secondary" >Secondary</option>
			<option value="global_light" >Global Light</option>
			<option value="global_dark" >Global Dark</option>
			<option value="custom" >Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" >
			<li><h4>Overlay Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="overlay_custom_color" value="" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li class="colorchange"><h4>Header Text Color: </h4>
		<select name="header_text_color" id="header_text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected="">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:block;">
			<li><h4>Header Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="header_text_custom_color" value="#fff" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>	
	<li class="colorchange"><h4>Eyebrow Text Color: </h4>
		<select name="eyebrow_text_color" id="eyebrow_text_color">
			<option value="primary" selected="">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:none;">
			<li><h4>Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="eyebrow_text_custom_color" value="" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	
	<li class="colorchange"><h4>Description Color: </h4>
		<select name="desc_text_color" id="desc_text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:none;">
			<li><h4>Description Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="desc_text_custom_color" value="" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li><h4>Height: </h4>
		<input type="text" name="height" value="" />
		<div class="clearfix"></div>
	</li>
	<li><h4>Button: </h4>
		<span class="switch cus_bar_switch">
			<input type="checkbox" name="show_button" class="switch" id="show_button" value="yes">
			<label for="show_button">Off/On</label>
		</span>
		<div class="clearfix"></div>
	</li>
	<div id="callactionwidget" class="common_setting" style="display:none;"> 
		<li class="colorchange"><h4>Button Color: </h4>
			<select name="button_color" id="button_color">
				<option value="primary">Primary</option>
				<option value="secondary" selected="">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor" style="display:none;">
				<li><h4>Button Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="button_custom_color" value="" />
					<div class="clearfix"></div>
				</li>
			</ul>
		</li>
		<li class="colorchange"><h4>Button Text Color: </h4>
			<select name="button_text_color" id="button_text_color">
				<option value="">Default Color</option>
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor" style="display:none;">
				<li><h4>Button Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="button_text_custom_color" value="" />
					<div class="clearfix"></div>
				</li>
			</ul>
		</li>
		<li><h4>Button Link: </h4>
			<input type="text" name="button_link" value="" />
			<div class="clearfix"></div>
		</li>
		<li><h4>Button Text: </h4>
			<input type="text" name="button_text" value="" />
			<div class="clearfix"></div>	
		</li>
		<div class="clearfix"></div>  
	</div>
</ul>
<script>
	jQuery(document).ready(function($) {

		$('.udm_color_picker').wpColorPicker();  //Add color picker 
		$('#show_button').change(function(){
			if($(this).prop("checked") == true)
			{
				$('#callactionwidget').show();
			}
			else
			{
				$('#callactionwidget').hide();
			}
		});
		
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