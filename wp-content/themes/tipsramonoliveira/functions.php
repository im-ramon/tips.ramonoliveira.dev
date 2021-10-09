<?php

// Carregamento de Scritps e CSS
function load_scripts(){
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');


function configuracoes(){
    // Registrando menus
    register_nav_menus(
        array(
            'main_menu' => 'Main Menu'
        )
    );

    add_theme_support('custom-header', ['height' => 255, 'width' => 440]);
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'configuracoes', 0);
