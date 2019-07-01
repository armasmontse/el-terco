<?php 

$gallery = get_field('gallery');

?>
<!-- A b o u t -->
<div class="about section-scroll" id="about">

    <?php if ($gallery): ?>
        <!-- Slider -->
        <div class="slider">
            <?php foreach($gallery as $image): ?>
                <div>
                    <div class="slider__box--aspect">
                        <img class="slider__box--imagen" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

	<!-- Detalles -->
	<div class="detalles">
		<div class="detalles__flex">
			<?php if(have_rows('details')): while(have_rows('details')): the_row(); ?>
	            <div class="detalles__box">
	                <img class="detalles__box--icono" src="<?php echo get_sub_field('icon')['url']; ?>" alt="">
	                <p class="detalles__box--caracteristica"><?php echo get_sub_field('description'); ?></p>
	            </div>
			<?php endwhile; endif; ?>
		</div>
	</div>

</div>
