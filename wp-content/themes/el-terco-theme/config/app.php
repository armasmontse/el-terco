<?php 

return [

    'providers' => [
        App\Providers\AppServiceProvider::class,
        App\Providers\AjaxServiceProvider::class,
        App\Providers\ControllerServiceProvider::class,
        App\Providers\CustomPostTypeServiceProvider::class,
        App\Providers\FiltersServiceProvider::class,
        App\Providers\ActionsServiceProvider::class,
        App\Providers\MenuServiceProvider::class,
        App\Providers\MetaboxServiceProvider::class,
        App\Providers\ScriptsServiceProvider::class,
        App\Providers\SupportServiceProvider::class,
        App\Providers\TaxonomyServiceProvider::class,
    ],

    'special-pages' => [
        'home'  => [
            'Home',
            ''
        ],
        'puntos-de-venta'  => [
            'Puntos de venta',
            ''
        ],
        'terminos-y-condiciones'  => [
            'Terminos y condiciones',
            ''
        ],
        'contacto'  => [
            'Contacto',
            ''
        ],
        'comprar'  => [
            'Comprar',
            ''
        ],
        'tienda'  => [
            'Tienda',
            ''
        ],
        'eres-mayor-de-edad'  => [
            '¿Eres mayor de edad?',
            ''
        ],
    ],

    'special-categories' => [],

    'special-tags' => [],

];