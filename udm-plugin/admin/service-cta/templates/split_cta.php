<?php
	define('WP_USE_THEMES', true);
	
	/** Loads the WordPress Environment and Template */
	//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
		include '../../../../../../../wp-load.php'; 
?>
<!-- Theme Options JS -->

<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#textsettings">Text Side Settings</a>
</h2>

<ul id="textsettings" class="footer_cta_type_style collapse show split_cta common_setting custom_cta">
	<li><h4>Title Text</h4>
		<input type="text" name="title_text" value="">
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
	<li><h4>Description Text</h4>
		<textarea name="description_text"></textarea>
		<div class="clearfix"></div>
	</li>
	<li class="colorchange"><h4>Description Text Color: </h4>
		<select name="description_text_color" id="description_text_color">
			<option value="primary" >Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected="" >Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:none;">
			<li><h4>Description Text Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="description_text_custom_color" value="" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li><h4>Button: </h4>
		<span class="switch cus_bar_switch">
			<input type="checkbox" name="show_button" class="switch" id="show_button" value="yes">
			<label for="show_button">Off/On</label>
		</span>
		<div class="clearfix"></div>
	</li>
	<div id="buttondata" class="common_setting" style="display:none;">
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
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom" selected="">Custom</option>
			</select> 
			<div class="clearfix"></div>
			<ul class="customcolor">
				<li><h4>Button Text Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="button_text_custom_color" value="#fff" />
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
	</div>
	
	<li class="colorchange"><h4>Background Color: </h4>
		<select name="background_color" id="background_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark" selected="">Global Dark</option>
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
</ul>

<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#elementsettings">Element Side Settings</a>
</h2>
<ul id="elementsettings" class="footer_cta_type_style collapse show split_cta common_setting custom_cta">
	<li><h4>Height: </h4>
		<input type="text" name="height" value="650px" />
		<div class="clearfix"></div>
	</li>
	<li class="colorchange"><h4>Background Color: </h4>
		<select name="element_background_color" id="element_background_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark" selected="">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:none;">
			<li><h4>Background Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="element_background_custom_color" value="" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li><h4>Background Image Opacity(in %): </h4>
		<input type="number" name="background_opacity" value="80" />
		<div class="clearfix"></div>
	</li>
	<li class="colorchange"><h4>Overlay Color: </h4>
		<select name="overlay_color" id="overlay_color">			
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<div class="clearfix"></div>
		<ul class="customcolor" style="display:none;">
			<li><h4>Overlay Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="overlay_custom_color" value="" />
				<div class="clearfix"></div>
			</li>
		</ul>
	</li>
	<li><h4>Element: </h4>
		<select name="element_type" id="element_type">
			<option value="">Select</option>
			<option value="image">Image</option>
			<option value="video">Video</option>
			<option value="form">Form</option>
			<option value="map">Map</option>
		</select>
		<div class="clearfix"></div>
	</li>
	<div id="imagedata" class="common_setting" style="display:none;">
		<li class="imageupload image_upload"><h4>Image Url: </h4>
			<input type="text" name="element_image_url" id="element_image_url" class="meta-image regular-text main-image custom_logo_input" value="">
			<input class="btn upload-image button button-primary" my-attr="main-image" type="button" value="Upload Image" />
		</li>
	</div>
	<div id="videodata" class="common_setting" style="display:none;">
		<li><h4>Video Link: <span>Enter youtube/vimeo link.</span> </h4>
			<input type="text" name="element_video_link" id="element_video_link" value="" />
			<div class="clearfix"></div>
		</li>		
		<li class="imageupload image_upload"><h4>Video Poster Url: </h4>
			<input type="text" name="element_video_poster_url" id="element_video_poster_url" class="meta-image regular-text video-image custom_logo_input" value="">
			<input class="btn upload-image button button-primary" my-attr="video-image" type="button" value="Upload Image" />
		</li>		
		<li class="colorchange"><h4>Video Play Icon Color: </h4>
			<select name="video_play_icon_color" id="video_play_icon_color">
				<option value="primary">Primary</option>
				<option value="secondary" selected="">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor" style="display:none;">
				<li><h4>Video Play Icon Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="video_play_icon_custom_color" value="" />
					<div class="clearfix"></div>
				</li>
			</ul>
		</li>
	</div>
	<div id="formdata" class="common_setting" style="display:none;">
		<li><h4>Form Shortcode: </h4>
			<input type="text" name="element_form_shortcode" id="element_form_shortcode" value="" />
			<div class="clearfix"></div>
		</li>
	</div>
	<div id="mapdata" class="common_setting" style="display:none;">		
		<li><h4>Map latitude: </h4>
			<input type="text" name="element_map_lat" id="element_map_lat" value="" />
			<div class="clearfix"></div>
		</li>
		<li><h4>Map longitude: </h4>
			<input type="text" name="element_map_long" id="element_map_long" value="" />
			<div class="clearfix"></div>
		</li>		
		<li><h4>Google Maps Api Key: </h4>
			<input type="text" name="element_map_api_key" id="element_map_api_key" value="">
		</li>
		<li class="colorchange"><h4>Map Color: </h4>
			<select name="map_color" id="map_color">
				<option value="primary">Primary</option>
				<option value="secondary" selected="">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor" style="display:none;">
				<li><h4>Map Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="map_custom_color" value="" />
					<div class="clearfix"></div>
				</li>
			</ul> 
		</li>
		<div class="clearfix"></div>		
	</div>
	<div class="clearfix"></div>
</ul>
<script>
	jQuery(document).ready(function($) {

		$('.udm_color_picker').wpColorPicker();  //Add color picker 
		$('#element_type').change(function(){
			if($(this).val() == "image")
			{
				$('#imagedata').show();
				$('#videodata').hide();
				$('#formdata').hide();
				$('#mapdata').hide();
				
			}
			else if($(this).val() == "video")
			{
				$('#imagedata').hide();
				$('#videodata').show();
				$('#formdata').hide();
				$('#mapdata').hide();
			}
			else if($(this).val() == "form")
			{
				$('#imagedata').hide();
				$('#videodata').hide();
				$('#formdata').show();
				$('#mapdata').hide();
			}
			else if($(this).val() == "map")
			{
				$('#imagedata').hide();
				$('#videodata').hide();
				$('#formdata').hide();
				$('#mapdata').show();
			}
			else
			{
				$('#imagedata').hide();
				$('#videodata').hide();
				$('#formdata').hide();
				$('#mapdata').hide();
			}
		});
		$('#show_button').change(function(){
			if($(this).prop('checked')==true)
			{
				$('#buttondata').show();
			}
			else
			{
				$('#buttondata').hide();
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