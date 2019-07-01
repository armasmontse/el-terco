<?php 

global $contacto;

$social = [
    'youtube',
    'facebook',
    'twitter',
    'instagram',
];

?>
<footer class="footer <?php if (is_page('eres-mayor-de-edad')): ?>footer__hidden<?php endif ?>">
     <div class="footer__container">
        <div class="footer__social">
            <ul class="flex-row-between">
                <?php foreach($social as $network): ?>
                    <?php if($contacto->social_net[$network]['url']): ?>
                        <li><a href="<?php echo $contacto->social_net[$network]['url']; ?>" target="_blank"><i class="fab fa-<?php echo $network; ?>"></i></a> </li>
                    <?php endif; ?>
                <?php endforeach; ?>
                <li><a href="mailto:<?php echo $contacto->social_net['mail']; ?>" target="_blank"><i class="fa fa-envelope"></i></a> </li>
            </ul>
        </div>
        <div class="footer__nav">
            <?php
                wp_nav_menu(array(
                    'menu'            => "footer",
                    'theme_location'  => 'footer_menu',
                    'container'       => 'nav',
                    'menu_class'      => 'footer__navbar-list',
                ));
            ?>
        </div>
        <div class="footer__contacto">
            <a class="footer__email" href="mailto:<?php echo $contacto->social_net['ventas']; ?>"><?php echo $contacto->social_net['ventas']; ?></a>
        </div>
     </div>
</footer>
