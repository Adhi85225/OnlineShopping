<?php
require '../dbconfig/config.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> online shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css?v=1.1">
  </head>
  <body style="background-color:#white">
    <div class="row">

        <img src="..\Images\backgroundimages\sb2.png" alt="" style="width:100% ;height:100%">

      </div>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Online Shopping</a>
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
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </li>
          </ul>

        </div>

      </div>
    </nav>

<div class="container-fluid">
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
    <a class="nav-link " aria-current="page" href="index.php">Dashboard</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link"  href="accounts.php" role="button" >Account</a>

  </li
  <li class="nav-item dropdown">
    <a class="nav-link"  href="deliverydetails.php" role="button" >Delivery Details</a>

  </li>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link" href="products.php" role="button" >Products</a>

  </li>
  <li class="nav-item dropdown">
    <a class="nav-link" href="orders.php" role="button" >Orders</a>

  </li>
  <li class="nav-item dropdown">
    <a class="nav-link  active"  href="reports.php" role="button">Reports</a>

  </li>



      </nav>
    </div>
    <div class="col-10">
      <!-- Your Code Here -->
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">REPORTS</a>
    </div>
    </nav>


<div class="container-fluid">
  <?php
  $query = "SELECT * FROM report";
  $query_solution = mysqli_query($con, $query);
  if ($query_solution) {
    while ($row = mysqli_fetch_array($query_solution)) {
      ?>
<div class="row">
  <h5>Sl : <?php echo $row['id'] ?></h5><br>
  <h5>Name : <?php echo $row['name'] ?></h5><br>
  <h5>Message : </h5><p><?php echo $row['message'] ?></p>
  <hr>
</div>
<?php
}
}
?>
</div>
  </div>

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
