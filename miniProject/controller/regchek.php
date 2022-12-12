<?php
    require_once "../model/userModel.php";
    session_start();

    
    $id = $_POST['id'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_typ= $_POST['user_typ'];
    
    
    
    if($id == "" || $password == "" || $name =="" || $email == "" || $user_typ == "") {
        header('location:../view/reg.php?err=null');
    }
    elseif($user_typ == "admin"){
        $user = ['id'=> $id, 'password'=>$password, 'name'=>$name, 'email'=>$email, 'user_typ'=>$user_typ];
        $status=insertAuser($user);

        if($status){
            header('location:../view/login.php');
        }
        else
        {
            header('location:../view/reg.php?err=database_error');;
        }
    }
    elseif($user_typ == "user"){
        $user = ['id'=> $id, 'password'=>$password, 'name'=>$name, 'email'=>$email, 'user_typ'=>$user_typ];
        $status=insertuser($user);

        if($status){
            header('location:../view/login.php');
        }
        else
        {
            header('location:../view/reg.php?err=database_error');;
        }
    }
    
    



?>