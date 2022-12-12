<?php

// require 'Controller/AdminLogincheck.php';

?>


<html>

    <head><title>Login</title></head>
    <body>
        
            
        
		   <h1 align="center">Login</h1>
		    <form method="post" action="../controller/logincheck.php" enctype="" >
				 
				<fieldset>
                    <legend>LOGIN</legend>
			    <table align="center">
					<tr>
						<td>User Id: </td>
						<td><input type="text" size="30" name="id" value="" placeholder="ID"></td>
					</tr>
					<tr>
						<td>password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
					</tr>
					<tr>
						<td></td>
						
				    </tr>
					<tr>
						<td align="center"colspan="2"><br>
							<input type="checkbox" name="remember" value="" /> Remember me</td>
					</tr>
                    <tr>
						<td align="center"colspan="2"><br><input type="submit" value="Login"><br>
						
					</tr>
					<tr>
						<td></td>
						<td>
							<?php 
								if(isset($_GET['err'])){
									if($_GET['err'] == 'invalid_request'){
										echo "Please enter your valid username/password!";
									}

									if($_GET['err'] == 'null'){
										echo "Please enter your username/password!";
									}
								}

							?>
						</td>
				    </tr>
					<tr>
					    <td align= "center" colspan="2" rowspan=""> <a href ="reg.php" >Register Now!</a></td>
					</tr>
				</table>
            </fieldset>
		 	</form>
		
    </body>
</html>