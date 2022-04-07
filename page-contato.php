<?php
    /* Template Name: Contato */

    get_header();
?>


<div class="contato-page">
        <img src="<?php bloginfo('template_url');?>/img/bgs/contatobg.jpg" alt="" class="bg-contato">
        
        <div class="contato-page__content">
            <h2>Entre em contato para tirar suas dúvidas</h2>
            <?php the_content();?>

            <p class="contato-whats">ou se preferir</p>
            <a href="https://api.whatsapp.com/send?phone=5555991066092&text=Ol%C3%A1!%20Vim%20do%20seu%20site%2C%20podemos%20conversar%3F" class="add_to_cart_button">
                <img src="<?php bloginfo('template_url');?>/img/icons/whatswhite.png" alt="">    
                Chame no Whatsapp
            </a>
        </div>
    </div>

<?php get_footer();?>