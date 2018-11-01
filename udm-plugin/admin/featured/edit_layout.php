<?php

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php');
include '../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('featured_layout_'.$layout));

?>

<form method="post" action="" enctype="multipart/form-data">
	<?php 
		if(get_option('featured_layout_'.$layout)!="")
		{
			echo '<input type="hidden" name="featured_layout_name" value="'.$data['featured_layout_name'].'" readonly>';
			echo '<input type="hidden" name="featured_layout_template" value="'.$data['featured_layout_template'].'" readonly>';
		}
		else
		{
	?>
	<ul class="layout_top_data">
		<li><h4>Enter Layout Name: </h4><input type="text" name="featured_layout_name" value="" required></li>
		<li><h4>Select Template: </h4>
			<select name="featured_layout_template" id="editfeatured_layout_template" required>
				<option value="">Select Template</option>
				<option value="1">Basic Hero</option>
				<option value="2">Fullwidth Hero</option>
				<option value="3">Splitscreen Hero</option>
				<option value="4">Left/Right Elements Hero</option> 
				<option value="5">Leadgen Hero</option> 
			</select>
		</li>
	</ul>
	<?php 
		}
	?>
	<div id="editselected_layout"><div class='empty'><p>Select Featured Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="featured_editlayout_submit" class="button button-primary" value="Save Layout"><input type="submit" name="featured_deletelayout_submit" class="button button-primary" value="Delete Layout"></p> </div>

</form>


<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
		<?php
			if($data['featured_layout_template']=="1")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo $layout; ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/edit_basic_hero.php",
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
			if($data['featured_layout_template']=="2")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo $layout; ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/edit_fullwidth_hero.php",
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
			if($data['featured_layout_template']=="3")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo $layout; ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/edit_splitscreen_hero.php",
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
			if($data['featured_layout_template']=="4")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo $layout; ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/edit_leftrightelement_hero.php",
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
			if($data['featured_layout_template']=="5")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo $layout; ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/edit_leadgen_hero.php",
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
		 
	   $('#editfeatured_layout_template').change(function(){ //Edit saved featured layout
			var featured = $(this).val();
			if(featured == '1')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/edit_basic_hero.php",
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
			else if(featured == '2')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/edit_fullwidth_hero.php",
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
			else if(featured == '3')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/edit_splitscreen_hero.php",
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
			else if(featured == '4')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/edit_leftrightelement_hero.php",
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
			else if(featured == '5')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/edit_leadgen_hero.php",
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
				$('#editselected_layout').html("<div class='empty'><p>Select Featured Layout Template to change settings.</p></div>");
			}
	   });
	   
	  
	  });
	  
	
</script>