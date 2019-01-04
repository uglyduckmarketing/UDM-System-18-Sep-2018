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
<ul id="editlayoutsettings" class="hero_type_style collapse show basic_hero common_setting">
	<li class="colorchange"><h4>Background Color: </h4>
		<select name="background_color" id="background_color">			
			<option value="primary" <?php selected('primary',$data['background_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['background_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['background_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['background_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['background_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Background Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="background_custom_color" value="<?php echo esc_attr($data['background_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li><h4>Background Image Opacity(in %): </h4>
		<input type="number" name="background_opacity" value="<?php echo esc_attr($data['background_opacity']); ?>" />
		<div class="clearfix"></div>
	</li>
	<li class="colorchange"><h4>Overlay Color: </h4>
		<select name="overlay_color" id="overlay_color">			
			<option value="primary" <?php selected('primary',$data['overlay_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['overlay_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['overlay_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['overlay_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['overlay_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['overlay_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Overlay Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="overlay_custom_color" value="<?php echo esc_attr($data['overlay_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>	
	<li class="colorchange"><h4>Text Color: </h4>
		<select name="text_color" id="text_color">
			<option value="primary" <?php selected('primary',$data['text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['text_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="text_custom_color" value="<?php echo esc_attr($data['text_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>	
	<li class="rightwidget"> 
		<h4>Right side Widget</h4>
		<select name="right_side_widget" id="editright_side_widget">
			<option value="">Select Widget</option>
			<option value="1" <?php selected("1",$data['right_side_widget']); ?>>Phone</option>
			<option value="2" <?php selected("2",$data['right_side_widget']); ?>>Call to Action</option>
		</select>
		<div class="clearfix"></div>
	</li>
	<div id="editphonewidget" class="common_setting" <?php if($data['right_side_widget']=="1"){}else{ ?> style="display:none;" <?php } ?>>
		<li class="colorchange"><h4>Phone Number Color: </h4>
			<select name="phone_number_color" id="phone_number_color">
				<option value="primary" <?php selected('primary',$data['phone_number_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['phone_number_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['phone_number_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['phone_number_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['phone_number_color']); ?>>Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor" <?php if($data['phone_number_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li><h4>Phone Number Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="phone_number_custom_color" value="<?php echo esc_attr($data['phone_number_custom_color']); ?>" />
					<div class="clearfix"></div>
				</li>
			</ul>
		</li>
	</div>
	<div id="editcallactionwidget" class="common_setting" <?php if($data['right_side_widget']=="2"){}else{ ?> style="display:none;" <?php } ?>>
		<li class="colorchange"><h4>Button Color: </h4>
			<select name="button_color" id="button_color">				
				<option value="primary" <?php selected('primary',$data['button_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['button_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['button_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['button_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['button_color']); ?>>Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor" <?php if($data['button_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li><h4>Button Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="button_custom_color" value="<?php echo esc_attr($data['button_custom_color']); ?>" />
					<div class="clearfix"></div>
				</li>
			</ul>
		</li>
		<li class="colorchange"><h4>Button Text Color: </h4>
			<select name="button_text_color" id="button_text_color">
				<option value="primary" <?php selected('primary',$data['button_text_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['button_text_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['button_text_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['button_text_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['button_text_color']); ?>>Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor"  <?php if($data['button_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li><h4>Button Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="button_text_custom_color" value="<?php echo esc_attr($data['button_text_custom_color']); ?>" />
					<div class="clearfix"></div>
				</li>
			</ul>
		</li>
		<li><h4>Button Link: </h4>
			<input type="text" name="button_link" value="<?php echo esc_attr($data['button_link']); ?>" />
			<div class="clearfix"></div>
		</li>
		<li><h4>Button Text: </h4>
			<input type="text" name="button_text" value="<?php echo esc_attr($data['button_text']); ?>" />
			<div class="clearfix"></div>
		</li>
		<div class="clearfix"></div>
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