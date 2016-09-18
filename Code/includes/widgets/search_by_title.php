<?php
    if(isset ($_POST['search'] )== true && empty($_POST['search']) == false)
    {
        require '../../core/database/connect.php';
        $val = $_POST['search'];
        $val = strtoupper($val);
        $statement = "Select title from book_title where title like '%$val%';";
        $res = run($statement);
        $i=1;
        $st = 'style=""';
            echo '<table class="table table-hover table-bordered">';
        $rep = '<mark style="color:red;background:0;">'.$val.'</mark>';
        while($row = $res->fetch(PDO::FETCH_ASSOC))
        {
        $str = str_replace($val, $rep, $row['title']);
        $s = 'search_by_title'.$i;
            echo '<tr><th>', $i, '</th><td><li class="list_li_drop" id="'.$s.'" onclick="functhe(\''.$s.'\')">'  ,$str,'</li></td></tr>';
            
        
            $i++;
        }
            echo '</table>';
    }
?>