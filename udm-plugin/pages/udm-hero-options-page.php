<?php
	$prevlayout="";
	if(isset($_POST['featured_createlayout_submit']))  //check if "featured_createlayout_submit" submit button is clicked
	{
		
		$featured_layout = serialize($_POST);  // Get form fields data
		if($_POST["featured_layout_template"]=="1")
		{
			$featuredname="Basic_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 
		}
		else if($_POST["featured_layout_template"]=="2")
		{
			$featuredname="Fulwidth_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 
		}
		else if($_POST["featured_layout_template"]=="3")
		{
			$featuredname="Splitscreen_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 
		}
		else if($_POST["featured_layout_template"]=="4")
		{
			$featuredname="Leftrightelement_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 
		}
		else if($_POST["featured_layout_template"]=="5")
		{
			$featuredname="Leadgen_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 
		}
		
		if(get_option('featured_layout_'.$featuredname) === FALSE){ //check featured layout exist in options or not
			add_option('featured_layout_'.$featuredname,  $featured_layout ); //Insert featured layout in options
		}else{
			echo "<h6 style='color: red; padding: 20px 0 10px 5px;'>You can't add same name layout. Please add different layout name.</h6>";
		}
	}

	if(isset($_POST['featured_editlayout_submit']))  //check if "featured_editlayout_submit" submit button is clicked
	{
		
		$featured_layout = serialize($_POST);  // Get form fields data
		if($_POST["featured_layout_template"]=="1")
		{
			$featuredname="Basic_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 		
			$prevlayout=$featuredname;
		}
		else if($_POST["featured_layout_template"]=="2")
		{
			$featuredname="Fulwidth_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 		
			$prevlayout=$featuredname;
		}
		else if($_POST["featured_layout_template"]=="3")
		{
			$featuredname="Splitscreen_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 		
			$prevlayout=$featuredname;
		}
		else if($_POST["featured_layout_template"]=="4")
		{
			$featuredname="Leftrightelement_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 		
			$prevlayout=$featuredname;
		}
		else if($_POST["featured_layout_template"]=="5")
		{
			$featuredname="Leadgen_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 		
			$prevlayout=$featuredname;
		}
		
		if(get_option('featured_layout_'.$featuredname) === FALSE){ //check featured layout exist in options or not
			add_option('featured_layout_'.$featuredname,  $featured_layout ); //Insert featured layout in options
		}else{
			update_option('featured_layout_'.$featuredname, $featured_layout ); //Update featured layout in options
		}		
	}
	
	if(isset($_POST['featured_deletelayout_submit']))  //check if "featured_deletelayout_submit" submit button is clicked
	{
		
		if($_POST["featured_layout_template"]=="1")
		{
			$featuredname="Basic_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 
		}
		else if($_POST["featured_layout_template"]=="2")
		{
			$featuredname="Fulwidth_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 
		}
		else if($_POST["featured_layout_template"]=="3")
		{
			$featuredname="Splitscreen_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 
		}
		else if($_POST["featured_layout_template"]=="4")
		{
			$featuredname="Leftrightelement_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 
		}
		else if($_POST["featured_layout_template"]=="5")
		{
			$featuredname="Leadgen_Hero_".str_replace(" ","_",$_POST["featured_layout_name"]);  //featured layout number to save 
		}
		delete_option( 'featured_layout_'.$featuredname );
	}
	?>
<div class="preloader">
	<div class="loader">
	</div>
</div>	
	<!-- Create featured section Start -->
<div class="wrap udm-opt featured_layouts">
	<h1>Hero Options</h1>
		<div class="container">
			<div class="row newsection">
				<div class="col-md-12">
					<div id="newlayout"><div class='empty'><p>Click the "Create New Layout" button below to start creating your layout.</p></div><a href="javascript:void(0);" id="newfeatlayout" class="button button-primary">Create new Layout</a></div>
				</div>
			</div>
		
		</div>
</div>
	<!-- Create featured section End -->
	<!-- Edit featured section Start -->
<div class="wrap udm-opt featured_layouts">
	<h1>Edit Layouts</h1>
		<div class="container">
			<div class="row editsection">
				<div class="col-md-12">
					<select name="editsavedlayout" id="editsavedlayout">
						<option value="">Default Layout <?php if(get_option('udm_hero_default')!=""){ echo "( ".str_replace("_"," ", get_option('udm_hero_default')).")"; } ?></option>	
					<?php  
						global $wpdb;
						$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'featured_layout_%'");
						foreach($layouts as $layout){
					?>
						<option value="<?php echo str_replace("featured_layout_","",$layout); ?>" <?php selected($prevlayout,str_replace("featured_layout_","",$layout)); ?> <?php if(get_option('udm_hero_default')==str_replace("featured_layout_","",$layout)){ echo ' class="selectedlayout"'; } ?>><?php echo str_replace("_"," ", str_replace("featured_layout_","",$layout)); ?></option>
					<?php	
						
						}
					?>
					</select>
					
					<div id="editlayout"><div class='empty'><p>Select Featured Layout to change settings.</p></div></div>
				</div>
			</div>
		
		</div>
</div>
	<!-- Edit featureds section End -->
<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
	  	
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		 
	   $('#newfeatlayout').click(function(){ //Create featured layout
				jQuery.ajax({
					type: 'get',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/create_layout.php",
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
	   
	   $('#editsavedlayout').change(function(){ //Edit saved featured layout
			var featured = $(this).val();
			jQuery.ajax({
					type: 'post',
					data:'layout='+featured,
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/edit_layout.php",
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
	  data:'layout='+'<?php echo $prevlayout; ?>',
	  url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/featured/edit_layout.php",	
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

