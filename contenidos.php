<?php get_header(); ?>
<?php

/**
 * Template Name: Noticias
 */
$image = get_field('imagen');
?>

<div class="page border-pagina">    
    <?php get_template_part( 'menu' );?>
    <div class="content noticias">
          <div class="titulo-pagina-fondo">
            <h1>Noticias</h1>
          </div> 
          <div class="contenedor-ancho">
               <?php query_posts(array('post_type' => 'post','orderby' => 'date')); 
               if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink() ?>">
                         <div class="elemento-row pt-10" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">                    
                              <h2><?php the_title(); ?></h2>
                              <!-- <p><?php the_date('d.m.Y'); ?></p>  -->                   
                         </div>   
                    </a>            

               <?php endwhile; ?>
               <?php else : ?>

                    <p>No hay artículos por el momento</p>

               <?php endif; wp_reset_query(); ?>                                     
          </div>          
          <div class="contenedor-ancho">               
               <div class="difusion-articulos">
                    <h2>Difusión</h2>   
                    <ul>
                         <li><a href="https://resumen.cl/articulos/agrupacion-de-familiares-de-detenidos-desaparecidos-de-mulchen-apunta-al-estado-y-conaf-por-destruccion-de-archivos-de-sitio-de-memoria" target="_blank">[27/10/2021] Agrupación de familiares de Detenidos Desaparecidos de Mulchén apunta al Estado y Conaf por destrucción de archivos de sitio de memoria</a></li><br>
                         <li><a href="https://www.amnesty.org/es/latest/news/2021/10/chile-two-years-on-from-social-unrest-amnesty-international-presents-report-on-command-responsibility-to-national-prosecutors-office-espanol/" target="_blank">[15/10/2021] Chile: A dos años del estallido social Amnistía Internacional presenta informe sobre responsabilidad de mandos a la Fiscalía Nacional</a></li><br>
                         <li><a href="https://www.ciperchile.cl/2021/08/04/ciper-accedio-a-registros-del-poder-judicial-y-gendarmeria-al-menos-77-personas-estan-en-prision-por-delitos-asociados-a-la-revuelta/" target="_blank">[04/08/2021] CIPER accedió a registros del Poder Judicial y Gendarmería: al menos 77 personas están en prisión por delitos asociados a la revuelta</a></li><br>
                         <li><a href="https://es.witness.org/2021/01/como-una-bomba-de-tiempo-o-una-callosidad-reflexiones-sobre-el-trauma-la-resistencia-y-la-labor-de-los-derechos-humanos-durante-la-pandemia/" target="_blank">¿Cómo una bomba de tiempo o una callosidad? Reflexiones sobre el trauma, la resiliencia y la labor de los Derechos Humanos durante la pandemia</a></li><br>
                         <li><a href="https://medium.com/humanrightscenter/reflections-on-trauma-resiliency-and-human-rights-work-during-the-pandemic-like-a-ticking-time-c838775419c8" target="_blank">Reflections on trauma, resiliency, and human rights work during the pandemic</a></li>
                    </ul>
               </div>
          </div>
          <?php get_template_part( 'footer-pagina' );?>
     </div>       
</div>