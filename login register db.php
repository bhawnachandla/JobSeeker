<?php

    include 'connection.php';
    session_start();
    if(isset($_POST['register']))
    {
        $uname = $_POST['uname'];
        $uemail = $_POST['uemail'];
        $upassword = $_POST['upassword'];
        $uaddress = $_POST['uaddress'];
        $ucontact = $_POST['ucontact'];
        $uqualification = $_POST['uqualification'];
        $uexperience = $_POST['uexperience'];
        $upic = $_FILES['upic']['name'];
        $ulocation = $_FILES['upic']['tmp_name'];
        $q = "insert into `user` (`uname`, `uemail`, `upassword`, `uaddress`, `ucontact`, `uqualification`, `uexperience`, `upic`) VALUES ('$uname','$uemail','$upassword','$uaddress','$ucontact','$uqualification','$uexperience','$upic')";
        $res = mysqli_query($conn,$q);
        if($res)
        {
            move_uploaded_file($ulocation,'upload/'.$upic);
            echo "<script>alert('Thank You For Registering. Login Now');</script>";
            echo "<script>window.location.assign('login.php');</script>";
        }
        else
        {
            echo "<script>alert('Try Again..!')</script>";
            echo "<script>window.location.assign('register.php');</script>";
        }
    }
    if(isset($_POST['login']))
    {   
        $uemail = $_POST['uemail'];
        $upassword = $_POST['upassword'];
        $q = "select * from `user` where `uemail`='$uemail' and `upassword`='$upassword'";
        $res = mysqli_query($conn,$q);
        if(mysqli_num_rows($res)>0)
        {
            $row = mysqli_fetch_array($res);
          
            $_SESSION['user_id'] = $row['uid'];
            $_SESSION['user_name'] = $row['uname'];
            $_SESSION['user_email'] = $row['uemail'];
            echo "<script>window.location.assign('uindex.php');</script>";
        }
        else
        {
            echo "<script>alert('Wrong Email/Password');</script>";
            echo "<script>window.location.assign('login.php');</script>";
        }
    }
?>