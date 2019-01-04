<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
$layout = '';
if(isset($_POST['layout']))
{
	$layout=$_POST['layout']; 
}
$data=unserialize(get_option('mobile_header_layout_'.$layout));
?>
<form method="post" action="" enctype="multipart/form-data">
	<ul class="common_setting"> 
		<li>  
			<ul class="inner">
				<li><h4>Enter Layout Name: </h4>
					<input type="text" name="mobile_header_layout_name" value="" required />
					<div class="clearfix"></div>
				</li>	
				<li class="cus_txt_align"><h4>Hamber: </h4>
					<span><input type="radio" name="hamber_position" value="left"> Left</span><span><input type="radio" name="hamber_position" value="right"> Right</span>
					<div class="clearfix"></div>	
				</li>
				<li><h4>Navigation: </h4>
					<select name="navigation">
						<?php $menus=wp_get_nav_menus();
							foreach( $menus as $item ) {
						?>
							<option value="<?php echo esc_attr($item->slug);  ?>" <?php selected($item->slug, $data['navigation'] ); ?>> <?php echo esc_attr($item->name);  ?></option>
						<?php
							}
						?>
					</select>
					<div class="clearfix"></div>
				</li>					
				<li class="colorchange"><h4>Hamberger Color: </h4>
					<select name="hamberger_color" id="hamberger_color">
						<option value="primary">Primary</option>
						<option value="secondary">Secondary</option>
						<option value="global_light">Global Light</option>
						<option value="global_dark" selected="">Global Dark</option>
						<option value="custom">Custom</option>
					</select>
					<div class="clearfix"></div>
					<ul class="customcolor" style="display:none;">
						<li><h4>Hamberger Custom Color: </h4>
							<input class="udm_color_picker" type="text" name="hamberger_custom_color" value="" />
							<div class="clearfix"></div>
						</li>
					</ul>
				</li>
				<li class="colorchange"><h4>Background Color: </h4>
					<select name="background_color" id="background_color">
						<option value="primary">Primary</option>
						<option value="secondary">Secondary</option>
						<option value="global_light">Global Light</option>
						<option value="global_dark">Global Dark</option>
						<option value="custom" selected="">Custom</option>
					</select>
					<div class="clearfix"></div>
					<ul class="customcolor">
						<li><h4>Background Custom Color: </h4>
							<input class="udm_color_picker" type="text" name="background_custom_color" value="#fff" />
							<div class="clearfix"></div>
						</li>
					</ul>
				</li>	
				<li class="cus_txt_align"><h4>Logo Position: </h4>
					<span><input type="radio" name="logo_position" value="center"> Center </span><span><input type="radio" name="logo_position" value="opposite"> Opposite of hamberger</span>
					<div class="clearfix"></div>
				</li>
				<li class="imageupload image_upload"><h4>Logo Url: </h4><input type="text" name="logo_url" id="logo_url" class="meta-image regular-text main-image custom_logo_input" value=""><input class="btn upload-image button button-primary" my-attr="main-image" type="button" value="Upload Image" />
				</li>					
				<li><h4>Web App: </h4>
					<span class="switch cus_bar_switch">
					<input type="checkbox" name="webapp" class="switch" id="webapp" value="yes">
					<label for="webapp">On/Off</label>
					</span>
					<div class="clearfix"></div> 					
				</li> 				
				<div id="webappdata" style="display:none;">
					<h2>Web App Settings</h2>					
					<li class="colorchange"><h4>Hamberger Color: </h4>
						<select name="whamberger_color" id="whamberger_color">
							<option value="primary">Primary</option>
							<option value="secondary">Secondary</option>
							<option value="global_light">Global Light</option>
							<option value="global_dark">Global Dark</option>
							<option value="custom" selected="">Custom</option>
						</select>
						<div class="clearfix"></div>
						<ul class="customcolor">
							<li><h4>Hamberger Custom Color: </h4>
								<input class="udm_color_picker" type="text" name="whamberger_custom_color" value="#fff" />
								<div class="clearfix"></div>
							</li>
						</ul>
					</li>
					<li class="colorchange"><h4>Background Color: </h4>
						<select name="wbackground_color" id="wbackground_color">
							<option value="primary" selected="">Primary</option>
							<option value="secondary">Secondary</option>
							<option value="global_light">Global Light</option>
							<option value="global_dark">Global Dark</option>
							<option value="custom">Custom</option>
						</select>
						<div class="clearfix"></div>
						<ul class="customcolor" style="display:none;">
							<li><h4>Background Custom Color: </h4>
								<input class="udm_color_picker" type="text" name="wbackground_custom_color" value="" />
								<div class="clearfix"></div>
							</li>
						</ul>
					</li>
					<li class="colorchange"><h4>Text Color: </h4>
						<select name="wtext_color" id="wtext_color">
							<option value="primary">Primary</option>
							<option value="secondary">Secondary</option>
							<option value="global_light">Global Light</option>
							<option value="global_dark">Global Dark</option>
							<option value="custom" selected="">Custom</option>
						</select>
						<div class="clearfix"></div>
						<ul class="customcolor">
							<li><h4>Text Custom Color: </h4>
								<input class="udm_color_picker" type="text" name="wtext_custom_color" value="#fff" />
								<div class="clearfix"></div>
							</li>
						</ul>
					</li>	  
					<li class="imageupload image_upload"><h4>Profile Image: </h4><input type="text" name="profile_image" id="profile_image" class="meta-image regular-text main-image custom_logo_input" value=""><input class="btn upload-image button button-primary" my-attr="main-image" type="button" value="Upload Image" /></li>
					<li class="cus_txt_align"><h4>Profile Image Type: </h4> 
						<span><input type="radio" name="profile_image_type" value="circle"> Circle </span><span><input type="radio" name="profile_image_type" value="square" > Square</span>
						<div class="clearfix"></div>
					</li>
					<li><h4>Company Name: </h4>
						<input type="text" name="company_name" value=""/>
						<div class="clearfix"></div>
					</li>
					<li><h4>Text Under Company Name: </h4>
						<input type="text" name="text_under_company_name" value="" />
						<div class="clearfix"></div>
					</li>
					<li><h4>Star Rating: </h4>
						<span class="switch cus_bar_switch">
							<input type="checkbox" name="star_rating" class="switch" id="star_rating" value="yes">
							<label for="star_rating">On/Off</label>
						</span>
						<div class="clearfix"></div>	
					</li>
					<div id="reviewdata" style="display:none;">
						<li class="colorchange"><h4>Review Star Color: </h4>
							<select name="review_star_color" id="review_star_color">
								<option value="primary">Primary</option>
								<option value="secondary">Secondary</option>
								<option value="global_light">Global Light</option>
								<option value="global_dark">Global Dark</option>
								<option value="custom" selected="">Custom</option>
							</select>
							<div class="clearfix"></div>
							<ul class="customcolor">
								<li><h4>Review Star Custom Color: </h4>
									<input class="udm_color_picker" type="text" name="review_star_custom_color" value="#fff" />
									<div class="clearfix"></div>
								</li>
							</ul>
						</li>	
						<li><h4>Review Score: </h4>
							<input type="number" name="review_score" value="" step="0.1" min="0" max="5" />
							<div class="clearfix"></div>
						</li>
						<li><h4>Number of Reviews: </h4> 
							<input type="number" name="number_of_reviews" value="" />
							<div class="clearfix"></div>
						</li> 
					</div>
					<li><h4>Call Button: </h4>
						<span class="switch cus_bar_switch">
							<input type="checkbox" name="call_button" class="switch" id="call_button" value="yes" checked="">
							<label for="call_button">On/Off</label>
						</span>
						<div class="clearfix"></div>
					</li>					
					<li><h4>Email Button: </h4>
						<span class="switch cus_bar_switch">
							<input type="checkbox" name="email_button" class="switch" id="email_button" value="yes" checked="">
							<label for="email_button">On/Off</label>
						</span>
						<div class="clearfix"></div>
					</li>					
					<li><h4>Reviews Button: </h4>
						<span class="switch cus_bar_switch">
							<input type="checkbox" name="reviews_button" 	class="switch" id="reviews_button" value="yes">
							<label for="reviews_button">On/Off</label>
							<div class="clearfix"></div>
						</span>
					</li>
				</div>			 
				<div class="clearfix"></div>
			</ul>
		</li>	
		<div class="clearfix"></div>
	</ul>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="mobile_header_createlayout_submit" class="button button-primary" value="Save Layout"></p> </div>
</form>


<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
		$('#webapp').change(function(){
			if($(this).prop("checked") == true)
			{
				$('#webappdata').show();
			}
			else
			{
				$('#webappdata').hide();
			}
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