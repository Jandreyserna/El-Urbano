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

	<div class="collapse multi-collapse" id="multiCollapseExample1">
		  <div class="menu2">
		  	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
		  </div>
    </div>
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
	<div class="container">
  		<div class="row align-items-start">

			<div class="col barra-izquierda">
				<?php
				get_template_part( 'barra-izquierda');
				?>
			</div>

    		<div class="col contenido">
				<h1 class="text-center">Noticias</h1>
				<div class="grid grid-pad page-area ">
					<div class="contenedor-entradas">
						<?php
						/* argumentos para la consulta */
						$arg = array(
							'category_name' => 'noticia',
						);
						/* consulta personalizada */
						$query = new WP_Query( $arg );
						/* verificar si obtuvimos resultados */
						if( $query->have_posts() ) {
							/* obtener los datos mediante un bucle */
							while ($query->have_posts() ){
								$query->the_post();
								$categorias = get_the_category();
								if( $categorias[0]->name != 'video-cabecera' && $categorias[0]->name != 'publicidad' && $categorias[0]->name != 'video' && $categorias[0]->name != 'equipo+'):
									get_template_part( 'contenido' );
								endif;					
							}	
						}else{
							get_template_part( 'content', 'none' );
						}
						/*  restaurar datos originales de la entrada */
						wp_reset_postdata();					
						?>
				<!-- <?php /* get_sidebar(); */ ?> -->
				</div><!-- grid -->
				<!--  videos post  -->
				<h1 class="text-center">VIDEOS</h1>
				<div class="grid grid-pad page-area ">
					<div class="videos-contenedor contenedor-entradas">
						
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
				</div><!-- grid pad -->
			</div><!-- col contenido -->



		</div><!-- aliniar items -->
		<div class="col barra-derecha">
				<?php
				get_template_part( 'barra-derecha');
				?>
		</div> <!-- col derecha -->
	</div><!-- container -->
	<div class="miembros">
		<h1 class="text-center">NUESTRO EQUIPO</h1>
		<?php
				/* argumentos para la consulta */
				$arg = array(
					'category_name'  => 'equipo',
				);
				/* consulta personalizada */
				$query = new WP_Query( $arg );

				/* verificar si obtuvimos resultados */
				if( $query->have_posts() ) {
					/* obtener los datos mediante un bucle */
					while ($query->have_posts() ){
						$query->the_post();
		?>
						<div class="card mb-3" style="max-width: 540px;">
							<div class="row g-0">
								<div class="col-md-4">
									<?=the_post_thumbnail();?>
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<h5 class="card-title"><?=the_title();?></h5>
										<p class="card-text"><?=the_content()?></p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
							</div>
						</div>
		<?php
					}
									
			}
			/*  restaurar datos originales de la entrada */
			wp_reset_postdata();
								
		?>
	</div>
	
	<?php get_footer(); ?>
