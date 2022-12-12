<?php 
    session_start();
    
    require_once "../model/userModel.php";

    $id = $_POST['id'];
    $password = $_POST['password'];
    

    
    $user = ['id'=>$id, 'password'=>$password];
    
    $status = alogin($user);

    if($id == "" || $password == "") {
        
        header('location: ../view/login.php?err=null');
    }else if($status){
        $_SESSION['status'] = "true";
        $_SESSION['user']=$user;
        setcookie('status', 'true', time() + 3000, '/');
        
            header('location: ../view/adminHome.php');

       
    }
    
    else{
        echo "invalid user";
    }
    
    $user = ['id'=>$id, 'password'=>$password];
    $status = clogin($user);

    if($id == "" || $password == "") {
        
        header('location: ../view/login.php?err=null');
    }else if($status){
        $_SESSION['status'] = "true";
        setcookie('status', 'true', time() + 3000, '/');
        
            header('location: ../View/CustomerHome.php');

       
    }
    
    else{
        echo "invalid user";
    }
    ?>