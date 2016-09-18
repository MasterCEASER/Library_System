<?php 
    require '../../core/init.php';
    $id = $_POST['id'];
    $amount = $_POST['amount'];
    $statement = 'Update user_fine set paid = paid +'. $amount . ' where lib_id = \'' . $id .'\'';
    run($statement);
?>