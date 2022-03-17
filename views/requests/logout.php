<?php

    session_start();

    if(isset($_SESSION)){
        session_unset();
        session_destroy();
        echo 'success';
        
    }else {
        echo 'failed';
    }

?>