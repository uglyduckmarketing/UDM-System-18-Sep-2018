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
	<input type="hidden" name="<?php echo isset($location) ? $location : ''; ?>phone" value="yes" />
	<ul class="phonenowidget common_setting">
		<li><h4>Text/Contact Number(This pulls up from base options)</span></h4><input type="text" name="<?php echo isset($location) ? $location : ''; ?>_phone_left_text" value="<?php echo esc_attr($phonedata[$location.'_phone_left_text']); ?>" />
		<div class="clearfix"></div>
		</li>
	
		<li><h4>Phone Override: </h4>
		<span class="switch cus_bar_switch">
			<input type="checkbox" name="<?php echo isset($location) ? $location : ''; ?>_phone_overright" class="switch" id="<?php echo isset($location) ? $location : ''; ?>_phone_overright" value="yes" <?php checked("yes",isset($phonedata[$location.'_phone_overright']) ? $phonedata[$location.'_phone_overright'] : ''); ?>>
			<label for="<?php echo esc_attr($location); ?>_phone_overright">No / Yes</label></span>
		<div class="clearfix"></div>
		</li>
		<div id="<?php echo esc_attr($location); ?>_numberdata" <?php if(isset($phonedata[$location.'_phone_overright']) && $phonedata[$location.'_phone_overright']=="yes"){}else{ ?> style="display:none;" <?php } ?>>   
			<li><h4>Phone Number: </h4><input type="text" name="<?php echo esc_attr($location); ?>_phone_number" value="<?php echo isset($phonedata[$location.'_phone_number']) ? $phonedata[$location.'_phone_number'] : ''; ?>" />
			<div class="clearfix"></div>
			</li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
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