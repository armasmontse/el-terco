<?php

namespace App\Providers;

class ScriptsServiceProvider
{
    protected $local = [
        'cltvo_validate_js' => 'jquery.validate.min.js',
        'cltvo_validate_translate_js' => 'messages_es.min.js'
    ];

    protected $cdn = [
        'cltvo_sticky_js' => 'http://leafo.net/sticky-kit/src/jquery.sticky-kit.js',
        'cltvo_scrollmagic_js' => '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js',
        'cltvo_scrollmagic_addindicators_js' => '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js',
        'cltvo_background_parallax_js' => 'https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js',
        'cltvo_wow' => 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js?ver=4.9.6',
        'cltvo_scrollify' => 'https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js',
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Incluye el functions.js
        add_action( 'wp_enqueue_scripts', [$this, 'enqeueScripts'] );

        // // Incluye el admin-functions.js. Descomentar para tener JS en admin (no olvidar crear el file [admin-functions.js])
        // add_action( 'admin_enqueue_scripts', 'cltvo_admin_js' );
    }

    public function enqeueScripts()
    {
        $scripts = ['jquery'];

        foreach($this->cdn as $name => $url) {
            wp_register_script( $name, $url, $scripts, false, true );
            $scripts[] = $name;
        }

        foreach($this->local as $name => $path) {
            wp_register_script( $name, get_template_directory_uri() . '/js/' . $path, $scripts, false, true );
            $scripts[] = $name;
        }

        // Se agrega functions.js
        wp_register_script( 'cltvo_functions_js', get_template_directory_uri() . '/js/functions.js', $scripts, '1.0', true );

        // Se agregan las variables de javascript.
        wp_localize_script( 'cltvo_functions_js', 'cltvo_js_vars', $this->getJavascriptVars() );

        $scripts[] = 'cltvo_functions_js';

        foreach($scripts as $script){
            wp_enqueue_script($script);
        }
    }

    public function adminEnqeueScripts()
    {
        // wp_register_script( 'cltvo_admin_functions_js', JSPATH.'admin-functions.js', array('jquery'), false, false );
        // wp_localize_script( 'cltvo_admin_functions_js', 'cltvo_js_vars', cltvo_js_vars() );

        // wp_enqueue_style('admin-styles', get_template_directory_uri() . '/css/ultraligero_admin.css' );
        // wp_enqueue_script('jquery');
        // wp_enqueue_script('cltvo_admin_functions_js');
    }

    public function getJavascriptVars()
    {
        return [
            'site_url'      => home_url('/'),
            'template_url'  => get_bloginfo('template_url'),
            'ajax_url' 	    => admin_url( 'admin-ajax.php' ),
        ];
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
