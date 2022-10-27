<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teste Santins</title>
    <script src="https://kit.fontawesome.com/749c22f311.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        
        <img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo Santins">
        <nav id="nav">
            <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
                <span id="hamburger"></span>
            </button>
            <ul id="menu" role="menu">
                <li><a href="#a_company">A empresa</a></li>
                <li><a href="#our_numbers">Nossos fundos</a></li>
                <li><a href="#founds">Conteúdos</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
            <button class="btn_login">Faça login</button>
            <button class="btn_now">invista agora</button>
        </nav>
    </header>