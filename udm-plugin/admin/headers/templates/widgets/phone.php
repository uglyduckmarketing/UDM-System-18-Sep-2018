<?php
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
include '../../../../../../../../wp-load.php';
?>

<?php
$phonedata=unserialize(get_option('header_layout_'.$_POST['header']));

$location=$_POST['location'];
?>

<div id="phoneno">
	<input type="hidden" name="<?php echo $location; ?>phone" value="yes">
	<ul class="phonenowidget">
		<li><h5>Text and Company Phone Number (Shows Automatically) <span>Another Number (Optional)</span></h5><input type="text" name="<?php echo $location; ?>_phone_left_text" value="<?php echo $phonedata[$location.'_phone_left_text']; ?>" /></li>
	
		<li><h5>Phone Overright: </h5><span class="switch">
			<input type="checkbox" name="<?php echo $location; ?>_phone_overright" class="switch" id="<?php echo $location; ?>_phone_overright" value="yes" <?php checked("yes",$phonedata[$location.'_phone_overright']); ?>>
			<label for="<?php echo $location; ?>_phone_overright">No / Yes</label>
		</span></li>
		<div id="<?php echo $location; ?>_numberdata" <?php if($phonedata[$location.'_phone_overright']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h5>Phone Number: </h5><input type="text" name="<?php echo $location; ?>_phone_number" value="<?php echo $phonedata[$location.'_phone_number']; ?>" /></li>
		</div>
	</ul>
</div><!-- Theme Options JS -->
<script>

jQuery(document).ready(function($) {
  	$('.udm_color_picker').wpColorPicker();
	$('#<?php echo $location; ?>_phone_overright').change(function(){
		if($(this).prop("checked") == true)
			{
				$('#<?php echo $location; ?>_numberdata').show();
			}
			else
			{
				$('#<?php echo $location; ?>_numberdata').hide();
			}
		});
});

</script>