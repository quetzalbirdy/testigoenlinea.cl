<?php get_header(); ?>
<?php

/**
 * Template Name: Metodologia
 */
?>
<div class="page border-pagina">    
    <?php get_template_part( 'menu' );?>
    <div class="content metodologia">
       <div class="metodologia-container align-center justify-center">
            <div class="titulo-pagina-fondo">
                <h1>Metodología</h1>
            </div> 
           <div class="contenedor-ancho">                      
           <div class="grid-metodologia">
                <div class="punto1 punto-metodologia">
                        <h2><?php the_field('titulo_1'); ?></h2>
                        <div class="texto">
                            <div class="texto__color-relleno">       
                                1                 
                            </div>
                            <div class="texto-descripcion"><?php the_field('texto_1'); ?></div>
                        </div>
                </div>
                <div class="punto2 punto-metodologia">
                        <h2><?php the_field('titulo_2'); ?></h2>
                        <div class="texto">                    
                            <div class="texto__color-relleno">    
                                2                    
                            </div>
                            <div class="texto-descripcion"><?php the_field('texto_2'); ?></div>                        
                        </div>
                </div>
                <div class="punto3 punto-metodologia">
                        <h2><?php the_field('titulo_3'); ?></h2>
                        <div class="texto">
                            <div class="texto__color-relleno">   
                                3                     
                            </div>
                            <div class="texto-descripcion"><?php the_field('texto_3'); ?></div>
                        </div>
                </div>
                <div class="punto4 punto-metodologia">
                        <h2><?php the_field('titulo_4'); ?></h2>
                        <div class="texto">  
                            <div class="texto__color-relleno">  
                                4                      
                            </div>                  
                            <div class="texto-descripcion"><?php the_field('texto_4'); ?></div>                        
                        </div>
                </div>
            </div> 
           </div>                                                       
       </div>
       <?php get_template_part( 'footer-pagina' );?>
    </div>
</div>