<?php
	define('WP_USE_THEMES', true);
	
	/** Loads the WordPress Environment and Template */
	//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
	require('../../../../../wp-load.php'); 
	?>
<!-- Theme Options JS -->
<?php
	$footer1data=unserialize(get_option('footer_layout_1'));
?>	
<input type="hidden" name="footer_type" value="1">
<h2 class="footer_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#footer_type_custom">Footer layout 1</a>
</h2>

<div class="columns_count_div">
		<ul id="footer_type_custom" class="header_type_style collapse show">	
			<li>
				<h3>Cloumns</h3>
				<select name="columns_count" id="columns_count">
					<option value="1_2" <?php selected('1_2',$footer1data['columns_count']); ?>>1/2</option>
					<option value="1_3" <?php selected('1_3',$footer1data['columns_count']); ?>>1/3</option>
					<option value="1_4" <?php selected('1_4',$footer1data['columns_count']); ?>>1/4</option>
					<option value="1_5" <?php selected('1_5',$footer1data['columns_count']); ?>>1/5</option>					
				</select>
			</li>
			<li class="topbarwiget">
			<h2>Columns Widgets</h2>
			<ul id="topbar_layouts">
					<?php
						if($footer1data['columns_count']!="")
						{
							$layout=$footer1data['columns_count'];
							include get_template_directory() . "/udm-plugin/admin/footer_one/footer_columns_layout.php";
						}
						else
						{
							$layout="1_2";
							include get_template_directory() . "/udm-plugin/admin/footer_one/footer_columns_layout.php";
						}
					?>
			</ul>
			</li>			
			<li class="bottom-footer">
				<h3>Bottom Footer</h3>
				<input type="text" name="footer_bottom_title" class="bottom-input" placeholder="Title" value="<?php echo $footer1data['footer_bottom_title']; ?>">
				<textarea class="bottom-input" name="footer_bottom_content" placeholder="Content"><?php echo $footer1data['footer_bottom_content']; ?></textarea>
			</li>
			<li>
				<h3>Social Icons</h3>
				<span class="switch">
				<input type="checkbox" name="footer_social_icons" class="switch" id="footer_social_icons" value="yes" <?php checked('yes',$footer1data['footer_social_icons']); ?>>
				<label for="footer_social_icons">Enable/ Disable</label>
				</span>
			</li>
			
			<li>
				<h3>Apps Links</h3>
					<span class="switch">
					<input type="checkbox" name="footer_apps_buttons" class="switch" id="footer_apps_buttons" value="yes" <?php checked('yes',$footer1data['footer_apps_buttons']); ?>>
					<label for="footer_apps_buttons">Enable/ Disable</label>
				</span>
				
				<ul id="store_id" <?php if($footer1data['footer_apps_buttons']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Play Store</h3>
						<input type="text" name="footer_playstore_link" class="bottom-input" placeholder="play store app link" value="<?php echo $footer1data['footer_playstore_link']; ?>">
					</li>
					<li>
						<h3>App Store</h3>
						<input type="text" name="footer_appstore_link" class="bottom-input" placeholder="App store app link" value="<?php echo $footer1data['footer_appstore_link']; ?>">
					</li>
				</ul>	
			</li>
			<li><h4>Footer Primary background: </h4><input class="udm_color_picker" type="text" name="footer_background" value="<?php echo $footer1data['footer_background']; ?>" /></li>
			<li><h4>Footer Secondary background: </h4><input class="udm_color_picker" type="text" name="footer_secondary_background" value="<?php echo $footer1data['footer_secondary_background']; ?>" /></li>
			<li><h4>Footer Heading: </h4><input class="udm_color_picker" type="text" name="footer_heading" value="<?php echo $footer1data['footer_heading']; ?>" /></li>
			<li><h4>Footer Text Color: </h4><input class="udm_color_picker" type="text" name="footer_text_color" value="<?php echo $footer1data['footer_text_color']; ?>" /></li>
			<li><h4>Footer Link Color: </h4><input class="udm_color_picker" type="text" name="footer_link_color" value="<?php echo $footer1data['footer_link_color']; ?>" /></li>
			<li><h4>Footer Link Hover Color: </h4><input class="udm_color_picker" type="text" name="footer_link_hover_color" value="<?php echo $footer1data['footer_link_hover_color']; ?>" /></li>
		</ul>	
</div>


<div class="uploaded_button"><p class="submit"><input type="submit" name="footer_mailchimp_submit" id="footer_mailchimp_submit" class="button button-primary" value="Save Settings"></p><p class="submit"><input type="submit" name="footer_mailchimp_reset" id="footer_mailchimp_reset" class="button button-primary" value="Reset Settings"></p> </div>
<script>
	jQuery(document).ready(function($) {
		$('.udm_color_picker').wpColorPicker();
			
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
		
		
		$('#columns_count').change(function(){
			var value = $(this).val();
			
			jQuery.ajax({
					type: 'post',
					data:'layout='+value,
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/footer_one/footer_columns_layout.php",
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
		
		$('#footer_apps_buttons').change(function(){
			if($(this).prop("checked") == true)
			{
				$('#store_id').show();
			}
			else
			{
				$('#store_id').hide();
			}
		});
		
	});																		
</script>