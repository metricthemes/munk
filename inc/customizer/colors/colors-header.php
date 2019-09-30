<?php
/**
 * Homepage Sections
 *
 */

function munk_customize_color_header( $config ) {

    Kirki::add_section( 'munk_color_header', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Header', 'munk' ),
        'panel' =>  'munk_colors_panel'
    ) );    
	
	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_header_above',
		'label'       => '',
        'section'     => 'munk_color_header',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Above Header Section', 'munk' ) . '</div>',
		'priority'    => '5',
	) );	

	
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_header_above_ed',
		'label'       => '',
		'section'     => 'munk_color_header',
		'priority'    => 10,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor' => esc_html__( 'Background Color', 'munk' ),
			'text'    => esc_html__( 'Text Color', 'munk' ),
			'link'    => esc_html__( 'Link  Color', 'munk' ),
			'hover'   => esc_html__( 'Hover  Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor' => '#f5f6f7',
			'text'    => '#101010',
			'link'    => '#101010',
			'hover'   => MUNK_ACCENT_COLOR,
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.header-above',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'text',
			  'element'   => '.header-above',
			  'property'  => 'color',
			),			
			array(
			  'choice'    => 'link',
			  'element'   => '.header-above a, .header-above ul.mt-header-ed-menu li a',
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'hover',
			  'element'   => '.header-above a:hover',
			  'property'  => 'color',
			),			
		),		
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_header_primary',
		'label'       => '',
        'section'     => 'munk_color_header',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Primary Header', 'munk' ) . '</div>',
		'priority'    => '15',
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_header_primary_ed',
		'label'       => '',
		'section'     => 'munk_color_header',
		'priority'    => 20,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor-header' => esc_html__( 'Background Color', 'munk' ),
			'text'    => esc_html__( 'Text Color', 'munk' ),
			'link'    => esc_html__( 'Link  Color', 'munk' ),
			'hover'   => esc_html__( 'Hover  Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor-header' => '#FFFFFF',
			'text'    => '#101010',
			'link'    => '#101010',
			'hover'   => '#101010',
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor-header',
			  'element'   => '.site-header',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'text',
			  'element'   => '.site-header, .site-header .site-branding p',
			  'property'  => 'color',
			),			
			array(
			  'choice'    => 'link',
			  'element'   => '.site-header .site-branding h1 a',
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'hover',
			  'element'   => '.site-header .site-branding h1 a:hover',
			  'property'  => 'color',
			),			
		),		
	) );		
	
	Kirki::add_field( 'munk', array(
			'type'        => 'custom',
			'settings'    => 'munk_color_header_below',
			'label'       => '',
			'section'     => 'munk_color_header',
			'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Below Header Section', 'munk' ) . '</div>',
			'priority'    => '25',
		) );	

	
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_header_below_ed',
		'label'       => '',
		'section'     => 'munk_color_header',
		'priority'    => 30,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor' => esc_html__( 'Background Color', 'munk' ),
			'text'    => esc_html__( 'Text Color', 'munk' ),
			'link'    => esc_html__( 'Link  Color', 'munk' ),
			'hover'   => esc_html__( 'Hover  Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor' => '#f5f6f7',
			'text'    => '#101010',
			'link'    => '#101010',
			'hover'   => MUNK_ACCENT_COLOR,
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.header-below',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'text',
			  'element'   => '.header-below',
			  'property'  => 'color',
			),			
			array(
			  'choice'    => 'link',
			  'element'   => '.header-below a, .header-below ul.mt-header-ed-menu li a',
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'hover',
			  'element'   => '.header-below a:hover',
			  'property'  => 'color',
			),			
		),		
	) );		
	

}
//add_action( 'kirki_config', 'munk_customize_color_header' );