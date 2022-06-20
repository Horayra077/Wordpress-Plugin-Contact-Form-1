<?php

function wp_contact_setting_page()
{
    add_menu_page(
        'Contact Form 1', //$page_title
        'WPContact',  // $menu_title
        'manage_options', // $capability
        'wp_contact', // $menu_slug
        'wp_contact_setting_page_markup', // $callback
        'dashicons-editor-table', // $icon_url

    );

    add_submenu_page(
        'wp_contact',                 // parent slug
        'Your CPT Title',             // page title
        'All Form',             // sub-menu title
        'manage_options',                 // capability
        'edit.php?post_type=wp_contact' // your menu menu slug
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
