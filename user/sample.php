$productid = $_SESSION['prodid'];
$price = $_SESSION['prodprice'];
$address = $_SESSION['address'];


$BookingId = $_SESSION['razorpay_order_id'];
$userid = $_SESSION['user'];
$productname = $_SESSION['prodname'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
$querys = "INSERT INTO buy VALUES ('',0,'$productid','$userid','$productname',1,'$price','$address','','','Ordered','paid')";
$query_solutions = mysqli_query($con, $querys);
if($query_solutions){
  echo "<script>alert('Sucess')</script>";
  echo "<script>window.location = 'success.php'</script>";
}
else {
  echo "<script>alert('Error')</script>";
}


$price = 0;
$productid = $_POST['hidden_id'];
$query1 = "SELECT price FROM goods WHERE id = '$productid'";
$query_solution1 = mysqli_query($con, $query1);
while ($row = mysqli_fetch_array($query_solution1)) {
  $price = (int)$row[0];
}
