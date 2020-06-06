<?php // ulink - Register Settings



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



// register plugin settings
function ulink_register_settings() {


	register_setting(
		'ulink_options',
		'ulink_options',
		'ulink_callback_validate_options'
	);

	
	add_settings_section(
		'ulink_section',
		'Customize Url for API',
		'ulink_callback_section',
		'ulink'
	);



	add_settings_field(
		'custom_url',
		'Custom URL',
		'ulink_callback_field_text',
		'ulink',
		'ulink_section',
		[ 'id' => 'custom_url', 'label' => 'Custom URL for the API' ]
	);




}
add_action( 'admin_init', 'ulink_register_settings' );


