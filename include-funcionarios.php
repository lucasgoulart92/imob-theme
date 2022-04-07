<div class="funcionarios">
    <h2>Conheça a nossa Equipe</h2>

    <div class="funcionarios__content">

        <?php $loop = new WP_Query( array( 'post_type' => 'funcionarios', 'posts_per_page' => 3 ) );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="funcionarios__content__item">
            <div class="funcionarios__content__item__foto" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
            <h4 class="cargo"><?php the_field('cargo');?></h4>
            <h3><?php the_title();?></h3>
            <h4 class="contato">
                <?php the_field('wpp');?>
            </h4>
        </div>

        <?php endwhile; ?>

    </div>
</div>