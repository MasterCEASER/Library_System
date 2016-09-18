          
<div class="row"  id ="view_books" >
            
            <div class="col-md-12">
        
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Books</h4>
                <table class="table table-striped table-hover table-bordered" id="view_book_table_">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Edition</th>
                            <th>Author</th>
                            <th>ISBN</th>
                            <th>Subject</th>
                            <th>Publisher</th> 
                            <th>Edit</th> 
                            <th>Delete</th>
                        </tr>
                    </thead>
                <tbody>
<?php            
    $query = run("SELECT book_id,title,Edition,author_name,ISBN,subject_name,publisher_name from book_uv;");
        $i = 1;
        while($row = $query->fetch(PDO::FETCH_NUM))
        {            
            echo '<tr>';
            echo  '<td>',$i,'</td>';
            echo  '<td>',$row[0],'</td>';
            echo  '<td>',$row[1],'</td>';
            echo  '<td>',$row[2],'</td>';
            echo  '<td>',$row[3],'</td>';
            echo  '<td>',$row[4],'</td>';
            echo  '<td>',$row[5],'</td>';
            echo  '<td>',$row[6],'</td>';
            echo  '<td><a href="#" class="btn btn-default">Edit</a></td><td><a href="#" class="btn btn-link" id='.$i.'   onclick="delete_book(this.id)">Delete</a></td></tr>';
            $i++;
            
        }
?>  
                </tbody>
                </table>
              </div>
            </div>
          </div>
