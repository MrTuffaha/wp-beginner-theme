<?php
function omartuffaha_theme_support(): void
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'omartuffaha_theme_support');
