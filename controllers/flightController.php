<?php

class flightController {
    public function insertFlightsData(){
        $flight = new flight();
        
            $Fnumber = $_POST['Fnumber'];
            $DepartGate = $_POST['DepartGate'];           
            $ArrivalAirport = $_POST['arrival'];
            $seats = '900';
            $aircraft = $_POST['aircraft'];
            $airline = $_POST['airline'];
            $status = $_POST['status'];

            $FlightData = $flight->inserFlights($Fnumber,$DepartGate,$ArrivalAirport,$seats,$aircraft,$airline,$status);
        


        return $FlightData;

    }
    
    public function getFlightsData(){
        $flight  = new flight();
        
        $getF = $flight->getFlights();
        
        return $getF;
    }
    
    public function addFlightData(){
        $flight = new flight();
        
        $Fnumber = $_POST['FlightNumber'];
        $DepartGate = $_POST['DepartGate'];           
        $ArrivalAirport = $_POST['ArrivalPlane'];
        $seats = $_POST['SeatsCount'];
        $aircraft = $_POST['Aircraft'];
        $airline = $_POST['Airline'];
        $status = $_POST['Status'];
        if(!empty($Fnumber) && !empty($DepartGate) && !empty($ArrivalAirport) && !empty($seats) && !empty($aircraft) && !empty($airline) && !empty($status)){
            $FlightData = $flight->addFlight($Fnumber,$DepartGate,$ArrivalAirport,$seats,$aircraft,$airline,$status);

            return $FlightData;
        }else {
            echo 'All fields are required';
        }

    }

    public function updateFlightsData(){
        $flight  = new flight();

        // if(isset($_POST['flightId'])){
        $NewFnumber = $_POST['FlightNumber'];
        $NewDepartGate = $_POST['DepartGate'];           
        $NewArrivalAirport = $_POST['ArrivalPlane'];
        $Newseats = $_POST['SeatsCount'];
        $Newaircraft = $_POST['Aircraft'];
        $Newairline = $_POST['Airline'];
        $Newstatus = $_POST['Status'];
        $flight_id = $_COOKIE['Flight_id'];

        if(!empty($NewFnumber) && !empty($NewDepartGate) && !empty($NewArrivalAirport) && !empty($Newseats) && !empty($Newaircraft) && !empty($Newairline) && !empty($Newstatus)){
            
            $getF = $flight->updateFlights($NewFnumber,$NewDepartGate,$NewArrivalAirport,$Newseats,$Newaircraft,$Newairline,$Newstatus,$flight_id);

            return $getF;
        }else {
            echo 'All fields are required';
        }

        
    }

    public function rmvFLight(){
        $flight  = new flight();
        
        $flight_id = $_COOKIE['Flight_id'];
        $getF = $flight->removeFlights($flight_id);
        
        return $getF;
    }
    public function searchFlight(){
        $flight  = new flight();
        
        // $flight_id = $_COOKIE['Flight_id'];
        $SearchValue = $_POST['SearchValue'];

        $getF = $flight->getSearchFlight($SearchValue);
        
        return $getF;
    }




}



?>