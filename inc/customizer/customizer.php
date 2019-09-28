<?php
	Munk_Kirki::add_config( 'munk', array(
		'gutenberg_support' => true,	
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
        'disable_output'=> false,
    ) );	
/**
 * Configuration sample for the Kirki Customizer
 */
function munk_kirki_customizer_config( $config ) {

    $config['disable_loader'] = true;

    return $config;

}
add_filter( 'kirki/config', 'munk_kirki_customizer_config' );	

define ( 'MUNK_ACCENT_COLOR', '#0161bd' ); // defined primary color
/**
 * Basic customizations
 */
function munk_default_customize($wp_customize) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-branding .site-title a',
			'render_callback' => 'munk_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'munk_customize_partial_blogdescription',
		) );
}
	
	$wp_customize->remove_section( 'colors' );

	/**
	 * Render the site title for the selective refresh partial.
	 *
	 * @return void
	 */
	function munk_customize_partial_blogname() {
		bloginfo( 'name' );
	}

	/**
	 * Render the site tagline for the selective refresh partial.
	 *
	 * @return void
	 */

	function munk_customize_partial_blogdescription() {
		bloginfo( 'description' );
	}
	
}
add_action( 'customize_register', 'munk_default_customize', 10 );

/*
*
* Get all Available Menu in array.
*/
function munk_menu_ed() {

		$munk_menu_ed = wp_get_nav_menus();
		
		// Initate an empty array
		$menu_options = array();
		$menu_options['0'] = esc_attr__( 'Select a Menu', 'munk' );
		
		if ( ! empty( $munk_menu_ed ) ) {
			foreach ( $munk_menu_ed as $menu ) {
					$menu_options[ $menu->term_id ] = $menu->name;    
			}
		}
		return $menu_options;
}

function munk_theme_panel($config) {
	 	
    /**
     * Colors Panel
     */
    Kirki::add_panel('munk_colors_panel', array(
        'title' =>  esc_html__( 'Colors', 'munk' ),
        'description'   =>  esc_html__( 'Panel for the Theme Color Customization', 'munk' ),
        'priority' => 10,		
    ));	
	
    /**
     * Typography Panel
     */
    Kirki::add_panel('munk_typography_panel', array(
        'title' =>  esc_html__( 'Typography', 'munk' ),
        'description'   =>  esc_html__( 'Panel for the Theme Font/Typography', 'munk' ),
        'priority' => 15,		
    ));		

    /**
     * Layouts Panel
     */
    Kirki::add_panel('munk_layout_panel', array(
        'title' =>  esc_html__( 'Site Layout', 'munk' ),
        'description'   =>  esc_html__( 'Panel for the Theme Layout Customization', 'munk' ),
        'priority' => 20,		
    ));	
	
	
}
add_action( 'kirki_config', 'munk_theme_panel' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function munk_customize_preview_js() {
	wp_enqueue_script( 'munk-customizer', get_template_directory_uri() . '/inc/customizer/assets/js/customizer.js', array( 'customize-preview' ), MUNK_THEME_VERSION, true );
}
add_action( 'customize_preview_init', 'munk_customize_preview_js' );

function munk_customize_script(){
    wp_enqueue_style( 'munk-customize', get_template_directory_uri() . '/inc/customizer/assets/css/customize.css', array(), MUNK_THEME_VERSION );
}
add_action( 'customize_controls_enqueue_scripts', 'munk_customize_script' );

/**
 * Customizer Sections
*/
$munk_layout_sections = array( 'blog',	'container', 'footer', 'header' );
foreach( $munk_layout_sections as $munk_section ) {
 get_template_part('inc/customizer/layout/layout', $munk_section);
}

$munk_color_sections = array( 'header', 'navigation', 'general', 'footer', 'sidebar', 'buttons' );
foreach( $munk_color_sections as $munk_section ) {
 get_template_part('inc/customizer/colors/colors', $munk_section);
}

$munk_typography_sections = array( 'header', 'navigation', 'general', 'sidebar', 'footer', 'buttons' );
foreach( $munk_typography_sections as $munk_section ) {
 get_template_part('inc/customizer/typography/typography', $munk_section);
}

$munk_blog_layout_sections = array( 'archive', 'single_post', 'single_page' );
foreach( $munk_blog_layout_sections as $munk_section ) {
 get_template_part('inc/customizer/layout/blog/layout', $munk_section);
}

$munk_header_layout_sections = array( 'above_header',	'primary_header', 'sticky_header', 'below_header' );
foreach( $munk_header_layout_sections as $munk_section ) {
 get_template_part('inc/customizer/layout/header/layout', $munk_section);
}