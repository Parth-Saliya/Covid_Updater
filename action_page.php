<?php
include('connection.php');
session_start();

$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION["uname"] = $username;
$_SESSION["password"] = $password;

$q="select * from admin where username='$username' && pwd='$password'";
$result=mysqli_query($db,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$username;
	include('home.php');
}
else
{
	echo 'Invalid Id Password';
}

?>