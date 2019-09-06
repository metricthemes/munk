<?php
/**
 * Layout Site Header - Primary Header
 *
 */

function munk_customize_layout_site_header_primary ( $config ) {


    Kirki::add_section( 'munk_layout_site_header_primary', array(
        'priority'   => 20,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Primary Header', 'munk' ),
        'panel' =>  'munk_layouts_header',
    ) );

	Kirki::add_field( 'munk', array(
		'type'        => 'select',
		'settings'    => 'munk_layout_site_header_primary_ed',
		'label'       => esc_html__( 'Primary Header Layout', 'munk' ),
		'section'     => 'munk_layout_site_header_primary',
		'default'     => 'layout-one',
		'priority'    => 10,
		'choices'     => array(
			'none' => esc_html__( 'None', 'munk' ),
			'layout-one' => esc_html__( 'Layout 1', 'munk' ),
			'layout-two' => esc_html__( 'Layout 2', 'munk' ),				
		),
	) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'toggle',
		'settings'    => 'munk_layout_site_header_primary_menu',
		'label'       => esc_html__( 'Enable Primary Menu', 'munk' ),
		'section'     => 'munk_layout_site_header_primary',
		'default'     => '1',
		'priority'    => 20,
	) );		
	
	Kirki::add_field( 'munk', [
		'type'        => 'toggle',
		'settings'    => 'munk_layout_site_header_sticky_ed',
		'label'       => esc_html__( 'Enable Sticky Header', 'munk' ),
		'section'     => 'munk_layout_site_header_primary',
		'default'     => '0',
		'priority'    => 30,
	] );	

}
add_action( 'kirki_config', 'munk_customize_layout_site_header_primary' );