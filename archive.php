<?php
/**
 * The template file for displaying archive
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
    <?php munk_content_before(); ?>
	<div id="content" class="site-content">
	<?php munk_content_top(); ?>        
	    <div class="container">
	        <div class="row">
            
                <div id="primary" class="content-area <?php echo munk_primary_order(); //phpcs:ignore ?>">
                    <main id="main" class="site-main">        

                        
					  <?php 					 
					  if( have_posts() ) : ?>
                        <div class="archive-title">
                        <?php
							the_archive_title('<h2>', '</h2>');
							the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                        </div>                        
                      <?php
                         /* Start the Loop */
						 munk_content_while_before();						 
                        
						 while ( have_posts() ) : the_post();

							 munk_entry_before();
	
								 get_template_part( 'template-parts/content' );
							 
							 munk_entry_after();						 

                         endwhile;
						 
						 munk_content_while_after();       						 
                         
                        echo "<div class='clearfix'></div>";			 
                         
						do_action ('munk_pagination');
                         
                        else :
                        get_template_part( 'template-parts/content', 'none' );
                        endif; 
                    
                    ?>                                                                 		
               						

                    </main><!-- #main -->
                </div><!-- #primary -->    
                
			 <?php get_sidebar(); ?>    
                
			</div> <!-- .row -->   
		</div> <!-- .container -->
		<?php munk_content_bottom(); ?>              
    </div><!-- #content -->
	<?php munk_content_after(); ?>    

<?php  get_footer(); ?>