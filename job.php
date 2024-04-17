<?php
    session_start();
    include 'connection.php';
	include("header.php"); 
?>
<!-- plans -->
<section class="banner-bottom-wthree bg-light py-lg-5 py-3">
        <div class="container">
		<!---728x90--->
            <div class="inner-sec-w3ls py-md-5 py-3">
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Select</span>Job</h3>
                <div class="card-deck text-center row ">
                    <?php
                        $id = $_GET['x'];
                        $q = "select * from `job` inner join `company` on `job`.`coid`=`company`.`coid` where `job`.`cid`='$id'";
                        $res = mysqli_query($conn,$q);
                        if(mysqli_num_rows($res)>0)
                        {
                            while($row = mysqli_fetch_array($res))
                            {
                                ?>
                                <div class="price-info-grid col-lg-4">
                                    <div class="price-inner">
                                        <div class="price-header">
                                            <h4><?php echo $row['jname'];?></h4>
                                        </div>
                                        <div class="price-body">
                                            <h5 class="pricing-title text-left">
                                                <span class="dolor">&#8377;</span> <?php echo $row['jsalary'];?>

                                            </h5>
                                            <h5 class="pricing-title text-left">
                                                <span class="dolor">Company: </span> <?php echo $row['coname'];?>

                                            </h5>
                                            <p class="p-dis text-left my-4"><span style="color: #2529d8;">Description</span> <?php echo $row['jdescription'];?></p>
                                            <p class="p-dis text-left my-4"><span style="color: #2529d8;">Hard Skills</span> <?php echo $row['hard_skills'];?></p>
                                            <p class="p-dis text-left my-4"><span style="color: #2529d8;">Soft Skills</span> <?php echo $row['soft_skills'];?></p>
                                            <p class="p-dis text-left my-4"><span style="color: #2529d8;">Vacancy</span> <?php echo $row['jvacancy'];?></p>
                                            <a href="apply.php?x=<?php echo $row['jid'];?>" class="btn btn-block btn-outline-primary py-2">
                                                <i class="far fa-user"></i>Apply Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- //plans2 -->
<?php
	include "footer.php";
?>