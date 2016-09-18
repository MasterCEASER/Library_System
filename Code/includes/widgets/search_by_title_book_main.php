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
        $id = $row[0];
//        echo '<pre>',  print_r($row),'</pre>';
        $strr = '            
                    <table class="table-hover table table-bordered table-striped" >
                        <tr>
                            <th><label>Book ID</label></th>
                            <td colspan="1">'.$id.'</td>
                        </tr>
                        <tr>
                            <th><label>Title</label></th>
                            <td>'.$row[4].'</td>
                        </tr>
                        <tr>
                            <th><label>ISBN</label></th>
                            <td colspan="1">'.$row[1].'</td>
                        </tr>
                        <tr>
                            <th><label>Author</label></th>
                            <td>'.$row[5].'</td>   
                        </tr>
                        <tr>
                            <th><label>Publisher</label></th>
                            <td colspan="1">'.$row[7].'</td>
                        </tr>
                        <tr>
                            <th><label>Publication Date:</label></th>
                            <td colspan="1">'.substr($row[2], 0, 4).'</td>
                        </tr>
                        <tr>
                            <th><label>Subject: </label></th>
                            <td>'.$row[6].'</td>
                        </tr>
                        <tr>
                            <th><label>Copies: </label></th>
                            <td colspan="2">'.$row[8].'</td>
                        </tr>
                        <tr>
                            <th><label>Edition </label></th>
                            <td>'.$row[3].'</td>
                        </tr>
                    </table>
                    <input type="button" class="submit_btn float_l" onclick="reserve(\''.$id.'\')" value="Click to Reserve . . .">
                    <input type="button" class="submit_btn float_l" onclick="swap_view(\'search_down2\',\'search_down1\')" value="Back">';
        echo $strr;
        
    }
?>