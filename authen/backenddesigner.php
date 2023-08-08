<?php
    require "../connection/connection.php";
    if(isset($_POST['add'])){
        $id = $_POST['did'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $description = $_POST['description'];
        
        $added_on = $_POST['added_on'];
        if(!empty($name) && !empty($phone) && !empty($address) && !empty($description)){
            
            $query = "INSERT INTO `designer`(`did`, `name`, `phone`, `address`, `description`) VALUES ('$id','$name','$phone','$address','$description')";
            $result = mysqli_query($con,$query);
            if($result){
                header("location:../admin/designer.php?error=false");
            }
            else{
                header("location:../admin/designer.php?error=1");
            }
        }
        else{
            header("location:../admin/designer.php?error=1");
        }
    }
    else{
        die('error');
    }
?>