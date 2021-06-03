<?php

session_start();

if (!isset($_SESSION['login'])) {
   header("Location:login.php");
} 

$id= $_GET['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$roll=$_POST['roll'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];

$conn=mysqli_connect('localhost','root','','sms');

$sql="update students set name='$name',age='$age',roll='$roll',address='$address',mobile='$mobile' where id=$id";

if(mysqli_query($conn,$sql))
	{
		header("Location:show.php?id=".$id);
	}
	else
	{
		echo "edit failed ...";
	}

?>