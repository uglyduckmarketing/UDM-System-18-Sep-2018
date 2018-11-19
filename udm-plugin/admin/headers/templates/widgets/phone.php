<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */ 
include '../../../../../../../../wp-load.php';
?>
<?php
$header = isset($_POST['header']) ? $_POST['header'] : '';
$phonedata=unserialize(get_option('header_layout_'.$header));
$location=$_POST['location'];
?>
<div id="phoneno">
	<input type="hidden" name="<?php echo isset($location) ? $location : ''; ?>phone" value="yes">
	<ul class="phonenowidget">
		<li><h5>Text and Company Phone Number (Shows Automatically) <span>Another Number (Optional)</span></h5><input type="text" name="<?php echo isset($location) ? $location : ''; ?>_phone_left_text" value="<?php echo esc_attr($phonedata[$location.'_phone_left_text']); ?>" /></li>
	
		<li><h5>Phone Overright: </h5><span class="switch">
			<input type="checkbox" name="<?php echo isset($location) ? $location : ''; ?>_phone_overright" class="switch" id="<?php echo isset($location) ? $location : ''; ?>_phone_overright" value="yes" <?php checked("yes",isset($phonedata[$location.'_phone_overright']) ? $phonedata[$location.'_phone_overright'] : ''); ?>>
			<label for="<?php echo esc_attr($location); ?>_phone_overright">No / Yes</label>
		</span></li>
		<div id="<?php echo esc_attr($location); ?>_numberdata" <?php if(isset($phonedata[$location.'_phone_overright']) && $phonedata[$location.'_phone_overright']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h5>Phone Number: </h5><input type="text" name="<?php echo esc_attr($location); ?>_phone_number" value="<?php echo isset($phonedata[$location.'_phone_number']) ? $phonedata[$location.'_phone_number'] : ''; ?>" /></li>
		</div>
	</ul>
</div><!-- Theme Options JS -->
<script>

jQuery(document).ready(function($) {
  	$('.udm_color_picker').wpColorPicker();
	$('#<?php echo isset($location) ? $location : ''; ?>_phone_overright').change(function(){
		if($(this).prop("checked") == true)
			{
				$('#<?php echo isset($location) ? $location : ''; ?>_numberdata').show();
			}
			else
			{
				$('#<?php echo isset($location) ? $location : ''; ?>_numberdata').hide();
			}
		});
});
</script>