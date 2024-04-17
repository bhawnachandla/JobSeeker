<?php
session_start();
session_destroy();
unset($_SESSION['user_name']);
unset($_SESSION['user_id']);
unset($_SESSION['user_email']);
echo"<script>window.location.assign('index.php');</script>";
?>