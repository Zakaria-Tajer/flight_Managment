<?php


    include './vendor/autoload.php';
    $uri = $_SERVER['REQUEST_URI'];

    $router = new AltoRouter();


    $router->map('GET', '/', 'home', 'home');
    $router->map('GET', '/login', 'login','login');
    $router->map('GET', '/register', 'register','register');
    $router->map('GET', '/flighList', 'flighList','flighList');
    $router->map('GET', '/UserHomePage', 'UserHomePage','UserHomePage');
    $router->map('GET', '/landingPage', 'landingPage','landingPage');
    
    $router->map('POST', '/flightsInsert', 'requests/flightsInsert');
    $router->map('POST', '/insert', 'requests/insert');
    $router->map('POST', '/log', 'requests/log');
    $router->map('POST', '/adminlogin', 'requests/adminlogin');
    $router->map('POST', '/addFlight', 'requests/addFlight');
    $router->map('POST', '/updateFlights', 'requests/updateFlights');
    $router->map('POST', '/removeFlights', 'requests/removeFlights');
    $router->map('POST', '/search', 'requests/search');
    $router->map('POST', '/userSearch', 'requests/userSearch');
    $router->map('POST', '/logout', 'requests/logout');
    


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