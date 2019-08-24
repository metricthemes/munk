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
                <div id="primary" class="content-area <?php echo munk_primary_order(); //phpcs:ignore  ?>">
                    <main id="main" class="site-main">        

						<?php while ( have_posts() ) : the_post(); //main loop ?>                        
            
							<?php 
                            get_template_part( 'template-parts/content', 'single' );                     
                            
                            do_action('munk_author_bio');
                            
							$ed_comments = get_theme_mod('ed_comments', true);
                            if ( (comments_open() || get_comments_number()) && $ed_comments ) :
	                            comments_template();
                            endif; 
                            ?> 
                        
                        <?php endwhile; // End of the loop. ?>                          
               						

                    </main><!-- #main -->
                </div><!-- #primary -->    
                
			 <?php get_sidebar(); ?>        
                
			</div> <!-- .row -->   
		</div> <!-- .container -->
    </div><!-- #content -->


<?php  get_footer(); ?>