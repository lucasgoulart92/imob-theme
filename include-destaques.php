
            <div class="destaques">
                <div class="destaques__content">

                <?php

                // Setup your custom query
                $loop = new WP_Query( array( 'post_type' => 'imoveis', 'posts_per_page' => 6 ) );

                while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="destaques__content__item">
                        <div class="destaques__content__item__foto" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                            <?php if (in_category('comprar')) : ?>
                                <h3 class="categoria">À venda</h3>
                            <? endif; ?>
                            <?php if (in_category('alugar')) : ?>
                                <h3 class="categoria">Aluguel</h3>
                            <? endif; ?>
                        </div>

                        <a href="<?php the_permalink();?>">
                            <?php the_title();?>
                        </a>

                        <ul class="__detalhes">
                            <li>
                                <img src="<?php bloginfo('template_url');?>/img/icons/bedroom.png" alt="">
                                <?php the_field('quartos');?> dormitórios
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url');?>/img/icons/area.png" alt="">
                                <?php the_field('area_m');?>m²
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url');?>/img/icons/location.png" alt="">
                                <?php the_field('bairro');?>
                            </li>
                        </ul>

                        <a href="<?php the_permalink();?>" class="permalink" >ver mais</a>

                    </div>

                    <?php endwhile; wp_reset_query(); // Remember to reset ?>

                    
                </div>
                
                <a class="destaques-vermais" href="<?php bloginfo('url');?>/product-category/comprar/">Ver todos</a>

            </div>
