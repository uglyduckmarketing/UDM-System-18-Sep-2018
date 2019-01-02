<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
$layout = '';
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('header_layout_'.$layout));
?>
<form method="post" action="" enctype="multipart/form-data">	
	<ul class="common_setting">
		<li>
			<ul class="inner"> 
				<li><h4>Enter Layout Name: </h4><input type="text" name="header_layout_name" value="" required></li>
				<li><h4>Select Template: </h4>
					<select name="header_layout_template" id="header_layout_template" required>
						<option value="">Select Template</option>
						<option value="1">Basic Header</option>
						<option value="2">Stacked Header</option>
						<option value="3">Transparent Header</option>
						<option value="4">New Header</option>
					</select>
				</li> 
				<div class="clearfix"></div>
			</ul>
		</li>
	</ul> 
	<div id="selected_layout"><div class='empty'><p>Select header Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="header_createlayout_submit" class="button button-primary" value="Save Layout"></p> </div> 
</form>
<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#header_layout_template').change(function(){ //Edit saved header layout
			var header = $(this).val();
			if(header == '1')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/basic_header.php",
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
			else if(header == '2')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/stacked_header.php",
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
			else if(header == '3')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/transparent_header.php",
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
				else if(header == '4')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/new_two_header.php",
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
				$('#selected_layout').html("<div class='empty'><p>Select header Layout Template to change settings.</p></div>");
			}
	   });
 });
</script>