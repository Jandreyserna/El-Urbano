<?php
/**
 * @package fitcoach
 */
?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php the_post_thumbnail('large', array('class' => 'fc-post-image')); ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'fitcoach' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

	</div>
	
		<footer class="entry-footer">
			<?php
				/* translators: used between list items, there is a space after the comma */
				$category_list = get_the_category_list( __( ', ', 'fitcoach' ) );

				/* translators: used between list items, there is a space after the comma */
				$tag_list = get_the_tag_list( '', __( ', ', 'fitcoach' ) );

				if ( ! fitcoach_categorized_blog() ) {
					// This blog only has 1 category so we just need to worry about tags in the meta text
					if ( '' != $tag_list ) {
						$meta_text = __( 'Esta entrada fue etiquetada %2$s. Marca el <a href="%3$s" rel="bookmark">permalink</a>.', 'fitcoach' );
					} else {
						$meta_text = __( 'Marca el <a href="%3$s" rel="bookmark">permalink</a>.', 'fitcoach' );
					}

				} else {
				// But this blog has loads of categories so we should probably display them here
					if ( '' != $tag_list ) {
						$meta_text = __( 'Esta entrada fue publicada en  %1$s y Etiquetada %2$s. Marca el <a href="%3$s" rel="bookmark">permalink</a>.', 'fitcoach' );
					} else {
						$meta_text = __( 'Esta entrada fue publicada como %1$s. Marca el <a href="%3$s" rel="bookmark">permalink</a>.', 'fitcoach' );
					}

				} // end check for categories on this blog

				printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
				);
			?>

			<?php edit_post_link( __( 'Edit', 'fitcoach' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->  
