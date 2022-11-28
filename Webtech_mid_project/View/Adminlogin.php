

<html>

    <head><title>Login</title></head>
    <body>
        <fieldset>
            
        <div align="left">
            <img src="Pictures/AsianMART.png" width="80px" height="60px">
        </div>
		   <h1 align="center">Login</h1>
		    <form method="post" action="controller/AdminLogincheck.php" >
				 
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
			    <table align="center">
					<tr>
						<td>Username: </td>
						<td><input type="text" size="30" name="username" value="" placeholder="Username"></td>
					</tr>
					<tr>
						<td>password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
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
						<td align="center"colspan="2"><br>
							<input type="checkbox" name="" value="" /> Remember me</td>
					</tr>
					<tr>
						<td align="center"colspan="2"><br><input type="submit" value="Login"><br>
						<br><a href ="AdminFpass.php" >Forget Password?</a></td>
					</tr>
					<tr>
					    <td align= "center" colspan="2" rowspan=""><b>Don't Have an Account Yet?</b> <a href ="AdminReg.php" >Register Now!</a></td>
					</tr>
				</table>
		 	</form>
		</fieldset>
    </body>
</html>
