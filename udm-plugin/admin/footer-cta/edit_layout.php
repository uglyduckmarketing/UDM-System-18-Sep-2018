<?php

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php');
include '../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('footer_cta_layout_'.$layout));

?>

<form method="post" action="" enctype="multipart/form-data">
	<?php 
		if(get_option('footer_cta_layout_'.$layout)!="")
		{
			echo '<input type="hidden" name="footer_cta_layout_name" value="'.$data['footer_cta_layout_name'].'" readonly>';
			echo '<input type="hidden" name="footer_cta_layout_template" value="'.$data['footer_cta_layout_template'].'" readonly>';
		}
		else
		{
	?>
	<ul class="layout_top_data">
		<li><h4>Enter Layout Name: </h4><input type="text" name="footer_cta_layout_name" value="" required></li>
		<li><h4>Select Template: </h4>
			<select name="footer_cta_layout_template" id="editfooter_cta_layout_template" required>
				<option value="">Select Template</option>
				<option value="1">Split CTA</option>
				<option value="2">Fullwidth CTA</option>
			</select>
		</li>
	</ul>
	<?php 
		}
	?>
	<div id="editselected_layout"><div class='empty'><p>Select Footer CTA Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="footer_cta_editlayout_submit" class="button button-primary" value="Save Layout"><input type="submit" name="footer_cta_deletelayout_submit" class="button button-primary" value="Delete Layout"></p> </div>

</form>


<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
		<?php
			if($data['footer_cta_layout_template']=="1")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo $layout; ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footer-cta/templates/edit_split_cta.php",
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
			if($data['footer_cta_layout_template']=="2")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo $layout; ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footer-cta/templates/edit_fullwidth_cta.php",
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
		 
	   $('#editfooter_cta_layout_template').change(function(){ //Edit saved footer_cta layout
			var footer_cta = $(this).val();
			if(footer_cta == '1')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footer-cta/templates/edit_split_cta.php",
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
			else if(footer_cta == '2')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footer-cta/templates/edit_fullwidth_cta.php",
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
				$('#editselected_layout').html("<div class='empty'><p>Select footer_cta Layout Template to change settings.</p></div>");
			}
	   });
	   
	  
	  });
	  
	
</script>