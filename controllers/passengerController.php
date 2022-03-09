<?php

class passengerController {

    public function insertPassengers(){
        $passengers = new passengers();
        
        $Fname = $_POST['Fname'];
        $lname = $_POST['lname'];
        $email = $_POST['BirthDay'];
        $selectGender = $_POST['selectGender'];
        $unique_passenger_id = rand(time(),10000);

        // print_r(json_encode($Fname = $_POST['Fname']));
        $data = $passengers->insertMultiPassengers($Fname,$lname,$email,$selectGender,$unique_passenger_id);

        return $data;
    }


    public function getMultiPassengers(){
        $passengers = new passengers();

        $l = json_decode($_POST['Passenger_unique_id']);
        $array = implode(" ", $l);
        
        $data = $passengers->selectMultiPassenger($array,$_POST['Object']);
        return $data;
    }







}



?>