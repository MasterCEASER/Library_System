
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
       
function auto_refresh_fac()
{
    $.post('includes/widgets/view_fac_data__.php',{},function(data){
       document.getElementById('view_fac').innerHTML = data; 
    });
}
</script>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
           
            <div class="row" id="view_fac">
               <script>
                  auto_refresh_fac();
              </script>           
          </div>
            <div class="row" hidden="" id="add_fac">
                
                <form action="register.php" method="post" id="add_faculty_form_">
                    <table class="table table-striped table-hover table-bordered" style="border: 0;">
                <tr>
                    <th>First Name:</th> 
                    <td><input type="text" id="first_name_f" style="background: transparent;border: 0;width: 300px;" onblur='checkformfeild("first_name","first_name_div")' name ="first_name" > </td>
                    <td><div id="first_name_div"></div></td>
                </tr>
                <tr>
                    <th>Last Name:</th> 
                    <td><input type="text" id="last_name_f" style="background: transparent;border: 0;width: 300px;" onblur='checkformfeild("last_name","last_name_div")' name ="last_name" > </td>
                    <td><div id="last_name_div"></div></td>
                </tr>
                <tr>
                    <th>Address:</th> 
                    <td><input type="text" id="address_f" style="background: transparent;border: 0;width: 300px;" onblur='checkformfeild("address","address_div")' name ="address" > </td>
                    <td><div id="address_div"></div></td>
                </tr>
                <tr>
                    <th>Phone Number:</th> 
                    <td><input type="text" id="ph_f" style="background: transparent;border: 0;width: 300px;" onblur='checkformfeild("ph","ph_div")' name ="phone_number" > </td>
                    <td><div id="ph_div"></div></td>
                </tr>
                <tr>
                    <th>Email Id:</th>
                    <td><input type="text" style="background: transparent;border: 0;width: 300px;" onblur='checkformfeild("email","email_div");validateEmail();' id="email_f" name="email"></td>
                    <td><div id="email_div"></div></td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type = "password" style="background: transparent;border: 0;width: 300px;" onblur='checkformfeild("password","password_div")' id="password_f" name="password" maxlength="8"></td>
                    <td><div id="password_div"></div></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="button" value="Submit" onclick="add_faculty_to()">
                        <input type="reset" value="Reset">
                        <input type="button" value="Cancel" onclick="loginpage()">
                    </td>
            </table>
        </form>

            </div>
            <div hidden="" class="row" id="view_sfac">
                
            </div>
        </div>
      </div>
