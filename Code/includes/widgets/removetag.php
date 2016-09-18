<?php

    if(isset ($_POST['search'] )== true && empty($_POST['search']) == false)
    {
        $val = $_POST['search'];
        
        $rep1 = '<mark style="color:red;background:0;">';
        $rep2 = '</mark>';

        $str = str_replace($rep1, "", $val);
        $str = str_replace($rep2, "", $str);
        echo $str;
    }
?>