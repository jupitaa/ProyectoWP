<?php

function my_theme_setup() {
    // Soporte para el título del sitio
    add_theme_support('title-tag');

    // Soporte para logotipo personalizado
    add_theme_support('custom-logo');

    // Registro del menú de navegación
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
        'footer' => __('Footer Menu', 'mytheme'), // Registro del menú de footer
    ));
}

add_action('after_setup_theme', 'my_theme_setup');

function my_theme_styles() {
    // Enqueue Bootstrap CSS desde un CDN
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all');

    // Enqueue Font Awesome para iconos sociales
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', array(), '5.15.1', 'all');

    // Enqueue el estilo principal del tema
    wp_enqueue_style('theme-main-style', get_stylesheet_uri());

    // Enqueue estilos personalizados compilados desde SASS
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/styles.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'my_theme_styles');

?>