<?php
	$prevlayout="";
	//mobile_nav Layout Start
	if(isset($_POST['mobile_nav_createlayout_submit']))  //check if "mobile_nav_createlayout_submit" submit button is clicked
	{
		$mobile_nav_layout = serialize($_POST);  // Get form fields data
		if($_POST["mobile_nav_layout_template"]=="1")
		{
			$mobile_navname="Basic_Slidedown_".str_replace(" ","_",$_POST["mobile_nav_layout_name"]);  //mobile_nav layout number to save 
		}
		else if($_POST["mobile_nav_layout_template"]=="2")
		{
			$mobile_navname="Basic_Overlay_".str_replace(" ","_",$_POST["mobile_nav_layout_name"]);  //mobile_nav layout number to save 
		}
		else if($_POST["mobile_nav_layout_template"]=="3")
		{
			$mobile_navname="Slide_In_".str_replace(" ","_",$_POST["mobile_nav_layout_name"]);  //mobile_nav layout number to save 
		}
		
		if(get_option('mobile_nav_layout_'.$mobile_navname) === FALSE){ //check mobile_nav layout exist in options or not
			add_option('mobile_nav_layout_'.$mobile_navname,  $mobile_nav_layout ); //Insert mobile_nav layout in options
		}else{
			echo "<h6 style='color: red; padding: 20px 0 10px 5px;'>You can't add same name layout. Please add different layout name.</h6>";
		}
	}
	//mobile_nav Layout Start
	if(isset($_POST['mobile_nav_editlayout_submit']))  //check if "mobile_nav_editlayout_submit" submit button is clicked
	{
		
		$mobile_nav_layout = serialize($_POST);  // Get form fields data
		if($_POST["mobile_nav_layout_template"]=="1")
		{
			$mobile_navname="Basic_Slidedown_".str_replace(" ","_",$_POST["mobile_nav_layout_name"]);  //mobile_nav layout number to save 		
			$prevlayout=$mobile_navname;
		}
		else if($_POST["mobile_nav_layout_template"]=="2")
		{
			$mobile_navname="Basic_Overlay_".str_replace(" ","_",$_POST["mobile_nav_layout_name"]);  //mobile_nav layout number to save 		
			$prevlayout=$mobile_navname;
		}
		else if($_POST["mobile_nav_layout_template"]=="3")
		{
			$mobile_navname="Slide_In_".str_replace(" ","_",$_POST["mobile_nav_layout_name"]);  //mobile_nav layout number to save 		
			$prevlayout=$mobile_navname;
		}
		
		if(get_option('mobile_nav_layout_'.$mobile_navname) === FALSE){ //check mobile_nav layout exist in options or not
			add_option('mobile_nav_layout_'.$mobile_navname,  $mobile_nav_layout ); //Insert mobile_nav layout in options
		}else{
			update_option('mobile_nav_layout_'.$mobile_navname, $mobile_nav_layout ); //Update mobile_nav layout in options
		}
	}
	
	if(isset($_POST['mobile_nav_deletelayout_submit']))  //check if "mobile_nav_deletelayout_submit" submit button is clicked
	{
		
		if($_POST["mobile_nav_layout_template"]=="1")
		{
			$mobile_navname="Basic_Slidedown_".str_replace(" ","_",$_POST["mobile_nav_layout_name"]);  //mobile_nav layout number to save 
		}
		else if($_POST["mobile_nav_layout_template"]=="2")
		{
			$mobile_navname="Basic_Overlay_".str_replace(" ","_",$_POST["mobile_nav_layout_name"]);  //mobile_nav layout number to save 
		}
		else if($_POST["mobile_nav_layout_template"]=="3")
		{
			$mobile_navname="Slide_In_".str_replace(" ","_",$_POST["mobile_nav_layout_name"]);  //mobile_nav layout number to save 
		}
		delete_option( 'mobile_nav_layout_'.$mobile_navname );
	}
	?>
<div class="preloader">
	<div class="loader">
	</div>
</div>	
	<!-- Create mobile_navs section Start -->
<div class="wrap udm-opt mobile_nav_layouts">
	<h1>Mobile Nav Options</h1>
		<div class="container">
			<div class="row newsection">
				<div class="col-md-12">
					<div id="newlayout"><div class='empty'><p>Click the "Create New Layout" button below to start creating your layout.</p></div><a href="javascript:void(0);" id="newfeatlayout" class="button button-primary">Create new Layout</a></div>
				</div>
			</div>
		
		</div>
</div>
	<!-- Create mobile_navs section End -->
	<!-- Edit mobile_navs section Start -->
<div class="wrap udm-opt mobile_nav_layouts">
	<h1>Edit Layouts</h1>
		<div class="container">
			<div class="row editsection">
				<div class="col-md-12">
					<select name="editsavedlayout" id="editsavedlayout">
						<option value="">Default Layout <?php if(get_option('udm_mobile_nav_default')!=""){ echo "( ".str_replace("_"," ", get_option('udm_mobile_nav_default')).")"; } ?></option>	
						<?php  
							global $wpdb;
							$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'mobile_nav_layout_%'");
							foreach($layouts as $layout){
						?>
							<option value="<?php echo str_replace("mobile_nav_layout_","",$layout); ?>" <?php selected($prevlayout,str_replace("mobile_nav_layout_","",$layout)); ?> <?php if(get_option('udm_mobile_nav_default')==str_replace("mobile_nav_layout_","",$layout)){ echo ' class="selectedlayout"'; } ?>><?php echo str_replace("_"," ", str_replace("mobile_nav_layout_","",$layout)); ?></option>
						<?php	
							
							}
						?>
					</select>
					
					<div id="editlayout"><div class='empty'><p>Select Mobile Nav Layout to change settings.</p></div></div>
				</div>
			</div>
		
		</div>
</div>
	<!-- Edit mobile_navs section End -->
<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#newfeatlayout').click(function(){ //Edit saved mobile_nav layout
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-nav/create_layout.php",
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
	   
	   $('#editsavedlayout').change(function(){ //Edit saved mobile_nav layout
			var mobile_nav = $(this).val();
			jQuery.ajax({
					type: 'post',
					data:'layout='+mobile_nav,
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-nav/edit_layout.php",
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
	  <?php if($prevlayout!=""){ ?>
	  jQuery.ajax({
		  type: 'post',
		  data:'layout='+'<?php echo isset($prevlayout) ? $prevlayout : ''; ?>',
		  url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-nav/edit_layout.php",
		  beforeSend: function(){
			  $(".preloader").show();
			  },
		  success: function(result) {
			$('#editlayout').html(result);
			},	
		  complete: function(){	
			  setTimeout(function() {	
				$(".preloader").hide()		
			  }, 3000);		
			}			
		});	
		<?php 
		  } 	
		?>
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