<?php 
/* 
author : shadrach
description : creating admin callback settings
*/
class AdminSettingsCall extends Init
{

// callback: login section
    public static function ulink_callback_section()
    {

        echo '<p>These settings enable you to a custom Url for your API.</p>';

    }

// callback: text field
    public static function ulink_callback_field_text($args)
    {

        $options = get_option('ulink_options', Ulink::ulink_options_default());

        $id = isset($args['id']) ? $args['id'] : '';
        $label = isset($args['label']) ? $args['label'] : '';

        $value = isset($options[$id]) ? sanitize_text_field($options[$id]) : '';

        echo '<input id="ulink_options_' . $id . '" name="ulink_options[' . $id . ']" type="text" size="40" value="' . $value . '"><br />';
        echo '<label for="ulink_options_' . $id . '">' . $label . '</label>';

    }

}
