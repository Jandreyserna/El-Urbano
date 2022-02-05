<?php

get_header();

$current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ): 1;
$args = array(
  'order'        => 'ASC',
  
  // Paginación
  'posts_per_page' => 8,
  'paged'         => $current_page,
);
$events_query = new WP_Query( $args );
?>
<h2 style="text-align: center">Noticias</h2>
<?php
if( $events_query->have_posts() ) { ?>

    <div class=" primer row align-items-start">
<?php 
    while( $events_query->have_posts() ) {
        $events_query->the_post(); 
        $thumbID = get_post_thumbnail_id( $post->ID );
        $imgDestacada = wp_get_attachment_url( $thumbID );
?>
        <div class="col">
        <div class="wrapper">
            <div class="container">
<?php       if(!empty($imgDestacada)):?>
                <img class="top" src="<?= $imgDestacada ?>" alt="">
<?php       else: ?>
                <img class="top" src="http://localhost/urbano/wp-content/uploads/2022/01/html5.jpg" alt="">
<?php       endif; ?>
            <div class="bottom">
                <div class="left">
                <div class="details">
                    <h4 class="txt_products"><?= the_title(); ?></h4>
                    <p><?= the_category(); ?></p>
                </div>
                <div class="buy">
                    <a href="">
                    <span class="dashicons dashicons-arrow-right-alt"></span>
                    </a>
                </div>
                </div>
            </div>
            </div>
            <div class="inside">
            <div class="icon">
                <i class="fas fa-eye"></i>
            </div>
            <div class="icontents">
                <h1><?= the_title(); ?></h1>
                <p> <?php the_excerpt(); ?></p>
            </div>
            </div>    
        </div>
    </div>
      
  

  <?php } ?>
    </div>
 <?php
  echo paginate_links( array(
        'current' => $current_page,
        'total' => $events_query->max_num_pages
  ) );
  wp_reset_postdata();

} else {

  _e( 'No results found', 'textdomain'  );

}

get_footer();