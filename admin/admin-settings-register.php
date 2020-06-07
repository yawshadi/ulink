<?php 
/* 
author : shadrach
description : creating admin settings register
*/
class AdminSettingsReg extends Init
{

// register plugin settings
    public static function ulink_register_settings()
    {

        register_setting(
            'ulink_options',
            'ulink_options',
            'ulink_callback_validate_options'
        );

        add_settings_section(
            'ulink_section',
            'Customize Url for API',
            array('AdminSettingsCall','ulink_callback_section'),
            'ulink'
        );

        add_settings_field(
            'custom_url',
            'Custom URL',
            array('AdminSettingsCall','ulink_callback_field_text'),
            'ulink',
            'ulink_section',
            ['id' => 'custom_url', 'label' => 'Custom URL for the API']
        );

    }
}
add_action('admin_init', array('AdminSettingsReg', 'ulink_register_settings'));
