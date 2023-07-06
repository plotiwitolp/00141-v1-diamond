<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/libs/slick/slick.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js');
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/libs/slick/slick.min.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
});


add_action('after_setup_theme', 'diamond_register_nav_menu');
function diamond_register_nav_menu()
{
    register_nav_menu('primary', 'Главное меню');
}
