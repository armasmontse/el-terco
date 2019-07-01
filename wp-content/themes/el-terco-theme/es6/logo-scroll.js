import {$, w} from './constants';

export default function(scope) {
     
     var mass;
     var altura;
     var position;
     var lenguaje = $('.header__lenguaje');
     var logo = $('.banner__logo');
     var logoId = $('#logo_JS');

     altura = w.height() * .45 || 0;

     if (w.width() > 500) {
          mass = Math.max(100, 230-0.16*w.scrollTop()) + 'px';
          position = Math.max(-30, 48-0.16*w.scrollTop()) + 'px';
     } else {
          mass = Math.max(100, 230-0.3*w.scrollTop()) + 'px';
          position = Math.max(-26, 26-0.16*w.scrollTop()) + 'px';
     }

     var maxMass = Math.max(100, 230-0.16*altura) + 'px';

     lenguaje.css({
          'top': position
     });

     if (w.scrollTop() <= altura) {
          logoId.css({
               'width': mass
          });
     }else {
          logoId.css({
               'width': maxMass
          });
     }

     if (w.scrollTop() <= altura) {
          logo.removeClass('logo-fixed');
     }else {
          logo.addClass('logo-fixed');
     }

}
