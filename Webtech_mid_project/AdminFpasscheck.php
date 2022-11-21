<?php 
    session_start();
    $role= $_POST['role'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if($username == "" || $password == "" || $email == "" || $role =="" ) {
        header('location:AdminReg.php?err=null');
    }
    elseif($role == "admin"){
        $file = fopen('admin.txt', "r");
        while(!feof($file)){
            $data = fgets($file);
            $admin = explode("|", $data);
            if($admin[0] == $username && $admin[3] == $email){            
                $admin = ['username'=> $username, 'password'=>$password, 'role' => $role];
                
                $admin = $username."|".$password."|".$role."\r\n" ;
                $file = fopen('admin.txt', 'a');
                fwrite($file, $admin);
                fclose($file);
                header('location:Adminlogin.php');}
            elseif($admin[0] == $username && $admin[3] != $email || $admin[0] != $username && $admin[3] == $email ){

                header('location:AdminFpass.php?err=invalid_request');
            }
            // elseif($admin[0] != $username && $admin[3] == $email){

            //     header('location:AdminFpass.php?err=invalid_request');
            // }
        }

    }
    elseif($role == "seller"){
        $file = fopen('salesman.txt', "r");
        while(!feof($file)){
            $data = fgets($file);
            $seller = explode("|", $data);
            if($seller[0] == $username && $seller[3] == $email){
                $seller = ['username'=> $username, 'password'=>$password, 'role'=>$role];
                $seller = $username."|".$password."|".$role."\r\n" ;
                $file = fopen('salesman.txt', 'a');
                fwrite($file, $seller);
                fclose($file);
                header('location:Adminlogin.php');}
            elseif($seller[0] == $username && $seller[3] != $email){

                header('location:AdminFpass.php?err=invalid_request');
            }
            elseif($seller[0] != $username && $seller[3] == $email){

                header('location:AdminFpass.php?err=invalid_request');
            }
        }
    }
    
    elseif($role == "customer"){
        $file = fopen('user.txt', "r");
        while(!feof($file)){
            $data = fgets($file);
            $customer = explode("|", $data);
            if($customer[0] == $username && $customer[3] == $email){
                $customer = ['username'=> $username, 'password'=>$password, 'role' => $role];
                $customer = $username."|".$password."|".$role."\r\n" ;
                $file = fopen('user.txt', 'a');
                fwrite($file, $customer);
                fclose($file);
                header('location:Adminlogin.php');}
            elseif($customer[0] == $username && $customer[3] != $email){

                header('location:AdminFpass.php?err=invalid_request');
            }
            elseif($customer[0] != $username && $customer[3] == $email){

                header('location:AdminFpass.php?err=invalid_request');
            }
        }
    }
?>