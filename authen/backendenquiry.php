<?php
    require "../connection/connection.php";
    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        if(!empty($name) && !empty($email) && !empty($phone) && !empty($message)){
            //$date = date("Y-m-d");
            $query = "INSERT INTO client (name,email,phone,message) VALUES('$name','$email','$phone','$message')";
            $result = mysqli_query($con,$query);
            if($result){
                header("location:../admin/Contact.php?error=false");
            }
            else{
                header("location:../admin/Contact.php?error=1");
            }
        }
        else{
            header("location:../admin/Contact.php?error=1");
        }
    }
    else{
        die('error');
    }
?>