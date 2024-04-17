<?php
session_start();
include'connection.php';
$email=$_POST["email"];
$password=$_POST["password"];
$q="select * from `admin` where`email`='$email' and `password`='$password'";
$result=mysqli_query($conn,$q);
if(mysqli_num_rows($result)>0)
{
	$_SESSION['admin_name']='admin';
	echo"<script>
	window.location.assign('index.php');</script>";
}

else
{
	echo "wrong email/password";
}
?> 