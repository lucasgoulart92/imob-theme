<?php get_header();?>

<div class="single">
    <?php if (have_posts()) : while (have_posts()) : The_post () ; ?>

    <div class="single__content">
        
         <div class="single__content__foto" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>

         <div class="single__content__txt">

            <h4><?php the_field('bairro');?></h4>
         
            <h2><?php the_title();?></h2>

            <div class="single__content__txt__grid">
                <div class="single__content__txt__grid__detalhes">

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
        
                    <div class="single__content__txt__preco">
                        <h5 class="rs">R$</h5>
                        <h5 class="preco"><?php the_field('preco');?></h5>
                        <h5 class="centavos">,00</h5>
                    </div>

                </div>

                <div class="single__content__txt__grid__text">
                    <?php the_content();?>
                </div>

                <div class="single__content__txt__form">
                    <a class="openform" href="whatsapp" >
                        <img class="whats" src="<?php bloginfo('template_url');?>/img/icons/whatswhite.png" alt="">
                        entrar em contato
                    </a>
                </div>
                
            </div>

         </div>

        
         <?php
            endwhile;
            else:
        ?>

    </div>

    <?php endif; ?>

    
</div>

</div>

<?php get_footer();?>