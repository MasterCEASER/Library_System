<?php

    require '../../core/init.php';
//    echo $_POST['data'];
    $VAL = $_POST['data'];
    $statement = 'call CREATE_FACULTY('.$VAL.')';
    
    $res = run($statement);
    $row = $res->fetch(PDO::FETCH_NUM);
    echo $row[1];
    
    
    
?>