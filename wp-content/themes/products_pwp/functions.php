<?php
// require get_template_directory() . '/includes/abcd.php';
/* Custom Post Type Start */

function create_posttype()
{
    register_post_type(
        'training_wp_products',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('products'),
                'singular_name' => __('product')
            ),
            'rewrite' => array('slug' => 'products'),
            'public' => true,
            'has_archive' => true,
        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');
/* Custom Post Type End */

function my_first_taxonomy()
{

    $args = array(

        'labels' => array(
            'name' => 'Product Categories',

        ),

        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,

    );

    register_taxonomy('Product Categories', array('products'), $args);
}
add_action('init', 'my_first_taxonomy');
function themename_custom_logo_setup()
{
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');
add_theme_support('post-thumbnails');
add_post_type_support('products', 'thumbnail');
set_post_thumbnail_size(200, 200);
function custom_new_menu()
{
    register_nav_menus(
        array(
            'header' => 'Header Menu',

        )
    );
}
add_action('init', 'custom_new_menu');
function sample_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'sample'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'sample'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'sample_widgets_init');

// function arphabet_widgets_init()
// {

//     register_sidebar(array(
//         'name'          => 'Home right sidebar',
//         'id'            => 'home_right_1',
//         'before_widget' => '<div>',
//         'after_widget'  => '</div>',
//         'before_title'  => '<h2 class="rounded">',
//         'after_title'   => '</h2>',
//     ));
// }
// add_action('widgets_init', 'arphabet_widgets_init');


// register_sidebar(array(
//     'id'          => 'before-post',
//     'name'        => 'Before Posts Widget',
//     'description' => __('Your Widget Description.', 'text_domain'),
// ));
// function wpsites_before_post_widget($content)
// {
//     if (is_singular(array('post', 'page')) && is_active_sidebar('before-post') && is_main_query()) {
//         dynamic_sidebar('before-post');
//     }
//     return $content;
// }
// add_filter('the_content', 'wpsites_before_post_widget');

// $args = array(
//     'name'          => sprintf(__('Sidebar %d')),
//     'id'            => "sidebar",
//     'description'   => '',
//     'class'         => '',
//     'before_widget' => '<li id="%1$s" class="widget %2$s">',
//     'after_widget'  => "</li>\n",
//     'before_title'  => '<h2 class="widgettitle">',
//     'after_title'   => "</h2>\n",
// );
// register_sidebar($args);
