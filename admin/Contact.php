<?php
if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "<script>alert('Error sending message please try again later');</script>";
    }
    else{
        echo "<script>alert('Your Message has been sent. The Interior designer contact you later via phone or email.');</script>";
    }
}
require "../connection/connection.php";
session_start();
if(!empty($_SESSION['adminloginid'])){

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Layout Design</title>
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    
<body style="background-color: #ddd;">
    
    <header>
        <img src="images/logo.png" width="150" height="100"/>
        <nav class="navigation">
                <a href="index.php">Home</a>
                <a href="service.html">Services</a>
                <a href="About.html">About Us</a>
                <a href="Contact.php">Contact Us</a>
                <a href="Blog.html">Blog</a>               
        </nav>
    </header>
    
    <section id="contact">
       
        <div class="contact_form">
            <div class="banner">
                <h2>GET IN AND TOUCH WITH US</h2>
                <div id="error_message"></div>
                <form action="../authen/backendenquiry.php" onsubmit="return validate()" method="POST">
                    Name <sup style="color:red">*</sup><br>
                    <input type="text" name="name" id="name" placeholder="Name"/><br><br>
                    Email <sup style="color:red">*</sup><br>
                    <input type="text" name="email" id="email" placeholder="example@gmail.com" required/><br><br>
                    Phone <sup style="color:red">*</sup><br>
                    <input type="text" name="phone" id="phone" placeholder="Phone"/><br><br>
                    Message<br>
                    <textarea name="message" id="message" rows="5" placeholder="Write Your Message"></textarea><br><br>
                    <button type="submit" value="submit" id="submit" class="btn" name="submit">Submit</button>
        
                    
                </form>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2392.0635205317635!2d85.27807707216326!3d27.69684577937111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb193390243733%3A0x9e5e2c47e5ba79d2!2sGaurav%20Event!5e0!3m2!1sen!2snp!4v1686558804568!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    
    

    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>S.M Designs</h4>
                    <ul>
                        <li><a href="About.html">About Us</a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="Blog.html">Blog</a></li>
                        <li><a href="Contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Find Us</h4>
                    <ul>
                        <li>Syuchatar-10, Kathmandu,</li>
                        <li>Nepal</li>
                        <li>Phone:</li>
                        <li>+977 9869723777</li>
                        <li>+977 9843764245</li>
                        <li>Email:</li>
                        <li><a href="#">khadkasushant313@gmail.com</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
   </footer>
   <?php
}
else{
    header("location:../admin/Contact.php");
}
?>
    
  <script src="js/script.js"></script>
</body>
</html>
 