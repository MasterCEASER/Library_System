
<script>

    function delete_user(x)
    {
        var y = document.getElementById("user_table").rows[x].cells[1].innerHTML;
        
        xmlhttp = new XMLHttpRequest();
        
  
        xmlhttp.open("GET","includes/widgets/delete_user.php?id="+y,false);
        xmlhttp.send();
    location.reload();
    }
    
function auto_refresh()
{
    $.post('includes/widgets/view_users_data__.php',{},function(data){
       document.getElementById('view_users').innerHTML = data; 
    });
}
setInterval('auto_refresh()', 10000);
</script>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          
          <div class="row" id ="view_users">
              <script>
                  auto_refresh();
              </script>
       
          </div>
            <div class="row" hidden="" id="specific_users">
            </div>
            <div class="row" hidden="" id="add_users">
                <h4 class="margin-bottom-15">Add User</h4>
                <form action="register.php" method="post">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>First Name:</th> 
                    <td><input type="text" id="first_name" onblur='checkformfeild("first_name","first_name_div")' name ="first_name" > </td>
                    <td><div id="first_name_div"></div></td>
                </tr>
                <tr>
                    <th>Last Name:</th> 
                    <td><input type="text" id="last_name" onblur='checkformfeild("last_name","last_name_div")' name ="last_name" > </td>
                    <td><div id="last_name_div"></div></td>
                </tr>
                <tr>
                    <th>Address:</th> 
                    <td><input type="text" id="address" onblur='checkformfeild("address","address_div")' name ="address" > </td>
                    <td><div id="address_div"></div></td>
                </tr>
                <tr>
                    <th>Phone Number:</th> 
                    <td><input type="text" id="ph" onblur='checkformfeild("ph","ph_div")' name ="phone_number" > </td>
                    <td><div id="ph_div"></div></td>
                </tr>
                <tr>
                    <th>Email Id:</th>
                    <td><input type="text" onblur='checkformfeild("email","email_div");validateEmail();' id="email" name="email"></td>
                    <td><div id="email_div"></div></td>
                </tr>
                <tr>
                    <th>University Id:</th>
                    <td><input type="text" onblur='checkformfeild("uni_id","uni_id_div");validateEmail();' id="uni_id" name="uni_id"></td>
                    <td><div id="uni_id_div"></div></td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type = "password" onblur='checkformfeild("password","password_div")' id="password" name="password" maxlength="8"></td>
                    <td><div id="password_div"></div></td>
                </tr>
                <tr>
                    <th>Confirm Password:</th>
                    <td><input type = "password" id="cpassword" onblur='checkformfeild("cpassword","cpassword_div");validatePFeilds();' name="cpassword" maxlength="8"></td>
                    <td><div id="cpassword_div"></div></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="check"> I accept the term and policies.
                    </td>
                </tr>  
                <tr>
                    <td></td>
                    <td>
                        <input type="button" value="Submit" onclick="add_user_to()">
                        <input type="reset" value="Reset">
                        <input type="button" value="Cancel" onclick="loginpage()">
                    </td>
            </table>
        </form>

            </div>
            
        </div>
      </div>
