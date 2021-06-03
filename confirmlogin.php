<?php
$email=$_POST['email'];
$password=$_POST['password'];

$conn=mysqli_connect('localhost','root','','sms');

$sql="select * from users where email='$email' and password='$password'";
$result=mysqli_query($conn,$sql);

$rowcount=mysqli_num_rows($result);

if ($rowcount==1) {
	session_start();
	$_SESSION['login']=true;
	header("Location:index.php");
}
else
{
	session_start();
	$_SESSION['error']=true;
	header("Location:login.php");
}