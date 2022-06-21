<?php
// Shortcode 



function contact_forms_shortcode_callback()
{
    $content = '';
    $content .= '<div class="simple-contact-form">';
    $content .=   '<h2>Send us an email</h2>';
    $content .= '<p>Please fill the below form</p>';
    $content .= '<form id="simple-contact-form__form">';
    $content .= ' <div class="form-group mt-3">';
    $content .= '<input name="name" type="text" placeholder="Name" class="form-control">';
    $content .= ' </div>';
    $content .= '<div class="form-group mt-3">';
    $content .= '<input name="email" type="email" placeholder="Email" class="form-control">';
    $content .= '</div>';
    $content .= '<div class="form-group mt-3">';
    $content .= '<input name="phone" type="text" placeholder="Phone" class="form-control">';
    $content .= '</div>';
    $content .= '<div class="form-group mt-3">';
    $content .= '<input name="address" type="text" placeholder="Address" class="form-control">';
    $content .= '</div>';
    $content .= '<div class="form-group mt-3">';
    $content .= '<button class="btn btn-lg btn-primary w-100">Submit</button>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</div>';

    return $content;
}



function wp_shortcodes_init()
{
    add_shortcode('wp_contact', 'contact_forms_shortcode_callback');
}

add_action('init', 'wp_shortcodes_init');









/**
 * /**
 * The [wporg] shortcode.
 *
 * Accepts a title and will display a box.
 *
 * @param array  $atts    Shortcode attributes. Default empty.
 * @param string $content Shortcode content. Default null.
 * @param string $tag     Shortcode tag (name). Default empty.
 * @return string Shortcode output.
 */
/*
function wporg_shortcode($atts = [], $content = null, $tag = '')
{
    // normalize attribute keys, lowercase
    $atts = array_change_key_case((array) $atts, CASE_LOWER);

    // override default attributes with user attributes
    $wporg_atts = shortcode_atts(
        array(
            'title' => 'WordPress.org',
        ),
        $atts,
        $tag
    );

    // start box
    $o = '<div class="wporg-box">';

    // title
    $o .= '<h2>' . esc_html__($wporg_atts['title'], 'wporg') . '</h2>';

    // enclosing tags
    if (!is_null($content)) {
        // $content here holds everything in between the opening and the closing tags of your shortcode. eg.g [my-shortcode]content[/my-shortcode].
        // Depending on what your shortcode supports, you will parse and append the content to your output in different ways.
        // In this example, we just secure output by executing the_content filter hook on $content.
        $o .= apply_filters('the_content', $content);
    }

    // end box
    $o .= '</div>';

    // return output
    return $o;
}

/**
 * Central location to create all shortcodes.
 */
/*
function wporg_shortcodes_init()
{
    add_shortcode('wporg', 'wporg_shortcode');
}

add_action('init', 'wporg_shortcodes_init');

*/
