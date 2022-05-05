<div class="card targeta">
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
        <h5 class="card-title"><?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?></h5>
        <p class="card-text"> <?= the_excerpt()?></p>
        <a href="<?php the_permalink(); ?>"><button><?php echo __( 'Ver', 'fitcoach' ); ?></button></a> 
    </div>
</div>