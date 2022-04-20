<div class="card targeta">
  <p class="fecha-post"><span class="entry-date"><?php echo get_the_date('d/m/Y'); ?></span></p>
<?php
				  if(has_post_thumbnail()):
					the_post_thumbnail(
					);
				  else:
                    
?>      
					<img src="<?=get_template_directory_uri().'/images/plantilla.jpg'?>" class="w-100" alt="Card image cap">
				  <?php 
                  endif; ?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?></h5>
        <p class="card-text"> <?= the_excerpt()?></p>
        <a href="<?php the_permalink(); ?>"><button><?php echo __( 'Read More', 'fitcoach' ); ?></button></a> 
    </div>
</div>