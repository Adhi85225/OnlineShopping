<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> online shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css?v=1.1">
  </head>
  <body>
    <img class="img-responsive img-rounded-top" src="img/admin-new-v3.jpg" alt="AdminLTE Presentation">
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
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>

              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>

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
    <a class="nav-link active" aria-current="page" href="#">Accout</a>
  </li>
  <li class="nav-item bg-light">
    <a class="nav-link" aria-current="page" href="#">Notifications</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="#">Charts</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Account</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Details</a></li>
      <li><a class="dropdown-item" href="#">Add Admin</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Calender</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Dates</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Products</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Add</a></li>
      <li><a class="dropdown-item" href="#">Remove</a></li>
      <li><a class="dropdown-item" href="#">Edit</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Orders</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Confirmation</a></li>
      <li><a class="dropdown-item" href="#">Cancel</a></li>
      <li><a class="dropdown-item" href="#">Dispatch</a></li>
      <li><a class="dropdown-item" href="#">Pre-Orders</a></li>
      <li><a class="dropdown-item" href="#">View</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Reports</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">User Reports</a></li>
      <li><a class="dropdown-item" href="#">Order Reports</a></li>
      <li><a class="dropdown-item" href="#">Payment Reports</a></li>
      <li><a class="dropdown-item" href="#">Item Reports</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Help</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">help through call'18181818181'</a></li>
      <li><a class="dropdown-item" href="#">help through message</a></li>
      <li><a class="dropdown-item" href="#">help by questions </a></li>
    </ul>
  </li>


      </nav>
    </div>
    <div class="col-10">
      <!-- Your Code Here -->

      <!-- End Code -->
    </div>
  </div>

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
