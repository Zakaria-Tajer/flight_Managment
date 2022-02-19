<?php
    include 'autoload.php';

    $flightUpdate = new flightController();
    // $flight_id = $_POST['flightId'];

    $data = $flightUpdate->updateFlightsData();


    // // echo $id;
    // var_dump($_POST);

?>