<?php 
    session_start();
    $p_name = $_POST['name'];
    $b_price = $_POST['b_price'];
    $s_price = $_POST['s_price'];

    if($p_name == "" || $b_price == "" || $s_price == "") {
        header('location: Add_product.php?err=null');
    }else{

        $con = mysqli_connect('localhost', 'root', '', 'Product');
        $sql = "insert into users values('', '{$p_name}', '{$b_price}', '{$s_price}')";
        $status = mysqli_query($con, $sql);
       
        if($status){
            header('location: Add_product.php');
        }else{
            echo "Database error...";
        }
    }
?>