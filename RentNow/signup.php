<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="signup.css">
        <link rel="icon" type="png/gif" href="img/key.png">
        <title>RentNow-SignUp</title>
    </head>
    <body>
         <header class="header">
              <img class="img1" src="img/Rent_now.png" alt="Rent_now">
         </header>
         <section class="signup_area">
             <div class="container">
                  <h2 class="h1">Sign up</h2>
                  <hr class="hr1" color=gray>
                  <form action="http://localhost/RentNow/Backend_files/signup_backend.php" method="post">
                      <div class="First_Name"><input type="text" name ="First_Name" placeholder="First Name"></div>
                      <div class="Last_Name"><input type="text"name = "Last_Name" placeholder="Last Name"></div>
                      <div class="National_ID"><input type="text" name = "National_ID" placeholder="National ID"></div>
                      <div class="Phone_Number"><input type="text"name = "Phone_Number" placeholder="Phone Number"></div>
                      <div class="Address"><input type="text" name = "Address" placeholder="Address"></div>
                      <div class="Age"><input type="text" name = "Age"placeholder="Age"></div>
                      <div class="Gender"><select class="select1">
                                <option value="Gender">Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                      </select></div>
                      <div class="Email"><input type="text" name ="Email" placeholder="Email"></div>
                      <div class="User_Name"><input type="text" name = "User_Name" placeholder="User Name"></div>
                      <div class="Password"><input type="text"name = "Password" placeholder="Password"></div>
                      <div class="btn">
                          <button class="B1" type="submit" onclick="window.location.href='http://localhost/RentNow/login.php';" value="Sign Up">Sign Up</button>
                      </div>
                      <div> 
                          <p class="p1">Do you have an account? <a class="a1" href="login.php">Login</a></p> 
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