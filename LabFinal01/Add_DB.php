<?php 
    session_start();
    $p_name = $_POST['name'];
    $b_price = $_POST['b_price'];
    $s_price = $_POST['s_price'];
    $display = $_POST['display'];

    if($p_name == "" || $b_price == "" || $s_price == "") {
        header('location: AddProduct.php?err=null');
    }else{
        if($display== true){

            $con = mysqli_connect('localhost', 'root', '', 'product_db');
            $sql = "insert into products values( '{$p_name}', '{$b_price}', '{$s_price}')";
            $status = mysqli_query($con, $sql);
        
            if($status){
                header('location: AddProduct.php');
            }else{
                echo "Database error...";
            }
        }
        else{
            header('location: AddProduct.php');
        }
    }  
?>