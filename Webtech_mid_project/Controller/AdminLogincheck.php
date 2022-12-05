<?php 
    session_start();
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role= $_POST['role'];
    
    if($username == "" || $password == "" || $role == "") {
        header('location: ../View/Adminlogin.php?err=null');
    }
    elseif($role == "admin"){
        $file = fopen('admin.txt', "r");
        while(!feof($file)){
            $data = fgets($file);
            $admin = explode("|", $data);
            if($admin[0] == $username && $admin[1] == $password){
                setcookie('status', 'true', time()+3600, '/');
                header('location:../View/AdminHome.php');
            }
            elseif($admin[0] == $username && $admin[1] != $password || $admin[0] != $username && $admin[1] == $password){

                header('location: ../View/Adminlogin.php?err=invalid_request');
            }
            // elseif($admin[0] != $username && $admin[1] == $password){

            //     header('location: Adminlogin.php?err=invalid_request');
            // }


        }
    }
    elseif($role == "seller"){
        $file = fopen('salesman.txt', "r");
        while(!feof($file)){
            $data = fgets($file);
            $seller = explode("|", $data);
            if($seller[0] == $username && $seller[1] == $password){
                setcookie('status', 'true', time()+3600, '/');
                header('location:../View/SellerHome.php');
            }
            elseif($seller[0] == $username && $seller[1] != $password || $seller[0] != $username && $seller[1] == $password){

                header('location: ../View/Adminlogin.php?err=invalid_request');
            }
            // elseif($seller[0] != $username && $seller[1] == $password){

            //     header('location: Adminlogin.php?err=invalid_request');
            // }
        }
    }
    elseif($role == "customer"){
        $file = fopen('user.txt', "r");
        while(!feof($file)){
            $data = fgets($file);
            $customer = explode("|", $data);
            if($customer[0] == $username && $customer[1] == $password){
                setcookie('status', 'true', time()+3600, '/');
                header('location:../View/CustomerHome.php');
            }
            elseif($customer[0] == $username && $customer[1] != $password || $customer[0] != $username && $customer[1] == $password){

                header('location: ../View/Adminlogin.php?err=invalid_request');
            }
            // elseif($customer[0] != $username && $customer[1] == $password){

            //     header('location: Adminlogin.php?err=invalid_request');
            // }

        }
    }
    // else{
    //     header('location: Adminlogin.php?err=invalid_request');
    // }
    // else{

    //     $file = fopen('user.txt', "r");
    //     while(!feof($file)){
    //         $data = fgets($file);
    //         $user_data = explode("|", $data);
    //         if($user_data[0] == $username && $user_data[1] == $password){
    //             setcookie('status', 'true', time()+3600, '/');
    //             header('location:AdminHome.php');
    //         }
        
      
    //     echo "invalid username/pass";
    //     }
    // }
?>