<?php
namespace App\Modules\Admin;



class ModulesServiceProvider  extends \Illuminate\Support\ServiceProvider
{
    /**
     * Will make sure that the required modules have been fully loaded
     * @return void
     */



    public function boot()
    {
        // For each of the registered modules, include their routes and Views
        $modules = config("module.Admin");


        while (list(,$module) = each($modules)) {

            // Load the routes for each of the modules

            // Load the views
            if(is_dir(__DIR__.'/'.$module.'/Views')) {
                $this->loadViewsFrom(__DIR__.'/'.$module.'/Views', $module);
            }
        }
    }

    public function register() {}

}
