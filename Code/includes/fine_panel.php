
<script>

function auto_refresh()
{
    $.post('includes/widgets/view_users_fine__.php',{},function(data){
       document.getElementById('view_users_fine____').innerHTML = data; 
    });
}
setInterval('auto_refresh()', 100);
</script>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          
            <div class="row">
                <h4 class="margin-bottom-15">Pay FINE</h4>
                <form action="register.php" id="PAY_FINE_FORM_" method="post">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>USER_ID:</th> 
                    <td><input type="text" id="user_id___" > </td>
                </tr>
                <tr>
                    <th>Amount:</th> 
                    <td><input type="text" id="amount___" > </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="button" value="Pay" onclick="pay_fine()">
                    </td>
            </table>
        </form>

            </div>
          
          <div class="row" id ="view_users_fine____">
              <script>
                  auto_refresh();
              </script>
       
          </div>  
        </div>
      </div>
