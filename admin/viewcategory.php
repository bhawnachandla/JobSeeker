<?php
session_start();
if(!isset($_SESSION['admin_name'])){
  echo"<script>window.location.assign('login.php');</script>";
}
include "header1.php";
include "connection.php";
?><ol class="breadcrumb justify-content-left">
    <li class="breadcrumb-item">
      <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">view Category</li>
  </ol>
  <section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
    <div class="inner-sec-w3ls">
    <!---728x90--->
      <h3 class="tittle text-center mb-lg-5 mb-3">
        <span>Admin Panel</span>View Category</h3>
        <!---728x90--->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 main_grid_contact" style="padding: 5px 15px 25px 15px !important;">
            <div class="form">
              <table class="table table-striped table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $q = "select * from `category`";
                    $res = mysqli_query($conn,$q);
                  if(mysqli_num_rows($res)>0)
                    {
                      while($row = mysqli_fetch_array($res)){
                        ?>
                        <tr>
                          <th scope="row"><?php echo $row['cname'];?></th>
                          <td><?php echo $row['cdescription'];?></td>
                          <td><a href="deletecategory.php?x=<?php echo$row['cid'];?>"class="btn btn-dark">Delete</a></td>
                        </tr>
                        <?php
                      }
                    }
                  else
                    {
                      ?>
                      <tr>
                        <th scope="row" colspan="4">No Record Found..!!</th>
                      </tr>
                      <?php
                    }
                  ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
  include "footer.php";
?>		
