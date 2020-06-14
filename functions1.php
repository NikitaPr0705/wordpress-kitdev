<?php
wp_register_style( 'my_style', get_template_directory_uri() . 'style.css', array('my_reset'), '1.47', 'screen');

wp_enqueue_style('my_style');

$default_attr = array(
    'class' => 'card-img-top'
);

add_theme_support('post-thumbnails');

function regNavMenu() {
    register_nav_menus(array(
        'top'    => __('Верхнее меню'),    //Название месторасположения меню в шаблоне
        'bottom' => __('Нижнее меню')      //Название другого месторасположения меню в шаблоне
    ));
}

add_action('init', 'regNavMenu');


/*
создание post type
*/
function loft_init() {
    register_post_type('car',
        array(
            'labels' =>  array(
                'name' => __('Cars'),
                'singular_name' => __('Car')
            ),
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'excerpt'),
            'public' => true,
            'has_archive' => true,
        )
    );

    register_taxonomy(
        'loft_year',
        'car',
        array(
            'label' => ('Year'),
            'rewrite' => array('slug' => 'year'),
            'hierarchical' => true
        )
    );

    register_taxonomy(
        'loft_color',
        'car',
        array(
            'label' => ('Color'),
            'rewrite' => array('slug' => 'color'),
            'hierarchical' => true
        )
    );

    register_taxonomy(
        'loft_type',
        'car',
        array(
            'label' => ('Model'),
            'rewrite' => array('slug' => 'model'),
            'hierarchical' => true
        )
    );

    register_taxonomy(
        'loft_features',
        'car',
        array(
            'label' => ('Features'),
            'rewrite' => array('slug' => 'features')
        )
    );

}
add_action('init', 'loft_init');


function kitdev_init_movie() {
    register_post_type('movie',
        array(
            'labels' =>  array(
                'name' => __('Фильмы'),
                'singular_name' => __('Фильм')
            ),
            'menu_position' => 10,
            'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'excerpt'),
            'public' => true,
            'has_archive' => true,
        )
    );

    register_taxonomy(
        'kitdev_year',
        'movie',
        array(
            'label' => ('Год выхода'),
            'rewrite' => array('slug' => 'год'),
            'hierarchical' => true
        )
    );

    register_taxonomy(
        'kitdev_genre',
        'movie',
        array(
            'label' => ('Жанр фильма'),
            'rewrite' => array('slug' => 'жанр'),
            'hierarchical' => true
        )
    );



    register_taxonomy(
        'kitdev_rating',
        'movie',
        array(
            'label' => ('Рейтинг IMDb'),
            'rewrite' => array('slug' => 'IMDb'),
            'hierarchical' => true
        )
    );



    register_taxonomy(
        'kitdev_year',
        'movie',
        array(
            'label' => ('Год выхода'),
            'rewrite' => array('slug' => 'год'),
            'hierarchical' => true
        )
    );

    register_taxonomy(
        'kitdev_genre',
        'movie',
        array(
            'label' => ('Жанр фильма'),
            'rewrite' => array('slug' => 'жанр'),
            'hierarchical' => true
        )
    );

    register_taxonomy(
        'kitdev_bubget',
        'movie',
        array(
            'label' => ('Бюджет фильма'),
            'rewrite' => array('slug' => 'бюджет'),
            'hierarchical' => true
        )
    );



    register_taxonomy(
        'kitdev_rating',
        'movie',
        array(
            'label' => ('Рейтинг IMDb'),
            'rewrite' => array('slug' => 'IMDb'),
            'hierarchical' => true
        )
    );
}
add_action('init', 'kitdev_init_movie');


function true_register_wp_sidebars() {

    /* В боковой колонке - первый сайдбар */
    register_sidebar(
        array(
            'id' => 'true_side', // уникальный id
            'name' => 'Верхний сайдбар', // название сайдбара
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
            'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
            'after_title' => '</h3>'
        )
    );

    /* В подвале - второй сайдбар */
    register_sidebar(
        array(
            'id' => 'true_foot',
            'name' => 'Футер',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в футер.',
            'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
}

add_action( 'widgets_init', 'true_register_wp_sidebars' );


