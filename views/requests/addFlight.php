<?php
    session_start();

    include 'autoload.php';

    $addFlight = new flightController();

    $data = $addFlight->addFlightData();

    


?>