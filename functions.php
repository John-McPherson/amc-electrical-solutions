<?php

function site_assets()
{
    wp_enqueue_style(
        'google-font',
        'https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap',
        [],
        null
    );
    wp_enqueue_script('main_js', get_theme_file_uri('/build/index.js'), [], 1.0, true);
    wp_enqueue_style('main_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'site_assets');
