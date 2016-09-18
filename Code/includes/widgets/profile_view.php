<div id="log_div">
    <h2 style="">LOGGED IN</h2>
    <?php
    include '../../core/init.php';
        $user_data = user_data($_SESSION['lib_id']);
        $keys = array_keys($user_data);
        $rows = count($keys);
        echo '<table border=0 cellspacing=15 style="font-size: 15px;text-align: left; color: green;">';
        for($i=0;$i<$rows;$i++){
            echo '<tr><th>',ucfirst($keys[$i]);
            echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
            echo '</th><td>' ,$user_data[$keys[$i]],'</td></tr>';
        }
        echo '</table>';
    ?>
    <br><br><br><br><br>
    <form action="loggedin.php">
        <input type="submit" value="Back">
    </form>
    
</div>
