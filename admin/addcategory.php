<?php
session_start();
if(!isset($_SESSION['admin_name'])){
  echo"<script>window.location.assign('login.php');</script>";
}
include "header1.php";
include "connection.php";
if(isset($_POST['submit']))
  {
    $cname=$_POST['cname'];
    $cdescription=$_POST['cdescription'];
    date_default_timezone_set('Asia/Kolkata');
    $cdate=date('d-m-y');
    $ctime=date('H:i:S');
    $q="insert into `category`(`cname`,`cdescription`,`cdate`,`ctime`) values('$cname','$cdescription','$cdate','$ctime')";
    $res=mysqli_query($conn,$q);
    if($res)
    {
      echo"<script>alert('category added.!');</script>";
    }
    else
    {
      echo"<script>alert('Try Again');</script>";
    }
    }
    ?>
    <ol class="breadcrumb justify-content-left">
    <li class="breadcrumb-item">
      <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Add Category</li>
  </ol>
  <section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
    <div class="inner-sec-w3ls">
    <!---728x90--->
      <h3 class="tittle text-center mb-lg-5 mb-3">
        <span>Admin Panel</span>Add Category
      </h3>
        <!---728x90--->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 main_grid_contact" style="padding: 5px 50px 25px 50px !important;">
            <div class="form">
              <form action="" method="post">
                <div class="form-group">
                  <label class="my-2">Name</label>
                  <input class="form-control" type="text" name="cname" placeholder="" required="required" pattern="[A-Za-z ]{1,}" />
                </div>
               <div class="form-group">
                  <label>Description</label>
                  <textarea id="textarea" placeholder="" name="cdescription" required="required"></textarea>
                </div>
                <div class="input-group1">
                  <input class="form-control" type="submit" value="Submit" name="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  include "footer.php";
?>		
