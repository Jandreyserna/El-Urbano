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
<meta name="viewport" content="width=device-width, user-scalable=no , initial-scale=1.0, maximum-scale=1.0, mimimum-scale=1.0">
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
<body>
	<header>
		<nav class="navegator " >
			<div class="barra-logo">
				<a href='<?php echo esc_url( home_url( '/' ) ); ?>' class="">
					<img src="<?=$url_image['apple_touch_57']?>" alt="" class="">
				</a>
			</div>
			<div class="menu_bar">
				<a class="btn btn-dark menu-toggle">
					<span class="dashicons dashicons-menu-alt3"></span>
				</a>
			</div>
				
			<div class="row menu" >
				<div class="menu1">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
				</div>
									
			</div>
		</nav>
	</header>	


		
	



	
