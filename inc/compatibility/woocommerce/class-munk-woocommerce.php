<?php
/**
 * WooCommerce Compatibility File.
 *
 * @link https://woocommerce.com/
 *
 * @package Munk
 */
/**
 * Munk WooCommerce Compatibility
 */
if ( ! class_exists( 'Munk_Woocommerce' ) ) :

	/**
	 * Munk WooCommerce Compatibility
	 *
	 * @since 1.0.0
	 */
	class Munk_Woocommerce {

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
		
			get_template_part('inc/compatibility/woocommerce/woocommerce', 'functions');
			get_template_part('inc/compatibility/woocommerce/customizer/woocommerce-customizer', 'shop');
			get_template_part('inc/compatibility/woocommerce/customizer/woocommerce-customizer', 'product');
			get_template_part('inc/compatibility/woocommerce/customizer/woocommerce', 'typography');
			get_template_part('inc/compatibility/woocommerce/customizer/woocommerce', 'colors');
																															
			add_filter( 'munk_get_sidebar', array( $this, 'munk_woocommerce_sidebar' ) );
			add_action( 'after_setup_theme',  array( $this, 'munk_woocommerce_setup' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'munk_woocommerce_scripts' ) );			
			add_action( 'widgets_init', array( $this, 'munk_wc_widgets_init' ));						
			add_action('woocommerce_shop_loop_item_title', array( $this, 'munk_product_cat_ed' ), 5);															
			add_action( 'woocommerce_before_add_to_cart_quantity', array( $this, 'munk_display_quantity_plus'));				
			add_action( 'woocommerce_after_add_to_cart_quantity', array( $this, 'munk_display_quantity_minus'));				

			// Move Product Meta Below Tab
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
			add_action( 'woocommerce_after_single_product', 'woocommerce_template_single_meta', 10 );															
			
			$munk_wc_tab_ed = get_theme_mod('munk_wc_product_tab_layout', 'horizontal');
			if ( $munk_wc_tab_ed == 'none' ) {
				remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);													
			}
			
			/**
			 * Moved add to cart buttons below image thumbnail.
			 * @ Archives Only
			 */
			remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
			add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10);																			
			
							
		}
		
		/**
		 * WooCommerce setup function.
		 *
		 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
		 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
		 *
		 */
		function munk_woocommerce_setup() {
		
			add_theme_support( 'woocommerce' );
			
			if (get_theme_mod('munk_wc_product_gallery_zoom', true) == true) {
				add_theme_support( 'wc-product-gallery-zoom' );
			}
			if (get_theme_mod('munk_wc_product_gallery_lightbox', true) == true) {					
				add_theme_support( 'wc-product-gallery-lightbox' );
			}
			if (get_theme_mod('munk_wc_product_gallery_slider', true) == true) {					
				add_theme_support( 'wc-product-gallery-slider' );
			}
		
		}
						
		
		/**
		 * WooCommerce scripts and styles.
		 *
		 */
		function munk_woocommerce_scripts() {				
			wp_enqueue_style( 'munk-woocommerce-style', get_template_directory_uri() . '/inc/compatibility/woocommerce/assets/woocommerce.css', '', MUNK_THEME_VERSION );				
			wp_enqueue_script( 'munk-woocommerce-js', get_template_directory_uri() . '/inc/compatibility/woocommerce/assets/woocommerce.js', array('jquery'), MUNK_THEME_VERSION, true );
		}		

		/**
		 * WooCommerce widget area
		 *
		 */		
		function munk_wc_widgets_init() {						
				register_sidebar( array(
					'name'          => esc_html__( 'Woocommerce Main Sidebar', 'munk' ),
					'id'            => 'munk-sidebar-shop',
					'description'   => esc_html__( 'Add woocommerce widgets here.', 'munk' ),
					'before_widget' => '<section id= "%1$s" class="widget %2$s">',
					'after_widget'  => '</section>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				) );				
		}
						
		/**
		 * Add and/or Remove Categories from shop archive page.
		 *
		 * @hooked woocommerce_after_shop_loop_item - 9
		 *
		 * @since 1.0.0
		 */
		function munk_product_cat_ed() {
		 ?>
				<div class="mt-woo-product-category">
					<?php
					global $product;
					$product_categories = function_exists( 'wc_get_product_category_list' ) ? wc_get_product_category_list( get_the_ID(), ';', '', '' ) : $product->get_categories( ';', '', '' );
	
					$product_categories = htmlspecialchars_decode( strip_tags( $product_categories ) );
					if ( $product_categories ) {
						list( $parent_cat ) = explode( ';', $product_categories );
						echo '<p>';
							echo esc_html( $parent_cat );
						echo '</p>';
					}
	
					?>
				</div> 
				<?php
		}
										 
		/**
		 * Change Woocommerce Single Product Quantity layout
		 *
		 */						 
		function munk_display_quantity_plus() {
			echo '<div class="mt-qty-wrap">';					
			echo '<button type="button" class="plus" >' .esc_html__('+', 'munk'). '</button>';					
		}
		 
		 
		function munk_display_quantity_minus() {
			echo '<button type="button" class="minus" >' .esc_html__('-', 'munk'). '</button>';
			echo '</div>';
		}			

		/**
		 * Display Woocommerce specific sidebar area
		 *
		 * @param $sidebar_ed.				 
		 *
		 */
		function munk_woocommerce_sidebar( $sidebar ) {

			if ( is_shop() || is_product_taxonomy() || is_checkout() || is_cart() || is_account_page() ) {
				$sidebar = 'munk-sidebar-shop';
			} elseif ( is_product() ) {
				$sidebar = 'munk-sidebar-shop';
			}

			return $sidebar;
		}			

	}

endif;

if(munk_is_woocommerce_activated()){
	Munk_Woocommerce::get_instance();
}