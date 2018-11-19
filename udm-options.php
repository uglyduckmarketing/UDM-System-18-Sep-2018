<?php
function theme_settings_page() {
?>
<!-- Theme Options Styles -->
<style>
input, select {
	margin: 1px;
	padding: 5px 8px;
	color: #555;
	border: none;
	outline: none;
}
#tab-3 td input {
	width: 100% !important;
}
tbody {
	border-right: 1px solid #efefef;
}
tr {
	border-top: 1px solid #efefef;
}
tr:last-child {
	border-bottom: 1px solid #efefef;
}
.wp-picker-container {
	margin-left: 18px;
}
.form-table th {
	color: #333;
	background: #f9f9f9;
	padding-left: 15px;
	border-right: 1px solid #efefef;
	border-left: 1px solid #efefef;
}
.form-table input[type=radio] {
	margin-left: 20px;
}
.form-table input[type=radio]:nth-child(1) {
	margin-left: 10px;
}
th .dashicons {
  border: none;
  text-decoration: none;
  vertical-align: middle;
  margin-left: 2px;
  margin-top: -4px;
  color: orange;
}
ul.tabs {
	margin: 0px;
	padding: 0px;
	list-style: none;
}
ul.tabs li {
	background: none;
	color: #222;
	display: inline-block;
	padding: 20px 15px;
	cursor: pointer;
	margin-bottom: 0px;
	margin-top: 22px;
}
ul.tabs li.current {
	background: #ffffff;
	color: #333;
}
.tab-content {
	display: none;
	background: #fff;
	padding: 15px;
}
.tab-content.current {
	display: inherit;
}
.tab-content textarea {
	width: 100%;
	height: 150px;
	border: none !important;
}
.tab-content input[type="color"] {
	width: 40px;
	height: 44px;
	padding: 0px;
	box-shadow: none !important;
	border: none !important;
	vertical-align: middle;
	margin-right: 10px;
}
</style>
<!-- Theme Options JS -->
<script>
jQuery(document).ready(function($) {
	<?php if(!empty($_GET['tab'])): ?>
    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');
    $('.tab-link[data-tab="<?php echo isset($_GET['tab']) ? $_GET['tab'] : ''; ?>"]').addClass('current');
    $("#<?php echo isset($_GET['tab']) ? $_GET['tab'] : ''; ?>").addClass('current');
  <?php else: ?>

  <?php endif; ?>

	$('ul.tabs li').click(function() {
		var tab_id = $(this).attr('data-tab');
		var id = $(this).data('tab');
		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');
		$(this).addClass('current');
		$("#" + tab_id).addClass('current');
		//update the URL
		  url = window.location.href,
		  separator = (url.indexOf("?") === -1) ? "?" : "&",
		  param = 'tab';
		  regex = new RegExp('('+param+'=)[^\&]+');
		  matches = url.match('('+param+'=)[^\&]+');
		 if(matches != null){
		   newUrl = url.replace( regex , '$1' + id);
		 }
		 else{
		   newUrl = url + separator + "tab=" + id;
		 }
		 window.history.replaceState(null, null, newUrl);
	});
	$('.udm_color_picker').wpColorPicker();
});
</script>
<!-- Theme Options Page Wrap -->
<div class="wrap udm-opt">
  <h1>Theme Options</h1>
  <ul class="tabs">
    <li class="tab-link current" data-tab="tab-1">General Settings</li>
    <li class="tab-link" data-tab="tab-5">Company Info</li>
    <li class="tab-link" data-tab="tab-2">Layout Settings</li>
    <li class="tab-link" data-tab="tab-3">Social Settings</li>
    <li class="tab-link" data-tab="tab-4">Color Options</li>
  </ul>
  <form method="post" action="options.php">
      <?php
      settings_fields("section");
      echo '<div id="tab-1" class="tab-content current">';
      do_settings_sections("theme-options");
      echo '</div>';
      echo '<div id="tab-2" class="tab-content">';
      do_settings_sections("home-options");
      echo '</div>';
      echo '<div id="tab-3" class="tab-content">';
      do_settings_sections("social-options");
      echo '</div>';
      echo '<div id="tab-4" class="tab-content">';
      do_settings_sections("brand-options");
      echo '</div>';
      echo '<div id="tab-5" class="tab-content">';
      do_settings_sections("company-info-options");
      echo '</div>';
      submit_button();
      ?>
  </form>
</div>
<?php
}
// Logo Url
function display_topbar_text() {
?>
  <input name="topbar_text" id="topbar_text" value="<?php echo get_option('topbar_text',UDM_TOPBAR_TEXT_DEFAULT); ?>" style="width:100%" />
<?php
}
// Header Code
function display_header_code() {
?>
  <textarea name="header_code" id="header_code"/><?php echo get_option('header_code'); ?></textarea>
<?php
}
// Footer Code
function display_footer_code() {
?>
  <textarea name="footer_code" id="footer_code"><?php echo get_option('footer_code'); ?></textarea>
<?php
}

// Map Styles Code
function display_map_styles() {
?>
  <textarea name="map_code" id="map_code"><?php echo get_option('map_code'); ?></textarea>
<?php
}

// Header Type
function display_header_choice() {
?>
  <input name="header_choice" type="radio" value="one" <?php checked( 'one', get_option( 'header_choice' ) ); ?> >Header One</input>
  <input name="header_choice" type="radio" value="two" <?php checked( 'two', get_option( 'header_choice' ) ); ?> >Header Two</input>
  <input name="header_choice" type="radio" value="three" <?php checked( 'three', get_option( 'header_choice' ) ); ?> >Header Three</input>
  <input name="header_choice" type="radio" value="four" <?php checked( 'four', get_option( 'header_choice' ) ); ?> >Header Four</input>
<?php
}

function centered_nav() {
?>
<label>
  <input type="checkbox" name="centeredNav" value="Yes"<?php checked( 'Yes' == get_option('centeredNav') ); ?> />
 	Centered Navigation? (Floats Left If Not Checked)
</label>
<?php
}

// Footer Type
function display_footer_choice() {
?>
  <input name="footer_choice" type="radio" value="one" <?php checked( 'one', get_option( 'footer_choice' ) ); ?> >Footer One</input>
  <input name="footer_choice" type="radio" value="two" <?php checked( 'two', get_option( 'footer_choice' ) ); ?> >Footer Two</input>
<?php
}

// Hero Type
function display_hero_choice() {
?>
  <input name="hero_choice" type="radio" value="none" <?php checked( 'none', get_option( 'hero_choice' ) ); ?> >None</input>
  <input name="hero_choice" type="radio" value="one" <?php checked( 'one', get_option( 'hero_choice' ) ); ?> >Hero One</input>
  <input name="hero_choice" type="radio" value="three" <?php checked( 'three', get_option( 'hero_choice' ) ); ?> >Hero Three</input>
<?php
}

// Hero Title
function display_hero_title_choice() {
?>
  <input name="hero_title_choice" type="radio" value="none" <?php checked( 'none', get_option( 'hero_title_choice' ) ); ?> >None</input>
  <input name="hero_title_choice" type="radio" value="underline" <?php checked( 'underline', get_option( 'hero_title_choice' ) ); ?> >Small Underline</input>
  <input name="hero_title_choice" type="radio" value="center-box" <?php checked( 'center-box', get_option( 'hero_title_choice' ) ); ?> >Center Box</input>
<?php
}

// Hero Height
function hero_height() {
?>
  <input name="hero_height" id="hero_height" value="<?php echo get_option('hero_height'); ?>" />
<?php
}

// Hero Text Size
function hero_text_size() {
?>
  <input name="hero_text_size" id="hero_text_size" value="<?php echo get_option('hero_text_size', '38px'); ?>" />
<?php
}

// Slider Height
function slider_height() {
?>
  <input name="slider_height" id="slider_height" value="<?php echo get_option('slider_height', '650px'); ?>" />
<?php
}

// Hero Overlay Opacity
function hero_overlay() {
?>
  <input name="hero_overlay" id="hero_overlay" value="<?php echo get_option('hero_overlay'); ?>" />
<?php
}

// Blog Type
function display_blog_choice() {
?>
  <input name="blog_choice" type="radio" value="one" <?php checked( 'one', get_option( 'blog_choice' ) ); ?> >Blog One</input>
<?php
}

// Post Page Type
function display_post_choice() {
?>
  <input name="post_choice" type="radio" value="one" <?php checked( 'one', get_option( 'post_choice' ) ); ?> >Post Page One</input>
<?php
}

// Contact Page Type
function display_contact_choice() {
?>
  <input name="contact_choice" type="radio" value="one" <?php checked( 'one', get_option( 'contact_choice' ) ); ?> >Contact Page One</input>
<?php
}

// Show Or Hide Slider?
function display_slider() {
?>
<label>
  <input type="checkbox" name="slider" value="Yes"<?php checked( 'Yes' == get_option('slider') ); ?> />
  Display Slider On Homepage?
</label>
<?php
}

// Show Or Hide Topbar?
function display_topbar() {
?>
<label>
  <input type="checkbox" name="topbar" value="Yes"<?php checked( 'Yes' == get_option('topbar') ); ?> />
  Display Topbar Above Navigation?
</label>
<?php
}

// Dark Or Light Sidebar Type
function display_sidebar_style() {
?>
  <input name="sidebar_style" type="radio" value="light-sidebar" <?php checked( 'light-sidebar', get_option( 'sidebar_style' ) ); ?>>Light Sidebar</input>
  <input name="sidebar_style" type="radio" value="reverse-sidebar" <?php checked( 'reverse-sidebar', get_option( 'sidebar_style' ) ); ?>>Dark Sidebar</input>
<?php
}

// Company Name
function company_name() {
?>
  <input name="company_name" id="company_name" value="<?php echo get_option('company_name'); ?>" />
<?php
}

// Phone Number
function display_phone() {
?>
  <input name="phone_number" id="phone_number" value="<?php echo get_option('phone_number'); ?>" />
<?php
}

// Fax Number
function display_fax() {
?>
  <input name="fax_number" id="fax_number" value="<?php echo get_option('fax_number'); ?>" />
<?php
}

// Address
function display_address() {
?>
  <input name="udm_address" id="udm_address" value="<?php echo get_option('udm_address'); ?>" />
<?php
}

// City
function display_city() {
?>
  <input name="udm_city" id="udm_city" value="<?php echo get_option('udm_city'); ?>" />
<?php
}

// State
function display_state() {
?>
  <input name="udm_state" id="udm_state" value="<?php echo get_option('udm_state'); ?>" />
<?php
}

// Lat/Long
function display_lat() {
?>
  <input name="udm_lat" id="udm_lat" value="<?php echo get_option('udm_lat'); ?>" />
<?php
}

function display_long() {
?>
  <input name="udm_long" id="udm_long" value="<?php echo get_option('udm_long'); ?>" />
<?php
}

// Zip Code
function display_zip() {
?>
  <input name="udm_zip" id="udm_zip" value="<?php echo get_option('udm_zip'); ?>" />
<?php
}

// Email Addess
function display_email() {
?>
  <input name="udm_email" id="udm_email" value="<?php echo get_option('udm_email'); ?>" />
<?php
}

// Form (For Contact Page)
function display_ninjaform() {
?>
  <input name="ninj_form" id="ninj_form" value='<?php echo get_option('ninj_form'); ?>' />
<?php
}

// Twitter
function display_twitter() {
?>
  <input name="udm_twitter" id="udm_twitter" value="<?php echo get_option('udm_twitter'); ?>" />
<?php
}

// Instagram
function display_instagram() {
?>
  <input name="udm_ig" id="udm_ig" value="<?php echo get_option('udm_ig'); ?>" />
<?php
}

// Facebook
function display_facebook() {
?>
  <input name="udm_fb" id="udm_fb" value="<?php echo get_option('udm_fb'); ?>" />
<?php
}

// Google Plus
function display_google() {
?>
  <input name="udm_google" id="udm_google" value="<?php echo get_option('udm_google'); ?>" />
<?php
}

// Pinterest
function display_pinterest() {
?>
  <input name="udm_pin" id="udm_pin" value="<?php echo get_option('udm_pin'); ?>" />
<?php
}

// Linkedin
function display_linkedin() {
?>
  <input name="udm_li" id="udm_li" value="<?php echo get_option('udm_li'); ?>" />
<?php
}

// Brand Main Color
function display_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_color" id="udm_color" value="<?php echo get_option('udm_color',UDM_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_COLOR_DEFAULT; ?>"/>
<?php
}

// Link Color
function display_link_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_link_color" id="udm_link_color" value="<?php echo get_option('udm_link_color',UDM_LINK_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_LINK_COLOR_DEFAULT; ?>" />
<?php
}

// Link Hover Color
function display_link_hover_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_link_hover_color" id="udm_link_hover_color" value="<?php echo get_option('udm_link_hover_color',UDM_LINK_HOVER_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_LINK_HOVER_COLOR_DEFAULT; ?>" />
<?php
}

// Hero Background Color
function display_hero_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_hero_color" id="udm_hero_color" value="<?php echo get_option('udm_hero_color',UDM_HERO_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_HERO_COLOR_DEFAULT; ?>" />
<?php
}

// Header Color
function display_header_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_header_color" id="udm_header_color" value="<?php echo get_option('udm_header_color',UDM_HEADER_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_HEADER_COLOR_DEFAULT; ?>" />
<?php
}

// Topbar Color
function display_topbar_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_topbar_color" id="udm_topbar_color" value="<?php echo get_option('udm_topbar_color',UDM_HEADER_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_HEADER_COLOR_DEFAULT; ?>" />
<?php
}

// Topbar Text Color
function display_topbar_p_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_topbar_p_color" id="udm_topbar_p_color" value="<?php echo get_option('udm_topbar_p_color',UDM_HEADER_A_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_HEADER_A_COLOR_DEFAULT; ?>" />
<?php
}

// Header Link Color
function display_header_a_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_header_a_color" id="udm_header_a_color" value="<?php echo get_option('udm_header_a_color',UDM_HEADER_A_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_HEADER_A_COLOR_DEFAULT; ?>" />
<?php
}

// Navbar Color
function display_navbar_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_navbar_color" id="udm_navbar_color" value="<?php echo get_option('udm_navbar_color',UDM_NAVBAR_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_NAVBAR_COLOR_DEFAULT; ?>" />
<?php
}

// Dropdown Color
function display_submenu_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_submenu_color" id="udm_submenu_color" value="<?php echo get_option('udm_submenu_color',UDM_SUBMENU_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_SUBMENU_COLOR_DEFAULT; ?>" />
<?php
}

// Dropdown Link Color
function display_submenu_a_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_submenu_a_color" id="udm_submenu_a_color" value="<?php echo get_option('udm_submenu_a_color',UDM_SUBMENU_A_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_SUBMENU_A_COLOR_DEFAULT; ?>" />
<?php
}

// Footer Background Color
function display_footer_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_footer_color" id="udm_footer_color" value="<?php echo get_option('udm_footer_color',UDM_FOOTER_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_FOOTER_COLOR_DEFAULT; ?>" />
<?php
}

// Footer Link Color
function display_footer_a_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_footer_a_color" id="udm_footer_a_color" value="<?php echo get_option('udm_footer_a_color',UDM_FOOTER_A_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_FOOTER_A_COLOR_DEFAULT; ?>" />
<?php
}

// Footer Link Color
function display_footer_text_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_footer_text_color" id="udm_footer_text_color" value="<?php echo get_option('udm_footer_text_color',UDM_FOOTER_TEXT_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_FOOTER_TEXT_COLOR_DEFAULT; ?>" />
<?php
}

// Sidebar Color
function display_sidebar_color() {
?>
  <input class="udm_color_picker" type="text" name="udm_sidebar_color" id="udm_sidebar_color" value="<?php echo get_option('udm_sidebar_color',UDM_FOOTER_A_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_FOOTER_A_COLOR_DEFAULT; ?>" />
<?php
}

// Sidebar Link Color
function display_sidebar_text_color() {
?>
  <input class="udm_color_picker" type="text" name="sidebar_text_color" id="sidebar_text_color" value="<?php echo get_option('sidebar_text_color',UDM_FOOTER_COLOR_DEFAULT); ?>" data-default-color="<?php echo UDM_FOOTER_COLOR_DEFAULT; ?>" />
<?php
}

function display_sticky_nav(){
?>
<label>
  <input type="checkbox" name="sticky_nav" value="Yes"<?php checked( 'Yes' == get_option('sticky_nav') ); ?> />
  Display Sticky Nav?
</label>
<?php
}

// Set Panel Area
function display_theme_panel_fields() {

  /*
    Function: display_		<h3>Location</h3>
				<?php echo get_option('udm_address'); ?><br />
				<?php echo get_option('udm_city'); ?>, <?php echo get_option('udm_state'); ?> <?php echo get_option('udm_zip'); ?>theme_panel_fields()
    Display the section panels in the admin section
    1. Declare the panels
    2. Set Field In Appropriate Panel
  */

  // Declare Section Panels
  add_settings_section("section", "General Settings", null, "theme-options");
  add_settings_section("nav-section", "Navigation", null, "home-options");
  add_settings_section("header-section", "Header", null, "home-options");
	add_settings_section("sidebar-section", "Sidebar", null, "home-options");
  add_settings_section("section", "Hero Settings", null, "home-options");
  add_settings_section("footer-section", "Footer", null, "home-options");
  add_settings_section("posts-section", "Posts", null, "home-options");
  add_settings_section("contact-page-section", "Contact Page", null, "home-options");
  add_settings_section("section", "Social Settings", null, "social-options");
  add_settings_section("section", "Brand Settings", null, "brand-options");
  add_settings_section("section", "Company Information", null, "company-info-options");

  // General Settings Section
  udm_register_field_settings("header_code", "Add Code To Header", "display_header_code", "theme-options", "section");
  udm_register_field_settings("footer_code", "Add Scripts To Footer", "display_footer_code", "theme-options", "section");
	udm_register_field_settings("map_code", "Add Map JSON Styles <a href='https://snazzymaps.com/' target='_blank'><span class='dashicons dashicons-editor-help'></span></a>", "display_map_styles", "theme-options", "section");

  // Company Info Section
  udm_register_field_settings("company_name", "Company Name", "company_name", "company-info-options", "section");
  udm_register_field_settings("phone_number", "Phone Number", "display_phone", "company-info-options", "section");
  udm_register_field_settings("fax_number", "Fax Number", "display_fax", "company-info-options", "section");
  udm_register_field_settings("udm_address", "Address", "display_address", "company-info-options", "section");
  udm_register_field_settings("udm_city", "City", "display_city", "company-info-options", "section");
  udm_register_field_settings("udm_state", "State", "display_state", "company-info-options", "section");
	udm_register_field_settings("udm_lat", "Latitude <a href='http://www.latlong.net/' target='_blank'><span class='dashicons dashicons-editor-help'></span></a>", "display_lat", "company-info-options", "section");
	udm_register_field_settings("udm_long", "Longitude <a href='http://www.latlong.net/' target='_blank'><span class='dashicons dashicons-editor-help'></span></a>", "display_long", "company-info-options", "section");
  udm_register_field_settings("udm_zip", "Zip code", "display_zip", "company-info-options", "section");
  udm_register_field_settings("udm_email", "Email Address", "display_email", "company-info-options", "section");

  // Layout Settings Section
  udm_register_field_settings("sticky_nav", "Sticky Nav", "display_sticky_nav", "home-options", "nav-section");

  udm_register_field_settings("topbar", "Topbar Navigation", "display_topbar", "home-options", "header-section");
  udm_register_field_settings("topbar_text", "Topbar Text", "display_topbar_text", "home-options", "header-section");
  udm_register_field_settings("header_choice", "Select Header Type", "display_header_choice", "home-options", "header-section");
	udm_register_field_settings("sidebar_style", "Dark Or Light Sidebar", "display_sidebar_style", "home-options", "sidebar-section");
	udm_register_field_settings("sidebar_text_color", "Sidebar Link/Text Color", "display_sidebar_text_color", "home-options", "sidebar-section");
	udm_register_field_settings("udm_sidebar_color", "Sidebar Background Color", "display_sidebar_color", "home-options", "sidebar-section");
	udm_register_field_settings("centeredNav", "Navigation Style", "centered_nav", "home-options", "header-section");


  udm_register_field_settings("slider", "Homepage Slider", "display_slider", "home-options", "section");
	udm_register_field_settings("slider_height", "Slider Height (px or %)", "slider_height", "home-options", "section");
  udm_register_field_settings("footer_choice", "Select Footer Type", "display_footer_choice", "home-options", "footer-section");
  udm_register_field_settings("hero_choice", "Select Hero Type", "display_hero_choice", "home-options", "section");
	udm_register_field_settings("hero_title_choice", "Select Hero Title Type", "display_hero_title_choice", "home-options", "section");
	udm_register_field_settings("hero_height", "Hero Height (px or %)", "hero_height", "home-options", "section");
	udm_register_field_settings("hero_text_size", "Hero Text Size In PX", "hero_text_size", "home-options", "section");
	udm_register_field_settings("hero_overlay", "Hero Opacity (0.1 - 1)", "hero_overlay", "home-options", "section");
  udm_register_field_settings("blog_choice", "Select Blog Main Type", "display_blog_choice", "home-options", "section");
  udm_register_field_settings("post_choice", "Select Post Page Type", "display_post_choice", "home-options", "posts-section");
  udm_register_field_settings("contact_choice", "Select Contact Page Type", "display_contact_choice", "home-options", "contact-page-section");

  //Social Settings
  udm_register_field_settings("ninj_form", "Contact Form Shortcode", "display_ninjaform", "home-options", "contact-page-section");
  udm_register_field_settings("udm_twitter", "Twitter URL", "display_twitter", "social-options", "section");
  udm_register_field_settings("udm_fb", "Facebook URL", "display_facebook", "social-options", "section");
  udm_register_field_settings("udm_pin", "Pinterest URL", "display_pinterest", "social-options", "section");
  udm_register_field_settings("udm_google", "Google+ URL", "display_google", "social-options", "section");
  udm_register_field_settings("udm_ig", "Instagram URL", "display_instagram", "social-options", "section");
  udm_register_field_settings("udm_li", "LinkedIn URL", "display_linkedin", "social-options", "section");

  // Color Options Section
  udm_register_field_settings("udm_color", "Brand Main Color", "display_color", "brand-options", "section");
  udm_register_field_settings("udm_link_color", "Links Color", "display_link_color", "brand-options", "section");
  udm_register_field_settings("udm_link_hover_color", "Links Hover Color", "display_link_hover_color", "brand-options", "section");
  udm_register_field_settings("udm_hero_color", "Hero Background Color", "display_hero_color", "brand-options", "section");
  udm_register_field_settings("udm_header_color", "Header Background Color", "display_header_color", "brand-options", "section");
	udm_register_field_settings("udm_topbar_color", "Topbar Background Color", "display_topbar_color", "brand-options", "section");
	udm_register_field_settings("udm_topbar_p_color", "Topbar Text Color", "display_topbar_p_color", "brand-options", "section");
  udm_register_field_settings("udm_header_a_color", "Header Link Color", "display_header_a_color", "brand-options", "section");
  udm_register_field_settings("udm_navbar_color", "Navbar Background Color", "display_navbar_color", "brand-options", "section");
  udm_register_field_settings("udm_submenu_color", "Submenu Background Color", "display_submenu_color", "brand-options", "section");
  udm_register_field_settings("udm_submenu_a_color", "Submenu Link Color", "display_submenu_a_color", "brand-options", "section");
  udm_register_field_settings("udm_footer_color", "Footer Background Color", "display_footer_color", "brand-options", "section");
  udm_register_field_settings("udm_footer_text_color", "Footer Text Color", "display_footer_text_color", "brand-options", "section");
  udm_register_field_settings("udm_footer_a_color", "Footer Link Color", "display_footer_a_color", "brand-options", "section");

}


// Add Theme Options to Admin Init
add_action("admin_init", "display_theme_panel_fields");
?>
