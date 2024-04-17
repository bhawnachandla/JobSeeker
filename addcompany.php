
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Register Form</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content=" Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="web/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Register form</h1>
		<?php
			if(isset($_POST['submit']))
			{
				include "connection.php";
				$coname=$_POST['coname'];
				$coaddress=$_POST['coaddress'];
				$codescription=$_POST['codescription'];
				$cophone=$_POST['cophone'];
				$coexperience=$_POST['coexperience'];
				$coemail=$_POST['coemail'];
				$copassword=$_POST['copassword'];
				$q="insert into `company`(`coname`,`coaddress`,`codescription`,`cophone`,`coexperience`,`comail`,`copassword`) values
				('$coname','$coaddress','$codescription','$cophone','$coexperience','$coemail','$copassword')";
				$res=mysqli_query($conn,$q);
				if($res)
				{
				echo"<script>alert('Company Registered.!');</script>";
				echo "<script>window.location.assign('company/');</script>";
				}
				else
				{
				echo"<script>alert('Try Again');</script>";
				}
    		}
    	?>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" placeholder="Name" required="required" name="coname"  />
					</div>
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" placeholder="Address" required="required" name="coaddress" />
					</div>
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" placeholder="Description" required="required" name="codescription" />
					</div>
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="tel" placeholder="Phone Number" required="required" name="cophone" maxlength="10" pattern="[6-9]{1}[0-9]{9}" title="Please enter The Valid Phone Number"/>
					</div>
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" placeholder="Experience" required="required" name="coexperience" />
                    </div>
                    <div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" placeholder="Email Address" required="required" name="coemail"/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Password" required="required" name="copassword"/>
					</div>
					<div class="bottom">
						<button class="btn" type="submit" name="submit">Log In</button>
					</div>
				</form>	
			</div>
		</div>
		
		<!-- copyright -->
		<div class="copyright">
			<p>©All rights reserved |  <a  target="_blank"></a></p>
		</div>
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->

</body>
</html>