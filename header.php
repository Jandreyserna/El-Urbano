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
	<nav class="navegator " style="background:#9F46EE;">

		
			<div class="row" style="display: flex">
				
					<p class='site-title' style="width: 18%" ><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></p>

					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' class="logo"><img src="<?=$url_image['apple_touch_57']?>" alt="" class="logo"></a>
					<div class="row justify-content-end">
						<a href='<?php echo esc_url( home_url( '/' ) ); ?>' class="logo2"><img src="<?=$url_image['apple_touch_57']?>" alt="" class="logo2"></a>
						<div class="col-4">
						<button class="menu-toggle "><?php _e( 'Menu', 'fitcoach' ); ?></button>	
						</div>
					</div>
					
			</div>
	</nav>
</header>	
<body>
	<h3 class="name-post">¡Ultimas noticias!</h3>
	<div class="sliders-show">
		<?php
		$categories = get_categories();
		for($i = 0; $i < sizeof($categories); $i++ ):
			$post =  get_post_id_by_name($categories[$i]->slug);
		  ?>
			
				<div class="card card-slick" style="width: 18rem;">
				<?php
				  if(has_post_thumbnail()):
					the_post_thumbnail(
					);
				  else:
				?>
					<img src="http://localhost/urbano/wp-content/uploads/2022/01/html5.jpg" class="w-100" alt="Card image cap">
				  <?php  
				  endif;
				  ?>
					<div class="card-body">
					<?php
						// Get the ID of a given category
						$category_id = get_cat_ID( $categories[$i]->cat_name );

						// Get the URL of this category
						$category_link = get_category_link( $category_id );
						?>
						<h5 class="card-title"><?=the_category()?></h5>
						<p class="card-text"><?=the_excerpt()?></p>
						<a href="<?=$category_link?>" class="btn btn-primary">ver noticias</a>
					</div>
			  	</div>
<?php		
		  endfor;
?>
	</div>
	<h3 class="name-post" >¡Ultimas noticias!</h3>
		
	



	
