<?php
function my_custom_theme_scripts()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . 'style.css');
}

add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');