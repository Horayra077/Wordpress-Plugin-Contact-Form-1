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
        'Contact Form 1',             // page title
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
    <h1> <?php esc_html_e('Welcome to my custom admin page.', 'my-plugin-textdomain'); ?> </h1>
    <form method="POST" action="options.php">
        <?php
        settings_fields('wp_contact');
        do_settings_sections('wp_contact');
        submit_button();
        ?>
    </form>
<?php }


// function option_submenu_page_callback()
// {
//     include(WP_CONTACT_DIR . '/templates/settings-page.php');
// }

add_action('admin_init', 'my_settings_init');

function my_settings_init()
{

    add_settings_section(
        'sample_page_setting_section',
        __('Custom settings', 'my-textdomain'),
        'my_setting_section_callback_function',
        'wp_contact'
    );

    add_settings_field(
        'my_setting_field',
        __('My custom setting field', 'my-textdomain'),
        'my_setting_markup',
        'wp_contact',
        'sample_page_setting_section'
    );

    register_setting('wp_contact', 'my_setting_field');
}


function my_setting_section_callback_function()
{
    echo '<p>Intro text for our settings section</p>';
}




function my_setting_markup()
{

?>
    <label for="my-input"><?php _e('My Input'); ?></label>
    <input type="text" id="my_setting_field" name="my_setting_field" value="<?php echo get_option('my_setting_field'); ?>">

<?php
}
