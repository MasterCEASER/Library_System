<?php
    if(isset ($_POST['search'] )== true && empty($_POST['search']) == false)
    {
        require '../../core/database/connect.php';
        $val = $_POST['search'];
        
        $rep1 = '<mark style="color:red;background:0;">';
        $rep2 = '</mark>';

        $str = str_replace($rep1, "", $val);
        $str = str_replace($rep2, "", $str);
        
        $statement = "Select * from book_uv where title = '$str';";
        $res = run($statement);
        $row = $res->fetch(PDO::FETCH_NUM);
        
//        echo '<pre>',  print_r($row),'</pre>';
        $strr = '            
                    <table class="table-hover table table-bordered table-striped" id="search_by_title_book_table_">
                        <tr>
                            <th><label>Book ID</label></th>
                            <td colspan="2">'.$row[0].'</td>
                        </tr>
                        <tr>
                            <th><label>Title</label></th>
                            <td>'.$row[4].'</td>
                            <td>
                            <div id="change_title1">
    <a onclick=swap_view("change_title1","change_title2") class="btn btn-default">Edit</a>
</div>
<div id="change_title2" hidden="">
    <input type="text" id="new_title_" class="form-control">
    <input type="button" VALUE="Save" onclick="changetitle()">
</div>
</td>
                        </tr>
                        <tr>
                            <th><label>ISBN</label></th>
                            <td colspan="2">'.$row[1].'</td>
                        </tr>
                        <tr>
                            <th><label>Author</label></th>
                            <td>'.$row[5].'</td>
                            <td>
<div id="change_author1">
    <a onclick=swap_view("change_author1","change_author2") class="btn btn-default">Edit</a>
</div>
<div id="change_author2" hidden="">
    <input type="text" id="new_author_" class="form-control">
    <input type="button" VALUE="Save" onclick="changeauthor()">
</div>                            
</td>    
                        </tr>
                        <tr>
                            <th><label>Publisher</label></th>
                            <td colspan="1">'.$row[7].'</td>
                            <td>
<div id="change_pub1">
    <a onclick=swap_view("change_pub1","change_pub2") class="btn btn-default">Edit</a>
</div>
<div id="change_pub2" hidden="">
    <input type="text" id="new_pub_" class="form-control">
    <input type="button" VALUE="Save" onclick="changepub()">
</div>                            
</td>
                        </tr>
                        <tr>
                            <th><label>Publication Date:</label></th>
                            <td colspan="2">'.substr($row[2], 0, 4).'</td>
                        </tr>
                        <tr>
                            <th><label>Subject: </label></th>
                            <td>'.$row[6].'</td>
                            <td>
<div id="change_sub1">
    <a onclick=swap_view("change_sub1","change_sub2") class="btn btn-default">Edit</a>
</div>
<div id="change_sub2" hidden="">
    <input type="text" id="new_sub_" class="form-control">
    <input type="button" VALUE="Save" onclick="changesub()">
</div>                            
                        </tr>
                        <tr>
                            <th><label>Copies: </label></th>
                            <td colspan="2">'.$row[8].'</td>
                        </tr>
                        <tr>
                            <th><label>Edition </label></th>
                            <td>'.$row[3].'</td>
                            <td><div><a href="#" class="btn btn-default">Edit</a></td>
                        </tr>
                    </table>';
        echo $strr;
        /*        
 
        $st = 'style=""';
            echo '<table class="table table-hover table-bordered">';
        while($row = $res->fetch(PDO::FETCH_ASSOC))
        {
        $str = str_replace($rep, $val, $row['title']);
        $s = 'search_by_title'.$i;
            echo '<tr><th>', $i, '</th><td><li class="list_li_drop" id="'.$s.'" onclick="functhe(\''.$s.'\')">'  ,$str,'</li></td></tr>';
            
        
            $i++;
        }
            echo '</table>';*/
    }
?>