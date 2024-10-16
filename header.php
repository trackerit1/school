<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <nav>
        <ul>
            <li><a href="<?php echo home_url(); ?>">Inicio</a></li>
            <li><a href="<?php echo site_url('/services'); ?>">Clases</a></li>
            <li><a href="<?php echo site_url('/about'); ?>">Sobre Nosotros</a></li>
            <li><a href="<?php echo site_url('/contact'); ?>">Contacto</a></li>
        </ul>
    </nav>
</header>
