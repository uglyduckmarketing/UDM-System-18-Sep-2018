<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('mobile_header_layout_'.$layout));
?>
<!-- Theme Options JS -->
<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>

<ul id="editlayoutsettings" class="header_type_style collapse show basic_hero">
	
	<li class="colorchange"><h3>Background Color: </h3> 
		<select name="background_color" id="editbackground_color">
			<option value="primary" <?php selected('primary',$data['background_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['background_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['background_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['background_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['background_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="background_custom_color" value="<?php echo esc_attr($data['background_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Text Color: </h3>
		<select name="text_color" id="edittext_color">
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
	<li><h3>Profile Image: </h3><input type="text" name="profile_image" id="editprofile_image" class="meta-image regular-text main-image" value="<?php echo esc_attr($data['profile_image']); ?>"><input class="btn upload-image" my-attr="main-image" type="button" value="Upload Image" /></li>
	<li><h3>Profile Image Type: </h3> <span><input type="radio" name="profile_image_type" value="circle" <?php checked('circle',$data['profile_image_type']); ?>> Circle </span><span><input type="radio" name="profile_image_type" value="square" <?php checked('square',$data['profile_image_type']); ?>> Square</span></li>
	<li><h3>Company Name: </h3> <input type="text" name="company_name" value="<?php echo esc_attr($data['company_name']); ?>"></li>
	<li><h3>Text Under Company Name: </h3> <input type="text" name="text_under_company_name" value="<?php echo esc_attr($data['text_under_company_name']); ?>"></li>
	<li>
		<h3>Star Rating: </h3>
		<span class="switch">
		<input type="checkbox" name="star_rating" class="switch" id="editstar_rating" value="yes" <?php checked('yes',$data['star_rating']); ?>>
		<label for="editstar_rating">Off/On</label>
		</span>
	</li>
	<div id="editreviewdata" <?php if($data['star_rating']=="yes"){}else{ ?>style="display:none;"<?php } ?>>
	<li class="colorchange"><h3>Review Star Color: </h3>
		<select name="review_star_color" id="editreview_star_color">
			<option value="primary" <?php selected('primary',$data['review_star_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['review_star_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['review_star_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['review_star_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['review_star_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor">
			<li>
				<h3>Review Star Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="review_star_custom_color" value="<?php echo esc_attr($data['review_star_custom_color']); ?>" />
			</li>
		</ul>
	</li>	
	<li><h3>Review Score: </h3> <input type="number" name="review_score" value="<?php echo esc_attr($data['review_score']); ?>" step="0.5" min="0" max="5" ></li>
	<li><h3>Number of Reviews: </h3> <input type="number" name="number_of_reviews" value="<?php echo esc_attr($data['number_of_reviews']); ?>"></li>
	</div>
	<li>
		<h3>Call Button: </h3>
		<span class="switch">
		<input type="checkbox" name="call_button" class="switch" id="editcall_button" value="yes" <?php checked('yes',$data['call_button']); ?>>
		<label for="editcall_button">Off/On</label>
		</span>
	</li>
	
	<li>
		<h3>Email Button: </h3>
		<span class="switch">
		<input type="checkbox" name="email_button" class="switch" id="editemail_button" value="yes" <?php checked('yes',$data['email_button']); ?>>
		<label for="editemail_button">Off/On</label>
		</span>
	</li>
	
	<li>
		<h3>Reviews Button: </h3>
		<span class="switch">
		<input type="checkbox" name="reviews_button" class="switch" id="editreviews_button" value="yes" <?php checked('yes',$data['reviews_button']); ?>>
		<label for="editreviews_button">Off/On</label>
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
	
		$('#editstar_rating').change(function(){
			if($(this).prop("checked") == true)
			{
				$('#editreviewdata').show();
			}
			else
			{
				$('#editreviewdata').hide();
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