<?php
   /**
    * The template for displaying all single trips
    *
    * @package Wp_Travel_Engine
    * @subpackage Wp_Travel_Engine/includes
    * @since 1.0.0
    */
   
    get_header(); ?>        
    
    <?php munk_content_before(); ?>
	<div id="content" class="site-content">
	<?php munk_content_top(); ?>       
	    <div class="container">
	        <div class="row">				
                <div id="primary" class="content-area <?php echo munk_primary_order(); //phpcs:ignore  ?>">
                    <main id="main" class="site-main">        

						<?php 
						munk_content_while_before();	
						 ?>                        
            
							<?php 
							
							munk_entry_before();

								/**
								 * wp_travel_engine_trip_main_content hook.
								 *
								 * @hooked wp_travel_engine_trip_main_content - 10 (shows trip tabs)
								 */ 
//								do_action( 'wp_travel_engine_trip_main_content' );
                   									   
							
                            munk_entry_after();                            
                            
							munk_comments_before();
							munk_comments_after();							
                            ?> 
                        
                        <?php 						
						munk_content_while_after();          						
						?>                          
               						

                    </main><!-- #main -->
                </div><!-- #primary -->    
                
			 <?php 
			 get_sidebar(); 
			 ?>        
                
			</div> <!-- .row -->   
		</div> <!-- .container -->
		<?php 
		munk_content_bottom(); ?>              
    </div><!-- #content -->
	<?php munk_content_after(); ?>        
    

    
    <?php get_footer();