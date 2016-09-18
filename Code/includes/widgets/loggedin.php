<div id="log_div">
    <h2 style="font-size: 24px; ">LOGGED IN</h2>
    
    <div hidden="" id="profile_view">
    <?php
        $user_data = user_data($_SESSION['lib_id']);
        $keys = array_keys($user_data);
        $rows = count($keys);
        echo '<table class="table-striped table-hover " style="padding:2px; font-size: 18px;background: transparent;" border=0 cellpadding=5 cellspacing=2 style="box-shadow: #171716;font-size: 15px;text-align: left; color: green;">';
        for($i=0;$i<$rows;$i++){
            echo '<tr><th><label>',ucfirst($keys[$i]);
            echo '</label> </th><td>' ,$user_data[$keys[$i]],'</td></tr>';
        }
        echo '</table>';
    ?>    
        <input type="button" value="Back" onclick="swap_view('profile_view','login_content');">
    
    </div>  
    <div hidden="" id="fine_view">
    <?php
        $id = $_SESSION['lib_id'];
        $statement = "SELECT * from user_fine where lib_id = '$id';";
        $res = run($statement);
        $row = $res->fetch(PDO::FETCH_NUM);
        echo '<h3> ID : ' . $row[0] . '</h3>';
        echo '<h3> Total Fine : ' . $row[1] . '</h3>';
        echo '<h3> Amount Paid Uptill NOW : ' . $row[2] . '</h3>';
        echo '<h3> Remaining Fine : ' . $row[3] . '</h3>'; 
    ?>    
        <input type="button" value="Back" onclick="swap_view('fine_view','login_content');">
    
    </div>
    <div hidden="" id="book_view">
    <?php
        $id = $_SESSION['lib_id'];
        $statement = "SELECT * from user_book_history where person_id = '$id';";
        $res = run($statement);
        echo '
      <table class="table-striped table-bordered" style="padding:5px; font-size: 18px; " cellspacing="10"><tr><th> Book Title </th>
              <th>Copy_No</th><th>Issue_Date</th><th>Expiry_Date</th>
          </tr>';
        while($row = $res->fetch(PDO::FETCH_NUM))
        {
            echo '<tr>';
            echo '<td>'.$row[0].'</td>';
            echo '<td>'.$row[1].'</td>';
            echo '<td>'.$row[3].'</td>';
            echo '<td>'.$row[4].'</td>';
            echo '</tr>';
        }
        echo '</table>';
        
        
    ?>    
        <input type="button" value="Back" onclick="swap_view('book_view','login_content');">
    
    </div>
    <div id="login_content" class="">
        <input type="button" value="View Profile" onclick="swap_view('login_content','profile_view');">
        <input type="button" value="Fine View" onclick="swap_view('login_content','fine_view');">
        <input type="button" value="Current Book History View" onclick="swap_view('login_content','book_view');">
        
    </div>
    <br><br>
</div>