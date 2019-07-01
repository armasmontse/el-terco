<?php 

/* Template Name: Home */ 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();

?>
	
	<!-- H O M E -->
    <section class="home">

        <?php // get_template_part('views/general/atomos'); ?>

        <?php get_template_part('views/pages/home/banner'); ?>

        <?php get_template_part('views/pages/home/slider-detalles'); ?>
        
        <?php get_template_part('views/pages/home/productos'); ?>

        <?php get_template_part('views/pages/home/about-footer'); ?>

        <?php get_template_part('views/pages/home/boton-mute'); ?>
	
    </section>

<?php 

endwhile; endif;

get_footer(); ?>