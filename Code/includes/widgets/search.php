<?php

        require '../../core/database/connect.php';
    $search_details = $_POST;
   // echo '<pre>',  print_r($_POST),'</pre>';

    if($search_details['qchoice'] == 'Starts With')
    {
        $search_details['author'] = $search_details['author'] . '%';
    }
    else if($search_details['qchoice'] == 'Ends With')
    {
        $search_details['author'] =  '%' . $search_details['author'];
    }
    else if($search_details['qchoice'] == 'Contain Words')
    {
        $search_details['author'] = str_replace(' ', '%', $search_details['author']);
        $search_details['author'] = '%' . $search_details['author'] . '%';
    }
    else if($search_details['qchoice'] == 'Contain Phrase')
    {
        $search_details['author'] = '%' . $search_details['author'] . '%';
    }
    else if($search_details['qchoice'] == 'Contain Any Word')
    {
        $token = strtok($search_details['author'], ' ');
        $arr = array();
        $i = 0;
        while($token !== false)
        {
            $arr[$i] = '%'.$token.'%';
            $token = strtok(' ');
            $i++;
        }
        print_r($arr);
        $search_details['author'] = $arr;
    }
    else if($search_details['qchoice'] == 'Exact Phrase')
    {
        $search_details['author'] = $search_details['author'];
    }
 $val= $search_details['author'];
   // echo '<pre>',  print_r($search_details),'</pre>';
    
        $statement = "Select title from book_title where title like '$val';";
        $res = run($statement);
        $i=1;
        $st = 'style=""';
            echo '<table class="table table-hover table-bordered table-stripped" style="color:black;">';
        $rep = '<mark style="color:red;background:0;">'.str_replace("%", "", $val).'</mark>';
        while($row = $res->fetch(PDO::FETCH_ASSOC))
        {
        $str = str_replace($val, $rep, $row['title']);
        $s = 'search_by_title'.$i;
            echo '<tr><th>', $i, '</th><td id="'.$s.'" onclick="functhem(\''.$s.'\')">'  ,$str,'</td></tr>';
            
        
            $i++;
        }
            echo '</table>';
?>