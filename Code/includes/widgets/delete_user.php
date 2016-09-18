<?php
    $lib_id = $_GET['id'];
    
        require '../../core/database/connect.php';
    $statment = "Delete from person where person_id = '$lib_id'";
    run($statment);
    /*
    echo $lib_id,'<br>';
    $statment = "Delete from university_member where lib_id = '$lib_id'";
    $db->query($statment);
    
    $statement  = "SELECT address_id from person_details where lib_id = '$lib_id' ";
    $res = $db->query($statement);    
    $row = $res->fetch(PDO::FETCH_NUM);
    $address_id = $row[0];    
    
    echo $address_id,'<br>';
    $statment = "Delete from person_details where lib_id = '$lib_id'";
    $db->query($statment);
    $statment = "Delete from person_address where address_id = '$address_id'";
    $db->query($statment);*/
?>