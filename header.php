<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teste Santins</title>
    <script src="https://kit.fontawesome.com/749c22f311.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
    <?php wp_head(); ?>
</head>

<body>

    <header id="header">


        <div id="login-modal">
            <div class="modal">
                <div class="top-form">
                    <div class="close-modal">
                        &#10006;
                    </div>
                </div>
                <div class="login-form">
                    <h2>Faça login</h2>
                    <form action="#">
                        <input class="form-control" type="text" placeholder="Email">
                        <input class="form-control" type="password" placeholder="Password">
                        <button type="button" class="submit-btn">Login</button>
                    </form>
                </div>
            </div>
        </div>

        <img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo Santins">
        <nav id="nav">
            <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false"><a>Menu</a>
                <span id="hamburger"></span>
            </button>
            <ul id="menu" role="menu">
                <li><a href="#a_company">A empresa</a></li>
                <li><a href="#our_numbers">Nossos fundos</a></li>
                <li><a href="#founds">Conteúdos</a></li>
                <li><a href="#contact">Contato</a></li>
                <div class="menu-btn">
                    <button id="login-show" class="btn_login"><a>Faça login</a></button>
                    <button class="btn_now"><a>invista agora</a></button>
                </div>
            </ul>
        </nav>
    </header>