<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Job Seekers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Job Seekers a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/zoomslider.css" rel='stylesheet' type='text/css' />
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>

<body>
    <!-- banner-inner -->
    <div id="demo-1" data-zs-src='["./images/1.jpg", "./images/2.jpg","./images/3.jpg", "./images/4.jpg"]' data-zs-overlay="dots">
        <div class="demo-inner-content">
            <div class="header-top">
                <header>
                    <div class="top-head ml-lg-auto text-center">
                        <div class="row">

                            <div class="col-md-4">
                                <span>Welcome Back!</span>
                            </div>
                            <?php
                                if(isset($_SESSION['user_id']))
                                {
                                    ?>
                                    <div class="col-md-3 sign-btn">
                                        <a href="account.php">
                                        <i class="far fa-user"></i> My Account</a>
                                    </div>
                                    <div class="col-md-3 sign-btn">
                                        <a href="logout.php">
                                        <i class="fas fa-lock"></i> Logout</a>
                                    </div>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <div class="col-md-3 sign-btn">
                                        <a href="./login.php" >
                                        <i class="fas fa-lock"></i> Sign In</a>
                                    </div>
                                    <div class="col-md-3 sign-btn">
                                        <a href="./register.php">
                                        <i class="far fa-user"></i> Register</a>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo">
                        <h1>
                                <a class="navbar-brand" href="index.php">
                                    <i class="fab fa-codepen"></i> JOB SEEKERS</a>
                            </h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars"></i>
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Jobs
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php
                                            $c = "select * from `category`";
                                            $rec = mysqli_query($conn,$c);
                                            while($rowc = mysqli_fetch_array($rec))
                                            {
                                                ?>
                                                    <a class="dropdown-item" href="job.php?x=<?php echo $rowc['cid'];?>"><?php echo $rowc['cname'];?></a>
                                                <?php
                                            }
                                        ?>                                        
                                    </div>
                                </li>
                                <li class="nav-item"></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Companies
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="company/company_login.php">Sign In</a>
                                        <a class="dropdown-item" href="addcompany.php">Create An Account</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </header>
            </div>
            <!--/banner-info-w3layouts-->
            <div class="banner-info-w3layouts text-center">

                <h3>
                    <span>Find the Right Job</span> .
                    <span>Right Now.</span>
                </h3>
                <p>Your job search starts and ends with us.</p>
            </div>
            <!--//banner-info-w3layouts-->
        </div>
    </div>
    <!-- banner-text -->