<?php
/**
 * WooCommerce Compatibility File.
 *
 * @link https://woocommerce.com/
 *
 * @package Munk
 */

function munk_customize_layout_wc_product( $config ) {


    Kirki::add_section( 'munk_layout_wc_product', array(
        'priority'   => 10,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Single Product', 'munk' ),
        'panel' =>  'woocommerce',
    ) );			
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'radio-image',
		'settings'    => 'munk_customize_layout_wc_product_ed',
		'label'       => esc_html__( 'Single Product Layout', 'munk' ),
		'description' => esc_html__( 'This layout applies to single product pages', 'munk' ),				
		'section'     => 'munk_layout_wc_product',
		'default'     => 'right-sidebar',
		'transport'   => 'refresh',
		'priority'    => 5,
		'choices'     =>  array(
			'no-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/no-sidebar.png',
			'left-sidebar' => get_template_directory_uri() . '/inc/customizer/assets/images/left-sidebar.png',
			'right-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/right-sidebar.png',
		),
	) );	
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'toggle',
		'settings'    => 'munk_wc_product_gallery_zoom',
		'label'       => esc_html__( 'Enable Image Zoom Effect', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'default'     => '1',
		'transport'   => 'refresh',		
		'priority'    => 5,
	) );
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'toggle',
		'settings'    => 'munk_wc_product_gallery_lightbox',
		'label'       => esc_html__( 'Enable Image Lightbox', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'transport'   => 'refresh',		
		'default'     => '1',
		'priority'    => 5,
	) );	

	Kirki::add_field( 'munk',  array(
		'type'        => 'toggle',
		'settings'    => 'munk_wc_product_gallery_slider',
		'label'       => esc_html__( 'Enable Gallery Slider', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'transport'   => 'refresh',		
		'default'     => '1',
		'priority'    => 5,
	) );	
			
	Kirki::add_field( 'munk',  array(
		'type'        => 'select',
		'settings'    => 'munk_wc_product_tab_layout',
		'label'       => esc_html__( 'Product Tabs Layout', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'default'     => 'horizontal',
		'priority'    => 5,
		'choices'     =>  array(
			'horizontal' => esc_html__( 'Horizontal', 'munk' ),
			'vertical' => esc_html__( 'Vertical', 'munk' ),
			'none' => esc_html__( 'Disabled', 'munk' ),
		),
	) );			
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'toggle',
		'settings'    => 'munk_wc_product_related',
		'label'       => esc_html__( 'Enable Related Products', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'default'     => '1',
		'priority'    => 5,
		'transport' => 'postMessage',
		'js_vars'     => array(
			array(
			'element'  => '.single-product .related',
			'function' => 'toggleClass',
			'class'    => 'd-none',
			'value'    => false,
			),
		),
	) );						
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'slider',
		'settings'    => 'munk_wc_product_row',
		'label'       => esc_html__( 'No. of Related Products', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'default'     => 4,
		'priority'    => 5,		
		'choices'     =>  array(
			'min'  => 1,
			'max'  => 36,
			'step' => 1,
		),
		'active_callback' =>  array(
			 array(
				'setting'  => 'munk_wc_product_related',
				'operator' => '==',
				'value'    => true,
			)
		),			
	) );	

	Kirki::add_field( 'munk',  array(
		'type'        => 'slider',
		'settings'    => 'munk_wc_product_col',
		'label'       => esc_html__( 'Related Products Columns', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'default'     => 4,
		'priority'    => 5,		
		'choices'     =>  array(
			'min'  => 1,
			'max'  => 6,
			'step' => 1,
		),
		'active_callback' =>  array(
			 array(
				'setting'  => 'munk_wc_product_related',
				'operator' => '==',
				'value'    => true,
			)
		),		
	) );	
	
	
}
add_action( 'kirki_config', 'munk_customize_layout_wc_product' );
