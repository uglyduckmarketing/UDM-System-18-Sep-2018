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
	
	
	
	<li class="colorchange"><h3>Background Color: </h3>
		<select name="background_color" id="background_color">
			<option value="primary" selected="">Primary</option>
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
	<li class="colorchange"><h3>Text Color: </h3>
		<select name="text_color" id="text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected="">Custom</option>
		</select>
		<ul class="customcolor">
			<li> 
				<h3>Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="text_custom_color" value="#fff" />
			</li>
		</ul>
	</li>	
	<li><h3>Profile Image: </h3><input type="text" name="profile_image" id="profile_image" class="meta-image regular-text main-image" value=""><input class="btn upload-image" my-attr="main-image" type="button" value="Upload Image" /></li>
	<li><h3>Profile Image Type: </h3> <span><input type="radio" name="profile_image_type" value="circle"> Circle </span><span><input type="radio" name="profile_image_type" value="square" > Square</span></li>
	<li><h3>Company Name: </h3> <input type="text" name="company_name" value=""></li>
	<li><h3>Text Under Company Name: </h3> <input type="text" name="text_under_company_name" value=""></li>
	<li>
		<h3>Star Rating: </h3>
		<span class="switch">
		<input type="checkbox" name="star_rating" class="switch" id="star_rating" value="yes">
		<label for="star_rating">Off/On</label>
		</span>
	</li>
	<div id="reviewdata" style="display:none;">
	<li class="colorchange"><h3>Review Star Color: </h3>
		<select name="review_star_color" id="review_star_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected="">Custom</option>
		</select>
		<ul class="customcolor">
			<li>
				<h3>Review Star Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="review_star_custom_color" value="#fff" />
			</li>
		</ul>
	</li>	
	<li><h3>Review Score: </h3> <input type="number" name="review_score" value="" step="0.5" min="0" max="5" ></li>
	<li><h3>Number of Reviews: </h3> <input type="number" name="number_of_reviews" value=""></li>
	</div>
	<li>
		<h3>Call Button: </h3>
		<span class="switch">
		<input type="checkbox" name="call_button" class="switch" id="call_button" value="yes" checked="">
		<label for="call_button">Off/On</label>
		</span>
	</li>
	
	<li>
		<h3>Email Button: </h3>
		<span class="switch">
		<input type="checkbox" name="email_button" class="switch" id="email_button" value="yes" checked="">
		<label for="email_button">Off/On</label>
		</span>
	</li>
	
	<li>
		<h3>Reviews Button: </h3>
		<span class="switch">
		<input type="checkbox" name="reviews_button" class="switch" id="reviews_button" value="yes">
		<label for="reviews_button">Off/On</label>
		</span>
	</li>
</ul>
<script>
	jQuery(document).ready(function($) {

		$('.udm_color_picker').wpColorPicker();  //Add color picker 
	
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
	
		$('#star_rating').change(function(){
			if($(this).prop("checked") == true)
			{
				$('#reviewdata').show();
			}
			else
			{
				$('#reviewdata').hide();
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