<?php

// Carregamento de Scritps e CSS
function load_scripts(){
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/scripts/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('myscript', get_template_directory_uri() . '/scripts/myscript.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'load_scripts');


function configuracoes(){
    // Registrando menus
    register_nav_menus(
        array(
            'main_menu' => 'Main Menu'
        )
    );

    add_theme_support('custom-header', ['height' => 50, 'width' => 236]);
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'configuracoes', 0);
