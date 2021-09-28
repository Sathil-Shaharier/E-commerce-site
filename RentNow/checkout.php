<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="checkout.css">
        <link rel="icon" type="png/gif" href="img/key.png">
        <title>RentNow-Checkout</title>
    </head>
    <body>
         <section class="signup_area">
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
         <div class="container">
                  <h2 class="h1">Checkout</h2>
                  <hr class="hr1" color=gray>
                  <form action="Backend_files/signup_backend.php" method="post">
                      <div class="First_Name"><input type="text" name="Product_id" placeholder="Product_id"></div>
                      <div class="Last_Name"><input type="text" name="National_id" placeholder="National ID"></div>
                      <div class="National_ID"><input type="text" name="Phone_number" placeholder="Phone Number"></div>
                      <div class="Phone_Number"><input type="text" name="Email" placeholder="Email"></div>
                      <div class="Address"><input type="text" name="Adress" placeholder="Adress"></div>
                      <div class="Age"><input type="text" name="Postal_code" placeholder="Postal Code"></div>
                      <div class="Email"><input type="text" name="Username" placeholder="Username"></div>
                      
                      <div class="btn">
                          <button class="B1" type="submit" onclick="window.location.href='http://localhost/RentNow/owner_interface.php';" value="Submit">Submit</button>
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
                <li>Email:Support.authority@org</li>
                <li>Contact no: 01748541038</li>
            </ul> 
        </div>
        <br>
        
    </footer>
</html>