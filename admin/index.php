<?php
require '../dbconfig/config.php';

$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);
$usercount = mysqli_num_rows($result);

$query = "SELECT * FROM buy WHERE status = 'Confirmed'";
$result = mysqli_query($con, $query);
$ordercount = mysqli_num_rows($result);

$query = "SELECT * FROM buy WHERE status = 'Delivered'";
$result = mysqli_query($con, $query);
$delivercount = mysqli_num_rows($result);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> online shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css?v=1.1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  .modalnot{
    width: 250px;
    height: 3250px;
    border-radius: 0px;
    float: center
  }
  .jumbotron{
    height:120px;
    margin-bottom: 10px;
  }
  </style>
  </head>
  <body style="background-color:#white">
    <div class="row">

        <img src="..\Images\backgroundimages\sb2.png" alt="" style="width:100% ;height:100%">

      </div>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Online-Shopping</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"class="nav-link"><i class="fas fa-home"></i>Admin</a>
            </li>

            <li class="nav-item">
              <a class="nav-link "  href="../delivery/deliveryhome.php "class="nav-link"></i> Delivery </a>
            </li>


            <li class="nav-item">
              <a
              <!-- Modal -->
              <div class="modal fade " id="modalnotification" data-bs-backdrop="modalnotification" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="border-radius:500px">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body " >
                      <center>
                      <div class="col-auto pt-3">
                        <h3>Push Notifications</h3>
                        <p style="font-size:100px;" class="text-primary"><i class="fas fa-bell"></i></p>
                        <input type="textarea" class="form-control" rows="5" name="" value=""><br>
                        <input type="button" class="btn btn-primary my-4" name="" value="Got it" data-bs-dismiss="modal" style="width:180px;border-radius:20px;">
                        <a href="#"></a>
                      </div>
                    </center>
                    </div>
                  </div>
                </div>
              </div>


            </li>
            <li>
              <form class="d-flex">
               
              </form>
            </li>
          </ul>

        </div>

      </div>
    </nav>



</div>
</div>
<div class="container-fluid" style="background-image:url(.\Images\backgroundimages\a10.jpg)">
  <div class="row">
    <!-- <div class="col-3">
      <div class="d-flex flex-column flex-shrink-0 p-3 text-black bg-primaey" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-black text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-black">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-black">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-black">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-black">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Customers
        </a>
      </li>
    </ul>
    <hr>
  </div>
    </div> -->
    <div class="col-md-2">
      <nav class="nav nav-pills flex-column">

        <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="">Dashboard</a>
  </li>


  <li class="nav-item dropdown">
    <a class="nav-link"  href="account.php" role="button" >Account</a>

  </li>

  <li class="nav-item dropdown">
    <a class="nav-link"  href="deliverydetails.php" role="button" >Delivery Details</a>

  </li>
  <li class="nav-item dropdown">
    <a class="nav-link"  href="products.php" role="button">Products</a>

  </li>
  <li class="nav-item">
    <a class="nav-link" href="orders.php" role="button" >Orders</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link" href="reports.php" role="button" >Reports</a>




      </nav>
    </div>
    <div class="col-10">
      <div class="row g-2" style="height:5rem">
        <div class="col-md border bg-primary">
          <p style="color:white;font-family:Serif" class="pt-5 ps-4"><strong>Orders <?php echo $ordercount ?></strong></p>
        </div>
        <div class="col-md border bg-success">
          <p style="color:white;font-family:Serif" class="pt-5 ps-4"><strong>User Registrations <?php echo $usercount ?></strong></p>
        </div>
        <div class="col-md border bg-warning">
          <p style="color:white;font-family:Serif" class="pt-5 ps-4"><strong>Delivered <?php echo $delivercount ?></strong></p>
        </div>
        <div class="col-md border bg-danger">
          <p style="color:white;font-family:Serif" class="pt-5 ps-4"><strong>Free Visitors</strong></p>
        </div>


        <div class="container-fluid mt-2"style="height:45%; ">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" >
          <div class="carousel-inner">
            <div class="carousel-item active"style="height:350px">
              <img src="../images/backgroundimages/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../images/backgroundimages/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../images/backgroundimages/bg11.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="carouselExampleSlidesOnly" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually"></span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="carouselExampleSlidesOnly" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually"></span>
         </button>
        </div>


           </div>
      </div>
    </div>
  </div>


</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
