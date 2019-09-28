<?php
/**
 * Layout Site Footer
 *
 */

function munk_customize_layout_footer( $config ) {

    Kirki::add_section( 'munk_layout_footer', array(
        'priority'   => 30,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Footer', 'munk' ),
        'panel' 	 =>  'munk_layout_panel',
    ) );		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'select',
		'settings'    => 'munk_layout_footer_ed',
		'label'       => esc_html__( 'Footer Widgets Area Layout', 'munk' ),
		'section'     => 'munk_layout_footer',
		'default'     => 'three-col',
		'description' => esc_html__( 'Select Footer Widget Columns', 'munk' ),
		'priority'    => 10,
		'multiple'    => 0,
		'choices'     => array(
			'one-col' => esc_html__( 'One Column', 'munk' ),
			'two-col' => esc_html__( 'Two Columns', 'munk' ),
			'three-col' => esc_html__( 'Three Columns', 'munk' ),						
			'four-col' => esc_html__( 'Four Columns', 'munk' ),									
			'none' => esc_html__( 'Disable Footer Widgets', 'munk' ),												
		),
	) );	
    
    /** Footer Copyright*/
    Kirki::add_field( 'munk', array(
        'type'        => 'text',
        'settings'    => 'munk_footer_copyright',
        'label'       => esc_html__( 'Footer Copyright', 'munk' ),
        'help'        => esc_html__( 'You can change footer copyright and use your own custom text from here.', 'munk' ),
        'section'     => 'munk_layout_footer',
        'default'     => '',
    ) );
    
    /** Hide Author Link */
    Kirki::add_field( 'munk', array(
        'type'        => 'toggle',
        'settings'    => 'munk_ed_author_link',
        'label'       => esc_html__( 'Show Author Link', 'munk' ),
        'section'     => 'munk_layout_footer',
        'default'     => '1',
    ) );
    
    /** Hide WordPress Link */
    Kirki::add_field( 'munk', array(
        'type'        => 'toggle',
        'settings'    => 'munk_ed_wp_link',
        'label'       => esc_html__( 'Show WordPress Link', 'munk' ),
        'section'     => 'munk_layout_footer',
        'default'     => '1',
    ) );
    /** Footer Settings Ends */	
	

}
add_action( 'kirki_config', 'munk_customize_layout_footer' );