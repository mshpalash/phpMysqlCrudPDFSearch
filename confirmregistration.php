<?php

session_start();

if (!isset($_SESSION['login'])) {
   header("Location:login.php");
} 

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$conpass=$_POST['confirm_password'];

if ($pass != $conpass) {

		$_SESSION['error_msg']	="password and confirm password didn't match";
		header("Location:registration.php");
}
else
{
	$conn=mysqli_connect('localhost','root','','sms');

$sql1="select * from users where email='$email'";
$result1=mysqli_query($conn,$sql1);

$rowcount=mysqli_num_rows($result1);

if ($rowcount==1) {

		$_SESSION['error_msg']	="email already exists please login";
		header("Location:registration.php");
}
else
{

	$sql="INSERT INTO users values (null,'$name','$email','$pass')";

if (mysqli_query($conn,$sql)) {

		$_SESSION['reg_msg']	="Registration Successfully, Please Login.";
		header("Location:login.php");
	}
}
}


