<div class="card targeta">
    <?php the_post_thumbnail('large', array('class' => 'fc-post-image')); ?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="<?php the_permalink(); ?>"><button><?php echo __( 'Read More', 'fitcoach' ); ?></button></a> 
    </div>
</div>