<?php
//======================================================================
// THEME SETUP
//======================================================================

 /**
 * Load CSS and JS the right way
 */
function udm_load_css_and_js() {
	wp_enqueue_style( 'stylesheet', 'https://fonts.googleapis.com/css?family=Lato:300,400,700');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'custom', get_stylesheet_directory_uri(). '/css/custom.css' );
}
add_action( 'wp_enqueue_scripts', 'udm_load_css_and_js' );

function dummy_header_data(){
	if(get_option('header_layout_Basic_Header_default') == ''){
		$data = array();
		$data['header_layout_template'] = "1";
		$data['header_layout_name'] = "default";
		$data['top_bar'] = "yes";
		$data['right_header'] = "yes";
		$data['right_header_text'] = "Call For An Estimate";
		$data['right_header_phone'] = "+91-7009292384";
		$data['lefttopbarphone'] = "yes";
		$data['left_top_bar_show'] = "yes";
		$data['right_top_bar_show'] = "yes";
		$data['lefttopbar_phone_overright'] = "yes";
		$data['righttopbarsocial'] = "yes";
		$data['righttopbar_social_icon_style'] = "default";
		$data['lefttopbar_phone_number'] = "+91-7009292384";
		
		$data['lefttopbar_phone_left_text'] = "Call Today For A Free Estimate";
		update_option('udm_facebook_link','#');
		update_option('udm_twitter_link','#');
		update_option('udm_instagram_link','#');
		
		$menu_name = 'Dummy Menu';
		$menu_exists = wp_get_nav_menu_object( $menu_name );

		// If it doesn't exist, let's create it.
		if( !$menu_exists){
		$menu_id = wp_create_nav_menu($menu_name);

		// Set up default menu items
		wp_update_nav_menu_item($menu_id, 0, array(
		'menu-item-title' =>  __('Home'),
		'menu-item-classes' => 'home',
		'menu-item-url' => home_url( '/' ), 
		'menu-item-status' => 'publish'));

		wp_update_nav_menu_item($menu_id, 0, array(
		'menu-item-title' =>  __('About'),
		'menu-item-url' => home_url( '/' ), 
		'menu-item-status' => 'publish'));
		
		wp_update_nav_menu_item($menu_id, 0, array(
		'menu-item-title' =>  __('Services'),
		'menu-item-url' => home_url( '/' ), 
		'menu-item-status' => 'publish'));
		
		wp_update_nav_menu_item($menu_id, 0, array(
		'menu-item-title' =>  __('Products'),
		'menu-item-url' => home_url( '/' ), 
		'menu-item-status' => 'publish'));
		
		wp_update_nav_menu_item($menu_id, 0, array(
		'menu-item-title' =>  __('Design'),
		'menu-item-url' => home_url( '/' ), 
		'menu-item-status' => 'publish'));
		
		wp_update_nav_menu_item($menu_id, 0, array(
		'menu-item-title' =>  __('Contact'),
		'menu-item-url' => home_url( '/' ), 
		'menu-item-status' => 'publish'));
		}
		$data['navigation'] = "dummy-menu";
		$data['background_color'] = "custom";
		$data['link_color'] = "custom";
		$data['topbar_background_color'] = "custom";
		$data['topbar_link_color'] = "custom";
		$data['topbar_text_color'] = "custom";
		$data['righttopbar_social_icon_color'] = "custom";
		$data['right_header_color'] = "custom";
		$data['right_header_phone_color'] = "custom";
		$data['background_custom_color'] = "#ffffff";
		$data['link_custom_color'] = "#101010";
		$data['topbar_background_custom_color'] = "#000000";
		$data['topbar_link_custom_color'] = "#ffffff";
		$data['topbar_text_custom_color'] = "#ffffff";
		$data['righttopbar_social_icon_custom_color'] = "#ffffff";
		$data['right_header_custom_color'] = "#21cb5a";
		$data['right_header_phone_custom_color'] = "#101010";
		$header_layout = serialize($data);
		$headername="Basic_Header_".str_replace(" ","_","default");
		update_option('header_layout_'.$headername, $header_layout );
		update_option('udm_header_default',$headername);
	}
}

// Basic Theme Support
if ( ! function_exists( 'udmbase_setup' ) ) :
	function udmbase_setup() {
		load_theme_textdomain( 'udmbase', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );
		add_theme_support( 'woocommerce' );

	}
endif;
add_action( 'after_setup_theme', 'udmbase_setup' );

add_action("after_switch_theme", "dummy_header_data");



// Create Navigation Locations
register_nav_menus(
	array(
		'primary' => esc_html__( 'Primary Menu', 'udmbase' ),
		'mobile' => esc_html__( 'Mobile Menu', 'udmbase' ),
	)
);

// Open Graph Functionality
add_filter('language_attributes', 'add_og_xml_ns');
function add_og_xml_ns($content) {
  return ' xmlns:og="http://ogp.me/ns#" ' . $content;
}
add_filter('language_attributes', 'add_fb_xml_ns');
function add_fb_xml_ns($content) {
  return ' xmlns:fb="https://www.facebook.com/2008/fbml" ' . $content;
}

// Gve Editors Access To The Forms Menu
function my_custom_change_ninja_forms_all_forms_capabilities_filter( $capabilities ) {
    $capabilities = "edit_pages";
    return $capabilities;
}
add_filter( 'ninja_forms_admin_parent_menu_capabilities', 'my_custom_change_ninja_forms_all_forms_capabilities_filter' );
add_filter( 'ninja_forms_admin_all_forms_capabilities', 'my_custom_change_ninja_forms_all_forms_capabilities_filter' );

// Give Editors Access To Add New Forms
function my_custom_change_ninja_forms_add_new_capabilities_filter( $capabilities ) {
    $capabilities = "edit_pages";
    return $capabilities;
}
function nf_subs_capabilities( $cap ) {
    return 'edit_posts';
}
add_filter( 'ninja_forms_admin_parent_menu_capabilities', 'my_custom_change_ninja_forms_add_new_capabilities_filter' );
add_filter( 'ninja_forms_admin_add_new_capabilities', 'my_custom_change_ninja_forms_add_new_capabilities_filter' );
add_filter( 'ninja_forms_admin_submissions_capabilities', 'nf_subs_capabilities' );
add_filter( 'ninja_forms_admin_parent_menu_capabilities', 'nf_subs_capabilities' );
add_filter( 'ninja_forms_admin_menu_capabilities', 'nf_subs_capabilities' );

// Disable Wordpress Auto Emails
function wpb_stop_update_emails( $send, $type, $core_update, $result ) {
if ( ! empty( $type ) && $type == 'success' ) {
	return false;
}
	return true;
}
add_filter( 'auto_core_update_send_email', 'wpb_stop_auto_update_emails', 10, 4 );

// Add Excerpt To Pages
function add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_excerpts_to_pages' );

// Allow SVG Uploads
function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//======================================================================
// WIDGETS
//======================================================================

// Widget Structure
add_action( 'widgets_init', 'create_widget' );
function create_widget( ) {
	/*Default Sidebar*/
	register_sidebar( array(
	'name'          => __('Default Sidebar', 'udmbase' ),
	'id'            => 'sidebar_1',
	'description'   => __('This will hold the default WP widget', 'udmbase' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	) );
	/*Footer Section One*/
	register_sidebar( array(
	'name'          => __('Footer Section One', 'udmbase' ),
	'id'            => 'footer_one',
	'description'   => __('Displays in the first section of the footer', 'udmbase' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	) );
	/*Footer Section Two*/
	register_sidebar( array(
	'name'          => __('Footer Section Two', 'udmbase' ),
	'id'            => 'footer_two',
	'description'   => __('Displays in the second section of the footer', 'udmbase' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	) );
	/*Footer Section Three*/
	register_sidebar( array(
	'name'          => __('Footer Section Three', 'udmbase' ),
	'id'            => 'footer_three',
	'description'   => __('Displays in the third section of the footer', 'udmbase' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	) );
	/*Footer Section Four*/
	register_sidebar( array(
	'name'          => __('Footer Section Four', 'udmbase' ),
	'id'            => 'footer_four',
	'description'   => __('Displays in the fourth section of the footer', 'udmbase' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	) );
	/*Footer Right Column*/
	register_sidebar( array(
	'name'          => __('Footer Right Column', 'udmbase' ),
	'id'            => 'footer_five',
	'description'   => __('Displays in the fifth section of the footer (This option changes the footer layout)', 'udmbase' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	) );
	/*Header Widget*/
	register_sidebar( array(
	'name'          => __('Header Widget', 'udmbase' ),
	'id'            => 'header_widget',
	'description'   => __('Displays In Header Section', 'udmbase' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	) );
	/*Woocommerce Sidebar*/
	register_sidebar( array(
	'name'          => __('Woocommerce Sidebar', 'udmbase' ),
	'id'            => 'woo_sidebar',
	'description'   => __('Displays items in Woocommerce Sidebar', 'udmbase' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	) );
	/*Left Sidebar*/
	register_sidebar( array(
	'name'          => __('Left Sidebar', 'udmbase' ),
	'id'            => 'left_sidebar',
	'description'   => __('Use this to display a sidebar on left side (Choose left or right only)', 'udmbase' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	) );
	/*Right Sidebar*/
	register_sidebar( array(
	'name'          => __('Right Sidebar', 'udmbase' ),
	'id'            => 'right_sidebar',
	'description'   => __('Use this to display a sidebar on right side (Choose left or right only)', 'udmbase' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	) );
	/*Left Blog Sidebar*/
	register_sidebar( array(
	'name'          => __('Left Blog Sidebar', 'udmbase' ),
	'id'            => 'left_blog_sidebar',
	'description'   => __('Use this to display a sidebar on left side of the blog (Choose left or right only)', 'udmbase' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	) );
	/*Right Blog Sidebar*/
	register_sidebar( array(
	'name'          => __('Right Blog Sidebar', 'udmbase' ),
	'id'            => 'right_blog_sidebar',
	'description'   => __('Use this to display a sidebar on right side of the blog (Choose left or right only)', 'udmbase' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	) );
}

// Enable Shortcodes In Widgets
add_filter( 'widget_text', 'do_shortcode' );

global $content_width;
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

//  Include File UDM Plugin Functions
require_once(dirname(__FILE__) .'/udm-plugin/index.php');
require_once(dirname(__FILE__) .'/inc/meta-fields/meta_fields.php');

// Gallery Post Type
function gallery_post_type() {
	$labels = array(
		'name'                  => _x( 'Gallery', 'Post Type General Name', 'udmbase' ),
		'singular_name'         => _x( 'Gallery', 'Post Type Singular Name', 'udmbase' ),
		'menu_name'             => __( 'Gallery', 'udmbase' ),
		'name_admin_bar'        => __( 'Gallery', 'udmbase' ),
		'archives'              => __( 'Gallery Archives', 'udmbase' ),
		'attributes'            => __( 'Gallery Attributes', 'udmbase' ),
		'parent_item_colon'     => __( 'Parent Gallery:', 'udmbase' ),
		'all_items'             => __( 'All Galleries', 'udmbase' ),
		'add_new_item'          => __( 'Add New Gallery', 'udmbase' ),
		'add_new'               => __( 'Add Gallery', 'udmbase' ),
		'new_item'              => __( 'New Gallery', 'udmbase' ),
		'edit_item'             => __( 'Edit Gallery', 'udmbase' ),
		'update_item'           => __( 'Update Gallery', 'udmbase' ),
		'view_item'             => __( 'View Gallery', 'udmbase' ),
		'view_items'            => __( 'View Galleries', 'udmbase' ),
		'search_items'          => __( 'Search Gallery', 'udmbase' ),
		'not_found'             => __( 'Not found', 'udmbase' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'udmbase' ),
		'featured_image'        => __( 'Featured Image', 'udmbase' ),
		'set_featured_image'    => __( 'Set featured image', 'udmbase' ),
		'remove_featured_image' => __( 'Remove featured image', 'udmbase' ),
		'use_featured_image'    => __( 'Use as featured image', 'udmbase' ),
		'insert_into_item'      => __( 'Insert into item', 'udmbase' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'udmbase' ),
		'items_list'            => __( 'Items list', 'udmbase' ),
		'items_list_navigation' => __( 'Items list navigation', 'udmbase' ),
		'filter_items_list'     => __( 'Filter items list', 'udmbase' ),
	);
	$args = array(
		'label'                 => __( 'Gallery', 'udmbase' ),
		'description'           => __( 'Gallery', 'udmbase' ),
		'labels'                => $labels,
		'supports'              => array( 'title','thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gallery', $args );
}
add_action( 'init', 'gallery_post_type', 0 );


// Service Post Type
function service_post_type() {
	$labels = array(
		'name'                  => _x( 'Service', 'Post Type General Name', 'udmbase' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'udmbase' ),
		'menu_name'             => __( 'Service', 'udmbase' ),
		'name_admin_bar'        => __( 'Service', 'udmbase' ),
		'archives'              => __( 'Service Archives', 'udmbase' ),
		'attributes'            => __( 'Service Attributes', 'udmbase' ),
		'parent_item_colon'     => __( 'Parent Service:', 'udmbase' ),
		'all_items'             => __( 'All Services', 'udmbase' ),
		'add_new_item'          => __( 'Add New Service', 'udmbase' ),
		'add_new'               => __( 'Add Service', 'udmbase' ),
		'new_item'              => __( 'New Service', 'udmbase' ),
		'edit_item'             => __( 'Edit Service', 'udmbase' ),
		'update_item'           => __( 'Update Service', 'udmbase' ),
		'view_item'             => __( 'View Service', 'udmbase' ),
		'view_items'            => __( 'View Service', 'udmbase' ),
		'search_items'          => __( 'Search Service', 'udmbase' ),
		'not_found'             => __( 'Not found', 'udmbase' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'udmbase' ),
		'featured_image'        => __( 'Service Image', 'udmbase' ),
		'set_featured_image'    => __( 'Set service image', 'udmbase' ),
		'remove_featured_image' => __( 'Remove service image', 'udmbase' ),
		'use_featured_image'    => __( 'Use as service image', 'udmbase' ),
		'insert_into_item'      => __( 'Insert into service', 'udmbase' ),
		'uploaded_to_this_item' => __( 'Uploaded to this service', 'udmbase' ),
		'items_list'            => __( 'Services list', 'udmbase' ),
		'items_list_navigation' => __( 'Services list navigation', 'udmbase' ),
		'filter_items_list'     => __( 'Filter Services list', 'udmbase' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'udmbase' ),
		'description'           => __( 'Service', 'udmbase' ),
		'labels'                => $labels,
		'supports' =>array( 'title', 'thumbnail' ),
		'taxonomies' => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );
}
add_action( 'init', 'service_post_type');
if ( ! function_exists( 'service_cat' ) ) {

// Register Custom Taxonomy
function service_cat() {

	$labels = array(
		'name'                       => _x( 'Service Categories', 'Taxonomy General Name', 'udmbase' ),
		'singular_name'              => _x( 'Service Category', 'Taxonomy Singular Name', 'udmbase' ),
		'menu_name'                  => __( 'Service Category', 'udmbase' ),
		'all_items'                  => __( 'Service Categories', 'udmbase' ),
		'parent_item'                => __( 'Parent Service Category', 'udmbase' ),
		'parent_item_colon'          => __( 'Parent Service Category:', 'udmbase' ),
		'new_item_name'              => __( 'New Service Category', 'udmbase' ),
		'add_new_item'               => __( 'Add New Service Category', 'udmbase' ),
		'edit_item'                  => __( 'Edit Service Category', 'udmbase' ),
		'update_item'                => __( 'Update Service Category', 'udmbase' ),
		'view_item'                  => __( 'View Service Category', 'udmbase' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'udmbase' ),
		'add_or_remove_items'        => __( 'Add or remove service categories', 'udmbase' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'udmbase' ),
		'popular_items'              => __( 'Popular service categories', 'udmbase' ),
		'search_items'               => __( 'Search Items', 'udmbase' ),
		'not_found'                  => __( 'Not Found', 'udmbase' ),
		'no_terms'                   => __( 'No items', 'udmbase' ),
		'items_list'                 => __( 'Items list', 'udmbase' ),
		'items_list_navigation'      => __( 'Items list navigation', 'udmbase' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite' => true
	);
	register_taxonomy( 'services', array( 'service' ), $args );
}
add_action( 'init', 'service_cat', 0 );
}

require_once dirname( __FILE__ ) . '/inc/class-udm-plugin-activation.php';
add_action( 'udmbase_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {
	$plugins = array(
	
		array(
			'name'               => 'Ninja Form', 
			'slug'               => 'ninja-forms',
			'source'             => get_stylesheet_directory() . '/plugins/ninja-forms.zip', 
			'required'           => true, 
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),array(
			'name'               => 'Advanced Custom Fields', 
			'slug'               => 'advanced-custom-fields-pro',
			'source'             => get_stylesheet_directory() . '/plugins/advanced-custom-fields-pro.zip', 
			'required'           => true, 
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),
		
	);
	
	$config = array(
		'id'           => 'udmbase',             
		'default_path' => '',  
		'menu'         => 'udmbase-install-plugins', 
		'parent_slug'  => 'themes.php',           
		'capability'   => 'edit_theme_options',    
		'has_notices'  => true,                  
		'dismissable'  => true,                 
		'dismiss_msg'  => '',                     
		'is_automatic' => false,                   
		'message'      => '',              
	);
	udmbase( $plugins, $config );
}

function theme_pre_set_transient_update_theme ( $transient ) {
 if( empty( $transient->checked['udmbase'] ) )
    return $transient;

  $ch = curl_init();
 
  curl_setopt($ch, CURLOPT_URL, 'http://ppcfollowers.com/test.php' );
 
 // 3 second timeout to avoid issue on the server
 curl_setopt($ch, CURLOPT_TIMEOUT, 3 ); 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 $result = curl_exec($ch);
 curl_close($ch);

 // make sure that we received the data in the response is not empty
 if( empty( $result ) )
   return $transient;

 //check server version against current installed version
 if( $data = json_decode( $result ) ){
   if( version_compare( $transient->checked['udmbase'], $data->new_version, '<' ) )
 $transient->response['udmbase'] = (array) $data;
 }
 
 return $transient;

} 
add_filter ( 'pre_set_site_transient_update_themes', 'theme_pre_set_transient_update_theme' );

function udm_posts_pagination() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}