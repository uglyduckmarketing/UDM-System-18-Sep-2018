<?php

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
include '../../../../../../../../wp-load.php';
?>

<?php
$sheader = isset($_POST['header']) ? $_POST['header'] : '';
$socialdata=unserialize(get_option('header_layout_'.$sheader));
	$location=$_POST['location'];
?>

<div id="bottommenu">  
	<h3>Social icons</h3>
	<input type="hidden" name="<?php echo isset($location) ? $location : ''; ?>social" value="yes" />
	<ul class="socialwidget common_setting">
		<li><h4>Social Icon Style </h4><select name="<?php echo isset($location) ? $location : ''; ?>_social_icon_style"><option value="default" <?php selected('default',$socialdata[$location.'_social_icon_style']); ?>>Default</option><option value="square" <?php selected('square',$socialdata[$location.'_social_icon_style']); ?>>Square</option></select>
		<div class="clearfix"></div>
		</li> 
		<li class="colorchange"><h4>Social Icon Color: </h4>
		<select name="<?php echo isset($location) ? $location : ''; ?>_social_icon_color" id="<?php echo isset($location) ? $location : ''; ?>_social_icon_color">
			<option value="primary" <?php selected('primary',$socialdata[$location.'_social_icon_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$socialdata[$location.'_social_icon_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$socialdata[$location.'_social_icon_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$socialdata[$location.'_social_icon_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$socialdata[$location.'_social_icon_color']); ?>>Custom</option>
		</select>
		<div class="clearfix"></div>  
		<ul class="customcolor" <?php if($socialdata[$location.'_social_icon_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li><h4>Button Custom Color: </h4>
				<input class="udm_color_picker" type="text" name="<?php echo isset($location) ? $location : ''; ?>_social_icon_custom_color" value="<?php echo isset($socialdata[$location.'_social_icon_custom_color']) ? $socialdata[$location.'_social_icon_custom_color'] : ''; ?>" />
				<div class="clearfix"></div> 
			</li>
		</ul> 
		</li>  
		<div class="clearfix"></div> 
	</ul>
</div> 

<!-- Theme Options JS -->
<script>

jQuery(document).ready(function($) {
  	$('.udm_color_picker').wpColorPicker();
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