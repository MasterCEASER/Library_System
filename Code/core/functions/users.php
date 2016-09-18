<?php
function register_users($data_reg) 
{
    try{
    $statement  = "CALL CREATE_USER(  $data_reg  ) ";    
    $db = connect();
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo $statement;
    $res = $db->query($statement);
    $row = $res->fetch(PDO::FETCH_NUM);
    
    return $row[1];
    }
 catch (PDOException $e)
 {
     echo $e->getMessage(),'<br>';
 }
  }

function user_data($user_id)
{
    $data = array();
    $user_id = func_get_args()[0];
    
    $num_args = func_num_args();
    $args = func_get_args();
    if($num_args > 1){
        unset($args[0]);
    }
    $query = run("call view_profile('$user_id');");
    
    $data = $query->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function user_table()
{    
        $user_data = user_data($_SESSION['lib_id']);
        $keys = array_keys($user_data);
        $rows = count($keys);
        echo '<table border=0 cellspacing=15 style="font-size: 15px;text-align: left; color: green;">';
        for($i=0;$i<$rows;$i++){
            echo '<tr><th>',ucfirst($keys[$i]);
            echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
            echo '</th><td>' ,$user_data[$keys[$i]],'</td></tr>';
        }
        echo '</table>';
}

function user_validate($username,$password)
{
    $query = run("call user_validate( '$username' , '$password' )");
    $row = $query->fetch(PDO::FETCH_NUM);
    return $row[0];   
}
?>