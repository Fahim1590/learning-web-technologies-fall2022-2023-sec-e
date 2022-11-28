<html>
    <head>
        <title>Salesman details</title>
    </head>
    <body>
        <fieldset>
            <div align="right">               
                <b><a target="_self" href="AdminHome.php">Home</a> |</b>
    
                <b><a target="_self" href="AdminLogout.php">Logout</a></b>
            </div>

            <div align="left">
                <img src="Pictures/AsianMART.png" width="80px" height="60px">
            </div>
                
            <center><h1>Salesman Details</h1></center>
                <form method="post" action="">
                    <table border="01" align="center">
                        <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td><?php echo $_SESSION['user']['username']?></td>
                            <td><?php echo $_SESSION['user']['email']?></td>
                            <td><?php echo $_SESSION['user']['phone_no']?></td>
                        </tr>
                    </table>
                    <center><br><a target="_self" href="Ad_editSalesman.html">Update Salesman details</a></center>
                </form>
        </fieldset>
    </body>
</html>