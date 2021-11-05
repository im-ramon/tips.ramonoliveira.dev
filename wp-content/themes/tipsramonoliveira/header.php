<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="keywords" content="Javascript, Python, Desenvolvimento, Web, Wordpress">
    <meta name="description" content="Dicas e notas pessoais">
    <meta name="author" content="Ramon Oliveira - contato@ramonoliveira.dev">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="/style.css">
    <link rel="shortcut icon" href="img\fav_icon.png" />

    <script src="https://kit.fontawesome.com/d016db399d.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- --------- HEADER --------- -->
    <header>
        <div id="logo">
            <div id="logo_container">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/svg/logo.svg" alt="r">
                </a>
                
                <a href="/">
                    <span>ramonoliveira.dev</span>
                    <span class="tips">tips</span>
                </a>
            </div>


        </div>

        <div id="search_area">
            <?php get_search_form(); ?>
        </div>

        <div id="personal">
            <a href="https://ramonoliveira.dev/tree" target="_BLANK" title="Contato"><i class="fab fa-whatsapp"></i></a>
            <img class="profilepic" src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.png" alt="Foto do perfil" title="Developer | Ramon Oliveira">
        </div>
    </header>

    <div id="root">
        <!-- <nav id="list_tags">
            <?php
            wp_nav_menu(['theme_location' => 'main_menu']);
            ?>
        </nav> -->