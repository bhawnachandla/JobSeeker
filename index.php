<?php
    session_start();
    include 'connection.php';
	include "header.php"; 
?>
<!-- banner-bottom-wthree -->
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
                                <a href="job.php?x=20">
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
                                <a href=href="job.php?x=16">
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
                                <h3>Home Science </h3>
                                <p>(8 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="job.php?x=18">
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
    <!--//preocess-->

    <!--job -->
    <!-- <section class="banner-bottom-wthree mid py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <div class="mid-info text-center pt-3">
                    <h3 class="tittle text-center cen mb-lg-5 mb-3">
                        <span>Some Info</span>Make a Difference with Your Online Resume!</h3>
                    <p></p>
                    <div class="resume">
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                            <i class="far fa-user"></i> Create Acccount</a>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!--//job -->
    <!--job -->
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
    <!--//job -->
    <!--/candidates -->
    <!-- <section class="banner-bottom-wthree bg-light py-lg-5 py-3 text-center">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-4 py-md-4 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span>Featured Candidates</h3>
                <div class="row mt-5">
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <img src="images/team1.jpg" alt=" " class="img-fluid rounded-circle">
                                </div>
                                <div class="member-info text-center py-lg-4 py-2">
                                    <h4>name likhna</h4>

                                    <p class="my-4"> Aenean orci erat, placerat id pulvinar nec, tincidunt vel ero.</p>
                                    <div class="mt-3 team-social text-center">

                                        <ul class="social-icons text-center">
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="mx-3">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <img src="images/team2.jpg" alt=" " class="img-fluid rounded-circle">
                                </div>
                                <div class="member-info text-center py-lg-4 py-2">
                                    <h4>Janet Levine</h4>

                                    <p class="my-4">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros..

                                    </p>
                                    <div class="mt-3 team-social text-center">

                                        <ul class="social-icons text-center">


                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="mx-3">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <img src="images/team3.jpg" alt=" " class="img-fluid rounded-circle">
                                </div>
                                <div class="member-info text-center py-lg-4 py-2">
                                    <h4>Rene Rickman</h4>

                                    <p class="my-4">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros..

                                    </p>
                                    <div class="mt-3 team-social text-center">

                                        <ul class="social-icons text-center">


                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="mx-3">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <img src="images/team4.jpg" alt=" " class="img-fluid rounded-circle">
                                </div>
                                <div class="member-info text-center py-lg-4 py-2">
                                    <h4>Daniele Norwich</h4>
                                    <p class="my-4">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros..
                                    </p>
                                    <div class="mt-3 team-social text-center">

                                        <ul class="social-icons text-center">


                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="mx-3">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!--/candidates -->
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
    <!--//job -->
    <!--/mobile-app -->
    <!--clients-->
    <!-- <section class="clents-slide py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span> What Clients Say?</h3>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mt-5">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>convallis felis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                            <h5>Davidson</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team4.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team3.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Janet Levine</h5>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                            <h5>Mercurio</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team2.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team1.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Rene Rickman</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>convallis felis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                            <h5>Mark Jackman</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team1.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team2.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Convallis</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Daniele</h5>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                            <h5>Mercurio</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team3.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team4.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Melissa Hoffman</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>convallis felis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                            <h5>Melissa Hoffman</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team4.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team3.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Convallis</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Daniele </h5>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                            <h5>Thomas Muller</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team2.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team1.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Mark Jackman</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="fas fa-long-arrow-alt-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>

                    </a>

                </div>
            </div>
        </div>
    </section> -->
    <!--//clients-->
<?php
	include "footer.php";
?>