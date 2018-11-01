<?php

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php');
include '../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('mobile_nav_layout_'.$layout));

?>

<form method="post" action="" enctype="multipart/form-data">
	<?php 
		if(get_option('mobile_nav_layout_'.$layout)!="")
		{
			echo '<input type="hidden" name="mobile_nav_layout_name" value="'.$data['mobile_nav_layout_name'].'" readonly>';
			echo '<input type="hidden" name="mobile_nav_layout_template" value="'.$data['mobile_nav_layout_template'].'" readonly>';
		}
		else
		{
	?>
	<ul class="layout_top_data">
		<li><h4>Enter Layout Name: </h4><input type="text" name="mobile_nav_layout_name" value="" required></li>
		<li><h4>Select Template: </h4>
			<select name="mobile_nav_layout_template" id="editmobile_nav_layout_template" required>
				<option value="">Select Template</option>
				<option value="1">Basic Slidedown</option>
				<option value="2">Basic Overlay</option>
				<option value="3">Slide In</option>
			</select>
		</li>
	</ul>
	<?php 
		}
	?>
	<div id="editselected_layout"><div class='empty'><p>Select mobile_nav Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="mobile_nav_editlayout_submit" class="button button-primary" value="Save Layout"><input type="submit" name="mobile_nav_deletelayout_submit" class="button button-primary" value="Delete Layout"></p> </div>

</form>


<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
		<?php
			if($data['mobile_nav_layout_template']=="1")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo $layout; ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-nav/templates/edit_basic_slidedown.php",
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
			if($data['mobile_nav_layout_template']=="2")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo $layout; ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-nav/templates/edit_basic_overlay.php",
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
			if($data['mobile_nav_layout_template']=="3")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo $layout; ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-nav/templates/edit_slidein.php",
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
		 
	   $('#editmobile_nav_layout_template').change(function(){ //Edit saved mobile_nav layout
			var mobile_nav = $(this).val();
			if(mobile_nav == '1')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-nav/templates/edit_basic_slidedown.php",
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
			else if(mobile_nav == '2')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-nav/templates/edit_basic_overlay.php",
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
			else if(mobile_nav == '3')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-nav/templates/edit_slidein.php",
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
				$('#editselected_layout').html("<div class='empty'><p>Select mobile_nav Layout Template to change settings.</p></div>");
			}
	   });
	   
	  
	  });
	  
	
</script>