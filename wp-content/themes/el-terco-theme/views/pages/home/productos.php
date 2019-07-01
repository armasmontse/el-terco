<?php 

$args = [
    'posts_per_page' => -1,
    'post_type' => 'product',
    // 'suppress_filters' => true
];

$query = new WP_Query($args);

global $sitepress;

// dump(pluck($query->posts, 'ID'));

if($query->have_posts()):

    print_responsive_images_styles($query);

    ?>
    
    <!-- Con la imagen de producto como background -->
    <!-- L i s t a   p r o d u c t o s -->
    <?php $i = 1; while($query->have_posts()): $query->the_post(); ?>

        <?php $original_id = icl_object_id(get_the_ID(), 'product', '', 'es'); ?>
        
        <?php if(get_field('home_image_responsive', $original_id) && get_field('home_image', $original_id)): ?>
            
            <!-- Producto -->
            <div class="lista-productos section-scroll">	
                <div class="producto movil-<?php the_ID(); ?> <?php if ($i % 2 == 0): echo 'left' ?><?php endif ?>" style="background-image: url('<?php echo get_field('home_image', $original_id)['url']; ?>');">
                    
                    <div class="producto__flex <?php if ($i % 2 == 0): echo 'reverse' ?><?php endif ?> ">

                        <div class="producto__box--foto">
                            
                        </div>

                        <div class="producto__box--detalles">
                            <div class="producto__box--nombre color--<?php echo $i % 3; ?>">
                                <?php the_title(); ?>
                            </div>
                            <div class="producto__box--descripcion">
                                <?php the_field('home_description'); ?>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="producto__cenefa" style="background-image: url('<?php echo get_field('tape', $original_id)['url']; ?>');">
                        <div class="producto__box--palabras color--<?php echo $i % 3; ?>">
                            <?php $terms = get_terms_of_post(0, 'product_tag'); ?>
                            <?php if(is_array($terms)): ?>
                                <?php
                                
                                echo implode(array_map(function ($term) {
                                    return $term->name;
                                }, $terms), ' | '); 
                                
                                ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php $i++; endif; ?>

    <?php endwhile; ?>

<?php endif; wp_reset_postdata(); ?>
