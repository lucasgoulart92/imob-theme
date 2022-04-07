<?php the_header();?>

    <?php if(have_posts()) : while (have_posts()) : the_posts(); ?>

    <?php endwhile; else : ?>

    <?php endif; ?>

<?php the_footer();?>