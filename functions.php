
<?php




/** Registrar los stylos y scripts de la pagina */

function register_styles()
{
    wp_register_style('style_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), time());
    wp_enqueue_style('style_bootstrap');

    wp_register_script('script_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), time());
    wp_enqueue_script('script_bootstrap');
}
add_action('wp_enqueue_scripts', 'register_styles');


/*Registrar los menus dinamicos */

add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'top' => __('Top Menu', 'urbano'),
        'footer' => __('Footer Menu', 'urbano'),

    )
);

/** añadir clases a los menus de wordpress */

function urbano_menu_class($classes, $item, $args)
{
    if($args-> theme_location == 'top')
    {
        $classes[] = 'list-inline-item';
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'urbano_menu_class',1,3);