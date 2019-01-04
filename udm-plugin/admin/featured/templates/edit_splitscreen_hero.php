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

<ul id="editlayoutsettings" class="hero_type_style collapse show splitscreen common_setting">
	<li class="cus_txt_align"><h4>Image Type: </h4>
		<span><input type="radio" name="image_type" value="full" <?php checked('full',$data['image_type']); ?> />Fullwidth</span><span><input type="radio" name="image_type" value="contained" <?php checked('contained',$data['image_type']); ?> />Contained</span>
		<div class="clearfix"></div>
	</li>
	<li class="cus_txt_align"><h4>Content Side: </h4>
		<span><input type="radio" name="content_side" value="left" <?php checked('left',$data['content_side']); ?> />Left</span><span><input type="radio" name="content_side" value="right" <?php checked('right',$data['content_side']); ?> />Right</span>
		<div class="clearfix"></div>
	</li>
	<li class="colorchange"><h4>Content Background: </h4>
		<select name="content_background" id="content_background">
			<option value="primary" <?php selected('primary',$data['content_background']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['content_background']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['content_background']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['content_background']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['content_background']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['content_background']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Background Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="content_custom_background" value="<?php echo esc_attr($data['content_custom_background']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
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
	<li class="colorchange"><h4>Header Text Color: </h4>
		<select name="header_text_color" id="header_text_color">
			<option value="primary" <?php selected('primary',$data['header_text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['header_text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['header_text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['header_text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['header_text_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['header_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Header Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="header_text_custom_color" value="<?php echo esc_attr($data['header_text_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>	
	<li class="colorchange"><h4>Eybrow Text Color: </h4>
		<select name="eyebrow_text_color" id="eyebrow_text_color">
			<option value="primary" <?php selected('primary',$data['eyebrow_text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['eyebrow_text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['eyebrow_text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['eyebrow_text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['eyebrow_text_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['eyebrow_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Eybrow Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="eyebrow_text_custom_color" value="<?php echo esc_attr($data['eyebrow_text_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>	
	<li class="colorchange"><h4>Description Text Color: </h4>
		<select name="desc_text_color" id="desc_text_color">
			<option value="primary" <?php selected('primary',$data['desc_text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['desc_text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['desc_text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['desc_text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['desc_text_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['desc_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Description Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="desc_text_custom_color" value="<?php echo esc_attr($data['desc_text_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li><h4>Height: </h4>
		<input type="text" name="height" value="<?php echo esc_attr($data['height']); ?>" />
		<div class="clearfix"></div>
	</li>
	<li><h4>Button:</h4>
		<span class="switch cus_bar_switch">
			<input type="checkbox" name="show_button" class="switch" id="editshow_button" value="yes" <?php checked('yes',isset($data['show_button']) ? $data['show_button'] : ''); ?>>
			<label for="editshow_button">Off/On</label>
		</span>
		<div class="clearfix"></div>
	</li>
	<div id="editcallactionwidget" class="common_setting" <?php if(isset($data['show_button']) && $data['show_button']!="yes"){ ?> style="display:none;" <?php } ?>>
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
				<option value="">Default Color</option>
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
	
		$('#editshow_button').change(function(){ 
			if($(this).prop("checked") == true)
			{
				$('#editcallactionwidget').show();
			}
			else
			{
				$('#editcallactionwidget').hide();
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