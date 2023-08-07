<?php
function load(string $controller, string $action)
{
    try {
        $controllerNamespace = "app\\controllers\\{$controller}";

        if(!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controller} não existe");
        }

        $controllerInstance = new $controllerNamespace();

        if(!method_exists($controllerInstance, $action)) {
            throw new Exception("Ométodo {$action} não existe no controller {$controller}");
        }

        $controllerInstance->$action((object) $_REQUEST);
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

$router = [
    'GET' => [
        '/' => fn() => load('HomeController', 'index'),
    ],
    'POST' => [
        '/' => fn() => load('HomeController', 'store'),
        '/color-delete' => fn() => load('ColorController', 'destroy'),
        '/user-delete' => fn() => load('UserController', 'destroy'),
        '/user-register' => fn() => load('UserController', 'store'),
        '/color-register' => fn() => load('ColorController', 'store'),
        '/user-color-register' => fn() => load('UserColorController', 'store'),
        '/user-color-update' => fn() => load('UserColorController', 'update')  
    ],

];