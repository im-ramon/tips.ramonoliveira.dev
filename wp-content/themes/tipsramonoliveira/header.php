<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="keywords" content="Javascript, Python, Desenvolvimento, Web, Wordpress">
    <meta name="description" content="Dicas e notas pessoais">
    <meta name="author" content="Ramon Oliveira - contato@ramonoliveira.dev">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/style.css">
    <link rel="shortcut icon" href="img\fav_icon.png" />

    <script src="https://kit.fontawesome.com/d016db399d.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <div id="root">
        <!-- --------- HEADER --------- -->
        <header>
            <div id="logo">
                <div id="logo_image">
                    <a href="/tips.ramonoliveira.dev/">
                        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                    </a>
                </div>
                <div>
                    <a href="/tips.ramonoliveira.dev/">
                        <strong>Ramon Oliveira</strong>
                    </a>
                </div>
            </div>
            <div id="search_area">
                <?php get_search_form(); ?>
            </div>
        </header>
        <!-- <nav id="list_tags">
            <?php 
                wp_nav_menu(['theme_location' => 'main_menu']);
            ?>
        </nav> -->