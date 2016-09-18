<?php
include 'core/init.php';
    
if(empty($_POST) === false)
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username) === true || empty($password) === true)
    {
        $errors[] = "You need to enter username and password . . ";        
    }
    else 
    {
        $login = user_validate($username,$password);
        echo $login,'<br>';
        if($login === '-1')
        {
            echo 'INVALID USER NAME . . . . . ';
        }
        else if($login === '0')
        {
            echo 'Password Invalid . . . . . ';
        }
        else if($login === '1')
        {    echo 'LOGGED IN . . . . . ';
        
            
            $_SESSION['lib_id'] = $username;
            $_SESSION['type'] = 'user';
            header('Location: index.php');
            
            exit();
            //start user seesion ;
            // redirect user to home;
        }
        else if($login === '2')
        {    echo 'LOGGED IN . . . . . ';
        
            
            $_SESSION['lib_id'] = $username;
            $_SESSION['type'] = 'admin';
            header('Location: index.php');
            
            exit();
            //start user seesion ;
            // redirect user to home;
        }
        else if($login === '3')
        {    echo 'LOGGED IN . . . . . ';
        
            
            $_SESSION['lib_id'] = $username;
            $_SESSION['type'] = 'book_issuer';
            header('Location: index.php');
            
            exit();
            //start user seesion ;
            // redirect user to home;
        }
    }
    print_r($errors);
}

?>