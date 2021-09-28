<?php
include("../Backend_files/db_connection.php");

$National_ID = $_POST['National_ID'];
$User_Name = $_POST['User_Name'];
$Password = $_POST['Password'];
$login_status = "Unsuccessful";

if(trim($User_Name) == "" || trim($Password) == "" || trim($National_ID) == "")
{
  echo "Please enter a Uniqe username and a strong pasward and your National_id properly"."<br>";

  $url = "http://localhost/RentNow/login.php";
  header("Refresh: 3; URL= $url");
}

else {
  $sql = "SELECT sign_up.user_name, sign_up.password, sign_up.national_id \n"

    . "FROM sign_up\n"

    . "WHERE sign_up.user_name = '$User_Name' AND sign_up.password = '$Password' AND sign_up.national_id = $National_ID";

  $result = mysqli_query($conn, $sql);
  $row_num = mysqli_num_rows($result);
  if($row_num==1) 
	  $login_status = "successful";

}

if($login_status == "successful"){
  $url = "http://localhost/RentNow/choose.php";
  header("Refresh: 2; URL= $url");
}
else{
  echo $login_status;
  $url = "http://localhost/RentNow/login.php";
  header("Refresh: 2; URL= $url");
}


?>
