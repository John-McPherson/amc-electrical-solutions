<?php

function site_assets()
{
    wp_enqueue_script('main_js', get_theme_file_uri('/build/index.js'), [], 1.0, true);
    wp_enqueue_style('main_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'site_assets');
