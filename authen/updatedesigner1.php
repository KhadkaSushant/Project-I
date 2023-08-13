<?php
require "../connection/connection.php";
if(isset($_POST['update'])){
    $id = $_POST['did'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    
    if(!empty($name) && !empty($phone) && !empty($address) && !empty($description)){
    $query = "UPDATE designer SET name='$name',phone='$phone',address='$address',description='$description' WHERE did = '$id'";
    $result=mysqli_query($con,$query);
    if ($result){
        header("location:../admin/designer.php?error=2");
    }
    else{
        header("location:../admin/designer.php?error=1");
    }
}
else
{
    die ('error');
}
}

?>