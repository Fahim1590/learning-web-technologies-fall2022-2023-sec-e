<?php
    // require_once 'Models/Db_config.php';
	session_start();
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$err_db="";
	

	$hasError=false;
	

	if(isset($_POST["register"])){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		elseif(strlen($_POST["name"]) <=3){
			$err_name="Name Must be greater than 3";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		elseif(isset($_POST[""])){
		    echo htmlspecialchars($_POST["uname"]);
		}
	    elseif(strlen($_POST["uname"])<6){
			$err_uname="Username Must Be 6 characters Long";
			$hasError = true;
		}
		elseif(strpos($_POST["uname"],"")){
			$err_uname="Username Should Not Contain White Space";
			$hasError = true;
			
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="password Required";
			$hasError = true;
			
		}
		
		elseif(strlen($_POST["pass"])<6){
			$err_pass="password must Be 6 characters Long";
			$hasError = true;
		}
		elseif(strpos($_POST["pass"],"")){
			$err_pass="Password Should Not Contain White Space";
			$hasError = true;

		}
		else{
			$pass = $_POST["pass"];
		}
		if(empty($_POST["cpass"])){
			$err_cpass="Retype password";
			$hasError = true;
		}
		elseif(strlen($_POST["cpass"])<6){
			$err_pass="password must Be 6 characters Long";
			$hasError = true;
		}
		else{
			$cpass = $_POST["cpass"];
		}
		if ($pass!= $cpass) {
            $err_cpass = "you have to write both password correctly";
			$hasError = true;
		}
		else{
			$cpass = $_POST["cpass"];
		}
		
		if(empty($_POST["phone"])){
			$err_phone = "Contact number Required";
			$hasError = true;
		}
		elseif (strlen($_POST["phone"]) <= 10) 
		{
            $err_phone = "Phone Number needs to be greater than 11";
			$hasError = true;
		}	
		else{
			$phone = $_POST["phone"];
		}
	
		
		
		if(!$hasError){
			$rs=insertUser($name,$uname,$_POST["pass"],$cpass,$_POST["email"],$phone);
			if($rs===true){

				
				header("Location:adminLogin.php");
			}
			$err_db= $rs;
			
			
		}
	
	}
	else if (isset ($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="pass Required";
			$hasError = true;
		}
		else{
			$pass=$_POST["pass"];
		}
		if(authenticateUser($_POST["uname"],$_POST["pass"])){
			$_SESSION["uname"] = $_POST["uname"];
			$_SESSION["pass"] = $_POST["pass"];

			header("Location:dashboard.php");
		}
		$err_db= "Username password invalid";
	}
	else if(isset($_POST["update_profile"])){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		elseif(strlen($_POST["name"]) <=3){
			$err_name="Name Must be greater than 3";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		elseif(isset($_POST["uname"])){
		    echo htmlspecialchars($_POST["uname"]);
		}
	    elseif(strlen($_POST["uname"])<6){
			$err_uname="Username Must Be 6 characters Long";
			$hasError = true;
		}
		elseif(strpos($_POST["uname"],"")){
			$err_uname="Username Should Not Contain White Space";
			$hasError = true;
			
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="password Required";
			$hasError = true;
			
		}
		
		elseif(strlen($_POST["pass"])<6){
			$err_pass="password must Be 6 characters Long";
			$hasError = true;
		}
		elseif(strpos($_POST["pass"],"")){
			$err_pass="Password Should Not Contain White Space";
			$hasError = true;

		}
		else{
			$pass = $_POST["pass"];
		}
		if(empty($_POST["cpass"])){
			$err_cpass="Retype password";
			$hasError = true;
		}
		elseif(strlen($_POST["cpass"])<6){
			$err_pass="password must Be 6 characters Long";
			$hasError = true;
		}
		else{
			$cpass = $_POST["cpass"];
		}
		if ($pass!= $cpass) {
            $err_cpass = "you have to write both password correctly";
			$hasError = true;
		}
		else{
			$cpass = $_POST["cpass"];
		}
		
		
		if(empty($_POST["phone"])){
			$err_phone = "Contact number Required";
			$hasError = true;
		}
		elseif (strlen($_POST["phone"]) <= 10) 
		{
            $err_phone = "Phone Number needs to be greater than 11";
			$hasError = true;
		}	
		else{
			$phone = $_POST["phone"];
		}
	
		
		
		if(!$hasError){
			$rs=updateProfile($name,$uname,$pass,$cpass,$email,$phone);
			if($rs===true){
				header("Location:Profile.php");
			}
			$err_db= $rs;
			
			
		}
	
	}

	function validateEmail($email){
		$pos_at = strpos($email,"@"); 
		$pos_dot = strpos($email,".",$pos_at); 
		if($pos_dot > $pos_at){
			return true;
		}
		return false;
	}
    ?>