<?php
/**
 * Button Color Settings
 *
 */
 
function munk_color_button_settings( $config ) {

    Kirki::add_section( 'munk_color_button', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Buttons & Icons', 'munk' ),
        'panel' =>  'munk_colors_panel'
    ) );    
	
	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_primary_button_label',
		'label'       => '',
        'section'     => 'munk_color_button',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Primary Buttons', 'munk' ) . '</div>',
		'priority'    => '5',
	) );		
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_primary_button',
		'label'       => '',
		'section'     => 'munk_color_button',
		'priority'    => 10,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor' => esc_html__( 'Background Color', 'munk' ),
			'text'    => esc_html__( 'Text Color', 'munk' ),
			'hover-bg'    => esc_html__( 'Hover background Color', 'munk' ),
			'hover-text'   => esc_html__( 'Hover Text Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor' => '#0161bd',
			'text'    => '#ffffff',			
			'hover-bg'    => '#075aaa',
			'hover-text'   => '#ffffff',
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.navigation.pagination .nav-links a:hover,.navigation.pagination .nav-links .current, .no-results .search-submit, .woocommerce div.product .cart .single_add_to_cart_button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.navigation.pagination .nav-links a:hover,.navigation.pagination .nav-links .current, .no-results .search-submit, .woocommerce div.product .cart .single_add_to_cart_button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt',
			  'property'  => 'border-color',
			),			
			array(
			  'choice'    => 'text',
			  'element'   => '.navigation.pagination .nav-links a:hover,.navigation.pagination .nav-links .current, .no-results .search-submit, .woocommerce div.product .cart .single_add_to_cart_button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt', 
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'hover-bg',
			  'element'   => '.navigation.pagination .nav-links a:hover,.navigation.pagination .nav-links .current, .woocommerce div.product .cart .single_add_to_cart_button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'hover-text',
			  'element'   => '.navigation.pagination .nav-links a:hover,.navigation.pagination .nav-links .current, .woocommerce div.product .cart .single_add_to_cart_button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover',
			  'property'  => 'color',
			),		
			array(
			  'choice'    => 'hover-text',
			  'element'   => '.navigation.pagination .nav-links a:hover,.navigation.pagination .nav-links .current, .woocommerce div.product .cart .single_add_to_cart_button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover',
			  'property'  => 'border-color',
			),						
		),		
	) );
	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_secondary_button_label',
		'label'       => '',
        'section'     => 'munk_color_button',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Secondary Buttons', 'munk' ) . '</div>',
		'priority'    => '5',
	) );		
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_secondary_button',
		'section'     => 'munk_color_button',
		'priority'    => 20,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor' => esc_html__( 'Background Color', 'munk' ),
			'text'    => esc_html__( 'Text Color', 'munk' ),
			'hover-bg'    => esc_html__( 'Hover background Color', 'munk' ),
			'hover-text'   => esc_html__( 'Hover Text Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor' => '#292e37',
			'text'    => '#ffffff',			
			'hover-bg'    => '#292e37',
			'hover-text'   => '#ffffff',
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.entry-card .read-more a, .widget_search .search-submit, .mt-header-ed .search-submit, .entry-content form input#submit, .entry-content a.button, .entry-content button.button, .entry-content input.button, .entry-content form button, #respond .form-submit #submit,#respond .form-submit #submit:hover, .woocommerce #respond input#submit.alt, .no-results .search-submit',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.entry-card .read-more a,#respond .form-submit #submit, .woocommerce #respond input#submit.alt, .no-results .search-submit',
			  'property'  => 'border-color',
			),			
			array(
			  'choice'    => 'text',
			  'element'   => '.entry-card .read-more a,#respond .form-submit #submit, .woocommerce #respond input#submit.alt, .no-results .search-submit', 
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'hover-bg',
			  'element'   => '.entry-card .read-more a:hover, #respond .form-submit #submit:hover, .woocommerce #respond input#submit.alt:hover, .no-results .search-submit:hover',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'hover-text',
			  'element'   => '.entry-card .read-more a:hover, #respond .form-submit #submit:hover, .woocommerce #respond input#submit.alt:hover, .no-results .search-submit:hover',
			  'property'  => 'color',
			),		
			array(
			  'choice'    => 'hover-text',
			  'element'   => '.entry-card .read-more a:hover, #respond .form-submit #submit:hover, .woocommerce #respond input#submit.alt:hover, .no-results .search-submit:hover',
			  'property'  => 'border-color',
			),						
		),		
	) );		
	

}
add_action( 'kirki_config', 'munk_color_button_settings' );