<?php
/**
 * Layout Site Sidebar
 *
 */

function munk_customize_layout_sidebar( $config ) {

    Kirki::add_section( 'munk_layout_sidebar', array(
        'priority'   => 10,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Sidebar', 'munk' ),
        'panel' 	 =>  'munk_layout_panel',
    ) );		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'select',
		'settings'    => 'munk_layout_sidebar_ed',
		'label'       => esc_html__( 'Default Sidebar', 'munk' ),
		'section'     => 'munk_layout_sidebar',
		'default'     => 'right',
		'description' => esc_html__( 'Select default sidebar position', 'munk' ),
		'priority'    => 10,
		'multiple'    => 0,
		'choices'     => array(
			'full-width' => esc_html__( 'Full Width', 'munk' ),
			'boxed' => esc_html__( 'Boxed', 'munk' ),
		),
	) );				

}
add_action( 'kirki_config', 'munk_customize_layout_sidebar' );