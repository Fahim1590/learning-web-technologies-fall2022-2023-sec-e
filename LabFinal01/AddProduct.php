<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null value";
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
                    <label for="name">Name</label><br>
                    <input type="text" name="name" value=""/><br>
                </tr>
                <tr>
                    <label for="b_price">Buying Price </label><br>
                    <input type="text" name="b_price" value=""/><br>
                </tr>
                <tr>
                    <label for="S_price">Selling Price</label><br>
                    <input type="text" name="s_price" value=""/><br>
                <tr>
                <tr>
                    <input type="checkbox" name="display" value=""/>Display<br>
                <tr>
                <tr>
                    <input type="submit" name="btn" value="save"/>
                </table>       
            </fieldset>
            </table>
        </form>
</body>
</html>