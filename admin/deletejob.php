<?php
session_start();
if(!isset($_SESSION['admin_name']))
{
	echo"<script>window.location.assign('login.php');</script>";
}
$x=$_GET['x'];
include 'connection.php';
$q="delete from `job` where `jid`='$x'";
$res=mysqli_query($conn,$q);
if($res)
{
	echo"<script>window.location.assign('viewjob.php');</script>";
}
else
{
echo"<script>window.location.assign('viewjob.php');</script>";
}
?>