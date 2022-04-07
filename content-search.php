<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fitcoach
 */
?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
		<?php 
		echo "<pre>";
		echo "<pre>";
		echo "</pre>";
		echo "</pre>";
		
		?>
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<?php the_post_thumbnail();?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php fitcoach_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	</div>
		<footer class="entry-footer">
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'fitcoach' ) );
					if ( $categories_list && fitcoach_categorized_blog() ) :
				?>
			
            	<span class="cat-links">
					<?php printf( __( 'Posted in %1$s', 'fitcoach' ), $categories_list ); ?>
				</span>
				<?php endif; // End if categories ?>

				<?php
				/* translators: used between list items, there is a space after the comma */
					$tags_list = get_the_tag_list( '', __( ', ', 'fitcoach' ) );
					if ( $tags_list ) :
				?>
				<span class="tags-links">
					<?php printf( __( 'Tagged %1$s', 'fitcoach' ), $tags_list ); ?>
				</span>
				<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>

			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'fitcoach' ), __( '1 Comment', 'fitcoach' ), __( '% Comments', 'fitcoach' ) ); ?></span>
			<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'fitcoach' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
