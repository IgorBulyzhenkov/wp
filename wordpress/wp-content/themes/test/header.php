<!doctype html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo wp_get_document_title(); ?></title>
        <?php wp_head(); ?>
        <?php
            echo file_get_contents(get_template_directory() . '/_assets/images/icons.svg');
        ?>
    </head>
<body <?php body_class(); ?>>

<?php if(is_front_page()) :   ?>
    <div class="header-image" style="background: url(<?php echo get_custom_header()->url; ?>) center no-repeat; height: 50vh; background-size: cover; "></div>
<?php endif; ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <?php if(has_custom_logo()) : ?>
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php the_custom_logo(); ?>
            </a>
        <?php else : ?>
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <?php endif; ?>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <?php wp_nav_menu(array(
                'theme_location'    => 'header_menu',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbarSupportedContent',
                'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0',
                'walker'            => new Test_Walker_Menu,
            )); ?>
    </div>
</nav>

<div class="wrapper">