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
/* echo "<pre>";
print_r($query);
echo "</pre>"; */  
$i = 0;
if ( $query->have_posts() ) : while ( $query->have_posts()) : $query->the_post(); 

the_category();
$i++;
endwhile;
endif;
?>

<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>