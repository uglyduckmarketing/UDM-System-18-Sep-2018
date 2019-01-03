<?php
$prevlayout="";
	/*if(isset($_POST['service_cta_footer_submit'])){
		$service_cta_layout = serialize($_POST);
		update_option('service_footer_cta_layout_data',  $service_cta_layout );
	}*/
	if(isset($_POST['service_cta_createlayout_submit']))  //check if "service_cta_createlayout_submit" submit button is clicked
	{
		
		$service_cta_layout = serialize($_POST);  // Get form fields data
		if($_POST["service_cta_layout_template"]=="1")
		{
			$service_ctaname="Split_CTA_".str_replace(" ","_",$_POST["service_cta_layout_name"]);  //service_cta layout number to save 
		}
		else if($_POST["service_cta_layout_template"]=="2")
		{
			$service_ctaname="Fullwidth_CTA_".str_replace(" ","_",$_POST["service_cta_layout_name"]);  //service_cta layout number to save 
		}
		
		
		if(get_option('service_cta_layout_'.$service_ctaname) === FALSE){ //check service_cta layout exist in options or not
			add_option('service_cta_layout_'.$service_ctaname,  $service_cta_layout ); //Insert service_cta layout in options
		}else{
			echo "<h6 style='color: red; padding: 20px 0 10px 5px;'>You can't add same name layout. Please add different layout name.</h6>";
		}
	}

	if(isset($_POST['service_cta_editlayout_submit']))  //check if "service_cta_editlayout_submit" submit button is clicked
	{
		
		$service_cta_layout = serialize($_POST);  // Get form fields data
		if($_POST["service_cta_layout_template"]=="1")
		{
			$service_ctaname="Split_CTA_".str_replace(" ","_",$_POST["service_cta_layout_name"]);  //service_cta layout number to save 	
			$prevlayout=$service_ctaname;
		}
		else if($_POST["service_cta_layout_template"]=="2")
		{
			$service_ctaname="Fullwidth_CTA_".str_replace(" ","_",$_POST["service_cta_layout_name"]);  //service_cta layout number to save 		
			$prevlayout=$service_ctaname;
		}
		
		
		if(get_option('service_cta_layout_'.$service_ctaname) === FALSE){ //check footer_cta layout exist in options or not
			add_option('service_cta_layout_'.$service_ctaname,  $service_cta_layout ); //Insert service_cta layout in options
		}else{
			update_option('service_cta_layout_'.$service_ctaname, $service_cta_layout ); //Update service_cta layout in options
		}
	}
	
	if(isset($_POST['service_cta_deletelayout_submit']))  //check if "service_cta_deletelayout_submit" submit button is clicked
	{
		
		if($_POST["service_cta_layout_template"]=="1")
		{
			$service_ctaname="Split_CTA_".str_replace(" ","_",$_POST["service_cta_layout_name"]);  //service_cta layout number to save 
		}
		else if($_POST["service_cta_layout_template"]=="2")
		{
			$service_ctaname="Fullwidth_CTA_".str_replace(" ","_",$_POST["service_cta_layout_name"]);  //service_cta layout number to save 
		}
		
		delete_option( 'service_cta_layout_'.$service_ctaname );
	}
	?>
<div class="preloader">
	<div class="loader">
	</div>
</div>	
	<!-- Create footer_cta section Start -->
<div class="wrap udm-opt footer_cta_layouts custom_layout clearfix">
	<h1>Service CTA Options</h1>
		<div class="container">
			<?php /*<div class="row newsection">
				<div class="col-md-12">
					<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="#servicectasettings">Services CTA</a>
	</h2>
	<form method="post" action="" enctype="multipart/form-data">
	<?php $ctadata=unserialize(get_option('service_footer_cta_layout_data')); ?>

			<ul id="servicectasettings" class="hero_type_style collapse show basic_hero common_setting">
				<li><h4>Eyebrow Text: </h4>
					<input type="text" name="cta_eyebrow" value="<?php echo isset($ctadata['cta_eyebrow']) ? $ctadata['cta_eyebrow'] : ''; ?>">
				</li>
				<li><h4>Heading Text: </h4>
					<input type="text" name="cta_heading" value="<?php echo isset($ctadata['cta_heading']) ? $ctadata['cta_heading'] : ''; ?>">
				</li>
				<?php $ctaheading = isset($ctadata['cta_description']) ? $ctadata['cta_description'] : ''; ?>
				<li><h4>Description: </h4>
					<textarea rows="5" name="cta_description"><?php echo $ctaheading; ?></textarea>
				</li>
				<li class="colorchange"><h4>CTA Eyebrow: </h4>
					<select name="cta_eyebrow_color" id="cta_eyebrow_color">
						<option value="primary" <?php selected('primary',$ctadata['cta_eyebrow_color']); ?>>Primary</option>
						<option value="secondary" <?php selected('secondary',$ctadata['cta_eyebrow_color']); ?>>Secondary</option>
						<option value="global_light" <?php selected('global_light',$ctadata['cta_eyebrow_color']); ?>>Global Light</option>
						<option value="global_dark" <?php selected('global_dark',$ctadata['cta_eyebrow_color']); ?>>Global Dark</option>
						<option value="custom" <?php selected('custom',$ctadata['cta_eyebrow_color']); ?>>Custom</option>	
					</select>
					<div class="clearfix"></div>
					<ul class="customcolor" <?php if($ctadata['cta_eyebrow_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
						<li><h4>CTA Eyebrow Custom Color: </h4>
							<input class="udm_color_picker" type="text" name="cta_eyebrow_custom_color" value="<?php echo esc_attr($ctadata['cta_eyebrow_custom_color']); ?>" />
							<div class="clearfix"></div>
						</li>
					</ul>
				</li>
				<li class="colorchange"><h4>CTA Heading Color: </h4>
					<select name="cta_heading_color" id="cta_heading_color">
						<option value="primary" <?php selected('primary',$ctadata['cta_heading_color']); ?>>Primary</option>
						<option value="secondary" <?php selected('secondary',$ctadata['cta_heading_color']); ?>>Secondary</option>
						<option value="global_light" <?php selected('global_light',$ctadata['cta_heading_color']); ?>>Global Light</option>
						<option value="global_dark" <?php selected('global_dark',$ctadata['cta_heading_color']); ?>>Global Dark</option>
						<option value="custom" <?php selected('custom',$ctadata['cta_heading_color']); ?>>Custom</option>
					</select>
					<div class="clearfix"></div>
					<ul class="customcolor" <?php if($ctadata['cta_heading_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
						<li><h4>CTA Heading Custom Color: </h4>
							<input class="udm_color_picker" type="text" name="cta_heading_custom_color" value="<?php echo esc_attr($ctadata['cta_heading_custom_color']); ?>" />
							<div class="clearfix"></div>
						</li>
					</ul>
				</li>
				<li class="colorchange"><h4>CTA Description Color: </h4>
					<select name="cta_description_color" id="cta_description_color">
						<option value="primary" <?php selected('primary',$ctadata['cta_description_color']); ?>>Primary</option>
						<option value="secondary" <?php selected('secondary',$ctadata['cta_description_color']); ?>>Secondary</option>
						<option value="global_light" <?php selected('global_light',$ctadata['cta_description_color']); ?>>Global Light</option>
						<option value="global_dark" <?php selected('global_dark',$ctadata['cta_description_color']); ?>>Global Dark</option>
						<option value="custom" <?php selected('custom',$ctadata['cta_description_color']); ?>>Custom</option>
					</select>
					<div class="clearfix"></div>
					<ul class="customcolor"  <?php if($ctadata['cta_description_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
						<li><h4>CTA Description Custom Color: </h4>
							<input class="udm_color_picker" type="text" name="cta_description_custom_color" value="<?php echo esc_attr($ctadata['cta_description_custom_color']); ?>" />
							<div class="clearfix"></div>
						</li>
					</ul>
				</li>
				<li class="colorchange"><h4>Choose background color: </h4>
					<select name="cta_background_color" id="cta_background_color">
						<option value="primary" <?php selected('primary',$ctadata['cta_background_color']); ?>>Primary</option>
						<option value="secondary" <?php selected('secondary',$ctadata['cta_background_color']); ?>>Secondary</option>
						<option value="global_light" <?php selected('global_light',$ctadata['cta_background_color']); ?>>Global Light</option>
						<option value="global_dark" <?php selected('global_dark',$ctadata['cta_background_color']); ?>>Global Dark</option>
						<option value="custom" <?php selected('custom',$ctadata['cta_background_color']); ?>>Custom</option>
					</select>
					<div class="clearfix"></div>
					<ul class="customcolor" <?php if($ctadata['cta_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
						<li><h4>Background Custom Color: </h4>
							<input class="udm_color_picker" type="text" name="cta_background_custom_color" value="<?php echo esc_attr($ctadata['cta_background_custom_color']); ?>" />
							<div class="clearfix"></div>
						</li>
					</ul>
				</li>
				<li><h4>Choose Button/Form</h4>
					<select id="cta_choose_button_form" name="cta_choose_button_form">
						<option value="button" <?php selected('button',$ctadata['cta_choose_button_form']); ?>>Button</option>
						<option value="form" <?php selected('form',$ctadata['cta_choose_button_form']); ?>>Form</option>
					</select>
					<div class="clearfix"></div>
				</li> 
				<?php $choose_btn_form = isset($ctadata['cta_choose_button_form']) ? $ctadata['cta_choose_button_form'] : ''; ?>
				<li class="show_button_f custom_btn_style" <?php if($choose_btn_form == 'form'){ echo 'style="display:none;"'; } ?>>
					<div class="own_fields own_input_field_text"><h4>Button Text</h4><input type="text" class="" name="cta_button_text" value="<?php echo esc_attr($ctadata['cta_button_text']); ?>" />
					<div class="clearfix"></div>
					</div>
					<div class="own_fields own_input_field_text"><h4>Button Link</h4><input type="text" class="" name="cta_button_link" value="<?php echo esc_attr($ctadata['cta_button_link']); ?>" />
					<div class="clearfix"></div>
					</div>
					<div class="own_fields own_input_field_text">
						<div class="own_label colorchange custom_color_chng">
							<h4>Button Color</h4>
							<select name="cta_button_color" id="cta_button_color">
								<option value="primary" <?php selected('primary',$ctadata['cta_button_color']); ?>>Primary</option>
								<option value="secondary" <?php selected('secondary',$ctadata['cta_button_color']); ?> >Secondary</option>
								<option value="global_light" <?php selected('global_light',$ctadata['cta_button_color']); ?> >Global Light</option>
								<option value="global_dark" <?php selected('global_dark',$ctadata['cta_button_color']); ?> >Global Dark</option>
								<option value="custom" <?php selected('custom',$ctadata['cta_button_color']); ?> >Custom</option>
							</select>
							<div class="clearfix"></div>
							<ul class="customcolor" <?php if($ctadata['cta_button_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
								<li><h4>Button Custom Color: </h4>
									<input class="udm_color_picker" type="text" name="cta_button_custom_color" value="<?php echo esc_attr($ctadata['cta_button_custom_color']); ?>" />
									<div class="clearfix"></div>
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="own_fields own_input_field_text">
						<div class="own_label colorchange custom_color_chng">
							<h4>Button Text Color</h4>
							<select name="cta_button_text_color" id="cta_button_text_color">
								<option value="primary" <?php selected('primary',$ctadata['cta_button_text_color']); ?>>Primary</option>
								<option value="secondary" <?php selected('secondary',$ctadata['cta_button_text_color']); ?>>Secondary</option>
								<option value="global_light" <?php selected('global_light',$ctadata['cta_button_text_color']); ?>>Global Light</option>
								<option value="global_dark" <?php selected('global_dark',$ctadata['cta_button_text_color']); ?>>Global Dark</option>
								<option value="custom" <?php selected('custom',$ctadata['cta_button_text_color']); ?>>Custom</option>
							</select>
							<div class="clearfix"></div>
							<ul class="customcolor" <?php if($ctadata['cta_button_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
								<li><h4>Button Text Custom Color: </h4>
									<input class="udm_color_picker" type="text" name="cta_button_text_custom_color" value="<?php echo esc_attr($ctadata['cta_button_text_custom_color']); ?>" />
									<div class="clearfix"></div>
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</li>
				<?php $choose_ninja_form = isset($ctadata['cta_choose_ninja_form']) ? $ctadata['cta_choose_ninja_form'] : ''; ?>
				<li class="showform"  <?php if($choose_btn_form == ''){ ?> style="display:none;" <?php }else if($choose_btn_form == 'button'){ ?> style="display:none;" <?php }  ?>>
					<h4>Ninja Form</h4>
					<?php global $wpdb; 
						$tblname = $wpdb->prefix.'nf3_forms';
						$ninjaform = $wpdb->get_results("select * from $tblname order by created_at DESC");
					?>
					<select id="" name="cta_choose_ninja_form">
						<option value="">Select</option>
						<?php
							foreach($ninjaform as $list){
								?>
								<option value="<?php echo esc_attr($list->id); ?>"  <?php selected($list->id,$choose_ninja_form); ?>><?php echo esc_attr($list->title); ?></option>
								<?php
							}
						?>
					</select>
					<div class="clearfix"></div>
				</li>
				<div class="clearfix"></div>
			</ul>
			<div class="uploaded_button"><p class="submit"><input type="submit" name="service_cta_footer_submit" class="button button-primary" value="Save Layout"></p> </div>
			</form>
				</div>
				
			</div>*/?>
			
			<div class="row newsection">
				<div class="col-md-12">
					<div id="newlayout"><div class='empty'><p>Click the "Create New Layout" button below to start creating your layout.</p></div><a href="javascript:void(0);" id="newfeatlayout" class="button button-primary">Create new Layout</a></div>
				</div>
			</div>
		</div> 
</div>
	<!-- Create footer_cta section End -->
	<!-- Edit footer_cta section Start -->
<div class="wrap udm-opt footer_cta_layouts custom_layout clearfix">
	<h1>Edit Layouts</h1>
		<div class="container">
			<div class="row editsection">
				<div class="col-md-12">
					<select name="editsavedlayout" id="editsavedlayout">
						<option value="">Default Layout <?php if(get_option('udm_service_cta_default')!=""){ echo "( ".str_replace("_"," ", get_option('udm_service_cta_default')).")"; } ?></option>	
					<?php  
						global $wpdb;
						$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'service_cta_layout_%'");
						foreach($layouts as $layout){
					?>
						<option value="<?php echo str_replace("service_cta_layout_","",$layout); ?>" <?php selected($prevlayout,str_replace("service_cta_layout_","",$layout)); ?> <?php if(get_option('udm_service_cta_default')==str_replace("service_cta_layout_","",$layout)){ echo ' class="selectedlayout"'; } ?>><?php echo str_replace("_"," ", str_replace("service_cta_layout_","",$layout)); ?></option>
					<?php	
						
						}
					?>
					</select>
					
					<div id="editlayout"><div class='empty'><p>Select Service CTA Layout to change settings.</p></div></div>
				</div>
			</div>
		
		</div>
</div>
	<!-- Edit footer_ctas section End -->
<!-- Theme Options JS -->
<script>
jQuery(document).ready(function($) {
	$('#cta_choose_button_form').on('change', function(){
			var val = $(this).val();
			if(val == 'button'){
				$('.showform select').val('');
				$('.show_button_f').show();
				$('.showform').hide();
			}else{
				$('.show_button_f input').val('');
				$('.show_button_f select').val('');
				$('.show_button_f').hide();
				$('.showform').show();
			}
		});
		$('.colorchange select').change(function(){
			if($(this).val() == "custom")
			{
				$(this).parent().find('.customcolor').show();
			}
			else
			{
				$(this).parent().find('.customcolor').hide();
			}
		});
	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
	$('#newfeatlayout').click(function(){ //Create footer_cta layout
		jQuery.ajax({
			type: 'get',
			url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/service-cta/create_layout.php",
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
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/service-cta/edit_layout.php",
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
	   url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/service-cta/edit_layout.php",	
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