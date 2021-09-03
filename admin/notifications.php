<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> online shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css?v=1.1">
  </head>
  <body>
    <div class="jumbotron "  style="background-color:#FFC947">
      <div class="container text-left">
        <h1>Online Shopping</h1>
        <p>Mission, Vission & Values</p>
      </div>
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                DELIVERY LOCATION
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">LOCATION 1</a></li>
                <li><a class="dropdown-item" href="#">LOCATION 2</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">ADD</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CART</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">NOTIFICATION()</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        

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
  <li class="nav-item bg-light">
    <a class="nav-link active" aria-current="page" href="Notifications.php">Notifications</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="#">Charts</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link"  href="Account.php" role="button" >Account</a>

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

  </li>
  <li class="nav-item dropdown">
    <a class="nav-link "  href="help.php" role="button" >Help</a>
  </li>


      </nav>
    </div>
    <div class="col-10">
      <!-- Your Code Here -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-auto">
            <nav class="navbar navbar-light bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="#">NOTIFICATIONS</a>
</div>
</nav>


<div class="container-fluid">
  <table class="table  table">
<thead>
<th>  Sl no.</th>
</thead>
<tbody>
<td>1</td>
<td>Iphone...11 pro </td>
  <td>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
View
</button>

  </td>
    <td><input type="button"  class="btn btn-primary " name="" value="Delete "></td>
</tbody>
</table>

</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
      <!-- End Code -->
    </div>
  </div>

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
