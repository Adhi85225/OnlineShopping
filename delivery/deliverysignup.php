<?php
session_start();
require "../dbconfig/config.php" ?>

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
              <a class="nav-link active" aria-current="page" href="deliverylogin.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="deliverysignup.php">Signup</a>
            </li>
        </div>
      </div>
    </nav>

    <!-- Body -->
    <div class="container border signup-wrapper py-3" >
      <form class="" action="deliverysignup.php" method="POST" >
        <center>
          <h3 class="signup-header">signup</h3>
        </center>

        <div class="row pt-3">
          <div class="col-auto">
            <label class="form-label" for="">name</label>
          </div>
          <div class="col-3">
            <input class="form-control" type="text" id="name" name="name" value="" required>
          </div>
        </div>

        <div class="row pt-3">
          <div class="col-auto">
            <label class="form-label" for=""> Email</label>
          </div>
          <div class="col-3">
            <input class="form-control" type="email" name="email" value="" required>
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-auto">
            <label class="form-label" for="">Address</label>
          </div>
          <div class="col-3">
            <input class="form-control" type="text" id="address" name="address" value="" required>
          </div>
        </div>
      <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel" name="phone" class="bg-light form-control" </div>
      <div class="row pt-3">
        <div class="col-auto">
          <label class="form-label" for=""> Image</label>
        </div>
        <div class="col-3">
          <input class="form-control" type="file" name="Image" value="" required>
        </div>
      </div>



        <div class="row my-3">
          <div class="col-auto">
            <label class="form-label" for=""> password</label>
      </div>
      <div class="col-3">
        <input class="form-control" type="password" name="password" value="" required>
      </div>
      </div>

      <input  class="btn-sm btn-primary" type="submit" name="signed" value="signup">
      <input  class="btn-sm btn-primary" type="button" name="" value="exit">
      </form>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<?php
if(isset($_POST['signed'])) {


  $name=$_POST['name'];
  $email=$_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $Address = $_POST['address'];
  $image_name = $_FILES['Image']['name'];
  $tmp_name = $_FILES['Image']['tmp_name'];
  $folder= "Images/deliveryboyimages/$image_name";
  move_uploaded_file($tmp_name, "Images/deliveryboyimages/$image_name");

  $query="select * from deliveryboy where email='$email'";
  $query_solution=mysqli_query($con,$query);
  try{
    if(mysqli_num_rows($query_solution)>0){
      echo "<script> windows.location.href='deliverysignup.php' </script>";
      echo "<script> alert('user already exist')</script>";
    }
    else{
      $querys="insert into deliveryboy values('','$name','$email','$phone','$Address','$image_name','$password')";
      $query_solutions=mysqli_query($con,$querys);
      if($query_solutions){
        echo "<script> alert('user created')</script>";
        echo "<script> window.location = 'deliverylogin.php'</script>";
      }
      else{
        echo "<script> alert('error occurred')</script>";
      }
    }

  }
  catch(Exception $e){
    echo "message".$e->getMessage();
  }

}
 ?>
