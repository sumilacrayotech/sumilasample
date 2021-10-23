<?php
session_start();
require('dbconnect.php');


$username=$_POST['username'];
//echo md5($_POST['password']);
//die;
$password=md5($_POST['password']);
$sql = "SELECT  username,password FROM login where username='$username' and password='$password'";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$_SESSION['username']=$username;
    header("Location:admin/home.php");

} else {
	$_SESSION['in']=1;
    header("Location: login.php");
}
$conn->close();




?>