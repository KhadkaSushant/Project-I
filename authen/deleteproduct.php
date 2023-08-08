<?php
    require "../connection/connection.php";
    
    if(isset($_GET['pid'])){
        $id = $_GET['pid'];
        $query = "DELETE FROM project WHERE pid = '$id'";
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