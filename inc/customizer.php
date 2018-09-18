<?php
/**
 * uglyduck Theme Customizer.
 *
 * @package uglyduck
 */

 /**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function udbase_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	//Image Settings
		$wp_customize->add_section('udbase_logo', array(
		'title' => __('Logo Options', 'udbase_logo'), 
		'description' => 'Modify the theme logo'
		));
		$wp_customize->add_setting('logo_image',array(
		'default' => '', 
		));
		$wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'logo_image',array(
		'label' => __('Change Logo', 'udbase'), 
		'section' => 'udbase_logo',
		'settings' => 'logo_image'
		) ));
		$wp_customize->add_section('udbase_lightlogo', array(
		'title' => __('Light Logo Options', 'udbase_lightlogo'), 
		'description' => 'Modify the light logo'
		));
		$wp_customize->add_setting('solutions_image',array(
		'default' => '', 
		));
		$wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'solutions_image',array(
		'label' => __('Change Light Logo', 'udbase'), 
		'section' => 'udbase_lightlogo',
		'settings' => 'solutions_image'
		) ));
}
add_action( 'customize_register', 'udbase_customize_register' );
	function udbase_customizer_register($wp_customize) {
		$wp_customize->add_section('udbase_contact', array('title' => __('Contact Settings', 'udbase_contact'), 'description' => 'Modify the contact settings'));
		$wp_customize->add_setting('udm_phone_number',array('default' => 'Phone Number', 'label' => 'Phone Number',));
		$wp_customize->add_setting('udm_email_address',array('default' => 'Email Address', 'label' => 'Email Address',));
		$wp_customize->add_setting('udm_street',array('default' => 'Address', 'label' => 'Address', ));
		$wp_customize->add_setting('udm_city',array('default' => 'City','label' => 'City',  ));
		$wp_customize->add_setting('udm_state',array('default' => 'State','label' => 'State',  ));
		$wp_customize->add_setting('udm_zip',array('default' => 'Zip Code', 'label' => 'Zip Code', ));
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'udm_phone_number',array('type' => 'tel','pattern' => '[0-9]','label' => __('Edit Phone Number', 'udbase'), 'description' => __('Enter phone number without spaces or additional characters (eg: 6611234567). ', 'udbase'),'section' => 'udbase_contact','settings' => 'udm_phone_number') ));
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'udm_email_address',array('type' => 'email','label' => __('Edit Email Address', 'udbase'), 'section' => 'udbase_contact','settings' => 'udm_email_address') ));
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'udm_street',array('label' => __('Edit Address', 'udbase'), 'section' => 'udbase_contact','settings' => 'udm_street') ));
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'udm_city',array('label' => __('Edit City', 'udbase'), 'section' => 'udbase_contact','settings' => 'udm_city') ));
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'udm_state',array('label' => __('Edit State', 'udbase'), 'section' => 'udbase_contact','settings' => 'udm_state') ));
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'udm_zip',array('label' => __('Edit Zip Code', 'udbase'), 'section' => 'udbase_contact','settings' => 'udm_zip') ));
	}
	add_action('customize_register', 'udbase_customizer_register');
	function location_shortcode() {
		echo get_theme_mod('udm_street');
		echo '<br>';
		echo get_theme_mod('udm_city');
		echo ', ';
		echo get_theme_mod('udm_state');
		echo ' ';
		echo get_theme_mod('udm_zip');
	}
	add_shortcode('udm_location', 'location_shortcode');
	function phone_number_shortcode() {
		echo '<a href="tel://+1';
		echo get_theme_mod('udm_phone_number');
		echo '"> (';
		echo substr(get_theme_mod('udm_phone_number'), 0,3);
		echo ') ';
		echo substr(get_theme_mod('udm_phone_number'), 3,3);
		echo '-';
		echo substr(get_theme_mod('udm_phone_number'), 6,4);
		echo '</a>';
	}
	add_shortcode('udm_phone', 'phone_number_shortcode');
	function email_shortcode() {
		echo '<a href="mailto:';
		echo get_theme_mod('udm_email_address');
		echo '?Subject=Hello%20" target="_top">';
		echo get_theme_mod('udm_email_address');
		echo '</a>';
	}
	add_shortcode('udm_email', 'email_shortcode');
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function udbase_customize_preview_js() {
	wp_enqueue_script( 'udbase_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'udbase_customize_preview_js' );
?>