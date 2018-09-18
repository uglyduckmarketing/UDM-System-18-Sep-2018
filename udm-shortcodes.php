<?php

// *** UDM SHORTCODES ***

// Phone Number
function phone_number() {
	echo get_option('phone_number');
}
add_shortcode( 'udm_phone', 'phone_number' );

// Fax Number
function fax_number() {
	echo get_option('fax_number');
}
add_shortcode( 'udm_fax', 'fax_number' );



// Company Name
function udm_company_logo_func() {
	//return get_option('logo_url');
	return get_theme_mod('logo_image');
}
add_shortcode( 'udm_company_logo', 'udm_company_logo_func' );

// Company Name
function udm_company_name_func() {
	return get_option('company_name');
}
add_shortcode( 'udm_company_name', 'udm_company_name_func' );

// Company Phone
function udm_company_phone_func() {
	return get_option('phone_number');
}
add_shortcode( 'udm_company_phone', 'udm_company_phone_func' );

// Company Fax
function udm_company_fax_func() {
	return get_option('fax_number');
}
add_shortcode( 'udm_company_fax', 'udm_company_fax_func' );

//
function udm_company_address_func() {
	return get_option('udm_address');
}
add_shortcode( 'udm_company_address', 'udm_company_address_func' );

//
function udm_company_city_func() {
	return get_option('udm_city');
}
add_shortcode( 'udm_company_city', 'udm_company_city_func' );

//
function udm_company_state_func() {
	return get_option('udm_state');
}
add_shortcode( 'udm_company_state', 'udm_company_state_func' );

//
function udm_company_zipcode_func() {
	return get_option('udm_zip');
}
add_shortcode( 'udm_company_zipcode', 'udm_company_zipcode_func' );

//
function udm_company_email_func() {
	return get_option('udm_email');
}
add_shortcode( 'udm_company_email', 'udm_company_email_func' );
