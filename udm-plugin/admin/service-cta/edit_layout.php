<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('service_cta_layout_'.$layout));
?>
<form method="post" action="" enctype="multipart/form-data">
	<?php 
		if(get_option('service_cta_layout_'.$layout)!="")
		{
			echo '<input type="hidden" name="service_cta_layout_name" value="'.$data['service_cta_layout_name'].'" readonly>';
			echo '<input type="hidden" name="service_cta_layout_template" value="'.$data['service_cta_layout_template'].'" readonly>';
		}
		else
		{
	?>
	<ul class="layout_top_data">
		<li><h4>Enter Layout Name: </h4><input type="text" name="service_cta_layout_name" value="" required></li>
		<li><h4>Select Template: </h4>
			<select name="service_cta_layout_template" id="editservice_cta_layout_template" required>
				<option value="">Select Template</option>
				<option value="1">Split CTA</option>
				<option value="2">Fullwidth CTA</option>
			</select>
		</li>
	</ul>
	<?php 
		}
	?>
	<div id="editselected_layout"><div class='empty'><p>Select Service CTA Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="service_cta_editlayout_submit" class="button button-primary" value="Save Layout"><input type="submit" name="service_cta_deletelayout_submit" class="button button-primary" value="Delete Layout"></p> </div>

</form>


<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
		<?php
			if($data['service_cta_layout_template']=="1")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo esc_attr($layout); ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/service-cta/templates/edit_split_cta.php",
				beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
				success: function(result) {
				$('#editselected_layout').html(result);
				}
			});
		<?php
			}
		?>
		<?php
			if($data['service_cta_layout_template']=="2")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo esc_attr($layout); ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/service-cta/templates/edit_fullwidth_cta.php",
				beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
				success: function(result) {
				$('#editselected_layout').html(result);
				}
			});
		<?php
			}
		?>
		
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#editservice_cta_layout_template').change(function(){ //Edit saved service_cta layout
			var service_cta = $(this).val();
			if(service_cta == '1')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/service-cta/templates/edit_split_cta.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#editselected_layout').html(result);
					}
				});
				
			}
			else if(service_cta == '2')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/service-cta/templates/edit_fullwidth_cta.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#editselected_layout').html(result);
					}
				});
				
			}
			else
			{
				$('#editselected_layout').html("<div class='empty'><p>Select service_cta Layout Template to change settings.</p></div>");
			}
	   });
	   
	  
	  });
	  
	
</script>