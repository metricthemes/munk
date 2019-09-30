<?php
/**
 * Layout Site Sidebar
 *
 */

function munk_customize_layout_sidebar( $config ) {

    Kirki::add_section( 'munk_layout_sidebar', array(
        'priority'   => 13,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Sidebar', 'munk' ),
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
	
	Kirki::add_field( 'munk', array(
			'type'        => 'custom',
			'settings'    => 'munk_color_sidebar_label',
			'label'       => '',
			'section'     => 'munk_layout_sidebar',
			'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Color Settings', 'munk' ) . '</div>',
			'priority'    => '30',
		) );	
	

	Kirki::add_field( 'munk', array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_main_sidebar',
		'label'       => '',
		'section'     => 'munk_layout_sidebar',
		'priority'    => 35,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor' => esc_html__( 'Background Color', 'munk' ),
			'widget-title' => esc_html__( 'Widget Title Color', 'munk' ),			
			'widget-title-bg' => esc_html__( 'Widget Title Background Color', 'munk' ),						
			'text'    => esc_html__( 'Text Color', 'munk' ),
			'link'    => esc_html__( 'Link Color', 'munk' ),
			'hover'   => esc_html__( 'Hover Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor' => '#f5f6f7',
			'widget-title'    => '#191919',
			'widget-title-bg' => '#f5f6f7',			
			'text'    => '#212529',			
			'link'    => '#212529',
			'hover'   => '#212529',
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '#secondary',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'widget-title',
			  'element'   => '#secondary .widget .widget-title',
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'widget-title-bg',
			  'element'   => '#secondary .widget .widget-title',
			  'property'  => 'background-color',
			),			
			array(
			  'choice'    => 'text',
			  'element'   => '#secondary, #secondary .widget, #secondary .widget p, #secondary ul li, .widget table td',
			  'property'  => 'color',
			),			
			array(
			  'choice'    => 'link',
			  'element'   => '#secondary .widget a, #secondary .widget ul li a',
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'hover',
			  'element'   => '#secondary .widget a:hover, #secondary .widget ul li a:hover',
			  'property'  => 'color',
			),			
		),		
	) );			
	
	Kirki::add_field( 'munk', array(
			'type'        => 'custom',
			'settings'    => 'munk_color_sidebar_label',
			'label'       => '',
			'section'     => 'munk_layout_sidebar',
			'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Typography Settings', 'munk' ) . '</div>',
			'priority'    => '40',
		) );				
	
		Kirki::add_field( 'munk', array(
			'type'        => 'typography',
			'settings'    => 'munk_typography_sidebar_widget_title',
			'label'       => esc_html__('Widget Title', 'munk'),
			'section'     => 'munk_layout_sidebar',
			'priority'    => 50,
			'transport'   => 'auto',
			'default'     => array(
				'font-family'    => 'IBM Plex Sans',
				'variant'        => 'regular',		
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
			'section'     => 'munk_layout_sidebar',
			'priority'    => 55,
			'transport'   => 'auto',
			'default'     => array(
				'font-family'    => 'IBM Plex Sans',
				'variant'        => 'regular',		
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
add_action( 'kirki_config', 'munk_customize_layout_sidebar' );