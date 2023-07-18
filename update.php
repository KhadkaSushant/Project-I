<?php
if (isset($_POST['update'])) {  
    //echo "<pre>";  
    //print_r($_POST);
    $id=$_POST['id'];  
    $name=$_POST['name'];  
    $email=$_POST['email'];  
    $mnumber=$_POST['phone'];  
    if (isset($_GET['id'])) {  
         $update=mysqli_query($conn,"UPDATE `client` SET `name`='$name',`email`='$email',`phone`='$phone'WHERE id=$id");  
         if ($update) {  
              header("location:save.php");  
              die();  
         } 
        }
    } 
?>