<div id="log_div">
    <h2>LOG IN</h2>
        <form action='login.php' method='post'>
            <table class="table-striped table-condensed table-hover table-bordered">
                <tr> 
                    <td><label>   Username: </label> </td> 
                    <td><input type="text" class="required input_field" id="log_username" name="username" onblur='checkformfeild("log_username","log_username_div")'> </td>
                    <td>
                        <div id="log_username_div">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label>   Password:   </label></td>
                    <td> <input type="password" class="required input_field" id="log_password" class="required input_field"   onblur='checkformfeild("log_password","log_password_div")' name='password'> </td>
                    <td>
                        <div id="log_password_div"></div>
                    </td>
                </tr>
                <tr><td colspan="3">
    <input type="button" id="reg" class="submit_btn float_l" value="Register" onclick="registerpage()"> 
                        <input type='submit' class="submit_btn float_r" value="LOG IN">
                </td></tr>
            </table>
        </form>
</div>
    