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
$theader = isset($_POST['header']) ? $_POST['header'] : '';
$textdata=unserialize(get_option('header_layout_'.$theader));
	$location=$_POST['location'];
?>

<div id="text"> 
	<h4>Text Widget</h4>
	<input type="hidden" name="<?php echo $location; ?>text" value="yes">
	<ul class="textwidget">
		<li><h5>Text Area</h5><input type="text" name="<?php echo $location; ?>_text" value="<?php echo $textdata[$location.'_text']; ?>" ></li>
	</ul>
</div>