<?php // ulink - Settings Callbacks



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}



// callback: login section
function ulink_callback_section() {
	
	echo '<p>These settings enable you to a custom Url for your API.</p>';
	
}



// callback: text field
function ulink_callback_field_text( $args ) {
	
	$options = get_option( 'ulink_options', ulink_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$value = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';
	
	echo '<input id="ulink_options_'. $id .'" name="ulink_options['. $id .']" type="text" size="40" value="'. $value .'"><br />';
	echo '<label for="ulink_options_'. $id .'">'. $label .'</label>';
	
}








