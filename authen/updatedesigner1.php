<?php
require "../connection/connection.php";
if(isset($_POST['update'])){
    $id = $_POST['did'];
    $name = $_POST['name'];
    $end_date = $_POST['phone'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    
    
    $query = "UPDATE `designer` SET `project_name`='$name',`phone`='$phone',`address`='$address',`description`='$description'";
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

?>