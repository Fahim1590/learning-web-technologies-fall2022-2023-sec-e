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
<head>
    <title>Add product</title>
</head>
<body>
        <form method="post" action="Add_db.php" enctype="">
            <fieldset>
                <legend>DISPLAY</legend>
                <table border="1">
                <tr>
                    <th>Name</th>
                    <th>PROFIT</th>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                <tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                <tr>
                
                </table>       
            </fieldset>
            </table>
        </form>
</body>
</html>