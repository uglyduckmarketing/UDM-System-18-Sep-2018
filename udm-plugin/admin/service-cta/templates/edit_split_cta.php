<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */ 
include '../../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('service_cta_layout_'.$layout));
?>
<!-- Theme Options JS -->
<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#edittextsettings">Text Side Settings</a>
</h2>

<ul id="edittextsettings" class="footer_cta_type_style collapse show split_cta">
	<li><h3>Title Text</h3><input type="text" name="title_text" value="<?php echo esc_attr($data['title_text']); ?>"></li>
	<li class="colorchange"><h3>Title Text Color: </h3>
		<select name="title_text_color" id="edittitle_text_color">
				<option value="primary" <?php selected('primary',isset($data['title_text_color']) ? $data['title_text_color'] : ''); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',isset($data['title_text_color']) ? $data['title_text_color'] : ''); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',isset($data['title_text_color']) ? $data['title_text_color'] : ''); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',isset($data['title_text_color']) ? $data['title_text_color'] : ''); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',isset($data['title_text_color']) ? $data['title_text_color'] : ''); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if(isset($data['title_text_color']) && $data['title_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Title Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="title_text_custom_color" value="<?php echo esc_attr($data['title_text_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li><h3>Description Text</h3><textarea name="description_text"><?php echo esc_attr($data['description_text']); ?></textarea></li>
	<li class="colorchange"><h3>Description Text Color: </h3>
		<select name="description_text_color" id="editdescription_text_color">
				<option value="primary" <?php selected('primary',$data['description_text_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['description_text_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['description_text_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['description_text_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['description_text_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['description_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Description Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="description_text_custom_color" value="<?php echo esc_attr($data['description_text_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li>
		<h3>Button: </h3>
		<span class="switch">
			<input type="checkbox" name="show_button" class="switch" id="editshow_button" value="yes" <?php checked('yes',isset($data['show_button']) ? $data['show_button'] : ''); ?>>
			<label for="editshow_button">Off/On</label>
		</span>
	</li>
	<div id="editbuttondata" <?php if(isset($data['show_button']) && $data['show_button']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
		<li class="colorchange"><h3>Button Color: </h3>
			<select name="button_color" id="editbutton_color">
					<option value="primary" <?php selected('primary',$data['button_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['button_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['button_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['button_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['button_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['button_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Button Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="button_custom_color" value="<?php echo esc_attr($data['button_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Button Text Color: </h3>
			<select name="button_text_color" id="editbutton_text_color">
				<option value="primary" <?php selected('primary',$data['button_text_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['button_text_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['button_text_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['button_text_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['button_text_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['button_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Button Text Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="button_text_custom_color" value="<?php echo esc_attr($data['button_text_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li><h3>Button Link: </h3><input type="text" name="button_link" value="<?php echo esc_attr($data['button_link']); ?>" /></li>
		<li><h3>Button Text: </h3><input type="text" name="button_text" value="<?php echo esc_attr($data['button_text']); ?>" /></li>
	</div>
	
	<li class="colorchange"><h3>Background Color: </h3>
		<select name="background_color" id="editbackground_color">
				<option value="primary" <?php selected('primary',$data['background_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['background_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['background_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['background_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['background_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor"  <?php if(isset($data['background_color']) && $data['background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="background_custom_color" value="<?php echo esc_attr($data['background_custom_color']); ?>" />
			</li>
		</ul>
	</li>
</ul>

<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#editelementsettings">Element Side Settings</a>
</h2>
<ul id="editelementsettings" class="footer_cta_type_style collapse show split_cta">
	<li><h3>Height: </h3><input type="text" name="height" value="<?php echo esc_attr($data['height']); ?>" /></li>
	<li class="colorchange"><h3>Background Color: </h3>
		<select name="element_background_color" id="editelement_background_color">
				<option value="primary" <?php selected('primary',$data['element_background_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['element_background_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['element_background_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['element_background_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['element_background_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if(isset($data['element_background_color']) && $data['element_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="element_background_custom_color" value="<?php echo esc_attr($data['element_background_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li><h3>Background Image Opacity(in %): </h3><input type="number" name="background_opacity" value="<?php echo esc_attr($data['background_opacity']); ?>" /></li>
	<li class="colorchange"><h3>Overlay Color: </h3>
		<select name="overlay_color" id="editoverlay_color">
			<option value="primary" <?php selected('primary',$data['overlay_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['overlay_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['overlay_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['overlay_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['overlay_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['overlay_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Overlay Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="overlay_custom_color" value="<?php echo esc_attr($data['overlay_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li><h3>Element: </h3>
		<select name="element_type" id="editelement_type">
			<option value="">Select</option>
			<option value="image" <?php selected('image',$data['element_type']); ?>>Image</option>
			<option value="video" <?php selected('video',$data['element_type']); ?>>Video</option>
			<option value="form" <?php selected('form',$data['element_type']); ?>>Form</option>
			<option value="map" <?php selected('map',$data['element_type']); ?>>Map</option>
		</select>
	</li>
	<div id="editimagedata" <?php if($data['element_type']=="image"){}else{ ?> style="display:none;" <?php } ?>>
		<li class="imageupload"><h4>Image Url: </h4>
			<input type="text" name="element_image_url" id="editelement_image_url" class="meta-image regular-text main-image" value="<?php echo esc_attr($data['element_image_url']); ?>">
			<input class="btn upload-image" my-attr="main-image" type="button" value="Upload Image" />
		</li>
	</div>
	<div id="editvideodata" <?php if($data['element_type']=="video"){}else{ ?> style="display:none;" <?php } ?>>
		<li><h4>Video Link: <span>Enter youtube/vimeo link.</span> </h4>
			<input type="text" name="element_video_link" id="editelement_video_link" value="<?php echo esc_attr($data['element_video_link']); ?>">
		</li>
		
		<li><h4>Video Poster Url: </h4>
			<input type="text" name="element_video_poster_url" id="editelement_video_poster_url" class="meta-image regular-text video-image" value="<?php echo esc_attr($data['element_video_poster_url']); ?>">
			<input class="btn upload-image" my-attr="video-image" type="button" value="Upload Image" />
		</li>
		<li class="colorchange"><h3>Video Play Icon Color: </h3>
			<select name="video_play_icon_color" id="editvideo_play_icon_color">
				<option value="primary" <?php selected('primary',$data['video_play_icon_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['video_play_icon_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['video_play_icon_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['video_play_icon_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['video_play_icon_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['video_play_icon_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Video Play Icon Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="video_play_icon_custom_color" value="<?php echo esc_attr($data['video_play_icon_custom_color']); ?>" />
				</li>
			</ul>
		</li>
	</div>
	<div id="editformdata" <?php if($data['element_type']=="form"){}else{ ?> style="display:none;" <?php } ?>>
		<li><h4>Form Shortcode: </h4>
			<input type="text" name="element_form_shortcode" id="editelement_form_shortcode" value="<?php echo esc_attr($data['element_form_shortcode']); ?>">
		</li>
	</div>
	<div id="editmapdata" <?php if($data['element_type']=="map"){}else{ ?> style="display:none;" <?php } ?>>
		<li><h4>Map latitude: </h4>
			<input type="text" name="element_map_lat" id="editelement_map_lat" value="<?php echo esc_attr($data['element_map_lat']); ?>">
		</li>
		
		<li><h4>Map longitude: </h4>
			<input type="text" name="element_map_long" id="editelement_map_long" value="<?php echo esc_attr($data['element_map_long']); ?>">
		</li>
		<li><h4>Google Maps Api Key: </h4>
			<input type="text" name="element_map_api_key" id="element_map_api_key" value="<?php echo esc_attr($data['element_map_api_key']); ?>">
		</li>
		<li class="colorchange"><h3>Map Color: </h3>
			<select name="map_color" id="editmap_color">
				<option value="primary" <?php selected('primary',$data['map_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['map_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['map_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['map_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['map_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['map_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Map Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="map_custom_color" value="<?php echo esc_attr($data['map_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		
	</div>
</ul>
<script>
	jQuery(document).ready(function($) {

		$('.udm_color_picker').wpColorPicker();  //Add color picker 
	
		$('#editelement_type').change(function(){
			if($(this).val() == "image")
			{
				$('#editimagedata').show();
				$('#editvideodata').hide();
				$('#editformdata').hide();
				$('#editmapdata').hide();
				
			}
			else if($(this).val() == "video")
			{
				$('#editimagedata').hide();
				$('#editvideodata').show();
				$('#editformdata').hide();
				$('#editmapdata').hide();
			}
			else if($(this).val() == "form")
			{
				$('#editimagedata').hide();
				$('#editvideodata').hide();
				$('#editformdata').show();
				$('#editmapdata').hide();
			}
			else if($(this).val() == "map")
			{
				$('#editimagedata').hide();
				$('#editvideodata').hide();
				$('#editformdata').hide();
				$('#editmapdata').show();
			}
			else
			{
				$('#editimagedata').hide();
				$('#editvideodata').hide();
				$('#editformdata').hide();
				$('#editmapdata').hide();
			}
		});
		$('#editshow_button').change(function(){
			if($(this).prop('checked')==true)
			{
				$('#editbuttondata').show();
			}
			else
			{
				$('#editbuttondata').hide();
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