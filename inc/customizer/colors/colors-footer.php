<?php
/**
 * Footer Color Settings
 *
 */
 
function munk_color_footer_settings( $config ) {

    Kirki::add_section( 'munk_color_footer', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Footer', 'munk' ),
        'panel' =>  'munk_colors_panel'
    ) );    		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_footer_main_label',
		'label'       => '',
        'section'     => 'munk_color_footer',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Footer Widgets', 'munk' ) . '</div>',
		'priority'    => '5',
	) );	
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_footer_widgets',
		'label'       => '',
		'section'     => 'munk_color_footer',
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
			'bgcolor' => '#292E37',
			'widget-title'    => '#c5ccd8',
			'text'    => '#c5ccd8',			
			'link'    => '#c5ccd8',
			'hover'   => '#c5ccd8',
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.site-footer',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'widget-title',
			  'element'   => '.site-footer .footer-t .widget-title',
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'text',
			  'element'   => '.site-footer .footer-t, .site-footer .footer-t .widget, .site-footer .footer-t .widget p, .site-footer .footer-t ul li, .site-footer .widget.widget_calendar table td',
			  'property'  => 'color',
			),			
			array(
			  'choice'    => 'link',
			  'element'   => '.site-footer .footer-t .widget a, .site-footer .footer-t .widget ul li a',
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'hover',
			  'element'   => '.site-footer .footer-t .widget a:hover, .site-footer .footer-t .widget ul li a:hover',
			  'property'  => 'color',
			),			
		),		
	) );		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_footer_copyright_label',
		'label'       => '',
        'section'     => 'munk_color_footer',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Footer Copyright Section', 'munk' ) . '</div>',
		'priority'    => '15',
	) );	
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_footer_copyright',
		'label'       => '',
		'section'     => 'munk_color_footer',
		'priority'    => 20,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor' => esc_html__( 'Background Color', 'munk' ),
			'text'    => esc_html__( 'Text Color', 'munk' ),
			'link'    => esc_html__( 'Link Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor' => '#262b33',
			'text'    => '#afb7c5',			
			'link'    => '#afb7c5',
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.site-footer .site-info',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'text',
			  'element'   => '.site-footer .site-info, .site-footer .site-info p',
			  'property'  => 'color',
			),			
			array(
			  'choice'    => 'link',
			  'element'   => '.site-footer .site-info a,  .site-footer .site-info a:hover,  .site-footer .site-info a:active',
			  'property'  => 'color',
			),
		),		
	) );		
	
		

}
//add_action( 'kirki_config', 'munk_color_footer_settings' );