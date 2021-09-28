<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="icon" type="png/gif" href="img/key.png">
        <title>RentNow-Login</title>
    </head>
    <body>
         <header class="header">
              <img class="img1" src="img/Rent_now.png" alt="Rent_now">
         </header>
         <section class="login_area">
             <div class="container">
                  <h2 class="h1">Log In</h2>
                  <hr class="hr1" color=gray>
                  <form action="Backend_files/login_backend.php" method="post">
                      <div class="National_ID"><input type="text"name = "National_ID" placeholder="National ID"></div>
                      <div class="User_Name"><input type="text"name="User_Name" placeholder="User Name"></div>
                      <div class="Password"><input type="text" name ="Password" placeholder="Password"></div>
                      <div class="btn">
                          <button class="B1" type="submit" onclick="window.location.href='http://localhost/RentNow/choose.php';" value="Log In">Log In</button>
                      </div>
                      <div> 
                          <p class="p1">Do you have an account? <a class="a1" href="C:\xampp\htdocs\RentNow\login.php">Login</a></p> 
                      </div>
                      <div> 
                          <p class="p2"><a class="a1" href="http://localhost/RentNow/forgotten_pw.php">Forgot Password</a></p> 
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