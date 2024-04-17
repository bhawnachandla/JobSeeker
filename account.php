<?php
    session_start();
    include 'connection.php';
	include "header1.php"; 
?>
<section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
    <div class="inner-sec-w3ls">
    <!---728x90--->
      <h3 class="tittle text-center mb-lg-5 mb-3">
        <span>My</span>Account</h3>
        <!---728x90--->
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 main_grid_contact" style="padding: 5px 50px 25px 50px !important;">
                <div class="form">
                    <table class="table table-striped table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Description</th>
                          <th scope="col">Vacancy</th>
                          <th scope="col">Soft Skills</th>
                          <th scope="col">Hard Skills</th>
                          <th scope="col">Salary</th>
                          <th scope="col">Status</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $q = "select * from `apply` inner join `job` on `apply`.`jid`=`job`.`jid` where `apply`.`uid`='$_SESSION[user_id]'";
                          $res = mysqli_query($conn,$q);
                        if(mysqli_num_rows($res)>0)
                          {
                            while($row = mysqli_fetch_array($res)){
                              ?>
                              <tr>
                                <th scope="row"><?php echo $row['jname'];?></th>
                                <td><?php echo $row['jdescription'];?></td>
                                <td><?php echo $row['jvacancy'];?></td>
                                <td><?php echo $row['soft_skills'];?></td>
                                <td><?php echo $row['hard_skills'];?></td>
                                <td><?php echo $row['jsalary'];?></td>
                                <td><?php echo $row['astatus'];?></td>
                                <td><a href="deleteapply.php?x=<?php echo$row['aid'];?>"class="btn btn-dark">Delete</a></td>
                              </tr>
                              <?php
                            }
                          }
                        else
                          {
                            ?>
                            <tr>
                              <th scope="row" colspan="8">No Record Found..!!</th>
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