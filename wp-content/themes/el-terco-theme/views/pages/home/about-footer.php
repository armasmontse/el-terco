<?php 

$gallery = get_field('footer_gallery');

?>
<!-- A b o u t   f o o t e r -->
<div class="about-footer section-scroll">

    <?php if ($gallery): ?>
        <div class="slider-footer">
            <?php foreach($gallery as $image): ?>
                <div>
                    <div class="slider-footer__box--aspect">
                        <img class="slider-footer__box--imagen" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="compra">
		<a class="boton-comprar" href="<?php echo specialPagePermalink('tienda'); ?>"><?php _e('Buy', TRANSDOMAIN); ?></a>
    </div>
    
</div>