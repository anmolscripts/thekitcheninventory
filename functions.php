<?php
function twentytwentyone_child_enqueue_styles() {
    // Load parent theme styles
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Load child theme styles
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
add_action('wp_enqueue_scripts', 'twentytwentyone_child_enqueue_styles');