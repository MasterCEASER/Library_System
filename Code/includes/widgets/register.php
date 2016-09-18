
    <div hidden="true" id="reg_div">
        
    <h2>Register</h2>
    <form action="register.php" method="post">
        <table style="text-align: left;" class="table-striped table-condensed table-hover ">
                <tr>
                    <th>First Name:</th> 
                    <td><input type="text" class="required input_field" id="first_name" onblur='checkformfeild("first_name","first_name_div")' name ="first_name" > </td>
                    <td><div id="first_name_div"></div></td>
                </tr>
                <tr>
                    <th>Last Name:</th> 
                    <td><input type="text" class="required input_field" id="last_name" onblur='checkformfeild("last_name","last_name_div")' name ="last_name" > </td>
                    <td><div id="last_name_div"></div></td>
                </tr>
                <tr>
                    <th>Address:</th> 
                    <td><input type="text" class="required input_field" id="address" onblur='checkformfeild("address","address_div")' name ="address" > </td>
                    <td><div id="address_div"></div></td>
                </tr>
                <tr>
                    <th>Phone Number:</th> 
                    <td><input type="text" maxlength="11" class="required input_field" placeholder="Max Length: 11" id="ph" onblur='checkformfeild("ph","ph_div")' name ="phone_number" > </td>
                    <td><div id="ph_div"></div></td>
                </tr>
                <tr>
                    <th>Email Id:</th>
                    <td><input type="text" class="required input_field" onblur='checkformfeild("email","email_div");validateEmail();' id="email" name="email"></td>
                    <td><div id="email_div"></div></td>
                </tr>
                <tr>
                    <th>University Id:</th>
                    <td><input type="text" class="required input_field" onblur='checkformfeild("uni_id","uni_id_div");validateEmail();' id="uni_id" name="uni_id"></td>
                    <td><div id="uni_id_div"></div></td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type = "password" placeholder="(Length) Max:20 Min:6" class="required input_field" onblur='checkformfeild("password","password_div")' id="password" name="password" maxlength="8"></td>
                    <td><div id="password_div"></div></td>
                </tr>
                <tr>
                    <th>Confirm Password:</th>
                    <td><input type = "password" placeholder="(Length) Max:20 Min:6" class="required input_field" id="cpassword" onblur='checkformfeild("cpassword","cpassword_div");validatePFeilds();' name="cpassword" maxlength="8"></td>
                    <td><div id="cpassword_div"></div></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="checkbox" name="check"> I accept the term and policies.
                    </td>
                </tr>  
                <tr>
                    <td colspan="3">
                        <input type="button" class="submit_btn float_r" value="Cancel" onclick="loginpage()">
                        <input type="reset" class="submit_btn float_r" value="Reset">
                        <input type="submit" class="submit_btn float_r" value="Submit">
                    </td>
            </table>
        </form>

    </div>
    