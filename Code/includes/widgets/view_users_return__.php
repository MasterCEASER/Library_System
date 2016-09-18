<?php 
    require '../../core/init.php';
        echo     '<div class="col-md-12">
        
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Books Returned TODAY</h4>
                <table class="table table-striped table-hover table-bordered" id="user_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Book ID</th>
                            <th>Copy #</th>
                            <th>Person ID</th>
                        </tr>
                    </thead>
                <tbody>  ';
                 
    $query = run("SELECT book_id,copy_no,person_id from book_issue_details
where return_date = CURDATE();");
        $i = 1;
        while($row = $query->fetch(PDO::FETCH_NUM))
        {            
            echo '<tr>';
            echo  '<td>',$i,'</td>';
            echo  '<td>',$row[0],'</td>';
            echo  '<td>',$row[1],'</td>';
            echo  '<td>',$row[2],'</td>';
            $i++;
            
        }       
         echo     '  </tbody>
                </table>
              </div>
            </div>';
        
?>