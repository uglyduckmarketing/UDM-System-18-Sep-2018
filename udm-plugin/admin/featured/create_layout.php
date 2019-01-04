<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
$layout = '';
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('featured_layout_'.$layout));

?>

<form method="post" action="" enctype="multipart/form-data">	
	<ul class="common_setting">  
		<li>  
			<ul class="inner">
				<li><h4>Enter Layout Name: </h4>
					<input type="text" name="featured_layout_name" value="" required />
					<div class="clearfix"></div>
				</li>
				<li><h4>Select Template: </h4>
					<select name="featured_layout_template" id="featured_layout_template" required>
						<option value="">Select Template</option>
						<option value="1">Basic Hero</option>
						<option value="2">Fullwidth Hero</option>
						<option value="3">Splitscreen Hero</option>
						<option value="4">Left/Right Elements Hero</option> 
						<option value="5">Leadgen Hero</option> 
					</select>
					<div class="clearfix"></div>
				</li>
				<div class="clearfix"></div>
			</ul>
		</li> 
	</ul>
	<div id="selected_layout"><div class='empty'><p>Select Featured Layout Template to change settings.</p></div></div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="featured_createlayout_submit" class="button button-primary" value="Save Layout"></p> </div>
</form>

<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#featured_layout_template').change(function(){ //Edit saved featured layout
			var featured = $(this).val();
			if(featured == '1')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/basic_hero.php",
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
			else if(featured == '2')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/fullwidth_hero.php",
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
			else if(featured == '3')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/splitscreen_hero.php",
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
			else if(featured == '4')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/leftrightelement_hero.php",
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
			else if(featured == '5')
			{
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/templates/leadgen_hero.php",
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
				$('#selected_layout').html("<div class='empty'><p>Select Featured Layout Template to change settings.</p></div>");
			}
	   });
	   
	  
	  });
</script>