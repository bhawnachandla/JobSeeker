<?php
  include "connection.php";
  include "header1.php";
?>
<div class="row">
  <div class="col-md-12 text-center"><h1>Login </h1></div>
</div>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-6">
    <form action="admin_login.php"method="post"> 
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required="required">  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required="required">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>
</div>
<?php
  include "footer.php";
?>