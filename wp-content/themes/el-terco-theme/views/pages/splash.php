<?php

$login = specialPage('eres-mayor-de-edad');

$videos = [];

if(have_rows('videos', $login)){
    while (have_rows('videos', $login)) { the_row('videos');
        $videos[] = get_sub_field('video');
    }
}

$video = null;

if(!empty($videos)){
    $video = $videos[array_rand($videos)];
}
global $contacto;
?>
<div class="splash__row">
    <div class="splash__container">
        <div class="splash__col-1-8">

            <a href="<?php echo $contacto->social_net['youtube']['url'] ? $contacto->social_net['youtube']['url'] : ''; ?>" target="_blank">
                <div class="splash__cont-video">
                    <?php if($video): ?>
                        <video id="videoSplash" class="splash__video visible-desktop" height="100%" preload="auto" muted loop>
                            <?php foreach( $video as $format => $attr ): ?>
                                <?php if($attr): ?>
                                    <source src="<?php echo esc_url( $attr['url'] ); ?>" type="video/<?php echo esc_attr( $format ); ?>">
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <img src="<?php echo THEMEURL ?>/images/splash/imageVideo.png" alt="Captura de pantalla de video no soportado">
                            <?php _e('Your browser do not support HTML5 video', TRANSDOMAIN)?>
                        </video>
                        <div class="splash__overlay desktop"></div>
                    <?php endif; ?>
                </div>
            </a>

            <div class="splash__cont-logo wow fadeInUp" data-wow-iteration="1" data-wow-duration="2s"  data-wow-delay="1.6s">
                <img class="splash__logo" src="<?php echo THEMEURL ?>/images/splash/logo.png" alt="El Terco mezcal">
            </div>
            <div class="splash__legales wow fadeIn" data-wow-duration="2s" data-wow-iteration="1" data-wow-delay="3s">
                <h3 class="splash-legales"><?php _e('Are you adult?', TRANSDOMAIN)?></h3>
                <div class="splash-respuesta">
                    <form id="acceptForm" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                        <input type="hidden" name="action" value="set_auth">
                        <input type="hidden" name="referer" value="<?php echo get_query_param('http_referer') ? esc_url( get_query_param('http_referer') ) : ''; ?>">
                        <a href="<?php echo BLOGURL ?>/home" onclick="event.preventDefault(); document.getElementById('acceptForm').submit();"> <?php _e('YES', TRANSDOMAIN)?> </a>
                    </form>
                    <a href="http://alcoholinformate.org.mx/consumoresponsable/" target="_blank"> <?php _e('NO', TRANSDOMAIN)?> </a>
                </div>
            </div>
        </div>
        <div class="splash__col-1-3">
            <!-- <div class="splash__background wow bounceInRight"  data-wow-duration="2s" data-wow-delay="1s"></div> -->
            <!-- <div class="splash__parallax"  data-parallax="scroll" data-image-src="<?php //echo THEMEURL ?>/images/splash/textura.JPG"></div> -->
            <div class="splash__image wow fadeInRight"  data-wow-duration="2s" data-wow-delay="1.2s">
                    <?php echo the_post_thumbnail(); ?>
                <div class="splash__overlay mobile"></div>
            </div>
        </div>
    </div>
</div>
