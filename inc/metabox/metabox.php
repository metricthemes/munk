<?php 
/**
* Metabox for Page  Layout
*
* Generated by the WordPress Meta Box generator
* at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
*
* @package munk
*/

function munk_settings_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function munk_settings_add_meta_box() {

	$munk_cpt_args = array(
	   'public'   => true,
	);
	$munk_cpt_output = 'names';
	$munk_cpt_operator = 'and';
	$munk_cpt_types = get_post_types( $munk_cpt_args, $munk_cpt_output, $munk_cpt_operator ); 
	
	foreach ( $munk_cpt_types  as $munk_cpt ) {	
		add_meta_box(
			'munk_settings-munk-settings',
			__( 'Munk Settings', 'munk' ),
			'munk_settings_html',
			$munk_cpt,
			'side',
			'high'
		);
	}	
	
	
}
add_action( 'add_meta_boxes', 'munk_settings_add_meta_box' );

function munk_settings_html( $post) {
	wp_nonce_field( '_munk_settings_nonce', 'munk_settings_nonce' ); ?>

		<p>
		<label for="munk_settings_main_sidebar" style="font-weight:bold;"><?php esc_html_e( 'Main Sidebar', 'munk' ); ?></label>
		<select name="munk_settings_main_sidebar" id="munk_settings_main_sidebar" style="width:100%;">
			<option value="default" <?php echo (munk_settings_get_meta( 'munk_settings_main_sidebar' ) === 'default' ) ? 'selected' : '' ?>><?php echo esc_attr('Customizer Settings', 'munk') ?></option>
			<option value="left-sidebar" <?php echo (munk_settings_get_meta( 'munk_settings_main_sidebar' ) === 'left-sidebar' ) ? 'selected' : '' ?>><?php echo esc_attr('Left Sidebar', 'munk') ?></option>
			<option value="right-sidebar" <?php echo (munk_settings_get_meta( 'munk_settings_main_sidebar' ) === 'right-sidebar' ) ? 'selected' : '' ?>><?php echo esc_attr('Right Sidebar', 'munk') ?></option>
			<option value="no-sidebar" <?php echo (munk_settings_get_meta( 'munk_settings_main_sidebar' ) === 'no-sidebar' ) ? 'selected' : '' ?>><?php echo esc_attr('No Sidebar', 'munk') ?></option>
		</select>
		</p>
    	<p>
		<label for="munk_settings_page_container" style="font-weight:bold;"><?php esc_html_e( 'Page Container', 'munk' ); ?></label>
		<select name="munk_settings_page_container" id="munk_settings_page_container" style="width:100%;">
			<option value="default" <?php echo (munk_settings_get_meta( 'munk_settings_page_container' ) === 'default' ) ? 'selected' : '' ?>><?php echo esc_attr('Customizer Settings', 'munk') ?></option>
			<option value="boxed" <?php echo (munk_settings_get_meta( 'munk_settings_page_container' ) === 'boxed' ) ? 'selected' : '' ?>><?php echo esc_attr('Boxed', 'munk') ?></option>
			<option value="fullwidth-contained" <?php echo (munk_settings_get_meta( 'munk_settings_page_container' ) === 'fullwidth-contained' ) ? 'selected' : '' ?>><?php echo esc_attr('Full Width - Contained', 'munk') ?></option>
			<option value="fluid" <?php echo (munk_settings_get_meta( 'munk_settings_page_container' ) === 'fluid' ) ? 'selected' : '' ?>><?php echo esc_attr('Fluid', 'munk') ?></option>
		</select>
		</p>
    	<p>
		<input type="checkbox" name="munk_settings_disable_primary_header" id="munk_settings_disable_primary_header" value="disable-primary-header" <?php echo ( munk_settings_get_meta( 'munk_settings_disable_primary_header' ) === 'disable-primary-header' ) ? 'checked' : ''; ?>>
		<label for="munk_settings_disable_primary_header"><?php esc_html_e( 'Disable Primary Header', 'munk' ); ?></label>
        </p>	
        <p>
		<input type="checkbox" name="munk_settings_disable_title" id="munk_settings_disable_title" value="disable-title" <?php echo ( munk_settings_get_meta( 'munk_settings_disable_title' ) === 'disable-title' ) ? 'checked' : ''; ?>>
		<label for="munk_settings_disable_title"><?php esc_html_e( 'Disable Title', 'munk' ); ?></label>
        </p>	        
        <p>
		<input type="checkbox" name="munk_settings_disable_footer_area" id="munk_settings_disable_footer_area" value="disable-footer-area" <?php echo ( munk_settings_get_meta( 'munk_settings_disable_footer_area' ) === 'disable-footer-area' ) ? 'checked' : ''; ?>>
		<label for="munk_settings_disable_footer_area"><?php esc_html_e( 'Disable Footer Area', 'munk' ); ?></label></p><?php
}

function munk_settings_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['munk_settings_nonce'] ) || ! wp_verify_nonce( $_POST['munk_settings_nonce'], '_munk_settings_nonce' ) ) return; // phpcs:ignore
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;	

	if ( isset( $_POST['munk_settings_main_sidebar'] ) )
		update_post_meta( $post_id, 'munk_settings_main_sidebar', esc_html( $_POST['munk_settings_main_sidebar'] ) ); // phpcs:ignore
	if ( isset( $_POST['munk_settings_page_container'] ) )
		update_post_meta( $post_id, 'munk_settings_page_container', esc_html( $_POST['munk_settings_page_container'] ) ); // phpcs:ignore
	if ( isset( $_POST['munk_settings_disable_primary_header'] ) )
		update_post_meta( $post_id, 'munk_settings_disable_primary_header', esc_html( $_POST['munk_settings_disable_primary_header'] ) ); // phpcs:ignore		
	else
		update_post_meta( $post_id, 'munk_settings_disable_primary_header', null );
	if ( isset( $_POST['munk_settings_disable_title'] ) )
		update_post_meta( $post_id, 'munk_settings_disable_title', esc_html( $_POST['munk_settings_disable_title'] ) ); // phpcs:ignore
	else
		update_post_meta( $post_id, 'munk_settings_disable_title', null );
	if ( isset( $_POST['munk_settings_disable_footer_area'] ) )
		update_post_meta( $post_id, 'munk_settings_disable_footer_area', esc_html( $_POST['munk_settings_disable_footer_area'] ) ); // phpcs:ignore
	else
		update_post_meta( $post_id, 'munk_settings_disable_footer_area', null );
}
add_action( 'save_post', 'munk_settings_save' );