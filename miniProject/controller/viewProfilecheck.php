<?php
include('../userModel/.php');

$unameOfUser=$nameOfUser=$emailOfUser=$contactOfUser=$passOfUser=$error=$errorPrf="";

session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location:login.php"); 
}
else
{
    $unameOfUser=$_SESSION["username"];
    $passOfUser=$_SESSION["password"];
}

if (!empty($unameOfUser) && !empty($passOfUser))
{
    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->CheckUser($conobj,"serviceprovider",$unameOfUser,$passOfUser);
    if ($userQuery->num_rows > 0 && $userQuery->num_rows < 2)
    {
        while($row = $userQuery->fetch_assoc())
        {
            $idOfUser=$row['id'];
            $nameOfUser= $row['name'];
            $emailOfUser=$row['email'];
            $typeOfUser=$row['user_typ']; 
           
        }
    }
    $connection->CloseCon($conobj);
}
?>