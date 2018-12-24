<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}

$data=unserialize(get_option('header_layout_'.$layout));
?>
<form method="post" action="" enctype="multipart/form-data">
	<?php 
		if(get_option('header_layout_'.$layout)!="")
		{
			echo '<input type="hidden" name="header_layout_name" value="'.$data['header_layout_name'].'" readonly>';
			echo '<input type="hidden" name="header_layout_template" value="'.$data['header_layout_template'].'" readonly>';
		}
		else
		{
	?>
	<ul class="layout_top_data">
		<li><h4>Enter Layout Name: </h4><input type="text" name="header_layout_name" value="" required></li>
		<li><h4>Select Template: </h4>
			<select name="header_layout_template" id="editheader_layout_template" required>
				<option value="">Select Template</option>
				<option value="1">Basic Header</option>
				<option value="2">Stacked Header</option>
				<option value="3">Transparent Header</option>
				<option value="4">New Two Header</option>
			</select>
		</li>
	</ul>
	<?php 
		}
	?>
	<div id="editselected_layout"><div class='empty'><p>Select Header Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="header_editlayout_submit" class="button button-primary" value="Save Layout"><input type="submit" name="header_deletelayout_submit" class="button button-primary" value="Delete Layout"></p> </div>

</form>



<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
		<?php
			if($data['header_layout_template']=="1")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo esc_attr($layout); ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/edit_basic_header.php",
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
			if($data['header_layout_template']=="2")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo esc_attr($layout); ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/edit_stacked_header.php",
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
			if($data['header_layout_template']=="3")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo esc_attr($layout); ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/edit_transparent_header.php",
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
			if($data['header_layout_template']=="4")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo esc_attr($layout); ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/edit_new_two_header.php",
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
		 
	   $('#editheader_layout_template').change(function(){ //Edit saved header layout
			var header = $(this).val();
			if(header == '1')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/edit_basic_header.php",
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
			else if(header == '2')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/edit_stacked_header.php",
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
			else if(header == '3')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/edit_transparent_header.php",
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
				$('#editselected_layout').html("<div class='empty'><p>Select header Layout Template to change settings.</p></div>");
			}
	   });
});
</script>