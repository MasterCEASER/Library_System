<?php
        require '../../core/init.php';
        if(isset($_SESSION['type']) and isset($_SESSION['lib_id']))
        {
            $statement ="call issue_book(". $_POST['id'] . ",'" . $_SESSION['lib_id'] . "',DATE_ADD(CURDATE(),INTERVAL 10 DAY))"; 

            $res = run($statement);
            $row = $res->fetch(PDO::FETCH_NUM);
            if($row[0] == 0)
            {    echo 'No Copy Available to be issued . . . ';
        
            }
            else if($row[0] == 1)
            {    echo 'Book ISSUED . . . . '
                . 'BOOK-ID = ' . $row[1]. ' . .  COPY_NO = ' . $row[2];
        
            }
            else if($row[0] == 2)
            {    echo 'Book NOT ISSUED . You Reached Your Limit';        
            }
        }
        else
        {
            echo 'You Must Login To Reserve the book . . .';
        }


?>