<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;


class ModuleCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:create {controller?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Module Create Etmek icin ';


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }



    /**
     * Execute the console command.
     *
     * @return mixed
     */


    public function handle()
    {
        //
        if ($controller = $this->argument('controller')) {

            $directories = listFolderFiles(('app/Modules'));
            if(in_array('app/Modules/'.$controller,$directories)){
                return $this->error($controller. ' Modülü zaten var.');
            }
            $module_folder = $this->choice('Frontend or  Admin ?',['Frontend','Admin','User'],0);

            $controller = studly_case($controller);
            $root = app_path('Modules/'.$module_folder.'/'.$controller);


            mkdir($root);
            mkdir($root.'/Controllers');
            mkdir($root.'/Models');
            mkdir($root.'/Views');

            if(is_dir($root.'/Controllers')){

                $controller = str_replace('/','\\',$controller);

                $this->call("make:controller", [
                    'name'=>"App\\Modules\\$module_folder\\$controller\\Controllers\\ActionController",
                    '--resource' => TRUE
                ]);

                return $this->info('Oldu');

            }else{

                return $this->info('DIR YOK!');

            }



        }


        return $this->error('Lütfen Module ismi giriniz. Girdiğinizde Modules kalsörünün altına açılacaktır.');
        //

    }
}

