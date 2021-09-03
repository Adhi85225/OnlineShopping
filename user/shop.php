<?php
require "../dbconfig/config.php";
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
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" href="../CSS/style.css?v=1.1"> -->
  <style>
  .modalnot{
    width: 250px;
    height: 3250px;
    border-radius: 0px;
    float: center
  }
  .btn-check{
    background-color: #4CAF50;
     display: inline-block;
  }

  </style>
</head>
<body style="background-color:#297F87">
  <div class="row">

      <img src="..\Images\sf1.png" alt="" style="width:100% ;height:100%">

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
          <a class="nav-link "  href="home.php" class="nav-link"><i class="fas fa-home"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="shop.php">Shop</a>

        </li>
        <li class="nav-item">
          <a class="nav-link "  href="myorders.php"class="nav-link"><i class="fas fa-gift "></i> Orders</a>
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

      </ul>
    </div>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-right">
 <li><a href="#" class="nav-link"data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-user"></i> Your Account</a></li>
     <li><a href="cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart</a></li>
     <li><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#modalHelp"><i class="far fa-question-circle"></i> Help</a></li>
    </ul>
  </div>
</nav>

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

<!--
<div class="wrapper bg-white mt-sm-5">
    <h4 class="pb-4 border-bottom">Account settings</h4>
    <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
        <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
            <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
        </div>
    </div>
    <div class="py-2">
        <div class="row py-2">
            <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" class="bg-light form-control" placeholder="Steve"> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" class="bg-light form-control" placeholder="Smith"> </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" class="bg-light form-control" placeholder="steve_@email.com"> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel" class="bg-light form-control" placeholder="+1 213-548-6015"> </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6"> <label for="country">Country</label> <select name="country" id="country" class="bg-light">
                    <option value="india" selected>India</option>
                    <option value="usa">USA</option>
                    <option value="uk">UK</option>
                    <option value="uae">UAE</option>
                </select> </div>
            <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="language">Language</label>
                <div class="arrow"> <select name="language" id="language" class="bg-light">
                        <option value="english" selected>English</option>
                        <option value="english_us">English (United States)</option>
                        <option value="enguk">English UK</option>
                        <option value="arab">Arabic</option>
                    </select> </div>
            </div>
        </div>
        <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button">Cancel</button> </div>
        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            <div> <b>Deactivate your account</b>
                <p>Details about your company account and password</p>
            </div>
            <div class="ml-auto"> <button class="btn danger">Deactivate</button> </div>
        </div>
    </div>
</div>-->

  <!-- End Code -->



<div class="container-fluid mt-3">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/d1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/d2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/d3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/d4.png" class="d-block w-100" alt="...">
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
<div class="row">
   <div class="col-md-2  p-2 m-2"  style="width:200px">
     <nav class="nav nav-pills flex-column" style="background-color:white" >

       <li class="nav-item" >
   <a class="nav-link active" aria-current="page" href="shop.php?category=All" style="font-style:italic;font-weight:bold;">All</a><hr>
 </li>
 <li class="nav-item bg-light">
   <a class="nav-link " aria-current="page" href="shop.php?category=Electronics"style="font-style:italic;font-weight:bold;">Electronics</a><hr>
 </li>
 <li class="nav-item">
   <a class="nav-link" aria-current="page" href="shop.php?category=Clothes"style="font-style:italic;font-weight:bold;">Clothes</a><hr>
 </li>
 <li class="nav-item dropdown">
   <a class="nav-link"  aria-current="page" href="shop.php?category=Toys"style="font-style:italic;font-weight:bold;" >Toys</a><hr>

 </li>

 <li class="nav-item dropdown">
   <a class="nav-link" aria-current="page" href="shop.php?category=Sports"style="font-style:italic;font-weight:bold;">Sports & Fitness</a><hr>

 </li>
 <li class="nav-item dropdown">
   <a class="nav-link" aria-current="page" href="shop.php?category=Vehicle" style="font-style:italic;font-weight:bold;">Vehicle Accessories </a><hr>

 </li>
 <li class="nav-item">
   <a class="nav-link"  aria-current="page" href="shop.php?category=Home"style="font-style:italic;font-weight:bold;">Home Appliances</a><hr>
 </li>
 <li class="nav-item dropdown">
   <a class="nav-link" href="ureports.php" role="button" style="font-style:italic;font-weight:bold;">Report</a><hr>

 </li>
 <li class="nav-item dropdown">
   <a class="nav-link " aria-current="page" href="help.php" role="button" style="font-style:italic;font-weight:bold;">Help</a><hr>
 </li>


     </nav>
   </div>
   <div class="col-md-10">
     <?php
     if(isset($_GET['category'])){
       $item = $_GET['category'];
       $query = "SELECT * FROM goods WHERE goods_type = '$item'";
    ?>

       <?php if (($_GET['category'] == "Electronics") || ($_GET['category'] == "Maccessories") || ($_GET['category'] == "Cameras") || ($_GET['category'] == "Mobiles")){ ?>
         <a class="nav-link " aria-current="page" href=""</a>
       <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
  <a href="shop.php?category=Mobiles"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>

  <label class="btn btn-outline-primary" for="btnradio1" style="font-size: 30px;background-color:white ">Mobiles</label>

    <a href="shop.php?category=cameras"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
  <label class="btn btn-outline-primary" for="btnradio2"style="font-size: 30px;background-color:white ">Cameras</label>

  <a href="shop.php?category=Maccessories"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
  <label class="btn btn-outline-primary" for="btnradio3"style="font-size: 30px;background-color:white ">Maccessories</label>
</div>
       <?php }
       elseif (($_GET['category'] == "Clothes") || ($_GET['category'] == "menswear")|| ($_GET['category'] == "womenswear")) { ?>
         <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
    <a href="shop.php?category=menswear"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
    <label class="btn btn-outline-primary" for="btnradio1"style="font-size: 30px;background-color:white ">Men's wear</label>

    <a href="shop.php?category=kidswear"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
    <label class="btn btn-outline-primary" for="btnradio2"style="font-size: 30px;background-color:white ">Kid's wear</label>

<a href="shop.php?category=womenswear"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
    <label class="btn btn-outline-primary" for="btnradio3"style="font-size: 30px;background-color:white ">Women's wear</label>
  </div>
      <?php }
      elseif (($_GET['category'] == "Sports") || ($_GET['category'] == "cricket")|| ($_GET['category'] == "badminton")|| ($_GET['category'] == "Sequipments")|| ($_GET['category'] == "fitness")){ ?>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
      <a href="shop.php?category=cricketr"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
      <label class="btn btn-outline-primary" for="btnradio1"style="font-size: 30px;background-color:white ">cricket</label>

      <a href="shop.php?category=badminton"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
      <label class="btn btn-outline-primary" for="btnradio2"style="font-size: 30px;background-color:white ">badminton</label>

    <a href="shop.php?category=Sequipments"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
      <label class="btn btn-outline-primary" for="btnradio3"style="font-size: 30px;background-color:white ">Sports Equipments</label>

      <a href="shop.php?fitness"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
      <label class="btn btn-outline-primary" for="btnradio3"style="font-size: 30px;background-color:white ">fitness</label>

      <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
      <label class="btn btn-outline-primary" for="btnradio3"style="font-size: 30px;background-color:white ">fitness</label>
      </div>
      <?php }
      elseif ($_GET['category'] == "Toys") { ?>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
 </div>
     <?php }
     elseif (($_GET['category'] == "Vehicle")|| ($_GET['category'] == "helmets")|| ($_GET['category'] == "VOutfits")) { ?>
       <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
    <a href="shop.php?category=Helmets"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
    <label class="btn btn-outline-primary" for="btnradio1"style="font-size: 30px;background-color:white ">Helmets</label>

    <a href="shop.php?category=VOutfits"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
    <label class="btn btn-outline-primary" for="btnradio2"style="font-size: 30px;background-color:white ">Vehicle outfit</label>

    <a href="shop.php?category=bikeparts"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
    <label class="btn btn-outline-primary" for="btnradio3"style="font-size: 30px;background-color:white ">Vehicle Kits</label>
    </div>
    <?php }

    elseif (($_GET['category'] == "Home")|| ($_GET['category'] == "Fridge")|| ($_GET['category'] == "TV")|| ($_GET['category'] == "washingmachine")|| ($_GET['category'] == "Kequipments")) { ?>
      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
   <a href="shop.php?category=fridge"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
   <label class="btn btn-outline-primary" for="btnradio1"style="font-size: 30px;background-color:white ">Fridge</label>

   <a href="shop.php?category=tv"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
   <label class="btn btn-outline-primary" for="btnradio2"style="font-size: 30px;background-color:white ">TV</label>

   <a href="shop.php?category=washingmachine"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
   <label class="btn btn-outline-primary" for="btnradio3"style="font-size: 30px;background-color:white ">Washing Machine</label>

   <a href="shop.php?category=Kequipments"><input type="button" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked></a>
   <label class="btn btn-outline-primary" for="btnradio3"style="font-size: 30px;background-color:white ">Kitchen Equipments</label>
   </div>
 <?php } } ?>

<div class="row">
<?php
       if(isset($_GET['category'])){
         if($_GET['category'] == "All"){
           $query = "SELECT * FROM goods";
         }
         else {
           $id = $_GET['category'];
           $query = "SELECT * FROM goods WHERE goods_type = '$id'";
         }
       }
       else{
         $query = "SELECT * FROM goods";
       }

       $query_solution = mysqli_query($con, $query);
       while ($row = mysqli_fetch_array($query_solution)) {
        ?>

       <div class="col-md-3 d-flex justify-content-center mt-3">
         <div class="card" style="height: 35rem;" >
           <form class="" action="shop.php" method="post">
             <input type="hidden" name="hidden_id" value="<?php echo $row['id'] ?>">
             <input type="hidden" name="hidden_name" value="<?php echo $row['id'] ?>">
     <img src="../images/Product_Images/<?php echo $row['image'] ?>" class="card-img-top" alt="..." style="height: 20rem">
     <div class="card-body">
       <h5 class="card-title"><?php echo $row['name'] ?></h5>
       <p class="card-text">Type : <?php echo $row['goods_type'] ?></p>
       <p class="card-text">Description : <?php echo $row['description'] ?></p>
       <h3><strong><?php echo $row['price'] ?></strong></h3>
       <button type="submit" class="btn btn-outline-primary" name="button" formaction="pay.php">Buy</button>
       <input type="submit" class="btn btn-primary" name="cart" value="Add To Cart">
     </div>
     </form>
   </div>
       </div>
     <?php } ?>
     </div>
   </div> ?>
   </div>
 </div>

 <!-- <div>
 <nav class="navbar navbar-light-left bg-light">
   <div class="container-fluid">
     <a class="navbar-brand" href="#"></a>
   </div>
 </nav>
 <div class="container-fluid">
 </div>
<div>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">All</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Electronics
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="shop.php?Id=mobiles">Mobiles</a></li>
            <li><a class="dropdown-item" href="shop.php?Id=Earphones">Earphones</a></li>
            <li><a class="dropdown-item" href="shop.php?Id=camera">camera</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clothes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Mens wear</a></li>
            <li><a class="dropdown-item" href="#">Womens wear</a></li>
            <li><a class="dropdown-item" href="#">Kids wear</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Sports& Accessories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">outfits</a></li>
            <li><a class="dropdown-item" href="#">Equipment</a></li>
            <li><a class="dropdown-item" href="#">Accessories</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Vehicle & Accesories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">outfits</a></li>
            <li><a class="dropdown-item" href="#">Equipment</a></li>
            <li><a class="dropdown-item" href="#">Accessories</a></li>
          </ul>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="#">Toys</a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Home Appliances
         </a>
         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <li><a class="dropdown-item" href="#">tv</a></li>
           <li><a class="dropdown-item" href="#">Washing Machine</a></li>
           <li><a class="dropdown-item" href="#">fridge</a></li>
         </ul>
       </li>
      </ul>
    </div>
  </div>
</nav>
</div>
  </div> -->
</div>


<!-- <div class="container-fluid">
  <div class="row">
    <div class="col-2">
      <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
  <a href="shop.php?Id=mobiles"><button type="button" class="btn btn-primary">mobiles</button></a>
  <a href="shop.php?Id=toys"><button type="button" class="btn btn-primary">toys</button></a>

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Clothes
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="shop.php?Id=menswear">Men's wear</a></li>
      <li><a class="dropdown-item" href="shop.php?Id=saree">Saree</a></li>
    </ul>
  </div>
</div>
    </div>
    <div class="col-9">
      <!- Products -->
      <!-- <div class="container-fluid">
        <div class="row">
          <!--  <?php
          // if(isset($_GET['Id'])){
          //   $id = $_GET['Id'];
          //   $query = "SELECT * FROM goods WHERE goods_type = '$id'";
          // }
          // else{
          //   $query = "SELECT * FROM goods";
          // }
          //
          // $query_solution = mysqli_query($con, $query);
          // while ($row = mysqli_fetch_array($query_solution)) {
           ?>
          <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
        <img src="../images/Product_Images/<?php // echo $row['image'] ?>" class="card-img-top" alt="..." style="height: 20rem">
        <div class="card-body">
          <h5 class="card-title"><?php // echo $row['name'] ?></h5>
          <p class="card-text">Type : <?php // echo $row['goods_type'] ?></p>
          <p class="card-text">Description : <?php // echo $row['description'] ?></p>
          <h3><strong><?php // echo $row['price'] ?></strong></h3>
          <button type="button" class="btn btn-outline-primary" name="button">Buy</button>
          <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
      </div>
          </div>
        <?php //} ?>
        </div>
      </div> -->
    </div>
  </div>
</div> -->
<!-- products end -->
</div>


<div class="container-fluid">
  <div class="row" style="background-color:#515E63">
    <center><h3><strong>BACK TO TOP</strong></h3></center>
  </div>
  <div class="row" style="background-color:#2C2E43">
    <div class="col-md-4">
    <center>
      <h4>Get to know about us</h4>
      <a href="#">Contact US</a><br>
      <a href="#">Policy</a><br>
      <a href="#">About</a>
    </center>
    </div>


  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php
  if (isset($_POST['cart'])) {
    $prod_id = $_POST['hidden_id'];

    $prod_name = $_POST['hidden_name'];
    $user_id = $_SESSION['user'];

    $query = "INSERT INTO cart VALUES('','$prod_id','$user_id','$prod_name')";
    $query_solution = mysqli_query($con, $query);
    if($query_solution){
      echo "<script>alert('Added')</script>";
      echo "<script>window.location='shop.php'</script>";
    }
    else {
      echo "<script>alert('Error Occured')</script>";
    }
  }
 ?>
