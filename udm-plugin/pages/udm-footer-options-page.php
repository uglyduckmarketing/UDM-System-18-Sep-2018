<?php

$prevlayout="";
	if(isset($_POST['footer_createlayout_submit']))  //check if "footer_createlayout_submit" submit button is clicked
	{	
		$footer_layout = serialize($_POST);  // Get form fields data
		if(get_option('footer_layout_'.$_POST["footer_layout_name"]) === FALSE){ //check footer layout exist in options or not
			add_option('footer_layout_'.$_POST["footer_layout_name"],  $footer_layout ); //Insert footer layout in options
		}else{
			echo "<h6 style='color: red; padding: 20px 0 10px 5px;'>You can't add same name layout. Please add different layout name.</h6>";
		}
	}
	if(isset($_POST['footer_editlayout_submit']))  //check if "footer_editlayout_submit" submit button is clicked
	{
		
		$footer_layout = serialize($_POST);  // Get form fields data
		
		if(get_option('footer_layout_'.$_POST["footer_layout_name"]) === FALSE){ //check footer layout exist in options or not
			add_option('footer_layout_'.$_POST["footer_layout_name"],  $footer_layout ); //Insert footer layout in options
		}else{
			update_option('footer_layout_'.$_POST["footer_layout_name"], $footer_layout ); //Update footer layout in options
		}
		
		$prevlayout=$_POST['footer_layout_name'];
	}
	
	if(isset($_POST['footer_deletelayout_submit']))  //check if "footer_deletelayout_submit" submit button is clicked
	{
		delete_option( 'footer_layout_'.$_POST["footer_layout_name"]);
	}
	
	?>
<div class="preloader">
	<div class="loader">
	</div>
</div>	
<!-- Create footers section Start -->
<div class="wrap udm-opt footer_layouts">
	<h1>Footer Options</h1>
		<div class="container">
			<div class="row newsection">
				<div class="col-md-12">
					<div id="newlayout"><div class='empty'><p>Click the "Create New Layout" button below to start creating your layout.</p></div><a href="javascript:void(0);" id="newfeatlayout" class="button button-primary">Create new Layout</a></div>
				</div>
			</div>
			
		</div>
</div>
<!-- Create footers section End -->
<!-- Edit footers section Start -->
<div class="wrap udm-opt footer_layouts">
	<h1>Edit Layouts</h1>
		<div class="container">
			<div class="row editsection">
				<div class="col-md-12">
					<select name="editsavedlayout" id="editsavedlayout">
						<option value="">Default Layout <?php if(get_option('udm_footer_default')!=""){ echo "( ".str_replace("_"," ", get_option('udm_footer_default')).")"; } ?></option>	
						<?php  
							global $wpdb;
							$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'footer_layout_%'");
							foreach($layouts as $layout){
						?>
							<option value="<?php echo str_replace("footer_layout_","",$layout); ?>" <?php selected($prevlayout,str_replace("footer_layout_","",$layout)); ?> <?php if(get_option('udm_footer_default')==str_replace("footer_layout_","",$layout)){ echo ' class="selectedlayout" '; }  ?> ><?php echo str_replace("_"," ", str_replace("footer_layout_","",$layout)); ?></option>
						<?php	
							
							}
						?>
					</select>
					
					<div id="editlayout"><div class='empty'><p>Select footer Layout to change settings.</p></div></div>
				</div>
			</div>
			
		</div>
</div>
<!-- Edit footers section End -->
<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
		 <?php
			if($prevlayout!="")  //check if "footer_editlayout_submit" submit button is clicked
			{
		 ?>
		 jQuery.ajax({
					type: 'post',
					data:'layout='+'<?php echo $prevlayout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footers/edit_layout.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 setTimeout(function() {
								$(".preloader").hide()
							}, 3000);
					   },
					success: function(result) {
						$('#editlayout').html(result);
					}
			});
			
			<?php 
			
			}
			?>
			
	   $('#newfeatlayout').click(function(){ //Edit saved footer layout
				jQuery.ajax({
					type: 'post',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footers/create_layout.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						setTimeout(function() {
								$(".preloader").hide()
							}, 3000);
					   },
					success: function(result) {
						$('#newlayout').html(result);
					}
				});
	   });
	   
	   $('#editsavedlayout').change(function(){ //Edit saved footer layout
			var footer = $(this).val();
			jQuery.ajax({
					type: 'post',
					data:'layout='+footer,
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footers/edit_layout.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 setTimeout(function() {
								$(".preloader").hide()
							}, 3000);
					   },
					success: function(result) {
						$('#editlayout').html(result);
					}
			});
	   });
	  
	  });
	  
	
</script>


<div class="defaultdatasection">
	<h2>Default Colors</h2>
	<ul class="list">
		<li><span>Primary: </span> <input class="udm_color_picker" type="text" value="<?php echo get_option('udm_primary_color'); ?>" readonly="" /></li>
		<li><span>Secondary: </span> <input class="udm_color_picker" type="text" value="<?php echo get_option('udm_secondary_color'); ?>" readonly="" /></li>
		<li><span>Global Light: </span>  <input class="udm_color_picker" type="text" value="<?php echo get_option('udm_global_light'); ?>" readonly="" /></li>
		<li><span>Global Dark: </span>  <input class="udm_color_picker" type="text" value="<?php echo get_option('udm_global_dark'); ?>" readonly="" /></li>
	</ul>
</div>

<style>
.defaultdatasection span.wp-color-result-text {
    display: none;
}

.defaultdatasection .wp-picker-holder {
    display: none;
}

.defaultdatasection .wp-picker-container .hidden {
    display: none;
}

.defaultdatasection .wp-picker-input-wrap{
    display: none;
}

</style>