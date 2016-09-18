<?php

    require '../../core/init.php';
//    echo $_POST['data'];
    $VAL = $_POST['data'];
    $statement = 'call CREATE_USER('.$VAL.')';
    ECHO $statement;
    run($statement);
    
    
    
?>