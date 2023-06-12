<?php
function omartuffaha_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
        )
    );
}
add_action('init', 'omartuffaha_menus');
