<?php
require "../dbconfig/config.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> online shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

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
    <a class="nav-link"  href="accounts.php" role="button" aria-expanded="false">Account</a>

  </li>

  <li class="nav-item dropdown">
    <a class="nav-link"  href="deliverydetails.php" role="button" >Delivery Details</a>

  </li>
  <li class="nav-item dropdown">
    <a class="nav-link active"  href="products.php" role="button">Products</a>

  </li>
  <li class="nav-item">
    <a class="nav-link" href="orders.php" role="button" >Orders</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link" href="reports.php" role="button" >Reports</a>

  </li>



      </nav>
    </div>

<div class="col-md-10 mt-4">
  <div class="container-fluid">
    <center>
    <h2 style="font-family:serif">Products</h2>
  </center>
    <div class="row">
      <div class="col-auto">


      </div>
      <div class="col-auto" style="float:right">

      </div>
    </div>
  </div>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Product
</button><br>
<div class="mt-5">
  <table class="table mt-5" id="myTable">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>Image</th>
        <th>Type</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM goods";
      $query_solution = mysqli_query($con, $query);
      if ($query_solution) {
        while ($row = mysqli_fetch_array($query_solution)) {
          ?>
      <tr>
        <form class="" action="" method="post">
        <input type="hidden" name="prodid" value="<?php echo $row['id'] ?>">
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['image'] ?></td>
        <td><?php echo $row['goods_type'] ?></td>
        <td><?php echo $row['description'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><input type="submit" class="btn btn-sm btn-danger" name="remove" value="Remove"></td>
        </form>
      </tr>
      <?php
    }
  }
   ?>
    </tbody>
  </table>
</div>

</div>


  </div>


</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">PRODUCT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="" method="post" enctype="multipart/form-data">
      <div class="modal-body">

        <div class="container p-3">
          <center>Add Products</center>
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="Name" value="" required>
          <label for="" class="form-label">Product Type</label>
          <select class="form-control" name="Type">
              <option value="All">All</option>
            <option value="Mobiles">Mobiles</option>
              <option value="camera">cameras</option>
                <option value="Maccessories">Maccessories</option>
              <option value="electronics">electronics</option>
                <option value="menswear">menswear</option>
                  <option value="womenswear">womenswear</option>
                    <option value="kidswear">kidswear</option>
            <option value="clothes">clothes</option>
            <option value="sports">sports</option>
              <option value="cricket">cricket</option>
                <option value="badminton">badminton</option>
                  <option value="outfits">outfits</option>
                    <option value="Sequipments">Sequipments</option>
                      <option value="fitness">fitness</option>
            <option value="toys">toys</option>
              <option value="vehicle">vehicle</option>
                <option value="helmets">Helmets</option>
                  <option value="VOutfits">VOutfits</option>
                    <option value="bikeparts">bikeparts</option>
                <option value="appliances">appliances</option>
                  <option value="fridge">fridge</option>
                    <option value="tv">tv</option>
                      <option value="washingmachine">washingmachine</option>
                        <option value="Kequipments">Kequipments</option>
          </select>
          <label for="" class="form-label">Description</label>
          <input type="text" class="form-control" name="Description" value="" required>
          <label for="" class="form-label">Picture</label>
          <input type="file" class="form-control" name="Picture" value="" required>
          <label for="" class="form-label">Price</label>
          <input type="text" class="form-control" name="Price" value="" required>
        </div>

      </div>
      <div class="modal-footer" style="background-color:#FFC947">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="Add" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">PRODUCTS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="container p-3">
          <center>Remove Products</center>
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="Name" value="" required>
          <label for="" class="form-label">Product Type</label>
          <select class="form-control" name="Type">
              <option value="All">All</option>
            <option value="Mobiles">Mobiles</option>
              <option value="camera">cameras</option>
                <option value="Maccessories">Maccessories</option>
              <option value="electronics">electronics</option>
                <option value="menswear">menswear</option>
                  <option value="womenswear">womenswear</option>
                    <option value="kidswear">kidswear</option>
            <option value="clothes">clothes</option>
            <option value="sports">sports</option>
              <option value="cricket">cricket</option>
                <option value="badminton">badminton</option>
                  <option value="outfits">outfits</option>
                    <option value="Sequipments">Sequipments</option>
                      <option value="fitness">fitness</option>
            <option value="toys">toys</option>
              <option value="vehicle">vehicle</option>
                <option value="helmets">Helmets</option>
                  <option value="VOutfits">VOutfits</option>
                    <option value="bikeparts">bikeparts</option>
                <option value="appliances">appliances</option>
                  <option value="fridge">fridge</option>
                    <option value="tv">tv</option>
                      <option value="washingmachine">washingmachine</option>
                        <option value="Kequipments">Kequipments</option>
          </select>
          <label for="" class="form-label">Description</label>
          <input type="text" class="form-control" name="Description" value="" required>
          <label for="" class="form-label">Picture</label>
          <input type="file" class="form-control" name="Picture" value="" required>
          <label for="" class="form-label">Price</label>
          <input type="text" class="form-control" name="Price" value="" required>
        </div>

      </div>
      <div class="modal-footer" style="background-color:#FFC947">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="Remove" class="btn btn-primary">Remove</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">PRODUCT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="" method="post" enctype="multipart/form-data">
      <div class="modal-body">

        <div class="container p-3">
          <center>Modify Products</center>
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="Name" value="" required>
          <label for="" class="form-label">Product Type</label>
          <select class="form-control" name="Type">
              <option value="All">All</option>
            <option value="Mobiles">Mobiles</option>
              <option value="camera">cameras</option>
                <option value="Maccessories">Maccessories</option>
              <option value="electronics">electronics</option>
                <option value="menswear">menswear</option>
                  <option value="womenswear">womenswear</option>
                    <option value="kidswear">kidswear</option>
            <option value="clothes">clothes</option>
            <option value="sports">sports</option>
              <option value="cricket">cricket</option>
                <option value="badminton">badminton</option>
                  <option value="outfits">outfits</option>
                    <option value="Sequipments">Sequipments</option>
                      <option value="fitness">fitness</option>
            <option value="toys">toys</option>
              <option value="vehicle">vehicle</option>
                <option value="helmets">Helmets</option>
                  <option value="VOutfits">VOutfits</option>
                    <option value="bikeparts">bikeparts</option>
                <option value="appliances">appliances</option>
                  <option value="fridge">fridge</option>
                    <option value="tv">tv</option>
                      <option value="washingmachine">washingmachine</option>
                        <option value="Kequipments">Kequipments</option>
          </select>
          <label for="" class="form-label">Description</label>
          <input type="text" class="form-control" name="Description" value="" required>
          <label for="" class="form-label">Picture</label>
          <input type="file" class="form-control" name="Picture" value="" required>
          <label for="" class="form-label">Price</label>
          <input type="text" class="form-control" name="Price" value="" required>
        </div>

      </div>
      <div class="modal-footer" style="background-color:#FFC947">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="Add" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

  <!-- End Code -->

<?php
  if (isset($_POST['Add'])) {
    $name = $_POST['Name'];
    $type = $_POST['Type'];
    $description = $_POST['Description'];
    $price = $_POST['Price'];

    $image_name = $_FILES['Picture']['name'];
  	$tmp_name = $_FILES['Picture']['tmp_name'];
  	$folder= "../images/Product_Images/$image_name";
  	move_uploaded_file($tmp_name, "../images/Product_Images/$image_name");

    $query = "INSERT INTO goods VALUES('','$name','$type','$description','$price','$image_name')";
    $query_solution = mysqli_query($con, $query);
    if ($query_solution) {
      echo "<script>alert('Item Added')</script>";
    }
    else {
      echo "<script>alert('Error Occured')</script>";
    }
  }

  if (isset($_POST['remove'])) {
    $admid = $_POST['prodid'];
    $query = "DELETE FROM goods WHERE id = '$admid'";
    $query_solution = mysqli_query($con, $query);
    if ($query_solution) {
      echo "<script>alert('Done')</script>";
      echo "<script>window.location = 'products.php'</script>";
    }
    else {
      echo "<script>alert('Error')</script>";
    }
  }
 ?>
<script type="text/javascript">
$(document).ready( function () {
   $('#myTable').DataTable();
} );
</script>
