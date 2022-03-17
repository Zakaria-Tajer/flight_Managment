<?php

class passengers extends Db {
    public function insertMultiPassengers($Fname,$lname,$Date,$Gender,$unique_passenger_id){

        if(!empty($Fname) && !empty($lname) && !empty($Date) && !empty($Gender)){
            $sql = "INSERT INTO `multipulepassengers`(fname,lname,Genere,Date,unique_passenger_id)
            VALUES('{$Fname}','{$lname}','{$Gender}','{$Date}','{$unique_passenger_id}')";

            $query = $this->connect()->query($sql);

            if($query){
                $sql = "SELECT * FROM `multipulepassengers`";
                $query = $this->connect()->query($sql);

                $numRows = $query->num_rows;
                if($numRows > 0){
                while($res = $query->fetch_assoc()){
                    $_SESSION['unique_Passenger_id'] = $res['unique_Passenger_id'];
                }
            }

                echo $_SESSION['unique_Passenger_id'];

            }
            return $query;
        }else {
            echo 'All fields are Required';
        }
    }

    public function selectMultiPassenger($unique_Passenger_id,$number){
        
        $sql = "SELECT * FROM `multipulepassengers` ORDER BY unique_Passenger_id DESC LIMIT $number";
       
        $query = $this->connect()->query($sql);



        return $query;
    }



}




?>