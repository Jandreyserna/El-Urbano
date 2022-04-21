<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fitcoach
 */

get_header(); ?>

	<div class="publicidad-horizontal">	
		<?php 
		echo do_shortcode('[mostrar_cat cat="7"]');
		?>
	</div>
	<div class="video-cabecera">
		<?php
			echo do_shortcode('[mostrar_category_name category_name="video-cabecera"]');
		?>
	</div>
	<h1 class="text-center">Noticias</h1>
	<div class="grid grid-pad page-area ">
		<div class="contenedor-entradas">
			<?php
			/* argumentos para la consulta */
			 $arg = array(
				'author_name' => 'urbano',
			 );
			 /* consulta personalizada */
			 $query = new WP_Query( $arg );

			 /* verificar si obtuvimos resultados */
			 if( $query->have_posts() ) {
				 /* obtener los datos mediante un bucle */
				 while ($query->have_posts() ){

					$query->the_post();
					$categorias = get_the_category();
					if( $categorias[0]->name != 'video-cabecera' && $categorias[0]->name != 'publicidad' && $categorias[0]->name != 'video'):
						get_template_part( 'contenido' );
					endif;
					
				 }
				 
			 }else{
				get_template_part( 'content', 'none' );
			 }
			 /*  restaurar datos originales de la entrada */
			 wp_reset_postdata();
			
			?>

	<?php get_sidebar(); ?>
	</div><!-- grid -->
	<!--  videos post  -->
	<div class="videos-contenedor contenedor-entradas">
		<h1 class="text-center">VIDEOS</h1>
		<div class="videos">
			<?php
			/* argumentos para la consulta */
			 $arg = array(
				'category_name'  => 'video',
			 );
			 /* consulta personalizada */
			 $query = new WP_Query( $arg );

			 /* verificar si obtuvimos resultados */
			 if( $query->have_posts() ) {
				 /* obtener los datos mediante un bucle */
				 while ($query->have_posts() ){
					$query->the_post();
					
					get_template_part( 'content-Videos', get_post_format() );
				 }
				 
			 }
			 /*  restaurar datos originales de la entrada */
			 wp_reset_postdata();
			
			?>
		</div>
		
	</div>
	
	<?php get_footer(); ?>
