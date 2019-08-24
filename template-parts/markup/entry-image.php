<?php
/**
 * Entry Featured Image Markup
 *
 * @package Munk
 */

// entry card featured image
if( !function_exists('munk_entry_card_markup_image') ) :
	function munk_entry_card_markup_image() {			
?>
        <div class="img-holder">
        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
            <?php the_post_thumbnail('munk-wide', array('class' => 'img-fluid featured-image')); ?>
        </a>                                
        </div>    	
        
<?php
}
endif;