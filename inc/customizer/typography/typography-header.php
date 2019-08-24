<?php
/**
 * Homepage Sections
 *
 */

function munk_customize_typography_header( $config ) {

    Kirki::add_section( 'munk_typography_header', array(		
        'priority'   => 14,		
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Header', 'munk' ),
        'panel' =>  'munk_typography_panel'
    ) );    	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_header_above_ed',
		'label'       => esc_html__('Above Header Section', 'munk'),		
		'section'     => 'munk_typography_header',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',
			'font-size'      => '14px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
			'text-align'     => 'left',		
		),
		'output'    => array(
			array(
			  'element'   => '.header-above, .header-above a, .header-above ul.mt-header-ed-menu li a',
			),
		),		
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_header_primary_title_ed',
		'label'       => esc_html__('Site Title', 'munk'),
		'section'     => 'munk_typography_header',
		'priority'    => 20,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',
			'font-size'      => '22px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
			'text-align'     => 'center',		
		),
		'output'    => array(
			array(
			  'element'   => '.site-header .site-branding h1, .site-header .site-branding h1 a',
			),
		),			
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_header_primary_desc_ed',
		'label'       => esc_html__('Site Description', 'munk'),
		'section'     => 'munk_typography_header',
		'priority'    => 20,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',
			'font-size'      => '14px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
			'text-align'     => 'center',		
		),
		'output'    => array(
			array(
			  'element'   => '.site-header .site-branding, .site-header .site-branding p',
			),
		),			
	) );			
		
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_header_below_ed',
		'label'       => esc_html__('Below Header Section', 'munk'),
		'section'     => 'munk_typography_header',
		'priority'    => 30,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',
			'font-size'      => '14px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
			'text-align'     => 'left',		
		),
		'output'    => array(
			array(
			  'element'   => '.header-below, .header-below a, .header-below ul.mt-header-ed-menu li a',
			),
		),		
	) );		
	

}
add_action( 'kirki_config', 'munk_customize_typography_header' );