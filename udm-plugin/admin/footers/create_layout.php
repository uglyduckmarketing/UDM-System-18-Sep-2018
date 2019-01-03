<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
$layout = '';
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('footer_layout_'.$layout));
?>
<form method="post" action="" enctype="multipart/form-data">	
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
	<div id="selected_layout"></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="footer_createlayout_submit" class="button button-primary" value="Save Layout"></p> </div>
</form> 

<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footers/templates/basic_footer.php",
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
	  });
</script>