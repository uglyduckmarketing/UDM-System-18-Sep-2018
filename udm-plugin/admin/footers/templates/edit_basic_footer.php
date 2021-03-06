<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('footer_layout_'.$layout));
?>
<!-- Theme Options JS -->
<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>
<ul id="editlayoutsettings" class="header_type_style collapse show basic_hero common_setting">
	<li class="imageupload"><h4>Background Type: </h4>
		<select name="background_type" id="editbackground_type">
			<option value="color" <?php selected('color',$data['background_type']); ?>>Color</option>
			<option value="image" <?php selected('image',$data['background_type']); ?>>Image</option>
		</select>
		<div class="clearfix"></div>
	</li>
	<li id="edittype_image" class="imageupload image_upload" <?php if($data['background_type']=='image'){ }else{ ?> style="display:none;" <?php } ?>><h4>Image Url: </h4>
		<input type="text" name="background_image" id="editbackground_image" class="meta-image regular-text main-image custom_logo_input" value="<?php echo esc_attr($data['background_image']); ?>">
		<input class="btn upload-image button button-primary" my-attr="main-image" type="button" value="Upload Image" />
	</li>
	<li id="edittype_color" class="colorchange" <?php if($data['background_type']=='color'){ }else{ ?> style="display:none;" <?php } ?>><h4>Background Color: </h4>
		<select name="background_color" id="editbackground_color">
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
	<li><h4>Background Opacity(in %): </h4>
		<input type="number" name="background_opacity" value="<?php echo esc_attr($data['background_opacity']); ?>" />
		<div class="clearfix"></div>
	</li>
	<li class="colorchange"><h4>Overlay Color: </h4>
		<select name="overlay_color" id="editoverlay_color">			
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
	<li class="colorchange"><h4>Heading Color: </h4>
		<select name="heading_color" id="heading_color">			
			<option value="primary" <?php selected('primary',$data['heading_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['heading_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['heading_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['heading_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['heading_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['heading_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Heading Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="heading_custom_color" value="<?php echo esc_attr($data['heading_custom_color']); ?>" />
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
	<li class="colorchange"><h4>Link Color: </h4>
		<select name="link_color" id="link_color">			
			<option value="primary" <?php selected('primary',$data['link_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['link_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['link_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['link_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['link_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['link_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Link Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="link_custom_color" value="<?php echo esc_attr($data['link_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li><h4>Social Icons: </h4>
		<span class="switch cus_bar_switch">
			<input type="checkbox" name="social_icons" class="switch" id="editsocial_icons" value="yes" <?php checked("yes",isset($data['social_icons']) ? $data['social_icons'] : ''); ?>>
			<label for="editsocial_icons">Hide/Show </label>
		</span>
		<div class="clearfix"></div>
	</li>
	<li><h4>Apps Icons: </h4> 
		<span class="switch cus_bar_switch">
			<input type="checkbox" name="apps_icons" class="switch" id="editapps_icons" value="yes" <?php checked("yes",isset($data['apps_icons']) ? $data['apps_icons'] : ''); ?>>
			<label for="editapps_icons">Hide/Show</label>
		</span>
		<div class="clearfix"></div>
	</li>
	<div id="editappsicondata" class="common_setting" <?php if(isset($data['apps_icons']) && $data['apps_icons']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
		<li><h4>Android App Url: </h4>
			<input type="text" name="android_app_url" value="<?php echo esc_attr($data['android_app_url']); ?>">
			<div class="clearfix"></div>
		</li>
		<li><h4>Ios App Url: </h4>
			<input type="text" name="ios_app_url" value="<?php echo esc_attr($data['ios_app_url']); ?>">
			<div class="clearfix"></div>
		</li>
	</div>	
	<li><h4>Title Text: </h4>
		<input type="text" name="title_text" value="<?php echo esc_attr($data['title_text']); ?>" />
		<div class="clearfix"></div>
	</li>
	<li class="colorchange"><h4>Title Text Color: </h4>
		<select name="title_text_color" id="edittitle_text_color">
			<option value="primary" <?php selected('primary',$data['title_text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['title_text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['title_text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['title_text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['title_text_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" <?php if($data['title_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Title Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="title_text_custom_color" value="<?php echo esc_attr($data['title_text_custom_color']); ?>" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>	
	<li><h4>Description: </h4>
		<textarea name="desc_text"><?php echo esc_attr($data['desc_text']); ?></textarea>
		<div class="clearfix"></div>

<!-- ................................................. -->

<!--<li><h4>Footer Display: </h4>
		<span class="switch cus_bar_switch">
			<input type="checkbox" name="footer_display" <?php //checked("yes",isset($data['footer_display']) ? $data['footer_display'] : ''); ?> class="switch" id="footer_display" value="yes">
			<label for="footer_display">Hide/Show</label>
		</span>
		<div class="clearfix"></div>
	</li>-->
<!-- ................................................. -->

	</li>
	<li class="colorchange"><h4>Description Text Color: </h4>
		<select name="desc_text_color" id="editdesc_text_color">
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
	<div class="clearfix"></div>
</ul>
<script>
	jQuery(document).ready(function($) {
		$('.udm_color_picker').wpColorPicker();  //Add color picker 
		$('#editapps_icons').change(function(){
			if($(this).prop("checked") == true)
			{
				$('#editappsicondata').show();
			}
			else
			{
				$('#editappsicondata').hide();
			}
		});
		
		$('#editbackground_type').change(function(){
			if($(this).val() == "image")
			{
				$('#edittype_image').show();
				$('#edittype_color').hide();
			}
			else
			{
				$('#edittype_color').show();
				$('#edittype_image').hide();
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
		
		$('.upload-image').click(function() {
		
				var mediaUploader;
				var myvar = $(this).attr('my-attr');	
				//e.preventDefault();
				// If the uploader object has already been created, reopen the dialog
				  if (mediaUploader) {
				  mediaUploader.open();
				  return;
				}
	    
				// Extend the wp.media object
				mediaUploader = wp.media.frames.file_frame = wp.media({
				  title: 'Choose Image',
				  button: {
				  text: 'Choose Image'
				}, multiple: false });
				
		
				// When a file is selected, grab the URL and set it as the text field's value
				mediaUploader.on('select', function() {
				  attachment = mediaUploader.state().get('selection').first().toJSON();
				  
				  $('.'+myvar).val(attachment.url);
				});
				// Open the uploader dialog
				mediaUploader.open();
		}); 
		
	  }); 																	
</script>