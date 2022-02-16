<?php

    include 'autoload.php';

    $user = new userController();

    $login = $user->userLogin();


    // print_r($login);

?>