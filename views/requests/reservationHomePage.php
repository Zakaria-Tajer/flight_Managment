<?php

    session_start();

    include 'autoload.php';
    if(!isset($_SESSION['unique_id'])){
        echo 'Session Not Set';
    }else {
        echo 'setted';
        $flight = new reservationController();
    
        $data = $flight->getFlight();    
        // var_dump(json_encode(array(
        //     "name"=>$_SESSION['FlightNumber'],
        //     // $_SESSION['Depart'],
        //     // $_SESSION['ArrivalAirport'],
        //     // $_SESSION['Seats'],
        //     // $_SESSION['aircraft'],
        //     // $_SESSION['airline'],
        //     // $_SESSION['status'],
        //     // $_SESSION['price'],
        // )).trim(' '));    
    }
    
?>