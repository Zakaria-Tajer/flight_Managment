<?php

class user extends Db{


    public function insertUser($fname,$lname,$email,$password, $passwordConfirmation){
        if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($passwordConfirmation)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $sql = "SELECT * FROM `userreservation` WHERE email = '{$email}'";
                $query = $this->connect()->query($sql);
                $numRows = $query->num_rows;

                if($numRows > 0){
                    echo $email.' Email Already Used';
                }else {
                        
                        $hashedPsw = password_hash($password, PASSWORD_DEFAULT);
                        $hashedPswConfirmation = password_hash($passwordConfirmation, PASSWORD_DEFAULT);

                        if(strlen($password) && strlen($passwordConfirmation) < 7){
                            echo 'password is too short';
                        }else if($password === $passwordConfirmation){
                            $unique_user_id = rand(time(), 10000); 
                            $sql1 = "INSERT INTO `userreservation`(fname, lname, email, password, passwordConfirmation,unique_id)
                                    VALUES ('{$fname}','{$lname}','{$email}','{$hashedPsw}','{$hashedPswConfirmation}','{$unique_user_id}')";
                            $this->connect()->query($sql1);
                            // $numberRows = $query1->num_rows;
                            if($sql1){
                                $sql3 = "SELECT * FROM `userreservation` WHERE email = '{$email}'";
                                $query1 = $this->connect()->query($sql3);
                                $numberRows = $query1->num_rows;
                                if($numberRows > 0){
                                    $row = $query1->fetch_assoc();
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    
                                    echo 'succes';
                                }
                            }else {
                                echo 'z';
                            }
                            
                        }else {
                            echo 'passwords not Matching';
                        }

            }
        }else {
            echo 'All fields are requirds';
        }
    }


}


    public function getUser($email,$password){
        if(!empty($email) && !empty($password)){
            $sql = "SELECT * FROM `userreservation` WHERE email = '{$email}'";
            $query = $this->connect()->query($sql);
            $numrows = $query->num_rows;

                if($numrows > 0){
                    $row = $query->fetch_assoc();
                    if(password_verify($password, $row['password'])){
                        echo 'success';
                        $_SESSION['unique_id'] = $row['unique_id'];

                    }else {
                        echo 'Password Incorrect';
                    }
                }
            

                $sql4 = "SELECT * FROM `admin` WHERE email = '{$email}'";
                $query4 = $this->connect()->query($sql4);
    
                $rowsN = $query4->num_rows;
    
                if($rowsN > 0){
                    $rows = $query4->fetch_assoc();
                    if(password_verify($password, $rows['password'])){
                        $_SESSION['id'] = $rows['id'];
                        echo 'admin';

                    }
                
            }




        }else {
            echo 'All Fields are required';
        }
    }


    // public function getadmin($email,$password){
    //     if(!empty($email) && !empty($password)){
    //         $sql2 = "SELECT * FROM `admin` WHERE email = '{$email}'";
    //         $query1 = $this->connect()->query($sql2);
    //         $rows = $query1->fetch_assoc();
    
    //             if(password_verify($password, $rows['password'])){
    //                 echo 'admin';
    //             }else {
    //                 echo 'Password Incorrect';
    //             }
    //     }else {
    //         echo 'All Fields are required';
    //     }
    // }
    





}






?>