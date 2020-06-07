<?php
/* 
author : shadrach
description : creating admin top-level menu
*/
// admin top level menu
class AdminMenu extends Init
{

// add top-level administrative menu
    public static function ulink_add_toplevel_menu()
    {

        add_menu_page(
            'ulink Settings',
            'ulink',
            'manage_options',
            'ulink',
            array('AdminSettings','ulink_display_settings_page'),
            'dashicons-admin-generic',
            null
        );

    }
}
add_action('admin_menu', array('AdminMenu', 'ulink_add_toplevel_menu'));
