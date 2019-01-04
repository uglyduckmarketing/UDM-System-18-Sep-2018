<?php
	$prevlayout="";
	if(isset($_POST['header_createlayout_submit']))  //check if "header_createlayout_submit" submit button is clicked
	{
		
		$header_layout = serialize($_POST);  // Get form fields data
		if($_POST["header_layout_template"]=="1")
		{
			$headername="Basic_Header_".str_replace(" ","_",$_POST["header_layout_name"]);  //header layout number to save 
		}
		else if($_POST["header_layout_template"]=="2")
		{
			$headername="Stacked_Header_".str_replace(" ","_",$_POST["header_layout_name"]);  //header layout number to save 
		}
		else if($_POST["header_layout_template"]=="3")
		{
			$headername="Transparent_Header_".str_replace(" ","_",$_POST["header_layout_name"]);  //header layout number to save 
		}
		else if($_POST["header_layout_template"]=="4")
		{
			$headername="New_Header_".str_replace(" ","_",$_POST["header_layout_name"]);  //header layout number to save 
		}
		
		if(get_option('header_layout_'.$headername) === FALSE){ //check header layout exist in options or not
			add_option('header_layout_'.$headername,  $header_layout ); //Insert header layout in options
		}else{
			echo "<h6 style='color: red; padding: 20px 0 10px 5px;'>You can't add same name layout. Please add different layout name.</h6>"; 
		}
	}
	
	
	if(isset($_POST['header_editlayout_submit']))  //check if "header_createlayout_submit" submit button is clicked
	{
		$header_layout = serialize($_POST);  // Get form fields data
			if($_POST["header_layout_template"]=="1")
		{
			$headername="Basic_Header_".str_replace(" ","_",$_POST["header_layout_name"]);  //header layout number to save 
			$prevlayout=$headername;
		}
		else if($_POST["header_layout_template"]=="2")
		{
			$headername="Stacked_Header_".str_replace(" ","_",$_POST["header_layout_name"]);  //header layout number to save 
			$prevlayout=$headername;
		}
		else if($_POST["header_layout_template"]=="3")
		{
			$headername="Transparent_Header_".str_replace(" ","_",$_POST["header_layout_name"]);  //header layout number to save 
			$prevlayout=$headername;
		}
		else if($_POST["header_layout_template"]=="4")
		{
			$headername="New_Header_".str_replace(" ","_",$_POST["header_layout_name"]);
			$prevlayout=$headername;			//header layout number to save 
		}
		
		if(get_option('header_layout_'.$headername) === FALSE){ //check header layout exist in options or not
			add_option('header_layout_'.$headername,  $header_layout ); //Insert header layout in options
		}else{
			update_option('header_layout_'.$headername, $header_layout ); //Update header layout in options
		}
	}
	
	if(isset($_POST['header_deletelayout_submit']))  //check if "header_createlayout_submit" submit button is clicked
	{
		
		if($_POST["header_layout_template"]=="1")
		{
			$headername="Basic_Header_".str_replace(" ","_",$_POST["header_layout_name"]);  //header layout number to save 
		}
		else if($_POST["header_layout_template"]=="2")
		{
			$headername="Stacked_Header_".str_replace(" ","_",$_POST["header_layout_name"]);  //header layout number to save 
		}
		else if($_POST["header_layout_template"]=="3")
		{
			$headername="Transparent_Header_".str_replace(" ","_",$_POST["header_layout_name"]);  //header layout number to save 
		}
		else if($_POST["header_layout_template"]=="4")
		{
			$headername="New_Header_".str_replace(" ","_",$_POST["header_layout_name"]);  //header layout number to save 
		}
		delete_option( 'header_layout_'.$headername );
	}
	?>
<div class="preloader">
	<div class="loader">
	</div>
</div>	 
	<!-- Create headers section Start -->
<div class="wrap udm-opt header_layouts custom_layout clearfix">
	<h1>Header Options</h1>
	<div class="container">
		<div class="row newsection">
			<div class="col-md-12">   
				<div id="newlayout">
					<div class='empty'>
						<p>Click the "Create New Layout" button below to start creating your layout.</p>
					</div>
					<a href="javascript:void(0);" id="newfeatlayout" class="button button-primary">Create new Layout</a>
				</div>
			</div> 
		</div>
	</div>
</div>
	<!-- Create headers section End -->
	<!-- Edit headers section Start -->
<div class="wrap udm-opt header_layouts custom_layout clearfix">
	<h1>Edit Layouts</h1>
		<div class="container">
			<div class="row editsection">
				<div class="col-md-12">
					<select name="editsavedlayout" id="editsavedlayout">
						<option value="">Default Layout <?php if(get_option('udm_header_default')!=""){ echo "( ".str_replace("_"," ", get_option('udm_header_default')).")"; } ?></option>	
						<?php  
							global $wpdb;
							$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'header_layout_%'");
							foreach($layouts as $layout){
						?>
							<option value="<?php echo str_replace("header_layout_","",$layout); ?>" <?php selected($prevlayout,str_replace("header_layout_","",$layout)); ?>  <?php if(get_option('udm_header_default')==str_replace("header_layout_","",$layout)){ echo ' class="selectedlayout"'; } ?>><?php echo str_replace("_"," ", str_replace("header_layout_","",$layout)); ?></option>
						<?php								
							}
						?>
					</select>					
					<div id="editlayout">
						<div class='empty'><p>Select Header Layout to change settings.</p>
						</div>
					</div>					
				</div>  
			</div>
		</div>
</div>
	<!-- Edit headers section End -->
<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#newfeatlayout').click(function(){ //Create saved header layout
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/create_layout.php",
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
	   
	   $('#editsavedlayout').change(function(){ //Edit saved header layout
			var header = $(this).val();
			jQuery.ajax({
					type: 'post',
					data:'layout='+header,
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/edit_layout.php",
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
			url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/edit_layout.php",
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