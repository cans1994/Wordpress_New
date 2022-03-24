<?php

/**
 * Template Name: Page avec bannière
 * Template Post Type: page, post
 */
?>
<?php get_header(); ?>

<?php
// Affichage d'un article sans la boucle
if (have_posts()) : while (have_posts()) : the_post();
?>
        
        <h1 class="banner"><?php the_title(); ?></h1>
        <p>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width:100%; height:auto;">
        </p>
        <?php the_content(); ?>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>