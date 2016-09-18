 <?php 
 function connect()
 {
  $db = new PDO('mysql:host=localhost;dbname=library;', 'root', '1234');
  return $db;
 }
 function run($statement)
 {
     $db = connect();
     $query = $db->query($statement);
     return $query;
 }