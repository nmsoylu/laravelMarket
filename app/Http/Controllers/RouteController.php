<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class RouteController extends Controller
{
    //
    public $moduleLists;
    public $args_num;
    public $args;
    public $prefix;


    public function __construct()
    {
        $this->moduleLists_frontend = config('module.Frontend');
        $this->moduleLists_backend = config('module.Admin');
        $this->moduleLists_users = config('module.User');
    }


    public function router(Request $request)
    {
        $this->args_num = func_num_args() - 1;
        $this->args = func_get_args();
        array_shift($this->args);
        $this->prefix = $request->route()->getPrefix();

        $modules = $this->args[0];
        $controller = 'action';
        $function = 'index';
        $parameters = [false, $request];


        if (isset($this->args[1])) {
            $controller = $this->args[1];
        }

        if (isset($this->args[2])) {
            $function = $this->args[2];
            if($request->getMethod() == 'POST'){
                $function = 'store';
            }
        }

        if (isset($this->args[3])) {
            $parameters = [$this->args[3], $request];
        }



        if($this->prefix == '/user'){

            if (!in_array(studly_case($modules), $this->moduleLists_users)) {
                return view('errors.404');
            }

            $permission = $this->routerUser($modules, $controller, $function, $parameters, $request);

        } elseif($this->prefix == '/admin') {

            if (!in_array($modules, $this->moduleLists_backend)) {
                return view('errors.404');
            }

            $permission = $this->routerAdmin($modules, $controller, $function, $parameters, $request);

        }


        if(!$permission){
            return view('errors.403');
        }

        list($modules, $controller, $function,$parameters) = $permission;

        return  callModules($modules, $controller, $function, $parameters);


    }

    public function routerAdmin($modules, $controller, $function, $parameters, $request)
    {

        if (checkModuleScopes($modules, $controller, $function, $request)) {

            $modules = "Admin\\$modules";
            return [$modules, $controller, $function, $parameters];
        }


       return false;


    }
    public function routerUser($modules, $controller, $function, $parameters, $request)
    {

        if (checkModuleScopes($modules, $controller, $function, $request)) {

            $modules = "User\\$modules";
            return [$modules, $controller, $function, $parameters];
        }


        return false;


    }

}
