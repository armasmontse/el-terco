import {$, w} from './constants';

export default function() {

    const audio = $('audio');
    const svgOn = $('.boton-mute__on');
    const svgOff = $('.boton-mute__off');

     $("#botonMute").click( function (){

        if( audio.prop('muted') ) {
            audio.prop('muted', false);
            svgOn.show();
            svgOff.hide();

            console.log('Muted false');

        } else {
            audio.prop('muted', true);
            svgOff.show();
            svgOn.hide();

            console.log('Muted true');
        } 
    });

}