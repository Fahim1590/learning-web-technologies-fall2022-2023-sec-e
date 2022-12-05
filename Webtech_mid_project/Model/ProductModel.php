<?php 
    require_once "Db_config.php";

    function showProduct($prod){
        $con = getConnection();
        $sql = "select * from beverages where name='{$prod['name']}' , details='{$prod['details']}' and price='{$prod['price']}' details='{$prod['details']}'";
        $result = mysqli_query($con, $sql);
        $prod = mysqli_fetch_assoc($result);
        if($prod != null){
            return true;
        }else{
            return false;
        }
    }

    function insertProduct($prod){
        $con = getConnection();
        $sql = "insert into beverages values('', '{$prod['name']}', '{$prod['details']}', '{$prod['price']}','{$prod['quantity']}','{$prod['status']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function getAllProduct(){
		$query= "select p.*,name as 'c_name' from beverages ";
        $rs = get($query);
		return $rs;
	}

    function editProduct(){
        
    }

    function deleteProduct(){
        
    }

    function getProductByID(){
        
    }
?>