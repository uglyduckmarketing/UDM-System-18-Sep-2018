<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('blog_layout_'.$layout));
?>
<form method="post" action="" enctype="multipart/form-data">
	<?php 
		if(get_option('blog_layout_'.$layout)!="")
		{
			echo '<input type="hidden" name="blog_layout_name" value="'.$data['blog_layout_name'].'" readonly>';
			echo '<input type="hidden" name="blog_layout_template" value="'.$data['blog_layout_template'].'" readonly>';
		}
		else
		{
	?>
	<ul class="common_setting">
		<li> 
			<ul class="inner">
				<li><h4>Enter Layout Name: </h4><input type="text" name="blog_layout_name" value="" required></li>
				<li><h4>Select Template: </h4>
					<select name="blog_layout_template" id="editblog_layout_template" required>
						<option value="">Select Template</option>
						<option value="1">Grid</option>
						<option value="2">Cards</option>
					</select>
				</li> 
				<div class="clearfix"></div>
			</ul>
		</li>
	</ul>
	<?php 
		}
	?>
	<div id="editselected_layout"><div class='empty'><p>Select Blog Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="blog_editlayout_submit" class="button button-primary" value="Save Layout"><input type="submit" name="blog_deletelayout_submit" class="button button-primary" value="Delete Layout"></p></div>
</form> 
<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
		<?php
			if($data['blog_layout_template']=="1")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo esc_attr($layout); ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/blog/templates/edit_grid.php",
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
			if($data['blog_layout_template']=="2")
			{
		?>
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo esc_attr($layout); ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/blog/templates/edit_cards.php",
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
		
	   $('#editblog_layout_template').change(function(){ //Edit saved blog layout
			var blog = $(this).val();
			if(blog == '1')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/blog/templates/edit_grid.php",
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
			else if(blog == '2')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/blog/templates/edit_cards.php",
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
				$('#editselected_layout').html("<div class='empty'><p>Select Blog Layout Template to change settings.</p></div>");
			}
	   });
	   	  
	  });
	  	
</script>