<?php


    include './vendor/autoload.php';
    $uri = $_SERVER['REQUEST_URI'];

    $router = new AltoRouter();


    $router->map('GET', '/', 'home', 'home');
    $router->map('GET', '/login', 'login','login');
    $router->map('GET', '/register', 'register','register');
    
    $router->map('POST', '/insert', 'requests/insert');
    $router->map('POST', '/log', 'requests/log');



    $match = $router->match();
    // var_dump($match);

    if($match !== null){
        if(is_callable($match['target'])){
            call_user_func_array($match['target'], $match['params']);
            // var_dump(call_user_func_array($match['target'], $match['params']));
        }else {
            $prams = $match['params'];
            include "views/{$match['target']}.php";
        }
    }






?>