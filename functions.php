<?php
function software_developer_blog_setup()
{
    add_theme_support('title-tag'); // Enable dynamic title tags
    add_theme_support('post-thumbnails'); // Enable featured images
}

add_action('after_setup_theme', 'software_developer_blog_setup');

function software_developer_blog_assets()
{
    // Enqueue styles
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Protest+Revolution&family=Titillium+Web:wght@400;700&display=swap', [], null);
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Optionally enqueue a JavaScript file
    // wp_enqueue_script('main-script', get_template_directory_uri() . '/script.js', [], null, true);
}

add_action('wp_enqueue_scripts', 'software_developer_blog_assets');
