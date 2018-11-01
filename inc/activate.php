<?php
/* Use this file to set up all default fields */

/* Text */
if(empty(get_option('topbar_text')) update_option('topbar_text',UDM_TOPBAR_TEXT_DEFAULT);

/* Company Info */
if(empty(get_option('company_name')) update_option('company_name',get_bloginfo('name'));

/* Colors */
if(empty(get_option('udm_color')) update_option('udm_color',UDM_COLOR_DEFAULT);
if(empty(get_option('udm_navbar_color')) update_option('udm_navbar_color',UDM_NAVBAR_COLOR_DEFAULT);
if(empty(get_option('udm_hero_color')) update_option('udm_hero_color',UDM_HERO_COLOR_DEFAULT);
if(empty(get_option('udm_header_color')) update_option('udm_header_color',UDM_HEADER_COLOR_DEFAULT);
if(empty(get_option('udm_header_a_color')) update_option('udm_header_a_color',UDM_HEADER_A_COLOR_DEFAULT);
if(empty(get_option('udm_submenu_color')) update_option('udm_submenu_color',UDM_SUBMENU_COLOR_DEFAULT);
if(empty(get_option('udm_submenu_a_color')) update_option('udm_submenu_a_color',UDM_SUBMENU_A_COLOR_DEFAULT);
if(empty(get_option('udm_link_color')) update_option('udm_link_color',UDM_LINK_COLOR_DEFAULT);
if(empty(get_option('udm_link_hover_color')) update_option('udm_link_hover_color',UDM_LINK_HOVER_COLOR_DEFAULT);
if(empty(get_option('udm_footer_color')) update_option('udm_footer_color',UDM_FOOTER_COLOR_DEFAULT);
if(empty(get_option('udm_footer_a_color')) update_option('udm_footer_a_color',UDM_FOOTER_A_COLOR_DEFAULT);
if(empty(get_option('udm_footer_text_color')) update_option('udm_footer_text_color',UDM_FOOTER_TEXT_COLOR_DEFAULT);
?>
