<?php
/**
 * Layout Blog Archive
 *
 */

function munk_customize_layout_blog( $config ) {

	/**
	 * Site Blog Sub Panel
	 */
    Kirki::add_panel('munk_layouts_blog', array(
        'title' =>  esc_html__( 'Blog', 'munk' ),
        'description'   =>  esc_html__( 'Panel for the Theme Archive Layout Customization', 'munk' ),
        'panel' =>  'munk_layout_panel',
        'priority' => 10,		
    ));		

}
add_action( 'kirki_config', 'munk_customize_layout_blog' );