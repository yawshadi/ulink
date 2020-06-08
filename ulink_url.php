<?php

$data = UlinkUrl::load_request(); //Retrieving the data from the class

$plugin_dir_path = plugin_dir_url(dirname(__FILE__)) . '/ulink/';

require_once plugin_dir_path(__FILE__) . 'includes/html.php';  // including the Html page
