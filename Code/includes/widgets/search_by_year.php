<?php
    if(isset ($_POST['search'] )== true && empty($_POST['search']) == false)
    {
        require '../../core/database/connect.php';
        $val = $_POST['search'];
        $val = strtoupper($val);
        $statement = "Select DISTINCT * from book_uv where DATE_FORMAT(publication_date,'%Y') LIKE '$val%'  order by title,Edition,publisher_name,subject_name;";
        $res = run($statement);
        $i=1;
            echo '<table class="table table-hover table-bordered">';
            echo '<tr><th>#</th><th>Book Name</th><th>Edition</th><th>Publication Year</th><th>Publisher Name</th><th>Subject Name</th></tr>';
        $rep = '<u style="background-color:yellow;">'.$val.'</u>';
        while($row = $res->fetch(PDO::FETCH_BOTH))
        {
            $x = substr($row['publication_date'],0,4);
        $str = str_replace($val, $rep, $x);
        $s = 'search_by_title'.$i;
            echo '<tr><th>', $i, '</th><td>'  ,$row['title'] ,'</td><td>'  ,$row['Edition'] ,'</td><td>'  ,  $str ,'</td><td>'  ,$row['publisher_name'],'</td><td>'  ,$row['subject_name'] ,'</td></tr>';
        
            $i++;
        }
            echo '</table>';
 
    }
?>