<?php get_header(); ?>

<?php echo '<h2>Index (default) Template File</h2>'; ?>

<?php while (have_posts()) : the_post(); ?>
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>