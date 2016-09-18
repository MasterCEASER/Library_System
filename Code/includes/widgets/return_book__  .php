<?php 
    require '../../core/init.php';
    $uid = $_POST['id'];
    $bid = $_POST['book'];
    $no = $_POST['no'];
    $statement = 'call return_book('.$bid.','.$no.',\''.$uid.'\');';
    echo $statement;
    run($statement);
?>