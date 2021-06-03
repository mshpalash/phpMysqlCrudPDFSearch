<?php

session_start();

if (!isset($_SESSION['login'])) {
   header("Location:login.php");
} 

$name=$_POST['name'];
$age=$_POST['age'];
$roll=$_POST['roll'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];

$conn=mysqli_connect('localhost','root','','sms');

$sql="INSERT INTO students values (null,'$name','$age','$roll','$address','$mobile');";

if(mysqli_query($conn,$sql))
	{
		$_SESSION['success']==1;
		header("Location:index.php");
	}
	else
	{
		$_SESSION['error']==1;
		header("Location:insert.php");
	}

?>