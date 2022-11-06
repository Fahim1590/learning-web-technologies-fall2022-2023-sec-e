<?php 
    session_start();
    $role= $_POST['role'];
    // $user_typ = $_POST['user_typ']
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $password = $_POST['password'];
    $DOB = $_POST['DOB'];
    $gender = $_POST['gender'];
    $img = $_POST['img'];
    
    
    if($username == "" || $password == "" || $role =="" || $email == "" || $DOB == "" || $mobile_no== "" || $gender == "" || $img == "") {
        header('location:AdminReg.php?err=null');
    }
    elseif($role == "seller"){
        $seller = ['username'=> $username, 'password'=>$password, 'role'=>$role, 'email'=>$email, 'DOB'=>$DOB,'mobile_no'=>$mobile_no, 'gender'=>$gender, 'img'=>$img];
        $_SESSION['seller'] = $seller;
        $seller = $username."|".$password."|".$role."|".$email."|".$DOB."|".$mobile_no."|".$gender."|".$img."\r\n";
        $file = fopen('salesman.txt', 'a');
        fwrite($file, $seller);
        fclose($file);
        header('location:Adminlogin.php');
    }
    elseif($role == "admin"){
        $admin = ['username'=> $username, 'password'=>$password, 'role' => $role, 'email'=>$email, 'DOB'=>$DOB,'mobile_no'=>$mobile_no, 'gender'=>$gender, 'img'=>$img];
        $_SESSION['admin'] = $admin;
        $admin = $username."|".$password."|".$role ."|".$email."|".$DOB."|".$mobile_no."|".$gender."|".$img."\r\n";
        $file = fopen('admin.txt', 'a');
        fwrite($file, $admin);
        fclose($file);
        header('location:Adminlogin.php');
    }
    elseif($role == "customer"){
        $customer = ['username'=> $username, 'password'=>$password, 'role' => $role, 'email'=>$email, 'DOB'=>$DOB,'mobile_no'=>$mobile_no, 'gender'=>$gender, 'img'=>$img];
        $_SESSION['admin'] = $customer;
        $customer = $username."|".$password."|". $role."|".$email."|".$DOB."|".$mobile_no."|".$gender."|".$img."\r\n";
        $file = fopen('user.txt', 'a');
        fwrite($file, $customer);
        fclose($file);
        header('location:Adminlogin.php');
    }
    // else{
    //     $user_data = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'DOB'=>$DOB,'mobile_no'=>$mobile_no, 'gender'=>$gender, 'img'=>$img];
    //     $_SESSION['user_data'] = $user_data;
    //     $user_data = $username."|".$password."|".$email."|".$DOB."|".$mobile_no."|".$gender."|".$img."\r\n";
    //     $file = fopen('user.txt', 'a');
    //     fwrite($file, $user_data);
    //     fclose($file);
    //     header('location:Adminlogin.php');
        
    // }
?>