<?php
function contact_form_assets()
{

    //CSS
    wp_enqueue_style('bootstrap',  WP_CONTACT_ASSETS . '/css/bootstrap.min.css', false, '5.1.3');
    wp_enqueue_style('control-events-style',  WP_CONTACT_ASSETS . '/css/style.css', false, '5.1.3');

    // Javascripts
    wp_enqueue_script('bootstrap_js',  WP_CONTACT_ASSETS . '/js/bootstrap.min.js', ['jquery'], '5.1.3', true);
    wp_enqueue_script('jquery_js', WP_CONTACT_ASSETS . '/js/jquery-3.6.0.min.js', NULL, '1.0', true);
    wp_enqueue_script('wp_contact-scripts',  WP_CONTACT_ASSETS . '/js/scripts.js', ['jquery'], time(), true);
    // in JavaScript, object properties are accessed as ajax_object.ajax_url, ajax_object.we_value

    wp_localize_script('jquery_js', 'contactData', array(
        'root_url' => get_site_url()
    ));
}

add_action('wp_enqueue_scripts', 'contact_form_assets');
