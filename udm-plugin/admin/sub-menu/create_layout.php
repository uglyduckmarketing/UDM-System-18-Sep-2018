<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
$layout = '';
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('submenu_layout_'.$layout));
?>
<form method="post" action="" enctype="multipart/form-data">
	
	<ul class="layout_top_data">
		<li><h4>Enter Layout Name: </h4><input type="text" name="submenu_layout_name" value="" required></li>
		<li><h4>Select Template: </h4>
			<select name="submenu_layout_template" id="submenu_layout_template" required>
				<option value="">Select Template</option>
				<option value="1">Basic</option>
			</select>
		</li>
	</ul>
	<div id="selected_layout"><div class='empty'><p>Select Submenu Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="submenu_createlayout_submit" class="button button-primary" value="Save Layout"></p> </div>

</form>
<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#submenu_layout_template').change(function(){ //Edit saved submenu layout
			var submenu = $(this).val();
			if(submenu == '1')
			{
				jQuery.ajax({
					type: 'post',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/sub-menu/templates/basic_layout.php",
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
				$('#selected_layout').html("<div class='empty'><p>Select submenu Layout Template to change settings.</p></div>");
			}
	   });
});
</script>