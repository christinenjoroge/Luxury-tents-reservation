<?php

function luxurycamp_enqueue_scripts() {
    // Load the main WordPress style.css (for theme info and styling)
    wp_enqueue_style('luxurycamp-style', get_stylesheet_uri());

    // Load your custom style.css (in theme root, no folder)
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/style.css');

    // Load your main.js (also in theme root)
    wp_enqueue_script('luxurycamp-script', get_template_directory_uri() . '/javascript.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'luxurycamp_enqueue_scripts');
