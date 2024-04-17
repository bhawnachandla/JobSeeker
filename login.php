<?php
// session_start();
include 'connection.php';
include "header.php";
?>
<section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
    <div class="container">
        <div class="login px-4 mx-auto mw-100">
            <h5 class="text-center mb-4">Login Now</h5>
            <form action="./login register db.php" method="post">
                <div class="form-group">
                    <label class="mb-2">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="" name="uemail">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label class="mb-2">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="" name="upassword">
                </div>
                <button type="submit" class="btn btn-primary submit mb-4" name="login">Sign In</button>
                <p class="text-center pb-4">
                    <a href="./register.php"> Don't have an account?</a>
                </p>
            </form>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>