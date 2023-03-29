<footer class="site-footer">
   <?php
                     $args = array(
                        'theme_location' => 'header-menu',
                        'container' => 'nav',
                        'container_class' => 'footer-nav',                        
                        'after' => '<span class="separador"> |</span>'
                     );
                     wp_nav_menu($args);
    ?>
                      <div class="direccion">
                <p>Avenida del Botánico Dr. José de Jesús Jiménez Almonte, No, 1, Santiago De Los Caballeros</p>
                <p>Telefono: +18094892400</p>
            </div>
</footer>           
<?php wp_footer(); ?>
</body>
</html>