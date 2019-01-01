
<!-- Theme Options Page Wrap -->

<div class="wrap udm-opt custom_layout clearfix">
	<h1>Company Info Options</h1>
	<form method="post" action="options.php" enctype="multipart/form-data">
    <?php
      settings_fields("companyinfo");  
	?>
		<ul class="base-setings company common_setting" aria-multiselectable="true">
            <li>
                <ul class="inner">
                    <li class="imageupload"><h4>Company Logo</h4><input type="text" name="udm_company_logo" id="udm_company_logo" class="meta-image regular-text main-image" value="<?php echo get_option('udm_company_logo'); ?>"><input class="btn upload-image button button-primary" my-attr="main-image" type="button" value="Upload Image" /></li>
                    <li><h4>Logo Default: <span>Enter default width in px</span></h4><input type="number" name="udm_logo_size" value="<?php echo get_option('udm_logo_size'); ?>" /></li>
					<li><h4>Company Name</h4><input type="text" name="udm_company_name" value="<?php echo get_option('udm_company_name'); ?>" /></li>
                    <li><h4>Email Address </h4><input type="text" name="udm_email_address" value="<?php echo get_option('udm_email_address'); ?>" /></li>
                    <li><h4>Phone Number </h4><input type="text" name="udm_phone_number" value="<?php echo get_option('udm_phone_number'); ?>" /></li>
                    <li><h4>Fax Number </h4><input type="text" name="udm_fax_number" value="<?php echo get_option('udm_fax_number'); ?>" /></li>
				    <li><h4>License Number </h4><input type="text" name="udm_license_number" value="<?php echo get_option('udm_license_number'); ?>" /></li>
					<div class="clearfix"></div>
                </ul>
            </li> 
		</ul>
	<?php
      submit_button();
    ?>
	</form>
</div>

<script>
	jQuery(document).ready(function($) {

		$('.udm_color_picker').wpColorPicker();  //Add color picker 
	
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