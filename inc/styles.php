<?php
function omartuffaha_enqueue_styles()
{
    wp_enqueue_style('omartuffaha_main_css', get_stylesheet_directory_uri() . '/assets/dest/css/main.css');
}
add_action('wp_enqueue_scripts', 'omartuffaha_enqueue_styles');
