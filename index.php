<?php get_header(); ?>
<?php

/**
 * Template Name: Pagina inicio
 */
$image = get_field('imagen_de_fondo');
?>

<div class="page border-pagina">
    <?php get_template_part( 'menu' );?>
    <div class="content home">
        <div class="home__container-form">            
            <div class="home__container-form-image align-center justify-center">
                <div class="home__container-form-image__text">
                    <h2><?php the_field('titulo_formulario'); ?></h2>                    
                    <div class="accordion" id="accordion1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                + Información
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion1">
                            <div class="accordion-body">
                                <p><?php the_field('texto_home'); ?></p>
                            </div>
                            </div>
                        </div>           
                    </div>                    
                </div>
                <div class="home__container-form-image__form">
                    <div class="title-form">
                        Recopilación y denuncia sobre violaciones a los DDHH en Chile
                    </div>
                    <?php echo do_shortcode("[contact-form-7 id='49' title='Form home normal']"); ?>
                    <p><?php the_field('descripcion'); ?></p>
                </div>
                <div class="home__container-form-image__texto-resguardo">                    
                    <p><?php the_field('texto_resguardo'); ?></p>
                </div>                
            </div>
        </div>  
        <?php get_template_part( 'footer-pagina' );?>
        <div class="home__image-right" style="background-image:url('<?php echo $image['url']; ?>');">

        </div>        
    </div>    
</div>

<?php get_footer(); ?>