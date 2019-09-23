<?php
/**
 * General Content Color Settings
 *
 */
 
function munk_customize_color_general( $config ) {

    Kirki::add_section( 'munk_color_general_settings', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Content', 'munk' ),
        'panel' =>  'munk_colors_panel'
    ) );    
		
	Kirki::add_field( 'munk', array(
        'type'        => 'color',
        'settings'    => 'munk_color_general_bgcolor',
        'label'       => esc_html__( 'Background Color', 'munk' ),
        'description' => esc_html__( 'Applies to primary content area', 'munk' ),		
        'section'     => 'munk_color_general_settings',
		'default'     => '#ffffff',		
        'priority'    => 5,
		'transport'   => 'auto',
		'output' => array(
			array(
				'element'  => '#primary, .entry-card',
				'property' => 'background-color',
			),
		),		
	));				
	
	Kirki::add_field( 'munk', array(
        'type'        => 'color',
        'settings'    => 'munk_color_general_title_color',
        'label'       => esc_html__( 'Post/Page Title', 'munk' ),
        'section'     => 'munk_color_general_settings',
		'default'     => '#212529',		
        'priority'    => 15,
		'transport'   => 'auto',
		'output' => array(
			array(
				'element'  => '.entry-card .entry-title a, .single h1.entry-title, .page h1.entry-title, .archive-title',
				'property' => 'color',
			),
			array(
				'element'  => '.editor-post-title__input',
				'property' => 'color',
				'context'  => array( 'editor' ),				
			),				
		),		
	));	
	
	Kirki::add_field( 'munk', array(
        'type'        => 'color',
        'settings'    => 'munk_color_general_text_color',
        'label'       => esc_html__( 'Post/Page Content', 'munk' ),
        'section'     => 'munk_color_general_settings',
		'default'     => '#212529',		
        'priority'    => 15,
		'transport'   => 'auto',
		'output' => array(
			array(
				'element'  => '.entry-card .entry-content p,.entry-card .entry-excerpt p, body,.archive-description,.archive-description p,.wp-block-image figcaption,.related-post,.entry-content,.entry-content p,.entry-content ul,.entry-content ul li,.entry-content blockquote,.entry-content blockquote p,.entry-content span,.entry-content ol,.entry-content ol li,.entry-content caption,.entry-content table td,.entry-content table tr td,.entry-content form label,.entry-content legend,.entry-content address,.entry-content pre',
				'property' => 'color',
			),
		array(
			'element'  => '.edit-post-visual-editor.editor-styles-wrapper p:not([class]), .edit-post-visual-editor.editor-styles-wrapper figcaption, .edit-post-visual-editor.editor-styles-wrapper ul, .edit-post-visual-editor.editor-styles-wrapper ul li, .edit-post-visual-editor.editor-styles-wrapper blockquote, .edit-post-visual-editor.editor-styles-wrapper blockquote p,.edit-post-visual-editor.editor-styles-wrapper span,.edit-post-visual-editor.editor-styles-wrapper ol,.edit-post-visual-editor.editor-styles-wrapper ol li, .edit-post-visual-editor.editor-styles-wrapper caption,.edit-post-visual-editor.editor-styles-wrapper table td,.edit-post-visual-editor.editor-styles-wrapper table tr td,.edit-post-visual-editor.editor-styles-wrapper form label, .edit-post-visual-editor.editor-styles-wrapper legend, .edit-post-visual-editor.editor-styles-wrapper address, .edit-post-visual-editor.editor-styles-wrapper pre',
			'property' => 'color',			
			'context'  => array( 'editor' ),
		),			
		),		
	));							
	
	Kirki::add_field( 'munk', array(
        'type'        => 'color',
        'settings'    => 'munk_color_general_link_color',
        'label'       => esc_html__( 'Content Link', 'munk' ),
        'section'     => 'munk_color_general_settings',
		'default'     => '#212529',		
        'priority'    => 15,
		'transport'   => 'auto',
		'output' => array(
			array(
				'element'  => '.entry-card a,.entry-content a,.entry-content a:visited,.entry-content a:focus,.entry-content a:active,.comment-list .reply a',
				'property' => 'color',
			),
			array(
				'element'  => '.edit-post-visual-editor.editor-styles-wrapper a, .edit-post-visual-editor.editor-styles-wrapper a:visited',
				'property' => 'color',
				'context'  => array( 'editor' ),				
			),			
		),			
	));					
	
	Kirki::add_field( 'munk', array(
        'type'        => 'color',
        'settings'    => 'munk_color_general_link_hover',
        'label'       => esc_html__( 'Content Link Hover', 'munk' ),
        'section'     => 'munk_color_general_settings',
		'default'     => '#212529',		
        'priority'    => 15,
		'transport'   => 'auto',
		'output' => array(
			array(
				'element'  => '.entry-card a:hover,.entry-content a:hover,.comment-list .reply a:hover',
				'property' => 'color',
			),
			array(
				'element'  => '.edit-post-visual-editor.editor-styles-wrapper a:hover, .edit-post-visual-editor.editor-styles-wrapper a:focus',
				'property' => 'color',
				'context'  => array( 'editor' ),				
			),			
		),		
	));	
	
	Kirki::add_field( 'munk', array(
        'type'        => 'color',
        'settings'    => 'munk_color_general_post_meta',
        'label'       => esc_html__( 'Post Meta', 'munk' ),
        'section'     => 'munk_color_general_settings',
		'default'     => '#212529',		
        'priority'    => 15,
		'transport'   => 'auto',
		'output' => array(
			array(
				'element'  => '.entry-card .entry-meta a, .entry-card .entry-meta span, .entry-card .entry-meta, .entry-card .entry-meta .comments svg, .entry-card .entry-meta .posted-on svg, .entry-card .entry-meta .tags svg, .entry-card .entry-meta .post-category svg, .entry-card .entry-meta .byline svg',
				'property' => 'color',
			),
		),		
	));							

}
add_action( 'kirki_config', 'munk_customize_color_general' );