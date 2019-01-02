<?php

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
include '../../../../../../../../wp-load.php';
?>
<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
		$('.udm_color_picker').wpColorPicker();
	});
</script>
<?php 
$bheader = isset($_POST['header']) ? $_POST['header'] : '';
$buttodata=unserialize(get_option('header_layout_'.$bheader));
$location=$_POST['location'];
?>

<div id="bottommenu">    
	<h3>Button</h3>
	<input type="hidden" name="<?php echo esc_attr($location); ?>button" value="yes">
	<ul class="menuwidget common_setting"> 
		<li><h4>Button Text </h4><input type="text" name="<?php echo esc_attr($location); ?>_button_text" value="<?php echo esc_attr($buttodata[$location.'_button_text']); ?>" />
		<div class="clearfix"></div>
		</li>	 
		<li><h4>Button Link </h4><input type="text" name="<?php echo esc_attr($location); ?>_button_link" value="<?php echo esc_attr($buttodata[$location.'_button_link']); ?>" />
		<div class="clearfix"></div>
		</li>
		<div class="clearfix"></div> 
	</ul>
</div>