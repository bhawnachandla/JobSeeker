<?php
session_start();
if(!isset($_SESSION['admin_name'])){
  echo"<script>window.location.assign('login.php');</script>";
}
  include "connection.php";
  include "header1.php";
?> <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
<div class="container">
    <div class="inner-sec-w3ls py-lg-5  py-3">
        <h3 class="tittle text-center mb-lg-4 mb-3">
            <span>Welcome</span>Admin</h3>
        <div class="row populor_category_grids mt-5">
            <div class="col-md-3 category_grid">
                <div class="view view-tenth">
                    <div class="category_text_box">
                        <i class="fas fa-bullhorn"></i>
                        <h3><a href="viewjob.php">Total Jobs</a></h3>
                        <p><?php
                          $q = "select count(`jid`) from `job`";
                          $res = mysqli_query($conn,$q);
                          $row = mysqli_fetch_array($res);
                          echo $row[0];
                        ?></p>
                    </div>
                    <div class="mask">
                        <a href="viewjob.php">
                            <img src="images/p1.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 category_grid">
                <div class="view view1 view-tenth">
                    <div class="category_text_box">
                        <i class="fas fa-graduation-cap"></i>
                        <h3><a href="viewcompany.php">Total Companies</a></h3>
                        <p><p><?php
                          $q = "select count(`coid`) from `company`";
                          $res = mysqli_query($conn,$q);
                          $row = mysqli_fetch_array($res);
                          echo $row[0];
                        ?></p></p>
                    </div>
                    <div class="mask">
                        <a href="viewcompany.php">
                            <img src="images/p2.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 category_grid">
                <div class="view view2 view-tenth">
                    <div class="category_text_box">
                        <i class="fab fa-accusoft"></i>
                        <h3><a href="viewusers.php">Total Users</a> </h3>
                        <p><p><?php
                          $q = "select count(`uid`) from `user`";
                          $res = mysqli_query($conn,$q);
                          $row = mysqli_fetch_array($res);
                          echo $row[0];
                        ?></p></p>
                    </div>
                    <div class="mask">
                        <a href="viewusers.php">
                            <img src="images/p3.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 category_grid">
                <div class="view view3 view-tenth">
                    <div class="category_text_box">
                        <i class="fas fa-users"></i>
                        <h3><a href="viewusers.php">Total Applications</a></h3>
                        <p><p><?php
                          $q = "select count(`aid`) from `apply`";
                          $res = mysqli_query($conn,$q);
                          $row = mysqli_fetch_array($res);
                          echo $row[0];
                        ?></p></p>
                    </div>
                    <div class="mask">
                        <a href="viewusers.php">
                            <img src="images/p4.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php
  include "footer.php";
?>