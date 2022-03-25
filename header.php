<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package fitcoach
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php add_action( 'wp_enqueue_scripts', 'fitcoach_scripts' ); ?>

<?php if ( get_theme_mods('site_favicon') ) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
<?php endif; ?>

<?php if ( get_theme_mods('apple_touch_144') ) : ?>
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url(get_theme_mod('apple_touch_144')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mods('apple_touch_114') ) : ?>
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url(get_theme_mod('apple_touch_114')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mods('apple_touch_72') ) : ?>
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url(get_theme_mod('apple_touch_72')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mods('apple_touch_57') ) : ?>
	<link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_mod('apple_touch_57')); ?>" />
<?php endif; ?> 

<?php 
wp_head(); 
$url_image = get_theme_mods( 'fitcoach_logo' );
?>


</head> 
<header>
	<nav class="navbar navbar-dark " style="background:#9F46EE;">
		
		<div class="contenedor-menu " >
			<p class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></p>	

			<div class="menu main-navigation">
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
			</div>
		</div>
		<button class="menu-toggle"><?php _e( 'Menu', 'fitcoach' ); ?></button>	
	</nav>
</header>	
<body>
		<div class="vertical-center-4">
            <div class="card">
                <img src="<?= get_stylesheet_directory_uri();?> /images/cta.jpg" alt="mar bus">
            </div>
            <div class="card">
                <img src="<?= get_stylesheet_directory_uri();?> /images/cta.jpg" alt="mar bus">
            </div>
            <div class="card">
                <img src="<?= get_stylesheet_directory_uri();?> /images/cta.jpg" alt="mar bus">
            </div>
            <div class="card">
                <img src="<?= get_stylesheet_directory_uri();?> /images/cta.jpg" alt="mar bus">
            </div>

        </div>
	



	
