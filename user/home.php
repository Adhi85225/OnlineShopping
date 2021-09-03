<?php
require "../dbconfig/config.php";
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
  <style>
  .modalnot{
    width: 250px;
    height: 3250px;
    border-radius: 0px;
    float: center
  }

  }
  </style>
</head>
<body style="background-color:#297F87">
  <div class="row">

      <img src="..\Images\sf1.png" alt="" style="width:100% ;height:100%">

    </div>



<nav class="navbar navbar-expand-lg navbar-light bg-">
  <div class="container-fluid"style="background:#FF6B6B">
    <a class="navbar-brand" href="#">Online-shopping</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-0 mb-lg-2">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="user/home.p"class="nav-link"><i class="fas fa-home"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">Shop </a>




    </div>

</nav>

<div class="container-fluid mt-2"style=" left:20px; width:80%">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
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

 <div class="container-fluid mt-2"style=" left:20px; width:80%">
   <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" >
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="../images/backgroundimages/1.jpg" class="d-block w-100" alt="...">
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
  <div class="container">
  <h2>  <a href="shop.php" style="color:white">Shop Now </a> </h2>
  </div>

<!--
<div class="container mt-3">
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
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="visually"></span>
 </button>
 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="visually-"></span>
 </button>
</div>
</div>
<hr>
<div class="container">
  <div class="row ">

    <!-- Item Display -->
<!--
<?php
  $query = "SELECT * FROM goods";
  $query_solution = mysqli_query($con, $query);
  while ($row = mysqli_fetch_array($query_solution)) {
    ?>

    <div class="col-md-3  py-2 d-flex justify-content-center">
      <div class="card" style="width: 20rem;">
  <img src="../images/Product_Images/<?php echo $row['image'] ?>" class="card-img-top" alt="..." style="height: 20rem">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name'] ?></h5>
    <p class="card-text">Type : <?php echo $row['goods_type'] ?></p>
    <p class="card-text">Description : <?php echo $row['description'] ?></p>
    <h3><strong><?php echo $row['price'] ?></strong></h3>
    <button type="button" class="btn btn-outline-primary" name="button">Buy</button>
    <a href="#" class="btn btn-primary">Add To Cart</a>
  </div>
</div>
    </div>

    <?php
    }
    ?>


<div class="container mt-3">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/ad1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/ad2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/ad3.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>

<?php
  $query = "SELECT * FROM goods";
  $query_solution = mysqli_query($con, $query);
  while ($row = mysqli_fetch_array($query_solution)) {
    ?>

    <div class="col-md-4  py-2 d-flex justify-content-center">
      <div class="card" style="width: 20rem;">
  <img src="../images/Product_Images/<?php echo $row['image'] ?>" class="card-img-top" alt="..." style="height: 20rem">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name'] ?></h5>
    <p class="card-text">Type : <?php echo $row['goods_type'] ?></p>
    <p class="card-text">Description : <?php echo $row['description'] ?></p>
    <h3><strong><?php echo $row['price'] ?></strong></h3>
    <button type="button" class="btn btn-outline-primary" name="button">Buy</button>
    <a href="#" class="btn btn-primary">Add To Cart</a>
  </div>
</div>
    </div>

    <?php
    }
    ?>







  </div>
</div>
</div>
</div>




</nav>
Hello
<?php require 'footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>



</html>
