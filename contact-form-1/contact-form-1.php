<?php

/**
 * Plugin Name:       Contact Form 1
 * Plugin URI:        https://github.com/Horayra077/Wordpress-Plugin-Contact-Form-1
 * Description:       WordPress contact form plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Horayra
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

define('WP_CONTACT_URL', plugin_dir_url(__FILE__));
define('WP_CONTACT_ASSETS', WP_CONTACT_URL . 'assets');
define('WP_CONTACT_DIR', __DIR__);

// Include post type
include(WP_CONTACT_DIR . '/includes/post-types.php');

// Include setting page
include(WP_CONTACT_DIR . '/includes/setting-page.php');

// Shortcodes
include(WP_CONTACT_DIR . '/includes/shortcodes.php');

// Include plugin assets
include(plugin_dir_path(__FILE__) . 'includes/plugin-assets.php');

// Include dynamic-script
include(WP_CONTACT_DIR . '/includes/dynamic-script.php');
