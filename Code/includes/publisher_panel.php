
<script>

    function delete_user(x)
    {
        var y = document.getElementById("user_table").rows[x].cells[2].innerHTML;
        
        alert(y);
        xmlhttp = new XMLHttpRequest();
        
  
        xmlhttp.open("GET","includes/widgets/delete_user.php?id="+y,false);
        xmlhttp.send();
    location.reload();
    }
</script>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
           
            <script>
                function change_type(x)
                {
                    document.getElementById('fac_type').innerHTML = x;
                }
            </script>
            <div class="row" id="view_pub">
          <div class="col-md-12">
        
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Publishers Table</h4>
                <table class="table table-striped table-hover table-bordered" id="pub_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Publisher ID</th>
                            <th>Name</th>
                            <th>Hire Date</th>
                            <th>Edit</th> 
                            <th>Delete</th>
                        </tr>
                    </thead>
                <tbody>               
<?php            
    $query = run("SELECT pub_id,name,hire_date from publisher;");
        $i = 1;
        while($row = $query->fetch(PDO::FETCH_NUM))
        {            
            echo '<tr>';
            echo  '<td>',$i,'</td>';
            echo  '<td>P',$row[0],'</td>';
            echo  '<td>',$row[1],'</td>';
            echo  '<td>',$row[2],'</td>';
            echo  '<td><a href="#" class="btn btn-default">Edit</a></td><td><a href="#" class="btn btn-link" id='.$i.'   onclick="delete_user(this.id)">Delete</a></td></tr>';
            $i++;
            
        }
?>              
                </tbody>
                </table>
              </div>
            </div>
            </div>
        </div>
      </div>
