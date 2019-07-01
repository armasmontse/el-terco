<?php 

namespace App\Providers;

class AjaxServiceProvider
{
    protected $files = [];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        foreach($this->files as $file){
            $file::registerAjax();
        }
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