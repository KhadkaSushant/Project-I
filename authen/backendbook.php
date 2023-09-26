<?php
    require "../connection/connection.php";
    if(isset($_POST['send'])){
        //$id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $design = $_POST['design'];
        $code = $_POST['code'];
        
        if(!empty($name) && !empty($email) && !empty($phone) && !empty($address) && !empty($design) && !empty($code)){
            //$date = date("Y-m-d");
            $query = "INSERT INTO booking (name,email,phone,address,design,code) VALUES('$name','$email','$phone','$address','$design','$code')";
            $result = mysqli_query($con,$query);
            if($result){
                header("location:../admin/booking.php?error=false");
            }
            else{
                header("location:../admin/booking.php?error=1");
            }
        }
        else{
            header("location:../admin/booking.php?error=1");
        }
    }
    else{
        die('error');
    }
?>