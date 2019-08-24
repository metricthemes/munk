<?php
/**
 * The main template file for displaying single post.
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
            
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">        

                            <div class="error-404 not-found">
                                <header class="page-header">
                                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'munk' ); ?></h1>
                                </header><!-- .page-header -->
                
                                <div class="page-content">
                                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'munk' ); ?></p>
                                    <?php get_search_form(); ?>
                                </div><!-- .page-content -->
                            </div><!-- .error-404 -->               						

                    </main><!-- #main -->
                </div><!-- #primary -->    
                
                
			</div> <!-- .row -->   
		</div> <!-- .container -->
    </div><!-- #content -->


<?php get_footer(); ?>