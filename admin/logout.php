<?php
session_start();
session_destroy();
unset($_SESSION['admin_name']);
echo"<script>window.location.assign('login.php');</script>";
?>