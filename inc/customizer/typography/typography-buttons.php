<?php
/**
 * Button Color Settings
 *
 */
 
function munk_typography_button_settings( $config ) {

    Kirki::add_section( 'munk_typography_button', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Buttons & Icons', 'munk' ),
        'panel' =>  'munk_typography_panel'
    ) );    	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_primary_button',
		'label'       => esc_html__('Primary Button', 'munk'),
		'section'     => 'munk_typography_button',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',
			'font-size'      => '15px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
		),
		'output'    => array(
			array(
			  'element'   => '.navigation.pagination .nav-links a:hover,.navigation.pagination .nav-links .current, .no-results .search-submit, .woocommerce div.product .cart .single_add_to_cart_button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.wp-block-button__link,.is-style-outline .wp-block-button__link, .woocommerce-page ul.products li.product .button, .woocommerce ul.products li.product .button, .woocommerce-js.woocommerce ul.products li.product .button',
			),
		),		
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_secondary_button',
		'label'       => esc_html__('Secondary Button', 'munk'),
		'section'     => 'munk_typography_button',
		'priority'    => 15,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',
			'font-size'      => '15px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
		),
		'output'    => array(
			array(
			  'element'   => '.entry-card .read-more a, .widget_search .search-submit, .mt-header-ed .search-submit, .entry-content form input#submit, .entry-content a.button, .entry-content button.button, .entry-content input.button, .entry-content form button, #respond .form-submit #submit,#respond .form-submit #submit:hover, .woocommerce #respond input#submit.alt, .no-results .search-submit,.woocommerce-page ul.products li.product .added_to_cart, .woocommerce ul.products li.product .added_to_cart, .woocommerce-js.woocommerce ul.products li.product .added_to_cart',
			),
		),		
	) );		
	

}
add_action( 'kirki_config', 'munk_typography_button_settings' );