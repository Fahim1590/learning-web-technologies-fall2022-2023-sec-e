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
                <legend>Add Product</legend>
                <table border="1">
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" value=""/></td>
                </tr>
                <tr>
                    <td>Buying Price: </td>
                    <td><input type="text" name="b_price" value=""/> </td>
                </tr>
                <tr>
                    <td>Selling Price: </td>
                    <td><input type="text" name="s_price" value=""/> </td>
                    <tr>
                <tr>
                    <td colspan="2"><input type="checkbox" name="display" value=""/>Display</td> 
                <tr>
                <tr>
                    <td colspan="2"><input type="submit" name="btn" value="save"/></td>
                <tr>
                </table>       
            </fieldset>
            </table>
        </form>
</body>
</html>