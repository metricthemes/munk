<?php
/**
 * Footer Color Settings
 *
 */
 
function munk_typography_footer_settings( $config ) {

    Kirki::add_section( 'munk_typography_footer', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Footer', 'munk' ),
        'panel' =>  'munk_typography_panel'
    ) );    			
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_footer_ed',
		'label'       => esc_html__('Footer Font', 'munk'),
		'section'     => 'munk_typography_footer',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',
		),
		'output'    => array(
			array(
			  'element'   => '.site-footer, .site-footer .footer-t .widget-title, .site-footer .footer-t, .site-footer .footer-t .widget, .site-footer .footer-t .widget p, .site-footer .footer-t ul li, .site-footer .widget.widget_calendar table td, .site-footer .footer-t .widget a, .site-footer .footer-t .widget ul li a, .site-footer .footer-t .widget a:hover, .site-footer .footer-t .widget ul li a:hover',
			),	
		),		
	) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_footer_widget_title',
		'label'       => esc_html__('Widget Title', 'munk'),
		'section'     => 'munk_typography_footer',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-size'      => '18px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
		),
		'output'    => array(
			array(
			  'element'   => '.site-footer .footer-t .widget-title',
			),	
		),		
	) );			
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_footer_widget_content',
		'label'       => esc_html__('Widget Content', 'munk'),
		'section'     => 'munk_typography_footer',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-size'      => '15px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
		),
		'output'    => array(
			array(
			  'element'   => '.site-footer, .site-footer .footer-t, .site-footer .footer-t .widget, .site-footer .footer-t .widget p, .site-footer .footer-t ul li, .site-footer .widget.widget_calendar table td, .site-footer .footer-t .widget a, .site-footer .footer-t .widget ul li a, .site-footer .footer-t .widget a:hover, .site-footer .footer-t .widget ul li a:hover',
			),	
		),		
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_footer_copyright',
		'label'       => esc_html__('Copyright Section', 'munk'),
		'section'     => 'munk_typography_footer',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-size'      => '14px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
		),
		'output'    => array(
			array(
			  'element'   => '.site-footer .site-info,.site-footer .site-info, .site-footer .site-info p, .site-footer .site-info a,  .site-footer .site-info a:hover,  .site-footer .site-info a:active',
			),	
		),		
	) );					
	
	
	
		

}
add_action( 'kirki_config', 'munk_typography_footer_settings' );