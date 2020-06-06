<?php

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

$url = 'https://jsonplaceholder.typicode.com/users';

$request = wp_remote_get($url, $options=array());

 
function load_request($response) {
  try {
    $json = json_decode( $response['body'] );
  } catch ( Exception $ex ) {
    $json = null;
  }
  return $json;
}

 $data = load_request($request);
 $plugin_dir_path = plugin_dir_url( dirname( __FILE__ ) ).'/ulink/';

 require_once plugin_dir_path( __FILE__ ) . 'includes/html.php';

?>
