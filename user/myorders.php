<?php
require '../dbconfig/config.php';
session_start();
$user_id = $_SESSION['user'];
$querys = "SELECT * FROM users WHERE email = '$user_id'";
$query_solutions = mysqli_query($con, $querys);
while ($row = mysqli_fetch_array($query_solutions)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['Phone'];
    $address = $row['Address'];
    $picture = $row['Picture'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
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
    </style>
    </head>
<body style="background-color:#297F87">
      <div class="row">
  <img src="..\Images\sf1.png" alt="" style="width:100% ;height:100%">
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">E-shopping</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link "  href="home.php" class="nav-link"><i class="fas fa-home"></i>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link "  href="myorders"class="nav-link"><i class="fas fa-gift "></i> Orders</a>
            </li>
          <li class="nav-item">
              <a href="" class="nav-link " data-bs-toggle="modal" data-bs-target="#modalnotification"><i class="fas fa-bell"></i> Notifications</a>
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
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-right">
     <li><a href="#" class="nav-link"data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-user"></i> Your Account</a></li>
         <li><a href="cart.php" class="nav-link active"><i class="fas fa-shopping-cart"></i> Cart</a></li>
         <li><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#modalHelp"><i class="far fa-question-circle"></i> Help</a></li>
        </ul>
      </div>
    </nav>
<div class="row">
    <div class="container-fluid p-5   "   >
      <table class="table" style="background-image:url(..\Images\backgroundimages\ob1.png)">
        <thead>
          <tr>
            <th>Id</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Address</th>
            <th>Delivery Boy</th>
            <th>status</th>
          <th> Bill </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $total = 0;
          $user = $_SESSION['user'];
          $query = "SELECT * FROM buy WHERE userid = '$user'";
          $query_solution = mysqli_query($con, $query);
          if ($query_solution) {
            while ($row = mysqli_fetch_array($query_solution)) {
              ?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['product_name'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['totalprice'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['DeliveryBoyName'] ?></td>
            <td><?php echo $row['status'] ?></td>
            <td><input type="submit" name="View" class="btn btn-sm btn-primary" value="View"></td>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Your Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form class="" action="" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
          <div class="d-flex align-items-start  border-bottom py-1">
             <img src="../Images/profile_images/<?php echo $picture ?>" class="img" alt="..." style="border-radius:60px;width:10rem;height:10rem">
              <div class="pl-sm-2 pl-1" id="img-section"> <b style="font-size:30px;padding-left:40px">Profile Photo</b>
                  <p style="color:red;font-size:15px;padding-left:40px">Accepted file type .png. Less than 1MB</p>
 <!-- <button class="btn" style="color:blue;"><b>Upload <i class="fas fa-upload"></i></b></button> -->
    <input type="file" class="form-control" name="Picture" value="" style="width:220px;margin-left:40px;">
    <input type="submit" name="upload" class="btn-sm btn-primary" value="Upload" style="margin-left:40px;margin-top:10px">
              </div>
          </div>
          <div class="py-2">
              <div class="row py-2">
                <input type="hidden" name="hidden_name" value="">
                  <div class="col-md-6"> <label for="firstname">Name</label> <input type="text" name="name" class="bg-light form-control" value="<?php echo $name ?>" > </div>
                  <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Address</label> <input type="text" name="address" class="bg-light form-control" value="<?php echo $address ?>" > </div>
              </div>
              <div class="row py-2">
                  <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" name="email" class="bg-light form-control" value="<?php echo $email ?>" > </div>
                  <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel" name="phone" class="bg-light form-control" value="<?php echo $phone ?>" > </div>
              </div>
      </div>
      <div class="modal-footer">
        <div class="py-4 pb-5 border-bottom"> <button type="submit" name="update" class="btn btn-primary mr-1">Save Changes</button> <button class="btn border button">Cancel</button> </div>
        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            <div> <b> Logout</b>
                <p>If you Logout your cant shop anything.</p>
            </div>
            <div class="ml-auto"> <button class="btn btn-danger">Logout</button> </div>
        </div>
        </form>
    </div>
</div>
      </div>

    </div>
  </div>
</div>
<?php
if (isset($_POST['update'])) {
  $updname = $_POST['name'];
  $updemail = $_POST['email'];
  $updphone = $_POST['phone'];
  $updaddress = $_POST['address'];
  $queryss = "UPDATE users SET name = '$updname', email = '$updemail', phone = '$updphone', address = '$updaddress' WHERE id = '$id'";
  $query_solutionss = mysqli_query($con, $queryss);
  if ($query_solutionss) {
    echo "<script>alert('Updated')</script>";
    echo "<script>window.form = 'shop.php'</script>";
  }
  else {
    echo "<script>alert('Error')</script>";
  }
}
if (isset($_POST['upload'])) {
  $image_name = $_FILES['Picture']['name'];
  $tmp_name = $_FILES['Picture']['tmp_name'];
  $folder= "../images/Profile_Images/$image_name";
  move_uploaded_file($tmp_name, "../images/Profile_Images/$image_name");

  $querysss = "UPDATE users SET Picture = '$image_name' WHERE id = '$id'";
  $query_solutionsss = mysqli_query($con, $querysss);
  if ($query_solutionsss) {
    echo "<script>alert('Updated')</script>";
    echo "<script>window.form = 'shop.php'</script>";
  }
  else {
    echo "<script>alert('Error')</script>";
  }
}
?>
<!-- Help Code -->
<!-- Modal -->
  <div class="modal fade" id="modalHelp" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header py-4">
          <h5 class="modal-title mx-auto">Write to us</h5>
          <button type="button" class="close p-0 m-0" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form md-outline">
            <i class="fas fa-user prefix"></i>
            <input type="text" id="contactForm-name1" class="form-control">
            <label for="contactForm-name1">Your name</label>
          </div>
          <div class="md-form md-outline">
            <i class="fas fa-envelope prefix"></i>
            <input type="email" id="contactForm-email1" class="form-control">
            <label for="contactForm-email1">Your email</label>
          </div>
          <div class="md-form md-outline">
            <i class="fas fa-tag prefix"></i>
            <input type="text" id="contact321" class="form-control">
            <label for="contact321">Subject</label>
          </div>
          <div class="md-form md-outline">
            <i class="fas fa-pencil-alt prefix"></i>
            <textarea type="text" id="contact81" class="md-textarea form-control" rows="4"></textarea>
            <label for="contact81">Your message</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center py-4">
          <button class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>
<!-- End Code -->
