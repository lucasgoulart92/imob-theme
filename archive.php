<?php get_header();?>

<div class="results">

    archive geral

    <div class="results__content">

        <h2>Resultados para sua busca de imóveis disponíveis para aluguel:</h2>
        
        <?php 
            if (have_posts()) :
            while ( have_posts() ) : the_post();
        ?>
    
        <div class="results__content__item">
            <a href="<?php the_permalink();?>">
                <div class="results__content__item__foto" style="background-image: url('<?php the_post_thumbnail_url(); ?>') "></div>
            </a>

            <h4><?php the_field('bairro');?></h4>

            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

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
        
            <?php the_excerpt(); ?>

            <a href="<?php the_permalink();?>" class="permalink" >ver mais</a>

        </div>

        <?php 
            endwhile;
            else :
        ?>

        <p>Nenhum resultado encontrado</p>
            
        <?php
            endif;
        ?>
    
    </div>
    
    
</div>

<?php get_footer();?>