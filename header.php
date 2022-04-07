<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <title>Vinicios Leite</title>
</head>
<body>

<header>

    <div class="header__320px">
        <a href="<?php bloginfo('url');?>">
            <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="" class="logo">
        </a>

        <button class="abremenu" onclick="openMenuHeader()">
            <img src="<?php bloginfo('template_url');?>/img/icons/openmenu.png" alt="" class="buttonabremenu">
        </button>

        <nav class="headermenu hiddenmenu">
            <button class="fechamenu" onclick="openMenuHeader()">
                <img src="<?php bloginfo('template_url');?>/img/icons/close.png" alt="">
            </button>
            
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

            <img src="<?php bloginfo('template_url');?>/img/logo-white.png" alt="">
        </nav>

    </div>

    <script src="<?php bloginfo('template_url');?>/js/headermenu.js"></script>

    <div class="header__1024px">

        <div class="header__1024px__contatos">
            <p class="telefone"><img class="whats" src="<?php bloginfo('template_url');?>/img/icons/whatswhite.png" alt="">(55) 991066092</p>
            <div class="header__1024px__contatos__horarios">

                <p class="horario">Horário de funcionamento:</p>
                <p class="horariodestaque">Segunda à sábado das 9h às 18h</p>

            </div>
        </div>

        <div class="header__1024px__menu">

            <a href="<?php bloginfo('url');?>">
                <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="" class="logo">
            </a>
            
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

        </div>
        
    </div>

</header>

        