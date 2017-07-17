<?php
/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function sidebar_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function sidebar_add_meta_box() {
	add_meta_box(
		'sidebar-sidebar',
		__( 'Sidebar', 'efects' ),
		'sidebar_html',
		'post',
		'side',
		'hight',
    null
	);
	add_meta_box(
		'sidebar-sidebar',
		__( 'Sidebar', 'sidebar' ),
		'sidebar_html',
		'page',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'sidebar_add_meta_box' );

function sidebar_html( $post) {
	wp_nonce_field( '_sidebar_nonce', 'sidebar_nonce' ); ?>

	<p>Aktivera sidebar for this page</p>

	<p>

		<input type="checkbox" name="sidebar_active_sidebar" id="sidebar_active_sidebar" value="active-sidebar" <?php echo ( sidebar_get_meta( 'sidebar_active_sidebar' ) === 'active-sidebar' ) ? 'checked' : ''; ?>>
		<label for="sidebar_active_sidebar"><?php _e( 'Active sidebar', 'sidebar' ); ?></label>	</p><?php
}

function sidebar_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['sidebar_nonce'] ) || ! wp_verify_nonce( $_POST['sidebar_nonce'], '_sidebar_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['sidebar_active_sidebar'] ) )
		update_post_meta( $post_id, 'sidebar_active_sidebar', esc_attr( $_POST['sidebar_active_sidebar'] ) );
	else
		update_post_meta( $post_id, 'sidebar_active_sidebar', null );
}
add_action( 'save_post', 'sidebar_save' );

/*
	Usage: sidebar_get_meta( 'sidebar_active_sidebar' )
*/
