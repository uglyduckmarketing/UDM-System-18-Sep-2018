<?php
	$prevlayout="";
	if(isset($_POST['service_createlayout_submit']))  //check if "service_createlayout_submit" submit button is clicked
	{
		$service_layout = serialize($_POST);  // Get form fields data
		if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="1")
		{
			$servicename="Basic_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 
		}
		else if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="2")
		{
			$servicename="Fulwidth_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 
		} 
		else if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="3")
		{
			$servicename="Splitscreen_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 
		}
		else if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="4")
		{
			$servicename="Leftrightelement_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 
		}
		else if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="5")
		{
			$servicename="Leadgen_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 
		}else{
			$servicename=str_replace(" ","_",$_POST["service_layout_name"]);
		}
		
		if(get_option('service_layout_'.$servicename) === FALSE){ //check service layout exist in options or not
			add_option('service_layout_'.$servicename,  $service_layout ); //Insert service layout in options
		}else{
			echo "<h6 style='color: red; padding: 20px 0 10px 5px;'>You can't add same name layout. Please add different layout name.</h6>";
		}
	}

	if(isset($_POST['service_editlayout_submit']))  //check if "service_editlayout_submit" submit button is clicked
	{
		
		$service_layout = serialize($_POST);  // Get form fields data
		if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="1")
		{
			$servicename="Basic_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 		
			$prevlayout=$servicename;
		}
		else if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="2")
		{
			$servicename="Fulwidth_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 		
			$prevlayout=$servicename;
		}
		else if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="3")
		{
			$servicename="Splitscreen_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 		
			$prevlayout=$servicename;
		}
		else if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="4")
		{
			$servicename="Leftrightelement_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 		
			$prevlayout=$servicename;
		}
		else if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="5")
		{
			$servicename="Leadgen_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 		
			$prevlayout=$servicename;
		}else{
			$servicename=str_replace(" ","_",$_POST["service_layout_name"]);
			$prevlayout=$servicename;
		}
		
		if(get_option('service_layout_'.$servicename) === FALSE){ //check service layout exist in options or not
			add_option('service_layout_'.$servicename,  $service_layout ); //Insert service layout in options
		}else{
			update_option('service_layout_'.$servicename, $service_layout ); //Update service layout in options
		}		
	}
	
	if(isset($_POST['service_deletelayout_submit']))  //check if "service_deletelayout_submit" submit button is clicked
	{
		
		if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="1")
		{
			$servicename="Basic_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 
		}
		else if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="2")
		{
			$servicename="Fulwidth_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 
		}
		else if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="3")
		{
			$servicename="Splitscreen_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 
		}
		else if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="4")
		{
			$servicename="Leftrightelement_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 
		}
		else if(isset($_POST["service_layout_template"]) && $_POST["service_layout_template"]=="5")
		{
			$servicename="Leadgen_service_".str_replace(" ","_",$_POST["service_layout_name"]);  //service layout number to save 
		}else{
			$servicename=str_replace(" ","_",$_POST["service_layout_name"]);
		}
		delete_option( 'service_layout_'.$servicename );
	}
	?>
<div class="preloader">
	<div class="loader">
	</div>
</div>	
	<!-- Create service section Start -->
<div class="wrap udm-opt service_layouts custom_layout clearfix">
	<h1>Service Options</h1>
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
	<!-- Create service section End -->
	<!-- Edit service section Start -->
<div class="wrap udm-opt service_layouts custom_layout clearfix">
	<h1>Edit Layouts</h1>
	<div class="container">
		<div class="row editsection common_setting"> 
			<div class="col-md-12">
				<select name="editsavedlayout" id="editsavedlayout">
					<option value="">Default Layout <?php if(get_option('udm_service_default')!=""){ echo "( ".str_replace("_"," ", get_option('udm_service_default')).")"; } ?></option>	
				<?php  
					global $wpdb;
					$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'service_layout_%'");
					foreach($layouts as $layout){
				?>
					<option value="<?php echo str_replace("service_layout_","",$layout); ?>" <?php selected($prevlayout,str_replace("service_layout_","",$layout)); ?> <?php if(get_option('udm_service_default')==str_replace("service_layout_","",$layout)){ echo ' class="selectedlayout"'; } ?>><?php echo str_replace("_"," ", str_replace("service_layout_","",$layout)); ?></option>
				<?php	
					}
				?>
				</select>
				<div id="editlayout"><div class='empty'><p>Select service Layout to change settings.</p></div></div>
			</div>
		</div>
	</div>
</div>
<!-- Edit services section End -->
<!-- Theme Options JS -->
<script>
jQuery(document).ready(function($) {
	$('#savedeafultcolor').on('click', function(){
		jQuery.ajax({
				type: 'post',
				url: "<?php echo admin_url('admin-ajax.php'); ?>",
				data: {colorval1:$('#udm_primary_color').val(),colorval2:$('#udm_secondary_color').val(),colorval3:$('#udm_global_light').val(),colorval4:$('#udm_global_dark').val(),action:'change_defualt_color'},
				datatype: 'json',
				success: function(response){
					var obj = jQuery.parseJSON(response);
					if(obj.success){
						alert("saved successfully");
					}else{
						alert("please try again");
					}
				}
			});
	});
	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
	$('.udm_color_picker1').wpColorPicker(); //Add color picker on fields  
	$('#newfeatlayout').click(function(){ //Create service layout
		jQuery.ajax({
			type: 'get',
			url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/service/create_layout.php",
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
	   
   $('#editsavedlayout').change(function(){ //Edit saved service layout
		var service = $(this).val();
		jQuery.ajax({
				type: 'post',
				data:'layout='+service,
				url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/service/edit_layout.php",
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
			url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/service/edit_layout.php",	
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
	<?php } ?>
});
</script>
<div class="defaultdatasection custom_color_picker">
	<h2>Default Colors</h2>
	<ul class="list">
		<li><span>Primary: </span> <input id="udm_primary_color" class="udm_color_picker1" type="text" value="<?php echo get_option('udm_primary_color'); ?>"  /></li>
		<li><span>Secondary: </span> <input id="udm_secondary_color" class="udm_color_picker1" type="text" value="<?php echo get_option('udm_secondary_color'); ?>"  /></li>
		<li><span>Global Light: </span>  <input id="udm_global_light" class="udm_color_picker1" type="text" value="<?php echo get_option('udm_global_light'); ?>"  /></li>
		<li><span>Global Dark: </span>  <input id="udm_global_dark" class="udm_color_picker1" type="text" value="<?php echo get_option('udm_global_dark'); ?>"  /></li>
		<div class="clearfix"></div>
	</ul>
	<div class="clearfix"></div>
	<div class="defaultbutton submit">
		<button type="button" class="button button-primary" id="savedeafultcolor">Save</button>
	</div>
</div>