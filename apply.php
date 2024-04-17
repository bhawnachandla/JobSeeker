<?php
  
 session_start();
 //echo $_SESSION['user_name'];
    if(!isset($_SESSION['user_name'])){
        echo "<script>alert('Please login first..!');</script>";
        echo"<script>window.location.assign('index.php');</script>";
      } 
      else {
    include 'connection.php';
    include "header1.php";
        if(isset($_POST['submit'])){
            $jid = $_POST['jid'];
            date_default_timezone_set('Asia/Kolkata');
            $date = date('d-m-Y');
            $time = date('H:i:s a');
            $resume = rand(0,9999).$_FILES['resume']['name'];
            $rlocation = $_FILES['resume']['tmp_name'];
            $q = "insert into `apply` (`jid`,`uid`,`astatus`,`date`,`time`,`resume`) values ('$jid','$_SESSION[user_id]','APPLIED','$date','$time','$resume')";
            $res = mysqli_query($conn,$q);
            if($res)
            {
                move_uploaded_file($rlocation,'upload/'.$resume);
                echo "<script>alert('Applied for job..!');</script>";
            }
            else
            {
                echo "<script>alert('Try Again..!');</script>";
            }
        }
      }
    
?>
<!-- plans -->
<section class="banner-bottom-wthree bg-light py-lg-5 py-3">
        <div class="container">
		<!---728x90--->
            <div class="inner-sec-w3ls py-md-5 py-3">
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Apply </span>Job</h3>
                <div class="card-deck text-center row ">
                    <div class="form col-md-8 offset-2">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label class="my-2">Name</label>
                                <input class="form-control" type="text" name="cname" placeholder="" required="required" readonly value="<?php echo $_SESSION['user_name'];?>" />
                            </div>
                            <div class="form-group">
                                <label>Resume</label>
                                 <input class="form-control" type="file" name="resume" placeholder="" required="required" />
                                 <input type="hidden" value="<?php echo $_GET['x'];?>" name="jid"/>
                             </div>
                             <div class="input-group1">
                             <input class="form-control btn-primary" type="submit" value="Submit" name="submit">
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- plans2 -->
<?php 
 	include "footer.php";
 ?>