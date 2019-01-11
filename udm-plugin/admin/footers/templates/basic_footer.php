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

<ul id="layoutsettings" class="header_type_style collapse show basic_hero common_setting">
	<li class="imageupload"><h4>Background Type: </h4>
		<select name="background_type" id="background_type">
			<option value="color">Color</option>
			<option value="image">Image</option>
		</select>
		<div class="clearfix"></div>
	</li>
	<li id="type_image" class="imageupload image_upload" style="display:none;"><h4>Image Url: </h4>
		<input type="text" name="background_image" id="background_image" class="meta-image regular-text main-image custom_logo_input" value="">
		<input class="btn upload-image button button-primary" my-attr="main-image" type="button" value="Upload Image" />
	</li>
	<li id="type_color" class="colorchange"><h4>Background Color: </h4>
		<select name="background_color" id="background_color">
			<option value="primary" selected>Primary</option>
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
	<li><h4>Background Opacity(in %): </h4>
		<input type="number" name="background_opacity" value="50" />
		<div class="clearfix"></div>
	</li>
	<li class="colorchange"><h4>Overlay Color: </h4>
		<select name="overlay_color" id="overlay_color">			
			<option value="primary">Primary</option>
			<option value="secondary" >Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected="">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor">
			<li><h4>Overlay Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="overlay_custom_color" value="rgb(0,0,0)" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li class="colorchange"><h4>Heading Color: </h4>
		<select name="heading_color" id="heading_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:none;">
			<li><h4>Heading Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="heading_custom_color" value="" />
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
	<li class="colorchange"><h4>Link Color: </h4>
		<select name="link_color" id="link_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:none;">
			<li><h4>Link Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="link_custom_color" value="" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>	 
	<li><h4>Social Icons: </h4>
		<span class="switch cus_bar_switch">
			<input type="checkbox" name="social_icons" class="switch" id="social_icons" value="yes">
			<label for="social_icons">Hide/Show</label>
		</span>
		<div class="clearfix"></div>
	</li>	
	<li><h4>Apps Icons: </h4>
		<span class="switch cus_bar_switch">
			<input type="checkbox" name="apps_icons" class="switch" id="apps_icons" value="yes">
			<label for="apps_icons">Hide/Show</label>
		</span>
		<div class="clearfix"></div>
	</li> 
	<div id="appsicondata" class="common_setting" style="display:none;">
		<li><h4>Android App Url: </h4>
			<input type="text" name="android_app_url" value="" />
			<div class="clearfix"></div>
		</li>
		<li><h4>Ios App Url: </h4>
			<input type="text" name="ios_app_url" value="" />
			<div class="clearfix"></div>
		</li>
	</div>
	<li><h4>Title Text: </h4>
		<input type="text" name="title_text" value="" />
		<div class="clearfix"></div>
	</li>
	<li class="colorchange"><h4>Title Text Color: </h4>
		<select name="title_text_color" id="title_text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected="">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor">
			<li><h4>Title Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="title_text_custom_color" value="#fff" />
				<div class="clearfix"></div>
			</li>
		</ul> 
	</li>
	<li><h4>Description: </h4>
		<textarea name="desc_text"></textarea>
		<div class="clearfix"></div>
	</li>

<!-- ................................................. -->

 <!-- <span class="switch cus_bar_switch">
	<input type="checkbox" name="social_icons" class="switch" id="editsocial_icons" value="yes" <?php checked("yes",isset($data['social_icons']) ? $data['social_icons'] : ''); ?>>
			<label for="editsocial_icons">Hide/Show </label>
		</span> -->
<li><h4>Footer Display: </h4>
		<span class="switch cus_bar_switch">
			<input type="checkbox" name="footer_display" class="switch" id="footer_display" value="yes">
			<label for="footer_display">Hide/Show</label>
		</span>
		<div class="clearfix"></div>
	</li>	
<!-- ................................................. -->

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
	<div class="clearfix"></div>
</ul>
<script>
	jQuery(document).ready(function($) {
		$('.udm_color_picker').wpColorPicker();  //Add color picker 
		$('#apps_icons').change(function(){
			if($(this).prop("checked") == true)
			{
				$('#appsicondata').show();
			}
			else
			{
				$('#appsicondata').hide();
			}
		});
		
		$('#background_type').change(function(){
			if($(this).val() == "image")
			{
				$('#type_image').show();
				$('#type_color').hide();
			}
			else
			{
				$('#type_color').show();
				$('#type_image').hide();
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