<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="new_pw.css">
        <link rel="icon" type="png/gif" href="img/key.png">
        <title>RentNow-New-PW</title>
    </head>
    <body>
         <header class="header">
              <img class="img1" src="img/Rent_now.png" alt="Rent_now">
         </header>
         <section class="login_area">
             <div class="container">
                  <h2 class="h1">Forgot Password</h2>
                  <hr class="hr1" color=gray>
                  <form action="Backend_files/login_backend.php" method="post">
                      <div class="nw_pw"><input type="text" placeholder="New Password"></div>
                      <div class="confirm_pw"><input type="text" placeholder="Confirm Password"></div>
                      <div class="btn">
                          <button class="B1" type="submit" onclick="window.location.href='http://localhost/RentNow/login.php';" value="Submit">Submit</button>
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