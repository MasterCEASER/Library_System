<?php
    if(isset ($_POST['search'] )== true && empty($_POST['search']) == false)
    {
        require '../../core/database/connect.php';
        $val = $_POST['search'];
        $val = strtoupper($val);
        $statement = "Select * from book_uv where publisher_name like '%$val%'  order by title,Edition,publisher_name,subject_name;";
        $res = run($statement);
        $i=1;
            echo '<table class="table table-hover table-bordered">';
            echo '<tr><th>#</th><th>Book Name</th><th>Edition</th><th>Publication Year</th><th>Publisher Name</th><th>Subject Name</th></tr>';
        $rep = '<u style="background-color:yellow;">'.$val.'</u>';
        while($row = $res->fetch(PDO::FETCH_BOTH))
        {
        $str = str_replace($val, $rep, $row['publisher_name']);
        $s = 'search_by_title'.$i;
            echo '<tr><th>', $i, '</th><td>'  ,$row['title'] ,'</td><td>'  ,$row['Edition'] ,'</td><td>'  ,  substr($row['publication_date'],0,4) ,'</td><td>'  ,$str,'</td><td>'  ,$row['subject_name'] ,'</td></tr>';
        
            $i++;
        }
            echo '</table>';
 
    }
?>