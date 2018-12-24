<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php'; 
?>
<!-- Theme Options JS -->
<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>
<ul id="layoutsettings" class="header_type_style collapse show new_two_header">
	<li>
		<h3>Logo size</h3>
		<select name="logo_size">
			<option value="default">Default
			</option>
			<option value="large">Large
			</option>
		</select>
	</li>
	<li>
		<h3>Logo Background</h3>
		<select name="logo_background_type" id="logo_background_type">
			<option value="color">Color</option>
			<option value="image">Image</option>
		</select>
		<ul id="logo_back_opt">
			<li class="colorchange">
				<h3>Logo Background Color</h3>
				<select name="logo_background_color" id="logo_background_color">
						
						<option value="primary">Primary</option>
						<option value="secondary">Secondary</option>
						<option value="global_light">Global Light</option>
						<option value="global_dark">Global Dark</option>
						<option value="custom" selected>Custom</option>
				</select>
				<ul class="customcolor">
					<li>
						<h3>Logo Background Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="logo_background_custom_color" value="#fff" />
					</li>
				</ul>
			</li>
			<li class="imageupload" style="display:none;">
				<h3>Logo Background Image</h3>
				<input type="text" name="logo_background_image" class="background-logo" value="">
				<input class="btn upload-image" my-attr="background-logo" type="button" value="Upload Image" />
			</li>
		</ul>
	</li>
	<li>
		<h3>Top Bar Style</h3>
		<select name="top_bar_style" id="top_bar_style">
			<option value="50_50">50/50</option>
			<option value="1_3">1/3</option>
		</select>
	</li>
	<li class="topbarwiget">
		<h2>Top Bar Widget</h2>
		<ul id="topbar_layouts">
		
			<?php
				include get_template_directory() . "/udm-plugin/admin/headers/templates/new_topbar_layout.php";
			?>
		</ul>
	</li>
	<li class="bottombarwiget">
		<h2>Bottom Bar Widget</h2>
		<div class="innerwidget">
			<ul class="bottombardata">
				<li class="colorchange"><h3>Background Color: </h3>
					<select name="bottombar_background_color" id="bottombar_background_color">
						
						<option value="primary">Primary</option>
						<option value="secondary">Secondary</option>
						<option value="global_light" selected>Global Light</option>
						<option value="global_dark">Global Dark</option>
						<option value="custom">Custom</option>
					</select>
					<ul class="customcolor" style="display:none;">
						<li>
							<h3>Background Custom Color: </h3>
							<input class="udm_color_picker" type="text" name="bottombar_background_custom_color" value="" />
						</li>
					</ul>
				</li>
				<li><h3>Navigation: </h3>
					<select name="navigation" id="navigation">
						<option value="">Select Menu</option>
						<?php $menus=wp_get_nav_menus();
								foreach( $menus as $item ) {
							?>
								<option value="<?php echo isset($item->slug) ? $item->slug : '';  ?>"> <?php echo isset($item->name) ?$item->name : '';  ?></option>
							<?php
								}
							?>
					</select>
				</li>
				<li><h3>Drop Down Style: </h3>
					<select name="dropdownstyle" id="dropdownstyle">
						<option value="">Select Style</option>
						<?php  
							global $wpdb;
							$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'submenu_layout_%'");
							foreach($layouts as $layout){
						?>
							<option value="<?php echo str_replace("submenu_layout_","",$layout); ?>"><?php echo str_replace("_"," ", str_replace("submenu_layout_","",$layout)); ?></option>
						<?php	
							}
						?>
					</select>
				</li>
				<li class="colorchange"><h3>Navigation Link Color: </h3>
					<select name="bottombar_nav_link_color" id="link_color">
						
						<option value="primary">Primary</option>
						<option value="secondary">Secondary</option>
						<option value="global_light">Global Light</option>
						<option value="global_dark" selected>Global Dark</option>
						<option value="custom">Custom</option>
					</select>
					<ul class="customcolor" style="display:none;">
						<li>
							<h3>Navigation Link Custom Color: </h3>
							<input class="udm_color_picker" type="text" name="bottombar_nav_link_custom_color" value="" />
						</li>
					</ul>
				</li>
			</ul>
		</div>
		
	</li>
</ul>
<script>
jQuery(document).ready(function($) {
	$('.udm_color_picker').wpColorPicker();  //Add color picker 
	$('#newbottombarwidget a').click(function(){
		var widget = $(this).attr('data-widget');
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
	});
	$('.upload-image').click(function() {
		var mediaUploader;
		var myvar = $(this).attr('my-attr');	
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
		$('#top_bar_style').change(function(){
			var value = $(this).val();
			
			jQuery.ajax({
					type: 'post',
					data:'layoutnew='+value+'&layout=<?php echo isset($layout) ? $layout : ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/new_topbar_layout.php",
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
	  });																		
</script>