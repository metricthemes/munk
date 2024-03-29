<?php
/**
 * The main template file for woocommerce pages.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package munk
 */

get_header(); 
?>
    
	<div id="content" class="site-content">
	    <div class="container">
	        <div class="row">
            
                <div id="primary" class="content-area <?php echo munk_primary_order(); //phpcs:ignore ?>">
                    <main id="main" class="site-main">        
                    
							 <?php 
							 $munk_shop_breadcrumbs = get_theme_mod('munk_woocommerce_shop_breadcrumbs', '1');	
								if ( is_shop() && $munk_shop_breadcrumbs == '1' ) {
									woocommerce_breadcrumb();                            
								}  
							 ?>

							<?php woocommerce_content(); ?>               						

                    </main><!-- #main -->
                </div><!-- #primary -->    
                
			 <?php get_sidebar(); ?>        
                
			</div> <!-- .row -->   
		</div> <!-- .container -->
    </div><!-- #content -->


<?php  get_footer(); ?>