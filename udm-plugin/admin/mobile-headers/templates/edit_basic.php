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
	<li><h3>Hamber: </h3> <span><input type="radio" name="hamber_position" value="left" <?php checked('left',$data['hamber_position']); ?>>Left </span><span><input type="radio" name="hamber_position" value="right" <?php checked('right',$data['hamber_position']); ?>>Right </span></li>
	<li><h3>Navigation: </h3>
		<select name="navigation">
			<?php $menus=wp_get_nav_menus();
				foreach( $menus as $item ) {
			?>
				<option value="<?php echo esc_attr($item->slug);  ?>" <?php selected($item->slug, $data['navigation'] ); ?>> <?php echo esc_attr($item->name);  ?></option>
			<?php
				}
			?>
		</select>
	</li>
	<li class="colorchange"><h3>Hamberger Color: </h3>
		<select name="hamberger_color" id="hamberger_color">
			<option value="primary" <?php selected('primary',$data['hamberger_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['hamberger_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['hamberger_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['hamberger_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['hamberger_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['hamberger_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Hamberger Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="hamberger_custom_color" value="<?php echo esc_attr($data['hamberger_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Background Color: </h3>
		<select name="background_color" id="background_color">
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
	<li><h3>Logo Position: </h3> <span><input type="radio" name="logo_position" value="center" <?php checked('center',$data['logo_position']); ?>> Center </span><span><input type="radio" name="logo_position" value="opposite" <?php checked('opposite',$data['logo_position']); ?>> Opposite of hamberger</span></li>
	<li><h3>Logo Url: </h3><input type="text" name="logo_url" id="logo_url" class="meta-image regular-text main-image" value="<?php echo esc_attr($data['logo_url']); ?>"><input class="btn upload-image" my-attr="main-image" type="button" value="Upload Image" /></li>
	<li>
		<h3>Sticky: </h3>
		<span class="switch">
			<input type="checkbox" name="sticky" class="switch" id="sticky" value="yes" <?php checked('yes',$data['sticky']); ?>>
			<label for="sticky">Off/On</label>
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
	
		$('#editright_side_widget').change(function(){
			if($(this).val() == "1")
			{
				$('#editcallactionwidget').hide();
				$('#editphonewidget').show();
			}
			else if($(this).val() == "2")
			{
				$('#editcallactionwidget').show();
				$('#editphonewidget').hide();
			}
			else
			{
				$('#editcallactionwidget').hide();
				$('#editphonewidget').hide();
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