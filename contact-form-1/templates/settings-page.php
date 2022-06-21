<div class="wrap">
    <h1><?php esc_html_e(get_admin_page_title()); ?></h1>
    <h2><?php esc_html_e('Plugin Setting Section'); ?></h2>

    <form method="post" action="options.php">
        <?php settings_fields('wpplugin_settings') ?>
        <?php settings_fields('contact_form_option') ?>
        <?php submit_button(); ?>
    </form>

</div>