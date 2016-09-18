
<script>

function auto_refresh()
{
    $.post('includes/widgets/view_users_return__.php',{},function(data){
       document.getElementById('view_users_return____').innerHTML = data; 
    });
}
setInterval('auto_refresh()', 100);
</script>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <div class="row">
                <h4 class="margin-bottom-15">Pay FINE</h4>
                <form action="register.php" id="RETURN_BOOK_FORM_" method="post">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>USER_ID:</th> 
                    <td><input type="text" id="user_id___" > </td>
                </tr>
                <tr>
                    <th>Book ID:</th> 
                    <td><input type="text" id="book_id___" > </td>
                </tr>
                <tr>
                    <th>Copy No:</th> 
                    <td><input type="text" id="copy_no___" > </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="button" value="Return" onclick="return_book()">
                    </td>
            </table>
        </form>

            </div>
          
        </div>
      </div>
