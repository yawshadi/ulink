<?php
/*
Plugin Name: ulink
Description: Use custom made urls as easy as include them in an array! It shouldn't be hard to make custom urls! Activate the plugin, don't forget to turn on permalinks and then go to your-blog-url.com/hello_world
Plugin URI:  https://mazernet.com/
Author:      shadrach Amponsah
Version:     1.0
License:     GPLv2 or later

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/


// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

add_filter('generate_rewrite_rules', 'ulink_flush_rules');
add_action('template_redirect', 'ulink_redirect');


// if admin area
if ( is_admin() ) {

	// include dependencies
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-settings.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-settings-register.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-settings-callback.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-settings-validate.php';

}

// default plugin options
function ulink_options_default() {

	return array(
		'custom_url'     => 'ulink',
	);

}

function ulink_custom_url() {
	
	$options = get_option( 'ulink_options', ulink_options_default() );
	
	if ( isset( $options['custom_url'] ) && ! empty( $options['custom_url'] ) ) {
		
		$url =  $options['custom_url'] ;
		
	}
	
	return $url;
	
}



function ulink_flush_rules() {    
  // Dont do anything in admin!
  if (is_admin()) return;
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}       

function ulink_redirect() {
  global $wp;
 
    $ulink_urls = array(
      "".ulink_custom_url()."" => plugin_dir_path(__FILE__) . "/ulink_url.php",
    );
  
  
  // Check for matches in the array
  if (isset($ulink_urls[$wp->request])) {  
    $file = $ulink_urls[$wp->request];
    
    // Check if the file exists for real...
    if (is_file($file)) {
      // Set HTTP response
      header('HTTP/1.1 200 OK');
      // Include the file
      require $file;
      exit;
    }
  }
}