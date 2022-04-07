<div class="single">
    <?php if (have_posts()) : while (have_posts()) : The_post () ; ?>

    <div class="single__content">
        
         <div class="results__content__item__foto" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>

         <h2><?php the_title();?></h2>
         <?php the_content();?>
        
         <?php
            endwhile;
            else:
        ?>

    </div>

    <?php endif; ?>
    
</div>