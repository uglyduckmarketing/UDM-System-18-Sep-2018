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

<ul id="layoutsettings" class="hero_type_style collapse show splitscreen">
	<li><h3>Image Type: </h3><span><input type="radio" name="image_type" value="full" checked="" />Fullwidth</span><span><input type="radio" name="image_type" value="contained" />Contained</span></li>
	<li><h3>Content Side: </h3><span><input type="radio" name="content_side" value="left" checked="" />Left</span><span><input type="radio" name="content_side" value="right" />Right</span></li>
	<li class="colorchange"><h3>Background Color: </h3>
		<select name="background_color" id="background_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark" selected="">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="background_custom_color" value="" />
			</li>
		</ul>
	</li>
	
	<li class="colorchange"><h3>Content Background: </h3>
		<select name="content_background" id="content_background">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="content_custom_background" value="" />
			</li>
		</ul>
	</li>
	<li><h3>Background Image Opacity(in %): </h3><input type="number" name="background_opacity" value="" /></li>
	<li class="colorchange"><h3>Overlay Color: </h3>
		<select name="overlay_color" id="overlay_color">
			
			<option value="primary" <?php selected('primary',$data['overlay_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['overlay_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['overlay_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['overlay_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['overlay_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['overlay_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Overlay Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="overlay_custom_color" value="<?php echo $data['overlay_custom_color']; ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Header Text Color: </h3>
		<select name="header_text_color" id="header_text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected="">Custom</option>
		</select>
		<ul class="customcolor" style="display:block;">
			<li>
				<h3>Header Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="header_text_custom_color" value="#fff" />
			</li>
		</ul>
	</li>
	
	<li class="colorchange"><h3>Eyebrow Text Color: </h3>
		<select name="eyebrow_text_color" id="eyebrow_text_color">
			<option value="primary" selected="">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="eyebrow_text_custom_color" value="" />
			</li>
		</ul>
	</li>
	
	<li class="colorchange"><h3>Description Color: </h3>
		<select name="desc_text_color" id="desc_text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Description Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="desc_text_custom_color" value="" />
			</li>
		</ul>
	</li>
	<li><h3>Height: </h3><input type="text" name="height" value="" /></li>
	<li>
		<h3>Button: </h3>
		<span class="switch">
			<input type="checkbox" name="show_button" class="switch" id="show_button" value="yes">
			<label for="show_button">Off/On</label>
		</span>
	</li>
	<div id="callactionwidget" style="display:none;">
		<li class="colorchange"><h3>Button Color: </h3>
			<select name="button_color" id="button_color">
				<option value="primary">Primary</option>
				<option value="secondary" selected="">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Button Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="button_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Button Text Color: </h3>
			<select name="button_text_color" id="button_text_color">
				<option value="">Default Color</option>
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Button Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="button_text_custom_color" value="<?php echo $data['button_text_custom_color']; ?>" />
				</li>
			</ul>
		</li>
		<li><h3>Button Link: </h3><input type="text" name="button_link" value="" /></li>
		<li><h3>Button Text: </h3><input type="text" name="button_text" value="" /></li>
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