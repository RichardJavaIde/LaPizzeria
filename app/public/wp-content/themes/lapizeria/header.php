<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    
</header>
<body>

<header class="site-header">
    <div class="contenedor">
    <div class="logo">
        <a href="<?php echo esc_url( home_url('/'));?>">
            <img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="Logo">
        </a>
    </div>

    <div class="informacion-haeder">
        <div class="redes-sociales"><!-- TODO: Agregar menu-->
                     <?php
                     $args = array(
                        'theme_location' => 'redes-sociales',
                        'container' => 'nav',
                        'container_class' => 'sociales',
                        'link_before' => '<span class="sr-text">',
                        'link_after' => '</span>'
                     );
                     wp_nav_menu($args);
                     ?>
            </div><!-- Redes-sociales-->
             <div class="direccion">
                <p>Avenida del Botánico Dr. José de Jesús Jiménez Almonte, No, 1, Santiago De Los Caballeros</p>
                <p>Telefono: +18094892400</p>
            </div>
    </div><!-- TODO: Agregar menu-->
    </div>
</header>

<div class="menu-principal">
    <div class="contenedor">
        <?php
        $args= array(
            'theme-location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'menu-sitio',
            'container_id' => 'menu'
        );
        wp_nav_menu($args);
        ?>
    </div>
</div>

