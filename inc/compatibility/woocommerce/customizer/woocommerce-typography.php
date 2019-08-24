<?php
/**
 * Woocommerce Font Sections
 *
 */

function munk_customize_typography_woocommerce( $config ) {

    Kirki::add_section( 'munk_typography_woocommerce', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Woocommerce', 'munk' ),
        'panel' =>  'munk_typography_panel'
    ) );    

    Kirki::add_field( 'munk', array(
    	'type'        => 'typography',
    	'settings'    => 'munk_woocommerce_main_font',
    	'label'       => esc_html__( 'WooCommerce Font', 'munk' ),
    	'section'     => 'munk_typography_woocommerce',
    	'default'     => array(
    		'font-family'  => 'IBM Plex Sans',
    		'variant'      => 'regular',
    	),
		'transport'   => 'auto',
		'output' => array(
			array(
				'element'  => '.woocommerce-page ul.products li.product .mt-woo-product-category p, .woocommerce ul.products li.product .mt-woo-product-category p, .woocommerce-page ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce-page ul.products li.product .price, .woocommerce ul.products li.product .price, .woocommerce div.product .product_title, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .single-product .up-sells h2,  .single-product .related h2, woocommerce.single-product #content div.product div.summary, .woocommerce.single-product div.product div.summary, .woocommerce-page #content div.product div.summary, .woocommerce-page div.product div.summary,  .woocommerce-page div.product div.summary p,  .woocommerce-page div.product div.summary, .woocommerce div.product .woocommerce-tabs .panel, .woocommerce div.product .woocommerce-tabs .panel p, .woocommerce div.product .woocommerce-tabs .panel h2, .woocommerce div.product form.cart .mt-qty-wrap .plus, .woocommerce div.product form.cart .mt-qty-wrap .minus, .woocommerce div.product form.cart div.quantity input, .woocommerce table.shop_attributes th, .woocommerce table.shop_attributes td, #review_form span, #review_form label,.woocommerce div.product .woocommerce-tabs ul.tabs li a, .single-product .product_meta, .single-product .product_meta span, .single-product .product_meta span a, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce-page div.product div.summary p.price, #review_form #respond form p.stars a, woocommerce span.onsale',
			),				
		),								
    ) );			

}
add_action( 'kirki_config', 'munk_customize_typography_woocommerce' );