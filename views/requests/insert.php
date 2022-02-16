<?php

    session_start();
    include 'autoload.php';


    $user = new userController();


    $data = $user->userSignUp();






?>