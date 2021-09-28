<?php

include("../Backend_files/db_connection.php");

$Product_id = $_POST['Product_id'];
$National_id = $_POST['National_id'];
$Phone_number = $_POST['Phone_number'];
$Model = $_POST['Model'];
$Car_condition =$_POST ['Car_condition'];
$Rent_Cost =$_POST ['Rent_Cost'];
$Availability =$_POST ['Availability_'];
$Seat =$_POST ['Seat'];

$add_cp_status = "Unsuccessful";

if(trim($National_id) == "" || trim($Product_id) == "" || trim($Phone_number) == "")
{
    echo "Please enter your National id, Username and Your Email Properly<br>";
    $url = "http://localhost/RentNow/add_option.php";
    header("Refresh: 4; URL= $url");
}

else
 {
    $sql1 = "INSERT INTO car_premium(car_premium.Product_id, car_premium.National_id, car_premium.Phone_number, car_premium.Model, car_premium.Car_condition, car_premium.Rent_cost, car_premium.Availability, car_premium.Seat
             VALUES($Product_id, $National_id, '$Phone_number', '$Model', '$Car_condition', '$Rent_Cost', '$Availability', $Seat)
              ";
  
  echo $add_cp_status;
  $sql = "SELECT car_premium.Product_id, car_premium.Model, car_premium.National_id 
  
       FROM car_premium
  
       WHERE car_premium.Product_id = '$Product_id' AND car_premium.Model = '$Model' AND car_premium.National_id = $National_id";
  
  
    //$result = mysqli_query($conn, $sql1);
    $result = mysqli_query($conn, $sql);
    $row_num = mysqli_num_rows($result);
    if($row_num == 1) {
        $add_cp_status = "successful";
        echo $add_cp_status;
    }
 }
  
if($add_cp_status == "successful")
{
    echo $add_cp_status;
    echo "<br>Successfully";
    $url = "http://localhost/RentNow/choose.php";
   // header("Refresh: 2; URL= $url");
}
else
{
    echo $add_cp_status;
    $url = "http://localhost/RentNow/add_option.php";
    //header("Refresh: 2; URL= $url");
}
?>