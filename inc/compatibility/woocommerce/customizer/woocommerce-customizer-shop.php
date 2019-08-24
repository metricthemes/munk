<?php
/**
 * WooCommerce Compatibility File.
 *
 * @link https://woocommerce.com/
 *
 * @package Munk
 */

// If plugin - 'WooCommerce' not exist then return.
if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

function munk_customize_layout_woocommerce_shop( $config ) {
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'radio-image',
		'settings'    => 'munk_customize_layout_woocommerce_ed',
		'label'       => esc_html__( 'Shop Layout', 'munk' ),
		'description' => esc_html__( 'This layout applies to WooCommerce archives pages like: shop, product categories and product tags.', 'munk' ),						
		'section'     => 'woocommerce_product_catalog',
		'default'     => 'right-sidebar',
		'priority'    => 5,
		'choices'     =>  array(
			'no-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/no-sidebar.png',
			'left-sidebar' => get_template_directory_uri() . '/inc/customizer/assets/images/left-sidebar.png',
			'right-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/right-sidebar.png',
		),
	) );					

	Kirki::add_field( 'munk',  array(
		'type'        => 'slider',
		'settings'    => 'munk_woocommerce_shop_per_row',
		'label'       => esc_html__( 'Shop Columns', 'munk' ),
		'section'     => 'woocommerce_product_catalog',
		'default'     => 3,
		'priority'    => 6,		
		'choices'     =>  array(
			'min'  => 1,
			'max'  => 6,
			'step' => 1,
		),
	) );	
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'slider',
		'settings'    => 'munk_woocommerce_shop_per_page',
		'label'       => esc_html__( 'Products Per Page', 'munk' ),
		'section'     => 'woocommerce_product_catalog',
		'default'     => 12,
		'priority'    => 7,		
		'choices'     =>  array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
		),
	) );	

	Kirki::add_field( 'munk', array(
		'type'        => 'toggle',
		'settings'    => 'munk_woocommerce_shop_breadcrumbs',
		'label'       => esc_html__( 'Shop Breadcrumbs', 'munk' ),
		'section'     => 'woocommerce_product_catalog',
		'default'     => '1',
		'priority'    => 8,
	) );
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'toggle',
		'settings'    => 'munk_woocommerce_shop_title',
		'label'       => esc_html__( 'Display Shop Title', 'munk' ),
		'section'     => 'woocommerce_product_catalog',
		'default'     => '1',
		'priority'    => 8,
	) );
			
}
add_action( 'kirki_config', 'munk_customize_layout_woocommerce_shop' );
