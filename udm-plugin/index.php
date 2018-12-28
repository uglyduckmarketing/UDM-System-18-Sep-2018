<?php
################################################################################
# //Admin Panel Functions Start
################################################################################

//Admin Scripts
define('VERSION','1.0');
add_action( 'admin_head', 'wp_admin_header_scripts' ); 
function wp_admin_header_scripts( $hook_suffix ) {
    wp_enqueue_style( 'udm-fontawesome', get_template_directory_uri() . '/udm-plugin/css/font-awesome.css' );
	wp_enqueue_style( 'udm-ui-admin', get_template_directory_uri() . '/udm-plugin/css/jquery-ui.css' );
	wp_enqueue_style( 'udm-admin', get_template_directory_uri() . '/udm-plugin/css/wp-custom-style.css' ); 	
	wp_enqueue_script( 'udm-popper-js', get_template_directory_uri() . '/udm-plugin/js/popper.min.js');
    wp_enqueue_script( 'udm-bootstrap-js',  get_template_directory_uri() . '/udm-plugin/js/bootstrap.min.js' );	
    wp_enqueue_script( 'udm-ui-js',  get_template_directory_uri() . '/udm-plugin/js/jquery-ui.min.js' );		
}


add_action( 'admin_enqueue_scripts', 'wp_enqueue_color_picker' );
function wp_enqueue_color_picker( $hook_suffix ) {
	wp_enqueue_media();
	wp_enqueue_script( 'wp-color-picker-script-handle',  get_template_directory_uri() . '/udm-plugin/js/wp-color-picker-script.js', array( 'wp-color-picker' ));
	
}



// Add menus to admin side navigation
function add_theme_menu_item(){
	$menu = array();
	$menu[] = add_menu_page('UDM Options', 'UDM Options', 'manage_options', 'udm-options-panel', 'udm_base_options_page_func', null, 99);
	$menu[] = add_submenu_page('udm-options-panel', 'UDM Options', 'Base Options', 'manage_options', 'udm-options-panel', 'udm_base_options_page_func');
	$menu[] = add_submenu_page('udm-options-panel', 'UDM Options', 'Company Info','manage_options', 'udm-companyinfo-panel','udm_companyinfo_options_page_func');
	$menu[] = add_submenu_page('udm-options-panel', 'UDM Options', 'Social Settings','manage_options', 'udm-social-panel','udm_social_options_page_func');
	$menu[] = add_submenu_page('udm-options-panel', 'UDM Options', 'Header Options','manage_options', 'udm-header-panel','udm_header_options_page_func');
	$menu[] = add_submenu_page('udm-options-panel', 'UDM Options', 'Submenu Options','manage_options', 'udm-submenu-panel','udm_submenu_options_page_func');
	$menu[] = add_submenu_page('udm-options-panel', 'UDM Options', 'M Header Options','manage_options', 'udm-mobile-header-panel','udm_mobile_header_options_page_func');
	$menu[] = add_submenu_page('udm-options-panel', 'UDM Options', 'Services Options','manage_options', 'udm-service-panel','udm_service_options_page_func');
	$menu[] = add_submenu_page('udm-options-panel', 'UDM Options', 'M Nav Options','manage_options', 'udm-mobile-nav-panel','udm_mobile_nav_options_page_func'); 
	$menu[] = add_submenu_page('udm-options-panel', 'UDM Options', 'Hero Options','manage_options', 'udm-hero-panel','udm_hero_options_page_func');
	$menu[] = add_submenu_page('udm-options-panel', 'UDM Options', 'Footer Options','manage_options', 'udm-footer-panel','udm_footer_options_page_func');
	$menu[] = add_submenu_page('udm-options-panel', 'UDM Options', 'Footer CTA Options','manage_options', 'udm-footer-cta-panel','udm_footer_cta_options_page_func');
	$menu[] = add_submenu_page('udm-options-panel', 'UDM Options', 'Blog Options','manage_options', 'udm-blog-panel','udm_blog_options_page_func');
	for($i =0; $i< count($menu); $i++){
		add_action( 'load-' . $menu[$i], 'udm_theme_style' );
	}
}
add_action("admin_menu", "add_theme_menu_item");

// Load CSS for theme option 28-12-2018
function udm_theme_style(){
	wp_enqueue_style( 'udm-admin', get_template_directory_uri() . '/udm-plugin/css/udm-admin.css' ); 
}

// Dashboard Page
function udm_dashboard_page_func(){
	
  include(dirname(__FILE__) .'/pages/udm-dashboard-page.php');
}

// Base Option Page
function udm_base_options_page_func(){
  include(dirname(__FILE__) .'/pages/udm-base-options-page.php');
}

// Header Options Page
function udm_header_options_page_func(){	
  include(dirname(__FILE__) .'/pages/udm-header-options-page.php');
}

// Submenu Options Page
function udm_submenu_options_page_func(){
  include(dirname(__FILE__) .'/pages/udm-submenu-options-page.php');
}

// Header Options Page
function udm_footer_options_page_func(){
  include(dirname(__FILE__) .'/pages/udm-footer-options-page.php');
}

// Social Options Page
function udm_social_options_page_func(){
  include(dirname(__FILE__) .'/pages/udm-social-options-page.php');
}

// Company Info Options Page
function udm_companyinfo_options_page_func(){
  include(dirname(__FILE__) .'/pages/udm-companyinfo-options-page.php');
}

// Hero Options Page
function udm_hero_options_page_func(){
  include(dirname(__FILE__) .'/pages/udm-hero-options-page.php');
}


// Blog Options Page
function udm_blog_options_page_func(){
  include(dirname(__FILE__) .'/pages/udm-blog-options-page.php');
}


// Mobile Header Options Page
function udm_mobile_header_options_page_func(){
  include(dirname(__FILE__) .'/pages/udm-mobile-header-options-page.php');
}


// Mobile Nav Options Page
function udm_mobile_nav_options_page_func(){
  include(dirname(__FILE__) .'/pages/udm-mobile-nav-options-page.php');
}

// Services Options Page
function udm_service_options_page_func(){
  include(dirname(__FILE__) .'/pages/udm-service-options-page.php');
}

// Footer CTA Options Page
function udm_footer_cta_options_page_func(){
  include(dirname(__FILE__) .'/pages/udm-footer-cta-options-page.php');
}


 //Register Settings of Base Options
 
 register_setting("section", "udm_header_default");
 register_setting("section", "udm_submenu_default");
 register_setting("section", "udm_service_default");
 register_setting("section", "udm_google_map_key");
 register_setting("section", "udm_footer_default");
 register_setting("section", "udm_hero_default");
 register_setting("section", "udm_mobile_nav_default");
 register_setting("section", "udm_mobile_header_default");
 register_setting("section", "udm_footer_cta_default");
 register_setting("section", "udm_bloglayout_default");
 register_setting("section", "udm_gallery_layout_default");
 
 register_setting("section", "udm_logo_default");
 register_setting("section", "udm_primary_color");
 register_setting("section", "udm_secondary_color");
 register_setting("section", "udm_global_dark");
 register_setting("section", "udm_global_light");
 register_setting("section", "udm_button_background");
 register_setting("section", "udm_button_text_color");
 register_setting("section", "udm_button_custom_background");
 register_setting("section", "udm_button_text_custom_color");
 
 

 //Register Settings of Social Icons Options
 register_setting("socail_icons", "udm_facebook_link");
 register_setting("socail_icons", "udm_googleplus_link");
 register_setting("socail_icons", "udm_linkedin_link");
 register_setting("socail_icons", "udm_instagram_link");
 register_setting("socail_icons", "udm_pinterest_link");
 register_setting("socail_icons", "udm_twitter_link");
 
 //Register Settings of Company Info Options
 register_setting("companyinfo", "udm_company_logo");
 register_setting("companyinfo", "udm_logo_size");
 register_setting("companyinfo", "udm_company_name");
 register_setting("companyinfo", "udm_email_address");
 register_setting("companyinfo", "udm_phone_number");
 register_setting("companyinfo", "udm_fax_number");
 register_setting("companyinfo", "udm_license_number");
   
// action to add meta boxes
add_action( 'add_meta_boxes', 'udm_specific_header' );
// action on saving post
add_action( 'save_post', 'udm_specific_header_save' );

// function that creates the new metabox that will show on post
function udm_specific_header() {
    add_meta_box( 
        'udm_specific_header',  // unique id
        __( 'Select header', 'udmbase' ),  // metabox title
        'udm_specific_header_display'  // callback to show the dropdown
    
    );
}

// voodoo dropdown display
function udm_specific_header_display( $post ) {
$postid = isset($_GET['post']) ? $_GET['post'] : '';
  // Use nonce for verification
  wp_nonce_field( basename( __FILE__ ), 'udm_specific_header_nonce' );

  // get current value
  $dropdown_value = get_post_meta( $postid, 'udm_specific_header', true );
  ?> 
    <select name="udm_specific_header" id="udm_specific_header">
		<option value="">Default Header</option>
		<?php  
			global $wpdb;
			$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'header_layout_%'");
			foreach($layouts as $layout){
		?>
			<option value="<?php echo str_replace("header_layout_","",$layout); ?>" <?php selected(str_replace("header_layout_","",$layout),$dropdown_value); ?>><?php echo str_replace("_"," ", str_replace("header_layout_","",$layout)); ?></option>
		<?php	
			}
		?>
	</select>
  <?php
}

// dropdown saving
function udm_specific_header_save( $post_id ) {

    // if doing autosave don't do nothing
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify nonce
  $udm_specific_header_nonce = isset($_POST['udm_specific_header_nonce']) ? $_POST['udm_specific_header_nonce'] : '';
  if ( !wp_verify_nonce( $udm_specific_header_nonce, basename( __FILE__ ) ) )
      return;


  // Check permissions
  if ( 'page' == $_POST['post_type'] ) 
  {
    if ( !current_user_can( 'edit_page', $post_id ) )
        return;
  }
  else
  {
    if ( !current_user_can( 'edit_post', $post_id ) )
        return;
  }

  // save the new value of the dropdown
  $new_value = $_POST['udm_specific_header'];
  update_post_meta( $post_id, 'udm_specific_header', $new_value );
}  


	

// action to add meta boxes
add_action( 'add_meta_boxes', 'udm_specific_hero' );
// action on saving post
add_action( 'save_post', 'udm_specific_hero_save' );

// function that creates the new Hero metabox that will show on post
function udm_specific_hero() {
    add_meta_box( 
        'udm_specific_hero',  // unique id
        __( 'Select hero', 'udmbase' ),  // metabox title
        'udm_specific_hero_display'  // callback to show the dropdown
   
    );
}
// Hero dropdown display
function udm_specific_hero_display( $post ) {
$postid = isset($_GET['post']) ? $_GET['post'] : '';
  // Use nonce for verification
  wp_nonce_field( basename( __FILE__ ), 'udm_specific_hero_nonce' );

  // get current value
  $dropdown_value = get_post_meta( $postid, 'udm_specific_hero', true );
  ?> 

    <select name="udm_specific_hero" id="udm_specific_hero">
		<option value="">Default Hero</option>
		<?php  
			global $wpdb;
			$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'featured_layout_%'");
			foreach($layouts as $layout){
		?>
			<option value="<?php echo str_replace("featured_layout_","",$layout); ?>" <?php selected(str_replace("featured_layout_","",$layout),$dropdown_value); ?>><?php echo str_replace("_"," ", str_replace("featured_layout_","",$layout)); ?></option>
		<?php	
			}
		?>
	</select>
	
	 <script>
    jQuery(document).ready(function ($) {
			
			$('.inside #udm_specific_hero').change(function(){
				 var selval = $(this).val();
				if(selval.indexOf("Basic") >= 0)
				{
					$('#basic_hero_meta').show();
					$('#fulwidth_hero_meta').hide();
					$('#splitscreen_hero_meta').hide();
					$('#leftright_hero_meta').hide();
					$('#leadgen_hero_meta').hide();
					
				}
				else if(selval.indexOf("Fulwidth") >= 0)
				{
					$('#basic_hero_meta').hide();
					$('#fulwidth_hero_meta').show();
					$('#splitscreen_hero_meta').hide();
					$('#leftright_hero_meta').hide();
					$('#leadgen_hero_meta').hide();
					
				}
				else if(selval.indexOf("Splitscreen") >= 0)
				{
					$('#basic_hero_meta').hide();
					$('#fulwidth_hero_meta').hide();
					$('#splitscreen_hero_meta').show();
					$('#leftright_hero_meta').hide();
					$('#leadgen_hero_meta').hide();
					
				}
				else if(selval.indexOf("Leftrightelement") >= 0)
				{
					$('#basic_hero_meta').hide();
					$('#fulwidth_hero_meta').hide();
					$('#splitscreen_hero_meta').hide();
					$('#leftright_hero_meta').show();
					$('#leadgen_hero_meta').hide();
					
				}
				else if(selval.indexOf("Leadgen") >= 0)
				{
					$('#basic_hero_meta').hide();
					$('#fulwidth_hero_meta').hide();
					$('#splitscreen_hero_meta').hide();
					$('#leftright_hero_meta').hide();
					$('#leadgen_hero_meta').show();
					
				}
				else
				{
					<?php if(strpos(get_option('udm_hero_default'), 'Basic_Hero') !== false){ ?>
						$('#basic_hero_meta').show();
					<?php } ?>
					<?php if(strpos(get_option('udm_hero_default'), 'Fulwidth_Hero') !== false){ ?>
						$('#fulwidth_hero_meta').show();
					<?php } ?>
					<?php if(strpos(get_option('udm_hero_default'), 'Splitscreen_Hero') !== false){ ?>
						$('#splitscreen_hero_meta').show();
					<?php } ?>
					<?php if(strpos(get_option('udm_hero_default'), 'Leftrightelement_Hero') !== false){ ?>
						$('#leftright_hero_meta').show();
					<?php } ?>
					<?php if(strpos(get_option('udm_hero_default'), 'Leadgen_Hero') !== false){ ?>
						$('#leadgen_hero_meta').show();
					<?php } ?>
				}
			});
	
    });
  </script>
  <?php
}
// Hero dropdown saving
function udm_specific_hero_save( $post_id ) {

    // if doing autosave don't do nothing
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify nonce
 $udm_specific_hero_nonce =  isset($_POST['udm_specific_hero_nonce']) ? $_POST['udm_specific_hero_nonce'] : '';
  if ( !wp_verify_nonce( $udm_specific_hero_nonce, basename( __FILE__ ) ) )
      return;


  // Check permissions
  if ( 'page' == $_POST['post_type'] ) 
  {
    if ( !current_user_can( 'edit_page', $post_id ) )
        return;
  }
  else
  {
    if ( !current_user_can( 'edit_post', $post_id ) )
        return;
  }

  // save the new value of the dropdown
  $new_value = $_POST['udm_specific_hero'];
  update_post_meta( $post_id, 'udm_specific_hero', $new_value );
}  


function add_hero_fields_meta_box() {
	add_meta_box(
		'hero_fields', // $id
		'Hero Options', // $title
		'show_hero_fields_meta_box' // $callback
	);
}
add_action( 'add_meta_boxes', 'add_hero_fields_meta_box' );
function show_hero_fields_meta_box($post) {
  $postid = isset($_GET['post']) ? $_GET['post'] : '';
 
		if(is_home() || is_archive())
		{
			$pid = get_option( 'page_for_posts' );
		}
		else
		{
			$pid = $post->ID;
		}
		
		$meta = get_post_meta( $postid, 'hero_fields', true ); 
		
		?>

		  <input type="hidden" name="hero_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
		  
		<p>
				<label for="hero_fields[hero_image_show]">Hero Section Hide</label>
				<br>
				<span class="switch">
					<input type="checkbox" name="hero_fields[hero_image_show]" class="switch" id="hero_fields[hero_image_show]" value="yes" <?php checked('yes', isset($meta['hero_image_show']) ? $meta['hero_image_show'] : ''); ?>>
					<label for="hero_fields[hero_image_show]">Show/Hide</label>
				</span>
		</p>
		
		<div id="basic_hero_meta" <?php if(strpos(get_post_meta( $postid, 'udm_specific_hero', true ), 'Basic_Hero') !== false){ ?> <?php }else if(get_post_meta( $postid, 'udm_specific_hero', true )=="" && strpos(get_option('udm_hero_default'), 'Basic_Hero') !== false){}else{ ?> style="display:none;" <?php } ?>>
			<p>
				<label for="hero_fields[udm_basic_header_text]">Header Text</label>
				<br>
				<input type="text" name="hero_fields[udm_basic_header_text]" id="hero_fields[udm_basic_header_text]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['udm_basic_header_text'])) {	echo esc_attr($meta['udm_basic_header_text']); } ?>">
			</p>
		</div>
		<div id="fulwidth_hero_meta" <?php if(strpos(get_post_meta( $postid, 'udm_specific_hero', true ), 'Fulwidth_Hero') !== false){ ?> <?php }else if(get_post_meta( $postid, 'udm_specific_hero', true )=="" && strpos(get_option('udm_hero_default'), 'Fulwidth_Hero') !== false){}else{ ?>  style="display:none;" <?php } ?>>
		
			<?php 
			$smalltextshow = '';
				if (is_array($meta) && isset($meta['udm_fullwidth_eyebrow_text_show'])) {	$smalltextshow=$meta['udm_fullwidth_eyebrow_text_show']; }
			?>
			<p>
				<label for="hero_fields[udm_fullwidth_eyebrow_text_show]">Eybrow Text Hide</label>
				<br>
				<span class="switch">
					<input type="checkbox" name="hero_fields[udm_fullwidth_eyebrow_text_show]" class="switch" id="hero_fields[udm_fullwidth_eyebrow_text_show]" value="no" <?php checked('no', $smalltextshow); ?>>
					<label for="hero_fields[udm_fullwidth_eyebrow_text_show]">Show/Hide</label>
				</span>
			</p>
			
			<p>
				<label for="hero_fields[udm_fullwidth_eyebrow_text]">Eybrow Text</label>
				<br>
				<input type="text" name="hero_fields[udm_fullwidth_eyebrow_text]" id="hero_fields[udm_fullwidth_eyebrow_text]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['udm_fullwidth_eyebrow_text'])) {	echo esc_attr($meta['udm_fullwidth_eyebrow_text']); } ?>">
			</p>
			
			<p>
				<label for="hero_fields[udm_fullwidth_header_text]">Header Text</label>
				<br>
				<input type="text" name="hero_fields[udm_fullwidth_header_text]" id="hero_fields[udm_fullwidth_header_text]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['udm_fullwidth_header_text'])) {	echo esc_attr($meta['udm_fullwidth_header_text']); } ?>">
			</p>
			<p>
				<label for="hero_fields[udm_fullwidth_description]">Description</label>
				<br>
				<textarea name="hero_fields[udm_fullwidth_description]" id="hero_fields[udm_fullwidth_description]" rows="5" cols="30" style="width:500px;"><?php echo isset($meta['udm_fullwidth_description']) ? $meta['udm_fullwidth_description'] : ''; ?></textarea>
			</p>
		</div>
		<div id="splitscreen_hero_meta" <?php if(strpos(get_post_meta( $postid, 'udm_specific_hero', true ), 'Splitscreen_Hero') !== false){ ?> <?php }else if(get_post_meta( $postid, 'udm_specific_hero', true )=="" && strpos(get_option('udm_hero_default'), 'Splitscreen_Hero') !== false){}else{ ?> style="display:none;" <?php } ?>>
		
			<?php 
				if (is_array($meta) && isset($meta['udm_splitscreen_eyebrow_text_show'])) {	$smalltextshow=$meta['udm_splitscreen_eyebrow_text_show']; }
			?>
			<p>
				<label for="hero_fields[udm_splitscreen_eyebrow_text_show]">Eybrow Text Hide</label>
				<br>
				<span class="switch">
					<input type="checkbox" name="hero_fields[udm_splitscreen_eyebrow_text_show]" class="switch" id="hero_fields[udm_splitscreen_eyebrow_text_show]" value="no" <?php checked('no', $smalltextshow); ?>>
					<label for="hero_fields[udm_splitscreen_eyebrow_text_show]">Show/Hide</label>
				</span>
			</p>
			<p>
				<label for="hero_fields[udm_splitscreen_eyebrow_text]">Eybrow Text</label>
				<br>
				<input type="text" name="hero_fields[udm_splitscreen_eyebrow_text]" id="hero_fields[udm_splitscreen_eyebrow_text]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['udm_splitscreen_eyebrow_text'])) {	echo esc_attr($meta['udm_splitscreen_eyebrow_text']); } ?>">
			</p>
			
			
			<p>
				<label for="hero_fields[udm_splitscreen_header_text]">Header Text</label>
				<br>
				<input type="text" name="hero_fields[udm_splitscreen_header_text]" id="hero_fields[udm_splitscreen_header_text]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['udm_splitscreen_header_text'])) {	echo esc_attr($meta['udm_splitscreen_header_text']); } ?>">
			</p>
			<p>
				<label for="hero_fields[udm_splitscreen_description]">Description</label>
				<br>
				<textarea name="hero_fields[udm_splitscreen_description]" id="hero_fields[udm_splitscreen_description]" rows="5" cols="30" style="width:500px;"><?php echo isset($meta['udm_splitscreen_description']) ? $meta['udm_splitscreen_description'] : ''; ?></textarea>
			</p>
		</div>
		<div id="leftright_hero_meta" <?php if(strpos(get_post_meta( $postid, 'udm_specific_hero', true ), 'Leftrightelement_Hero') !== false){ ?> <?php }else if(get_post_meta( $postid, 'udm_specific_hero', true )=="" && strpos(get_option('udm_hero_default'), 'Leftrightelement_Hero') !== false){}else{ ?> style="display:none;" <?php } ?>>
	
			<?php 
				if (is_array($meta) && isset($meta['udm_leftrightelement_eyebrow_text_show'])) {	$smalltextshow=$meta['udm_leftrightelement_eyebrow_text_show']; }
			?>
			<p>
				<label for="hero_fields[udm_leftrightelement_eyebrow_text_show]">Eybrow Text Hide</label>
				<br>
				<span class="switch">
					<input type="checkbox" name="hero_fields[udm_leftrightelement_eyebrow_text_show]" class="switch" id="hero_fields[udm_leftrightelement_eyebrow_text_show]" value="no" <?php checked('no', $smalltextshow); ?>>
					<label for="hero_fields[udm_leftrightelement_eyebrow_text_show]">Show/Hide</label>
				</span>
			</p>
			<p>
				<label for="hero_fields[udm_leftrightelement_eyebrow_text]">Eybrow Text</label>
				<br>
				<input type="text" name="hero_fields[udm_leftrightelement_eyebrow_text]" id="hero_fields[udm_leftrightelement_eyebrow_text]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['udm_leftrightelement_eyebrow_text'])) {	echo esc_attr($meta['udm_leftrightelement_eyebrow_text']); } ?>">
			</p>
			
			<p>
				<label for="hero_fields[udm_leftrightelement_header_text]">Header Text</label>
				<br>
				<input type="text" name="hero_fields[udm_leftrightelement_header_text]" id="hero_fields[udm_leftrightelement_header_text]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['udm_leftrightelement_header_text'])) {	echo esc_attr($meta['udm_leftrightelement_header_text']); } ?>">
			</p>
			<p>
				<label for="hero_fields[udm_leftrightelement_description]">Description</label>
				<br>
				<textarea name="hero_fields[udm_leftrightelement_description]" id="hero_fields[udm_leftrightelement_description]" rows="5" cols="30" style="width:500px;"><?php echo isset($meta['udm_leftrightelement_description']) ? $meta['udm_leftrightelement_description'] : ''; ?></textarea>
			</p>
			
			<p id="element">
				<label for="hero_fields[udm_leftrightelement_element]">Element</label>
				<br>
				<select name="hero_fields[udm_leftrightelement_element]" id="hero_fields[udm_leftrightelement_element]">
					<option value="">Select Element Type</option>
					<option value="image" <?php selected( $meta['udm_leftrightelement_element'], 'image' ); ?>>Image</option>
					<option value="video" <?php selected( $meta['udm_leftrightelement_element'], 'video' ); ?>>Video</option>
				</select>
			</p>
			<p id="imageurl" <?php if (is_array($meta) && $meta['udm_leftrightelement_element']!="image") { ?>style="display:none;"<?php } ?>>
				<label for="hero_fields[udm_leftrightelement_image]">Image Url</label><br>
				<input type="text" name="hero_fields[udm_leftrightelement_image]" id="hero_fields[udm_leftrightelement_image]" class="meta-image regular-text main-image" value="<?php echo isset($meta['udm_leftrightelement_image']) ? $meta['udm_leftrightelement_image'] : ''; ?>">
				<input class="btn upload-image" my-attr="main-image" type="button" value="Upload Image" />
			</p>
			
			<p id="videourl" <?php if (is_array($meta) && $meta['udm_leftrightelement_element']!="video") { ?>style="display:none;"<?php } ?>>
				<label for="hero_fields[udm_leftrightelement_video]">Youtube/Vimeo Video Url</label><br>
				<input type="text" name="hero_fields[udm_leftrightelement_video]" id="hero_fields[udm_leftrightelement_video]" class="meta-image regular-text" value="<?php echo isset($meta['udm_leftrightelement_video']) ? $meta['udm_leftrightelement_video'] : ''; ?>">
			</p>
		</div>
	<div id="leadgen_hero_meta" <?php if(strpos(get_post_meta( $postid, 'udm_specific_hero', true ), 'Leadgen_Hero') !== false){ ?> <?php }else if(get_post_meta( $postid, 'udm_specific_hero', true )=="" && strpos(get_option('udm_hero_default'), 'Leadgen_Hero') !== false){}else{ ?> style="display:none;" <?php } ?>>
		<?php 
		if (is_array($meta) && isset($meta['udm_leadgen_eyebrow_text_show'])) {	$smalltextshow=$meta['udm_leadgen_eyebrow_text_show']; }
			?>
		<p>
			<label for="hero_fields[udm_leadgen_eyebrow_text_show]">Eybrow Text Show/Hide</label>
			<br>
			<span class="switch">
				<input type="checkbox" name="hero_fields[udm_leadgen_eyebrow_text_show]" class="switch" id="hero_fields[udm_leadgen_eyebrow_text_show]" value="yes" <?php checked('yes', $smalltextshow); ?>>
				<label for="hero_fields[udm_leadgen_eyebrow_text_show]">Show/Hide</label>
			</span>
		</p>
		<p>
			<label for="hero_fields[udm_leadgen_eyebrow_text]">Eybrow Text</label>
			<br>
			<input type="text" name="hero_fields[udm_leadgen_eyebrow_text]" id="hero_fields[udm_leadgen_eyebrow_text]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['udm_leadgen_eyebrow_text'])) {	echo esc_attr($meta['udm_leadgen_eyebrow_text']); } ?>">
		</p>
		<p>
			<label for="hero_fields[udm_leadgen_header_text]">Header Text</label>
			<br>
			<input type="text" name="hero_fields[udm_leadgen_header_text]" id="hero_fields[udm_leadgen_header_text]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['udm_leadgen_header_text'])) {	echo esc_attr($meta['udm_leadgen_header_text']); } ?>">
		</p>
		<p>
			<label for="hero_fields[udm_leadgen_description]">Description</label>
			<br>
			<textarea name="hero_fields[udm_leadgen_description]" id="hero_fields[udm_leadgen_description]" rows="5" cols="30" style="width:500px;"><?php echo isset($meta['udm_leadgen_description']) ? $meta['udm_leadgen_description'] : ''; ?></textarea>
		</p>
	</div>
<script>
jQuery(document).ready(function ($) {
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
			  
	$('#element select').change(function(){
		if($(this).val() == "video")
		{
			$('#videourl').show();
			$('#imageurl').hide();
		}
		else if($(this).val() == "image")
		{
			$('#videourl').hide();
			$('#imageurl').show();
		}
		else 
		{
			$('#videourl').hide();
			$('#imageurl').hide();
		}
	});
});
  </script>
<?php }

add_action( 'save_post', 'save_hero_fields_meta' );
function save_hero_fields_meta( $post_id ) {   
	// verify nonce
	if ( isset($_POST['hero_meta_box_nonce']) 
			&& !wp_verify_nonce( $_POST['hero_meta_box_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
	
	$old = get_post_meta( $post_id, 'hero_fields', true );
	 //Fix 3
		$new = isset($_POST['hero_fields']) ? $_POST['hero_fields'] : ''; 
		update_post_meta( $post_id, 'hero_fields', $new );
	
}
 
//Admin Panel Functions End
   
################################################################################
# //Frontend Functions Start
################################################################################
	
add_action( 'wp_enqueue_scripts', 'theme_custom_style_script', 11 );
function theme_custom_style_script() {
	global $post;
	if(is_home() || is_archive())
	{
		$pid = get_option( 'page_for_posts' );
	}
	else
	{
		$pid = $post->ID;
	}
	wp_enqueue_style( 'default-css', admin_url('admin-ajax.php').'?action=default_css', '', VERSION);
	wp_enqueue_style( 'header-css', admin_url('admin-ajax.php').'?action=header_css&id='.$pid, '', VERSION);
	wp_enqueue_style( 'mobile-nav-css', admin_url('admin-ajax.php').'?action=mobile_nav_css&id='.$pid, '', VERSION);
	wp_enqueue_style( 'hero-css', admin_url('admin-ajax.php').'?action=hero_css&id='.$pid, '', VERSION);
	wp_enqueue_style( 'footer-cta-css', admin_url('admin-ajax.php').'?action=footer_cta_css&id='.$pid, '', VERSION);
	wp_enqueue_style( 'blog-css', admin_url('admin-ajax.php').'?action=blog_css&id='.$pid, '', VERSION);
	wp_enqueue_style( 'service-css', admin_url('admin-ajax.php').'?action=service_css&id='.$pid, '', VERSION);
	wp_enqueue_style( 'footer-css', admin_url('admin-ajax.php').'?action=footer_css&id='.$pid, '', VERSION);
	
}

//Header Css
add_action('wp_ajax_default_css', 'default_css');
add_action('wp_ajax_nopriv_default_css', 'default_css');

add_action('wp_ajax_header_css', 'header_css');
add_action('wp_ajax_nopriv_header_css', 'header_css');

add_action('wp_ajax_mobile_nav_css', 'mobile_nav_css');
add_action('wp_ajax_nopriv_mobile_nav_css', 'mobile_nav_css');

add_action('wp_ajax_hero_css', 'hero_css');
add_action('wp_ajax_nopriv_hero_css', 'hero_css');

add_action('wp_ajax_footer_cta_css', 'footer_cta_css');
add_action('wp_ajax_nopriv_footer_cta_css', 'footer_cta_css');

add_action('wp_ajax_blog_css', 'blog_css');
add_action('wp_ajax_nopriv_blog_css', 'blog_css');

add_action('wp_ajax_service_css', 'service_css');
add_action('wp_ajax_nopriv_service_css', 'service_css');

function default_css() {
		require( get_template_directory().'/style.php' );
	exit;
}

function header_css() {
		require( get_template_directory().'/udm-plugin/headers/custom_style.php' );
	exit;
}
function mobile_nav_css() {
		require( get_template_directory().'/udm-plugin/mobile-headers/custom_style.php' );
	exit;
}

function hero_css() {
		require( get_template_directory().'/udm-plugin/featured/custom_style.php' );
	exit;
}

function footer_cta_css() {
		require( get_template_directory().'/udm-plugin/footer-cta/custom_style.php' );
	exit;
}

function blog_css() {
		require( get_template_directory().'/udm-plugin/blog/custom_style.php' );
	exit;
}

function service_css() {
		require( get_template_directory().'/udm-plugin/service/custom_style.php' );
	exit;
}
//Footer Css
add_action('wp_ajax_footer_css', 'footer_css');
add_action('wp_ajax_nopriv_footer_css', 'footer_css');

function footer_css() {
	require( get_template_directory().'/udm-plugin/footers/custom_style.php' );
	exit;
}
// Enqueue Theme Files
function udmbase_header_scripts() {
	if(get_post_meta( get_the_ID(), 'udm_specific_mobile_nav', true )!="")
	{
		$mobilenavlayout=get_post_meta( get_the_ID(), 'udm_specific_mobile_nav', true );
	}
	else if(get_option('udm_mobile_nav_default')!="")
	{
		$mobilenavlayout=get_option('udm_mobile_nav_default');
	}
	else
	{
		$mobilenavlayout="";
	}
}

function udmbase_footer_scripts() {
	wp_enqueue_script( 'ratingyo-jquery-js', get_template_directory_uri() . '/udm-plugin/js/jquery.min.js' );	
	wp_enqueue_script( 'ratingyo-js', get_template_directory_uri() . '/udm-plugin/js/jquery.rateyo.js');	
	if(get_post_meta( get_the_ID(), 'udm_specific_mobile_nav', true )!="")
	{
		$mobilenavlayout=get_post_meta( get_the_ID(), 'udm_specific_mobile_nav', true );
	}
	else if(get_option('udm_mobile_nav_default')!="")
	{
		$mobilenavlayout=get_option('udm_mobile_nav_default');
	}
	else
	{
		$mobilenavlayout="";
	}
	if(strpos($mobilenavlayout, 'Slide_In') !== false){
		wp_enqueue_script( 'slide-menu-js', get_template_directory_uri() . '/udm-plugin/js/slide-menu.js');
	}
		
}
function udmbase_scripts() {
	// CSS
	wp_enqueue_style( 'base-css',get_template_directory_uri() .'/udm-plugin/css/bootstrap-min.css"' );
	wp_enqueue_style( 'font-awesome-css',get_template_directory_uri() .'/udm-plugin/css/font-awesome.css' );
	wp_enqueue_style( 'base-icons','//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"' );
	wp_enqueue_style( 'proxima-nova', get_template_directory_uri() . '/fonts/proxima-nova/fonts.min.css' );
	wp_enqueue_style( 'component-css', get_template_directory_uri() . '/css/component.css' );
	wp_enqueue_style( 'slide-menu-css', get_template_directory_uri() . '/udm-plugin/css/slide-menu.css' );
	wp_enqueue_style( 'preview-css', get_template_directory_uri() . '/udm-plugin/css/preview.css' );
	wp_enqueue_style( 'rating-css', get_template_directory_uri() . '/udm-plugin/css/jquery.rateyo.min.css' );
	
	// JAVASCRIPT
	 wp_enqueue_script( 'udm-ajax-js', get_template_directory_uri() . '/udm-plugin/js/jquery.min.js');
  
	wp_enqueue_script( 'uglyduck-js', get_template_directory_uri() . '/js/app.js' );
	wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/js/modernizr.custom.js');
	wp_enqueue_script( 'bootsrap-js', get_template_directory_uri() . '/udm-plugin/js/bootstrap.min.js');
	 wp_enqueue_script( 'custom-js',  get_template_directory_uri() . '/js/custom.js'  );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'udmbase_scripts' );
add_action( 'wp_footer', 'udmbase_footer_scripts' );
add_action( 'wp_head', 'udmbase_header_scripts' );
//Frontend Functions End
?>