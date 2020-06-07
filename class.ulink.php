<?php

class Ulink extends Init
{

// default plugin options
    public static function ulink_options_default()
    {

        return array(
            'custom_url' => 'ulink',
        );

    }

    public static function ulink_custom_url()
    {

        $options = get_option('ulink_options', self::ulink_options_default());

        if (isset($options['custom_url']) && !empty($options['custom_url'])) {

            $url = $options['custom_url'];

        }

        return $url;

    }

    public static function ulink_flush_rules()
    {
        // Dont do anything in admin!
        if (is_admin()) {
            return;
        }

        global $wp_rewrite;
        $wp_rewrite->flush_rules();
    }

    public static function ulink_redirect()
    {
        global $wp;

        $ulink_urls = array(
            "" . self::ulink_custom_url() . "" => plugin_dir_path(__FILE__) . "/ulink_url.php",
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

}

