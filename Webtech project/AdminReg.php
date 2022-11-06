<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null username/password";
        }
    }
?>
<html>
    <head><title>Admin Registration</title></head>
    <body>
        <fieldset>
         <style>
           body {
             background-image: url('Bck.jpg');
            }
            </style> 
        <div align="left">
            <img src="AsianMART.png" width="80px" height="60px">
        </div>
		   <h1 align="center">Registration</h1>
		    <form action="AdminRegcheck.php" method="post">
                
                    <!-- <tr>
                        <td></td>
                        <td>
                            <select name="user_typ">
                                <option value="user"/>User</option>
                                <option value="salesman"/>Salesman</option>
                                <option value="admin"/>Admin</option>
                            </select>
                        </td>
                    </tr> -->
                    <table border="0" align='center'>

                        <tr>

                            <td>

                                <text>User Role:   </text>

                            </td>

                            <td> </td>

                            <td>

                                <input type="radio" id="customer" name="role" value="customer">

                                <label for="customer">Customer</label><br>

                            </td>

                            <td>

                                <input type="radio" id="admin" name="role" value="admin">

                                <label for="admin">Admin</label><br>

                            </td>

                            <td>

                            <input type="radio" id="seller"name="role" value="seller">

                                <label for="seller">Seller</label><br>

                            </td>

                        </tr>
                        
                </table>
			    <table border="1"align="center">
               
					<tr>
						<td>Username: </td>
						<td><input type="text" size="30" name="username" value="" placeholder="Enter your username"></td>
					</tr>
                    <tr>
						<td>Email: </td>
						<td><input type="text" size="30" name="email" value="" placeholder="Enter your email"></td>
					</tr>
                    <tr>
						<td>Mobile No: </td>
						<td><input type="text" size="11" name="mobile_no" value="" placeholder="Enter your mobile no"></td>
					</tr>
					<tr>
						<td>New password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
					</tr>
                    <tr>
						<td>Retype New password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
					</tr>
                    <tr>
                        <td>DOB</td>
                        <td><input type="date" name="DOB" value="" /></td>
                    </tr>
                    <tr>
                        <td>gender</td>
                        <td>
                            <select name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </td>
                    </tr> 
					<tr>
                        <td>Enter your profile pic</td>
                        <td><input type="file" id="img" name="img" accept="image/*"></td>
						  
					</tr>
					<tr>
						<td align="center"colspan="2"><br><input type="submit" value="Register"><br>
                        <a href ="Adminlogin.php" >Already have an account.</a>
					</tr>
					
				</table>
		 	</form>
		</fieldset>
    </body>