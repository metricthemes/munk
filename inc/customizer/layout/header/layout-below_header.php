<?php
/**
 * Layout Site Header - Below Header
 *
 */

function munk_customize_layout_site_header_below ( $config ) {


    Kirki::add_section( 'munk_layout_site_header_below', array(
        'priority'   => 30,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Below Header', 'munk' ),
        'panel' =>  'munk_layouts_header',
    ) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'select',
		'settings'    => 'munk_layout_site_header_below_ed',
		'label'       => esc_html__( 'Below Header Layout', 'munk' ),
		'section'     => 'munk_layout_site_header_below',
		'default'     => 'none',
		'priority'    => 10,
		'choices'     => array(
			'none' => esc_html__( 'None', 'munk' ),
			'one-col' => esc_html__( 'One Column', 'munk' ),
			'two-col' => esc_html__( 'Two Column', 'munk' ),		
		),
	) );
	
	// Above Sectio 1 Starts
	
	Kirki::add_field( 'munk', array(
		'type'        => 'select',
		'settings'    => 'munk_layout_site_header_below_section_one',
		'label'       => esc_html__( 'Section 1', 'munk' ),
		'section'     => 'munk_layout_site_header_below',
		'default'     => 'text',
		'priority'    => 10,
		'multiple'    => 0,
		'choices'     => array(
			'none' => esc_html__( 'None', 'munk' ),
			'text' => esc_html__( 'Text', 'munk' ),
			'search' => esc_html__( 'Search Form', 'munk' ),
			'menu' => esc_html__( 'Menu', 'munk' ),
			'widget' => esc_html__( 'Widget', 'munk' ),				
			'shortcode' => esc_html__( 'Shortcode', 'munk' ),				
		),
		'active_callback' => array(
			array(
				array(
					'setting'  => 'munk_layout_site_header_below_ed',
					'operator' => '==',
					'value'    => 'one-col',
				),
				array(
					'setting'  => 'munk_layout_site_header_below_ed',
					'operator' => '==',
					'value'    => 'two-col',
				),
			),
		),			
	) );	
		
		Kirki::add_field( 'munk', array(
			'type'     => 'text',
			'settings' => 'munk_layout_site_header_below_section_one_text',
			'label'    => esc_html__( 'Text Content', 'munk' ),
			'section'  => 'munk_layout_site_header_below',
			'default'  => esc_html__( 'Call Us: 1800-123-456-7890', 'munk' ),
			'priority' => 10,			
			'active_callback' => array(
				array(
					array(
						'setting'  => 'munk_layout_site_header_below_ed',
						'operator' => '==',
						'value'    => 'one-col',
					),
					array(
						'setting'  => 'munk_layout_site_header_below_ed',
						'operator' => '==',
						'value'    => 'two-col',
					),
				),
				array(
					'setting'  => 'munk_layout_site_header_below_section_one',
					'operator' => '==',
					'value'    => 'text',
				),				
			),
		) );		
		
		Kirki::add_field( 'munk', array(
			'type'     => 'text',
			'settings' => 'munk_layout_site_header_below_section_one_shortcode',
			'label'    => esc_html__( 'Shortcode', 'munk' ),
			'section'  => 'munk_layout_site_header_below',
			'description'  => esc_html__( 'Enter your shortcode here.', 'munk' ),
			'priority' => 10,
			'active_callback' => array(
				array(
					array(
						'setting'  => 'munk_layout_site_header_below_ed',
						'operator' => '==',
						'value'    => 'one-col',
					),
					array(
						'setting'  => 'munk_layout_site_header_below_ed',
						'operator' => '==',
						'value'    => 'two-col',
					),
				),
				array(
					'setting'  => 'munk_layout_site_header_below_section_one',
					'operator' => '==',
					'value'    => 'shortcode',
				),				
			),		
		) );				
		
		Kirki::add_field( 'munk', array(
			'type'     => 'select',
			'settings' => 'munk_layout_site_header_below_section_one_menu',
			'label'    => esc_html__( 'Select menu', 'munk' ),
			'section'  => 'munk_layout_site_header_below',
			'default'  => '0',
			'priority' => 10,
			'choices'  => munk_menu_ed(),			
			'active_callback' => array(
				array(
					array(
						'setting'  => 'munk_layout_site_header_below_ed',
						'operator' => '==',
						'value'    => 'one-col',
					),
					array(
						'setting'  => 'munk_layout_site_header_below_ed',
						'operator' => '==',
						'value'    => 'two-col',
					),
				),
				array(
					'setting'  => 'munk_layout_site_header_below_section_one',
					'operator' => '==',
					'value'    => 'menu',
				),				
			),		
		) );					
		
	// Below Section 1 Ends
	
		Kirki::add_field( 'munk', array(
			'type'        => 'custom',
			'settings'    => 'munk_layout_site_header_below_hr',
			'section'     => 'munk_layout_site_header_below',
			'default'     => '<hr />',
			'priority'    => 10,
		) );	
	
	// Below Sectio 2 Starts
	
		Kirki::add_field( 'munk', array(
			'type'        => 'select',
			'settings'    => 'munk_layout_site_header_below_section_two',
			'label'       => esc_html__( 'Section 2', 'munk' ),
			'section'     => 'munk_layout_site_header_below',
			'default'     => 'none',
			'priority'    => 10,
			'multiple'    => 0,
			'choices'     => array(
				'none' => esc_html__( 'None', 'munk' ),
				'text' => esc_html__( 'Text', 'munk' ),
				'search' => esc_html__( 'Search Form', 'munk' ),
				'menu' => esc_html__( 'Menu', 'munk' ),
				'widget' => esc_html__( 'Widget', 'munk' ),				
				'shortcode' => esc_html__( 'Shortcode', 'munk' ),				
			),
			'active_callback' => array(
				array(
					array(
						'setting'  => 'munk_layout_site_header_below_ed',
						'operator' => '==',
						'value'    => 'two-col',
					),
				),
			),
		) );	
		
		Kirki::add_field( 'munk', array(
			'type'     => 'text',
			'settings' => 'munk_layout_site_header_below_section_two_text',
			'label'    => esc_html__( 'Text Content', 'munk' ),
			'section'  => 'munk_layout_site_header_below',
			'default'  => esc_html__( 'Call Us: 1800-123-456-7890', 'munk' ),
			'priority' => 10,
			'active_callback' => array(
				array(
					array(
						'setting'  => 'munk_layout_site_header_below_ed',
						'operator' => '==',
						'value'    => 'two-col',
					),
				),
				array(
					'setting'  => 'munk_layout_site_header_below_section_two',
					'operator' => '==',
					'value'    => 'text',
				),				
			),
		) );		
		
		Kirki::add_field( 'munk', array(
			'type'     => 'text',
			'settings' => 'munk_layout_site_header_below_section_two_shortcode',
			'label'    => esc_html__( 'Shortcode', 'munk' ),
			'section'  => 'munk_layout_site_header_below',
			'description'  => esc_html__( 'Enter your shortcode here.', 'munk' ),
			'priority' => 10,
			'active_callback' => array(
				array(
					array(
						'setting'  => 'munk_layout_site_header_below_ed',
						'operator' => '==',
						'value'    => 'two-col',
					),
				),
				array(
					'setting'  => 'munk_layout_site_header_below_section_two',
					'operator' => '==',
					'value'    => 'shortcode',
				),				
			),				
		) );				
		
		Kirki::add_field( 'munk', array(
			'type'     => 'select',
			'settings' => 'munk_layout_site_header_below_section_two_menu',
			'label'    => esc_html__( 'Select menu', 'munk' ),
			'section'  => 'munk_layout_site_header_below',
			'default'  => '0',
			'priority' => 10,
			'choices'  => munk_menu_ed(),			
			'active_callback' => array(
				array(
					array(
						'setting'  => 'munk_layout_site_header_below_ed',
						'operator' => '==',
						'value'    => 'two-col',
					),
				),
				array(
					'setting'  => 'munk_layout_site_header_below_section_two',
					'operator' => '==',
					'value'    => 'menu',
				),				
			),		
		) );						
	
	// Below Section 2 Ends	
	
	
	

}
add_action( 'kirki_config', 'munk_customize_layout_site_header_below' );