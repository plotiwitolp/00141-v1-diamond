<?php
add_action('wp_enqueue_scripts', function () {
    $ver = 1;
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/libs/slick/slick.css', [], $ver);
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', [], $ver);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', [], $ver);

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', [], $ver, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/libs/slick/slick.min.js', [], $ver, true);
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', [], $ver, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', [], $ver, true);
});


add_action('after_setup_theme', 'diamond_register_nav_menu');
function diamond_register_nav_menu()
{
    register_nav_menu('primary', 'Главное меню');
}


// start theme support 

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('post-tags');
});
// end theme support 


// start top slider
function create_topslider_post_type()
{
    register_post_type(
        'topslider',
        array(
            'public' => true,
            'publicly_queryable'  => false,
            'has_archive' => true,
            'menu_icon' => 'dashicons-slides',
            'labels' => array(
                'name' => __('Главный слайдер'),
                'singular_name' => __('Слайд'),
                'add_new' => __('Добавить новый слайд'),
                'add_new_item' => __('Добавить новый слайд'),
                'edit_item' =>  __('Редактировать слайд'),
                'update_item' =>  __('Слайд обновлен'),
                'not_found' =>  __('Слайдов по заданным критериям не найдено'),
                'search_items' => __('Искать слайд'),
            ),
            'supports' => array('title', 'editor'),
            'rewrite' => array('slug' => 'topslider'),
            'menu_position'      => 1,
        )
    );
}
add_action('init', 'create_topslider_post_type');
// end top slider

// start services
function create_services_post_type()
{
    register_post_type(
        'services',
        array(
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-category',
            'labels' => array(
                'name' => __('Наши услуги'),
                'singular_name' => __('Услуга'),
                'add_new' => __('Добавить новую услугу'),
                'add_new_item' => __('Добавить новую услугу'),
                'edit_item' =>  __('Редактировать услугу'),
                'update_item' =>  __('Услуга обновлена'),
                'not_found' =>  __('Услуг по заданным критериям не найдено'),
                'search_items' => __('Искать услугу'),
            ),
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'services'),
            'menu_position' => 2,
        )
    );
}
add_action('init', 'create_services_post_type');
// end services

// start portfolio
function create_portfolio_post_type()
{
    register_post_type(
        'portfolio',
        array(
            'public' => true,
            'has_archive' => true,
            'publicly_queryable'  => false,
            'menu_icon' => 'dashicons-portfolio',
            'labels' => array(
                'name' => __('Портфолио'),
                'singular_name' => __('Портфолио'),
                'add_new' => __('Добавить новое портфолио'),
                'add_new_item' => __('Добавить новое портфолио'),
                'edit_item' =>  __('Редактировать портфолио'),
                'update_item' =>  __('Портфолио обновлено'),
                'not_found' =>  __('Портфолио по заданным критериям не найдено'),
                'search_items' => __('Искать портфолио'),
            ),
            'supports' => array('title', 'editor'),
            'rewrite' => array('slug' => 'portfolio'),
            'menu_position' => 3,
        )
    );
}
add_action('init', 'create_portfolio_post_type');
// end portfolio

// start images
function display_images_with_alt($content)
{
    $pattern = '/<img.*?(alt=["\'](.*?)["\'].*?|.*?)>/i';
    preg_match_all($pattern, $content, $matches);
    if (!empty($matches[0])) {
        $output = '<div class="image-container">';
        foreach ($matches[0] as $image) {
            $output .= $image;
        }
        $output .= '</div>';
        return $output;
    }
    return $content;
}
function custom_image_sizes()
{
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(0, 0);
}
add_action('after_setup_theme', 'custom_image_sizes');
// end images

// start images for o kompanii
function display_images_and_alt($content)
{
    $pattern = '/<img.*?(alt=["\'](.*?)["\'].*?|.*?)>/i';
    preg_match_all($pattern, $content, $matches);
    if (!empty($matches[0])) {
        $output = '';
        foreach ($matches[0] as $image) {
            preg_match('/<img.*?src=["\'](.*?)["\'].*?>/i', $image, $src_match);
            preg_match('/<img.*?alt=["\'](.*?)["\'].*?>/i', $image, $alt_match);

            $image_src = isset($src_match[1]) ? $src_match[1] : '';
            $image_alt = isset($alt_match[1]) ? $alt_match[1] : '';

            $output .= '<div class="about-top-slider__item"><div class=about-top-slider__item-img"><img src="' . $image_src . '" alt="' . $image_alt . '"></div>';
            $output .= '<div class="about-top-slider__item-title">' . $image_alt . '</div></div>';
        }
        return $output;
    }
    return $content;
}
// end images for o kompanii

// start remove excess from the admin panel
function remove_console_menu()
{
    remove_menu_page('index.php');
}
add_action('admin_menu', 'remove_console_menu');

function remove_posts_menu()
{
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');

function remove_comments_menu()
{
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_comments_menu');

// end remove excess from the admin panel

// start faq
function create_faq_post_type()
{
    register_post_type(
        'faq',
        array(
            'public' => true,
            'has_archive' => true,
            'publicly_queryable'  => false,
            'menu_icon' => 'dashicons-feedback',
            'labels' => array(
                'name' => __('Ответы на вопросы'),
                'singular_name' => __('Ответ'),
                'add_new' => __('Добавить новый ответ'),
                'add_new_item' => __('Добавить новый ответ'),
                'edit_item' =>  __('Редактировать ответ'),
                'update_item' =>  __('Ответ обновлен'),
                'not_found' =>  __('Ответ по заданным критериям не найдено'),
                'search_items' => __('Искать ответ'),
            ),
            'supports' => array('title', 'editor'),
            'rewrite' => array('slug' => 'faq'),
            'menu_position' => 4,
        )
    );
}
add_action('init', 'create_faq_post_type');
// end faq

// start clients
function create_clients_post_type()
{
    register_post_type(
        'clients',
        array(
            'public' => true,
            'has_archive' => true,
            'publicly_queryable'  => false,
            'menu_icon' => 'dashicons-businessperson',
            'labels' => array(
                'name' => __('Наши клиенты'),
                'singular_name' => __('Клиент'),
                'add_new' => __('Добавить нового клиента'),
                'add_new_item' => __('Добавить нового клиента'),
                'edit_item' =>  __('Редактировать клиента'),
                'update_item' =>  __('Клиент обновлен'),
                'not_found' =>  __('Клиент по заданным критериям не найден'),
                'search_items' => __('Искать клиента'),
            ),
            'supports' => array('title', 'editor'),
            'rewrite' => array('slug' => 'clients'),
            'menu_position' => 5,
        )
    );
}
add_action('init', 'create_clients_post_type');
// end clients


// start pages
function move_pages_menu_position()
{
    global $menu;
    $pages_menu_index = 0;
    foreach ($menu as $index => $menu_item) {
        if ($menu_item[2] === 'edit.php?post_type=page') {
            $pages_menu_index = $index;
            break;
        }
    }
    if ($pages_menu_index !== 0) {
        $page_menu = $menu[$pages_menu_index];
        unset($menu[$pages_menu_index]);
        array_splice($menu, 1, 0, array($page_menu));
    }
}
add_action('admin_menu', 'move_pages_menu_position');
// end pages

// start reviews
function create_reviews_post_type()
{
    register_post_type(
        'reviews',
        array(
            'public' => true,
            'has_archive' => true,
            'publicly_queryable'  => false,
            'menu_icon' => 'dashicons-admin-comments',
            'labels' => array(
                'name' => __('Отзывы'),
                'singular_name' => __('Отзыв'),
                'add_new' => __('Добавить новый отзыв'),
                'add_new_item' => __('Добавить новый отзыв'),
                'edit_item' =>  __('Редактировать отзыв'),
                'update_item' =>  __('Отзыв обновлен'),
                'not_found' =>  __('Отзыв по заданным критериям не найден'),
                'search_items' => __('Искать отзыв'),
            ),
            'supports' => array('title', 'editor'),
            'rewrite' => array('slug' => 'reviews'),
            'menu_position' => 5,
        )
    );
}
add_action('init', 'create_reviews_post_type');
// end reviews