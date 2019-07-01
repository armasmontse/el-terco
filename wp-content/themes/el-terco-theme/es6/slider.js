import {$, w} from './constants';

export default function() {

    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        dots: false,
        arrows: false,
    });

    $('.slider-footer').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        dots: false,
        arrows: false,
    });

}
