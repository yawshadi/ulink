<?php
// admin top level menu

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// add top-level administrative menu
function ulink_add_toplevel_menu() {
	
	add_menu_page(
		'ulink Settings',
		'ulink',
		'manage_options',
		'ulink',
		'ulink_display_settings_page',
		'dashicons-admin-generic',
		null
	);
	
}
add_action( 'admin_menu', 'ulink_add_toplevel_menu' );
