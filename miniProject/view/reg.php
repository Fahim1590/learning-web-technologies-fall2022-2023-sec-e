<html>
    <head><title>Registration</title></head>
    <body>
        
          
        
        </div>
		   <h1 align="center">Registration</h1>
		    <form action="../controller/regcheck.php" method="post">
                
                <fieldset>  
                <legend>REGISTRATION</legend>   
			    <table border="1"align="center">
               
					<tr>
						<td>Id: </td>
						<td><input type="text" size="30" name="id" value="" placeholder="Enter unique ID"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
					</tr>
                    <tr>
						<td>Confirm Password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
					</tr>
                    <tr>
						<td>Name: </td>
						<td><input type="text" size="30" name="name" value="" placeholder="Enter your name"></td>
					</tr>
                    <tr>
						<td>Email: </td>
						<td><input type="text" size="30" name="email" value="" placeholder="Enter your email"></td>
					</tr>
                    <tr>
                        <td>User Type</td>
                        <td>
                            <select name="user_typ">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                                
                            </select>
                        </td>
                    </tr> 
					<tr>
    
						<td align="center"colspan="2"><br><input type="submit" value="Register"><br>
                        <?php 

                            if(isset($_GET['err'])){
                            
                            if($_GET['err'] == 'null'){
                                echo "Please fill all the requirement";
                            }
                            }
                        ?>
                        <br><a href ="login.php" >Login</a>
					</tr>
					
				</table>
                </fieldset>
		 	</form>
		
    </body>