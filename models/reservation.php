<?php


class reservation extends Db{

    public function getCorrespandFlight($Flightid){
        $sql = "SELECT * FROM `flights` WHERE id = '{$Flightid}'";
        $query = $this->connect()->query($sql);

        
        $numRows = $query->num_rows;

        if($numRows > 0){
            $row = $query->fetch_assoc();
        
            if($query){
                $_SESSION['FlightNumber'] = $row['FlighNumber'];
                $_SESSION['Depart'] = $row['Depart'];
                $_SESSION['ArrivalAirport'] = $row['ArrivalAirport'];
                $_SESSION['Seats'] = $row['Seats'];
                $_SESSION['aircraft'] = $row['aircraft'];
                $_SESSION['airline'] = $row['airline'];
                $_SESSION['status'] = $row['status'];
                $_SESSION['price'] = $row['price'];
            }
    
            
        }
        return $query;

    }

}











?>