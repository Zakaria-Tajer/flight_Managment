<?php

    include 'autoload.php';

    $getFLightReserved = new flightController();

    $data = $getFLightReserved->getFlightReservedById();

    var_dump($data);




?>