<?php

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php');
include '../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout']; 
}
$data=unserialize(get_option('submenu_layout_'.$layout));
?>
 
<form method="post" action="" enctype="multipart/form-data">
	<?php 
		if(get_option('submenu_layout_'.$layout)!="")
		{
			$mobile_nav_layout_name = isset($data['submenu_layout_name']) ? $data['submenu_layout_name'] : '';
			$mobile_nav_layout_template = isset($data['submenu_layout_template']) ? $data['submenu_layout_template'] : '';
			echo '<input type="hidden" name="submenu_layout_name" value="'.$mobile_nav_layout_name.'" readonly>';
			echo '<input type="hidden" name="submenu_layout_template" value="'.$mobile_nav_layout_template.'" readonly>';
		}
		else
		{
	?>
	<ul class="layout_top_data">
		<li><h4>Enter Layout Name: </h4><input type="text" name="submenu_layout_name" value="" required></li>
		<li><h4>Select Template: </h4>
			<select name="submenu_layout_template" id="editsubmenu_layout_template" required>
				<option value="">Select Template</option>
				<option value="1">Basic</option>
	
			</select>
		</li>
	</ul>
	<?php 
		}
	?>
	<div id="editselected_layout"><div class='empty'><p>Select Submenu Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="submenu_editlayout_submit" class="button button-primary" value="Save Layout"><input type="submit" name="submenu_deletelayout_submit" class="button button-primary" value="Delete Layout"></p> </div>

</form>


<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
		<?php
			if($data['submenu_layout_template']=="1")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo $layout; ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/sub-menu/templates/edit_basic_layout.php",
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
		 
	   $('#editmobile_nav_layout_template').change(function(){ //Edit saved submenu layout
			var submenu = $(this).val();
			if(submenu == '1')
			{
				jQuery.ajax({
					type: 'post',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/sub-menu/templates/edit_basic_layout.php",
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
				$('#editselected_layout').html("<div class='empty'><p>Select submenu Layout Template to change settings.</p></div>");
			}
	   });
	   
	  
	  });
	  
	
</script>