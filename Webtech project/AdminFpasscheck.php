<?php 
    session_start();
    $role= $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == "" || $password == "" || $role =="" ) {
        header('location:AdminReg.php?err=null');
    }
    elseif($role == "admin"){
        $file = fopen('admin.txt', "r");
        while(!feof($file)){
            $data = fgets($file);
            $admin = explode("|", $data);
            if($admin[0] == $username){            
                $admin = ['username'=> $username, 'password'=>$password, 'role' => $role];
                $_SESSION['admin'] = $admin;
                $admin = $username."|".$password."|".$role ;
                $file = fopen('admin.txt', 'a');
                fwrite($file, $admin);
                fclose($file);
                header('location:Adminlogin.php');}
            elseif($admin[0] != $username){

                header('location:AdminFpass.php?err=invalid_request');
            }
        }

    }
    elseif($role == "seller"){
        $file = fopen('salesman.txt', "r");
        while(!feof($file)){
            $data = fgets($file);
            $seller = explode("|", $data);
            if($seller[0] == $username){
                $seller = ['username'=> $username, 'password'=>$password, 'role'=>$role];
                $_SESSION['seller'] = $seller;
                $seller = $username."|".$password."|".$role;
                $file = fopen('salesman.txt', 'a');
                fwrite($file, $seller);
                fclose($file);
                header('location:Adminlogin.php');}
            elseif($seller[0] != $username){

                header('location:AdminFpass.php?err=invalid_request');
            }
        }
    }
    
    elseif($role == "customer"){
        $file = fopen('user.txt', "r");
        while(!feof($file)){
            $data = fgets($file);
            $customer = explode("|", $data);
            if($customer[0] == $username){
                $customer = ['username'=> $username, 'password'=>$password, 'role' => $role];
                $_SESSION['admin'] = $customer;
                $customer = $username."|".$password;
                $file = fopen('user.txt', 'a');
                fwrite($file, $customer);
                fclose($file);
                header('location:Adminlogin.php');}
            elseif($customer[0] != $username){

                header('location:AdminFpass.php?err=invalid_request');
            }
        }
    }
?>