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

<ul id="editlayoutsettings" class="header_type_style collapse show basic_hero">
	<li class="colorchange"><h3>Container Background Color: </h3>
		<select name="container_background_color" id="container_background_color">
			<option value="primary" <?php selected('primary',$data['container_background_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['container_background_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['container_background_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['container_background_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['container_background_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['container_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Container Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="container_background_custom_color" value="<?php echo esc_attr($data['container_background_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Background Color: </h3>
		<select name="nav_background_color" id="nav_background_color">
			<option value="primary" <?php selected('primary',$data['nav_background_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['nav_background_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['nav_background_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['nav_background_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['nav_background_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['nav_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="nav_background_custom_color" value="<?php echo esc_attr($data['nav_background_custom_color']); ?>" />
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
	<li class="colorchange"><h3>Submenu header Color: </h3>
		<select name="submenu_header_color" id="submenu_header_color">
		<option value="primary" <?php selected('primary',$data['submenu_header_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['submenu_header_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['submenu_header_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['submenu_header_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['submenu_header_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['submenu_header_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Submenu Header Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="submenu_header_custom_color" value="<?php echo esc_attr($data['submenu_header_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Submenu Header Text Color: </h3>
		<select name="submenu_header_text_color" id="submenu_header_text_color">
			<option value="primary" <?php selected('primary',$data['submenu_header_text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['submenu_header_text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['submenu_header_text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['submenu_header_text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['submenu_header_text_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['submenu_header_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="submenu_header_text_custom_color" value="<?php echo esc_attr($data['submenu_header_text_custom_color']); ?>" />
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