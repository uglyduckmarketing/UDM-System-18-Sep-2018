<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../../wp-load.php';
?>
<!-- Theme Options JS -->
<script>
jQuery(document).ready(function($) {
  	$('.udm_color_picker').wpColorPicker();

});
</script>
<?php
$theader = isset($_POST['header']) ? $_POST['header'] : '';
$textdata=unserialize(get_option('header_layout_'.$theader));
$location=$_POST['location'];
?>
<div id="text"> 
	<h4>Text Widget</h4>
	<input type="hidden" name="<?php echo isset($location) ? $location : ''; ?>text" value="yes">
	<ul class="textwidget">
		<li><h5>Text Area</h5><input type="text" name="<?php echo isset($location) ? $location : ''; ?>_text" value="<?php echo isset($textdata[$location.'_text']) ? $textdata[$location.'_text'] : ''; ?>" ></li>
	</ul>
</div>