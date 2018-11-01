<?php
	define('WP_USE_THEMES', true);
	
	/** Loads the WordPress Environment and Template */
	//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
		include '../../../../../../../wp-load.php'; 
		
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('footer_cta_layout_'.$layout));

?>
<!-- Theme Options JS -->

<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>

<ul id="layoutsettings" class="footer_cta_type_style collapse show fullwidth_cta">
	<li class="imageupload"><h4>Background Type: </h4>
		<select name="background_type" id="editbackground_type">
			<option value="">Select</option>
			<option value="color" <?php selected('color',$data['background_type']); ?>>Color</option>
			<option value="image" <?php selected('image',$data['background_type']); ?>>Image</option>
		</select>
	</li>
	<li id="edittype_image" class="imageupload" <?php if($data['background_type']=='image'){ }else{ ?> style="display:none;" <?php } ?>><h4>Image Url: </h4>
		<input type="text" name="background_image" id="editbackground_image" class="meta-image regular-text main-image" value="<?php echo $data['background_image']; ?>">
		<input class="btn upload-image" my-attr="main-image" type="button" value="Upload Image" />
	</li>
	<li id="edittype_color" class="colorchange" <?php if($data['background_type']=='image'){ }else{ ?> style="display:none;" <?php } ?>><h3>Background Color: </h3>
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
	<li><h3>Background Image Opacity(in %): </h3><input type="number" name="background_opacity" value="<?php echo $data['background_opacity']; ?>" /></li>
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
				<input class="udm_color_picker" type="text" name="overlay_custom_color" value="<?php echo $data['overlay_custom_color']; ?>" />
			</li>
		</ul>
	</li>
	<li><h3>Height: </h3><input type="text" name="height" value="<?php echo $data['height']; ?>" /></li>
	<li>
		<h3>Button: </h3>
		<span class="switch">
			<input type="checkbox" name="show_button" class="switch" id="editshow_button" value="yes" <?php checked('yes',$data['show_button']); ?>>
			<label for="editshow_button">Off/On</label>
		</span>
	</li>
	<div id="editcallactionwidget" <?php if($data['show_button']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
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
					<input class="udm_color_picker" type="text" name="button_custom_color" value="<?php echo $data['button_custom_color']; ?>" />
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
			<ul class="customcolor"  <?php if($data['button_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Button Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="button_text_custom_color" value="<?php echo $data['button_text_custom_color']; ?>" />
				</li>
			</ul>
		</li>
		<li><h3>Button Link: </h3><input type="text" name="button_link" value="<?php echo $data['button_link']; ?>" /></li>
		<li><h3>Button Text: </h3><input type="text" name="button_text" value="<?php echo $data['button_text']; ?>" /></li>
	</div>
	<li><h3>Text Alignment: </h3><span><input type="radio" name="text_align" value="left" <?php checked('left',$data['text_align']); ?> />Left</span><span><input type="radio" name="text_align" value="center" <?php checked('center',$data['text_align']); ?>/>Center</span><span><input type="radio" name="text_align" value="right" <?php checked('right',$data['text_align']); ?> />Right</span></li>
	<li><h3>Title Text: </h3><input type="text" name="title_text" value="<?php echo $data['title_text']; ?>" /></li>
	<li class="colorchange"><h3>Header Text Color: </h3>
		<select name="title_text_color" id="edittitle_text_color">
			<option value="primary" <?php selected('primary',$data['title_text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['title_text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['title_text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['title_text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['title_text_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['title_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Header Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="title_text_custom_color" value="<?php echo $data['title_text_custom_color']; ?>" />
			</li>
		</ul>
	</li>
	<li><h3>Description: </h3><textarea name="desc_text"><?php echo $data['desc_text']; ?></textarea></li>
	<li class="colorchange"><h3>Description Text Color: </h3>
		<select name="desc_text_color" id="editdesc_text_color">
			<option value="primary" <?php selected('primary',$data['desc_text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['desc_text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['desc_text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['desc_text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['desc_text_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['desc_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Description Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="desc_text_custom_color" value="<?php echo $data['desc_text_custom_color']; ?>" />
			</li>
		</ul>
	</li>
</ul>
<script>
	jQuery(document).ready(function($) {

		$('.udm_color_picker').wpColorPicker();  //Add color picker 
	
		$('#editshow_button').change(function(){
			if($(this).prop("checked") == true)
			{
				$('#editcallactionwidget').show();
			}
			else
			{
				$('#editcallactionwidget').hide();
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