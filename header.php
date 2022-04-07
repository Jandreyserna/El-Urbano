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
	<?php
	$args = array('exclude' => '-7');
	$categories = get_categories($args);
	$posicion = 0;
		for($a = 0; $a <= sizeof($categories); $a++ ){
			if(isset($categories[$a]) == TRUE){
				$categorias[$posicion]= $categories[$a]->slug;
				$posicion++;
			}
		}
	?>
</head> 
<header>
	<nav class="navegator " >
		<div class="barra-logo">
			<a href='<?php echo esc_url( home_url( '/' ) ); ?>' class="">
				<img src="<?=$url_image['apple_touch_57']?>" alt="" class="">
			</a>
		</div>	
		<div class="row menu" style="display: flex">
			<a class="btn btn-light menu-toggle" data-bs-toggle="collapse" 
				href="#multiCollapseExample1" role="button" 
				aria-expanded="false" aria-controls="multiCollapseExample1">
				<span class="dashicons dashicons-menu-alt3"></span>
			</a>
			<div class="menu1">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
			</div>
								
		</div>
	</nav>
</header>	
<body>
	
	<h3 class="name-post">¡Ultimas noticias!</h3>
	<div class="sliders-show">
		<?php
		for($i = 0; $i < sizeof($categories); $i++ ):

			$post =  get_post_id_by_name($categorias[$i]);
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
	<div class="collapse multi-collapse" id="multiCollapseExample1">
		  <div class="menu2">
		  	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
		  </div>
    </div>
		
	



	
