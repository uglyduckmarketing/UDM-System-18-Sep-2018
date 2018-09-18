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

<ul id="layoutsettings" class="header_type_style collapse show basic_hero">
	<li class="imageupload"><h4>Background Type: </h4>
		<select name="background_type" id="background_type">
			<option value="color">Color</option>
			<option value="image">Image</option>
		</select>
	</li>
	<li id="type_image" class="imageupload" style="display:none;"><h4>Image Url: </h4>
		<input type="text" name="background_image" id="background_image" class="meta-image regular-text main-image" value="">
		<input class="btn upload-image" my-attr="main-image" type="button" value="Upload Image" />
	</li>
	<li id="type_color" class="colorchange"><h3>Background Color: </h3>
		<select name="background_color" id="background_color">
			<option value="primary" selected>Primary</option>
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
	<li><h3>Background Opacity(in %): </h3><input type="number" name="background_opacity" value="50" /></li>
	<li class="colorchange"><h3>Overlay Color: </h3>
		<select name="overlay_color" id="overlay_color">
			
			<option value="primary">Primary</option>
			<option value="secondary" >Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected="">Custom</option>
		</select>
		<ul class="customcolor">
			<li>
				<h3>Overlay Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="overlay_custom_color" value="rgb(0,0,0)" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Heading Color: </h3>
		<select name="heading_color" id="heading_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Heading Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="heading_custom_color" value="" />
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
	<li class="colorchange"><h3>Link Color: </h3>
		<select name="link_color" id="link_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Link Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="link_custom_color" value="" />
			</li>
		</ul>
	</li>
	 
	<li>
		<h3>Social Icons: </h3>
		<span class="switch">
			<input type="checkbox" name="social_icons" class="switch" id="social_icons" value="yes">
			<label for="social_icons">Hide/Show</label>
		</span>
	</li>
	
	<li>
		<h3>Apps Icons: </h3>
		<span class="switch">
			<input type="checkbox" name="apps_icons" class="switch" id="apps_icons" value="yes">
			<label for="apps_icons">Hide/Show</label>
		</span>
	</li>
	<div id="appsicondata" style="display:none;">
		<li><h3>Android App Url: </h3>
			<input type="text" name="android_app_url" value="">
		</li>
		<li><h3>Ios App Url: </h3>
			<input type="text" name="ios_app_url" value="">
		</li>
	</div>
	<li><h3>Title Text: </h3><input type="text" name="title_text" value="" /></li>
	<li class="colorchange"><h3>Title Text Color: </h3>
		<select name="title_text_color" id="title_text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected="">Custom</option>
		</select>
		<ul class="customcolor">
			<li>
				<h3>Title Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="title_text_custom_color" value="#fff" />
			</li>
		</ul>
	</li>
	<li><h3>Description: </h3><textarea name="desc_text"></textarea></li>
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