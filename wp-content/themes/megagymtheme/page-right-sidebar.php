<?php

/**
 * Template Name: Page With Sidebars
 * 
 * This template is for all pages with sidebars. 
 */
get_header(); ?>

<main class="container page section right-sidebar">
    <?php while (have_posts()) : the_post(); ?>
        <div class="page-content">
            <h1 class="text-center text-primary-color"><?php the_title(); ?></h1>
            <?php
            if (has_post_thumbnail()) :

                echo the_post_thumbnail('blog', array('class', 'featured-image'));
            endif;
            ?>
            <div>
                <?php the_content(); ?>
            </div>

        </div>
    <?php endwhile; ?>
    <aside class="right-sidebar">
        <h2>Sidebar Heading</h2>
    </aside>
</main>

<?php get_footer(); ?>