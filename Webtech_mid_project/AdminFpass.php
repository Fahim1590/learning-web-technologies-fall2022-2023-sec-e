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
		    
           <form action="AdminFpasscheck.php" method="post">
                
                    
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
						<td>Username : </td>
						<td><input type="text" size="30" name="username" value="" placeholder="Enter your valid username"></td>
					</tr>
                    <tr>
                        <td>Email :</td>
                        <td><input type="text" size="30" name="email" value="" placeholder="Enter your valid email"></td>
                    </tr>
                    <tr>
						<td>New password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
					</tr>
                    <tr>
						<td>Retype New password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
					
					<tr>
                        
						<td align="center"colspan="2"><br><input type="submit" value="Submit"><br>
                        <?php 
                            if(isset($_GET['err'])){
                                if($_GET['err'] == 'invalid_request'){
                                    echo "Please enter your valid username!";
                                }

                                if($_GET['err'] == 'null'){
                                    echo "Please enter your username/new password!";
                                }
                            }

                        ?>
                        </td>
                        
					</tr>
					
				</table>
		 	</form>
		</fieldset>
    </body>