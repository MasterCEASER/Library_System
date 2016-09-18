<?php

if(empty($_POST) === false)
{
    $contact_errors[]  = array();
    $name       = $_POST['author'];
    $email      = $_POST['email'];
    $message    = $_POST['text'];
    if(empty($name) === true || empty($email) === true || empty($message) === true)
    {
        $contact_errors[] = "Name,Email and Message are required !!!";
    }
    else
    {
        if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
            $contact_errors[] = "Email is not valid";
        }
        if(ctype_alpha($name) === false){
            $contact_errors[] = "Name must only contains letters !!";
        }
    }
    if(intval(sizeof($contact_errors)) <= 1 )
    {
        mail('tagheir@gmail.com', 'Contact Form', $message,'From: '. $email);
        header('Location ../../index.php');
    }
    echo print_r($contact_errors);
}

?>