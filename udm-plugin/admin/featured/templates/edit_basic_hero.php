<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('featured_layout_'.$layout));
?>
<!-- Theme Options JS -->
<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>
<ul id="editlayoutsettings" class="hero_type_style collapse show basic_hero">
	<li class="colorchange"><h3>Background Color: </h3>
		<select name="background_color" id="background_color">
			
			<option value="primary" <?php selected('primary',$data['background_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['background_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['background_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['background_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['background_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="background_custom_color" value="<?php echo esc_attr($data['background_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li><h3>Background Image Opacity(in %): </h3><input type="number" name="background_opacity" value="<?php echo esc_attr($data['background_opacity']); ?>" /></li>
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
				<input class="udm_color_picker" type="text" name="overlay_custom_color" value="<?php echo esc_attr($data['overlay_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	
	<li class="colorchange"><h3>Text Color: </h3>
		<select name="text_color" id="text_color">
			
			<option value="primary" <?php selected('primary',$data['text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['text_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="text_custom_color" value="<?php echo esc_attr($data['text_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	
	<li class="rightwidget">
		<h3>Right side Widget</h3>
		<select name="right_side_widget" id="editright_side_widget">
			<option value="">Select Widget</option>
			<option value="1" <?php selected("1",$data['right_side_widget']); ?>>Phone</option>
			<option value="2" <?php selected("2",$data['right_side_widget']); ?>>Call to Action</option>
		</select>
	</li>
	<div id="editphonewidget" <?php if($data['right_side_widget']=="1"){}else{ ?> style="display:none;" <?php } ?>>
		<li class="colorchange"><h3>Phone Number Color: </h3>
			<select name="phone_number_color" id="phone_number_color">
				
				<option value="primary" <?php selected('primary',$data['phone_number_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['phone_number_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['phone_number_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['phone_number_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['phone_number_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['phone_number_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Phone Number Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="phone_number_custom_color" value="<?php echo esc_attr($data['phone_number_custom_color']); ?>" />
				</li>
			</ul>
		</li>
	</div>
	<div id="editcallactionwidget" <?php if($data['right_side_widget']=="2"){}else{ ?> style="display:none;" <?php } ?>>
		<li class="colorchange"><h3>Button Color: </h3>
			<select name="button_color" id="button_color">
				
				<option value="primary" <?php selected('primary',$data['button_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['button_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['button_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['button_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['button_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['button_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Button Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="button_custom_color" value="<?php echo esc_attr($data['button_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Button Text Color: </h3>
			<select name="button_text_color" id="button_text_color">
				
				<option value="primary" <?php selected('primary',$data['button_text_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['button_text_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['button_text_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['button_text_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['button_text_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor"  <?php if($data['button_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Button Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="button_text_custom_color" value="<?php echo esc_attr($data['button_text_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li><h3>Button Link: </h3><input type="text" name="button_link" value="<?php echo esc_attr($data['button_link']); ?>" /></li>
		<li><h3>Button Text: </h3><input type="text" name="button_text" value="<?php echo esc_attr($data['button_text']); ?>" /></li>
	</div>
</ul>
<script>
	jQuery(document).ready(function($) {

		$('.udm_color_picker').wpColorPicker();  //Add color picker 
	
		$('#editright_side_widget').change(function(){
			if($(this).val() == "1")
			{
				$('#editcallactionwidget').hide();
				$('#editphonewidget').show();
			}
			else if($(this).val() == "2")
			{
				$('#editcallactionwidget').show();
				$('#editphonewidget').hide();
			}
			else
			{
				$('#editcallactionwidget').hide();
				$('#editphonewidget').hide();
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