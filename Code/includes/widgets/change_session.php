<?php
    if(isset($_GET['panel']))
    {
//        unset($_SESSION['panel']);
        $_SESSION['panel'] = 2;
        if(isset($_SESSION['panel']))
            echo 'set';
        else {
            echo 'unset';
        }
    }

?>