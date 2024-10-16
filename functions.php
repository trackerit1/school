<?php
// Activar soporte para menús
function kindergarten_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'kindergarten')
    ));

    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'kindergarten_theme_setup');

// Registrar estilos
function kindergarten_enqueue_styles() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'kindergarten_enqueue_styles');
?>
