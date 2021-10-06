<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Javascript, Python, Desenvolvimento, Web, Wordpress">
    <meta name="description" content="Dicas e notas pessoais">
    <meta name="author" content="Ramon Oliveira - contato@ramonoliveira.dev">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/style.css">
    <link rel="shortcut icon" href="img\fav_icon.png" />

    <script src="https://kit.fontawesome.com/d016db399d.js" crossorigin="anonymous"></script>

    <title>Tips - Ramon Oliveira</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <div id="root">
        <!-- --------- HEADER --------- -->
        <header>
            <div id="logo">
                <div id="logo_image">R</div>
                <div>
                    <p><strong>Ramon Oliveira</strong></p>
                </div>
            </div>
            <div id="search_area">
                <input type="text">
                <button><i class="fas fa-search"></i></button>
            </div>
        </header>
        <nav id="list_tags">
            <?php 
                wp_nav_menu(['theme_location' => 'main_menu']);
            ?>
        </nav>