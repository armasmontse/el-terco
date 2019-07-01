import {$, w} from './constants';

export default function() {
     console.log('collapsible');
     $('.collapsible').click(function(){
         var $this = $(this);
         $this.find('.collapsible-header').toggleClass('collapsible-icon');
         $this.find('.collapsible-body').toggleClass('open');
     });
}
