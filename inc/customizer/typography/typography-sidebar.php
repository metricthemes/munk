<?php
/**
 * Sidebar Color Settings
 *
 */
 
function munk_typography_sidebar_settings( $config ) {

    Kirki::add_section( 'munk_typography_sidebar', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Sidebar', 'munk' ),
        'panel' =>  'munk_typography_panel'
    ) );    			
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_sidebar_ed',
		'label'       => esc_html__('Sidebar Widgets Font', 'munk'),
		'section'     => 'munk_typography_sidebar',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',
		),
		'output'    => array(
			array(
			  'element'   => '#secondary, #secondary .widget .widget-title, #secondary, #secondary .widget, #secondary .widget p, #secondary ul li, .widget table td, #secondary .widget a, #secondary .widget ul li a, #secondary .widget a:hover, #secondary .widget ul li a:hover',
			),	
		),		
	) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_sidebar_widget_title',
		'label'       => esc_html__('Widget Title', 'munk'),
		'section'     => 'munk_typography_sidebar',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-size'      => '21px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
		),
		'output'    => array(
			array(
			  'element'   => '#secondary .widget .widget-title',
			),	
		),		
	) );			
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_sidebar_widget_content',
		'label'       => esc_html__('Widget Content', 'munk'),
		'section'     => 'munk_typography_sidebar',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-size'      => '14px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
		),
		'output'    => array(
			array(
			  'element'   => '#secondary, #secondary, #secondary .widget, #secondary .widget p, #secondary ul li, .widget table td, #secondary .widget a, #secondary .widget ul li a, #secondary .widget a:hover, #secondary .widget ul li a:hover',
			),	
		),		
	) );			

}
add_action( 'kirki_config', 'munk_typography_sidebar_settings' );