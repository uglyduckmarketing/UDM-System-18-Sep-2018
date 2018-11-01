<?php

	$prevlayout="";
	//blog Layout Start
	if(isset($_POST['blog_createlayout_submit']))  //check if "blog_createlayout_submit" submit button is clicked
	{
		
		$blog_layout = serialize($_POST);  // Get form fields data
		if($_POST["blog_layout_template"]=="1")
		{
			$blogname="Grid_".str_replace(" ","_",$_POST["blog_layout_name"]);  //blog layout number to save 
		}
		else if($_POST["blog_layout_template"]=="2")
		{
			$blogname="Cards_".str_replace(" ","_",$_POST["blog_layout_name"]);  //blog layout number to save 
		}
		
		if(get_option('blog_layout_'.$blogname) === FALSE){ //check blog layout exist in options or not
			add_option('blog_layout_'.$blogname,  $blog_layout ); //Insert blog layout in options
		}else{
			echo "<h6 style='color: red; padding: 20px 0 10px 5px;'>You can't add same name layout. Please add different layout name.</h6>";
		}
	}

	if(isset($_POST['blog_editlayout_submit']))  //check if "blog_createlayout_submit" submit button is clicked
	{
		$blog_layout = serialize($_POST);  // Get form fields data		print_r($blog_layout);
		if($_POST["blog_layout_template"]=="1")
		{
			$blogname="Grid_".str_replace(" ","_",$_POST["blog_layout_name"]);  //blog layout number to save 	
			$prevlayout=$blogname;
		}
		else if($_POST["blog_layout_template"]=="2")
		{
			$blogname="Cards_".str_replace(" ","_",$_POST["blog_layout_name"]);  //blog layout number to save 	
			$prevlayout=$blogname;
		}
		
		if(get_option('blog_layout_'.$blogname) === FALSE){ //check blog layout exist in options or not
			add_option('blog_layout_'.$blogname,  $blog_layout ); //Insert blog layout in options
		}else{
			update_option('blog_layout_'.$blogname, $blog_layout ); //Update blog layout in options
		}
	}
	
	if(isset($_POST['blog_deletelayout_submit']))  //check if "blog_createlayout_submit" submit button is clicked
	{
		
		if($_POST["blog_layout_template"]=="1")
		{
			$blogname="Grid_".str_replace(" ","_",$_POST["blog_layout_name"]);  //blog layout number to save 
		}
		else if($_POST["blog_layout_template"]=="2")
		{
			$blogname="Cards_".str_replace(" ","_",$_POST["blog_layout_name"]);  //blog layout number to save 
		}
		
		delete_option( 'blog_layout_'.$blogname );
	}
	?>
<div class="preloader">
	<div class="loader">
	</div>
</div>	
<div class="wrap udm-opt blog_layouts">
	<h1>Blog Options</h1>
		<div class="container">
			<div class="row newsection">
				<div class="col-md-12">
					<div id="newlayout"><div class='empty'><p>Click the "Create New Layout" button below to start creating your layout.</p></div><a href="javascript:void(0);" id="newfeatlayout" class="button button-primary">Create new Layout</a></div>
				</div>
			</div>
			<!-- Edit blog section End -->
		</div>
</div>

<div class="wrap udm-opt blog_layouts">
	<h1>Edit Layouts</h1>
		<div class="container">
			<div class="row editsection">
				<div class="col-md-12">
					<select name="editsavedlayout" id="editsavedlayout">
						<option value="">Default Layout <?php if(get_option('udm_blog_default')!=""){ echo "( ".str_replace("_"," ", get_option('udm_blog_default')).")"; } ?></option>	
						<?php  
							global $wpdb;
							$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'blog_layout_%'");
							foreach($layouts as $layout){
						?>
							<option value="<?php echo str_replace("blog_layout_","",$layout); ?>" <?php selected($prevlayout,str_replace("blog_layout_","",$layout)); ?>  <?php if(get_option('udm_blog_default')==str_replace("blog_layout_","",$layout)){ echo ' class="selectedlayout"'; } ?>><?php echo str_replace("_"," ", str_replace("blog_layout_","",$layout)); ?></option>
						<?php	
							
							}
						?>
					</select>
					
					<div id="editlayout"><div class='empty'><p>Select Blog Layout to change settings.</p></div></div>
				</div>
			</div>
			<!-- Edit blog section End -->
		</div>
</div>

<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
		
		$('.udm_color_picker').wpColorPicker();  //Add color picker 		
	   $('#newfeatlayout').click(function(){ //Edit saved blog layout
				jQuery.ajax({
					type: 'post',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/blog/create_layout.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					success: function(result) {
						$('#newlayout').html(result);
					},
					   complete: function(){
						setTimeout(function() {
								$(".preloader").hide()
							}, 3000);
					   }
				});
	   });
	   
	   $('#editsavedlayout').change(function(){ //Edit saved blog layout
			var blog = $(this).val();
			jQuery.ajax({
					type: 'post',
					data:'layout='+blog,
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/blog/edit_layout.php",
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
	   });	   
	   <?php 
			if($prevlayout!="")
			{
	   ?>
	   jQuery.ajax({
		   type: 'post',
		   data:'layout='+'<?php echo $prevlayout; ?>',
		   url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/blog/edit_layout.php",
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