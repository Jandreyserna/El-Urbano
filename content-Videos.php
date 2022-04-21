<div class="card videos-facebook targeta">
<?php
				  the_content()
?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?></h5>
        <p class="card-text"> <?= the_excerpt()?></p>
        <a href="<?php the_permalink(); ?>"><button><?php echo __( 'Vídeo', 'fitcoach' ); ?></button></a> 
    </div>
</div>