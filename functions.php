<?php

    function testigo_script_enqueue() {

         /* 1. Bootstrap CSS */
         wp_enqueue_style( 
            'bootstrap',
            get_template_directory_uri() . '/css/bootstrap.min.css',
            array(),
            '5.1.1'
        );   
        wp_enqueue_style( 'testigostyle', get_template_directory_uri() . '/css/style.css', array(), 'all' );
        wp_enqueue_script( 'testigojs', get_template_directory_uri() . '/js/main.js', array(), true );             
        
        // if ( is_front_page() ) {
        //     wp_enqueue_script( 'transformandojs', get_template_directory_uri() . '/js/transformando.js', array('jquery'), null, true );
        // } elseif ( is_page_template( 'index_de.php' ) or is_page_template( 'index_en.php' ) ) {
        //     wp_enqueue_script( 'transformandojs', get_template_directory_uri() . '/js/transformando.js', array('jquery'), null, true );
        // } elseif (is_page_template('eventos.php') or is_page_template('eventos_de.php') or is_page_template('eventos_en.php') ) {
        //     wp_enqueue_script( 'eventosjs', get_template_directory_uri() . '/js/eventos.js', array('jquery'), null, true );
        //     wp_enqueue_script( 'swipeboxjs', get_template_directory_uri() . '/js/jquery.swipebox.min.js', array('jquery'), null, true );
        //     wp_enqueue_script( 'owljs', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true );
        // } else {
        //     wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );
        // }

    }        

    function testigo_setup() {
        add_theme_support( 'menus' );        
        register_nav_menu( 'primary', 'Primary Navigation' );              
		add_theme_support( 'title-tag' ); 
        add_theme_support( 'post-thumbnails' ); 
    }    

    function include_google_fonts() {
        if (!is_admin()) {
            wp_register_style('google', 'https://fonts.googleapis.com/css?family=Maven+Pro:wght@400;500;600&family=Roboto+Slab:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap&display=swap', array(), null, 'all');
            wp_enqueue_style('google');
        }
    }    

    function testigo_scripts_function() {
        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ));
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ));
        wp_enqueue_script( 'scrollReveal', get_template_directory_uri() . '/js/scrollReveal.js');
    }

    function lottie_load_js_script() {
        if( is_page(61) ) {
            wp_enqueue_script('lottie-player-js', get_template_directory_uri() . '/js/lottie.js', array('jquery'));            
            wp_enqueue_script('lottie-js', get_template_directory_uri() . '/js/start-lottie.js');                           
        }
      }      
  
        function custom_email_confirmation_validation_filter( $result, $tag ) {
        if ( 'your-email-confirm' == $tag->name ) {
                $your_email = isset( $_POST['your-email'] ) ? trim( $_POST['your-email'] ) : '';
                $your_email_confirm = isset( $_POST['your-email-confirm'] ) ? trim( $_POST['your-email-confirm'] ) : '';
            
                if ( $your_email != $your_email_confirm ) {
                $result->invalidate( $tag, "¿Estás seguro que el mail está correcto?" );
                }
            }
            
            return $result;
        }
        

        add_filter('body_class', function (array $classes) {
            if (in_array('page', $classes)) {
              unset( $classes[array_search('page', $classes)] );
            }
          return $classes;
        });
        function my_class_names($classes) {
            // add 'class-name' to the $classes array
            $classes[] = 'testigo-en-linea';
            // return the $classes array
            return $classes;
        }
         
        //Now add test class to the filter
        add_filter('body_class','my_class_names');
      
    add_action('wp_enqueue_scripts', 'testigo_script_enqueue' );
    add_action('wp_enqueue_scripts','testigo_scripts_function');    
    add_action('wp_enqueue_scripts', 'include_google_fonts');
    add_action('wp_enqueue_scripts', 'lottie_load_js_script');
    add_action( 'init', 'testigo_setup' );    
    add_filter( 'wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2 );

?>
