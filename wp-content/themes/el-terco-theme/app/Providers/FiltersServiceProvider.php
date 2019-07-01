<?php 

namespace App\Providers;

class FiltersServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Elimina la barra de herramientas del sitio en el front
        add_filter('show_admin_bar', [$this, 'showAdminBar']);

        // if (class_exists('WOOCS') && ICL_LANGUAGE_CODE !== null) {
        //     add_filter('wp_head', function() {
        //         $lang = ICL_LANGUAGE_CODE;
        //         global $WOOCS;
        //         switch ($lang) {
        //             case 'es':
        //                 $WOOCS->current_currency = 'MXN';
        //                 $WOOCS->storage->set_val('woocs_current_currency', 'MXN');
        //                 break;
        //             case 'en':
        //                 $WOOCS->current_currency = 'USD';
        //                 $WOOCS->storage->set_val('woocs_current_currency', 'USD');
        //                 break;
        //             default:
        //                 $WOOCS->current_currency = 'MXN';
        //                 $WOOCS->storage->set_val('woocs_current_currency', 'MXN');
        //                 break;
        //         }
        //     });
        // }
    }

    public function showAdminBar()
    {
        return false;
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