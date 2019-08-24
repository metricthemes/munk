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
			  'element'   => '.entry-card .read-more a, .widget_search .search-submit, .mt-header-ed .search-submit, .entry-content form input#submit, .entry-content a.button, .entry-content button.button, .entry-content input.button, .entry-content form button, #respond .form-submit #submit, .navigation.pagination .nav-links a:hover,
.navigation.pagination .nav-links .current, .no-results .search-submit',
			),
		),		
	) );	
	

}
add_action( 'kirki_config', 'munk_typography_button_settings' );