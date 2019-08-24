<?php
/**
 * Layout Single Post
 *
 */

function munk_customize_layout_single_post ( $config ) {


    Kirki::add_section( 'munk_customize_layout_single_post', array(
        'priority'   => 10,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Single Post', 'munk' ),
        'panel' =>  'munk_layouts_blog',
    ) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'radio-image',
		'settings'    => 'munk_layout_single_post_ed',
		'label'       => esc_html__( 'Single Post Layout', 'munk' ),
		'section'     => 'munk_customize_layout_single_post',
		'default'     => 'right-sidebar',
		'priority'    => 10,
		'choices'     => array(
			'no-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/no-sidebar.png',
			'left-sidebar' => get_template_directory_uri() . '/inc/customizer/assets/images/left-sidebar.png',
			'right-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/right-sidebar.png',
		),
	) );	
			
	Kirki::add_field( 'munk', array(
		'type'        => 'sortable',
		'settings'    => 'munk_layout_single_post_content_pos',
		'label'       => esc_html__( 'Post Layout', 'munk' ),
		'section'     => 'munk_customize_layout_single_post',
		'default'     => array(
			'title',
			'meta',
			'image',
			'content'			
		),
		'choices'     => array(
			'title' => esc_html__( 'Title', 'munk' ),
			'meta' => esc_html__( 'Post Meta', 'munk' ),
			'image' => esc_html__( 'Featured Image', 'munk' ),
			'content' => esc_html__( 'Content', 'munk' ),
		),
		'priority'    => 15,
		'transport' => 'refresh',		
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'sortable',
		'settings'    => 'munk_layout_single_post_meta',
		'label'       => esc_html__( 'Post Meta', 'munk' ),
		'section'     => 'munk_customize_layout_single_post',
		'default'     => array(
			'author',
			'date',
			'category',
			'comments',
		),
		'choices'     => array(
			'author' => esc_html__( 'Author', 'munk' ),
			'date' => esc_html__( 'Date', 'munk' ),
			'category' => esc_html__( 'Category', 'munk' ),
			'comments' => esc_html__( 'Comment Link', 'munk' ),
			'tags' => esc_html__( 'Tag', 'munk' ),			
		),
		'priority'    => 20,
		'transport' => 'refresh',		
	) );		
		
	Kirki::add_field( 'munk', array(
		'type'        => 'toggle',
		'settings'    => 'munk_layout_single_post_meta_icon',
		'label'       => esc_html__( 'Show Icons in Post Meta', 'munk' ),
		'description' => esc_html__( 'Enable to show icons in post meta info.', 'munk' ),		
		'section'     => 'munk_customize_layout_single_post',
		'default'     => '1',
		'priority'    => 25,
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'toggle',
		'settings'    => 'munk_layout_single_post_author_ed',
		'label'       => esc_html__( 'Author Bio', 'munk' ),
		'description' => esc_html__( 'Enable author bio.', 'munk' ),		
		'section'     => 'munk_customize_layout_single_post',
		'default'     => '1',
		'priority'    => 30,
	) );			
	
	Kirki::add_field( 'munk', array(
		'type'        => 'text',
		'settings'    => 'munk_layout_single_post_author_title',
		'label'       => esc_html__( 'Author Title', 'munk' ),
		'description' => esc_html__( 'Enable author bio.', 'munk' ),		
		'section'     => 'munk_customize_layout_single_post',
		'default'     => esc_html__( 'About Author', 'munk' ),
		'priority'    => 35,
		'active_callback' => array(
			array(
				'setting'  => 'munk_layout_single_post_author_ed',
				'operator' => '==',
				'value'    => true,
			)
		),		
	) );				
	

}
add_action( 'kirki_config', 'munk_customize_layout_single_post' );