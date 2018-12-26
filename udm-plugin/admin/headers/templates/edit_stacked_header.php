<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php';
		if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('header_layout_'.$layout));
?>
<!-- Theme Options JS -->
<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>

<ul id="editlayoutsettings" class="header_type_style collapse show stacked_header">
	
	<li>
		<h3>Logo size</h3>
		<select name="logo_size">
			<option value="default" <?php selected("default",isset($data['logo']) ? $data['logo'] : ''); ?>>Default</option>
			<option value="large" <?php selected("large",isset($data['logo']) ? $data['logo'] : ''); ?>>Large</option>
		</select>
	</li>
	<li>
		<h3>Logo Background</h3>
		<select name="logo_background_type" id="logo_background_type">
			<option value="color" <?php selected("color",$data['logo_background_type']); ?>>Color</option>
			<option value="image" <?php selected("image",$data['logo_background_type']); ?>>Image</option>
		</select>
		<ul id="logo_back_opt">
			<li class="colorchange" <?php if($data['logo_background_type']=="color"){}else{ ?> style="display:none;" <?php } ?>><h3>Logo Background Color: </h3>  
				<select name="logo_background_color" id="logo_background_color">					
					<option value="primary" <?php selected('primary',$data['logo_background_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['logo_background_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['logo_background_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['logo_background_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['logo_background_color']); ?>>Custom</option>
				</select> 
				<ul class="customcolor" <?php if($data['logo_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Button Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="logo_background_custom_color" value="<?php echo esc_attr($data['logo_background_custom_color']); ?>" />
					</li>
				</ul>
			</li>
			<li class="imageupload" <?php if($data['logo_background_type']=="image"){}else{ ?> style="display:none;" <?php } ?>>
				<h3>Logo Background Image</h3>
				<input type="text" name="logo_background_image" class="background-logo" value="<?php echo esc_attr($data['logo_background_image']); ?>">
				<input class="btn upload-image" my-attr="background-logo" type="button" value="Upload Image" />
			</li>
		</ul>
	</li>
	
	<li>
				<h3>Top Bar Style</h3>
				<select name="top_bar_style" id="top_bar_style">
					<option value="50_50" <?php selected('50_50',$data['top_bar_style']); ?>>50/50</option>
					<option value="1_3" <?php selected('1_3',$data['top_bar_style']); ?>>1/3</option>
				</select>
			</li>
			<li class="topbarwiget">
				<h2>Top Bar Widget</h2>
				<ul id="topbar_layouts">
					<li><h3>Navigation: </h3>
						<select name="navigation_top" id="navigation">
							<option value="">Select Menu</option>
							<?php $menus=wp_get_nav_menus();
								foreach( $menus as $item ) {
							?>
							<option value="<?php echo esc_attr($item->slug);  ?>" <?php selected($item->slug, $data['navigation_top'] ); ?>> <?php echo esc_attr($item->name);  ?></option>
							<?php
								}
							?>
						</select>
					</li>
					<?php
						if($data['top_bar_style']!="")
						{
							$layoutnew=$data['top_bar_style'];
							include get_template_directory() . "/udm-plugin/admin/headers/templates/stacked_topbar_layout.php";
						}
						else
						{
							$layoutnew="50_50";
							include get_template_directory() . "/udm-plugin/admin/headers/templates/stacked_topbar_layout.php";
						}
					?>
				</ul>
			</li>
	<li class="bottombarwiget">
		<h2>Bottom Bar Widget</h2>
		<div class="innerwidget">
			<ul class="bottombardata">
				<li class="colorchange"><h3>Background Color: </h3>
					<select name="bottombar_background_color" id="bottom_background_color">
						
						<option value="primary" <?php selected('primary',$data['bottombar_background_color']); ?>>Primary</option>
						<option value="secondary" <?php selected('secondary',$data['bottombar_background_color']); ?>>Secondary</option>
						<option value="global_light" <?php selected('global_light',$data['bottombar_background_color']); ?>>Global Light</option>
						<option value="global_dark" <?php selected('global_dark',$data['bottombar_background_color']); ?>>Global Dark</option>
						<option value="custom" <?php selected('custom',$data['bottombar_background_color']); ?>>Custom</option>
					</select>
					<ul class="customcolor" <?php if($data['bottombar_background_color']=="custom"){}else{ ?> style="display:none;"<?php } ?>>
						<li>
							<h3>Background Custom Color: </h3>
							<input class="udm_color_picker" type="text" name="bottombar_background_custom_color" value="<?php echo esc_attr($data['bottombar_background_custom_color']); ?>" />
						</li>
					</ul>
				</li>
				<li><h3>Navigation: </h3>
					<select name="navigation" id="navigation">
						<option value="">Select Menu</option>
						<?php $menus=wp_get_nav_menus();
								foreach( $menus as $item ) {
							?>
								<option value="<?php echo esc_attr($item->slug);  ?>" <?php selected($item->slug,$data['navigation']); ?> > <?php echo esc_attr($item->name);  ?></option>
							<?php
								}
							?>
					</select>
				</li>
				
				<li><h3>Drop Down Style: </h3>
					<select name="dropdownstyle" id="editdropdownstyle">
						<option value="">Select Style</option>
						<?php  
							global $wpdb;
							$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'submenu_layout_%'");
							foreach($layouts as $layout){
						?>
							<option value="<?php echo str_replace("submenu_layout_","",$layout); ?>" <?php selected(str_replace("submenu_layout_","",$layout),$data['dropdownstyle']); ?>><?php echo str_replace("_"," ", str_replace("submenu_layout_","",$layout)); ?></option>
						<?php	
							}
						?>
					</select>
				</li>
				<li class="colorchange"><h3>Navigation Link Color: </h3>
					<select name="bottombar_nav_link_color" id="bottombar_nav_link_color">
						
						<option value="primary" <?php selected('primary',$data['bottombar_nav_link_color']); ?>>Primary</option>
						<option value="secondary" <?php selected('secondary',$data['bottombar_nav_link_color']); ?>>Secondary</option>
						<option value="global_light" <?php selected('global_light',$data['bottombar_nav_link_color']); ?>>Global Light</option>
						<option value="global_dark" <?php selected('global_dark',$data['bottombar_nav_link_color']); ?>>Global Dark</option>
						<option value="custom" <?php selected('custom',$data['bottombar_nav_link_color']); ?>>Custom</option>
					</select>
					<ul class="customcolor" <?php if($data['bottombar_nav_link_color']=="custom"){}else{ ?> style="display:none;"<?php } ?>>
						<li>
							<h3>Background Custom Color: </h3>
							<input class="udm_color_picker" type="text" name="bottombar_nav_link_custom_color" value="<?php echo esc_attr($data['bottombar_nav_link_custom_color']); ?>" />
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!--<div class="innerwidget">
			<div id="bottombar" class="headwidget">
				<div class="empty">
					<p>Click the "Add widget" button below to start creating your layout.</p>
				</div>
			</div>
			<div class="create_bottombar_widget_button">
				<div class="dropup custom_design_dropdown">
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Add widget</button>
					<div class="dropdown-menu" id="newbottombarwidget">
						<a class="dropdown-item" href="javascript:void(0);" data-widget="1">Text</a>
						<a class="dropdown-item" href="javascript:void(0);" data-widget="2">Phone</a>
						<a class="dropdown-item" href="javascript:void(0);" data-widget="3">Social</a>
						<a class="dropdown-item" href="javascript:void(0);" data-widget="4">Button</a>
						<div class="arrow-down"></div>
					</div>
				</div>
			</div>
		</div>-->
		
	</li>
</ul>
<script>
	jQuery(document).ready(function($) {
		
		$('#header_topbar').change(function(){
			if($(this).prop("checked") == true)
			{
				$('#topbardata').show();
			}
			else
			{
				$('#topbardata').hide();
			}
		});
		$('.udm_color_picker').wpColorPicker();  //Add color picker 
			<?php
				if($data['bottombartext'] == 'yes')
				{ 
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=bottombar&header=<?php echo esc_attr($_POST['layout']); ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/text.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#bottombar').html(result);
					}
					});
					
			<?php 
				}
				else if($data['bottombarphone'] == 'yes')
				{				
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=bottombar&header=<?php echo esc_attr($_POST['layout']); ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/phone.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#bottombar').html(result);
					}
					});

			<?php 
				}
				else if($data['bottombarsocial'] == 'yes')
				{
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=bottombar&header=<?php echo esc_attr($_POST['layout']); ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/social.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#bottombar').html(result);
					}
					});
			<?php		
				}
				else if($data['bottombarbutton'] == 'yes')
				{
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=bottombar&header=<?php echo esc_attr($_POST['layout']); ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/button.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#bottombar').html(result);
					}
					});
			<?php	
				}
			?>	
			
			$('#newbottombarwidget a').click(function(){
				var widget = $(this).attr('data-widget');
				if (confirm("You are changing it to a new widget. 'Would you like to do that ' ?")) {
				if(widget == '1')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=bottombar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/text.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#bottombar').html(result);
						}
						});
					
				}
				else if(widget == '2')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=bottombar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/phone.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#bottombar').html(result);
						}
						});
					
				}
				else if(widget == '3')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=bottombar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/social.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#bottombar').html(result);
						
						}
						});

				}
				else if(widget == '4')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=bottombar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/button.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#bottombar').html(result);
							
						}
					});
				}
				}
			});					
	
	  $('.upload-image').click(function() {
		
				var mediaUploader;
				var myvar = $(this).attr('my-attr');	
				//e.preventDefault();
				// If the uploader object has already been created, reopen the dialog
				  if (mediaUploader) {
				  mediaUploader.open();
				  return;
				}
	    
				// Extend the wp.media object
				mediaUploader = wp.media.frames.file_frame = wp.media({
				  title: 'Choose Image',
				  button: {
				  text: 'Choose Image'
				}, multiple: false });
				
		
				// When a file is selected, grab the URL and set it as the text field's value
				mediaUploader.on('select', function() {
				  attachment = mediaUploader.state().get('selection').first().toJSON();
				  
				  $('.'+myvar).val(attachment.url);
				});
				// Open the uploader dialog
				mediaUploader.open();
			  });
		
		$('#logo_background_type').change(function(){
			if($(this).val() == "image")
			{
				$('#logo_back_opt li:nth-child(1)').hide();
				$('#logo_back_opt li:nth-child(2)').show();
			}
			else
			{
				$('#logo_back_opt li:nth-child(1)').show();
				$('#logo_back_opt li:nth-child(2)').hide();
			}
		});	
		
		$('#editright_side_widget').change(function(){
			if($(this).val() == "1")
			{
				$('#editcallactionwidget').hide();
				$('#editphonewidget').show();
			}
			else if($(this).val() == "2")
			{
				$('#editcallactionwidget').show();
				$('#editphonewidget').hide();
			}
			else
			{
				$('#editcallactionwidget').hide();
				$('#editphonewidget').hide();
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
		$('#top_bar_style').change(function(){
			var value = $(this).val();
			
			jQuery.ajax({
					type: 'post',
					data:'layoutnew='+value+'&layout=<?php echo esc_attr($layout); ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/stacked_topbar_layout.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#topbar_layouts').html(result);
					}
					});
		});	
	  });																		
</script>