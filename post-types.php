<?php
//-----------------------------------------------------
// UDM SLIDER
//-----------------------------------------------------
if (get_field('udm_slider','option')) {
	function udm_slider() {
		$labels = array(
			'name'                  => _x( 'Slides', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Slides', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Slides', 'text_domain' ),
			'name_admin_bar'        => __( 'Slides', 'text_domain' ),
			'archives'              => __( 'Slides Archives', 'text_domain' ),
			'attributes'            => __( 'Slides Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Slide:', 'text_domain' ),
			'all_items'             => __( 'All Slides', 'text_domain' ),
			'add_new_item'          => __( 'Add New Slide', 'text_domain' ),
			'add_new'               => __( 'Add Slide', 'text_domain' ),
			'new_item'              => __( 'New Slide', 'text_domain' ),
			'edit_item'             => __( 'Edit Slide', 'text_domain' ),
			'update_item'           => __( 'Update Slide', 'text_domain' ),
			'view_item'             => __( 'View Slide', 'text_domain' ),
			'view_items'            => __( 'View Slides', 'text_domain' ),
			'search_items'          => __( 'Search Slides', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Background Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set background image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove background image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as background image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Slides', 'text_domain' ),
			'description'           => __( 'Homepage Slider', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title' ),
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
		register_post_type( 'slides', $args );
	}
	add_action( 'init', 'udm_slider', 0 );
}
//-----------------------------------------------------
// UDM TESTIMONIALS
//-----------------------------------------------------
if(get_field('udm_testimonials','option')) {
	function udm_testimonials() {
		$labels = array(
			'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Testimonials', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Testimonials', 'text_domain' ),
			'name_admin_bar'        => __( 'Testimonials', 'text_domain' ),
			'archives'              => __( 'Testimonials', 'text_domain' ),
			'attributes'            => __( 'Testimonial Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Testimonial:', 'text_domain' ),
			'all_items'             => __( 'All Testimonials', 'text_domain' ),
			'add_new_item'          => __( 'Add New Testimonial', 'text_domain' ),
			'add_new'               => __( 'Add Testimonial', 'text_domain' ),
			'new_item'              => __( 'New Testimonial', 'text_domain' ),
			'edit_item'             => __( 'Edit Testimonial', 'text_domain' ),
			'update_item'           => __( 'Update Testimonial', 'text_domain' ),
			'view_item'             => __( 'View Testimonial', 'text_domain' ),
			'view_items'            => __( 'View Testimonials', 'text_domain' ),
			'search_items'          => __( 'Search Testimonials', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Testimonial Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set testimonial image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove testimonial image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as testimonial image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into Testimonial', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Testimonials', 'text_domain' ),
			'description'           => __( 'UDM Testimonials', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-format-quote',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'testimonials', $args );
	}
	add_action( 'init', 'udm_testimonials', 0 );
}
//-----------------------------------------------------
// UDM SERVICES
//-----------------------------------------------------
if(get_field('udm_services','option')) {
  function udm_services() {
  	$labels = array(
  		'name'                  => _x( 'Services', 'Post Type General Name', 'text_domain' ),
  		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
  		'menu_name'             => __( 'Services', 'text_domain' ),
  		'name_admin_bar'        => __( 'Services', 'text_domain' ),
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
  		'view_items'            => __( 'View Services', 'text_domain' ),
  		'search_items'          => __( 'Search Services', 'text_domain' ),
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
  		'filter_items_list'     => __( 'Filter services list', 'text_domain' ),
  	);
  	$args = array(
  		'label'                 => __( 'Service', 'text_domain' ),
  		'description'           => __( 'Recent Services', 'text_domain' ),
  		'labels'                => $labels,
  		'supports'              => array( 'title' ),
  		'taxonomies'            => array( 'category', 'post_tag' ),
  		'hierarchical'          => false,
  		'public'                => true,
  		'show_ui'               => true,
  		'show_in_menu'          => true,
  		'menu_position'         => 5,
  		'menu_icon'             => 'dashicons-screenoptions',
  		'show_in_admin_bar'     => true,
  		'show_in_nav_menus'     => true,
  		'can_export'            => true,
  		'has_archive'           => true,
  		'exclude_from_search'   => false,
  		'publicly_queryable'    => true,
  		'capability_type'       => 'post',
  	);
  	register_post_type( 'services', $args );
  }
  add_action( 'init', 'udm_services', 0 );
}
//-----------------------------------------------------
// UDM FAQ
//-----------------------------------------------------
if(get_field('udm_faq','option')) {
  function udm_faqs() {
  	$labels = array(
  		'name'                  => _x( 'FAQs', 'Post Type General Name', 'text_domain' ),
  		'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'text_domain' ),
  		'menu_name'             => __( 'FAQs', 'text_domain' ),
  		'name_admin_bar'        => __( 'FAQs', 'text_domain' ),
  		'archives'              => __( 'FAQ Archives', 'text_domain' ),
  		'attributes'            => __( 'FAQ Attributes', 'text_domain' ),
  		'parent_item_colon'     => __( 'Parent FAQ:', 'text_domain' ),
  		'all_items'             => __( 'All FAQs', 'text_domain' ),
  		'add_new_item'          => __( 'Add New FAQ', 'text_domain' ),
  		'add_new'               => __( 'Add FAQ', 'text_domain' ),
  		'new_item'              => __( 'New FAQ', 'text_domain' ),
  		'edit_item'             => __( 'Edit FAQ', 'text_domain' ),
  		'update_item'           => __( 'Update FAQ', 'text_domain' ),
  		'view_item'             => __( 'View FAQ', 'text_domain' ),
  		'view_items'            => __( 'View FAQ', 'text_domain' ),
  		'search_items'          => __( 'Search FAQ', 'text_domain' ),
  		'not_found'             => __( 'Not found', 'text_domain' ),
  		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
  		'featured_image'        => __( 'Service Image', 'text_domain' ),
  		'set_featured_image'    => __( 'Set FAQ image', 'text_domain' ),
  		'remove_featured_image' => __( 'Remove FAQ image', 'text_domain' ),
  		'use_featured_image'    => __( 'Use as FAQ image', 'text_domain' ),
  		'insert_into_item'      => __( 'Insert into FAQ', 'text_domain' ),
  		'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'text_domain' ),
  		'items_list'            => __( 'FAQs list', 'text_domain' ),
  		'items_list_navigation' => __( 'FAQs list navigation', 'text_domain' ),
  		'filter_items_list'     => __( 'Filter FAQs list', 'text_domain' ),
  	);
  	$args = array(
  		'label'                 => __( 'FAQs', 'text_domain' ),
  		'description'           => __( 'Recent FAQs', 'text_domain' ),
  		'labels'                => $labels,
  		'supports'              => array( 'title' ),
  		'taxonomies'            => '',
  		'hierarchical'          => false,
  		'public'                => true,
  		'show_ui'               => true,
  		'show_in_menu'          => true,
  		'menu_position'         => 5,
  		'menu_icon'             => 'dashicons-editor-help',
  		'show_in_admin_bar'     => true,
  		'show_in_nav_menus'     => true,
  		'can_export'            => true,
  		'has_archive'           => true,
  		'exclude_from_search'   => false,
  		'publicly_queryable'    => true,
  		'capability_type'       => 'post',
  	);
  	register_post_type( 'faqs', $args );
  }
  add_action( 'init', 'udm_faqs', 0 );
}
