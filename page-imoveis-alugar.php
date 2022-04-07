<?php
    /* Template Name: Alugar */
?>

<?php get_header();?>

<div class="results">

    <h2>Confira nossos imóveis disponíveis para aluguel</h2>

    <div class="results__content">
        
        <?php 

            $cat = 2; // The product category you want to display
            $args = array('post_type' => 'imoveis', 'posts_per_page' => -1, 'cat' => $cat);
            $loop = new WP_Query($args);

                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
                <div class="results__content__item">
                    <div class="results__content__item__foto" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
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


                    <h5 class="rs">R$</h5>
                    <h5 class="preco"><?php the_field('preco');?></h5>
                    <h5 class="centavos">,00</h5>

                    <?php the_excerpt();?>

                    <a href="<?php the_permalink();?>" class="permalink" >ver mais</a>

                </div>

        <?php endwhile; ?>

    </div>
</div>

<?php get_footer();?>