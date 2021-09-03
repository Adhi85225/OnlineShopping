<?php
require "..\dbconfig\config.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css?v=1.1">
  </head>
  <body style="background-color:#white">
    <div class="row">
        <img src="..\Images\backgroundimages\sb2.png" alt="" style="width:100% ;height:100%">
      </div>
<!-- Header Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ONline shopping</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">home
          <ion-icon name="home-outline"></ion-icon>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script></a>
        </li>
    </div>
  </div>
</nav>
<!-- Body -->
<div class="container border login-wrapper py-3" >
  <form class="" action="login.php" method="post" >
    <center>
      <h3 class="login-header">Login</h3>
    </center>
  <div class="row pt-3">
    <div class="col-auto">
      <label class="form-label" for="">Enter Email</label>
    </div>
    <div class="col-3">
      <input class="form-control" type="email" name="email" value="">
    </div>
  </div>
  <div class="row my-3">
    <div class="col-auto">
      <label class="form-label" for="">Enter password</label>
</div>
<div class="col-3">
  <input class="form-control" type="password" name="password" value="">
</div>
</div>
<p>Don't have account? <a href="signup.php">Click here</a></p>
<input  class="btn-sm btn-primary" type="submit" name=" login" value="Login">
<ion-icon name="log-in-outline"></ion-icon>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script></a>
  </form>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<?php
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $query="select *  from admin where email='$email' and password='$password' ";
  $query_solution=mysqli_query($con,$query);
  if(mysqli_fetch_array($query_solution)>0)
  {
    echo "<script>window.location='admin/index.php'</script>";
  }
  else {
    echo "<script>alert('user not found ')</script>";
  }
}
 ?>
