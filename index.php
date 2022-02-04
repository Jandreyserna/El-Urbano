<?php
wp_head();


wp_nav_menu(
    array(
       'theme_location' => 'top',
       'container' => 'nav', 
       'container_class' => 'container',
        'menu_class' => 'menu-list list-inline'
    )
);

$query = new WP_Query( 'category_name = categoria-politica' );

$i = 0;
if ( $query->have_posts() ) : while ( $query->have_posts()) : $query->the_post(); 

the_category();
$i++;
endwhile;
endif;
/* post */


$categories = get_categories();


?>
  <div class="posts-carousel multiple-items " style="display: flex;">
    <?php
    for($i = 0; $i < sizeof($categories); $i++ ):
      $post =  get_post_id_by_name($categories[$i]->slug);
    ?>
      <div class="wrapper">
        <div class="container">
          <img class="top" src="http://localhost/urbano/wp-content/uploads/2022/01/html5.jpg" alt="">
          <div class="bottom">
            <div class="left">
              <div class="details">
                <h2 class="txt_products">Name</h2>
                <p>sub Name</p>
              </div>
              <div class="buy">
                <a href="">
                  <i class="fas fa-cart-plus"></i>
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
            <h1>Name</h1>
            <p>Descriptions</p>
          </div>
        </div>    
      </div>
      


<?php
    endfor;


?>
  </div>




<?php
        if(has_post_thumbnail()):
          the_post_custom_thumbnail(
            get_the_ID(),
            'featured-thumbnail',
            [
              'sizes' => '(max-width: 350px) 350px, 233px',
              'class' => 'w-100',
            ]
          );
        else:
      ?>
          <img src="http://localhost/urbano/wp-content/uploads/2022/01/html5.jpg" class="w-100" alt="Card image cap">
        <?php  
        endif;
        ?>