<?php
require '../../core/init.php';
    $id =  $_POST['id'];
   $statement = 'delete from book where book_id = '.$id.';';
   run($statement);
?>