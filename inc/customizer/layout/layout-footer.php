<?php
/**
 * Layout Site Footer
 *
 */

function munk_customize_layout_footer( $config ) {

    Kirki::add_section( 'munk_layout_footer', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Footer', 'munk' ),
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
	
	// Footer Color Settings
	
	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_footer_main_label',
		'label'       => '',
        'section'     => 'munk_layout_footer',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Color Settings - Footer Widgets', 'munk' ) . '</div>',
		'priority'    => '30',
	) );	
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_footer_widgets',
		'label'       => '',
		'section'     => 'munk_layout_footer',
		'priority'    => 35,
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
        'settings'    => 'munk_color_footer_label',
		'label'       => '',
        'section'     => 'munk_layout_footer',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Color Settings - Footer Copyright Section', 'munk' ) . '</div>',
		'priority'    => '40',
	) );	
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_footer_copyright',
		'label'       => '',
		'section'     => 'munk_layout_footer',
		'priority'    => 45,
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
	
	Kirki::add_field( 'munk', array(
			'type'        => 'custom',
			'settings'    => 'munk_footer_typography_label',
			'label'       => '',
			'section'     => 'munk_layout_footer',
			'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Typography Settings', 'munk' ) . '</div>',
			'priority'    => '45',
		) );			
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_footer_widget_title',
		'label'       => esc_html__('Widget Title', 'munk'),
		'section'     => 'munk_layout_footer',
		'priority'    => 55,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',		
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
		'section'     => 'munk_layout_footer',
		'priority'    => 60,
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
			  'element'   => '.site-footer, .site-footer .footer-t, .site-footer .footer-t .widget, .site-footer .footer-t .widget p, .site-footer .footer-t ul li, .site-footer .widget.widget_calendar table td, .site-footer .footer-t .widget a, .site-footer .footer-t .widget ul li a, .site-footer .footer-t .widget a:hover, .site-footer .footer-t .widget ul li a:hover',
			),	
		),		
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_footer_copyright',
		'label'       => esc_html__('Copyright Section', 'munk'),
		'section'     => 'munk_layout_footer',
		'priority'    => 65,
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
			  'element'   => '.site-footer .site-info,.site-footer .site-info, .site-footer .site-info p, .site-footer .site-info a,  .site-footer .site-info a:hover,  .site-footer .site-info a:active',
			),	
		),		
	) );				
		
	

}
add_action( 'kirki_config', 'munk_customize_layout_footer' );