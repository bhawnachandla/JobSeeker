<?php
// session_start();
include 'connection.php';
include "header.php";
?>
<section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
    <div class="container">
        <div class="login px-4 mx-auto mw-100">
            <h5 class="text-center mb-4">Register Now</h5>
            <form action="./login register db.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name</label>

                    <input type="text" class="form-control" id="validationDefault01" placeholder="" required="" name="uname">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="" required="" name="uemail">
                </div>

                <div class="form-group">
                    <label class="mb-2">Password</label>
                    <input type="password" class="form-control" id="password1" placeholder="" required="" name="upassword">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="password2" placeholder="" required="">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" required="" name="uaddress"></textarea>
                </div>
                <div class="form-group">
                    <label class="mb-2">Contact</label>
                    <input type="number" class="form-control" placeholder="" required="" name="ucontact">
                </div>
                <div class="form-group">
                    <label class="mb-2">Qualification</label>
                    <textarea class="form-control" required="" name="uqualification"></textarea>
                </div>
                <div class="form-group">
                    <label class="mb-2">Experience</label>
                    <textarea class="form-control" required="" name="uexperience"></textarea>
                </div>
                <button type="submit" class="btn btn-primary submit mb-4" name="register">Register</button>
                <p class="text-center pb-4">
                    <a href="./login.php">By clicking Register, I agree to your terms</a>
                </p>
            </form>

        </div>
    </div>
</section>
<?php
include "footer.php";
?>