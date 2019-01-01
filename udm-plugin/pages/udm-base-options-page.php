<div class="wrap udm-opt custom_layout clearfix">
  <h1>Base Options</h1>
  <form method="post" action="options.php" enctype="multipart/form-data">
    <?php
		settings_fields("section");
	?>
		<ul class="base-setings common_setting" aria-multiselectable="true">
            <li>
                <ul class="inner">
					<li><h4>Select Default Header: </h4>
						<select name="udm_header_default">
							<option value="">Default Header</option>
							<?php  
								global $wpdb;
								$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'header_layout_%'");
								foreach($layouts as $layout){
							?>
								<option value="<?php echo str_replace("header_layout_","",$layout); ?>" <?php selected(str_replace("header_layout_","",$layout),get_option('udm_header_default')); ?>><?php echo str_replace("_"," ", str_replace("header_layout_","",$layout)); ?></option>
							<?php	
								}
							?>
						</select>
					</li>
					<li><h4>Select Default Submenu: </h4>
						<select name="udm_submenu_default">
							<option value="">Default Submenu</option>
							<?php  
								global $wpdb;
								$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'submenu_layout_%'");
								foreach($layouts as $layout){
							?>
								<option value="<?php echo str_replace("submenu_layout_","",$layout); ?>" <?php selected(str_replace("submenu_layout_","",$layout),get_option('udm_submenu_default')); ?>><?php echo str_replace("_"," ", str_replace("submenu_layout_","",$layout)); ?></option>
							<?php	
								}
							?>
						</select>
					</li>					
					<li><h4>Select Default Hero Layout: </h4>
						<select name="udm_hero_default">
								<option value="">Select Layout</option>	
								<?php  
									global $wpdb;
									$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'featured_layout_%'");
									foreach($layouts as $layout){
								?>
									<option value="<?php echo str_replace("featured_layout_","",$layout); ?>" <?php selected(str_replace("featured_layout_","",$layout),get_option('udm_hero_default')); ?>><?php echo str_replace("_"," ", str_replace("featured_layout_","",$layout)); ?></option>
								<?php	
									}
								?>
						</select>
					</li>
					<li><h4>Select Default Mobile Nav: </h4>
						<select name="udm_mobile_nav_default">
								<option value="">Select Layout</option>	
								<?php  
									global $wpdb;
									$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'mobile_nav_layout_%'");
									foreach($layouts as $layout){
								?>
									<option value="<?php echo str_replace("mobile_nav_layout_","",$layout); ?>" <?php selected(str_replace("mobile_nav_layout_","",$layout),get_option('udm_mobile_nav_default')); ?>><?php echo str_replace("_"," ", str_replace("mobile_nav_layout_","",$layout)); ?></option>
								<?php	
									}
								?>
						</select>
					</li>
					<li><h4>Select Default Mobile Header: </h4>
						<select name="udm_mobile_header_default">
								<option value="">Select Layout</option>	
								<?php  
									global $wpdb;
									$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'mobile_header_layout_%'");
									foreach($layouts as $layout){
								?>
									<option value="<?php echo str_replace("mobile_header_layout_","",$layout); ?>" <?php selected(str_replace("mobile_header_layout_","",$layout),get_option('udm_mobile_header_default')); ?>><?php echo str_replace("_"," ", str_replace("mobile_header_layout_","",$layout)); ?></option>
								<?php	
									}
								?>
						</select>
					</li>
					<li><h4>Select Default Footer: </h4>
						<select name="udm_footer_default">
							<option value="">Default Footer</option>
							<?php  
									global $wpdb;
									$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'footer_layout_%'");
									foreach($layouts as $layout){
								?>
									<option value="<?php echo str_replace("footer_layout_","",$layout); ?>" <?php selected(str_replace("footer_layout_","",$layout),get_option('udm_footer_default')); ?>><?php echo str_replace("_"," ", str_replace("footer_layout_","",$layout)); ?></option>
								<?php	
									}
								?>
						</select>
					</li>
					<li><h4>Select Default Footer CTA: </h4>
						<select name="udm_footer_cta_default">
							<option value="">Select Layout</option>	
								<?php  
									global $wpdb;
									$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'footer_cta_layout_%'");
									foreach($layouts as $layout){
								?>
									<option value="<?php echo str_replace("footer_cta_layout_","",$layout); ?>" <?php selected(str_replace("footer_cta_layout_","",$layout),get_option('udm_footer_cta_default')); ?>><?php echo str_replace("_"," ", str_replace("footer_cta_layout_","",$layout)); ?></option>
								<?php	
									}
								?>
						</select>
					</li>
					<li><h4>Select Default Blog Layout: </h4>
						<select name="udm_bloglayout_default">
							<option value="">Select Layout</option>	
								<?php  
									global $wpdb;
									$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'blog_layout_%'");
									foreach($layouts as $layout){
								?>
									<option value="<?php echo str_replace("blog_layout_","",$layout); ?>" <?php selected(str_replace("blog_layout_","",$layout),get_option('udm_bloglayout_default')); ?>><?php echo str_replace("_"," ", str_replace("blog_layout_","",$layout)); ?></option>
								<?php	
									}
								?>
						</select>
					</li>
					<li><h4>Select Default Service: </h4>
						<select name="udm_service_default">
							<option value="">Default Service</option>
							<?php  
							
								global $wpdb;
								$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'service_layout_%'");
								foreach($layouts as $layout){
							?>
								<option value="<?php echo str_replace("service_layout_","",$layout); ?>" <?php selected(str_replace("service_layout_","",$layout),get_option('udm_service_default')); ?>><?php echo str_replace("_"," ", str_replace("service_layout_","",$layout)); ?></option>
							<?php	
								}
							?>
						</select>
					</li>
					<li><h4>Select Default Gallery Layout: </h4>
						<select name="udm_gallery_layout_default">
							<option value="">Select Layout</option>
							<option value="masonry" <?php selected("masonry",get_option('udm_gallery_layout_default')); ?>>Masonry</option>
							<option value="slideshow" <?php selected("slideshow",get_option('udm_gallery_layout_default')); ?>>Slideshow</option>
							<option value="grid" <?php selected("grid",get_option('udm_gallery_layout_default')); ?>>Grid</option>
							<option value="carousel" <?php selected("carousel",get_option('udm_gallery_layout_default')); ?>>Carousel</option>
						</select>
					</li> 
					<li>
						<h4>Google Map API Key</h4>
						<input type="text" name="udm_google_map_key" value="<?php echo get_option('udm_google_map_key'); ?>">
					</li>
					<li>
						<h2 class="header_layout_heading">
							<a href="javascript:void(0);">Global Settings</a>
						</h2> 
						<ul id="globalsettings" class="globalsettings customcolor">
							<li><h4>Primary Color: </h4><input class="udm_color_picker" type="text" name="udm_primary_color" value="<?php echo get_option('udm_primary_color'); ?>" /></li>
							<li><h4>Secondary Color: </h4><input class="udm_color_picker" type="text" name="udm_secondary_color" value="<?php echo get_option('udm_secondary_color'); ?>" /></li>
							<li><h4>Global Light Color: </h4><input class="udm_color_picker" type="text" name="udm_global_light" value="<?php echo get_option('udm_global_light'); ?>" /></li>
							<li><h4>Global Dark Color: </h4><input class="udm_color_picker" type="text" name="udm_global_dark" value="<?php echo get_option('udm_global_dark'); ?>" /></li>
							<li class="colorchange"><h4>Button Background: </h4>
								<select name="udm_button_background" id="udm_button_background">
									<option value="primary" <?php selected("primary",get_option('udm_button_background')); ?>>Primary</option>
									<option value="secondary" <?php selected("secondary",get_option('udm_button_background')); ?>>Secondary</option>
									<option value="global_light" <?php selected("global_light",get_option('udm_button_background')); ?>>Global Light</option>
									<option value="global_dark" <?php selected("global_dark",get_option('udm_button_background')); ?>>Global Dark</option>
									<option value="custom" <?php selected("custom",get_option('udm_button_background')); ?>>Custom</option>
								</select>
								<ul class="customcolor" <?php if(get_option('udm_button_background')=="custom"){}else{ ?> style="display:none;" <?php } ?>>
									<li>
										<h4>Button Custom Background: </h4>
										<input class="udm_color_picker" type="text" name="udm_button_custom_background" value="<?php echo get_option('udm_button_custom_background'); ?>" />
									</li>
								</ul>
							</li>
							<li class="colorchange"><h4>Button Text Color: </h4>
								<select name="udm_button_text_color" id="udm_button_text_color">
									<option value="primary" <?php selected("primary",get_option('udm_button_text_color')); ?>>Primary</option>
									<option value="secondary" <?php selected("secondary",get_option('udm_button_text_color')); ?>>Secondary</option>
									<option value="global_light" <?php selected("global_light",get_option('udm_button_text_color')); ?>>Global Light</option>
									<option value="global_dark" <?php selected("global_dark",get_option('udm_button_text_color')); ?>>Global Dark</option>
									<option value="custom" <?php selected("custom",get_option('udm_button_text_color')); ?>>Custom</option>
								</select>
								<ul class="customcolor" <?php if(get_option('udm_button_text_color')=="custom"){}else{ ?> style="display:none;" <?php } ?>>
									<li>
										<h4>Button Text Custom Color: </h4>
										<input class="udm_color_picker" type="text" name="udm_button_text_custom_color" value="<?php echo get_option('udm_button_text_custom_color'); ?>" />
									</li>
								</ul>
							</li>
						</ul> 
					</li>
					<div class="clearfix"></div>
			    </ul>
            </li>		
	  </ul> 
	  <?php submit_button(); ?> 
  </form>
</div>
<!-- Theme Options JS -->
<script>
jQuery(document).ready(function($) {
  	$('.udm_color_picker').wpColorPicker();   
});
</script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/udm-plugin/js/jquery.smartWizard.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	//  Wizard 1  	
	$('#wizard1').smartWizard({
		transitionEffect:'fade',
		onFinish:onFinishCallback,
		onLeaveStep  : leaveAStepCallback,
	});
	function leaveAStepCallback(obj, context){
		// To check and enable finish button if needed
		if (context.fromStep >= 1) {
			$('#wizard1').smartWizard('enableFinish', true);
		}
		return true;
	}
	function onFinishCallback(){
		$('#wizard1').hide();
	}    
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