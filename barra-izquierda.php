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
				the_title();
?>
                <span class="entry-date"><?php echo get_the_date('d/m/Y'); ?></span>
<?php
			endif;					
		}	
	}else{
	    get_template_part( 'content', 'none' );
	}