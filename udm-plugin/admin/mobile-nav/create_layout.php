<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
$layout = '';
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('mobile_nav_layout_'.$layout));

?>

<form method="post" action="" enctype="multipart/form-data">
	
	<ul class="layout_top_data">
		<li><h4>Enter Layout Name: </h4><input type="text" name="mobile_nav_layout_name" value="" required></li>
		<li><h4>Select Template: </h4>
			<select name="mobile_nav_layout_template" id="mobile_nav_layout_template" required>
				<option value="">Select Template</option>
				<option value="1">Basic Slidedown</option>
				<option value="2">Basic Overlay</option>
				<option value="3">Slide In</option>
			</select>
		</li>
	</ul>
	<div id="selected_layout"><div class='empty'><p>Select mobile_nav Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="mobile_nav_createlayout_submit" class="button button-primary" value="Save Layout"></p> </div>

</form>


<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#mobile_nav_layout_template').change(function(){ //Edit saved mobile_nav layout
			var mobile_nav = $(this).val();
			if(mobile_nav == '1')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-nav/templates/basic_slidedown.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#selected_layout').html(result);
					}
				});
				
			}
			else if(mobile_nav == '2')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-nav/templates/basic_overlay.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#selected_layout').html(result);
					}
				});
				
			}
			else if(mobile_nav == '3')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-nav/templates/slidein.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#selected_layout').html(result);
					}
				});
				
			}
			else
			{
				$('#selected_layout').html("<div class='empty'><p>Select mobile_nav Layout Template to change settings.</p></div>");
			}
	   });
});
</script>