
<?php
        if(isset($_SESSION['type']) and isset($_SESSION['lib_id']))
        {
            if($_SESSION['type'] === 'user')
                include 'user_sidebar.php';
            else
                include 'admin_sidebar.php';
        }
        else
        {        
            include 'temp_sidebar.php';           
        }
    ?>