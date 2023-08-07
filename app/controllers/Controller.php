<?php
namespace app\controllers;

use League\Plates\Engine;

class Controller
{
    public static function view(string $view, array $data){
        $viewsPath = dirname(__FILE__, 2).'/views';
        $templates = new Engine($viewsPath);

        echo $templates->render($view, $data);
    }
}