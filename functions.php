<?php
function my_custom_theme_scripts()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

function plp_register_strings() {
    pll_register_string("nav", "Home");
    pll_register_string("nav", "About");
    pll_register_string("nav", "Contact");
}
add_action("init", "plp_register_strings");