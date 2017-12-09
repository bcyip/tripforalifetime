<?php
/*This file outputs social media icons and search in the header*/
$columnist_social_items='';
$columnist_social_items .= '<ul><li class="menu-item menu-item-search"><form method="get" class="menu-search-form" action="' . esc_url( home_url()) . '/"><input class="text_input" type="text" value="'. __( 'Search ...', 'the-columnist' ) . '" name="s" id="s" onfocus="if (this.value ==\''. __( 'Search ...', 'the-columnist' ) . '\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \''. __( 'Search ...', 'the-columnist' ) . '\';}" /></form></li>';

if (get_theme_mod('columnist_social_facebook')!='') {
$columnist_social_items .= '<li class="menu-item menu-item-social"><a href="'.esc_url(get_theme_mod('columnist_social_facebook')).'"><span class="fa fa-facebook-official"></span></a></li>';};

if (get_theme_mod('columnist_social_instagram')!='') {
$columnist_social_items .= '<li class="menu-item menu-item-social"><a href="'.esc_url(get_theme_mod('columnist_social_instagram')).'"><span class="fa fa-instagram"></span></a></li>';};

if (get_theme_mod('columnist_social_twitter')!='') {
$columnist_social_items .= '<li class="menu-item menu-item-social"><a href="'.esc_url(get_theme_mod('columnist_social_twitter')).'"><span class="fa fa-twitter"></span></a></li>';};

if (get_theme_mod('columnist_social_youtube')!='') {
$columnist_social_items .= '<li class="menu-item menu-item-social"><a href="'.esc_url(get_theme_mod('columnist_social_youtube')).'"><span class="fa fa-youtube"></span></a></li>';};

if (get_theme_mod('columnist_social_googleplus')!='') {
$columnist_social_items .= '<li class="menu-item menu-item-social"><a href="'.esc_url(get_theme_mod('columnist_social_googleplus')).'"><span class="fa fa-google-plus-square"></span></a></li>';};

if (get_theme_mod('columnist_social_pinterest')!='') {
$columnist_social_items .= '<li class="menu-item menu-item-social"><a href="'.esc_url(get_theme_mod('columnist_social_pinterest')).'"><span class="fa fa-pinterest-square"></span></a></li>';};

if (get_theme_mod('columnist_social_vk')!='') {
$columnist_social_items .= '<li class="menu-item menu-item-social"><a href="'.esc_url(get_theme_mod('columnist_social_vk')).'"><span class="fa fa-vk"></span></a></li>';};

$columnist_social_items .= '</ul>';

echo $columnist_social_items;
?>