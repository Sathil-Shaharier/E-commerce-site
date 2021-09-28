<?php
include("../Backend_files/db_connection.php");

$Email = $_POST["Email"];
$Email_status = "Unsuessfull";
if(trim($Email == ""))
{
    echo("<br>Please Enter a Valid email");
    $url = "http://localhost/RentNow/login.php";
    head("Refresh:3",$url);
}

else
{
    $sql = "SELECT sign_up.Email
    From sign_up
    WHERE sign_up.Email = '$Email'";

    $result = mysqli_query($conn, $sql);
    $row_num = mysqli_num_rows($result);
    if($row_num == 1) 
        $Email_status = "Successful";
}
if($Email_status == "Successful")
{
    echo "<br> Your Email is correct, hold a second";
    $url = "http://localhost/RentNow/new_pw.php";
    header("Refresh: 1; URL= $url");
}
else
{
    echo "<br> Your Email isnot correct!!";
    $url = "http://localhost/RentNow/login.php";
    header("Refresh: 1; URL= $url");
}

?> 