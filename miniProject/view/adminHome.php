<?php
    session_start();

    
    if(!isset($_COOKIE['status'])){
        header('location: Adminlogin.php?err=invalid_request');
    }
?>
<html>
    <head>
        <title>Admin Homepage</title>
    </head>
    <body>
        <fieldset>
           
           
            

            

            

            <center><h1>Welcome <?php echo $_SESSION['user']['username']?></h1></center>
               
                <form>
                    
                    <table border="0" align="center" width="75%">
                        <tr>
                            <td align="center"><a href="viewProfile.php">Profile</td>
                            
                        </tr>
                        <tr>
                            <td align="center"><a href="changePass.php">Change Password</td>
                            
                        </tr>
                        <tr>
                            <td align="center"><a href="allUser.php">View Users</td>
                            
                        </tr>
                        <tr>
                            <td align="center"><a href="logout.php">Logout</td>
                            
                        </tr>
                    </table>                                            
                    </form>
        </fieldset>
    </body>
</html>