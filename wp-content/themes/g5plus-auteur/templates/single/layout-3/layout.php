<?php
/**
 * The template for displaying layout-1.php
 *
*/
get_header();
while (have_posts()) : the_post();
    G5Plus_Auteur()->helper()->getTemplate('single/layout-3/content');
endwhile;
get_footer();