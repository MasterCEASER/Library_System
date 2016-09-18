<?php

    require '../../core/init.php';
//    echo $_POST['data'];
    $VAL = $_POST['data'];
    $statement = 'call add_book('.$VAL.')';
    ECHO $statement;
    run($statement);
    
    
    
?>