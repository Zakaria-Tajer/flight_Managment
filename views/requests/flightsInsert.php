<?php

    session_start();
    include 'autoload.php';


    $user = new flightController();


    $data = $user->insertFlightsData();


    print($data)
    







?>