<?php
function result($statment)
{
    $db = new PDO('mysql:host=localhost;dbname=library;', 'root', '');
    $query = $db->query($statment);
    echo 'in';
    return $query;
}

function insertValues($table,$fields,$values)
{
    $args = func_get_args();
    $statement = "INSERT INTO " . $table . " ( " . $fields . " ) VALUES  ( " . $values . " ) ";
    $db = new PDO('mysql:host=localhost;dbname=library;', 'root', '');
    $db->query($statement);
    
}

?>