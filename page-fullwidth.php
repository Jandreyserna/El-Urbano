<?php
/**
 Template Name: Fullwidth Page
 *
 * @package fitcoach
 */

get_header(); ?>
	<h1>hellooooooooooooooooooooooooooooooooooo page-fullwith</h1>
	<div class="grid grid-pad page-area">
		<div id="primary" class="content-area page-wrapper col-1-1 custom_border_top">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->  

<?php get_footer(); ?>
