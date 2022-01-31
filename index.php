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

for($i = 0; $i < sizeof($categories); $i++ ):
  $post =  get_post_id_by_name($categories[$i]->slug);
?>
  <div class="yor-class px-3">
    <div class="card">
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
    </div>

  </div>
<?php
endfor;


?>

<div class="posts-carousel">
  <div><h3>1</h3></div>
  <div><h3>2</h3></div>
  <div><h3>3</h3></div>
  <div><h3>4</h3></div>
  <div><h3>5</h3></div>
  <div><h3>6</h3></div>
</div>


