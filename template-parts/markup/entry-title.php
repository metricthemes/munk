<?php
/**
 * Entry Card Markup
 *
 * @package Munk
 */

// entry card header
if( !function_exists('munk_entry_card_markup_title') ) :
	function munk_entry_card_markup_title() {	
	
		if (is_singular()) {		
			global $post;
			$single_title_ed = get_post_meta( $post->ID, 'munk_settings_disable_title', true );
			if ( $single_title_ed ) {
				return;
			}
		}
					
	
		if ( is_single() || is_page() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}  

	}
endif;