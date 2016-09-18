<?php
include 'core/init.php';

$data = "'".$_POST['uni_id']."','".$_POST['password']."','".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['email']."','".$_POST['phone_number']."','".$_POST['address']."'";
$id =  register_users($data);
echo '<br>',$id;
        $_SESSION['lib_id'] = $id;
        $_SESSION['type'] = 'user';
       header('Location: index.php');            
        exit();            
            //start user seesion ;
            // redirect user to home;
?>
