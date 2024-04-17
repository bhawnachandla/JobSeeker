<?php
session_start();
 if(!isset($_SESSION['user_name'])){
    echo "<script>alert('Please login first..!');</script>";
    echo"<script>window.location.assign('login.php');</script>";
  } 
  else{
    $email=$_SESSION['user_email'];
    include 'connection.php';
    include "header1.php"; 
    ?>
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Our Mission</span>Popular Categories</h3>
                <div class="row populor_category_grids mt-5">
                    <div class="col-md-3 category_grid">
                        <div class="view view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-bullhorn"></i>
                                <h3> Multimedia</h3>
                                <p>(34 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="job.php?x=21">
                                    <img src="images/p1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view1 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-graduation-cap"></i>
                                <h3>Education</h3>
                                <p>(22 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="job.php?x=8">
                                    <img src="images/p2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 category_grid">
                        <div class="view view2 view-tenth">
                            <div class="category_text_box">
                                <i class="fab fa-accusoft"></i>
                                <h3>Acounting </h3>
                                <p>(16 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="job.php?x=16">
                                    <img src="images/p3.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view3 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-users"></i>
                                <h3>Human Resource</h3>
                                <p>(4 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="job.php?x=17">
                                    <img src="images/p4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="col-md-3 category_grid">
                        <div class="view view4 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-users"></i>
                                <h3>IT </h3>
                                <p>(8 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="job.php?x=7">
                                    <img src="images/p4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view5 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-users"></i>
                                <h3>Construction </h3>
                                <p>(6 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="job.php?x=19">
                                    <img src="images/p4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-wthree -->
    <!--/process-->
    <section class="banner-bottom-wthree pb-lg-5 pb-md-4 pb-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">
			
                    <span>Some Info</span>Latest Job flow-positions</h3>
					<!---728x90--->
                <div class="tabs mt-5">
                    <ul class="nav nav-pills my-4" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Featured Jobs</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="menu-grids mt-4">
                                <div class="row t-in">
                                    <div class="col-lg-8 text-info-sec">
                                        <?php
                                            $j = "select * from `job` inner join `company` on `job`.`coid`=`company`.`coid` limit 5";
                                            $rej = mysqli_query($conn,$j);
                                            while($rowj = mysqli_fetch_array($rej)){
                                                ?>
                                                <!--/job1-->
                                                <div class="job-post-main row">
                                                    <div class="col-md-9 job-post-info text-left">
                                                        <div class="job-post-icon">
                                                            <i class="fas fa-briefcase"></i>
                                                        </div>
                                                        <div class="job-single-sec">
                                                            <h4>
                                                                <a href="#"><?php echo $rowj['jname'];?></a>
                                                            </h4>
                                                            <p class="my-2"><?php echo $rowj['coname'];?></p>
                                                            <ul class="job-list-info d-flex">
                                                                <!-- <li>
                                                                    <i class="fas fa-briefcase"></i> Comera</li> -->
                                                                <li>
                                                                    <i class="fas fa-map-marker-alt"></i> <?php echo $rowj['coaddress'];?></li>
                                                                <li>
                                                                    <i class="fas fa-dollar-sign"></i> <?php echo $rowj['jsalary'];?></li>
                                                            </ul>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="col-md-3 job-single-time text-right">
                                                        <span class="job-time">
                                                            <i class="far fa-heart"></i> Full Time</span>
                                                    </div>
                                                    <div class="col-md-3  text-right">
                                                        <a href="apply.php" class="btn btn-primary">Apply</a>
                                                    </div>
                                                </div>
                                                <!--//job1-->
                                                <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="col-lg-4 text-info-sec">
                                        <img src="images/job-1.jpg" alt=" " class="img-fluid" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
    <div class="container">
        <div class="inner-sec-w3ls py-lg-5  py-3">
        <!---728x90--->
            <h3 class="tittle text-center mb-lg-5 mb-3">
                <span>Some Info</span>Selection Process</h3>

            <div class="mid-info text-center mt-5">
                <div class="parent-chart">
                    <div class="level lev-one top-level">
                        <div class="flow-position">
                            <img src="images/s1.jpg" alt=" " class="img-fluid rounded-circle">
                            <br>
                            <strong>Recruitment Process</strong>
                            </div>
                    </div>
                    <div class="flow-chart">
                        <div class="level lev-two last-lev">
                            <div class="flow-position">
                                <img src="images/s2.jpg" alt=" " class="img-fluid rounded-circle">
                                <br>
                                <strong>1.Job Vacancy</strong>
                                </div>
                            <!--
                        -->
                            <div class="flow-position">
                                <img src="images/s3.jpg" alt=" " class="img-fluid rounded-circle">
                                <br>
                                <strong>2. Job Analysis
                                </strong>
                                
                            </div>
                            <!--
                        -->
                            <div class="flow-position">
                                <img src="images/s4.jpg" alt=" " class="img-fluid rounded-circle">
                                <br>
                                <strong>3. Attracting Candidates
                                </strong>
                                
                            </div>
                            <!--
                        -->
                            <div class="flow-position">
                                <img src="images/s5.jpg" alt=" " class="img-fluid rounded-circle">
                                <br>
                                <strong>4.Screening </strong>
                                
                            </div>
                            <!--
                        -->
                            <div class="flow-position">
                                <img src="images/s6.jpg" alt=" " class="img-fluid rounded-circle">
                                <br>
                                <strong>5.Interviewing Candidates
                                </strong>
                                
                            </div>
                            <!--
                        -->
                            <div class="flow-position">
                                <img src="images/s7.jpg" alt=" " class="img-fluid rounded-circle">
                                <br>
                                <strong>6.Selecting</strong>
                                
                            </div>
                            <!--
                        -->
                            <div class="flow-position">
                                <img src="images/s8.jpg" alt=" " class="img-fluid rounded-circle">
                                <br>
                                <strong>7.Employee Evaluation
                                </strong>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
    <section class="banner-bottom-wthree bg-light py-lg-5 py-3 text-center">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-4 py-md-4 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span>Featured companies</h3>
                <div class="row mt-5">
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                                <div class="card-body">
                                    <div class="member-img">
                                        <img src="mypics/pvr.png" alt=" " class="img-fluid rounded-circle" style="height: 233px;">
                                    </div>
                                </div>
                                    
                        </div>
                    </div>
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <img src="mypics/greens.jpg" alt=" " class="img-fluid rounded-circle" style="height: 233px;">
                                </div>
                                    </div>
                                </div>
                    </div>
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <img src="mypics/mega.png" alt=" " class="img-fluid rounded-circle" style="height: 233px;">
                                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <img src="mypics/opax.jpg" alt=" " class="img-fluid rounded-circle" style="height: 233px;">
                                </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </section>

    <!--/stats-->
    <section class="banner-bottom-wthree bg-dark dotts py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle cen text-center mb-lg-5 mb-3">
                    <span>Some Info</span> Our Stats</h3>
                <div class="stats row mt-5">
                    <div class="col-md-3 stats_left counter_grid text-center">

                        <p class="counter">145</p>
                        <h4>Jobs Posted</h4>
                    </div>
                    <div class="col-md-3 stats_left counter_grid1 text-center">

                        <p class="counter">105</p>
                        <h4>Jobs Filled</h4>
                    </div>
                    <div class="col-md-3 stats_left counter_grid2 text-center">

                        <p class="counter">403</p>
                        <h4>Companies</h4>
                    </div>
                    <div class="col-md-3 stats_left counter_grid3 text-center">

                        <p class="counter">945</p>
                        <h4>Members</h4>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//stats-->

    <!--job -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span> Quick Career Tips</h3>
                <div class="row mt-5">

                    <div class="card-deck">
                        <div class="card">
                            <img src="images/g1.jpg" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <p class="card-text">use every job as an oppurtunity to learn something new and keep on open mind. </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/g2.jpg" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <p class="card-text">for your bussiness,device a plan that includes all necessary detail like business entity,licensing,location and marketing.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 5 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/g3.jpg" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <p class="card-text">Every person you meet is a potential door to a new oppurtunity-personally or professionaly.Staying current on technology and industry trends gives you an advantage.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    include 'footer.php';
  }