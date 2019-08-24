<?php
/**
 * Support for Elementor Header Footer and Blocks Plugins
 *
 * @link https://wordpress.org/plugins/header-footer-elementor/
 *
 * since 1.0.1 
 *
 * @package mertic
 */ 
 
function munk_header_footer_compposer_support() {
	add_theme_support( 'header-footer-composer' );
}
add_action( 'after_setup_theme', 'munk_header_footer_compposer_support' );