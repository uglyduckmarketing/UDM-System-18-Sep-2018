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

<ul id="layoutsettings" class="hero_type_style collapse show basic_hero common_setting">
	<li class="colorchange"><h4>Background Color: </h4>
		<select name="background_color" id="background_color">
			<option value="primary" selected="">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
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
	<li><h4>Background Image Opacity(in %): </h4>
		<input type="number" name="background_opacity" value="<?php echo isset($data['background_opacity']) ? $data['background_opacity'] : ''; ?>" />
		<div class="clearfix"></div>
	</li>
	<li class="colorchange"><h4>Overlay Color: </h4>
		<select name="overlay_color" id="overlay_color">			
			<option value="primary" <?php selected('primary',isset($data['overlay_color']) ? $data['overlay_color'] : ''); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',isset($data['overlay_color']) ? $data['overlay_color'] : ''); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',isset($data['overlay_color']) ? $data['overlay_color'] : ''); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',isset($data['overlay_color']) ? $data['overlay_color'] : ''); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',isset($data['overlay_color']) ? $data['overlay_color'] : ''); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if(isset($data['overlay_color']) && $data['overlay_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Overlay Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="overlay_custom_color" value="<?php echo isset($data['overlay_custom_color']) ? $data['overlay_custom_color'] : ''; ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li class="colorchange"><h4>Text Color: </h4>
		<select name="text_color" id="text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:none;">
			<li><h4>Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="text_custom_color" value="" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li class="rightwidget">
		<h4>Right side Widget</h4>
		<select name="right_side_widget" id="right_side_widget">
			<option value="">Select Widget</option>
			<option value="1">Phone</option>
			<option value="2">Call to Action</option>
		</select>
		<div class="clearfix"></div>
	</li> 
	<div id="phonewidget" class="common_setting" style="display:none;">
		<li class="colorchange"><h4>Phone Number Color: </h4>
			<select name="phone_number_color" id="phone_number_color">
				<option value="primary">Primary</option>
				<option value="secondary" selected="">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor" style="display:none;">
				<li><h4>Phone Number Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="phone_number_custom_color" value="" />
					<div class="clearfix"></div>
				</li>
			</ul>
		</li>
	</div>
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
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light" selected="">Global Light</option>
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