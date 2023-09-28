<!DOCTYPE html>
<html>
    <head>
        <title>Layout Design</title>    
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    
<body background="images/background.jpg">
    
    <header>
        <img src="images/logo.png" width="150" height="100"/>
        <nav class="navigation">
                <a href="index.php">Home</a>
                <a href="service.html">Services</a>
                <a href="About.html">About Us</a>
                <a href="Contact.php">Contact Us</a>
                <a href="Blog.html">Blog</a>
                <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

        <div class="button">
            <h1>Khadka Designs</h1>
         <h2 id="myHeader">Decorate Your Home <br>Where You Live</h2>
        
         <a href="service.html">See Some Designs <i class="fa-solid fa-arrow-right fa-shake fa-xl" style="color: #c3c6d1;"></i></a>
        </div>
        <div class="wrapper">
            <span class="icon-close">
                <ion-icon name="close-outline"></ion-icon>
            </span>
            <div class="form-box login">
                <h2>Login</h2>
                <form action="connect.php" onsubmit="return validate()" method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="text" id="email" name="email">
                        <label>Email</label>
                        <div class="error"></div>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" id="password" name="password">
                        <label>Password</label>
                        <div class="error"></div>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn" value="login" name="login">Login</button>
                    <div class="login-register">
                        <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>
            
            <div class="form-box register">
                <h2>Registration</h2>
                <form action="dbconnection.php" onsubmit="return validate() method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" id="username" name="username">
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="text" id="email" name="email">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></ion-icon></span>
                        <input type="password" id="password" name="password">
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the terms & conditions</label>
                       
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
        
       

      <script src="js/script.js"></script>
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>  
</body>
</html>