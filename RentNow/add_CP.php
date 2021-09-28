<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="add_CP.css">
        <link rel="icon" type="png/gif" href="img/key.png">
        <title>RentNow-Add_CP</title>
    </head>
    <body>
         <section class="signup_area">
             <div class="container">
                  <h2 class="h1">Add Car Premium</h2>
                  <hr class="hr1" color=gray>
                  <form action="http://localhost/RentNow/Backend_files/add_CP_backend.php" method="post">
                      <div class="Product_id"><input type="text" name ="Product_id" placeholder="Product_id"></div>
                      <div class="National"><input type="text" name ="National_id" placeholder="National ID"></div>
                      <div class="Phone_number"><input type="text" name ="Phone_number" placeholder="Phone Number"></div>
                      <div class="Model"><input type="text" name ="Model" placeholder="Model"></div>
                      <div class="Car_condition"><input type="text" name ="Car_condition" placeholder="Car Condition"></div>
                      <div class="Rent_Cost"><input type="text" name ="Rent_Cost" placeholder="Rent Cost"></div>
                      <div class="Availability"><input type="text" name ="Availability_" placeholder="Availability"></div>
                      <div class="Seat"><input type="text" name ="Seat" placeholder="Seat"></div>
                      <div class="btn">
                          <button class="B1" type="submit" onclick="window.location.href='http://localhost/RentNow/choose.php';" value="Submit">Submit</button>
                      </div>
                      
                  </form>

             </div>

         </section>
    </body>

    <footer class="footer">
        <div id="container">
            <ul class="ul1">
                <li>Menu</li>
                <li>Privacy Policy</li>
                <li>Cookie Policy</li>
                <li>Purchasing Policy</li>
                <li>Terms & Condition</li>
            </ul>
            <ul class="ul2">
                <li>Contact Us</li>
                <li>Email: Support.authority@org</li>
                <li>Contact no: 01748541038</li>
            </ul> 
        </div>
        <br>
        
    </footer>
</html>