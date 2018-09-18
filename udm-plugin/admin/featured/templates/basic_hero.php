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

<ul id="layoutsettings" class="hero_type_style collapse show basic_hero">
	<li class="colorchange"><h3>Background Color: </h3>
		<select name="background_color" id="background_color">
			<option value="primary" selected="">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="background_custom_color" value="" />
			</li>
		</ul>
	</li>
	<li><h3>Background Image Opacity(in %): </h3><input type="number" name="background_opacity" value="<?php echo $data['background_opacity']; ?>" /></li>
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
	<li class="colorchange"><h3>Text Color: </h3>
		<select name="text_color" id="text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="text_custom_color" value="" />
			</li>
		</ul>
	</li>
	<li class="rightwidget">
		<h3>Right side Widget</h3>
		<select name="right_side_widget" id="right_side_widget">
			<option value="">Select Widget</option>
			<option value="1">Phone</option>
			<option value="2">Call to Action</option>
		</select>
	</li>
	<div id="phonewidget" style="display:none;">
		<li class="colorchange"><h3>Phone Number Color: </h3>
			<select name="phone_number_color" id="phone_number_color">
				<option value="primary">Primary</option>
				<option value="secondary" selected="">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Phone Number Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="phone_number_custom_color" value="" />
				</li>
			</ul>
		</li>
	</div>
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
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light" selected="">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Button Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="button_text_custom_color" value="" />
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
		$('#right_side_widget').change(function(){
			if($(this).val() == "1")
			{
				$('#callactionwidget').hide();
				$('#phonewidget').show();
			}
			else if($(this).val() == "2")
			{
				$('#callactionwidget').show();
				$('#phonewidget').hide();
			}
			else
			{
				$('#callactionwidget').hide();
				$('#phonewidget').hide();
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