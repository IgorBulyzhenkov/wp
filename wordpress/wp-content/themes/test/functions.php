<?php

require_once __DIR__ . '/Test_Walker_Menu.php';
require_once __DIR__ . '/Test_Walker_Menu_Footer.php';

/*
 * Подключение скрипта
 */
add_action('wp_enqueue_scripts', 'test_script');

function test_script(): void
{
    wp_enqueue_style('test-bootstrap', get_template_directory_uri() . '/_assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('test-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('test-style_form', get_template_directory_uri() . '/style_form.css');
    wp_enqueue_script('test-bootstrap', get_template_directory_uri() . '/_assets/bootstrap/js/bootstrap.min.js', array(), false, true );
    wp_enqueue_script('test-js_form', get_template_directory_uri() . '/_assets/js/form.js', array(), false, true );
}

add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );

function delete_intermediate_image_sizes( $sizes ): array
{
    // размеры которые нужно удалить
    return array_diff( $sizes, [
        'post-thumbnail',
        'medium',
        '1536x1536',
        '2048x2048'
    ] );
}

add_action('after_setup_theme', 'test_setup');

function test_setup(): void
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 50,
        'width'       => 150,
    ));
    add_theme_support('custom-background', array(
        'default-color'  => ''
    ));
    add_theme_support('custom-header', array(
        'default-image' => get_template_directory_uri() . '/_assets/images/default.jpg',
    ));
    register_nav_menus(array(
        'header_menu'   => 'Menu header',
        'footer_menu'   => 'Menu footer',
    ));
}

// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );

function my_navigation_template( $template, $class ): string
{
    return '
        <nav class="navigation" role="navigation">
            <div class="nav-links">%3$s</div>
        </nav>    
	';
}

// выводим пагинацию
the_posts_pagination( array(
    'end_size' => 2,
) );

add_action('widgets_init', 'test_widgets_init');

function test_widgets_init(): void
{
    register_sidebar( array(
        'name'          => 'sidebar_right',
        'id'            => 'sidebar_right',
        'description'   => 'Sidebar right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    ) );
}

// TODO CUSTOMIZER
function test_customize_register($wp_customize): void{
    $wp_customize->add_setting('test_link_color', array(
        'default'           => '#007bbf',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'test_link_color',
        array(
            'label'      => 'Link Color',
            'section'    => 'colors',
            'settings'   => 'test_link_color'
        )
    ));
}

add_action('customize_register', 'test_customize_register');

function test_customize_css(): void {
    echo '<style type="text/css" id="custom-theme-css">
        a { color: ' . get_theme_mod( 'test_link_color' ) . ' } </style>';
}

add_action('wp_head', 'test_customize_css');