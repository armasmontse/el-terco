<?php 

namespace App\Providers;

class SupportServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        add_theme_support( 'post-thumbnails' );
        
        add_theme_support( 'html5', array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption' 
        ));

        add_theme_support( 'woocommerce' );

        register_sidebar( array(
            'name'          => 'Home right sidebar',
            'id'            => 'home_right_1',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="rounded">',
            'after_title'   => '</h2>',
        ) );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}