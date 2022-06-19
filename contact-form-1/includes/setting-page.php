<?php

function wp_contact_setting_page()
{
    add_menu_page(
        'Contact Form 1',
        'WPContact',
        'manage_options',
        'wp_contact',
        'wp_contact_setting_page_markup',
        'dashicons-editor-table',
        100
    );
}

add_action('admin_menu', 'wp_contact_setting_page');

function wp_contact_setting_page_markup()
{
    if (!current_user_can('manage_options')) {
        return;
    }
?>
    <div class="wrap">
        <h1><?php esc_html_e(get_admin_page_title()); ?></h1>
        <p><?php esc_html_e('Welcome', 'contact-form-1'); ?></p>
    </div>
<?php }
