<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package munk
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('entry-card'); ?> itemscope itemtype="https://schema.org/Blog">
	<?php 
        /**
         * @hooked munk_entry_card_header_markup   
         * @hooked munk_entry_meta_markup       			
         * @hooked munk_entry_card_featured_image_markup 
         * @hooked munk_entry_content_markup      
        */
        do_action( 'munk_single_post_entry_card' );    
    ?>
</article><!-- #post-<?php the_ID(); ?> -->

