<?php
    require "../connection/connection.php";
    
    if(isset($_GET['did'])){
        $id = $_GET['did'];
        $query = "DELETE FROM designer WHERE did = '$id'";
        $result = mysqli_query($con,$query);
        if ($result){
            header("location:../admin/project.php?error=none");
        }
    }
    else
    {
        die ('error');
    }
?>