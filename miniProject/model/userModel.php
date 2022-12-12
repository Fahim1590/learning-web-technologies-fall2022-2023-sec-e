<?php

  require_once "db_config.php";
  
  function insertAuser($user){
    $con = getConnection();

    $sql = "INSERT INTO admin VALUES('{$user['a_id']}',  '{$user['password']}','{$user['name']}', '{$user['email']}','{$user['user_typ']}'";

    $status = mysqli_query($con, $sql);
    return $status;
  }
  function insertuser($user){
    $con = getConnection();

    $sql = "INSERT INTO user VALUES('{$user['a_id']}',  '{$user['password']}','{$user['name']}', '{$user['email']}','{$user['user_typ']}'";

    $status = mysqli_query($con, $sql);
    return $status;
  }
  function alogin($user){
    $con = getConnection();

    $sql = "SELECT * FROM admin WHERE a_id='{$user['id']}' and password='{$user['password']}' ";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);

    if($user != null){
        return true;
    }else{
        return false;
    }
  }

  function ulogin($user){
    $con = getConnection();

    $sql = "SELECT * FROM user WHERE u_id='{$user['id']}' and password='{$user['password']}' ";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);

    if($user != null){
        return true;
    }else{
        return false;
    }
  }

  

  function getAllAuser(){
    $con = getConnection();

    $sql = "SELECT * FROM admin ";

    $status = mysqli_query($con, $sql);
    return $status;
  }

  function getAlluser(){
    $con = getConnection();

    $sql = "SELECT * FROM user ";

    $status = mysqli_query($con, $sql);
    return $status;
  }
  
  function editAuser(){
    $con = getConnection();

    $sql = "UPDATE admin SET('', '{$user['password']}', '', '', '')";

    $status = mysqli_query($con, $sql);
    return $status;
  }

  function edituser(){
    $con = getConnection();

    $sql = "UPDATE user SET('', '{$user['password']}', '', '', '')";

    $status = mysqli_query($con, $sql);
    return $status;
  }


?>