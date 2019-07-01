import {$, w} from './constants';
import scrollit from './scrollit'
import initializeForms from './forms'
import slider from './slider'
import muted from './muted'
import collapsible from './collapsible'
import logoScroll from './logo-scroll'

$(document).ready(function() {

    console.log('MENU');
     var btnAbrir = $("#bolsa");
     // var btnCerrar = $(".header__close-JS");
     var menu = $(".sidebar");

     var open = false;

     btnAbrir.on("click", function() {

       // Si está abierto hay que cerrarlo.
          if(open == false) {
               console.log('view');
               menu.addClass('view');
               btnAbrir.addClass('close');
               open = true;
          } else {
               console.log('no view');
               menu.removeClass('view');
               btnAbrir.removeClass('close');
               open = false;
          }
     });

     // initializeForms();
    slider();
    scrollit();
    collapsible();
    muted();
     
     new WOW().init();

     const home = $('body.page-template-template-home');

     if(home.length){

          $.scrollify({
               section : ".section-scroll",
               interstitialSection : ".footer, .about-footer",
               sectionName: false,
               // standardScrollElements: ".about-footer",
               // scrollSpeed:    2000,
          });

    }

    logoScroll();


    // Se cierran los warnings en el click
    $("body").on("click", ".woocommerce-error", function() {
       var error = $("body").find('.woocommerce-error');
       error.hide();
   });

    $("body").on("click", ".woocommerce-message", function() {
       var mensajes = $("body").find('.woocommerce-message');
       mensajes.hide();
   });

    // --> se cierran los warnings en el click



});

w.scroll(function() {
     logoScroll();
})



w.load(() => {

    const splash = $('body.page-template-template-login');

    if(splash.length){

        var video = document.getElementsByTagName("video")[0];

        $('.splash__overlay').addClass('transition');
        setTimeout(function() {
           video.play();
        }, 1000);

        $('header').addClass('header__hidden');
        $('footer').addClass('footer__hidden');

    }


})
