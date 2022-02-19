<?php


class flight extends Db{
    
    public function inserFlights($Fnumber,$DepartGate,$ArrivalAirport,$seats,$aircraft,$airline,$status){

        $sql = "INSERT INTO `flights`(FlighNumber, Depart, ArrivalAirport, Seats, aircraft, airline,status)
                VALUES('{$Fnumber}','{$DepartGate}', '{$ArrivalAirport}', 
                        '{$seats}','{$aircraft}', '{$airline}','{$status}')";

        $query = $this->connect()->query($sql);


        return $query;
    }

    public function getFlights(){
        $sql = "SELECT * FROM `flights`";
        $query = $this->connect()->query($sql);

        return $query;
    }

    public function addFlight($Fnumber,$DepartGate,$ArrivalAirport,$seats,$aircraft,$airline,$status){
        $sql = "INSERT INTO `flights`(FlighNumber, Depart, ArrivalAirport, Seats, aircraft, airline,status)
                VALUES('{$Fnumber}','{$DepartGate}', '{$ArrivalAirport}', 
                '{$seats}','{$aircraft}', '{$airline}','{$status}')";

        $query = $this->connect()->query($sql);


        return $query;
    
    }

    public function updateFlights($NewFnumber,$NewDepartGate,$NewArrivalAirport,$Newseats,$Newaircraft,$Newairline,$Newstatus,$id){
        $sql = "UPDATE `flights` SET (FlighNumber = '{$NewFnumber}', Depart = '{$NewDepartGate}', ArrivalAirport = '{$NewArrivalAirport}', Seats = '{$Newseats}',
         aircraft = '{$Newaircraft}', airline = '{$Newairline}', status = '{$Newstatus}') WHERE id = '$id'";

        $query = $this->connect()->query($sql);

        return $query;
    }

    

}













?>