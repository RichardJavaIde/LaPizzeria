<?php get_header(); ?>
        <?php  
            
                get_template_part('template-parts/loop','contenido'); 
            
                    comments_template();
            
         ?>

<?php get_footer(); ?>