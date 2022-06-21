<?php
// Shortcode 
add_shortcode('contact-forms', 'contact_forms_shortcode_callback');

function contact_forms_shortcode_callback()
{ ?>
    <div class="simple-contact-form">
        <h2>Send us an email</h2>
        <p>Please fill the below form</p>

        <form id="simple-contact-form__form">
            <div class="form-group mt-3">
                <input name="name" type="text" placeholder="Name" class="form-control">
            </div>
            <div class="form-group mt-3">
                <input name="email" type="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group mt-3">
                <input name="phone" type="text" placeholder="Phone" class="form-control">
            </div>
            <div class="form-group mt-3">
                <input name="address" type="text" placeholder="Address" class="form-control">
            </div>
            <div class="form-group mt-3">
                <button class="btn btn-lg btn-primary w-100">Submit</button>
            </div>
        </form>
    </div>

<?php }
