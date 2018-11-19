<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
$layout = '';
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('footer_cta_layout_'.$layout));

?>

<form method="post" action="" enctype="multipart/form-data">
	
	<ul class="layout_top_data">
		<li><h4>Enter Layout Name: </h4><input type="text" name="footer_cta_layout_name" value="" required></li>
		<li><h4>Select Template: </h4>
			<select name="footer_cta_layout_template" id="footer_cta_layout_template" required>
				<option value="">Select Template</option>
				<option value="1">Split CTA</option>
				<option value="2">Fullwidth CTA</option>
			</select>
		</li>
	</ul>
	<div id="selected_layout"><div class='empty'><p>Select Footer CTA Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="footer_cta_createlayout_submit" class="button button-primary" value="Save Layout"></p> </div>

</form>


<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#footer_cta_layout_template').change(function(){ //Edit saved footer_cta layout
			var footer_cta = $(this).val();
			if(footer_cta == '1')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footer-cta/templates/split_cta.php",
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
			else if(footer_cta == '2')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footer-cta/templates/fullwidth_cta.php",
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
				$('#selected_layout').html("<div class='empty'><p>Select footer_cta Layout Template to change settings.</p></div>");
			}
	   });
});
</script>