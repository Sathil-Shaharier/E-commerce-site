<?php
include("../Backend_files/db_connection.php");
$F_Name = $_POST['First_Name'];
$L_Name = $_POST['Last_Name'];
$User_Name = $_POST['User_Name'];
$N_id = $_POST['National_ID'];
$P_numb = $_POST['Phone_Number'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];
//$Gender = $_POST['Gender'];
$Age = $_POST['Age'];
$Password = $_POST['Password'];

$Singin_status = "<br>Unsuccessful";


if(trim($User_Name) == "" || trim($N_id) == "" || trim($P_numb) == "" || trim($Email) == "")
{
  echo "Please enter your National id, Username, Phone Number and Your Email Properly<br>";

  $url = "http://localhost/RentNow/signup.php";
  header("Refresh: 4; URL= $url");
}

else {
  $sql1 = "INSERT INTO sign_up(sign_up.First_name, sign_up.Last_name, sign_up.user_name, sign_up.national_id, sign_up.Phone_Number,sign_up.Email, sign_up.Adreess, sign_up.Age, sign_up.password)
  VALUES ('$F_Name', '$L_Name', '$User_Name', $N_id, '$P_numb', '$Email', '$Address',$Age, '$Password')";


$sql = "SELECT sign_up.user_name, sign_up.password, sign_up.national_id 

     FROM sign_up

     WHERE sign_up.user_name = '$User_Name' AND sign_up.password = '$Password' AND sign_up.national_id = $N_id";


  $result = mysqli_query($conn, $sql1);
  $result = mysqli_query($conn, $sql);
  $row_num = mysqli_num_rows($result);
  if($row_num == 1) 
	  $Singin_status = "successful";

}

if($Singin_status == "successful")
{
  $url = "http://localhost/RentNow/login.php";
  header("Refresh: 2; URL= $url");
}
else{
  echo $Singin_status;
  $url = "http://localhost/RentNow/signup.php";
  header("Refresh: 2; URL= $url");
}
?>