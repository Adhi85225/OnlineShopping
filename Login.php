<?php
require "dbconfig\config.php";
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <style>
    .login-wrapper{
      font-style:;
      font-weight:Bold;
      background-color: white;);
      background-repeat: no-repeat;
      background-size:stretch;
    }
    .header-wrapper{
      background-size:stretch;

    }
}

    </style>
  </head>
  <body class="logins-wrapper" style="background-color:#03989e" >
<div class="container-fluid header-wrapper" style="width:100%;height:100;">

    <img src="Images\sf1.png" alt="" style="width:100%;height:100%;" >

  </div>


<!-- Header Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" style="background:#6E828A">
    <a class="navbar-brand" href="#">ONline shopping</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-0 mb-0 mb-lg-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="font-weight:normal ">Login </a>
        </li>
    </div>
  </div>
</nav>


<!-- Body -->

</style>
<div class="container-fluid " >
<div class="container border  login-wrapper py-3 m-8" style="width:60%"  >
  <form class="" action="login.php" method="post" >


    <center>
      <h3 class="login-header" style="font-style:Bold" >Login </h3>
      <hr>

    </center>
<center>
  <div class="row pt-5">
    <div class="col-auto">
      <label class="form-label" id="labelInput" placeholder="name@example.com" for="" style="width:150px">Enter Email</label>
    </div>
    <div class="col-3">
      <input class="form-control" type="email" name="email" value="">
    </div>
  </div>

  <div class="row my-3">
    <div class="col-auto">
      <label class="form-label"id="labelpassword" placeholder="password" for=""style=width:150px>Enter password</label>
</div>
<div class="col-3">
  <input class="form-control" type="password" name="password" value="">
</div>
</div>
<p>Don't have account? <a href="signup.php">Click here</a></p>
<input  class="btn-sm btn-primary" type="submit" name=" login" value="Login">

</div>
</center>
</div>

  </form>

  </body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<?php
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $query="select *  from users where email='$email' and password='$password' ";
  $query_solution=mysqli_query($con,$query);
  if(mysqli_num_rows($query_solution)>0)
  {
    while ($row = mysqli_fetch_array($query_solution)) {
      $_SESSION['address'] = $row['Address'];
    }
    $_SESSION['user'] = $email;
    echo "<script>window.location='user/home.php'</script>";
  }
  else {

    echo "<script>alert('user not found try to signup')</script>";
      echo "<script>window.location='signup.php'</script>";
  }
}

 ?>
