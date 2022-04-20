<?php
/* 
 * Template Name: Template Slick
*/

if (! defined('ABSPATH')){
    exit; //Exit if ACCESSED DIRECTLY
}

get_header();
?>
<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
    <main id="main" <?php generate_do_element_classes( 'main' ); ?>>
        <div class="responsive">
            <div class="card">
                <img src="<?= get_stylesheet_directory_uri();?> /images/cta.jpg" alt="mar bus">
            </div>
            <div class="card">
                <img src="<?= get_stylesheet_directory_uri();?> /images/cta.jpg" alt="mar bus">
            </div>
            <div class="card">
                <img src="<?= get_stylesheet_directory_uri();?> /images/cta.jpg" alt="mar bus">
            </div>
            <div class="card">
                <img src="<?= get_stylesheet_directory_uri();?> /images/cta.jpg" alt="mar bus">
            </div>

        </div>
    </main>
</div>
<?php
do_action( 'generate_after_primary_content_area' );
generate_construct_sidebars();
get_footer();