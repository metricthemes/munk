<?php
/**
 * Elementor Compatibility File.
 *
 * Since @1.0.2 
 * @package Munk
 */
/*
 *
 * Munk Elementor Compatibility
 */
 
if ( ! defined( 'ABSPATH' ) ) exit; 
 
if ( ! class_exists( 'Munk_Elementor' ) ) :

	/**
	 * Munk Elementor Compatibility
	 *
	 * @since 1.0.2
	 */
	class Munk_Elementor {	

		function opencommerce_default_colors ($config) {
			$config['default_schemes']['color']['items'] = [
				'1' => get_theme_mod('open_commerce_primary_color', '#408CE2'),
				'2' => get_theme_mod('open_commerce_secondary_color', '#28324e'),
				'3' => '#4D4D4D',
				'4' => get_theme_mod('open_commerce_accent_color', '#FFD202'),
				];
		
			return $config;
		}
		
		function opencommerce_default_fonts ($config) {
		
			$open_commerce_bodyfont = get_theme_mod('open_commerce_body_font', array('font-family'=>'Rubik', 'variant'=>'regular'));
			$open_commerce_headerfont = get_theme_mod('open_commerce_heading_font', array('font-family'=>'Rubik', 'variant'=>'600') );	
		
		
			$config['default_schemes']['typography']['items'] = [
				'1' => array('font_family' => $open_commerce_headerfont['font-family'],'font_weight' => $open_commerce_headerfont['variant'],),
				'2' => array('font_family' => $open_commerce_headerfont['font-family'],'font_weight' => $open_commerce_headerfont['variant'],),
				'3' => array('font_family' => $open_commerce_bodyfont['font-family'],'font_weight' => $open_commerce_bodyfont['variant'],),
				'4' => array('font_family' => $open_commerce_bodyfont['font-family'],'font_weight' => $open_commerce_bodyfont['variant'],),
				];
		
			return $config;
		}
		
		add_filter('elementor/editor/localize_settings', 'opencommerce_default_colors', 99);
		add_filter('elementor/editor/localize_settings', 'opencommerce_default_fonts', 99);
	
	
	
	}
	
endif;	
	
