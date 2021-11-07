<?php get_header(); ?>
<?php

/**
 * Template Name: Guia
 */
?>

<div class="page border-pagina">    
    <?php get_template_part( 'menu' );?>
    <button class="boton-indice-mobile">
        Indice
    </button>
    <div class="menu-container menu-secundario flex-c menu-abierto">
        <div class="icono-cerrar-menu abierto"><!-- Minimizar --></div>
        <div class="menu-container__logo-menu">                               
            <h3>Índice</h3>                 
            <ul>
                <li><a href="#registrar">1.Registrar</a></li>
                <li><a href="#recopilar-resguardar">2.Recopilar y resguardar</a></li>
                <li><a href="#archivar">3.Archivar</a></li>
                <li><a href="#verificar">4.Verificar</a></li>
                <li><a href="#transferir">5.Transferir</a></li>
                <li><a href="#publicar">6.Publicar</a></li>
                <li><a href="#tipos-de-evidencia">7.Tipos de evidencia</a></li>
                <li><a href="#trabajar-imagenes-traumaticas">8.Trabajar con imágenes traumáticas</a></li>
                <li><a href="#cifrado">9.El cifrado</a></li>
                <li><a href="#seguridad-digital">10.Seguridad digital</a></li>
                <li><a href="#colaboradores">Colaboradores</a></li>
            </ul>
        </div>
    </div>
    <div class="content guia menu-abierto">
        <div class="titulo-pagina-fondo">
            <h1><?php the_field('titulo_guia', false, false); ?></h1>  
        </div> 
        <div class="contenedor-ancho">
            <div class="texto-intro-guia">
                <?php the_field('texto_intro_guia', false, false); ?>  
            </div>
        </div>
        <!-- 

            REGISTRAR

         -->
        <div class="guia-contenedor guia-registrar" id="registrar">
            <div class="guia-portada">
                <h2>Registrar</h2>
                <div id="animacion-registrar"></div>
            </div>
            <div class="contenedor-ancho">
                <p><?php the_field('texto_introductorio_registrar', false, false); ?></p>
                <h3>Antes de registrar</h3>
                <div class="contenedor-row-wrap">
                    <div class="elemento-row pt-10"><?php the_field('antes_de_registrar_1', false, false); ?></div>
                    <div class="elemento-row pt-10"><?php the_field('antes_de_registrar_2', false, false); ?></div>
                    <div class="elemento-row pt-10"><?php the_field('antes_de_registrar_3', false, false); ?></div>
                    <div class="elemento-row pt-10"><?php the_field('antes_de_registrar_4', false, false); ?></div>
                    <div class="elemento-row pt-10"><?php the_field('antes_de_registrar_5', false, false); ?></div>
                    <div class="elemento-row pt-10"><?php the_field('antes_de_registrar_6', false, false); ?></div>
                    <div class="elemento-row pt-10"><?php the_field('antes_de_registrar_7', false, false); ?></div>
                    <div class="elemento-row pt-10"><?php the_field('antes_de_registrar_8', false, false); ?></div>
                    <div class="elemento-row pt-10"><?php the_field('antes_de_registrar_9', false, false); ?></div>
                    <div class="elemento-row pt-10"><?php the_field('antes_de_registrar_10', false, false); ?></div>
                </div>
                <h3>Recuerda</h3>
                <div class="mt-20">
                    <?php the_field('recuerda_1', false, false); ?>   
                </div>  
                <h3>Al momento de registrar</h3>  
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-45 p-10"><?php the_field('al_registrar_1', false, false); ?></div>
                    <div class="elemento-row w-45 p-10"><?php the_field('al_registrar_2', false, false); ?></div>
                    <div class="elemento-row w-45 p-10"><?php the_field('al_registrar_3', false, false); ?></div>
                    <div class="elemento-row w-45 p-10"><?php the_field('al_registrar_4', false, false); ?></div>
                    <div class="elemento-row flex-c text-left w-95 align-start p-10"><?php the_field('al_registrar_5', false, false); ?></div>
                    <div class="elemento-row flex-c text-left w-95 align-start p-10"><?php the_field('al_registrar_6', false, false); ?></div>                
                </div>
                <h3>Sobre las tomas</h3>  
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-45 flex-c"><h4>Tiempo</h4><div><?php the_field('sobre_las_tomas_tiempo', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c"><h4>Evita</h4><div><?php the_field('sobre_las_tomas_evita', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c"><h4>Contexto</h4><div><?php the_field('sobre_las_tomas_contexto', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c"><h4>Formato</h4><div><?php the_field('sobre_las_tomas_formato', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c"><h4>Tipos</h4><div><?php the_field('sobre_las_tomas_tipos', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c"><h4>Detalles</h4><div><?php the_field('sobre_las_tomas_detalles', false, false); ?></div></div>                
                </div>
                <div class="mt-20">
                    <?php the_field('sobre_las_tomas_info_extra', false, false); ?>   
                </div> 
            </div>
        </div>
        <!-- 

            RECOPILAR  

         -->
        <div class="guia-contenedor  guia-recopilar-resguardar" id="recopilar-resguardar">
            <div class="guia-portada">
                <h2>Recopilar y resguardar</h2>
                <div id="animacion-recopilar-resguardar"></div>
            </div>
            <div class="contenedor-ancho">
                <p><?php the_field('texto_introductorio_recopilar', false, false); ?></p>
                <h3>RECOPILACIÓN DESDE REDES SOCIALES</h3>
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('recopilacion_rrss_1', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('recopilacion_rrss_2', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('recopilacion_rrss_3', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('recopilacion_rrss_4', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('recopilacion_rrss_5', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('recopilacion_rrss_6', false, false); ?></div>      
                </div>
                <h3>RECOPILACIÓN DESDE DISPOSITIVOS</h3>
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('recopilacion_dispositivos_1', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('recopilacion_dispositivos_2', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('recopilacion_dispositivos_3', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('recopilacion_dispositivos_4', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('recopilacion_dispositivos_5', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('recopilacion_dispositivos_6', false, false); ?></div>      
                </div>
            </div>
        </div>
        <!-- 

            ARCHIVAR

         -->
        <div class="guia-contenedor  guia-archivar" id="archivar">
            <div class="guia-portada">
                <h2>Archivar</h2>
                <div id="animacion-archivar"></div>
            </div>
            <div class="contenedor-ancho">
                <h3>Paso a paso</h3>
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('paso_a_paso_1', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('paso_a_paso_2', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('paso_a_paso_3', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('paso_a_paso_4', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('paso_a_paso_5', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('paso_a_paso_6', false, false); ?></div>      
                </div>
                <h3>HERRAMIENTAS PARA RECOPILAR Y ARCHIVAR MATERIAL</h3>  
                <p>* selecciona una para abrir el link</p>
                <div class="contenedor-row-wrap">
                    <a href="<?php the_field('link_herramienta_1', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('nombre_herramienta_1', false, false); ?></h4><div><?php the_field('texto_herramienta_1', false, false); ?></div></a>
                    <a href="<?php the_field('link_herramienta_2', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('nombre_herramienta_2', false, false); ?></h4><div><?php the_field('texto_herramienta_2', false, false); ?></div></a>
                    <a href="<?php the_field('link_herramienta_3', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('nombre_herramienta_3', false, false); ?></h4><div><?php the_field('texto_herramienta_3', false, false); ?></div></a>
                    <a href="<?php the_field('link_herramienta_4', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('nombre_herramienta_4', false, false); ?></h4><div><?php the_field('texto_herramienta_4', false, false); ?></div></a>
                    <a href="<?php the_field('link_herramienta_5', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('nombre_herramienta_5', false, false); ?></h4><div><?php the_field('texto_herramienta_5', false, false); ?></div></a>
                    <a href="<?php the_field('link_herramienta_6', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('nombre_herramienta_6', false, false); ?></h4><div><?php the_field('texto_herramienta_6', false, false); ?></div></a>                
                </div>
            </div>
        </div>
        <!-- 

            VERIFICAR

         -->
        <div class="guia-contenedor  guia-verificar" id="verificar">
            <div class="guia-portada">
                <h2>Verificar</h2>
                <div id="animacion-verificar"></div>
            </div>
            <div class="contenedor-ancho">
                <p><?php the_field('texto_introductorio_verificar', false, false); ?></p>
                <h3>AL MOMENTO DE VERIFICAR, RECUERDA:</h3>
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('momento_de_verificar_1', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('momento_de_verificar_2', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('momento_de_verificar_3', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('momento_de_verificar_4', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('momento_de_verificar_5', false, false); ?></div>
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('momento_de_verificar_6', false, false); ?></div>      
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('momento_de_verificar_7', false, false); ?></div>      
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('momento_de_verificar_8', false, false); ?></div>      
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('momento_de_verificar_9', false, false); ?></div>      
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('momento_de_verificar_10', false, false); ?></div>      
                    <div class="elemento-row w-45 flex-c pt-10"><?php the_field('momento_de_verificar_11', false, false); ?></div>      
                </div>
                <h3>Algunas preguntas para la verificación:</h3>
                <?php the_field('preguntas_verificacion', false, false); ?>
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-100"><p><?php the_field('info_impacto_riesgo', false, false); ?></p></div>
                </div>     
                <h3>HERRAMIENTAS PARA LA VERIFICACIÓN</h3>  
                <p>* selecciona una para abrir el link</p>
                <div class="contenedor-row-wrap herramientas-verificacion">
                    <div class="elemento-row flex-c"><h4><?php the_field('herramientas_verificacion_nombre_1', false, false); ?></h4><?php the_field('herramientas_verificacion_texto_1', false, false); ?></div>
                    <a href="<?php the_field('herramientas_verificacion_link_2', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramientas_verificacion_nombre_2', false, false); ?></h4><div><?php the_field('herramientas_verificacion_texto_2', false, false); ?></div></a>
                    <a href="<?php the_field('herramientas_verificacion_link_3', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramientas_verificacion_nombre_3', false, false); ?></h4><div><?php the_field('herramientas_verificacion_texto_3', false, false); ?></div></a>
                    <a href="<?php the_field('herramientas_verificacion_link_4', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramientas_verificacion_nombre_4', false, false); ?></h4><div><?php the_field('herramientas_verificacion_texto_4', false, false); ?></div></a>
                    <a href="<?php the_field('herramientas_verificacion_link_5', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramientas_verificacion_nombre_5', false, false); ?></h4><div><?php the_field('herramientas_verificacion_texto_5', false, false); ?></div></a>
                    <a href="<?php the_field('herramientas_verificacion_link_6', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramientas_verificacion_nombre_6', false, false); ?></h4><div><?php the_field('herramientas_verificacion_texto_6', false, false); ?></div></a>                
                    <a href="<?php the_field('herramientas_verificacion_link_7', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramientas_verificacion_nombre_7', false, false); ?></h4><div><?php the_field('herramientas_verificacion_texto_7', false, false); ?></div></a>                
                </div>      
                <h3>A CONSIDERAR:</h3>   
                <?php the_field('a_considerar_verificacion', false, false); ?>  
            </div>          
        </div>
        <!-- 

            TRANSFERIR

         -->
        <div class="guia-contenedor  guia-transferir" id="transferir">
            <div class="guia-portada">
                <h2>Transferir</h2>
                <div id="animacion-transferir"></div>
            </div>
            <div class="contenedor-ancho">
                <h3>Almacenamiento</h3>  
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-45 flex-c pt-30<"><h4><?php the_field('transferencia_en_linea', false, false); ?></h4><div><?php the_field('almacenamiento_texto_1', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c pt-30<"><h4><?php the_field('transferencia_directa', false, false); ?></h4><div><?php the_field('almacenamiento_texto_2', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c pt-30<"><h4><?php the_field('transferencia_fisica', false, false); ?></h4><div><?php the_field('almacenamiento_texto_3', false, false); ?></div></div>                    
                </div>
                <h3>Servicios</h3>  
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-45 flex-c pt-30<"><h4><?php the_field('transferencia_en_linea', false, false); ?></h4><div><?php the_field('servicios_texto_1', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c pt-30<"><h4><?php the_field('transferencia_directa', false, false); ?></h4><div><?php the_field('servicios_texto_2', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c pt-30<"><h4><?php the_field('transferencia_fisica', false, false); ?></h4><div><?php the_field('servicios_texto_3', false, false); ?></div></div>                    
                </div>
                <h3>Herramientas</h3>  
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-45 flex-c pt-30<"><h4><?php the_field('transferencia_en_linea', false, false); ?></h4><div><?php the_field('herramientas_texto_1', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c pt-30<"><h4><?php the_field('transferencia_directa', false, false); ?></h4><div><?php the_field('herramientas_texto_2', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c pt-30<"><h4><?php the_field('transferencia_fisica', false, false); ?></h4><div><?php the_field('herramientas_texto_3', false, false); ?></div></div>                    
                </div>
                <h3>Consideraciones</h3>  
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-45 flex-c pt-30<"><h4><?php the_field('transferencia_en_linea', false, false); ?></h4><div><?php the_field('consideraciones_texto_1', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c pt-30<"><h4><?php the_field('transferencia_directa', false, false); ?></h4><div><?php the_field('consideraciones_texto_2', false, false); ?></div></div>
                    <div class="elemento-row w-45 flex-c pt-30<"><h4><?php the_field('transferencia_fisica', false, false); ?></h4><div><?php the_field('consideraciones_texto_3', false, false); ?></div></div>                    
                </div>
            </div>
        </div>
        <!-- 

            PUBLICAR

         -->
        <div class="guia-contenedor  guia-publicar" id="publicar">
            <div class="guia-portada">
                <h2>Publicar</h2>
                <div id="animacion-publicar"></div>
            </div>
            <div class="contenedor-ancho">
                <p><?php the_field('texto_intro_publicar', false, false); ?></p>
                <h3>1. Ética y privacidad</h3>  
                <?php the_field('1_etica_y_privacidad', false, false); ?>
                <h3>2. Anonimato</h3>  
                <?php the_field('2_anonimato', false, false); ?>
                <h3>3. Plataformas</h3>  
                <?php the_field('3_plataformas', false, false); ?>
                <h3>4. Al publicar</h3>  
                <?php the_field('4_al_publicar', false, false); ?>
                <hr>
                <?php the_field('texto_final_publicar', false, false); ?>
            </div>            
        </div>
        <!-- 

            TIPO DE EVIDENCIA
            
         -->
        <div class="guia-contenedor  guia-tipos-de-evidencia" id="tipos-de-evidencia">
            <div class="guia-portada">
                <h2>Tipos de evidencia</h2>
                <div id="animacion-tipos-de-evidencia"></div>
            </div>
            <div class="contenedor-ancho">
                <div class="grafica-guia">
                    <img src="<?php echo get_template_directory_uri().'/images/graficas/TIPOSDEEVIDENCIA.png'; ?>" alt="">
                </div>
                <h3>1. Evidencia</h3>  
                <p><?php the_field('01_evidencia', false, false); ?></p>
                <h3>2. Fuentes de evidencia</h3>  
                <p><?php the_field('02_fuentes_de_evidencia', false, false); ?></p>
                <h3>3. Objetivos de la prueba</h3>  
                <p><?php the_field('03_objetivos_de_la_prueba', false, false); ?></p>
                <h3>4. Contexto</h3>  
                <p><?php the_field('04_contexto', false, false); ?></p>
                <hr>
                <h3>Tipos de evidencia que grafican el "qué ocurrió"</h3>  
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-100 text-left justify-start"><?php the_field('tipos_de_evidencia_que', false, false); ?></div>
                </div>  
                <h3>Tipos de evidencias que grafican el "quién y cómo"</h3>  
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-100 text-left justify-start"><?php the_field('tipos_de_evidencia_quien_y_como', false, false); ?></div>
                </div>  
                <div class="contenedor-row-wrap">
                    <div class="elemento-row w-100 text-left justify-startk d-block p-10"><?php the_field('recuerda_evidencia', false, false); ?></div>
                </div>  
                <h3>¿DE QUÉ FORMAS PUEDE SER UTILIZADA LA EVIDENCIA?</h3>  
                <div class="contenedor-row-wrap">    
                    <div class="elemento-row w-45 flex-c pt-30<"><h4>Prueba principal</h4><div><?php the_field('uso_evidencia_prueba_principal', false, false); ?></div></div>                
                    <div class="elemento-row w-45 flex-c pt-30<"><h4>Presunta evidencia</h4><div><?php the_field('uso_evidencia_presunta', false, false); ?></div></div>                
                    <div class="elemento-row w-45 flex-c pt-30<"><h4>Evidencia corroborativa</h4><div><?php the_field('uso_evidencia_corroborativa', false, false); ?></div></div>                
                    <div class="elemento-row w-45 flex-c pt-30<"><h4>Prueba inferencial</h4><div><?php the_field('uso_evidencia_prueba_inferencial', false, false); ?></div></div>                
                    <div class="elemento-row w-45 flex-c pt-30<"><h4>Prueba de carácter</h4><div><?php the_field('uso_evidencia_prueba_caracter', false, false); ?></div></div>                
                    <div class="elemento-row w-45 flex-c pt-30<"><h4>Prueba exulpatoria</h4><div><?php the_field('uso_evidencia_prueba_exculpatoria', false, false); ?></div></div>                
                    <div class="elemento-row w-45 flex-c pt-30<"><h4>Aviso de evidencia</h4><div><?php the_field('uso_evidencia_aviso_evidencia', false, false); ?></div></div>                
                    <div class="elemento-row w-45 flex-c pt-30<"><h4>Evidencia contextual</h4><div><?php the_field('uso_evidencia_contextual', false, false); ?></div></div>                                                      
                </div>
            </div>
        </div>
        <!-- 

            IMÁGENES TRAUMÁTICAS

         -->
        <div class="guia-contenedor  guia-trabajar-imagenes-traumaticas" id="trabajar-imagenes-traumaticas">
            <div class="guia-portada">
                <h2>Trabajar con imágenes traumáticas</h2>
                <div id="animacion-trabajar-imagenes-traumaticas"></div>
            </div>
            <div class="contenedor-ancho">
                <?php the_field('imagenes_traumaticas_texto_intro', false, false); ?>
            </div>
        </div>
        <!-- 

            EL CIFRADO

         -->
        <div class="guia-contenedor guia-cifrado" id="cifrado">
            <div class="guia-portada">
                <h2>El cifrado</h2>
                <div id="animacion-cifrado"></div>
            </div>
            <div class="contenedor-ancho">
                <p><?php the_field('texto_intro_cifrado', false, false); ?></p>
                <h3>Tipos de cifrado</h3>
                <div class="contenedor-row-wrap">    
                    <div class="elemento-row w-45 flex-c pt-30<"><h4>Cifrado de disco completo</h4><div><?php the_field('tipo_cifrado_disco_completo', false, false); ?></div></div>                
                    <div class="elemento-row w-45 flex-c pt-30<"><h4>Cifrado desde el sistema operativo</h4><div><?php the_field('tipo_cifrado_sistema_operativo', false, false); ?></div></div>                
                    <div class="elemento-row w-45 flex-c pt-30<"><h4>Cifrado en dispositivos móviles</h4><div><?php the_field('tipo_cifrado_dispositivos_moviles', false, false); ?></div></div>                
                    <div class="elemento-row w-45 flex-c pt-30<"><h4>Cifrado de archivos individuales</h4><div><?php the_field('tipo_cifrado_archivos_individuales', false, false); ?></div></div>                                                                                       
                </div>
                <h3>HERRAMIENTAS PARA EL CIFRADO</h3>  
                <p>* selecciona una para abrir el link</p>
                <div class="contenedor-row-wrap">
                    <a href="<?php the_field('herramienta_cifrado_gpg4win_link', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_cifrado_gpg4win_titulo', false, false); ?></h4><div><?php the_field('herramienta_cifrado_gpg4win_texto', false, false); ?></div></a>
                    <a href="<?php the_field('herramienta_cifrado_filevault_link', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_cifrado_filevault_titulo', false, false); ?></h4><div><?php the_field('herramienta_cifrado_filevault_texto', false, false); ?></div></a>
                    <a href="<?php the_field('herramienta_cifrado_bitlocker_link', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_cifrado_bitlocker_titulo', false, false); ?></h4><div><?php the_field('herramienta_cifrado_bitlocker_texto', false, false); ?></div></a>
                    <a href="<?php the_field('herramienta_cifrado_gpgtools_link', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_cifrado_gpgtools_titulo', false, false); ?></h4><div><?php the_field('herramienta_cifrado_gpgtools_texto', false, false); ?></div></a>
                    <a href="<?php the_field('herramienta_cifrado_android_privacy_guard_apg_link', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_cifrado_android_privacy_guard_apg_titulo', false, false); ?></h4><div><?php the_field('herramienta_cifrado_android_privacy_guard_apg_text', false, false); ?></div></a>                    
                </div>
            </div>
        </div>
        <!-- 

            SEGURIDAD DIGITAL

         -->
        <div class="guia-contenedor  guia-seguridad-digital" id="seguridad-digital">
            <div class="guia-portada">
                <h2>Seguridad digital</h2>
                <div id="animacion-seguridad-digital"></div>
            </div>
            <div class="contenedor-ancho">
                <p><?php the_field('seguridad_digital_texto_intro', false, false); ?></p>
                <h3>Recuerda siempre</h3>
                <?php the_field('seguridad_digital_recuerda', false, false); ?>
                <h3>Herramientas de seguridad digital</h3>
                <p>* selecciona una para abrir el link</p>
                <div class="contenedor-row-wrap">
                    <a href="<?php the_field('herramienta_seguridad_digital_link_1', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_1', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_1', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_2', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_2', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_2', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_3', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_3', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_3', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_4', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_4', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_4', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_5', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_5', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_5', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_6', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_6', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_6', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_7', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_7', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_7', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_8', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_8', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_8', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_9', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_9', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_9', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_10', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_10', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_10', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_11', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_11', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_11', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_12', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_12', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_12', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_13', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_13', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_13', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_14', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_14', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_14', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_15', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_15', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_15', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_16', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_16', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_16', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_17', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_17', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_17', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_18', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_18', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_18', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_19', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_19', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_19', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_20', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_20', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_20', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_21', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_21', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_21', false, false); ?></div></a>                                      
                    <a href="<?php the_field('herramienta_seguridad_digital_link_22', false, false); ?>" target="_blank" class="elemento-row flex-c"><h4><?php the_field('herramienta_seguridad_digital_titulo_22', false, false); ?></h4><div><?php the_field('herramienta_seguridad_digital_texto_22', false, false); ?></div></a>                                      
                </div>
                <?php the_field('herramienta_seguridad_texto_final', false, false); ?>
            </div>
        </div>

        <!-- 

            COLABORADORES

         -->
         <div class="guia-contenedor  guia-colaboradores" id="colaboradores">
            <div class="guia-portada">
                <h2>Colaboradores</h2>                
            </div>
            <div class="contenedor-ancho">
                <h3>Con el apoyo de</h3>
                <div class="imagenes-colaboradores">
                    <a href="https://www.digitaldefenders.org/es/bienvenida/"><img src="<?php echo get_template_directory_uri().'/images/colaboradores/digital-defenders.png'; ?>" alt=""></a>
                    <a href="https://www.witness.org/"><img src="<?php echo get_template_directory_uri().'/images/colaboradores/witness.png'; ?>" alt=""></a>
                </div>
            </div>
        </div>
        <?php get_template_part( 'footer-pagina' );?>
    </div>
</div>
<script>
    var elemAnim = ['animacion-registrar', 'animacion-recopilar-resguardar', 'animacion-archivar', 'animacion-verificar', 'animacion-transferir', 'animacion-publicar', 'animacion-tipos-de-evidencia', 'animacion-trabajar-imagenes-traumaticas', 'animacion-cifrado', 'animacion-seguridad-digital'];
    /* for (var i = 0;i < elemAnim.length;i++) {    
        let variableName = elemAnim[i].split('-').join('').toString();    
        lottie.loadAnimation({
            container: document.getElementById(elemAnim[i].toString()), // Required
            animationData: Object.keys({variableName:0})[0],                
            renderer: 'svg', // Required
            loop: true, // Optional
            autoplay: true, // Optional    
        });
    } */
       
    lottie.loadAnimation({
        container: document.getElementById('animacion-archivar'), // Required
        animationData: animacionarchivar,    
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional 
    }) ;
    
    lottie.loadAnimation({
        container: document.getElementById('animacion-registrar'), // Required
        animationData: animacionregistrar,    
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional    
    }) 
    lottie.loadAnimation({
        container: document.getElementById('animacion-recopilar-resguardar'), // Required
        animationData: animacionrecopilarresguardar,    
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional    
    })  
    lottie.loadAnimation({
        container: document.getElementById('animacion-verificar'), // Required
        animationData: animacionverificar,    
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional    
    })  
    lottie.loadAnimation({
        container: document.getElementById('animacion-transferir'), // Required
        animationData: animaciontransferir,    
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional    
    })    
    lottie.loadAnimation({
        container: document.getElementById('animacion-publicar'), // Required
        animationData: animacionpublicar,    
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional    
    })  
    lottie.loadAnimation({
        container: document.getElementById('animacion-tipos-de-evidencia'), // Required
        animationData: animaciontiposdeevidencia,    
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional    
    })  
    lottie.loadAnimation({
        container: document.getElementById('animacion-trabajar-imagenes-traumaticas'), // Required
        animationData: animaciontrabajarimagenestraumaticas,    
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional    
    })  
    lottie.loadAnimation({
        container: document.getElementById('animacion-cifrado'), // Required
        animationData: animacioncifrado,    
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional    
    })  
    lottie.loadAnimation({
        container: document.getElementById('animacion-seguridad-digital'), // Required
        animationData: animacionseguridaddigital,    
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional    
    })  
    /* lottie.loadAnimation({
        container: document.getElementById('animacion-recopilar-resguardar'), // Required
        animationData: animacionrecopilarresguardar,    
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional    
    })   */
</script>