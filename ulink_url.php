<?php
/* ulink url class to access the APi and return the results
 */
class UlinkUrl extends Init
{

    public static $url = 'https://jsonplaceholder.typicode.com/users'; // API URL

    public static function fetch()
    {
        $request = wp_remote_get(self::$url, $options = array()); // Fetching using WP remote API

        return $request;
    }

    public static function load_request()
    {
        $request = self::fetch();
        try {
            $data = json_decode($request['body']);
        } catch (Exception $ex) {
            $data = null;
        }
        return $data;
    }
}

$data = UlinkUrl::load_request(); //Retrieving the data from the class

$plugin_dir_path = plugin_dir_url(dirname(__FILE__)) . '/ulink/';

require_once plugin_dir_path(__FILE__) . 'includes/html.php';  // including the Html page
