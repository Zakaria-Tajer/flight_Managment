<?php

    
class userController {


    public function userSignUp(){
        $user = new user();

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['passwordConfirmation'];

        $signUp = $user->insertUser($fname,$lname,$email,$password,$passwordConfirmation);

        return $signUp;
    }

    public function userLogin(){
        $user = new user();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = $user->getUser($email, $password);

        return $login;
    }

    public function adminlogin(){
        $user = new user();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = $user->getadmin($email, $password);

        return $login;
    }






}










?>