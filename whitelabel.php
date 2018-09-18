<?php

//======================================================================
// WHITE LABEL UDM THEME
//======================================================================

// CHANGE HOWDY TEXT
add_filter('gettext', 'change_howdy', 10, 3);
function change_howdy($translated, $text, $domain) {
 if (!is_admin() || 'default' != $domain)
		 return $translated;
 if (false !== strpos($translated, 'Howdy'))
		 return str_replace('Howdy', 'Welcome', $translated);
 return $translated;
}

// Admin footer modification
function remove_footer_admin () {
  echo '<span id="footer-thankyou">Developed by <a href="https://www.uglyduckmarketing.com" target="_blank">Ugly Duck Marketing</a>.</span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

 // REMOVE META BOXES FROM WORDPRESS DASHBOARD FOR ALL USERS
function example_remove_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
}
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );

// CUSTOM ADMIN STYLES
function admin_css() {
  wp_enqueue_style( 'proxima_nova', get_template_directory_uri() . '/fonts/proxima-nova/fonts.min.css' );
  wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/css/admin.css' );
}
add_action('admin_print_styles', 'admin_css' );

// HIDE ADMIN SECTIONS
function remove_menus(){
  remove_menu_page( 'jetpack' );
  remove_menu_page( 'edit-comments.php' );
  // remove_menu_page( 'vc-welcome' );
}
add_action( 'admin_menu', 'remove_menus' );

 // LIMIT THE WORDPRESS EXCERPT
 function custom_excerpt_length( $length ) {
   return 16;
 }
 add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// CHANGE EXCERPT READ MORE
function new_excerpt_more($more) {
  global $post;
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// LOGIN VIEW STYLES
function custom_loginlogo() {
 echo
 '<style type="text/css">

 h1 a {
 	background-image: url('.get_theme_mod("logo_image").') !important;
 	-webkit-background-size: 170px !important;
 	background-size: 170px !important;
 	height: 88px !important;
 	width: 170px !important;
 }
 .login-action-login {
 	background-color: #F6F9FC !important;
	background-size: 110px !important;
 }
 .login form .input, .login input[type=text] {
 	background: #fbfbfb;
 	border: 1px solid #eaeaea !important;
 	padding: 8px !important;
 }
 .login #nav {
 	margin: 24px 0 0;
 	text-align: center !important;
 }
 input:-webkit-autofill {
 	-webkit-box-shadow: 0 0 0px 1000px white inset !important;
 	border: 1px solid #eaeaea !important;
 }
 .wp-core-ui .button-primary {
 	-webkit-box-shadow: none !important;
 	box-shadow: none !important;
 	border: none !important;
 	border-radius: 0px !important;
 	text-shadow: none !important;
 	background: #F26B26 !important;
 	padding: 0 17px 2px;
 	border-radius: 2px !important;
 	transition: all .3s ease;
 }
 .wp-core-ui .button-primary:hover {
 	background: #f95300 !important;
 	transition: all .3s ease;
 }
 .login form input[type=checkbox] {
 	padding: 0px !important;
 }
 input[type="text"]:focus, input[type="password"]:focus, input[type="checkbox"]:focus, input[type="color"]:focus, input[type="date"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="email"]:focus, input[type="month"]:focus, input[type="number"]:focus, input[type="radio"]:focus, input[type="tel"]:focus, input[type="time"]:focus, input[type="url"]:focus, input[type="week"]:focus, input[type="search"]:focus, select:focus, textarea:focus {
 	border: 1px solid #d8d8d8;
 	-webkit-box-shadow: none;
 	box-shadow: none;
 	background-color: #fff;
 	color: #32373c;
 	outline: 0;
 	-webkit-transition: 50ms border-color ease-in-out;
 	transition: 50ms border-color ease-in-out;
 }
 input[type="text"], input[type="password"], input[type="checkbox"], input[type="color"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="email"], input[type="month"], input[type="number"], input[type="radio"], input[type="tel"], input[type="time"], input[type="url"], input[type="week"], input[type="search"], select, textarea {
 	border: 1px solid rgba(0, 0, 0, .1);
 	-webkit-box-shadow: none;
 	box-shadow: none;
 	background-color: #fff;
 	color: #32373c;
 	outline: 0;
 	-webkit-transition: 50ms border-color ease-in-out;
 	transition: 50ms border-color ease-in-out;
 }
 .login form, .login #login_error, .login .message {
 	-webkit-box-shadow: 0 15px 35px rgba(50, 50, 93, .02), 0 5px 15px rgba(0, 0, 0, .07) !important;
 	box-shadow: 0 15px 35px rgba(50, 50, 93, .02), 0 5px 15px rgba(0, 0, 0, .07) !important;
 	border-radius: 3px;
 }
 .forgetmenot {
 	margin-top: 6px !important;
 }
 .login #login_error, .login .message {
 	border-left: 4px solid #F26B26;
 }
 a:hover {
 	color: #F26B26 !important;
 }
 p#backtoblog {
 	display: none;
 }

 </style>';
 }
add_action('login_head', 'custom_loginlogo');
