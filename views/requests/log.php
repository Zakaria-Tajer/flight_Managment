<?php
    session_start();
    include 'autoload.php';

    $user = new userController();

    $login = $user->userLogin();


    // print_r($login);

?>