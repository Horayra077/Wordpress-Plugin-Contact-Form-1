<?php

function contact_form_add_options()
{
    add_option('contact_form_option', 'My Plugin Options');

    add_settings_field(
        'contact_form_name',
        _('Name', 'contact_form_option'),
        'contact_form_setting_custom_callback',
        'contact_form_option',
        'contact_form_option'
    );

    register_setting(
        'contact_form_option',
        'contact_form_option'
    );
}

add_option('admin_init', 'contact_form_add_options');


function contact_form_setting_custom_callback()
{
    $options = get_option('contact_form_option');

    $custom_text = '';
    if (isset($options['custom_text'])) {
        $custom_text = esc_html($options['custom_text']);
    }

    echo '<input type="text" id="wpplugin_customtext" name="contact_form_option[custom_text]" value="' . $custom_text . '" />';
}
