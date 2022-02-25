<?php

    session_start();

    include 'autoload.php';
    if(!isset($_SESSION['unique_id'])){
        echo 'Session Not Set';
    }else {
        echo 'setted';
        $flight = new reservationController();
    
        $data = $flight->getFlight();        
    }
    
?>