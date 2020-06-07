<?php
/*
Plugin Name: ulink
Description: Create a custom url in wordpress which when visited asscess an API to list users  eg.yourdomain.com/{custom link}
Plugin URI:  https://github.com/yawshadi/ulink/
Author:      shadrach Amponsah
Author URI: https://www.linkedin.com/in/shadrach-amponsah-6180b2a6/
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

require_once plugin_dir_path( __FILE__ ) . 'class.init.php';
require_once plugin_dir_path( __FILE__ ) . 'class.ulink.php';

add_filter('generate_rewrite_rules', array( 'Ulink', 'ulink_flush_rules' ));
add_action('template_redirect', array( 'Ulink', 'ulink_redirect' ));


// if admin area
if ( is_admin() ) {

	// include dependencies
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-settings.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-settings-register.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-settings-callback.php';
}
