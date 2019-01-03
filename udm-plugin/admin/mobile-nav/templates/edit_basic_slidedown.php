<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('mobile_nav_layout_'.$layout));

?>
<!-- Theme Options JS -->
<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>

<ul id="editlayoutsettings" class="header_type_style collapse show basic_hero common_setting">
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
	<li class="colorchange"><h4>Submenu Background Color: </h4>
		<select name="submenu_background_color" id="submenu_background_color">
		<option value="primary" <?php selected('primary',$data['submenu_background_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['submenu_background_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['submenu_background_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['submenu_background_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['submenu_background_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['submenu_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Background Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="submenu_background_custom_color" value="<?php echo esc_attr($data['submenu_background_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li class="colorchange"><h4>Submenu Text Color: </h4>
		<select name="submenu_text_color" id="submenu_text_color">
			<option value="primary" <?php selected('primary',$data['submenu_text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['submenu_text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['submenu_text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['submenu_text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['submenu_text_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['submenu_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="submenu_text_custom_color" value="<?php echo esc_attr($data['submenu_text_custom_color']); ?>" />
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