<?php
session_start();
if(!isset($_SESSION['admin_name']))
{
	echo"<script>window.location.assign('login.php');</script>";
}
$x=$_GET['x'];
include 'connection.php';
$q="delete from `user` where `uid`='$x'";
$res=mysqli_query($conn,$q);
if($res)
{
	echo"<script>window.location.assign('viewusers.php')</script>";
}
else
{
echo"<script>window.location.assign('viewusers.php')</script>";
}
?>