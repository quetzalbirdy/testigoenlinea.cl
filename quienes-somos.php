<?php get_header(); ?>
<?php

/**
 * Template Name: Quienes somos
 */
?>
<div class="page border-pagina">    
    <?php get_template_part( 'menu' );?>
    <div class="content quienes-somos">
        <div class="titulo-pagina-fondo">
            <h1>Quienes somos</h1>
        </div> 
        <div class="contenedor-ancho">            
            <div class="quienes-somos-container align-center justify-center">                        
                    <div class="texto-quienes-somos">
                        <?php the_field('texto_quienes_somos'); ?>  
                    </div>
                    <div class="equipo">
                        <div class="elemento-row pt-10">
                            <div class="nombre"><?php the_field('nombre_1', false, false); ?></div>
                            <div class="bio"><?php the_field('bio_1', false, false); ?></div>
                        </div>
                        <div class="elemento-row pt-10">
                            <div class="nombre"><?php the_field('nombre_2', false, false); ?></div>
                            <div class="bio"><?php the_field('bio_2', false, false); ?></div>
                        </div>
                        <div class="elemento-row pt-10">
                            <div class="nombre"><?php the_field('nombre_3', false, false); ?></div>
                            <div class="bio"><?php the_field('bio_3', false, false); ?></div>
                        </div>
                    </div>  
                    <p>Súmate con tus saberes por las evidencias digitales. Escríbenos a <a href="mailto:contacto@testigoenlinea.cl">contacto@testigoenlinea.cl</a></p>                          
            </div>
        </div>
        <?php get_template_part( 'footer-pagina' );?>
    </div>
</div>