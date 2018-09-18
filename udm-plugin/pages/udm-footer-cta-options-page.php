<?php
	if(isset($_POST['footer_cta_createlayout_submit']))  //check if "footer_cta_createlayout_submit" submit button is clicked
	{
		
		$footer_cta_layout = serialize($_POST);  // Get form fields data
		if($_POST["footer_cta_layout_template"]=="1")
		{
			$footer_ctaname="Split_CTA_".str_replace(" ","_",$_POST["footer_cta_layout_name"]);  //footer_cta layout number to save 
		}
		else if($_POST["footer_cta_layout_template"]=="2")
		{
			$footer_ctaname="Fullwidth_CTA_".str_replace(" ","_",$_POST["footer_cta_layout_name"]);  //footer_cta layout number to save 
		}
		
		
		if(get_option('footer_cta_layout_'.$footer_ctaname) === FALSE){ //check footer_cta layout exist in options or not
			add_option('footer_cta_layout_'.$footer_ctaname,  $footer_cta_layout ); //Insert footer_cta layout in options
		}else{
			update_option('footer_cta_layout_'.$footer_ctaname, $footer_cta_layout ); //Update footer_cta layout in options
		}
	}

	if(isset($_POST['footer_cta_editlayout_submit']))  //check if "footer_cta_editlayout_submit" submit button is clicked
	{
		
		$footer_cta_layout = serialize($_POST);  // Get form fields data
		if($_POST["footer_cta_layout_template"]=="1")
		{
			$footer_ctaname="Split_CTA_".str_replace(" ","_",$_POST["footer_cta_layout_name"]);  //footer_cta layout number to save 
		}
		else if($_POST["footer_cta_layout_template"]=="2")
		{
			$footer_ctaname="Fullwidth_CTA_".str_replace(" ","_",$_POST["footer_cta_layout_name"]);  //footer_cta layout number to save 
		}
		
		
		if(get_option('footer_cta_layout_'.$footer_ctaname) === FALSE){ //check footer_cta layout exist in options or not
			add_option('footer_cta_layout_'.$footer_ctaname,  $footer_cta_layout ); //Insert footer_cta layout in options
		}else{
			update_option('footer_cta_layout_'.$footer_ctaname, $footer_cta_layout ); //Update footer_cta layout in options
		}
	}
	
	if(isset($_POST['footer_cta_deletelayout_submit']))  //check if "footer_cta_deletelayout_submit" submit button is clicked
	{
		
		if($_POST["footer_cta_layout_template"]=="1")
		{
			$footer_ctaname="Split_CTA_".str_replace(" ","_",$_POST["footer_cta_layout_name"]);  //footer_cta layout number to save 
		}
		else if($_POST["footer_cta_layout_template"]=="2")
		{
			$footer_ctaname="Fullwidth_CTA_".str_replace(" ","_",$_POST["footer_cta_layout_name"]);  //footer_cta layout number to save 
		}
		
		delete_option( 'footer_cta_layout_'.$footer_ctaname );
	}
	?>
<div class="preloader">
	<div class="loader">
	</div>
</div>	
	<!-- Create footer_cta section Start -->
<div class="wrap udm-opt footer_cta_layouts">
	<h1>Footer CTA Options</h1>
		<div class="container">
			<div class="row newsection">
				<div class="col-md-12">
					<div id="newlayout"><div class='empty'><p>Click the "Create New Layout" button below to start creating your layout.</p></div><a href="javascript:void(0);" id="newfeatlayout" class="button button-primary">Create new Layout</a></div>
				</div>
			</div>
		
		</div>
</div>
	<!-- Create footer_cta section End -->
	<!-- Edit footer_cta section Start -->
<div class="wrap udm-opt footer_cta_layouts">
	<h1>Edit Layouts</h1>
		<div class="container">
			<div class="row editsection">
				<div class="col-md-12">
					<select name="editsavedlayout" id="editsavedlayout">
						<option value="">Default Layout <?php if(get_option('udm_footer_cta_default')!=""){ echo "( ".str_replace("_"," ", get_option('udm_footer_cta_default')).")"; } ?></option>	
					<?php  
						global $wpdb;
						$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'footer_cta_layout_%'");
						foreach($layouts as $layout){
					?>
						<option value="<?php echo str_replace("footer_cta_layout_","",$layout); ?>" <?php if(get_option('udm_footer_cta_default')==str_replace("footer_cta_layout_","",$layout)){ echo ' class="selectedlayout"'; } ?>><?php echo str_replace("_"," ", str_replace("footer_cta_layout_","",$layout)); ?></option>
					<?php	
						
						}
					?>
					</select>
					
					<div id="editlayout"><div class='empty'><p>Select Footer CTA Layout to change settings.</p></div></div>
				</div>
			</div>
		
		</div>
</div>
	<!-- Edit footer_ctas section End -->
<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#newfeatlayout').click(function(){ //Create footer_cta layout
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footer-cta/create_layout.php",
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
	   
	   $('#editsavedlayout').change(function(){ //Edit saved footer_cta layout
			var footer_cta = $(this).val();
			jQuery.ajax({
					type: 'post',
					data:'layout='+footer_cta,
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footer-cta/edit_layout.php",
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

