<?php


    include './vendor/autoload.php';
    $uri = $_SERVER['REQUEST_URI'];

    $router = new AltoRouter();

    $router->map('GET', '/', 'index','index');
    $router->map('GET', '/login', 'login','login');
    $router->map('GET', '/register', 'register','register');
    $router->map('GET', '/flighList', 'flighList','flighList');
    $router->map('GET', '/payment', 'payment','payment');
    $router->map('GET', '/test', 'test','test');
    $router->map('GET', '/multipulePassengers', 'multipulePassengers','multipulePassengers');
    $router->map('GET', '/Reservationhistory', 'Reservationhistory','Reservationhistory');
    
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
    $router->map('POST', '/reservationHomePage', 'requests/reservationHomePage');
    $router->map('POST', '/checkIflogged', 'requests/checkIflogged');
    $router->map('POST', '/userPayment', 'requests/userPayment');
    $router->map('POST', '/modifierFlightUser', 'requests/modifierFlightUser');
    $router->map('POST', '/arrivalUserModifier', 'requests/arrivalUserModifier');
    $router->map('POST', '/passenger', 'requests/passenger');
    $router->map('POST', '/multiPassengers', 'requests/multiPassengers');
    $router->map('POST', '/unique_id', 'requests/unique_id');
    $router->map('POST', '/reservationAll', 'requests/reservationAll');
    


    $match = $router->match();

    if($match !== null){
        if(is_callable($match['target'])){
            call_user_func_array($match['target'], $match['params']);
        }else {
            $prams = $match['params'];
            include "views/{$match['target']}.php";
        }
    }






?>