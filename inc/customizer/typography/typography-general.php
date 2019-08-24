<?php
/**
 * General Content Color Settings
 *
 */
 
function munk_customize_typography_general( $config ) {

    Kirki::add_section( 'munk_typography_general_settings', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Content', 'munk' ),
        'panel' =>  'munk_typography_panel'
    ) );    					
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_general_content',
		'label'       => esc_html__('Content Font', 'munk'),		
		'section'     => 'munk_typography_general_settings',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',
		),
		'output'    => array(
			array(
			  'element'   => '#primary, .entry-card, .entry-card .entry-content p, .entry-card .entry-excerpt p, body,.archive-description,.archive-description p,.wp-block-image figcaption,.related-post,.entry-content,.entry-content p,.entry-content ul,.entry-content ul li,.entry-content blockquote,.entry-content blockquote p,.entry-content span,.entry-content ol,.entry-content ol li,.entry-content caption,.entry-content table td,.entry-content table tr td,.entry-content form label,.entry-content legend,.entry-content address,.entry-content pre, .entry-card a,.entry-content a,.entry-content a:visited,.entry-content a:focus,.entry-content a:active,.comment-list .reply a, .entry-card .entry-meta a, .entry-card .entry-meta span, .entry-card .entry-meta',
			),
		),		
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_general_post_title',
		'label'       => esc_html__('Post/Page Title', 'munk'),		
		'section'     => 'munk_typography_general_settings',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => '600',		
			'font-size'      => '25px',
			'line-height'    => '1.6',			
			'text-transform' => 'none',
		),
		'output'    => array(
			array(
			  'element'   => '.entry-card .entry-title a, .single h1.entry-title, .page h1.entry-title, .archive-title',
			),
		),		
	) );		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_general_post_content',
		'label'       => esc_html__('Post/Page Content', 'munk'),		
		'section'     => 'munk_typography_general_settings',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-size'      => '14px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
		),
		'output'    => array(
			array(
			  'element'   => '.entry-card .entry-content p, .entry-card .entry-excerpt p, body,.archive-description,.archive-description p,.wp-block-image figcaption,.related-post,.entry-content,.entry-content p,.entry-content ul,.entry-content ul li,.entry-content blockquote,.entry-content blockquote p,.entry-content span,.entry-content ol,.entry-content ol li,.entry-content caption,.entry-content table td,.entry-content table tr td,.entry-content form label,.entry-content legend,.entry-content address,.entry-content pre, .entry-card a,.entry-content a,.entry-content a:visited,.entry-content a:focus,.entry-content a:active,.comment-list .reply a',
			),
		),		
	) );			

	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_general_post_meta',
		'label'       => esc_html__('Post Meta', 'munk'),		
		'section'     => 'munk_typography_general_settings',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => array(
			'font-size'      => '14px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
		),
		'output'    => array(
			array(
			  'element'   => '.entry-card .entry-meta a, .entry-card .entry-meta span, .entry-card .entry-meta',
			),
		),		
	) );			

}
add_action( 'kirki_config', 'munk_customize_typography_general' );