<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('footer_layout_'.$layout));
?>
<form method="post" action="" enctype="multipart/form-data">
	<?php 
		if(get_option('footer_layout_'.$layout)!="")
		{
			echo '<input type="hidden" name="footer_layout_name" value="'.$data['footer_layout_name'].'" readonly>';
		}
		else
		{
	?> 
	<ul class="common_setting">
		<li>  
			<ul class="inner">
				<li><h4>Enter Layout Name: </h4><input type="text" name="footer_layout_name" value="" required />
				<div class="clearfix"></div>
				</li>
				<div class="clearfix"></div>
			</ul>
		</li>
	</ul>
	<?php 
		} 
	?>
	<div id="editselected_layout"><div class='empty'><p>Select Footer Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="footer_editlayout_submit" class="button button-primary" value="Save Layout"><input type="submit" name="footer_deletelayout_submit" class="button button-primary" value="Delete Layout"></p> </div>
</form>

<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
			jQuery.ajax({
				type: 'post',
				data:'layout=<?php echo esc_attr($layout); ?>',
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footers/templates/edit_basic_footer.php",
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
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#editfooter_layout_template').change(function(){ //Edit saved footer_cta layout
			var footer_cta = $(this).val();
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footers/templates/edit_basic_footer.php",
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
	   });
	   
	  
	  });
	  
	
</script>