<?php

    add_theme_support( 'post-thumbnails' ); 

    // Menu list
    function register_my_menu() {
        register_nav_menu('header-menu',__( 'Header Menu' ));
      }
      add_action( 'init', 'register_my_menu' );



    // adicionando Custom Post Type Depoimentos
    function depoimentos_setup_post_type() {
        $args = array(
            'public'    => true,
            'label'     => __( 'Depoimentos', 'textdomain' ),
            'menu_icon' => 'dashicons-format-chat',
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
        );
        register_post_type( 'Depoimentos', $args );
    }
    add_action( 'init', 'depoimentos_setup_post_type' );


    // adicionando Custom Post Type Imóveis
    function imoveis_setup_post_type() {
        $args = array(
            'public'    => true,
            'label'     => __( 'Imóveis', 'textdomain' ),
            'menu_icon' => 'dashicons-admin-home',
            'supports' => array( 'title', 'editor', 'category', 'tags', 'thumbnail'),
            'with_front' => true,
            'taxonomies'  => array( 'category', 'post_tag' ),
        );
        register_post_type( 'imoveis', $args );
    }
    add_action( 'init', 'imoveis_setup_post_type' );

    

?>