<div class="wrap udm-opt">
	<h1>Social Icons Options</h1>
	<form method="post" action="options.php" enctype="multipart/form-data">
    <?php
      settings_fields("socail_icons");
	?>
		<ul class="base-setings" aria-multiselectable="true">
            <li>
                <ul class="inner">
                    <li><h4>Facebook Link </h4><input type="text" name="udm_facebook_link" value="<?php if(get_option('udm_facebook_link')){ echo get_option('udm_facebook_link'); }else{ ?>https://www.facebook.com/heroistic/<?php } ?>" /></li>
					<li><h4>Twitter Link </h4><input type="text" name="udm_twitter_link" value="<?php echo get_option('udm_twitter_link'); ?>" /></li>
					<li><h4>Instagram Link </h4><input type="text" name="udm_instagram_link" value="<?php echo get_option('udm_instagram_link'); ?>" /></li>
                    <li><h4>Google Plus Link </h4><input type="text" name="udm_googleplus_link" value="<?php echo get_option('udm_googleplus_link'); ?>" /></li>
                    <li><h4>Linked In Link </h4><input type="text" name="udm_linkedin_link" value="<?php echo get_option('udm_linkedin_link'); ?>" /></li>
				    <li><h4>Pinterest Link </h4><input type="text" name="udm_pinterest_link" value="<?php echo get_option('udm_pinterest_link'); ?>" /></li>
                </ul>
            </li>
		</ul> 
	<?php
      submit_button();
    ?>
	</form>
</div>
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