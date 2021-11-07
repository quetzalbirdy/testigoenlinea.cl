<?php get_header(); ?>


<div class="page border-pagina">    
    <?php get_template_part( 'menu' );?>
    <div class="content noticia">
            <?php
                if ( have_posts() ) :
                
                    while ( have_posts() ) :
                
                        the_post();                        
                        ?>                        
                        <article <?php post_class(); ?>>
                        
                            <header class="entry-header" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
                                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>                                
                            </header><! – .entry-header – >                            
                            <p class="post-date"><?php the_date('d.m.Y'); ?></p>
                        
                            <div class="entry-content contenedor-ancho">
                                <?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?>
                            </div><! – .entry-content – >
                        
                        </article><! – #post-## – >
                        
                        <?php                    
                
                    endwhile;
                
                else :
                    ?>
                    <article class="no-results">
                        
                        <header class="entry-header">
                            <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'my-custom-theme' ); ?></h1>						
                        </header><! – .entry-header – >
                    
                        <div class="entry-content">
                            <p><?php esc_html_e( 'It looks like nothing was found at this location.', 'my-custom-theme' ); ?></p>
                        </div><! – .entry-content – >
                    
                    </article><! – .no-results – >
                <?php
                endif;
            ?>                          
            <?php get_template_part( 'footer-pagina' );?>
    </div>    
</div>