jQuery(document).ready(function(){    
    /* 
    
        DELAY GO TO LINK

    */
    jQuery(function(){
        jQuery("#menu-container a, .menu-mobile a, .content.noticias a").click(function(evt){
            jQuery('body').addClass('leaving')   
            /* evt.preventDefault();
            var link = jQuery(this).attr("href");
            jQuery('body').addClass('leaving')            
            setTimeout(function() {
                window.location.href = link;
            }, 100); */
        });
    });


    /* jQuery("ul li a").each(function() {       
    var linkElement = jQuery(this);
    linkElement.one('mouseenter', function() {    
        StrikeThrough(0, linkElement);                                              
    })           
    jQuery(this).on('mouseleave', function() {                
        var normalText = jQuery(this);
        jQuery(this).html(normalText.text());         
        linkElement.one('mouseenter', function() {    
            StrikeThrough(0, linkElement);                                              
        })                   
    })   
            
    function StrikeThrough(index, elem) {        
        if (index < elem.text().length) {
            let element = jQuery(elem).text();
            var sToStrike = element.substr(0, index + 1);
            var sAfter = (index < (element.length - 1)) ? element.substr(index + 1, element.length - index) : "";
            jQuery(elem).html("<strike>" + sToStrike + "</strike>" + sAfter);                    
            window.setTimeout(function() {            
                StrikeThrough(index + 1, elem);    
                if (!jQuery(elem).is(":hover")) {
                    var normalText = elem;
                    elem.html(normalText.text());     
                }        
            }, 40);  
        }                                     
    }
})  */


    function initReveal() {
        ScrollReveal().reveal('.elemento-row', {container: '.page', delay: 200},);    
        ScrollReveal().reveal('.content.noticias .elemento-row', {container: '.page', delay: 200},);            
        ScrollReveal().reveal('footer', {container: '.page', delay: 200},);    
        ScrollReveal().reveal('.elemento-row p', {container: '.page', delay: 400},);             
        ScrollReveal().reveal('.punto1', {container: '.page', delay: 200},); 
        ScrollReveal().reveal('.punto2', {container: '.page', delay: 200},); 
        ScrollReveal().reveal('.punto3', {container: '.page', delay: 200},); 
        ScrollReveal().reveal('.punto4', {container: '.page', delay: 200},); 
        ScrollReveal().reveal('.guia-portada', {container: '.page', delay: 200},); 
        ScrollReveal().reveal('.guia-portada h2', {container: '.page', delay: 350},);     
        ScrollReveal().reveal('.texto__color-relleno', {container: '.page', delay: 350},);     
        ScrollReveal().reveal('.grid-metodologia h2', {container: '.page', delay: 500},);     
        ScrollReveal().reveal('h3', {container: '.page', delay: 200},); 
        ScrollReveal().reveal('.content ul', {container: '.page', delay: 200},);       
        ScrollReveal().reveal('.content.guia p', {container: '.page', delay: 200},);       
        ScrollReveal().reveal('.content.metodologia p', {container: '.page', delay: 200},);       
        ScrollReveal().reveal('.content.politica-privacidad p', {container: '.page', delay: 200},);       
        ScrollReveal().reveal('.content.home .home__container-form-image__texto-resguardo p', {container: '.page', delay: 200},); 
    }
          
    initReveal();    
    
    /* agregar nombre texto */
    jQuery("#adjuntar-archivo").change(function() {
        jQuery(".nombre-archivo").text(this.files[0].name);
    });   
    
    /* cambiar altura textarea */
    jQuery("textarea").on('focus', function() {
        jQuery(this).addClass('textarea-big')
    })
    jQuery("textarea").on('blur', function() {        
        if (!jQuery.trim(this.value).length) {            
            jQuery("textarea").removeClass('textarea-big')
        }        
    })
    
    /* abrir - cerrar menus */
    jQuery('.menu-secundario ul li a').on('click', function() {                
        jQuery('.menu-container.menu-secundario').toggleClass('desplegar-menu');               
    })
    jQuery('.boton-indice-mobile, .icono-cerrar-menu').on('click', function() {                
        jQuery('.menu-container.menu-secundario').toggleClass('desplegar-menu');                
    })
    jQuery('.menu-mobile .icono-toggle-menu').on('click', function() {                
        jQuery('.menu-mobile').toggleClass('desplegar-menu');                
    })

    /* mostrar en que parte del indice estoy parado */
    jQuery('.page').on('scroll', function() {
        jQuery('.menu-secundario ul li a').each(function(index) {
            if (jQuery('.guia > div:nth-child(' + (index+2) + ')').offset().top - 50 < 0 && jQuery('.guia > div:nth-child(' + (index+2) + ')').offset().top > -(jQuery('.guia > div:nth-child(' + (index+2) + ')').outerHeight())) {
                jQuery('.menu-secundario ul li:nth-child(' + index + ')').children('a').addClass('elemento-seleccionado')
            } else {
                jQuery('.menu-secundario ul li:nth-child(' + index + ')').children('a').removeClass('elemento-seleccionado')
            }
        })
    })
    
    /* animar ir a div */
    jQuery('a[href^="#"]').on('click', function(event) {
    var distanceFromTop = document.getElementsByClassName('page')[0].scrollTop;
    var target = jQuery(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            jQuery('.page').stop().animate({
                scrollTop: distanceFromTop + target.offset().top 
            }, 1000, 'swing');
        }
    });
  });
  