<?php
/**
 * Navigation Color Settings
 *
 */
 
function munk_customize_typography_navigation( $config ) {

    Kirki::add_section( 'munk_typography_navigation', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Main Navigation', 'munk' ),
        'panel' =>  'munk_typography_panel'
    ) );    	
	

	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_main_nav_ed',
		'label'       => esc_html__('Main Navigation', 'munk'),
		'section'     => 'munk_typography_navigation',
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
			  'element'   => '.site-header .navbar, .navbar .navbar-nav .nav-link, .site-header .dropdown-menu .dropdown-item',
			),
		),		
	) );										

}
//add_action( 'kirki_config', 'munk_customize_typography_navigation' );