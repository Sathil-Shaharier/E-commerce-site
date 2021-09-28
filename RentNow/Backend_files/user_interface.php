<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>RentNow-User-Interface</title>
  <link href="https://fonts.googleapis.com/css?family=Fira+Mono" rel="stylesheet"><link rel="stylesheet" href="./user_interface.css">

</head>
<body>
<!-- partial:index.partial.html -->
<nav class="menu">
  <ol>
  <li class="menu-item"><a href="http://localhost/RentNow/choose.php">Home</a></li>
    <li class="menu-item"><a href="#0">About</a></li>
    <li class="menu-item">
      <a href="#0">Product</a>
      <ol class="sub-menu">
      <li class="menu-item"><a href="http://localhost/RentNow/car_premium.php">Car Premium</a></li>
        <li class="menu-item"><a href="http://localhost/RentNow/car_normal.php">Car Normal</a></li>
        <li class="menu-item"><a href="http://localhost/RentNow/bike_premium.php">Bike Premium</a></li>
        <li class="menu-item"><a href="http://localhost/RentNow/bike_normal.php">Bike Normal</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="http://localhost/RentNow/checkout.php">Checkout</a>
    </li>
    <li class="menu-item"><a href="#0">Contact</a></li>
  </ol>
</nav>
<div class="show_area">
<?php
include("../Backend_files/db_connection.php");

$sql = "SELECT * FROM bike_normal";
$result = mysqli_query($conn, $sql);


echo "<br> ALL bike normals are:";
echo"<br> Product Id || National ID || Phone number || Model || Bike condition || Rent cost || Availability<br>";
while($row = mysqli_fetch_row($result))
{
    echo $row[0]." || ";
    echo $row[0]." || ";
    echo $row[1]." || ";
    echo $row[2]." || ";
    echo $row[3]." || ";
    echo $row[4]." || ";
    echo $row[5]." || ";
    echo $row[6]." || "."<br>";
}


$sql = "SELECT * FROM bike_premium";
$result = mysqli_query($conn, $sql);
echo "<br> ALL bike premiums are:";
echo"<br> Product Id || National ID || Phone number || Model || Bike condition || Rent cost || Availability<br>";
while($row = mysqli_fetch_row($result))
{
    echo $row[0]." || ";
    echo $row[1]." || ";
    echo $row[2]." || ";
    echo $row[3]." || ";
    echo $row[4]." || ";
    echo $row[5]." || ";
    echo $row[6]." || "."<br>";
}

$sql = "SELECT * FROM car_normal";
$result = mysqli_query($conn, $sql);
echo "<br> ALL car normals are:";
echo"<br> Product Id || National ID || Phone number || Model || Bike condition || Rent cost || Availability<br>";
while($row = mysqli_fetch_row($result))
{
    echo $row[0]." || ";
    echo $row[0]." || ";
    echo $row[1]." || ";
    echo $row[2]." || ";
    echo $row[3]." || ";
    echo $row[4]." || ";
    echo $row[5]." || ";
    echo $row[6]." || "."<br>";
}

$sql = "SELECT * FROM car_premium";
$result = mysqli_query($conn, $sql);
echo "<br> ALL car premiums are:";
echo"<br> Product Id || National ID || Phone number || Model || Bike condition || Rent cost || Availability<br>";
while($row = mysqli_fetch_row($result))
{
    echo $row[0]." || ";
    echo $row[0]." || ";
    echo $row[1]." || ";
    echo $row[2]." || ";
    echo $row[3]." || ";
    echo $row[4]." || ";
    echo $row[5]." || ";
    echo $row[6]." || "."<br>";
}
?>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
