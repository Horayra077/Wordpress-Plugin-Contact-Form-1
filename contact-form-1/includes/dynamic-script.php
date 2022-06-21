<?php

add_action('wp_footer', 'load_dynamic_script');

function load_dynamic_script()
{
?>
    <script>
        var nonce = '<?php echo wp_create_nonce('wp_rest'); ?>';

        (function($) {
            $('#simple-contact-form__form').submit(function(event) {
                event.preventDefault();
                var form = $(this).serialize();


                $.ajax({
                    method: 'post',
                    url: contactData.root_url + '/wp-json/wp_contact/v1/send_email',
                    headers: {
                        'X-WP-Nonce': nonce
                    },
                    data: form
                })
            });

        })(jQuery)
    </script>
<?php }


add_action('rest_api_init', 'register_rest_api');

function register_rest_api()
{
    register_rest_route('wp_contact/v1', 'send_email', array(
        'methods' => 'POST',
        'callback' => 'handle_contact_form'
    ));
}

function handle_contact_form($data)
{
    $headers = $data->get_headers();
    $params = $data->get_params();
    $nonce = $headers['x_wp_nonce'][0];

    if (!wp_verify_nonce($nonce, 'wp_rest')) {
        return new WP_REST_Response('Message not sent', 442);
    }

    $post_id = wp_insert_post([
        'post_type' => 'wp_contact',
        'post_title' => $_POST['name'],
        // 'post_content' => $_POST['message'],
        'meta_input'   => array(
            'post_name' => $_POST['name'],
            'post_email'   => $_POST['email'],
            'post_phone'   => $_POST['phone'],
            'post_address'   => $_POST['address'],
        ),
        'post_status' => 'publish',
    ]);

    if ($post_id) {
        return new WP_REST_Response('Thank you for filling out the form', 200);
    }
}
