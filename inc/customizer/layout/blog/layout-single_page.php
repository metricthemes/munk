<?php
/**
 * Layout Single Page
 *
 */

function munk_customize_layout_single_page ( $config ) {


    Kirki::add_section( 'munk_customize_layout_single_page', array(
        'priority'   => 10,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Single Page', 'munk' ),
        'panel' =>  'munk_layouts_blog',
    ) );
		
	Kirki::add_field( 'munk', array(
		'type'        => 'radio-image',
		'settings'    => 'munk_customize_layout_single_page_ed',
		'label'       => esc_html__( 'Single Page Layout', 'munk' ),
		'section'     => 'munk_customize_layout_single_page',
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
		'settings'    => 'munk_layout_single_page_content_pos',
		'label'       => esc_html__( 'Page Layout', 'munk' ),
		'section'     => 'munk_customize_layout_single_page',
		'default'     => array(
			'title',
			'image',
			'content'			
		),
		'choices'     => array(
			'title' => esc_html__( 'Title', 'munk' ),
			'image' => esc_html__( 'Featured Image', 'munk' ),
			'content' => esc_html__( 'Content', 'munk' ),
		),
		'priority'    => 15,
	) );		

}
add_action( 'kirki_config', 'munk_customize_layout_single_page' );