<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php'; 
?>
<!-- Theme Options JS -->
<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>

<ul id="layoutsettings" class="footer_cta_type_style collapse show fullwidth_cta common_setting custom_cta">
	<li class="imageupload"><h4>Background Type: </h4>
		<select name="background_type" id="background_type">
			<option value="">Select</option>
			<option value="color">Color</option>
			<option value="image">Image</option>
		</select>
		<div class="clearfix"></div>
	</li>
	<li id="type_image" class="imageupload image_upload" style="display:none;"><h4>Image Url: </h4>
		<input type="text" name="background_image" id="background_image" class="meta-image regular-text main-image custom_logo_input" value="">
		<input class="btn upload-image button button-primary" my-attr="main-image" type="button" value="Upload Image" />
	</li>
	<li id="type_color" class="colorchange" style="display:none;"><h4>Background Color: </h4>
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
	<li><h4>Background Image Opacity(in %): </h4>
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
	<li class="cus_txt_align"><h4>Text Alignment: </h4>
		<span><input type="radio" name="text_align" value="left" />Left</span><span><input type="radio" name="text_align" value="center"  checked=""/>Center</span><span><input type="radio" name="text_align" value="right" />Right</span>
		<div class="clearfix"></div>
	</li>
	<li><h4>Height: </h4>
		<input type="text" name="height" value="650px" />
		<div class="clearfix"></div>
	</li>
	<li><h4>Button: </h4>
		<span class="switch cus_bar_switch">
			<input type="checkbox" name="show_button" class="switch" id="show_button" value="yes">
			<label for="show_button">Off/On</label>
		</span>
		<div class="clearfix"></div>
	</li>
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
		$('#show_button').change(function(){
			if($(this).prop("checked") == true)
			{
				$('#callactionwidget').show();
			}
			else
			{
				$('#callactionwidget').hide();
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