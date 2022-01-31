
<?php




/** Registrar los stylos y scripts de la pagina */

function register_styles()
{  

    /*Bootstrap */
    wp_register_style('style_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), time());
    wp_enqueue_style('style_bootstrap');

    wp_register_script('script_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), time());
    wp_enqueue_script('script_bootstrap');

    /* slick carousel*/
    wp_register_style('style_carousel', get_template_directory_uri().'/library/css/slick-theme.css', array(), time());
    wp_enqueue_style('style_carousel');

    wp_register_style('style_carousel_css', get_template_directory_uri().'/library/css/slick.css', array(), time());
    wp_enqueue_style('style_carousel_css');

    wp_register_script('script_carousel', get_template_directory_uri().'/library/js/slick.js', ['jquery'] , time());
    wp_enqueue_script('script_carousel');

    /* documentos tipo js*/
    wp_register_script('documents_js', get_template_directory_uri().'/library/js/carousel/slider.js', ['jquery', 'script_carousel'] , time());
    wp_enqueue_script('documents_js');  


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

/** agregar nuevo elemento al menu de wordpress */
add_filter('wp_nav_menu_items','menuProgrammatically', 10, 2);
function menuProgrammatically($item, $args)
{
    if($args->theme_location == 'top')
    {
        $firstMenuItem = "<li><a href=".home_url('/feo').">Home</a>";

        return $item.$firstMenuItem;
    }
}


/*Traer todos los post de un slug  */

function get_post_id_by_name( $post_name, $post_type = 'post' )
{
    $post_ids = get_posts(array
    (
        'category_name'   => $post_name,
        'numberposts' => 1,
    ));

    return  array_shift( $post_ids );
}
