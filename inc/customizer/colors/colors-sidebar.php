<?php
/**
 * All Sidebar Color Settings
 *
 */
 
function munk_color_sidebar_settings( $config ) {

    Kirki::add_section( 'munk_color_sidebar', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Sidebar', 'munk' ),
        'panel' =>  'munk_colors_panel'
    ) );    

	Kirki::add_field( 'munk', array(
			'type'        => 'custom',
			'settings'    => 'munk_color_sidebar_label',
			'label'       => '',
			'section'     => 'munk_color_sidebar',
			'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Sidebar', 'munk' ) . '</div>',
			'priority'    => '5',
		) );	
	

	Kirki::add_field( 'munk', array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_main_sidebar',
		'label'       => '',
		'section'     => 'munk_color_sidebar',
		'priority'    => 10,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor' => esc_html__( 'Background Color', 'munk' ),
			'widget-title' => esc_html__( 'Widget Title Color', 'munk' ),			
			'text'    => esc_html__( 'Text Color', 'munk' ),
			'link'    => esc_html__( 'Link Color', 'munk' ),
			'hover'   => esc_html__( 'Hover Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor' => '#f5f6f7',
			'widget-title'    => '#191919',
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

}
add_action( 'kirki_config', 'munk_color_sidebar_settings' );