<?php get_header(); ?>
<?php

/**
 * Template Name: Politica de privacidad
 */
?>
<div class="page border-pagina">    
    <?php get_template_part( 'menu' );?>
    <div class="content politica-privacidad">
        <div class="titulo-pagina-fondo">
            <h1>Política de privacidad</h1>
        </div> 
        <div class="contenedor-ancho">            
            <div class="politica-privacidad-container align-center justify-center">                        
                    <?php the_field('texto_politica_privacidad'); ?>                              
            </div>
        </div>
        <?php get_template_part( 'footer-pagina' );?>
    </div>
</div>