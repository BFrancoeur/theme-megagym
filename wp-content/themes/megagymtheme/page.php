<?php get_header(); ?>

<main class="container page section no-sidebars">
    <?php while (have_posts()) : the_post(); ?>
        <div class="content-container">
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
</main>

<?php get_footer(); ?>