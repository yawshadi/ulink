<?php
/*
author: shadrach 
description: admin settings page 
 */
// admin - settings page
class AdminSettings extends Init
{

// display the plugin settings page
    public static function ulink_display_settings_page()
    {

        // check if user is allowed access
        if (!current_user_can('manage_options')) {
            return;
        }

        ?>

	<div class="wrap">
		<h1><?php echo esc_html(get_admin_page_title()); ?></h1>
		<form action="options.php" method="post">

			<?php

        // output security fields
        settings_fields('ulink_options');

        // output setting sections
        do_settings_sections('ulink');

        // submit button
        submit_button();

        ?>

		</form>
	</div>

	<?php

    }
}