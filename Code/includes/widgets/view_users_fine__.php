<?php 
    require '../../core/init.php';
        echo     '<div class="col-md-12">
        
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Users Table</h4>
                <table class="table table-striped table-hover table-bordered" id="user_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Total Fine</th>
                            <th>Amount Paid</th>
                            <th>Fine Remaining</th>
                        </tr>
                    </thead>
                <tbody>  ';
                 
    $query = run("select * from fine_vu;");
        $i = 1;
        while($row = $query->fetch(PDO::FETCH_NUM))
        {            
            echo '<tr>';
            echo  '<td>',$i,'</td>';
            echo  '<td>',$row[0],'</td>';
            echo  '<td>',$row[1].' '.$row[2],'</td>';
            echo  '<td>',$row[3],'</td>';
            echo  '<td>',$row[4],'</td>';
            echo  '<td>',$row[5],'</td></tr>';
            $i++;
            
        }       
         echo     '  </tbody>
                </table>
              </div>
            </div>';
        
?>