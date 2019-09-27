<?php
/**
 * WP Travle Engine Compatibility File.
 *
 * Since @1.0.2 
 * @package Munk
 */
if ( ! defined( 'ABSPATH' ) ) exit; 

					
function munk_wte_single ($template_path) {

	if ( get_post_type() == 'trip' ) {
		$theme_file = locate_template( array ( '/inc/compatibility/wp-travel-engine/single-trip.php' ) );
		$template_path = $theme_file;
	}
	
	return $template_path;	

}					
//add_filter( 'template_include', 'munk_wte_single');


 
if ( ! class_exists( 'Munk_WP_Travel_Engine' ) ) :

	/**
	 * Munk WP Travle Engine Compatibility
	 *
	 * @since 1.0.2
	 */
	class Munk_WP_Travel_Engine {	
		
		/**
		 * Member Variable
		 *
		 * @var object instance
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}	
		
		/**
		 * Constructor
		 */
		public function __construct() {		
																																	
																		
		}		
	
		
	}
	
endif;	

//if(munk_is_elementor_activated()){
	Munk_WP_Travel_Engine::get_instance();
//}