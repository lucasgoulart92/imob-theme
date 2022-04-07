<?php get_header();?>

<div class="destaques">
    <div class="destaques__content">

    <?php

    // Setup your custom query
    $args = array( 'post_type' => 'product');
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="destaques__content__item">
            <div class="destaques__content__item__foto" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                <?php if (in_category('comprar')) : ?>
                    <h3 class="venda">À venda</h3>
                <? endif; ?>
                <?php if (in_category('alugar')) : ?>
                    <h3 class="aluguel">Aluguel</h3>
                <? endif; ?>
            </div>

            <h4><?php the_field('bairro');?></h4>

            <a href="<?php the_permalink();?>"><?php the_title();?></a>

            <ul class="__detalhes">
                <li>
                    <img src="<?php bloginfo('template_url');?>/img/icons/bedroom.png" alt="">
                    <?php the_field('quartos');?> dormitórios
                </li>
                <li>
                    <img src="<?php bloginfo('template_url');?>/img/icons/area.png" alt="">
                    <?php the_field('area_m');?>m²
                </li>
                <?php if (get_field('diferenciais')) : ?>
                <li class="diferenciais">
                    <?php the_field('diferenciais');?>
                </li>
                <?php endif; ?>
            </ul>

            <a href="<?php the_permalink();?>" class="permalink" >ver mais</a>

        </div>

        <?php endwhile; wp_reset_query(); // Remember to reset ?>

    </div>

</div>

<?php get_footer();?>