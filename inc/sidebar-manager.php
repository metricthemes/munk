<?php
/**
 * Munk Sidebar Manager
 *
 * @package munk
 */
 
if ( !defined( 'ABSPATH' ) )
    die( 'Direct access forbidden.' ); 
	
/* classes for sidebar layout
* @since 1.0.0
*/
if ( ! function_exists( 'munk_sidebar_manager' ) ) :
function munk_sidebar_manager() {		
		global $post;
		
		$classes = '';
		$munk_side_order = '';
		$munk_content_order = '';
		if($post) {
			$single_sidebar_ed = get_post_meta( $post->ID, 'munk_settings_main_sidebar', true );
		}
		if ( is_home() || is_search() ) {
		$munk_archive_ed = get_theme_mod('munk_layout_blog_archive_ed', 'right-sidebar');
			if ($munk_archive_ed == 'right-sidebar') {
				$classes = 'right-sidebar';
				$munk_side_order = 'order-xl-2 order-lg-2 order-md-2 order-2';				
				$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-1 order-lg-1 order-md-2 order-2';
			}
			if ($munk_archive_ed == 'left-sidebar') {
				$classes = 'left-sidebar';
				$munk_side_order = 'order-xl-1 order-lg-1 order-md-2 order-2';				
				$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-2 order-lg-2 order-md-2 order-2';				
			}
			if ($munk_archive_ed == 'no-sidebar') {
				$classes = 'no-sidebar';
				$munk_side_order = 'd-none';				
				$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
			}
			
			return array($classes, $munk_side_order, $munk_content_order);
		}											
		elseif ( is_archive() ) {					
			if( is_category() || is_tag() || is_author() || is_date() ){ 				
				$munk_archive_ed = get_theme_mod('munk_layout_blog_archive_ed', 'right-sidebar');				
				if ($munk_archive_ed == 'right-sidebar') {
					$classes = 'right-sidebar';
					$munk_side_order = 'order-xl-2 order-lg-2 order-md-2 order-2';				
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-1 order-lg-1 order-md-2 order-2';
				}
				if ($munk_archive_ed == 'left-sidebar') {
					$classes = 'left-sidebar';
					$munk_side_order = 'order-xl-1 order-lg-1 order-md-2 order-2';									
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-2 order-lg-2 order-md-2 order-2';				
				}
				if ($munk_archive_ed == 'no-sidebar') {
					$classes = 'no-sidebar';
					$munk_side_order = 'd-none';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
				}
				return array($classes, $munk_side_order, $munk_content_order);			
			}			
			elseif ( munk_is_woocommerce_activated() && ( is_shop() || is_product_category() || is_product_tag() ) ) {		
				$munk_woo_ed = get_theme_mod('munk_customize_layout_woocommerce_ed', 'right-sidebar');
				if ($munk_woo_ed == 'right-sidebar') {
					$classes = 'right-sidebar';
					$munk_side_order = 'order-xl-2 order-lg-2 order-md-2 order-2';	
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-1 order-lg-1 order-md-2 order-2';
				}
				if ($munk_woo_ed == 'left-sidebar') {
					$classes = 'left-sidebar';
					$munk_side_order = 'order-xl-1 order-lg-1 order-md-2 order-2';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-2 order-lg-2 order-md-2 order-2';				
				}
				if ($munk_woo_ed == 'no-sidebar') {
					$classes = 'no-sidebar';
					$munk_side_order = 'd-none';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
				}
				return array($classes, $munk_side_order, $munk_content_order);
			}
			return array($classes, $munk_side_order, $munk_content_order);			
		}					
		elseif (is_singular('post')) {					
			if ($single_sidebar_ed && $single_sidebar_ed != 'default') {										
				if ($single_sidebar_ed == 'right-sidebar') {
					$classes = 'right-sidebar';
					$munk_side_order = 'order-xl-2 order-lg-2 order-md-2 order-2';	
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-1 order-lg-1 order-md-2 order-2';
				}
				if ($single_sidebar_ed == 'left-sidebar') {
					$classes = 'left-sidebar';
					$munk_side_order = 'order-xl-1 order-lg-1 order-md-2 order-2';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-2 order-lg-2 order-md-2 order-2';				
				}
				if ($single_sidebar_ed == 'no-sidebar') {
					$classes = 'no-sidebar';
					$munk_side_order = 'd-none';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
				}							
				return array($classes, $munk_side_order, $munk_content_order);																				
			}
			else {								
				$munk_post_ed = get_theme_mod('munk_layout_single_post_ed', 'right-sidebar');
				if ($munk_post_ed == 'right-sidebar') {
					$classes = 'right-sidebar';
					$munk_side_order = 'order-xl-2 order-lg-2 order-md-2 order-2';	
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-1 order-lg-1 order-md-2 order-2';
				}
				if ($munk_post_ed == 'left-sidebar') {
					$classes = 'left-sidebar';
					$munk_side_order = 'order-xl-1 order-lg-1 order-md-2 order-2';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-2 order-lg-2 order-md-2 order-2';				
				}
				if ($munk_post_ed == 'no-sidebar') {
					$classes = 'no-sidebar';
					$munk_side_order = 'd-none';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
				}							
					
				return array( $classes, $munk_side_order, $munk_content_order);											
			}												
	        return array($classes, $munk_side_order, $munk_content_order);		
		}
		elseif ( munk_is_woocommerce_activated() && ( is_product() ) ) {								
			if ($single_sidebar_ed && $single_sidebar_ed != 'default') {							
				if ($single_sidebar_ed == 'right-sidebar') {
					$classes = 'right-sidebar';
					$munk_side_order = 'order-xl-2 order-lg-2 order-md-2 order-2';	
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-1 order-lg-1 order-md-2 order-2';
				}
				if ($single_sidebar_ed == 'left-sidebar') {
					$classes = 'left-sidebar';
					$munk_side_order = 'order-xl-1 order-lg-1 order-md-2 order-2';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-2 order-lg-2 order-md-2 order-2';				
				}
				if ($single_sidebar_ed == 'no-sidebar') {
					$classes = 'no-sidebar';
					$munk_side_order = 'd-none';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
				}							
				return array($classes, $munk_side_order, $munk_content_order);																				
			}
			else {								
				$munk_woo_single_ed = get_theme_mod('munk_customize_layout_wc_product_ed', 'right-sidebar');
				if ($munk_woo_single_ed == 'right-sidebar') {
					$classes = 'right-sidebar';
					$munk_side_order = 'order-xl-2 order-lg-2 order-md-2 order-2';	
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-1 order-lg-1 order-md-2 order-2';
				}
				if ($munk_woo_single_ed == 'left-sidebar') {
					$classes = 'left-sidebar';
					$munk_side_order = 'order-xl-1 order-lg-1 order-md-2 order-2';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-2 order-lg-2 order-md-2 order-2';				
				}
				if ($munk_woo_single_ed == 'no-sidebar') {
					$classes = 'no-sidebar';
					$munk_side_order = 'd-none';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
				}							
					
				return array( $classes, $munk_side_order, $munk_content_order);											
			}						
		}											
		elseif (is_page() ) {		
			if ($single_sidebar_ed && $single_sidebar_ed != 'default') {							
				if ($single_sidebar_ed == 'right-sidebar') {
					$classes = 'right-sidebar';
					$munk_side_order = 'order-xl-2 order-lg-2 order-md-2 order-2';	
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-1 order-lg-1 order-md-2 order-2';
				}
				if ($single_sidebar_ed == 'left-sidebar') {
					$classes = 'left-sidebar';
					$munk_side_order = 'order-xl-1 order-lg-1 order-md-2 order-2';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-2 order-lg-2 order-md-2 order-2';				
				}
				if ($single_sidebar_ed == 'no-sidebar') {
					$classes = 'no-sidebar';
					$munk_side_order = 'd-none';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
				}							
				return array($classes, $munk_side_order, $munk_content_order);																				
			}
			else {								
				$munk_page_ed = get_theme_mod('munk_customize_layout_single_page_ed', 'right-sidebar');
				if ($munk_page_ed == 'right-sidebar') {
					$classes = 'right-sidebar';
					$munk_side_order = 'order-xl-2 order-lg-2 order-md-2 order-2';	
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-1 order-lg-1 order-md-2 order-2';
				}
				if ($munk_page_ed == 'left-sidebar') {
					$classes = 'left-sidebar';
					$munk_side_order = 'order-xl-1 order-lg-1 order-md-2 order-2';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-2 order-lg-2 order-md-2 order-2';				
				}
				if ($munk_page_ed == 'no-sidebar') {
					$classes = 'no-sidebar';
					$munk_side_order = 'd-none';
					$munk_content_order = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
				}												
				return array( $classes, $munk_side_order, $munk_content_order);											
			}			
		}							
        return array($classes, $munk_side_order, $munk_content_order);
}
endif;
/*
* Adds a class to <body> based on the page layout selected
* @since 1.0.0
*/
if ( ! function_exists( 'munk_body_classes' ) ) :
	function munk_body_classes($classes) {	
				
		$class_var = munk_sidebar_manager();
		$classes[] = $class_var[0];		
		return $classes;
	}
endif;
add_filter('body_class', 'munk_body_classes');	
	
/* Sidebar classes
* Adds a class to #secondary sidebar based on the page layout selected
* @since 1.0.0
*/
if ( ! function_exists( 'munk_sidebar_position' ) ) :
	function munk_sidebar_position() {			
			
		$class_var = munk_sidebar_manager();
		$munk_side_order = $class_var[1];		
		return esc_attr($munk_side_order);
		
	}
endif;
/* $primary classes
* Adds a class to #primary based on the page layout selected
* @since 1.0.0
*/
if ( ! function_exists( 'munk_primary_order' ) ) :
	function munk_primary_order() {			
			
		$class_var = munk_sidebar_manager();
		$munk_content_order = $class_var[2];		
		return esc_attr($munk_content_order);
		
	}
endif;
/**
 * Display Sidebars in Theme
 */
if ( ! function_exists( 'munk_get_sidebar' ) ) {
	/**
	 * Get Sidebar
	 *
	 */
	function munk_get_sidebar( $sidebar_id ) {
		if ( is_active_sidebar( $sidebar_id ) ) {
			dynamic_sidebar( $sidebar_id );
		} elseif ( current_user_can( 'edit_theme_options' ) ) {
			?>
			<div class="widget mt-no-widget">
				<p class='empty-widget-text'>
					<a href='<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>'>
						<?php esc_html_e( 'Add Widget', 'munk' ); ?>
					</a>
				</p>
			</div>
			<?php
		}
	}
}