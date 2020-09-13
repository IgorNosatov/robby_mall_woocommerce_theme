<?php

function victorynox_style()
{
    wp_enqueue_style('robby_mall', get_template_directory_uri() . '/assets/css/style.min.css', array(), null);
    wp_enqueue_style('robby_mall-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'victorynox_style');

function victorynox_scripts()
{
    wp_enqueue_script('robby_mall-bundle', get_template_directory_uri() . '/assets/js/main.min.js', array(), true);
}
add_action('wp_enqueue_scripts', 'victorynox_scripts');
