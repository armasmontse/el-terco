<?php

/* Template Name: Legal */ 

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="legales">
    <div>
        <div class="grid__row">
            <div class="grid__container">
                <div class="grid__col-1-8">

                <div class="legales__container">
                    <div class="legales__title">
                        <?php the_title(); ?>
                    </div>

                    <div class="legales__text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="grid__col-1-3">
                <div class="legales__image">
                    <img src="<?php echo get_thumbnail_image_url(); ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
