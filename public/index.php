<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<?php
require_once '../vendor/autoload.php';
require_once '../routes/router.php';

try{
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $request = $_SERVER['REQUEST_METHOD'];



    if(!isset($router[$request])){
        throw new Exception('A rota não existe');
    }

    if(!array_key_exists($uri, $router[$request])){
        throw new Exception('A rota não existe');
    }
    
    $controller = $router[$request][$uri];
    $controller();
    
}catch(Exception $e){
    $e->getMessage();
}
?>