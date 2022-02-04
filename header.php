<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>El Urbano</title>
    <?php wp_head();?>
</head>
<body>
    <header>
    <div class="menu_bar">
        <a href="#" class="bt-menu"><span class="dashicons dashicons-menu"></span> Menu</a>
    </div>
    <nav>
<?php 
    wp_nav_menu(
        array(
           'theme_location' => 'top',
           'container' => 'nav', 
           'container_class' => 'container',
            'menu_class' => 'menu-list list-inline'
        )
    );
?>
    </nav>
    </header>  

    
