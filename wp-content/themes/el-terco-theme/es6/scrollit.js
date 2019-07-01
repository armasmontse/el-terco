export default function () {
     $('a[href*="#"]:not([href="#"])').click(function(e) {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
               e.preventDefault();
               var target = $(this.hash);
               target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
               if (target.length) {
                    $('html, body').animate({
                         scrollTop: target.offset().top - 0
                    }, 2000);
                    return false;
               }
          }
     });
}
