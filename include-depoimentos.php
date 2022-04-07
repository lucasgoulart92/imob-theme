<div class="depoimentos">
    <div class="depoimentos__content">
        <h2>Depoimentos de nossos clientes</h2>

        <?php $loop = new WP_Query( array( 'post_type' => 'depoimentos', 'posts_per_page' => 6 ) );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="depoimentos__content__item">
            <div class="depoimentos__content__item__foto" style="background-image: url('<?php the_post_thumbnail_url(); ?>') "></div>
            <h2 class="nome"><?php the_title();?></h2>
            <div class="depoimento">
                <img class="aspas-before" src="<?php bloginfo('template_url');?>/img/icons/aspas-before.png">
                <?php the_content();?>
                <img class="aspas-after" src="<?php bloginfo('template_url');?>/img/icons/aspas-after.png">
            </div>
        </div>

        <?php endwhile; ?>
        
    </div>
</div>