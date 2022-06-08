<?php

/**
 * Plugin Name: admin-bar
 * Description: Handle the contact form.
 */

// Remove the admin bar from the front end
add_filter('show_admin_bar', '__return_false');
