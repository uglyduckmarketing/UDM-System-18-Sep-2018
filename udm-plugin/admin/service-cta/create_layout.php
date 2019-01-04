<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
$layout = '';
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('service_cta_layout_'.$layout));
?>
<form method="post" action="" enctype="multipart/form-data">	
	<ul class="common_setting">
		<li>  
			<ul class="inner">
				<li><h4>Enter Layout Name: </h4><input type="text" name="service_cta_layout_name" value="" required />
				<div class="clearfix"></div>
				</li>
				<li><h4>Select Template: </h4>
					<select name="service_cta_layout_template" id="service_cta_layout_template" required>
						<option value="">Select Template</option>
						<option value="1">Split CTA</option>
						<option value="2">Fullwidth CTA</option>
					</select>
					<div class="clearfix"></div>
				</li> 
			</ul> 
		</li>
		<div class="clearfix"></div>
	</ul>
	<div id="selected_layout"><div class='empty'><p>Select Service CTA Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="service_cta_createlayout_submit" class="button button-primary" value="Save Layout"></p> </div>
</form>

<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#service_cta_layout_template').change(function(){ //Edit saved service_cta layout
			var service_cta = $(this).val();
			if(service_cta == '1')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/service-cta/templates/split_cta.php",
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
			else if(service_cta == '2')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/service-cta/templates/fullwidth_cta.php",
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
				$('#selected_layout').html("<div class='empty'><p>Select service_cta Layout Template to change settings.</p></div>");
			}
	   });
});
</script>