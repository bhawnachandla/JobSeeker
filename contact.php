<?php
	session_start();
    include 'connection.php';
	include "header.php"; 
	if(isset($_POST['submit']))
{
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-Y');
    $time = date('h:i:s a');
    $q="insert into `user_complaint`(`uid`, `subject`, `message`, `date`, `time`) values('$_SESSION[user_id]','$subject','$message','$date','$time')";
    $res=mysqli_query($conn,$q);
    if($res)
    {
      echo"<script>alert('Complaint Sent.!');</script>";
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
		<li class="breadcrumb-item active">Contact Us</li>
	</ol>
	<!-- banner-text -->
	<!-- contact -->
	<section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
		<div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
		<!---728x90--->
			<h3 class="tittle text-center mb-lg-5 mb-3">
				<span>Get Intouch</span>Contact Us</h3>
				<!---728x90--->
				<div class="container">
						<div class="address row mb-5">
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="far fa-map"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Address</h6>
										<p> California, USA
		
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="far fa-envelope"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Email</h6>
										<p>Email :
											<a href="mailto:example@email.com"> mail@example.com</a>
										</p>
									</div>
		
								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="fas fa-mobile-alt"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Phone</h6>
										<p>+1 234 567 8901</p>
		
									</div>
								</div>
							</div>
						</div>
					</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007"
						    allowfullscreen></iframe>

					</div>
					<div class="col-md-6 main_grid_contact">
						<div class="form">
							<h4 class="mb-4 text-left">Got A Complaint? Send us</h4>
							<?php
								if(isset($_SESSION['user_id'])){
									?>
									<form action="" method="post">
								<div class="form-group">
									<label class="my-2">Name</label>
									<input class="form-control" type="text" name="Name" placeholder="" required="" readonly value="<?php echo $_SESSION['user_name'];?>">
								</div>
								<div class="form-group">
									<label>Subject</label>
									<input class="form-control" type="text" name="subject" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Message</label>
									<textarea id="textarea" placeholder="" name="message"></textarea>
								</div>
								<div class="input-group1">
									<input class="form-control" type="submit" value="Submit" name="submit">
								</div>
							</form>
									<?php
								}
								else
								{
									?>
									<h3>Login First</h3>
									<?php
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //contact -->
<?php
	include "footer.php";
?>