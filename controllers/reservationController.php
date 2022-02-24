<?php


class reservationController {

    public function getFlight(){

        $reserve = new reservation();

        $bookingRowId = $_POST['rowBooked'];

        

        $flightReserved = $reserve->getCorrespandFlight($bookingRowId);
         
        return $flightReserved;

    }


}







?>