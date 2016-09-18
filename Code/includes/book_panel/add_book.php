<div class="row" hidden="" id ="add_book">
    
    <h4 class="margin-bottom-15" style="text-align: center;font-family: Algerian; font-size: 32px;">Add Book</h4>
    <div class="col-md-12" ID="123654789ABC">
        <form role="form" id="add_book_db_to_">
        <table class="col-md-6 margin-bottom-15 table-hover table-bordered table-striped table-condensed">
            <tr>
                <th><label for="Title" class="control-label">Title</label></th>
                <td><input type="text" class="form-control" id="book_title" value=""></td>                  
            </tr><tr>
                <th><label for="Title" class="control-label">Author</label></th>
                <td><input type="text" class="form-control" id="book_author" value=""></td>                  
            </tr><tr>
                <th><label for="Title" class="control-label">Publisher</label></th>
                <td><input type="text" class="form-control" id="book_publisher" value=""></td> 
            </tr><tr>
                <th><label for="Title" class="control-label">Publication Date</label></th>
                <td><input type="text" class="form-control" id="book_date" placeholder="YYYY" maxlength="4" value="" ></td>                  
            </tr><tr>    
                <th><label for="Title" class="control-label">ISBN</label></th>
                <td><input type="text" class="form-control" id="book_ISBN" value=""></td>                  
            </tr><tr>
                <th><label for="Title" class="control-label">Subject</label></th>
                <td><input type="text" class="form-control" id="book_subject" value=""></td>                  
            </tr><tr>
                <th><label for="Title" class="control-label">Edition</label></th>
                <td><input type="text" class="form-control" id="book_edition" value=""></td>                  
            </tr>
        </table>
        
      <div class="row templatemo-form-buttons">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" onclick="add_book_()">Update</button>
          <button type="reset" id="book_add_reset" class="btn btn-default">Reset</button>    
        </div>
      </div>
    </form>
  </div>
</div>
     