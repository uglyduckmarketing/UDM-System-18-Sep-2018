<?php
$prevlayout="";
	if(isset($_POST['mobile_header_createlayout_submit']))  //check if "mobile_header_createlayout_submit" submit button is clicked
	{
		
		$mobile_header_layout = serialize($_POST);  // Get form fields data
	
		$mobile_headername=str_replace(" ","_",$_POST["mobile_header_layout_name"]);  //mobile_header layout number to save 
		
		if(get_option('mobile_header_layout_'.$mobile_headername) === FALSE){ //check mobile_header layout exist in options or not
			add_option('mobile_header_layout_'.$mobile_headername,  $mobile_header_layout ); //Insert mobile_header layout in options
		}else{
			update_option('mobile_header_layout_'.$mobile_headername, $mobile_header_layout ); //Update mobile_header layout in options
		}
	}
	//mobile_header Layout Start
	if(isset($_POST['mobile_header_editlayout_submit']))  //check if "mobile_header_editlayout_submit" submit button is clicked
	{
		$mobile_header_layout = serialize($_POST);  // Get form fields data.
		
		$mobile_headername=str_replace(" ","_",$_POST["mobile_header_layout_name"]); 
		$prevlayout=$mobile_headername;
		if(get_option('mobile_header_layout_'.$mobile_headername) === FALSE){ //check mobile_header layout exist in options or not
			add_option('mobile_header_layout_'.$mobile_headername,  $mobile_header_layout ); //Insert mobile_header layout in options
		}else{
		//	echo "<h6 style='color: red; padding: 20px 0 10px 5px;'>You can't add same name layout. Please add different layout name.</h6>";
			update_option('mobile_header_layout_'.$mobile_headername,  $mobile_header_layout );
		}	
	}
	
	if(isset($_POST['mobile_header_deletelayout_submit']))  //check if "mobile_header_deletelayout_submit" submit button is clicked
	{
		
		$mobile_headername=str_replace(" ","_",$_POST["mobile_header_layout_name"]); 
		
		delete_option( 'mobile_header_layout_'.$mobile_headername );
	}
	?>
<div class="preloader">
	<div class="loader">
	</div>
</div>	

<!-- Create mobile_header layout start -->
<div class="wrap udm-opt mobile_header_layouts custom_layout clearfix">
	<h1>Mobile Header Options</h1>
		<div class="container">
			<div class="row newsection">
				<div class="col-md-12">
					<div id="newlayout"><div class='empty'><p>Click the "Create New Layout" button below to start creating your layout.</p></div><a href="javascript:void(0);" id="newfeatlayout" class="button button-primary">Create new Layout</a></div>
				</div>
			</div>
		</div>  
</div>
<!-- Create mobile_headers section End -->
<!-- Edit mobile_header layout start -->
<div class="wrap udm-opt mobile_header_layouts custom_layout clearfix">
	<h1>Edit Layouts</h1>
		<div class="container">
			<div class="row editsection">
				<div class="col-md-12">
					<select name="editsavedlayout" id="editsavedlayout">
						<option value="">Default Layout <?php if(get_option('udm_mobile_header_default')!=""){ echo "( ".str_replace("_"," ", get_option('udm_mobile_header_default')).")"; } ?></option>	
						<?php  
							global $wpdb;
							$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'mobile_header_layout_%'");
							foreach($layouts as $layout){
						?>
							<option value="<?php echo str_replace("mobile_header_layout_","",$layout); ?>" <?php selected($prevlayout,str_replace("mobile_header_layout_","",$layout)); ?> <?php if(get_option('udm_mobile_header_default')==str_replace("mobile_header_layout_","",$layout)){ echo ' class="selectedlayout"'; } ?>><?php echo str_replace("_"," ", str_replace("mobile_header_layout_","",$layout)); ?></option>
						<?php	
							
							}
						?>
					</select>
					
					<div id="editlayout"><div class='empty'><p>Select Mobile Header Layout to change settings.</p></div></div>
				</div>
			</div>
			
		</div>
</div>
<!-- Edit mobile_headers section End -->
<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#newfeatlayout').click(function(){ //Create mobile_header layout
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-headers/create_layout.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 setTimeout(function() {
								$(".preloader").hide()
							}, 1000);
					   },
					success: function(result) {
						$('#newlayout').html(result);
					}
				});
	   });
	   
	   $('#editsavedlayout').change(function(){ //Edit saved mobile_header layout
			var mobile_header = $(this).val();
			jQuery.ajax({
					type: 'post',
					data:'layout='+mobile_header,
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-headers/edit_layout.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						setTimeout(function() {
								$(".preloader").hide()
							}, 1000);
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
		  url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/mobile-headers/edit_layout.php",
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
<div class="defaultdatasection custom_color_picker">
	<h2>Default Colors</h2>
	<ul class="list">
		<li><span>Primary: </span> <input class="udm_color_picker" type="text" value="<?php echo get_option('udm_primary_color'); ?>" readonly="" /></li>
		<li><span>Secondary: </span> <input class="udm_color_picker" type="text" value="<?php echo get_option('udm_secondary_color'); ?>" readonly="" /></li>
		<li><span>Global Light: </span>  <input class="udm_color_picker" type="text" value="<?php echo get_option('udm_global_light'); ?>" readonly="" /></li>
		<li><span>Global Dark: </span>  <input class="udm_color_picker" type="text" value="<?php echo get_option('udm_global_dark'); ?>" readonly="" /></li>
		<div class="clearfix"></div>
	</ul>
	<div class="clearfix"></div> 
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