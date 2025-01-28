<?php
namespace app\controllers;

use Exception;
use League\Plates\Engine;
use League\Plates\Extension\Asset;


abstract class Controller {
    public static function view(string $view,array $data = []){
        $viewsPath = dirname(__FILE__,3). "/views";
        if(!file_exists($viewsPath.DIRECTORY_SEPARATOR.$view .".php")){

            throw new Exception("View inexistente");
        }


        $templates = new Engine($viewsPath);
        $templates->loadExtension(new Asset($viewsPath.'/assets/', true));
        echo $templates->render($view,$data);
    }
}