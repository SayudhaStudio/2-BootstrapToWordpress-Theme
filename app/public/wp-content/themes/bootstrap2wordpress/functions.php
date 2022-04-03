<?php

/* Enqueue Scripts and Styles */
function b2w_assets()
{
    // Enqueue CSS Files
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'), array(), 'v5.1.1', 'all');
    wp_enqueue_style('flaticon', get_theme_file_uri('assets/font/flaticon.css'), array(), false, 'all');
    // Main CSS File
    wp_enqueue_style('bootstrap2wordpress', get_stylesheet_uri(), array('bootstrap'), '1.0', 'all');

    // Enqueue JS Files
    wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array(), 'v5.1.1', true);
    wp_enqueue_script('bootstrap2wordpress-js', get_theme_file_uri('assets/js/main-script.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectmenu'), '1.0', true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'b2w_assets');
