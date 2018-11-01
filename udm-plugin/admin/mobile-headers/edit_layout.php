<?php

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php');
include '../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];

}

$data=unserialize(get_option('mobile_header_layout_'.$layout));

?>

<form method="post" action="" enctype="multipart/form-data">
	<ul class="editmobilelayout_data">
	<?php 
		echo '<input type="hidden" name="mobile_header_layout_name" value="'.$data['mobile_header_layout_name'].'" readonly>';
	?>
	<li><h3>Hamber: </h3> <span><input type="radio" name="hamber_position" value="left" <?php checked('left',$data['hamber_position']); ?>> Left </span><span><input type="radio" name="hamber_position" value="right" <?php checked('right',$data['hamber_position']); ?>> Right </span></li>
	<li><h3>Navigation: </h3>
		<select name="navigation">
			<?php $menus=wp_get_nav_menus();
				foreach( $menus as $item ) {
			?>
				<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug, $data['navigation'] ); ?>> <?php echo $item->name;  ?></option>
			<?php
				}
			?>
		</select>
	</li>
	<li class="colorchange"><h3>Hamberger Color: </h3>
		<select name="hamberger_color" id="edithamberger_color">
			<option value="primary" <?php selected('primary',$data['hamberger_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['hamberger_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['hamberger_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['hamberger_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['hamberger_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['hamberger_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Hamberger Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="hamberger_custom_color" value="<?php echo $data['hamberger_custom_color']; ?>" />
			</li>
		</ul>
	</li>
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
				<input class="udm_color_picker" type="text" name="background_custom_color" value="<?php echo $data['background_custom_color']; ?>" />
			</li>
		</ul>
	</li>
	<li><h3>Logo Position: </h3> <span><input type="radio" name="logo_position" value="center" <?php checked('center',$data['logo_position']); ?>> Center </span><span><input type="radio" name="logo_position" value="opposite" <?php checked('opposite',$data['logo_position']); ?>> Opposite of hamberger</span></li>
	<li class="imageupload"><h3>Logo Url: </h3><input type="text" name="logo_url" id="editlogo_url" class="meta-image regular-text main-image" value="<?php echo $data['logo_url']; ?>"><input class="btn upload-image" my-attr="main-image" type="button" value="Upload Image" /></li>
	<li>
		<h3>Web App: </h3>
		<span class="switch">
			<input type="checkbox" name="webapp" class="switch" id="editwebapp" value="yes" <?php checked('yes',$data['webapp']); ?>>
			<label for="editwebapp">On/Off</label>
		</span>
	</li>
	<div id="editwebappdata" <?php if($data['webapp']=="yes"){ }else{ ?>style="display:none;"<?php } ?>>
	<h2>Web App Settings</h2>
	<li class="colorchange"><h3>Hamberger Color: </h3>
		<select name="whamberger_color" id="editwhamberger_color">
			<option value="primary" <?php selected('primary',$data['whamberger_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['whamberger_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['whamberger_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['whamberger_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['whamberger_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['whamberger_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Hamberger Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="whamberger_custom_color" value="<?php echo $data['whamberger_custom_color']; ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Background Color: </h3> 
		<select name="wbackground_color" id="editbackground_color">
			<option value="primary" <?php selected('primary',$data['wbackground_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['wbackground_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['wbackground_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['wbackground_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['wbackground_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['wbackground_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="wbackground_custom_color" value="<?php echo $data['wbackground_custom_color']; ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Text Color: </h3>
		<select name="wtext_color" id="edittext_color">
			<option value="primary" <?php selected('primary',$data['wtext_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['wtext_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['wtext_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['wtext_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['wtext_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['wtext_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="wtext_custom_color" value="<?php echo $data['wtext_custom_color']; ?>" />
			</li>
		</ul>
	</li>	
	<li class="imageupload"><h3>Profile Image: </h3><input type="text" name="profile_image" id="editprofile_image" class="meta-image regular-text main-image" value="<?php echo $data['profile_image']; ?>"><input class="btn upload-image" my-attr="main-image" type="button" value="Upload Image" /></li>
	<li><h3>Profile Image Type: </h3> <span><input type="radio" name="profile_image_type" value="circle" <?php checked('circle',$data['profile_image_type']); ?>> Circle </span><span><input type="radio" name="profile_image_type" value="square" <?php checked('square',$data['profile_image_type']); ?>> Square</span></li>
	<li><h3>Company Name: </h3> <input type="text" name="company_name" value="<?php echo $data['company_name']; ?>"></li>
	<li><h3>Text Under Company Name: </h3> <input type="text" name="text_under_company_name" value="<?php echo $data['text_under_company_name']; ?>"></li>
	<li>
		<h3>Star Rating: </h3>
		<span class="switch">
		<input type="checkbox" name="star_rating" class="switch" id="editstar_rating" value="yes" <?php checked('yes',$data['star_rating']); ?>>
		<label for="editstar_rating">On/Off</label>
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
				<input class="udm_color_picker" type="text" name="review_star_custom_color" value="<?php echo $data['review_star_custom_color']; ?>" />
			</li>
		</ul>
	</li>	
	<li><h3>Review Score: </h3> <input type="number" name="review_score" value="<?php echo $data['review_score']; ?>" step="0.1" min="0" max="5" ></li>
	<li><h3>Number of Reviews: </h3> <input type="number" name="number_of_reviews" value="<?php echo $data['number_of_reviews']; ?>"></li>
	</div>
	<li>
		<h3>Call Button: </h3>
		<span class="switch">
		<input type="checkbox" name="call_button" class="switch" id="editcall_button" value="yes" <?php checked('yes',$data['call_button']); ?>>
		<label for="editcall_button">On/Off</label>
		</span>
	</li>
	
	<li>
		<h3>Email Button: </h3>
		<span class="switch">
		<input type="checkbox" name="email_button" class="switch" id="editemail_button" value="yes" <?php checked('yes',$data['email_button']); ?>>
		<label for="editemail_button">On/Off</label>
		</span>
	</li>
	
	<li>
		<h3>Reviews Button: </h3>
		<span class="switch">
		<input type="checkbox" name="reviews_button" class="switch" id="editreviews_button" value="yes" <?php checked('yes',$data['reviews_button']); ?>>
		<label for="editreviews_button">On/Off</label>
		</span>
	</li>
	
	</div>
	
	</ul>
	
	
	<div class="uploaded_button"><p class="submit"><input type="submit" name="mobile_header_editlayout_submit" class="button button-primary" value="Save Layout"><input type="submit" name="mobile_header_deletelayout_submit" class="button button-primary" value="Delete Layout"></p> </div>

</form>


<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
		$('#editwebapp').change(function(){
			if($(this).prop("checked") == true)
			{
				$('#editwebappdata').show();
			}
			else
			{
				$('#editwebappdata').hide();
			}
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