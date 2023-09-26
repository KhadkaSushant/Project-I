<?php
if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "<script>alert('Empty booking');</script>";
    }
    else{
        echo "<script>alert('Your booking has been sent.');</script>";
    }
}
require "../connection/connection.php";
session_start();
if(!empty($_SESSION['adminloginid'])){

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Booking</title>
        <style>
            h2 {
                font-size: 20px;
                font-family: Arial, Helvetica, sans-serif;
                text-align: center;
            }
            div {
                width: 300px;
                border: 0px solid;
                padding: 0px;
                margin: 100px auto;
            }
            p {
                font-size: 20px;
                font-family: Arial, Helvetica, sans-serif;
            }
            p label {
                font-size: 20px;
                font-family: Arial, Helvetica, sans-serif;
            }
            p input {
                background-color: #ddd;
            }
            p select {
                background-color: #ddd;
            }
            button {
                width: 100%;
                height: 45px;
                background: #162938;
                border: none;
                outline: none;
                border-radius: 6px;
                cursor: pointer;
                font-size: 1em;
                color: #fff;
                font-weight: 500;
            }
            #errorblock{
                color: red;
            }
        </style>
    </head>
<body style="background-image: url(images/background.jpg);">
    <div>
        <h2>BOOK THE DESIGN</h2>
        
    <form onsubmit="return validation()" action="../authen/backendbook.php"  method="POST">
        <p>Name:<br>
        <input type="text" name="name" id="name" placeholder="Name"/><br><br>
        Email:<br>
        <input type="text" name="email" id="email" placeholder="example@gmail.com"/><br><br>
        Phone:<br>
        <input type="text" name="phone" id="phone" placeholder="Phone"/><br><br>
        Address:<br>
        <input type="text" name="address" id="address" placeholder="Address"/><br><br>
        Choose Your Design:<br>
        <select id="design" name="design">
            <option value="Select">-------Select-------</option>
            <option value="kitchen">Kitchen Design</option>
            <option value="bedroom">Bedroom Design</option>
            <option value="bathroom">Bathroom Design</option>
            <option value="living room">Living room Design</option>
        </select><br>

        Code no. of design:<br>
        <input type="text" name="code" id="code" placeholder="Code no. of design"/><br><br>
            <!-- <span id="errorblock"> -->
            
            <!-- // if(isset($_GET['error'])){
            //     if($_GET['error'] == 1){
            //         echo " Please enter Empty Field";
            //     }
            //     else{
            //         echo "Your booking has been sent.";
            //     }
            // }
             -->
        <!-- </span> -->
        <span id="error_message"></span>
        <button type="submit" id="send" name="send" value="Send">Book Now</button>
        </p>
    </form>
    <script src="js/main.js"></script>
    </div>

    <?php
}
else{
    header("location:../admin/booking.php");
}
?>
</body>
</html>