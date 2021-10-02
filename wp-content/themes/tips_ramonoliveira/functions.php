<?php

function load_scripts(){
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');