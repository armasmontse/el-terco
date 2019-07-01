<section class="puntos-venta">
     <div class="grid__row">
          <div class="grid__container">
               <div class="grid__col-1-8">
                    <div class="puntos-venta__container">
                        <h3 class="puntos-venta__titulo"><?php the_title(); ?></h3>
                        <h4 class="puntos-venta__subtitulo"><?php the_content(); ?></h4>

                        <?php if (have_rows('sale_points')): ?>
                        <div class="puntos-venta__collapsible">
                            <?php while(have_rows('sale_points')): the_row(); ?>
                                <div class="collapsible">

                                    <div class="collapsible-header">
                                        <h4 class="punto-estado"><?php the_sub_field('city'); ?></h4>
                                    </div>

                                    <?php if (have_rows('points')): ?>
                                    <div class="collapsible-body">
                                        <?php while(have_rows('points')): the_row(); ?>
                                            <div class="puntos-venta__content">
                                                <a class="puntos-venta__name" href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('name'); ?></a>
                                                <p class="puntos-venta__contact"><?php the_sub_field('address'); ?> <a href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a></p>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>

                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
               </div>
               <div class="grid__col-1-3">
                    <div class="puntos-venta__image">
                         <img src="<?php echo get_thumbnail_image_url(); ?>" alt="">
                    </div>
               </div>
          </div>
     </div>

</section>
